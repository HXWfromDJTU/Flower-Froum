<?php if (!defined('THINK_PATH')) exit();?><html>

	<!-- Mirrored from www.light7.cn/examples/light7-mall/home/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2016 09:11:42 GMT -->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>芬芳花艺商城</title>
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
			.bar-tab .tab-item{
				color: #000000;
			}
			/*去除商品列表tab左右padding 顶部的margin*/
			.content-block {
				padding: 0.0rem;
			}
			
			.card {
				width: 45%;
				margin-right: 0;
				float: left;
				/*	height: 8.0rem;*/
			}
			/*推荐页面的价格颜色*/
			
			.card-header p {
				margin: 0;
				text-align: left;
			}
			/*标签/徽章样式*/
			
			.pull-right.badge {
				font-size: 0.8rem;
				background-color: greenyellow;
				border: 1px solid cadetblue;
			}
			
			.facebook-avatar img {
				width: 2.0rem;
				height: 2.0rem;
			}
			
			.card-header.no-border.user-info {
				padding-top: 0;
			}
			
			.card-content img {
				border-radius: 0 0 0.8rem 0.8rem;
			}
		</style>
	</head>

	<body>
		<div class="page page-home" id="page-list">
			<header class="bar bar-nav">
				<a class="icon icon-left pull-left back"></a>
				<h1 class="title">菜单</h1>
			</header>
			<div class="content">
				<div class="buttons-tab">
					<a href="#tab1" class="tab-link active button">风格</a>
					<a href="#tab2" class="tab-link button">文化发展</a>
					<a href="#tab3" class="tab-link button">花艺师</a>
					<a href="#tab4" class="tab-link button">盆栽</a>
					<a href="#tab5" class="tab-link button">花束</a>
					<a href="#tab6" class="tab-link button">家居</a>
				</div>
				<div class="tabs">
					<div id="tab1" class="tab active">
						<div class="content-block">
							<p>This is tab 花植 content</p>
						</div>
					</div>
					<div id="tab2" class="tab">
						<div class="content-block">
							<div class="infinite-scroll-preloader">
								<!--加载缓冲图标-->
								<!--<div class="preloader"></div>-->
								<div class="card facebook-card">
									<div class="card-content">
										<a href='<?php echo U("index/user");?>'>
											<img src="/hyltxt/View/Index/Public/img/list-img(1).jpg" width="100%">
										</a>

									</div>
									<div class="card-header no-border">
										<p>推荐商品1水水水水水水水水<span class="pull-right badge">风格</span></p>
									</div>
									<div class="card-header no-border user-info">
										<div class="facebook-avatar">
											<a href='<?php echo U("index/user");?>'>
												<img src="/hyltxt/View/Index/Public/img/icon.jpg">
											</a>
										</div>
										<div class="facebook-name">小张张sss</div>
										<div class="facebook-date">Mon 3:47pm</div>
									</div>
								</div>
								<div class="card facebook-card">
									<div class="card-content"><img src="/hyltxt/View/Index/Public/img/list-img(2).jpg" width="100%"></div>
									<div class="card-header no-border">
										<p>推荐商品1水水水水水水水水<span class="pull-right badge">花艺师</span></p>
									</div>
									<div class="card-header no-border user-info">
										<div class="facebook-avatar"><img src="/hyltxt/View/Index/Public/img/icon.jpg"></div>
										<div class="facebook-name">小张张</div>
										<div class="facebook-date">Mon 3:47pm</div>
									</div>
								</div>
								<div class="card facebook-card">
									<div class="card-content"><img src="/hyltxt/View/Index/Public/img/list-img(3).jpg" width="100%"></div>
									<div class="card-header no-border">
										<p>推荐商品1水水水水水水水水<span class="pull-right badge">花束</span></p>
									</div>
									<div class="card-header no-border user-info">
										<div class="facebook-avatar"><img src="/hyltxt/View/Index/Public/img/icon.jpg"></div>
										<div class="facebook-name">小张张</div>
										<div class="facebook-date">Mon 3:47pm</div>
									</div>
								</div>
								<div class="card facebook-card">
									<div class="card-content"><img src="/hyltxt/View/Index/Public/img/list-img(4).jpg" width="100%"></div>
									<div class="card-header no-border">
										<p>推荐商品1水水水水水水水水<span class="pull-right badge">盆栽</span></p>
									</div>
									<div class="card-header no-border user-info">
										<div class="facebook-avatar"><img src="/hyltxt/View/Index/Public/img/icon.jpg"></div>
										<div class="facebook-name">小张张</div>
										<div class="facebook-date">Mon 3:47pm</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="tab3" class="tab">
						<div class="content-block">
							<p>This is tab 花器 content</p>
						</div>
					</div>
					<div id="tab4" class="tab">
						<div class="content-block">
							<p>This is tab 工具 content</p>
						</div>
					</div>
					<div id="tab5" class="tab">
						<div class="content-block">
							<p>This is tab 周边 content</p>
						</div>
					</div>
					<div id="tab6" class="tab">
						<div class="content-block">
							<p>This is tab 神秘箱 content</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--底部弹出的actionsheet-->

		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/zepto.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7-swiper.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7-swipeout.js' charset='utf-8'></script>
		<script src="/hyltxt/View/Index/Public/js/app.js"></script>

		<script src="/hyltxt/View/Index/Public/js/public.js"></script>
		<script src="/hyltxt/View/Index/Public/js/list.js"></script>

	</body>

	<!-- Mirrored from www.light7.cn/examples/light7-mall/home/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2016 09:13:26 GMT -->

</html>