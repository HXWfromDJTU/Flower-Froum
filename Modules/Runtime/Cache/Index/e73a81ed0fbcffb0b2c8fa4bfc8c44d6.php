<?php if (!defined('THINK_PATH')) exit();?>      
<html>
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
		<link rel="stylesheet" href="/hyltxt/View/Index/Public/css/main.css">
		<style>
			/*header背景色调*/
			.bar {
				background-color: rgba(50, 205, 50, 0.8);
			}
			.bar-tab .tab-item {
				color: #000000;
			}
			
			.tab-item.no-transition.replace.post {
				background-color: orangered;
				border: 1px solid red;
				border-radius: 1.5rem;
			}
			/*左侧边栏样式*/
			
			.panel.panel-left.panel-cover,
			.panel.panel-left.panel-cover li {
				color: black;
				background-color: rgba(255, 255, 255, 0.9);
			}
			
			.panel.panel-left.panel-cover li .item-title.label {
				color: black;
			}
			/*popup-search的背景样式*/
			
			.popup.popup-search {
				background-color: rgba(255, 255, 255, 0.2);
			}
			/*搜索界面的图片样式*/
			
			.popup.popup-search img {
				width: 3.0rem;
			}
			/*搜索结果的左右贴边调整*/
			
			.list-block.media-list.inset {
				margin: 1.0rem 0;
			}
			/*主页三大板块的样式*/
			
			.card.facebook-card {
				height: 32.5%;
				margin: 0 0 0.5rem 0;
			}
			
			.card.facebook-card img {
				height: 100%;
			}
			/*消息板块页面样式*/
			
			.item-media.msg-user-img img {
				width: 2.5rem;
			}
			
			.item-media.target-img {
				margin-right: 1.0rem;
			}
			
			.item-media.target-img img {
				width: 3.5rem;
				height: 3.5rem;
			}
			/*顶部专题下拉标志大小*/
			
			.icon.icon-down.open-popover {
				margin-left: 0.3rem;
				font-size: 0.5rem;
			}
			
			#page-home .icon.pull-right {
				font-size: 0.8rem;
				margin-left: 0.5rem;
			}
			/*我的主页头像位置*/
			
			.item-media.user-head {
				margin: 0 auto;
				position: relative;
				top: 5.0rem;
				text-align: center;
			}
			
			.item-media.user-head img {
				width: 5.0rem;
			}
			/*我的界面背景样式调整*/
			
			#change_head {
				border-radius: 2.5rem;
			}
			
			.list-block.media-list.person-card {
				margin: 0;
			}
			
			.list-block.media-list.person-card .item-content {
				margin: 0;
				height: 8.0rem;
				background-image: url(/hyltxt/View/Index/Public/img/bg-user.jpg);
				background-size: cover;
			}
			
			.item-media.user-head .button {
				display: inline;
			}
			/*个人页面收藏夹样式*/
			
			.buttons-tab {
				margin-top: 6.0rem;
			}
			
			.tabs img {
				border-radius: 0.3rem;
				width: 5.0rem;
				min-width: 30%;
				height: 4.0rem;
				margin: 0.5rem 0.2rem;
			}
			
			#panel-themes .content-block {
				padding: 0;
			}
			
			#page-message .list-block.media-list {
				margin: 0;
			}
			/*#myCollectionContainer .imgBox {
				position: absolute;
			}*/
			#myCollectionContainer .imgBox{
				width: 33%;
				display: inline-block;
			}
			#myCollectionContainer .imgBox .badge{
				position: relative;
				z-index: 555;
				left:-1.5rem;
				bottom: 4.0rem;
			}
			#myCollectionContainer .badge{
				background-color: red;
			}
		</style>
	</head>

	<body>
		<nav class="bar bar-tab">
			<a data-no-cache="true" data-no-cache="true" class="tab-item active no-transition replace" href='#page-home'>
				<span class="icon icon-home"></span>
				<!--<span class="tab-label">主页</span>-->
			</a>
			<a data-no-cache="true" data-no-cache="true" class="tab-item no-transition replace open-popup" data-popup=".popup-search">
				<span class="icon icon-search"></span>
				<!--<span class="tab-label">Shops</span>-->
			</a>
			<a data-no-cache="true" data-no-cache="true" class="tab-item no-transition replace post create-actions">
				<span class="icon icon-edit"></span>
				<!--<span class="tab-label">Shops</span>-->
			</a>
			<a data-no-cache="true" data-no-cache="true" class="tab-item no-transition replace" href="#page-message">
				<span class="icon icon-message"></span>
				<!--<span class="tab-label">Me</span>-->
			</a>
			<a data-no-cache="true" data-no-cache="true" class="tab-item no-transition replace" href="#page-me">
				<span class="icon icon-me"></span>
				<!--<span class="tab-label">Me</span>-->
			</a>
		</nav>
		<div id="page-home" class="page page-current">
			<header class="bar bar-nav">
				<a data-no-cache="true" data-no-cache="true" class="icon icon-menu pull-left open-panel"></a>
				<h1 class="title">专题<span class="icon icon-down open-popover" data-popover=".popover-links"></span></h1>
				<a onclick="$.logout()" data-no-cache="true" data-no-cache="true" class="icon pull-right">退出</a>
			</header>
			<div class="content">
				<div class="card facebook-card">
					<a href='<?php echo U("index/list");?>'>
						<div class="card-content">
							<img src="/hyltxt/View/Index/Public/img/main_pic(1).png" width="100%">
						</div>
					</a>
				</div>
				<div class="card facebook-card">
					<a href='<?php echo U("index/eassy");?>'>
						<div class="card-content">
							<img src="/hyltxt/View/Index/Public/img/main_pic(2).png" width="100%">
						</div>
					</a>
				</div>
				<div id="page-activity" class="card facebook-card">
					<a href=''>
						<div class="card-content">
							<img src="/hyltxt/View/Index/Public/img/main_pic(3).png" width="100%">
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="page" id="page-message">
			<a data-no-cache="true" data-no-cache="true" class="icon icon-menu pull-left open-panel"></a>
			<header class="bar bar-nav">
				<h1 class="title">消息</h1>
			</header>
			
			<div class="content">
				<div class="list-block media-list">
					<ul id="messageContainer">
						<!--<li>
							<div class="item-content">
								<div class="item-media msg-user-img"><img src="/hyltxt/View/Index/Public/img/icon.jpg"></div>
								<div class="item-inner">
									<div class="item-title-row">
										<div class="item-title">April</div>
									</div>
									<div class="item-subtitle">19:45</div>
									<div class="item-subtitle">点赞了</div>
								</div>
								<div class="item-media target-img"><img src="/hyltxt/View/Index/Public/img/bg-img.jpg"></div>
							</div>
						</li>-->
				</div>
			</div>
		</div>
		<div id="page-me" class="page page-me">
			<header class="bar bar-nav">
				<!--<a data-no-cache="true" data-no-cache="true" class="icon icon-menu pull-left open-panel"></a>-->
				<h1 class="title">我的</h1>
			</header>
			<div class="content">
				<div class="page-settings">
					<div class="list-block media-list person-card">
						<ul>
							<li>
								<div id="change_bg" class="item-content">
									<!--个人空间背景框修改-->
									<input type="file" onchange="$.upload(this)" id="input-bg" style="display: none;" />
									<div class="item-media user-head">
										<div class="item-inner">
											<img id="change_head" src="/hyltxt/View/Index/Public/img/icon.jpg" style="display: inline;">
											<input type="file" onchange="$.upload(this)" id="input-img" style="display: none;" />
											<div id="me_username" class="item-subtitle">April</div>
											<div class="item-text">
												关注：<span id="follow" style="margin-right:1.0rem;">66</span> 关注者：
												<span id="follower">42</span>
											</div>
											<button data-popup=".popup-editMyMSG" class="open-popup button" id="edit">编辑个人信息</button>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="buttons-tab">
					<a data-no-cache="true" data-no-cache="true" href="#tab1" class="tab-link active button">我的发布</a>
					<a data-no-cache="true" data-no-cache="true" href="#tab2" class="tab-link button">收藏</a>
				</div>
				<div class="tabs">
					<div id="tab1" class="tab active">
						<div id="myPostContainer" class="content-block">
							<!--<img src="/hyltxt/View/Index/Public/img/main_pic(1).png">-->
						</div>
					</div>
					<div id="tab2" class="tab">
						<div id="myCollectionContainer" class="content-block">
							<div class="imgBox">
								<img src="/hyltxt/View/Index/Public/img/main_pic(1).png">
								<span class="badge">X</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--左侧侧边栏模块-->
		<div class="panel-overlay"></div>
		<!-- Left Panel with Reveal effect -->
		<div class="panel panel-left panel-cover theme-dark" id='panel-themes'>
			<div class="content-block">
				<div class="list-block">
					<ul style="border-top: none;">
						<li>
							<div class="item-content">
								<div class="item-inner">
									<div class="item-title label icon icon-left close-panel"></div>
								</div>
							</div>
						</li>
						<li>
							<a data-no-cache="true" data-no-cache="true" href='<?php echo U("index/list");?>'>
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label close-panel">风格</div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a data-no-cache="true" data-no-cache="true" href='<?php echo U("index/index");?>'>
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label close-panel">文化发展</div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a data-no-cache="true" data-no-cache="true" href='<?php echo U("index/index");?>'>
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label close-panel">花艺师</div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a data-no-cache="true" data-no-cache="true" href='<?php echo U("index/index");?>'>
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label close-panel">器物</div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a data-no-cache="true" data-no-cache="true" href='<?php echo U("index/index");?>'>
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label close-panel">盆栽</div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a data-no-cache="true" data-no-cache="true" href='<?php echo U("index/index");?>'>
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label close-panel">花束</div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a data-no-cache="true" data-no-cache="true" href='<?php echo U("index/index");?>'>
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label close-panel">家居</div>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--底部弹出面板模块-->
		<div class="popup popup-search">
			<header class="bar bar-nav">
				<div class="searchbar">
					<a data-no-cache="true" class="searchbar-cancel close-popup">取消</a>
					<div class="search-input">
						<label class="icon icon-search" for="search"></label>
						<input id="search_input" type="search" id='search' placeholder='搜索文章/活动' />
					</div>
				</div>
				<!--<a data-no-cache="true" class="button button-link button-nav pull-right close-popup">
					了解
				</a>
				<h1 class="title">芬芳花艺商城</h1>-->
			</header>
			<div class="content" id="search-content">
				<div class="list-block media-list inset">
					<ul id="searchResultContailer">
						<!--<li>
							<a data-no-cache="true" href="#" class="item-link item-content">
								<div class="item-media"><img src="/hyltxt/View/Index/Public/img/main_pic(1).png" width="80"></div>
								<div class="item-inner">
									<div class="item-title-row">
										<div class="item-title">我的世界开始下雪</div>
										<div class="item-after">文章</div>
									</div>
									<div class="item-text">窗外飘雪。远山寻迹，望不到的是离人，眼中盈珠，道不尽的是思念</div>
								</div>
							</a>
						</li>-->
					</ul>
				</div>
			</div>
		</div>
		<!--弹出的多选modal-->
		<div class="popover popover-links">
			<div class="popover-angle"></div>
			<div class="popover-inner">
				<div class="list-block">
					<ul>
						<li>
							<a id="page_essay" class="list-button item-link close-popover">文章</a>
						</li>
						<li>
							<a id="page_video" class="list-button item-link close-popover">视频</a>
						</li>
						<li>
							<a id="page_picture" class="list-button item-link close-popover">图片</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="popup popup-editMyMSG">
			<header class="bar bar-nav">
				<a data-no-cache="true" class="button button-link button-nav pull-right close-popup">
					暂不修改
				</a>
				<h1 class="title">修改个人信息</h1>
			</header>
			<div class="content register-content">
				<div class="content-inner">
					<div class="content-block">
						<div class="list-block">
							<ul id="input-box">
								<li>
									<div class="item-content">
										<div class="item-inner">
											<div class="item-title label">昵称</div>
											<div class="item-input">
												<input id="newNickname" type="text" placeholder="修改你的昵称">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="item-content">
										<div class="item-inner">
											<div class="item-title label">电话号码</div>
											<div class="item-input">
												<input id="newPhoneNum" type="tel" placeholder="电话号码">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="item-content">
										<div class="item-inner">
											<div class="item-title label">所在城市</div>
											<div class="item-input">
												<input id="newCity" type="text" placeholder="所在城市">
											</div>
										</div>
									</div>
								</li>
								<li class="align-top">
									<div class="item-content">
										<div class="item-inner">
											<div class="item-title label">个人介绍：</div>
											<div class="item-input">
												<textarea id="newIntroduce"></textarea>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-100">
											<a onclick="$.editMessage()" class="button button-big button-fill button-primary">确定更改</a>
										</div>
									</div>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/zepto.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7-swiper.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7-swipeout.js' charset='utf-8'></script>
		<script src="/hyltxt/View/Index/Public/js/app.js"></script>

		<script src="/hyltxt/View/Index/Public/js/main.js"></script>
		<script src="/hyltxt/View/Index/Public/js/public.js"></script>
	</body>
	<script>
		$.upload = function(that) {
			//支持chrome IE10
			if(window.FileReader) {
				var file = that.files[0];
				//console.log(file)
				filename = file.name;
				var reader = new FileReader();
				reader.readAsDataURL(file);
				reader.onload = function() {
					$("#change_head")[0].src = reader.result;
					$.updateAvatar(reader.result);

				}
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
		$.updateAvatar = function(base64) {
				$.ajax({
					type: "post",
					url: "<?php echo U('user/updateAvatar');?>",
					async: true,
					data: {
						username: sessionStorage.getItem("username"),
						base64: base64
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {

							$.toast("头像更新成功");
						} else {
							$.toast("更新头像失败");
						}
					}
				});
			}
			/*更改头像的添加事件*/
		$("#change_head").on('click', function() {
			return $("#input-img").click();
		});
		/*加载我的资料页面的方法*/
		$.loadMyMessage = function() {
			$.ajax({
				type: "post",
				url: "<?php echo U('user/loadMyMessage');?>",
				async: true,
				data: {
					username: sessionStorage.getItem("username")
				},
				success: function(d) {
					var data = JSON.parse(d);
					/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
					if(data.code == "0000") {
						$(".list-block.media-list.person-card .item-content").css("background-image", data.data[0]["bgimg"]);
						$("#change_head")[0].src = data.data[0]["headimgsrc"];
						$("#follow").text(data.data[0]["follow"]);
						$("#follower").text(data.data[0]["follower"]);
						$("#me_username").text(data.data[0]["nickname"]);
					} else {
						$.toast("用户信息加载异常");
					}
				}
			});
		}
		$.loadMyMessage();

		/*搜索方法*/
		$.searchMedia = function(keyword) {
				var mediaType = ["图片", "文章", "视频"];
				$.ajax({
					type: "post",
					url: "<?php echo U('media/searchMedia');?>",
					async: true,
					data: {
						keyword: keyword
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							var tempStr = [];
							data.data.forEach(function(arg, index) {
								//在后面可以修改为动态的跳转，分别跳转到文章视频与图片
								if(arg.mediatype == 1) {
									tempStr.push('<a data-no-cache="true" onclick="$.searchResultoEssay(' + arg.id + ',' + arg.posterid + ')" class="item-link item-content"><div class="item-media">');
								} else if(arg.mediatype == 0) {
									tempStr.push('<a data-no-cache="true" onclick="$.searchResulToImage(' + arg.id + ')" class="item-link item-content"><div class="item-media">');
								} else {
									tempStr.push('<a data-no-cache="true" onclick="$.searchResulToVideo(' + arg.id + ')" class="item-link item-content"><div class="item-media">');
								}
								tempStr.push('<img src="' + arg.img1 + '" width="80"></div>');
								tempStr.push('<div class="item-inner"><div class="item-title-row">');
								tempStr.push('<div class="item-title">' + arg.title + '</div>');
								tempStr.push('<div class="item-after">' + mediaType[arg.mediatype] + '</div></div>');
								tempStr.push('<div class="item-text">' + arg.text + '</div></div></a></li>');
							});
							$('#searchResultContailer').empty();
							$('#searchResultContailer').append(tempStr.join(''));
						} else {
							$.toast("通讯异常");
						}
					}
				});
			}
			/*main主页第三页的消息面板的消息列表加载*/
		$.loadMessage = function(userID) {
			var actionTypeArr = ["点赞了", "收藏了", "评论了"];
			$.ajax({
				type: "post",
				url: "<?php echo U('action/loadMessage');?>",
				async: true,
				data: {
					userID: userID
				},
				success: function(d) {
					var data = JSON.parse(d);
					/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
					if(data.code == "0000") {
						var tempStr = [];
						data.data.forEach(function(arg, index) {
							/*console.log(arg.mediatype)*/
							if(arg.mediatype == 1) {
								tempStr.push('<li onclick="$.messageDetail(' + arg.tomediaid + ')">');
							} else if(arg.mediatype == 0) {
								tempStr.push('<li onclick="$.searchResulToImage(' + arg.tomediaid + ')">');
							} else {
								tempStr.push('<li onclick="$.searchResulToVideo(' + arg.tomediaid + ')">');
							}
							tempStr.push('<div class="item-content">');
							tempStr.push('<div class="item-media msg-user-img"><img src=' + arg.headimgsrc + '></div>');
							tempStr.push('<div class="item-inner">');
							tempStr.push('<div class="item-title-row">');
							tempStr.push('<div class="item-title">' + arg.nickname + '</div>');
							tempStr.push('</div>');
							tempStr.push('<div class="item-subtitle">' + arg.actiontime + '</div>');
							tempStr.push('<div class="item-subtitle">' + actionTypeArr[arg.actiontype] + '</div>');
							tempStr.push('</div>');
							tempStr.push('<div class="item-media target-img"><img src=' + arg.img1 + '></div>');
							tempStr.push('</div>');
							tempStr.push('</li>');
						});
						$('#messageContainer').empty();
						$('#messageContainer').append(tempStr.join(''));
					} else {
						$.toast("通讯异常");
					}
				}
			});
		}
		$.loadMessage(sessionStorage.getItem("userID"));

		$.loadMyPost = function(userID) {
			$.ajax({
				type: "post",
				url: "<?php echo U('media/loadMyPost');?>",
				async: true,
				data: {
					userID: userID
				},
				success: function(d) {
					var data = JSON.parse(d);
					/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
					if(data.code == "0000") {
						var tempStr = [];
						data.data.forEach(function(arg, index) {
							if(arg.mediatype == 1) {
								tempStr.push('<img onclick="$.messageDetail(' + arg.id + ')" src=' + arg.img1 + '>');
							} else if(arg.mediatype == 0) {
								tempStr.push('<img onclick="$.searchResulToImage(' + arg.id + ')" src=' + arg.img1 + '>');
							} else {
								tempStr.push('<img onclick="$.searchResulToVideo(' + arg.id + ')" src=' + arg.img1 + '>');
							}
						});
						$('#myPostContainer').empty();
						$('#myPostContainer').append(tempStr.join(''));
					} else {
						$.toast("通讯异常");
					}
				}
			});
		}
		$.loadMyPost(sessionStorage.getItem("userID"));

		$.loadMyCollection = function(userID) {
			$.ajax({
				type: "post",
				url: "<?php echo U('action/loadMyCollection');?>",
				async: true,
				data: {
					userID: userID
				},
				success: function(d) {
					var data = JSON.parse(d);
					/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
					if(data.code == "0000") {
						var tempStr = [];
						data.data.forEach(function(arg, index) {
							if(arg.mediatype == 1) {
								tempStr.push('<div id="collectionItem'+arg.id+'" class="imgBox"><img onclick="$.messageDetail(' + arg.id + ')" src=' + arg.img1 + '><span onclick="$.deleteMyCollection(' + arg.id + ')" class="badge">X</span></div>');
							} else if(arg.mediatype == 0) {
								tempStr.push('<div id="collectionItem'+arg.id+'" class="imgBox"><img onclick="$.searchResulToImage(' + arg.id + ')" src=' + arg.img1 + '><span onclick="$.deleteMyCollection(' + arg.id + ')" class="badge">X</span></div>');
							} else {
								tempStr.push('<div id="collectionItem'+arg.id+'" class="imgBox"><img onclick="$.searchResulToVideo(' + arg.id + ')" src=' + arg.img1 + '><span onclick="$.deleteMyCollection(' + arg.id + ')" class="badge">X</span></div>');
							}
							
							
						});
						$('#myCollectionContainer').empty();
						$('#myCollectionContainer').append(tempStr.join(''));
					} else {
						$.toast("通讯异常");
					}
				}
			});
		}
		$.loadMyCollection(sessionStorage.getItem("userID"));

		$.editMessage = function() {
			if(($("#newPhoneNum").val() != "") && ($("#newCity").val() != "") && ($("#newIntroduce").val() != "") && ($("#newNickname").val() != "")) {
				$.ajax({
					type: "post",
					url: "<?php echo U('user/editMyMSG');?>",
					async: true,
					data: {
						userID: sessionStorage.getItem("userID"),
						newNickname: $("#newNickname").val(),
						newPhoneNum: $("#newPhoneNum").val(),
						newCity: $("#newCity").val(),
						newIntroduction: $("#newIntroduction").val()
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {

							$.toast("更改成功");

						} else {
							$.toast("通讯异常");
						}
					}
				});
			} else {
				$.toast("未填写完整")
			}

		}
		$.deleteMyCollection = function(mediaID) {
					$.confirm("是否要删除这个收藏?", function() {
						$("#collectionItem" + mediaID).remove();
						$.ajax({
							type: "post",
							url: "<?php echo U('action/deleteMyCollection');?>",
							async: true,
							data: {
								mediaID: mediaID,
								userID:sessionStorage.getItem("userID")
							},
							success: function(d) {
								var data = JSON.parse(d);
								/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
								if(data.code == "0000") {
									if(data,data!=false){
										$.toast("删除成功")
									}
								} else {
									$.toast("通讯异常");
								}
							}
						});
					})
				}
		/*为搜索框绑定文本变化事件,调用搜索方法,调用ajax，有待优化，因为输入事件触发过于频繁*/
		$("#search_input").on("input", function() {
			if($("#search_input").val().length == 0) {
				return;
			}
			$.searchMedia($("#search_input").val());
		})
		$.searchResultoEssay = function(essayID, authorID) {
			var authorID = sessionStorage.getItem("userID");
			window.location.href = 'http://localhost/hyltxt/index.php/index/essay_show.html?essayID=' + essayID + '&authorID=' + authorID;
		}
		$.searchResulToImage = function(imgID) {
			sessionStorage.setItem("imgID", imgID);
			window.location.href = 'http://localhost/hyltxt/index.php/index/picture.html';
		}
		$.searchResulToVideo = function(videoID) {
			sessionStorage.setItem("videoID", videoID);
			window.location.href = 'http://localhost/hyltxt/index.php/index/video.html';
		}
		$.messageDetail = function(essayID) {
				var authorID = sessionStorage.getItem("userID");
				window.location.href = 'http://localhost/hyltxt/index.php/index/essay_show.html?essayID=' + essayID + '&authorID=' + authorID;
		}
		$.logout = function(essayID) {
				sessionStorage.clear();
				window.location.href = 'http://localhost/hyltxt/index.php/index';
			}
			/*使用JS进行页面跳转,避免样式表不加载的问题*/
		$("#page_essay").on("click", function() {
			window.location.href = "http://localhost/hyltxt/index.php/index/eassy.html";
		})
		$("#page_video").on("click", function() {
			window.location.href = "http://localhost/hyltxt/index.php/index/video.html";
		})
		$("#page_picture").on("click", function() {
			window.location.href = "http://localhost/hyltxt/index.php/index/picture.html";
		})
		$("#page-activity").on("click", function() {
			window.location.href = "http://localhost/hyltxt/index.php/index/activity.html";
		})
	</script>

</html>