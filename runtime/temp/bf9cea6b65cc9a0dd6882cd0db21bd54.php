<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:93:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\15\tp5\public/../application/index\view\user\login.html";i:1505738350;s:96:"C:\WAMP\Apache-2.4.20\Apache24\htdocs\15\tp5\public/../application/index\view\common\header.html";i:1505736777;}*/ ?>
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
	<h2><?php echo $Welcome; ?>Have a good day !!!</h2>
	<form action="">
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
			<input type="button" value="Submit" class="btn btn-info" onclick="toAjax()">
		</div>
	</form>

</body>	
	<script>
		var cur_url_for_ajax = "<?php echo url('user/to_login_judge'); ?>";
	</script>
	<script src="__STATIC_PATH__/index/js/login.js">
		
	</script>

</html>