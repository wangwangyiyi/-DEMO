<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"C:\wamp\www\blog\public/../application/index\view\user\login.html";i:1538382997;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>土锤日记</title>
	<link rel="shortcut icon" type="image/x-icon" href="icon.ico" />
	<link rel="stylesheet" href="http://www.tp5.com/blog/public/static/index/css-4/bootstrap.min.css" />
	<link rel="stylesheet" href="http://www.tp5.com/blog/public/static/index/css-4/animate.css" />
	<link rel="stylesheet" href="http://www.tp5.com/blog/public/static/index/css-4/index.css" />
</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?php echo url('Index/index'); ?>" class="navbar-brand">1.x</a>
			</div>
			<div class="navbar-menu collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo url('user/login'); ?>">登录</a></li>
					<li><a href="<?php echo url('user/register'); ?>">注册</a></li>
				</ul>
				<form action="#" class="navbar-form navbar-right">
					<div class="form-group">
						<input type="text" class="form-control input-sm" id="search" name="search" placeholder="搜索" />
					</div>
					<div class="form-group">
						<button class="btn btn-default btn-sm">搜索</button>
					</div>
				</form>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="content center-block animated fadeInDown">
			<div class="page-header h1">用户登录</div>
			<form action="" method="post">
				<div class="form-group">
					<label for="username" class="control-label">用户名</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="用户名" />
				</div>
				<div class="form-group">
					<label for="password" class="control-label">密码</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="密码" />
				</div>
				<div class="form-group">
					<label for="verify" class="control-label">验证码</label>
					<div class="input-group">
						<input type="text" class="form-control" id="verify" name="verify" placeholder="验证码" />
						<span class="input-group-addon"><div><img src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>'" alt="captcha" /></div></span>
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-primary btn-block">登录</button>
				</div>
			</form>
		</div>
		<div class="bottom center-block animated fadeInUp">
			Copyright 2018 www.scwangyi.xyz All Rights Reserved
		</div>
	</div>
	
	<script src="http://www.tp5.com/blog/public/static/index/js/jquery-3.3.1.min.js"></script>
	<script src="http://www.tp5.com/blog/public/static/index/js/bootstrap.min.js"></script>
</body>
</html>