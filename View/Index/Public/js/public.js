(function ($) {
	$.commonAjax = function(options, calback) {
		/*默认配置参数*/
		var _default = {
			type: 'GET',
			data: {},
			dataType: 'json',
			contentType: 'application/x-www-form-urlencoded',
			async: true,
			load: "",
			callBack: ""
		};
		options = $.extend(_default, options);

		if(options.type.toUpperCase() == 'GET' && options.data) {
			var arr = [];
			for(var key in options.data) {
				if(options.data[key] != "") {
					arr.push(key + '=' + encodeURIComponent(options.data[key]));
				} else {
					arr.push(key + '=' + options.data[key]);
				}
			}
			options.data = arr.join("&");
		}
		if(options.type.toUpperCase() == 'POST' && options.data) {
			options.data = JSON.stringify(options.data)
			options.contentType = 'application/json';
		}

		$.ajax({
			type: options.type,
			/* url: $.baseUrl + options.url,*/
			url: options.url,
			contentType: options.contentType,
			data: options.data,
			dataType: options.dataType,
			async: options.async,
			callBack: options.callBack,
			timeout: 120000,
			headers: {
				/*此处的sessionID可用于校验用户登录与否*/
				/* sessionId: localStorage.getItem("sessionID")*/
			},
			beforeSend: function() {
				/*在提交任何ajaxj申请之前都应该使用js校验用户是否处于登录状态*/
			},
			success: function(data, a, b) {
				/*var data = $.parseJSON(data);*/
				console.log(data);
			},
			error: function(xhr, type, error) {
				$.alert(error);
			},
			complete: function() {
				//请求完成后调用的回调函数（请求成功或失败时均调用）
			}
		});
	};
	
	
	/*给所有数组对象增加一个通过指定值去删除对应元素的方法*/
	Array.prototype.removeByValue = function(val) {
			for(var i = 0; i < this.length; i++) {
				if(this[i] == val) {
					this.splice(i, 1);
					break;
				}
			}
	}
	 $.getQueryString = function (name) {
        var reg = new RegExp("(^|&|\|)" + name + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r != null){
        	return decodeURIComponent(r[2]);
        } else{
        	return "";
        }
    };
}(Zepto))