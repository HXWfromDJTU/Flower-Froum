$.upload = function(that) {
	//支持chrome IE10
	if(window.FileReader) {
		var file = that.files[0];
		//console.log(file)
		filename = file.name;
		var reader = new FileReader();
		reader.readAsDataURL(file);
		reader.onload = function() {
				/*this.result输出的是图片的base64编码*/
				/*console.log(this.result)*/
				/*调用ajax方法向数据库插入图片*/
				$.appendImg(that, this.result);
				/*console.log(filename);*/
				/*alert(this.result);*/
			}
			//reader.readAsText(file);
	}
	//支持IE 7 8 9 10
	else if(typeof window.ActiveXObject != 'undefined') {
		var xmlDoc;
		xmlDoc = new ActiveXObject("Microsoft.XMLDOM");
		xmlDoc.async = false;
		xmlDoc.load(input.value);
		alert(xmlDoc.xml);
	}
	//支持FF
	else if(document.implementation && document.implementation.createDocument) {
		var xmlDoc;
		xmlDoc = document.implementation.createDocument("", "", null);
		xmlDoc.async = false;
		xmlDoc.load(input.value);
		alert(xmlDoc.xml);
	} else {
		alert('error');
	}
}

$(function() {

	/*imgArr为存放上传图片base64码的字符串数组*/
	var imgArr = [];
	$.appendImg = function(that, base64) {
		if($('.img-box-container .img-box').length < maxImgNum) {
			/*拼接图片框*/
			var tempStr = "";
			tempStr += '<div class="img-box" onclick="$.deleteImg(this)">';
			tempStr += '<img src="' + base64 + '"/></div>';
			$(".img-box-container").prepend(tempStr);
			tempStr = "";
		}
		if($('.img-box-container .img-box').length >= maxImgNum) {
			//console.log(that);
			$('#upload-img').remove();
		}
		imgArr.push(base64);
		console.log("增加后，imgArr里面有" + imgArr.length + "张图片");
	}
	$.deleteImg = function(that) {
			$.confirm("你确定要移除这张图片吗", "", function() {
				/*删除指定的图片预览框*/
				imgArr.removeByValue(that.childNodes[0].src)
				that.remove();
				console.log("删除后，imgArr里面有" + imgArr.length + "张图片");
				if($('.img-box-container .img-box').length == (maxImgNum - 1)) {
					var tempStr = "";
					tempStr += '<div id="upload-img" class="img-box-plus" onclick="$.uploadTrigger()">';
					tempStr += '<img src="__IMG__/plus.jpg"/></div>';
					$(".img-box-container").append(tempStr);
					tempStr = "";
				}
			}, function() {
				return;
			})
		}
		/*绑定第一个plus按钮的添加事件*/
	$('#upload-img').on('click', function() {
		return $("#input-img").click();
	});
	/*绑定后来自定生成的plus按钮的添加事件*/
	$.uploadTrigger = function() {
		return $("#input-img").click();
	}
	$('#post-btn').on('click', function() {
		if(($("#input-title").val() != "") && ($("#textarea").val() != "") && ($("#video-source").val() != "") && (imgArr.length != 0)) {
			$.postMedia($("#textarea").val(), imgArr, mediaType, $("#input-title").val(), $("#video-source").val());
		} else {
			$.toast("未填写完整")
		}

	});

})