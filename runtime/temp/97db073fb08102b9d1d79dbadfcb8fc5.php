<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:94:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\15\tp5\public/../application/admin\view\goods\index.html";i:1505804029;s:96:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\15\tp5\public/../application/admin\view\public\header.html";i:1507011938;s:96:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\15\tp5\public/../application/admin\view\public\footer.html";i:1501302147;}*/ ?>
<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js">
    <![endif]-->
    <!--[if IE 9]>
    <html lang="en" class="ie9 no-js">
        <![endif]-->
        <!--[if !IE]>
        <!-->
        <html lang="en">
            <!--<![endif]-->
            <!-- BEGIN HEAD -->
<head>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <meta charset="utf-8">
            <title>__SITE_TILTLE__</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1" name="viewport">
            <meta content="Preview page of Metronic Admin Theme #1 for bootstrap inputs, input groups, custom checkboxes and radio controls and more" name="description">
            <meta content="" name="author">
            <!-- BEGIN GLOBAL MANDATORY STYLES -->
            <link href="__PUBLIC__/static/admin/css.css" rel="stylesheet" type="text/css">
            <link href="__PUBLIC__/static/library/fontasome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href="__PUBLIC__/static/admin/simple-line-icons.css" rel="stylesheet" type="text/css">
            <link href="__PUBLIC__/static/admin/bootstrap.css" rel="stylesheet" type="text/css">
            <link href="__PUBLIC__/static/admin/bootstrap-switch.css" rel="stylesheet" type="text/css">
            <!-- END GLOBAL MANDATORY STYLES -->
            <!-- BEGIN THEME GLOBAL STYLES -->
            <link href="__PUBLIC__/static/admin/components.css" rel="stylesheet" id="style_components" type="text/css">
            <link href="__PUBLIC__/static/admin/plugins.css" rel="stylesheet" type="text/css">
            <!-- END THEME GLOBAL STYLES -->
            <!-- BEGIN THEME LAYOUT STYLES -->
            <link href="__PUBLIC__/static/admin/layout.css" rel="stylesheet" type="text/css">
            <link href="__PUBLIC__/static/admin/grey.min.css" rel="stylesheet" type="text/css" id="style_color">

            <script src="__PUBLIC__/static/admin/jquery_002.js" type="text/javascript"></script>

            <!-- END THEME LAYOUT STYLES -->
            <style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}
</style>
</head>
            <!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid" cz-shortcut-listen="true">
            <div class="page-wrapper">
                <!-- BEGIN HEADER -->
                <div class="page-header navbar navbar-fixed-top">
                    <!-- BEGIN HEADER INNER -->
                    <div class="page-header-inner ">
                        <!-- BEGIN LOGO -->
                        <div class="page-logo">
                            <a href="<?php echo url('admin/index/index'); ?>" style="color: #fff;padding: 15px;font-size: 16px;">__SITE_TILTLE__</a>
                            <div class="menu-toggler sidebar-toggler">
                                <span></span>
                            </div>
                        </div>
                        <!-- END LOGO -->
                        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                            <span></span>
                        </a>
                        <!-- END RESPONSIVE MENU TOGGLER -->
                        <!-- BEGIN TOP NAVIGATION MENU -->
                        <div class="top-menu">
                            <ul class="nav navbar-nav pull-right">

                                <li class="dropdown dropdown-user">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <img alt="" class="img-circle" src="__PUBLIC__/static/admin/avatar3_small.jpg">
                                        <span class="username username-hide-on-mobile">管理员</span>
                                    </a>

                                </li>
                                <!-- END USER LOGIN DROPDOWN -->
                                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                                <li class="dropdown dropdown-quick-sidebar-toggler">
                                    <a href="javascript:;" class="dropdown-toggle"> <i class="icon-logout"></i>
                                    </a>
                                </li>
                                <!-- END QUICK SIDEBAR TOGGLER --> </ul>
                        </div>
                        <!-- END TOP NAVIGATION MENU --> </div>
                    <!-- END HEADER INNER --> </div>
                <!-- END HEADER -->
                <!-- BEGIN HEADER & CONTENT DIVIDER -->
                <div class="clearfix"></div>
                <!-- END HEADER & CONTENT DIVIDER -->
                <!-- BEGIN CONTAINER -->
                <div class="page-container">
                    <!-- BEGIN SIDEBAR -->
                    <div class="page-sidebar-wrapper">

                        <div class="page-sidebar navbar-collapse collapse">

                            <ul class="page-sidebar-menu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                                <li class="sidebar-toggler-wrapper hide">
                                    <div class="sidebar-toggler">
                                        <span></span>
                                    </div>
                                </li>
                                
                                <li class="nav-item <?php echo  is_active('category','active');?>
                                    ">
                                    <a href="<?php echo url('category/index'); ?>" class="nav-link nav-toggle">
                                        <i class="icon-disc"></i>
                                        <span class="title">话题分类管理</span>
                                    </a>
                                </li> 

                                 <li class="nav-item <?php echo  is_active('user','active');?>
                                    ">
                                    <a href="<?php echo url('user/index'); ?>" class="nav-link nav-toggle">
                                        <i class="icon-disc"></i>
                                        <span class="title">用户管理</span>
                                    </a>
                                </li> 

                                <li class="nav-item <?php echo  is_active('vip','active');?>
                                    ">
                                    <a href="<?php echo url('vip/index'); ?>" class="nav-link nav-toggle">
                                        <i class="icon-disc"></i>
                                        <span class="title">专家管理</span>
                                    </a>
                                </li> 

                                <li class="nav-item <?php echo  is_active('vpcount','active');?>
                                    ">
                                    <a href="<?php echo url('vpcount/index'); ?>" class="nav-link nav-toggle">
                                        <i class="icon-disc"></i>
                                        <span class="title">专家统计管理</span>
                                    </a>
                                </li>                                             
                                <li class="nav-item <?php echo  is_active('system','active');?>
                                    ">
                                    <a href="<?php echo url('system/index'); ?>" class="nav-link nav-toggle">
                                        <i class="icon-bell"></i>
                                        <span class="title">系统设置</span>
                                    </a>
                                </li>

                                <li class="nav-item ">
                                    <a href="/" target="_balnk" class="nav-link nav-toggle">
                                        <i class="icon-home"></i>
                                        <span class="title">进入首页</span>

                                    </a>

                                </li>

                            </ul>
                            <!-- END SIDEBAR MENU -->
                            <!-- END SIDEBAR MENU --> </div>
                        <!-- END SIDEBAR --> </div>
                    <!-- END SIDEBAR -->
                    <!-- BEGIN CONTENT -->
                    <div class="page-content-wrapper">
                        <!-- BEGIN CONTENT BODY -->
                        <div class="page-content" style="min-height: 1021px;">
                            <!-- BEGIN PAGE HEADER-->

 <a href="<?php echo url('add'); ?>" class="btn btn-info">添加课程</a>
    <h2>课程管理界面</h2>
    <div class="row">
        <form action="" class="form ">
            <div class="form-group">
                <label >课程分类</label>
                <select name="cate_id">
                    <option value="">请选择</option>
                    <!-- <?php foreach($cate_tree as $value): ?> -->
                    <option disabled="" value="<?php echo $value['id']; ?>"><?php echo $value['cate_name']; ?></option>
                    <!-- <?php if (isset($value['child_menu'])){ ?>
                    -->
                    <!-- <?php foreach($value['child_menu'] as $second_value): ?> -->
                    <option disabled="" value="<?php echo $second_value['id']; ?>" style="padding-left:10px;"><?php echo $second_value['cate_name']; ?></option>
                    <!-- <?php if (isset($second_value['child_menu'])){ ?>
                    -->
                    <!-- <?php foreach($second_value['child_menu'] as $third_value): ?> -->
                    <option value="<?php echo $third_value['id']; ?>" style="padding-left:30px;"><?php echo $third_value['cate_name']; ?></option>
                    <!-- <?php endforeach; ?> -->
                    <!-- <?php } ?>
                    -->
                    <!-- <?php endforeach; ?> -->
                    <!-- <?php } ?>
                    -->
                    <!-- <?php endforeach; ?> --> </select>
                <input type="submit" class="btn btn-info" value="搜索"></div>

        </form>
    </div>
    <table class="table">
        <tr>
            <th>编号</th>
            <th>课程名称</th>
            <th>课程分类</th>
            <th>课程价格</th>
            <th>创建时间</th>
            <th>操作</th>
        </tr>
        <?php foreach($class_list as $value): ?>
        <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo substr($value['class_name'],0,27); ?></td>
            <td><?php echo $value['cate_name']; ?></td>
            <td><?php echo $value['class_price']; ?></td>
            <td><?php echo date("Y-m-d H:i:s",$value['create_time']); ?></td>
            <td>
                <a href="<?php echo url('edit',['id'=>$value['id']]); ?>" class="btn btn-info">编辑</a>
                <a href="" class="btn btn-danger">删除</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div><?php echo $class_list->render(); ?></div>

 <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2017 © 技术支持
                    <a target="_blank" href="http://www.bslxx.com/contact">smith</a> &nbsp;|&nbsp;
                    
                </div>
                <div class="scroll-to-top" style="display: none;">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <!-- BEGIN QUICK NAV -->
       <!--  <nav class="quick-nav">
            <a class="quick-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>
            <ul>
             
                <li>
                    <a href="<?php echo url('intelligence/index'); ?>" >
                        <span>资讯管理</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('user/index'); ?>" >
                        <span>用户管理</span>
                        <i class="icon-user"></i>
                    </a>
                </li>
               
            </ul>
            <span aria-hidden="true" class="quick-nav-bg"></span>
        </nav> -->
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script async="" src="__PUBLIC__/static/admin/gtm.js"></script><script async="" src="__PUBLIC__/static/admin/analytics.js"></script><script src="__PUBLIC__/static/admin/jquery_002.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/bootstrap.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/js.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/jquery_003.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/jquery.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/bootstrap-switch.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="http://keenthemes.com/preview/metronic/theme/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
       <script src="__PUBLIC__/static/admin/theme2/layout.min.js" type="text/javascript"></script>
           
        <script src="__PUBLIC__/static/admin/quick-sidebar.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/quick-nav.js" type="text/javascript"></script>

        

        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
   



</body></html>