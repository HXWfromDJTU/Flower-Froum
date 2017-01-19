<?php if (!defined('THINK_PATH')) exit();?><html>

	

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>花艺</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
		<link rel="shortcut icon" href="/hyltxt/View/Index/Public/img/icon.jpg">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta content="yes" name="apple-touch-fullscreen">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" href="/hyltxt/View/Index/Public/css/light7.css">
		<link rel="stylesheet" href="/hyltxt/View/Index/Public/css/light7-swiper.css">
		<link rel="stylesheet" href="/hyltxt/View/Index/Public/css/light7-swipeout.css">
		<link rel="apple-touch-icon" href="../../../assets/img/apple-touch-icon-114x114.png">
		<link rel="stylesheet" href="/hyltxt/View/Index/Public/css/font_1433748561_0232708.css">
		<link rel="stylesheet" href="/hyltxt/View/Index/Public/css/app.css">
		<style>
			/*header背景色调*/
			
			.bar {
				background-color: rgba(50, 205, 50, 0.8);
			}
			
			.bar-tab .tab-item {
				color: #000000;
			}
			/*媒体操作div样式*/
			
			.card-action {
				display: inline-block;
				float: right;
			}
			
			.card-action span {
				margin: 0 0.5rem;
			}
			
			.user-msg {
				display: inline-block;
			}
			
			.user-msg img {
				width: 2.0rem;
				height: 2.0rem;
			}
			
			.facebook-date span {
				margin: 0 0.5rem;
			}
		</style>
	</head>

	<body>
		<div class="page page-home" id="page-list">
			<header class="bar bar-nav">
				<a class="icon icon-left pull-left back"></a>
				<h1 class="title">视频</h1>
			</header>
			<div id="videoContainer" class="content">
				<!--<div class="card facebook-card pb-standalone-video">
					<div class="card-content">
						<a href="#" class="pb-standalone-video">
							<img src="/hyltxt/View/Index/Public/img/list-img(3).jpg" width="100%">
						</a>
					</div>
					<div class="card-header no-border">
						<div class="user-msg">
							<div class="facebook-avatar"><img src="/hyltxt/View/Index/Public/img/icon.jpg"></div>
							<div class="facebook-name">花艺师April教你打理后花园</div>
							<div class="facebook-date"><span>April<span><span>Mon 3:47pm</span></div>
						</div>
						<div class="card-action">
							<span class="icon icon-gift"></span>
							<span class="icon icon-star"></span>
						</div>
					</div>
				</div>-->
			</div>
		</div>

		<!--底部弹出的actionsheet-->

		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/zepto.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7-swiper.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7-swipeout.js' charset='utf-8'></script>
		<script src="/hyltxt/View/Index/Public/js/app.js"></script>

		<script src="/hyltxt/View/Index/Public/js/public.js"></script>
		<script src="/hyltxt/View/Index/Public/js/video.js"></script>
		<script>
			var videoSourceArr=[];
			var captionArr=[];
			$.searchToVideo = function() {
				if(sessionStorage.getItem("videoID")!=null){
					return $('#' + sessionStorage.getItem("videoID") + '').click();
				}
			}
			/*此处发觉只有增加定时器才能够正常触发这个模拟点击事件*/
			var t=setTimeout($.searchToVideo,500);
			
			
			
			$.loadVideo = function() {
				$.ajax({
					type: "post",
					url: "<?php echo U('media/loadVideo');?>",
					async: true,
					data: {
						/*keyword: keyword*/
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							var tempStr = [];
							data.data.forEach(function(arg, index) {
								tempStr.push('<div  class="card facebook-card pb-standalone-video">');
								tempStr.push('<div id='+index+' onclick="$.openVideo(this)" class="card-content">');
								tempStr.push('<a id="' + arg.id + '" class="pb-standalone-video">');
								tempStr.push('<img src=' + arg.img1 + ' width="100%">');
								tempStr.push('</a>');
								tempStr.push('</div>');
								tempStr.push('<div class="card-header no-border">');
								tempStr.push('<div class="user-msg">');
								tempStr.push('<div class="facebook-avatar"><img src=' + arg.headimgsrc + '></div>');
								tempStr.push('<div class="facebook-name">' + arg.title + '</div>');
								tempStr.push('<div class="facebook-date"><span>' + arg.nickname + '<span><span>' + arg.posttime + '</span></div>');
								tempStr.push('</div>');
								tempStr.push('<div class="card-action">');
								tempStr.push('<span class="icon icon-gift"></span>');
								tempStr.push('<span class="icon icon-star"></span>');
								tempStr.push('</div>');
								tempStr.push('</div>');
								tempStr.push('</div>');
								/*将取出的视频路径存放在一个字符串数组*/
								videoSourceArr.push(arg.videosource)
								captionArr.push(arg.text)
							});
							/*	$('#videoContainer').empty();*/
							$('#videoContainer').append(tempStr.join(''));
						} else {
							$.toast("通讯异常");
						}
					}
				});
			}
			$.loadVideo();
			/*视频显示js插件,动态显示加载的内容视频路径与文字*/
			$.openVideo =function(that){
				sessionStorage.removeItem("videoID");
				var myPhotoBrowserVideo = $.photoBrowser({
				photos: [{
					/*html: '<iframe frameborder="0" width="640" height="498" src="https://v.qq.com/iframe/player.html?vid=r0312zl5jzf&tiny=0&auto=0" allowfullscreen></iframe>',*/
					html: videoSourceArr[that.id],
					caption: captionArr[that.id]
				} ],
				theme: 'dark',
				type: 'standalone'
			});
			myPhotoBrowserVideo.open()
			}
			
			/*$(document).on('click', '.pb-standalone-video', function() {
				
			});*/
		</script>
	</body>

</html>