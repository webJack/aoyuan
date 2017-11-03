<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:94:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\aoyuan\public/../application/index\view\about\index.html";i:1509468093;s:96:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\aoyuan\public/../application/index\view\common\header.html";i:1509464089;s:97:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\aoyuan\public/../application/index\view\common\sidebar.html";i:1509467604;s:96:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\aoyuan\public/../application/index\view\common\footer.html";i:1509454245;}*/ ?>

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- //以极速模式渲染 -->
    <meta name="renderer" content="webkit" />
    <!-- 以最高级模式渲染文档 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <!--  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script> -->
   <script type="text/javascript" src="__STATIC_PATH__/index/common/js/jquery.min.js"></script>
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
                <li class="navitem">
                    <a class="a_nav" href="<?php echo url('xqhz/index'); ?>">
                        <span>校企合作</span>
                    </a>
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
                <img src="__STATIC_PATH__/index/common/img/code.jpg" alt="">
            </div>
            <p>扫描二维码分享到微信</p>
        </div>
    </div>
    <div class="totop">
        <i class="iconfont">&#xe663;</i>
    </div>
</div>

<script src="__STATIC_PATH__/index/common/js/sidebar.js"></script>
    <link rel="stylesheet" type="text/css" href="__STATIC_PATH__/index/about/css/about.css">
    <script type="text/javascript" src="__STATIC_PATH__/index/about/js/about.js"></script>
    <!-- banner -->
    <div class="banner">
        <img src="__STATIC_PATH__/index/about/images/about_02.jpg">
    </div>   
    <!-- banner-end -->

    <!-- 关于澳源 -->
    <div class="aboutaoyuan container">
        <h2 class="header">关于澳源</h2>
        <p class="summary">ABOUT</p>
        <div class="content">
            <div class="text">
                <div class="box">
                    <p>澳源科技成立于中国广告业和电子商务业发展迅猛的21世纪初，由国内知名的金融证券公司和房
                地产商投资运营。在互联网行业、电子商务业和广告业迅猛发展的时代背景下，澳源股份依靠强
                大的技术团队为企业和客户提供专业的：IT科技服务、商业视觉设计和品牌策划服务、网站策划
                与互联网开发服务、IT运维与网络营销服务、生物医药科技产品研发与跨境电商服务、大学生创
                业与就业扶持服务、教育产业大数据研究等。
                </p>
                <img src="__STATIC_PATH__/index/about/images/关于澳源_03.jpg">
                </div>
                <p>
                截止2017年3月，澳源科技公司发展了澳元健、澳源智享、凡彩电子科技、星珀互动传媒、运筹科技、东莞汇泉投资、点艺数码科技等十几家股东公司和
                分公司。并于2016年2月与澳元健集团合并成立澳源股份，股权代码896342。公司业务遍及广州、上海、深圳、成都、长沙、佛山以及美国、澳大利亚、
                新西兰等国内外20几个国家和地区，在多国拥有自己独立的保税仓。海关保税仓备案号：IE150817366642；海关总署备案号：4401963DXY。
                基于优质的校企合作资源，澳源股份同时为企业提供相关IT技术的内训服务，人才输送服务和高校IT人才实习实训服务。通过整合人才和技术资源，澳源股
                份不断为广告和IT行业输送新鲜血液、为客户提供优质的产品和服务。</p>
                </div>
        </div>
    </div>
    <!-- 关于澳源end -->

    <!-- 澳源文化 -->
    <div class="culture container"">
        <h2  class="header">澳源文化</h2>
        <p class="summary">AOYUAN CULTURE</p>
        <ul>
            <li>
                <div class='img'>
                    <div class="mengban"></div>
                    <div class='biaoti'>
                    使命
                    </div>
                </div>
                <p class='summarytext'>
                为客户提供专业的，符合 时代发展趋势并具有竞争 力的品牌策划、IT技术及 IT人才发展服务
                </p>
            </li><li >
                <div class='img'>
                    <div class="mengban"></div>
                    <div class='biaoti'>
                        愿景
                    </div>
                </div>
                <p class='summarytext'>
                成为国内最权威的品牌策划、IT 技术服务及高端人才培养方案的提供商。
                </p>
            </li><li >               
                <div class='img'><div class="mengban"></div><div class='biaoti'>
                    价值观
                </div>
                </div>
                <p class='summarytext'>
                专业、创新、服务、责任
                </p>
            </li><li >
                <div class='img'><div class="mengban"></div><div class='biaoti'>
                    理念
                </div>
                </div>
                
                <p class='summarytext'>
                智慧传承，追求卓越
                </p>
            </li>
        </ul>

    </div>
    <!-- 澳源文化end -->
    
   

    <!-- 合作企业 -->
    <div class="corporation container">
        <h2  class="header">合作企业</h2>
        <p class="summary">Cooperative enterprise </p>
    <ul>
        <li>
            <div class='img'>
                <img src="__STATIC_PATH__/index/about/images/about_30.jpg" alt="1">
            </div>
        </li>
        <li>
            <div class='img'>
                <img src="__STATIC_PATH__/index/about/images/about_24.jpg" alt="1">
            </div>
        </li>
        <li>
            <div class='img'>
                <img src="__STATIC_PATH__/index/about/images/about_37.jpg" alt="1">
            </div>
        </li>
        <li>
            <div class='img'>
                <img src="__STATIC_PATH__/index/about/images/about_24.jpg" style="width: 100%;height: 100%;" alt="1">
            </div>
        </li>
        <li>
            <div class='img'>
                <img src="__STATIC_PATH__/index/about/images/about_39.jpg" alt="1">
            </div>
        </li>
        <li>
            <div class='img'>
                <img src="__STATIC_PATH__/index/about/images/about_24.jpg" alt="1">
            </div>
        </li>
        <li>
            <div class='img'>
                <img src="__STATIC_PATH__/index/about/images/about_42.jpg" alt="1">
            </div>
        </li>
        <li>
            <div class='img'>
                <img src="__STATIC_PATH__/index/about/images/about_44.jpg" alt="1">
            </div>
        </li>
        <li>
            <div class='img'>
                <img src="__STATIC_PATH__/index/about/images/about_50.jpg" alt="1">
            </div>
        </li>
        <li>
            <div class='img'>
                <img src="__STATIC_PATH__/index/about/images/about_51.jpg" alt="1">
            </div>
        </li>
        <li>
            <div class='img'>
                <img src="__STATIC_PATH__/index/about/images/about_53.jpg" alt="1">
            </div>
        </li>
        <li>
            <div class='img'>
                <img src="__STATIC_PATH__/index/about/images/about_56.jpg" alt="1">
            </div>
        </li>
        <li>
            <div class='img'>
                <img src="__STATIC_PATH__/index/about/images/about_63.jpg" alt="1">
            </div>
        </li>
        <li>
            <div class='img'>
                <img src="__STATIC_PATH__/index/about/images/about_65.jpg" alt="1">
            </div>
        </li>
        <li>
            <div class='img'>
                <img src="__STATIC_PATH__/index/about/images/about_67.jpg" alt="1">
            </div>
        </li>
        <li>
            <div class='img'>
                <img src="__STATIC_PATH__/index/about/images/about_70.jpg" alt="1">
            </div>
        </li>

    </ul>
    <h3>仅支持部分企业</h3>
    </div>
    <!-- 合作企业end -->
     

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
								<span class="msg_attr">姓名</span><input class="user_name" value="1" type="text"  name="">
							</p>
							<p class="leave_msg">
								<span class="msg_attr">电话</span><input class="tel" value="12345678901" type="text" name="">
							</p>
							<!-- value="12345678901" -->
							<p class="leave_msg">
								<span class="msg_attr">学校</span>
								<input class="user_school" type="text">
							</p>
							<p class="leave_msg">
								<span class="msg_attr">邮箱</span><input class="email" value="111@qq.com" type="text" name="">
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