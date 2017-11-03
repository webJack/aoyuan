<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:91:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\15\tp5\public/../application/index\view\user\reg.html";i:1505730146;s:96:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\15\tp5\public/../application/index\view\common\header.html";i:1505736777;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>header</title>
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

		<ul class="mt-3">
			<li>
				<a href="<?php echo url('index/index'); ?>">home</a>
			</li>
			<li>
				<a href="<?php echo url('welcome/welcome'); ?>">msg</a>
			</li>
			<li>
				<a href="<?php echo url('user/login'); ?>">login</a>
			</li>
			<li>
				<a href="<?php echo url('user/reg'); ?>">reg</a>
			</li>	
		</ul>

<div class="container">
	<form action="<?php echo url('toReg'); ?>" >
		<div class="form-group">
			<label>
				user_name
			</label>
			<input type="text" name="user_name" class="form-control">
		</div>
		<div class="form-group">
			<label>
				password
			</label>
			<input type="text" name="password" class="form-control">
		</div>		
		<div class="form-group">
			<label>
				comfirm
			</label>
			<input type="text" name="comfirm_pwd" class="form-control">
		</div>
		<div class="form-group">
			<label>
				captcha
			</label>
			<input type="text" name="captcha" class="form-control">
			<div>
			<img src="<?php echo url('setCap'); ?>" alt="">
				
			</div>
		</div>				
		<div class="form-group">
			<input type="submit" value="submit" class="btn btn-outline-primary">
		</div>		
	</form>
</div>