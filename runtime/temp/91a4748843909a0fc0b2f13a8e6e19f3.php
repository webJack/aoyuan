<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"D:\wamp64\www\aoyuan\public/../application/index\view\index\index.html";i:1509587069;s:72:"D:\wamp64\www\aoyuan\public/../application/index\view\common\header.html";i:1509591423;s:73:"D:\wamp64\www\aoyuan\public/../application/index\view\common\sidebar.html";i:1509527736;s:72:"D:\wamp64\www\aoyuan\public/../application/index\view\common\footer.html";i:1509528162;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php if($title): ?> <?php echo $title; ?> - <?php endif; ?>  澳源科技 - 智慧创造新未来</title>
    <meta name="Keywords" content="澳源,源酷,广州澳源 ,澳源股份,源酷创意,广州源酷,广州澳源股份有限公司" />
    <meta name="description" content="澳源科技引领行业未来，中国领袖企业典范，品质无可替代。澳源股份同时为企业提供相关IT技术的内训服务，人才输送服务和高校IT人才实习实训服务。通过整合人才和技术资源，澳源股份不断为广告和IT行业输送新鲜血液、为客户提供优质的产品和服务。 " />
    
    <link rel="shortcut icon" href="/aoyuan/favicon.ico">
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

    <div class="all_container">
    <div id="header" class="index_nav">
        <div class="nav_content">
            <a class="logo" href="/">
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
                            <a href="<?php echo url('wyts/sjts'); ?>">
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
            <a href="tel:13560058026">
                   <i class="iconfont">&#xe649;</i>13560058026
                </a>
        </div>
        <div class="olzx_tel">
            <div>
                <i class="iconfont">&#xe69a;</i> 联系电话
            </div>
            <p>020-2988 0625</p>
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
<link rel="stylesheet" href="https://cdn.bootcss.com/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
<link rel="stylesheet" href="__STATIC_PATH__/index/index/css/iconfont.css">
<link rel="stylesheet" href="__STATIC_PATH__/index/index/css/index.css">
<link rel="stylesheet" href="__STATIC_PATH__/index/index/css/reset.css">
<script type="text/javascript"></script>
<div class="carousel">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="<?php echo url('zxcc/brzx'); ?>"><img src="__STATIC_PATH__/index/index/images/banner1.jpg"/></a></div>
            <div class="swiper-slide"><a href="<?php echo url('zxcc/qrpy'); ?>"><img src="__STATIC_PATH__/index/index/images/banner2.jpg"/></a></div>
            <div class="swiper-slide"><a href="<?php echo url('zxcc/wrsy'); ?>"><img src="__STATIC_PATH__/index/index/images/banner3.jpg"/></a></div>
            <div class="swiper-slide"><a href="<?php echo url('tribune/index'); ?>"><img src="__STATIC_PATH__/index/index/images/banner4.jpg"/></a></div>
        </div>
    </div>
</div>
<div class="about">
    <div class="about-container">
        <div class="about-nav">
            <ul class="about-wrapper">
                <li class="about-item wow slideInUp " data-wow-delay="0.1s">
                    <a href="<?php echo url('wyts/kfts'); ?>"><img src="__STATIC_PATH__/index/index/images/top-nav_05.jpg"></a>
                </li>
                <li class="about-item wow slideInUp" data-wow-delay="0.3s">
                    <a href="<?php echo url('zxcc/qrpy'); ?>"><img src="__STATIC_PATH__/index/index/images/top-nav_02_05.jpg"></a>
                </li>
                <li class="about-item wow slideInUp" data-wow-delay="0.5s">
                    <a href="<?php echo url('tribune/index'); ?>"><img src="__STATIC_PATH__/index/index/images/top-nav3_05.jpg"></a>
                </li>
            </ul>
        </div>
        <div class="title wow slideInUp">
            <h1>关于澳源</h1>
            <h4>about</h4>
            <div class="line"></div>
        </div>
        <div class="content">
            <div class="content-left wow slideInLeft">
                <h2>专业/服务/创新</h2>
                <p>澳源股份官网是广州澳源信息科技有限公司旗下经营和维护的网站。广州澳源信息科技有限公司（澳源股份）成立于中国广告业和电子商务业发展迅猛的21世纪初，由国内知名的金融证券公司和房地产商投资运营。在互联网行业、电子商务业和广告业迅猛发展的时代背景下，澳源股份依靠强大的技术团队为企业和客户提供专业的：IT科技服务、商业视觉设计和品牌策划服务、网站策划与互联网开发服务、IT运维与网络营销服务、生物医药科技产品研发与跨境电商服务、大学生创业与就业扶持服务、教育产业大数据研究等。
                </p>
                <p>基于优质的校企合作资源，澳源股份同时为企业提供相关IT技术的内训服务，人才输送服务和高校IT人才实习实训服务。通过整合人才和技术资源，澳源股份不断为广告和IT行业输送新鲜血液、为客户提供优质的产品和服务。澳源股份官网是广州澳源信息科技有限公司旗下经营和维护的网站。</p>
            </div>
            <div class="content-right wow slideInRight">
                <img src="__STATIC_PATH__/index/index/images/sy1.png">
                <img src="__STATIC_PATH__/index/index/images/sy2.gif">
            </div>
        </div>
        <div class="more wow slideInUp">
            <a href="<?php echo url('about/index'); ?>">
                <span>MORE</span>
                <i class="iconfont">&#xe50b;</i>
            </a>
        </div>
        <div class="clear" style="clear: both"></div>
    </div>
</div>
<div class="training">
    <div class="training-container">
        <div class="title wow slideInUp">
            <h1>百千万培养</h1>
            <h4>Bai Qian Wan Training</h4>
            <div class="line"></div>
        </div>
        <ul class="training-wrapper">
            <li class="training-item wow slideInUp " data-wow-delay="0.1s">
                <a href="<?php echo url('zxcc/brzx'); ?>">
                    <img src="__STATIC_PATH__/index/index/images/train_08.jpg">
                    <h4>百人助学</h4>
                    <span class="desc">高校助学大使</span>
                </a>
            </li>
            <li class="training-item wow slideInUp " data-wow-delay="0.3s">
                <a href="<?php echo url('zxcc/qrpy'); ?>">
                    <img src="__STATIC_PATH__/index/index/images/train_05.jpg">
                    <h4>千人培养</h4>
                    <span class="desc">IT技术人才</span>
                </a>
            </li>
            <li class="training-item wow slideInUp " data-wow-delay="0.5s">
                <a href="<?php echo url('zxcc/wrsy'); ?>">
                    <img src="__STATIC_PATH__/index/index/images/train_11.jpg">
                    <h4>万人受益/普及 </h4>
                    <span class="desc">公益实训生</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="news">
    <div class="news-container">
        <div class="title wow slideInUp">
            <h1>江湖论坛</h1>
            <h4>NEWS</h4>
            <div class="line"></div>
        </div>
        <div class="news-content">
            <div class="news-left wow slideInLeft">
                <img src="__STATIC_PATH__/index/index/images/train_11.jpg">
                <div class="left-desc">
                    <div class="left-desc-content">
                        <div class="desc-left">
                            <span>10</span>
                            <span class="year">2017-10</span>
                        </div>
                        <div class="desc-right">
                            <h4 class="desc-right-h4">老外来澳源讲解前端开发的奥秘</h4>
                            <p class="desc-right-p">资深网页开发人员Jack来到澳源为学员讲解丰 富的前端开发知识和经验，Jack来自美国，为 很多品牌服务</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-right wow slideInRight">
                <div class="news-right-top">
                    <div class="titlel">设计师该如何完成自我救赎</div>
                    <p>浙江大学经济学院2014级本科生卢昊说,“我自己在毕业之后也将作为第二十届成员赴贵州黔东南地区支教,希望能通过这一年青春,为
                        浙江大学经济学院2014级本科生卢昊说,“我自己在毕业之后也将作为 第二十届成员赴贵州黔东南地区支教,希望能通过这一年青春,为</p>
                    <div class="top-time">
                        <span>08</span>
                        <span class="year">2017-8</span>
                    </div>
                    <i class="iconfont">&#xe88c;</i>
                </div>
                <ul class="news-list">
                    <li class="news-list-item">
                        <h6>浙江大学经济学院2014级本科生卢昊说,“我自己在毕业之后也将作为 </h6>
                        <span class="time">2017-06-03</span>
                    </li>
                    <li class="news-list-item">
                        <h6>浙江大学经济学院2014级本科生卢昊说,“我自己在毕业之后也将作为 </h6>
                        <span class="time">2017-06-03</span>
                    </li>
                    <li class="news-list-item">
                        <h6>浙江大学经济学院2014级本科生卢昊说,“我自己在毕业之后也将作为 </h6>
                        <span class="time">2017-06-03</span>
                    </li>
                    <li class="news-list-item">
                        <h6>浙江大学经济学院2014级本科生卢昊说,“我自己在毕业之后也将作为 </h6>
                        <span class="time">2017-06-03</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear" style="clear: both"></div>
</div>
<div class="improve">
    <div class="improve-container">
        <div class="title wow slideInUp">
            <h1>我要提升</h1>
            <h4>I want to improve</h4>
            <div class="line"></div>
        </div>
        <ul class="improve-list">
            <li class="improve-list-item wow slideInUp " data-wow-delay="0.1s"><img src="__STATIC_PATH__/index/index/images/improve_03.jpg">
                <div class="mask" style="display: none">
                    <div class="mask-bac"></div>
                    <a href="<?php echo url('wyts/sjts'); ?>">
                        <div class="yuan">
                            <i class="iconfont">&#xe511;</i>
                            <h1 class="yuan-h1">我要提升设计</h1>
                            <i class="iconfont">&#xe60e;</i>
                        </div>
                    </a>
                </div>
            </li>
            <li class="improve-list-item wow slideInUp " data-wow-delay="0.3s"><img src="__STATIC_PATH__/index/index/images/improve2_05.jpg">
                <div class="mask" style="display: none">
                    <div class="mask-bac"></div>
                    <a href="<?php echo url('wyts/kfts'); ?>">
                        <div class="yuan">
                            <i class="iconfont">&#xe511;</i>
                            <h1 class="yuan-h1">我要提升开发</h1>
                            <i class="iconfont">&#xe60e;</i>
                        </div>
                    </a>
                </div>
            </li>
            <li class="improve-list-item wow slideInUp " data-wow-delay="0.5s"><img src="__STATIC_PATH__/index/index/images/improve_05.jpg">
                <div class="mask" style="display: none">
                    <div class="mask-bac"></div>
                    <a href="<?php echo url('wyts/wyts'); ?>">
                        <div class="yuan">
                            <i class="iconfont">&#xe511;</i>
                            <h1 class="yuan-h1">我要提升运营</h1>
                            <i class="iconfont">&#xe60e;</i>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="team">
    <div class="team-container">
        <div class="title wow slideInUp">
            <h1>精英团队</h1>
            <h4>I want to improve</h4>
            <div class="line"></div>
        </div>
        <ul class="team-list">
            <li class="team-list-item wow slideInUp" data-wow-delay="0.1s">
                <img src="__STATIC_PATH__/index/index/images/team1_05.jpg">
                <div class="detail">
                    <span class="name">叶青/Eleven</span>
                    <span class="job">澳元健集团策划总监</span>
                    <i class="iconfont icon-original">&#xe88c;</i>
                    <i class="iconfont icon-active" style="display: none">&#xe607;</i>
                    <div class="line"></div>
                    <div class="recommend">
                        擅长课题：营销策划、高情商沟通、 团队管理、项目管理、大学生就业 与创业辅导
                    </div>
                </div>
            </li>
            <li class="team-list-item wow slideInUp" data-wow-delay="0.2s">
                <img src="__STATIC_PATH__/index/index/images/team_03.jpg">
                <div class="detail">
                    <span class="name">陈亚萍/Aron</span>
                    <span class="job">广州言邦咨询CEO</span>
                    <i class="iconfont icon-original">&#xe88c;</i>
                    <i class="iconfont icon-active" style="display: none">&#xe607;</i>
                    <div class="line"></div>
                    <div class="recommend">
                        广州言邦教育咨询有限公司CEO 擅长课题：市场营销、演讲口才团 队管理、性格色彩、大学生就业与 创业辅导
                    </div>
                </div>
            </li>
            <li class="team-list-item wow slideInUp" data-wow-delay="0.3s">
                <img src="__STATIC_PATH__/index/index/images/team_06.jpg">
                <div class="detail">
                    <span class="name">叶克成/Keson</span>
                    <span class="job">澳源智享总经理</span>
                    <i class="iconfont icon-original">&#xe88c;</i>
                    <i class="iconfont icon-active" style="display: none">&#xe607;</i>
                    <div class="line"></div>
                    <div class="recommend">
                        大学生创业与就业辅导、大客户管理、 项目管理
                    </div>
                </div>
            </li>
            <li class="team-list-item wow slideInUp" data-wow-delay="0.4s">
                <img src="__STATIC_PATH__/index/index/images/team_08.jpg">
                <div class="detail">
                    <span class="name">赖一贝/Abby</span>
                    <span class="job">广州言邦咨询CHO</span>
                    <i class="iconfont icon-original">&#xe88c;</i>
                    <i class="iconfont icon-active" style="display: none">&#xe607;</i>
                    <div class="line"></div>
                    <div class="recommend">
                        擅长课题：人力资源管理、形象礼仪、 性格与测评、职业规划
                    </div>
                </div>
            </li>
        </ul>
        <div class="more wow slideInUp" data-wow-delay="0.7s">
            <a href="<?php echo url('zxcc/xmjs'); ?>">
                <span>MORE</span>
                <i class="iconfont">&#xe50b;</i>
            </a>
        </div>
    </div>
</div>
<div class="school-l">
    <div class="title wow slideInUp">
        <h1>校企合作</h1>
        <h4>School enterprise cooperation</h4>
        <div class="line"></div>
    </div>
    <ul class="school-list wow slideInUp">
        <li class="school-list-item"><img src="__STATIC_PATH__/index/index/images/school1_01.jpg" class="school1"></li>
        <li class="school-list-item"><img src="__STATIC_PATH__/index/index/images/school1_02.jpg" class="school1"></li>
        <li class="school-list-item"><img src="__STATIC_PATH__/index/index/images/school1_03.jpg" class="school1"></li>
        <li class="school-list-item"><img src="__STATIC_PATH__/index/index/images/school1_04.jpg" class="school1"></li>
        <li class="school-list-item"><img src="__STATIC_PATH__/index/index/images/school1_05.jpg" class="school1"></li>
        <li class="school-list-item"><img src="__STATIC_PATH__/index/index/images/school1_06.jpg" class="school1"></li>
        <li class="school-list-item"><img src="__STATIC_PATH__/index/index/images/school1_07.jpg" class="school1"></li>
        <li class="school-list-item"><img src="__STATIC_PATH__/index/index/images/school1_08.jpg" class="school1"></li>
        <li class="school-list-item"><img src="__STATIC_PATH__/index/index/images/school1_09.jpg" class="school1"></li>
        <li class="school-list-item"><img src="__STATIC_PATH__/index/index/images/school1_10.jpg" class="school1"></li>
        <li class="school-list-item"><img src="__STATIC_PATH__/index/index/images/school1_11.jpg" class="school1"></li>
        <li class="school-list-item"><img src="__STATIC_PATH__/index/index/images/school1_12.jpg" class="school1"></li>
    </ul>
</div>

<script type="text/javascript" src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.min.js"></script>
<script src="https://cdn.bootcss.com/wow/1.1.2/wow.min.js"></script>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
        autoplay: 4000
    });
    var wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 100,
        mobile: true,
        live: true
    });
    wow.init();

    var improve = $('.improve-list-item ');
    var mask = $('.mask');
    for (var i = 0; i < improve.length; i++) {
        (function (i) {
            improve.eq(i).mouseover(function () {
                mask.eq(i).show();
            })
            improve.eq(i).mouseout(function () {
                mask.eq(i).hide();
            })
        })(i);
    }

    var original = $('.icon-original');
    var iconAct = $('.icon-active');
    var teamItem = $('.team-list-item');
    for (var i = 0; i < teamItem.length; i++) {
        (function (i) {
            teamItem.eq(i).mouseover(function () {
                iconAct.eq(i).show();
                original.eq(i).hide();
            })
            teamItem.eq(i).mouseout(function () {
                iconAct.eq(i).hide();
                original.eq(i).show();
            })
        })(i);
    }

    var school = $('.school-list-item');
    var schoolImg = $('.school-list-item img');
    for (var i = 0; i < school.length; i++) {
        (function (i) {
            school.eq(i).mouseover(function () {
                var src = schoolImg.eq(i)[0].src;
                src = src.replace('school1', 'school');
                schoolImg.eq(i).attr('src',src);
            }).mouseout(function () {
                var src = schoolImg.eq(i)[0].src;
                src = src.replace('school', 'school1');
                schoolImg.eq(i).attr('src',src);
            })
        })(i);
    }


     // $(document).ready

    (function (doc, win) {
            var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
            recalc = function () {
                var clientWidth = docEl.clientWidth;
                if (!clientWidth) return;
                if (clientWidth >= 1920) {
                    docEl.style.fontSize = '20px';
                } else {
                    docEl.style.fontSize = 20 * (clientWidth / 1920) + 'px';
                }
            };

            if (!doc.addEventListener) return;
            win.addEventListener(resizeEvt, recalc, false);
            doc.addEventListener('DOMContentLoaded', recalc, false);
        })(document, window);

    

</script>
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
 <script type="text/javascript">
 	$(".board").click(function () {
 		location.href='http://p.qiao.baidu.com/cps/chat?siteId=11339123&userId=24680013'
 	})
 </script>

</div>
</html>