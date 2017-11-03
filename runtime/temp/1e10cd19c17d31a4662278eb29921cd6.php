<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:92:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\aoyuan\public/../application/index\view\wyts\kfts.html";i:1509445064;s:96:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\aoyuan\public/../application/index\view\common\header.html";i:1509445002;s:97:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\aoyuan\public/../application/index\view\common\sidebar.html";i:1509330382;s:96:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\aoyuan\public/../application/index\view\common\footer.html";i:1509378887;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- //以极速模式渲染 -->
    <meta name="renderer" content="webkit" />
    <!-- 以最高级模式渲染文档 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="__STATIC_PATH__/index/common/css/header.css">
    <link rel="stylesheet" type="text/css" href="__STATIC_PATH__/index/common/css/footer.css">
</head>

<body>
    <div id="header" class="index_nav">
        <div class="nav_content">
            <a class="logo" href="index.html">
				<img src="__STATIC_PATH__/index/common/img/nav_logo.png" alt="澳源科技">
			</a>
            <ul class="ul_nav">
                <li class="navitem">
                    <a class="a_nav" href="<?php echo url('index/index'); ?>">
						<span>首页</span>
					</a>
                </li>
                <li class="navitem">
                    <a class="a_nav" href="<?php echo url('about/index'); ?>">
						<span>关于澳源</span>
					</a>
                </li>
                <li class="navitem">
                    <a class="a_nav" href="">
						<span>助学成才</span>
						<i class="iconfont">&#xe624;</i>
					</a>
                    <ul class="subnav">
                        <li>
                            <a href="<?php echo url('zxcc/brzx'); ?>">
								<span>百人助学</span>
							</a>
                        </li>
                        <li>
                            <a href="<?php echo url('zxcc/qrpy'); ?>">
								<span>千人培养</span>
							</a>
                        </li>
                        <li>
                            <a href="<?php echo url('zxcc/wrsy'); ?>">
								<span>万人受益</span>
							</a>
                        </li>
                        <li>
                            <a href="<?php echo url('zxcc/xmjs'); ?>">
								<span>项目讲师</span>
							</a>
                        </li>
                    </ul>
                </li>
                <li class="navitem">
                    <a class="a_nav" href="<?php echo url('tribune/index'); ?>">
						<span>江湖论坛</span>
					</a>
                </li>
                <li class="navitem">
                    <a class="a_nav" href="#">
						<span>我要提升</span>
                        <i class="iconfont">&#xe624;</i>
					</a>
                    <ul class="subnav">
                        <li>
                            <a href="<?php echo url('wyts/sjts'); ?>">
                                <span>设计提升</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('wyts/kfts'); ?>">
                                <span>开发提升</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('wyts/wyts'); ?>">
                                <span>营销提升</span>
                            </a>
                        </li>
                    </ul>                    
                </li>
            </ul>
        </div>
    </div>
    <!-- <div class="sidebar">
        <div class="sb_phone">
            <i class="iconfont">&#xe685;</i>
        </div>
        <div class="online_zx">
            <div class="olzx_head">
                在线咨询<i class="iconfont">&#xe626;</i>
            </div>
            <div class="olzx_qq">
                <a href="#">
                   <i class="iconfont">&#xe649;</i>40080000
                </a>
            </div>
            <div class="olzx_tel">
                <div>
                    <i class="iconfont">&#xe69a;</i>
                    联系电话
                </div>
                <p>400-888-8888</p>
            </div>
        </div>        
        <div class="sb_wx">
            <i class="iconfont">&#xe6e2;</i>
        </div>
        <div class="fixed_wx">
            <div class="wx_container">
                <div class="ewcode">
                    <img src="__STATIC_PATH__/index/common/img/code.png" alt="">
                </div>
                <p>扫描二维码分享到微信</p>
            </div>
        </div>
        <div class="totop">
            <i class="iconfont">&#xe663;</i>
        </div>
        
    </div> -->

    <script src="__STATIC_PATH__/index/common/js/header.js"></script>
<link rel="stylesheet" type="text/css" href="__STATIC_PATH__/index/common/css/sidebar.css">
<div class="sidebar">
    <div class="sb_phone">
        <i class="iconfont">&#xe685;</i>
    </div>
    <div class="online_zx">
        <div class="olzx_head">
            在线咨询<i class="iconfont">&#xe626;</i>
        </div>
        <div class="olzx_qq">
            <a href="#">
                   <i class="iconfont">&#xe649;</i>40080000
                </a>
        </div>
        <div class="olzx_tel">
            <div>
                <i class="iconfont">&#xe69a;</i> 联系电话
            </div>
            <p>400-888-8888</p>
        </div>
    </div>
    <div class="sb_wx">
        <i class="iconfont">&#xe6e2;</i>
    </div>
    <div class="fixed_wx">
        <div class="wx_container">
            <div class="ewcode">
                <img src="__STATIC_PATH__/index/common/img/code.png" alt="">
            </div>
            <p>扫描二维码分享到微信</p>
        </div>
    </div>
    <div class="totop">
        <i class="iconfont">&#xe663;</i>
    </div>
</div>

<script src="__STATIC_PATH__/index/common/js/sidebar.js"></script>
	<link rel="stylesheet" type="text/css" href="__STATIC_PATH__/index/wyts/css/wyts.css">
	<div class="one">
		<img src="__STATIC_PATH__/index/wyts/images/kaifa_02.jpg" class="bigpic">
	</div>

	<div class="two">
		<div class="software">
			<p class="title1">开发语言单向提升</p>
			<p class="title2">Development of single language promotion </p>
			<div class="pubu">
				<div class="board">
					<img src="__STATIC_PATH__/index/wyts/images/kaifa_11.jpg" class="smapic">
					<p class="title3">全面学习HTML 5</p>
				</div>
				<div class="board">
					<img src="__STATIC_PATH__/index/wyts/images/kaifa_13.jpg" class="smapic">
					<p  class="title3">全面学习CSS 3</p>
				</div>
				<div class="board">
					<img src="__STATIC_PATH__/index/wyts/images/kaifa_15.jpg" class="smapic">
					<p  class="title3">Javascript基础</p>
				</div>
				<div class="board">
					<img src="__STATIC_PATH__/index/wyts/images/kaifa_17.jpg" class="smapic">
					<p  class="title3">Javascript高级进阶</p>
				</div>
				<div class="board">
					<img src="__STATIC_PATH__/index/wyts/images/kaifa_29.jpg" class="smapic">
					<p  class="title3">全面学习jQuery</p>
				</div>
				<div class="board">
					<img src="__STATIC_PATH__/index/wyts/images/kaifa_31.jpg" class="smapic">
					<p  class="title3">VUE入门与进阶</p>
				</div>
				<div class="board">
					<img src="__STATIC_PATH__/index/wyts/images/kaifa_33.jpg" class="smapic">
					<p  class="title3">nodejs入门与进阶</p>
				</div>
				<div class="board">
					<img src="__STATIC_PATH__/index/wyts/images/kaifa_35.jpg" class="smapic">
					<p  class="title3">零基础学习PHP</p>
				</div>
			</div>
		</div>

		<div class="skill">
			<p class="title1">开发项目单向提升</p>
			<p class="title2">Individual promotion of development project </p>
			<div class="pubu">
				<div class="board">
					<img src="__STATIC_PATH__/index/wyts/images/kaifa_47.jpg" class="smapic">
					<p  class="title4">静态网页设计</p>
				</div>
				<div class="board">
					<img src="__STATIC_PATH__/index/wyts/images/kaifa_49.jpg" class="smapic">
					<p  class="title4">高级APP开发实战</p>
				</div>
				<div class="board">
					<img src="__STATIC_PATH__/index/wyts/images/kaifa_51.jpg" class="smapic">
					<p  class="title4">高级电商网站开发</p>
				</div>
				<div class="board">
					<img src="__STATIC_PATH__/index/wyts/images/kaifa_53.jpg" class="smapic">
					<p  class="title4">进阶nodejs学习</p>
				</div>
				<div class="board">
					<img src="__STATIC_PATH__/index/wyts/images/kaifa_65.jpg" class="smapic">
					<p  class="title4">CSS动画实用技巧</p>
				</div>
				<div class="board">
					<img src="__STATIC_PATH__/index/wyts/images/kaifa_67.jpg" class="smapic">
					<p  class="title4">CSS3 3D效果学习</p>
				</div>
				<div class="board">
					<img src="__STATIC_PATH__/index/wyts/images/kaifa_69.jpg" class="smapic">
					<p  class="title4">Canvas玩儿转红包照片</p>
				</div>
				<div class="board">
					<img src="__STATIC_PATH__/index/wyts/images/kaifa_71.jpg" class="smapic">
					<p  class="title4">移动WEB开发技术</p>
				</div>
			</div>
		</div>

		<div class="button">
			查看更多
		</div>
	</div>
		<div id="footer" class="index_footer">
			<div class="footer_content">
				<div class="contact_us">
					<!-- h70 w285 -->
					<p class="title">联系方式</p>
					<p class="subtitle">CONTACT</p>
				</div>
				<div class="leave">
					<!-- w860 h285  -->
					<div class="addr">
						<!-- 200 200 -->
						<h1 class="addr_title">澳源科技</h1>
						<p class="addr_text">地点：广州市车陂龙口大厦</p>
						<p class="addr_text">邮编：510660 </p>
						<p class="addr_text">电话：020-2988 0625</p>
						<p class="addr_text">手机：135 6005 8026</p>
						<p class="addr_text">邮箱：eleven@yuanku.org</p>
						<div class="contact_icon">
							<a href="#">
								<img src="__STATIC_PATH__/index/common/img/qq.png" alt="qq">
							</a>
							<a href="#">
								<img src="__STATIC_PATH__/index/common/img/wx.png" alt="weixin">
							</a>
							<a href="#">
								<img src="__STATIC_PATH__/index/common/img/wb.png" alt="weibo">
							</a>
						</div>
					</div>
					<div class="msg">
						<!-- 310 285-->
						<form>
							<p class="leave_msg">
								<span class="msg_attr">姓名</span><input class="user_name" type="text"  name="">
							</p>
							<p class="leave_msg">
								<span class="msg_attr">电话</span><input class="tel" type="text" name="">
							</p>
							<p class="leave_msg">
								<span class="msg_attr">学校</span><input class="school" type="text" name="">
							</p>
							<p class="leave_msg">
								<span class="msg_attr">邮箱</span><input class="email" type="text" name="">
							</p>
							<p class="leave_msg">
								<span class="msg_attr">内容</span><input class="user_content" type="text" name="">
							</p>
							<div>
								<input class="leave_btn" type="button" value="提交">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<p class="cr_content">COPYRIGHT (©) 2017 澳源科技网站.版权所有</p>
		</div>
	</body>

	<script>
		var validate_aj = "<?php echo url('index/save'); ?>";
		var rt = "<?php echo url('index'); ?>";
	</script>
	<script src="__STATIC_PATH__/index/common/js/footer.js"></script>
</html>