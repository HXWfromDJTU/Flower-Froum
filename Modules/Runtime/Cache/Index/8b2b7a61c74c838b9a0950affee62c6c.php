<?php if (!defined('THINK_PATH')) exit();?><html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>花艺论坛</title>
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
			
			.align-top {
				background-color: rgba(255, 255, 255, 0.0);
			}
			
			.img-box-container {}
			
			.img-box,
			.img-box-plus {
				float: left;
				width: 30%;
				margin: 0.5rem 0 0 0.5rem;
				height: 6.0rem;
				border: 1px solid gray;
				border-radius: 1.5rem;
			}
			
			.img-box img,
			.img-box-plus img {
				border-radius: 1.5rem;
				width: 100%;
				height: 100%;
			}
			
			.img-box .badge {
				float: left;
				/*position: relative;
				right: 0;
				top: 0;*/
			}
			
			.list-block .item-title.label {
				width: 25%;
			}
		</style>
	</head>

	<body>
		<div id="page-essay" class="page page-essay">
			<header class="bar bar-nav">
				<a class="icon icon-left pull-left"></a>
				<h1 class="title">发布</h1>
				<a class="button-fill button pull-right" id="post-btn">发送</a>
			</header>
			<div class="content">
				<div class="list-block">
					<ul>
						<li>
							<div class="item-content">
								<div class="item-inner">
									<div class="item-title label">标题</div>
									<div class="item-input">
										<input id="input-title" type="text" placeholder="来做一个标题党吧....">
									</div>
								</div>
							</div>
						</li>
						<li id="videoInput" class="align-top">
							<div class="item-content">
								<div class="item-inner">
									<div class="item-title label">视频地址：</div>
									<div class="item-input">
										<textarea id="video-source"></textarea>
									</div>
								</div>
							</div>
						</li>
						<li class="align-top">
							<div class="item-content">
								<div class="item-inner">
									<div class="item-input">
										<textarea id="textarea" placeholder="分享花艺新鲜事......"></textarea>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div id="tis"></div>
				<div class="img-box-container">
					<div id="upload-img" class="img-box-plus">
						<img src="/hyltxt/View/Index/Public/img/plus.jpg" />
					</div>
					<input type="file" onchange="$.upload(this)" id="input-img" style="display: none;" />
				</div>
			</div>

		</div>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/zepto.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7-swiper.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7-swipeout.js' charset='utf-8'></script>
		<script src="/hyltxt/View/Index/Public/js/app.js"></script>
		<script src="/hyltxt/View/Index/Public/js/public.js"></script>
		<script src="/hyltxt/View/Index/Public/js/post-page.js"></script>
		<script>
			//---------------------------本方为public方法，优化后将放入public.js--------------------
			$.getQueryString = function(name) {
				var reg = new RegExp("(^|&|\|)" + name + "=([^&]*)(&|$)");
				var r = window.location.search.substr(1).match(reg);
				if(r != null) {
					return decodeURIComponent(r[2]);
				} else {
					return "";
				}
			};
			//-------------------------------------------------------------------------------------

			/*根据不同的媒体类型,改变一些参数*/
			var mediaType = $.getQueryString("mediaType");
			var maxImgNum = 6;
			if(mediaType == 2) {
				maxImgNum = 1;
				$("#tis").text("请上传图片作为视频封面")
			} else if(mediaType == 0) {
				maxImgNum = 3;
				$("#videoInput").css("display", "none");
				$("#tis").text("请上传至少一张，最多三张图片")
				$("#video-source").val("填充内容")
			} else {
				$("#tis").text("请上传至少一张，最多六张文章配图")
				$("#videoInput").css("display", "none");
				$("#video-source").val("填充内容")
			}

			$.postMedia = function(text, imgArr, mediaType, title, videoSource) {
				$.ajax({
					type: "post",
					url: "<?php echo U('media/postMedia');?>",
					async: true,
					data: {
						title: title,
						text: text,
						videoSource: videoSource,
						img1: imgArr[0],
						img2: imgArr[1],
						img3: imgArr[2],
						img4: imgArr[3],
						img5: imgArr[4],
						img6: imgArr[5],
						mediaType: mediaType,
						userID:sessionStorage.getItem("userID")
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							$.toast("发表成功");
							window.location.href = 'http://localhost/hyltxt/index.php/index/main.html';
						} else {
							$.toast("通讯异常");
						}
					}
				});
			}
		</script>

	</body>

</html>