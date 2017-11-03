<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:96:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\aoyuan\public/../application/index\view\tribune\index.html";i:1509504087;s:96:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\aoyuan\public/../application/index\view\common\header.html";i:1509464089;s:97:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\aoyuan\public/../application/index\view\common\sidebar.html";i:1509467604;s:96:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\aoyuan\public/../application/index\view\common\footer.html";i:1509454245;}*/ ?>

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
<link href="https://cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="__STATIC_PATH__/index/tribune/css/tribune.css">
<div class="content">
    <div class="banner">
        <div class="bg_img"></div>
    </div>
    <div class="real_content">
        <div class="header_title">
            <p class="title">资讯中心</p>
            <p class="subtitle">NEWS</p>
        </div>
        <div class="category">
            <a class="cate_a" href="#">江湖论坛</a>
            <a class="cate_a" href="#">行业资讯</a>
            <a class="cate_a" href="#">澳源资讯</a>
        </div>
        <div class="news_list">
            <div class="wrapper">
                <?php foreach($news_list as $value): ?>
                <div class="wow newsitem fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <a class="newscontent" href="<?php echo url('tribune/tribune_sub'); ?>">
                        <div class="newsimg">
                            <img src="__STATIC_PATH__/index/tribune/img/<?php echo $value['img']; ?>" alt="tirbune_news">
                        </div>
                        <div class="newsbody">
                            <p class="newstitle"><?php echo $value['title']; ?></p>
                            <p class="description">
                                摘要：<?php echo $value['short_content']; ?>
                            </p>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
 			                  
            </div>
        </div>
        <div class="clear"></div>
        <div class="pages">
            <?php if($get_page_list['cur_page'] != 0): ?>
            	<a class="prev" href="#">
                    <i class="iconfont">&#xe647;</i> 上一页
                </a>
            <?php endif; ?>
            <!-- alert start -->
            <?php if($get_page_list['cur_page'] < 4 or $get_page_list['tol_page']==5): foreach($first_show as $keys=>$value): if($get_page_list['cur_page'] == $keys): ?>
                        <a class="current" href="<?php echo url('index',['cur_page'=>$keys]); ?>">
                            <?php echo $keys+1; ?>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo url('index',['cur_page'=>$keys]); ?>">    <?php echo $keys+1; ?>
                        </a>
                    <?php endif; endforeach; if($get_page_list['tol_page'] > 5): ?>
                    ...
                <?php endif; else: ?>
                <a href="<?php echo url('index',['cur_page'=>0]); ?>">
                            1
                        </a> ...             
                <?php foreach([2,1] as $num): if($get_page_list['cur_page'] == $get_page_list['cur_page']-$num): ?>
                        <a class="current" href="<?php echo url('index',['cur_page'=>$get_page_list['cur_page']-$num]); ?>">
                            <?php echo $get_page_list['cur_page']-$num+1; ?>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo url('index',['cur_page'=>$get_page_list['cur_page']-$num]); ?>">    <?php echo $get_page_list['cur_page']-$num+1; ?>
                        </a>
                    <?php endif; endforeach; ?>  
                    <a href="<?php echo url('index',['cur_page'=>$get_page_list['cur_page']]); ?>">    <?php echo $get_page_list['cur_page']+1; ?>
                    </a> 
                <?php foreach([1,2] as $num): if($get_page_list['cur_page'] == $get_page_list['cur_page']+$num): ?>
                        <a class="current" href="<?php echo url('index',['cur_page'=>$get_page_list['cur_page']+$num]); ?>">
                            <?php echo $get_page_list['cur_page']+$num+1; ?>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo url('index',['cur_page'=>$get_page_list['cur_page']+$num]); ?>">    <?php echo $get_page_list['cur_page']+$num+1; ?>
                        </a>
                    <?php endif; endforeach; endif; ?>
            <!-- alert end -->
            <?php if($get_page_list['cur_page'] != $get_page_list['tol_page']-1): ?>   
            	<a class="next" href="#">下一页
                    <i class="iconfont">&#xe648;</i>
                </a>
            <?php endif; ?>
        	<span class="total_page">共
				<span><?php echo $tol_list; ?></span>
        	页</span>
        	<form action="<?php echo url("","",true,false);?>" >
        		<span>到第</span>
        		<input class="topage" name="topage" type="text">
        		<span>页</span>
        		<input class="tosub" type="submit" value="确定">
        	</form>
        </div>
    </div>
</div>
<script src="https://cdn.bootcss.com/wow/1.1.2/wow.min.js"></script>

<script type="text/javascript">
    var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 5,
            mobile: true,
            live: true
        });
    wow.init();
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
</html>