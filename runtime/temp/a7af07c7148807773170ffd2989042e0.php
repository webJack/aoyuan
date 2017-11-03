<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:102:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\aoyuan\public/../application/index\view\tribune\tribune_sub.html";i:1509342759;s:96:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\aoyuan\public/../application/index\view\common\header.html";i:1509445002;s:96:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\aoyuan\public/../application/index\view\common\footer.html";i:1509378887;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="__STATIC_PATH__/index/tribune/css/tribune_sub.css">
<div class="content">
    <?php echo $news_content['content']; ?>
    <!-- <div class="ctn_header">
        <p class="title">
            美女设计师创始人Jolin：爱幻想才能改变世界</p>
        <p class="subtitle">
            <span>
                <i class="iconfont">&#xe703;</i>
                 2017-10-23 10:46:21
            </span>
            <span>
                <i class="iconfont">&#xe7a9;</i>
                 377144
            </span>
        </p>
    </div>
    <div class="ctn_body">
        <p>对于家居软装方面的热爱，Jolin说不清从什么时候开始，但疯狂迷恋这个行业要从学生时代说起。Jolin就读于东华大学，主修设计专业，美女总是对美的事物格外敏感。一次偶然的机会接触 家居门店的布展工作，便沉浸其中，喜欢上了跟地毯、抱枕、窗帘打交道的行业，或许也是一种对家的眷恋吧。 
        </p>
        <p>就这样，大学期间就开始了软装设计方面的实习经历，开始把自己的点滴想法融入到实践中。也正是这段经历，让她深知自己和高手的差距不仅仅是经验，更多在对生活的理解和认知上。2010 年毕业后，Jolin凭借出色的毕业成绩与丰富的实习经历，进入中国最好的高端家居用品零售商——美克美家，开始了自己的软装设计工作。短短四年时间，Jolin从一名普通的设计助理成长为 设计主管，带领自己的设计团队开始实践自己一个又一个关于软装设计的“幻想”。
        </p>
        <div class="ctn_img_big">
            <div class="big_left">
                <img src="__STATIC_PATH__/index/tribune/img/big_1.png" alt="big_1">
            </div>
            <div class="big_right">
                <img src="__STATIC_PATH__/index/tribune/img/big_2.png" alt="big_2">
            </div>                
        </div>
        <p>2015年Jolin加入“百搭屋”——软装设计买手平台的创立中，几个联合创始人对于现在家居软装行业消费者选择渠道少、一站式购物难、消费陷阱多等痛点的认识不尽相同，更对于Jolin提 出的独立软装设计买手和软装买手工作室的概念一拍即合。假如有一天，消费者不用再去成本高昂的家居卖场购买商品，而是有具备软装设计能力的买手（buyer）为其服务，体验环节在更加个 性化的设计工作室完成，售后保障由诚信交易平台提供支持，消费者等送货满意再通知平台付款，那一切都会改变，而消费者也不必再为传统门店的高成本而买单。于是，一个汇聚了专业软装设 计买手团队、品牌家居买手店入驻、中国电信支付体系信用背书的中国首家软装设计买手诚信交易平台百搭屋正是上线，上线之后便获得许多消费者的青睐。
        </p>
        <p style="margin-top: 55px;"> Jolin最后说，爱幻想的人才适合创业，因为总能去想象和追求美好的事物，对产品、用户、服务等每个环节都“幻想”能够达到极致，不懈追求，这也是百搭屋（Betawoo）品牌的精髓，期 待着去改变世界。
        </p>
         <div class="ctn_img_sm">
            <div class="sm_left">
                <img src="__STATIC_PATH__/index/tribune/img/sm_1.png" alt="sm_1">
            </div>
            <div class="sm_right">
                <img src="__STATIC_PATH__/index/tribune/img/sm_2.png" alt="sm_2">
            </div>                
        </div>
    </div> -->
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