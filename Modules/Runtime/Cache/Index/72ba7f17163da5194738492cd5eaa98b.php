<?php if (!defined('THINK_PATH')) exit();?><html>

	<!-- Mirrored from www.light7.cn/examples/light7-mall/home/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2016 09:11:42 GMT -->

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
			/*轮播图样式调整*/
			
			.page-essay .swiper-container {
				height: 13.0rem;
				padding-bottom: 0;
				margin-bottom: 0.5rem;
			}
			
			.swiper-slide img {
				height: 100%;
				width: 100%;
				display: inline;
			}
			
			.swiper-pagination.swiper-pagination-bullets {
				position: relative;
				bottom: 1.0rem;
			}
			/*列表样式*/
			
			.list-block.media-list {
				margin-top: 0;
			}
			/*第一行用户信息样式*/
			
			.item-title-row.first-row {
				float: left;
			}
			
			.item-title-row.first-row img {
				display: inline;
				width: 1.5rem;
				height: 1.5rem;
			}
			
			.item-title-row.first-row p {
				display: inline;
				margin: 0;
				margin-left: 0.3rem;
			}
			
			.item-title-row.first-row {
				line-height: 1.5rem;
			}
			
			.item-title-row.first-row .user-name {
				font-size: 0.8rem;
			}
			
			.item-title-row.first-row .post-time {
				font-size: 0.5rem;
				color: gray
			}
			/*.item-title-row.first-row .user-name,.item-title-row.first-row .post-time{
				float: left;
			}*/
			/*第二行文章标题样式*/
			
			.item-title-row.second-row {
				float: left;
				font-weight: bold;
				margin: 0.7rem 0 0.5rem 0;
			}
			
			.item-title-row.third-row {
				float: left;
			}
			
			.item-title-row.second-row .item-title {
				font-weight: bold;
			}
			/*第三行文章信息样式*/
			
			.item-title-row.third-row p {
				display: inline;
				font-size: 0.5rem;
				margin: 0 0.1rem;
			}
			
			.item-media.target-img {
				margin-right: 1.0rem;
			}
			
			.item-media.target-img img {
				width: 3.5rem;
				height: 3.5rem;
			}
			
			.page-essay .badge {
				color: orangered;
			}
			
			.list-block.media-list li {
				border-bottom: 1px solid gray;
				background-color: #D9D9D9;
			}
			/*mask*/
			
			.swiper-mask {
				color: white;
				line-height: 2.0rem;
				padding-left: 0.5rem;
				z-index: 555;
				position: relative;
				bottom: 2.2rem;
				height: 2.0rem;
				background-color: rgba(0, 0, 0, 0.4);
			}
			.item-subtitle span{
				margin-left: 0.5rem;
			}
		</style>
	</head>

	<body>
		<div id="page-essay" class="page page-essay">
			<header class="bar bar-nav">
				<a class="icon icon-left pull-left"></a>
				<h1 class="title">最新活动</h1>
			</header>
			<div class="content">
				<div class="swiper-container swiper-container-horizontal" data-space-between="10">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img class='card-cover' src="/hyltxt/View/Index/Public/img/list-img(1).jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img class='card-cover' src="/hyltxt/View/Index/Public/img/list-img(2).jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img class='card-cover' src="/hyltxt/View/Index/Public/img/list-img(3).jpg" alt="">
						</div>
					</div>
					<div class="swiper-pagination">
						<span class="swiper-pagination-bullet swiper-pagination-bullet-active">							
						</span>
						<span class="swiper-pagination-bullet">							
						</span>
						<span class="swiper-pagination-bullet">						
						</span>
					</div>
					<div class="swiper-mask">
						<span class="swiper-title">普罗旺斯主题活动</span>
					</div>
				</div>
				<div class="list-block media-list">
					<ul id="activityContainer">
						<!--<li>
							<a href="../detail/index.html" class="item-link item-content">
								<div class="item-media"><img src="/hyltxt/View/Index/Public/img/list-img(3).jpg" width="80"></div>
								<div class="item-inner">
									<div class="item-title-row">
										<div class="item-title">普罗旺斯薰衣草活动</div>
										<div class="item-after">免费</div>
									</div>
									<div class="item-subtitle">
										<span>Dec-25</span>
										<span>背景顺义花海公园</span>
									</div>
									<div class="item-text">初春时节，紫色花海，定时你和爱人的美妙相逢之处</div>
								</div>
							</a>
						</li>-->
					</ul>
				</div>

			</div>
		</div>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/zepto.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7-swiper.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7-swipeout.js' charset='utf-8'></script>

		<script src="/hyltxt/View/Index/Public/js/app.js"></script>
		<script src="/hyltxt/View/Index/Public/js/essay.js"></script>
		<script>
			$.loadActivity = function(userID) {
				$.ajax({
					type: "post",
					url: "<?php echo U('activity/loadActivity');?>",
					async: true,
					data: {

					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							var tempStr = [];
							data.data.forEach(function(arg, index) {
								tempStr.push('<li onclick="$.activityDetail('+arg.id+')">');
								tempStr.push('<a  class="item-link item-content">');
								tempStr.push('<div class="item-media"><img src='+arg.img+' width="80"></div>');
								tempStr.push('<div class="item-inner">');
								tempStr.push('<div class="item-title-row">');
								tempStr.push('<div class="item-title">'+arg.title+'</div>');
								tempStr.push('<div class="item-after">'+arg.fee+'</div>');
								tempStr.push('</div>');
								tempStr.push('<div class="item-subtitle">');
								tempStr.push('<span>'+arg.time.substring(0,14)+'</span>');
								tempStr.push('<span>'+arg.location+'</span>');
								tempStr.push('</div>');
								tempStr.push('<div class="item-text">'+arg.description+'</div>');
								tempStr.push('</div>');
								tempStr.push('</a>');
								tempStr.push('</li>');
							});
							$('#activityContainer').empty();
							$('#activityContainer').append(tempStr.join(''));
						} else {
							$.toast("通讯异常");
						}
					}
				});
			}
			$.loadActivity(sessionStorage.getItem("userID"));
			$.activityDetail =function(activityID){
				window.location.href=''
			}
		</script>
	</body>

</html>