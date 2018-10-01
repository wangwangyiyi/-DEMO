<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"C:\wamp\www\blog\public/../application/index\view\index\index.html";i:1538317870;s:58:"C:\wamp\www\blog\application\index\view\common\header.html";i:1538298516;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<title>土锤日记</title>
	<meta name="description" content="neko-description">
	<meta name="author" content="Little NEKO">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
	<link type="text/css" rel="stylesheet" href="http://www.tp5.com/blog/public/static/index/css/custom-icons.css">
	<link type="text/css" rel="stylesheet" href="http://www.tp5.com/blog/public/static/index/css/external-plugins.min.css">
	<link type="text/css" rel="stylesheet" href="http://www.tp5.com/blog/public/static/index/css/neko-framework-layout.css">
	<link type="text/css" rel="stylesheet" id="color" href="http://www.tp5.com/blog/public/static/index/css/neko-framework-color.css">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<script src="http://www.tp5.com/blog/public/static/index/js/modernizr.custom.js"></script>
</head>
<body class="activate-appear-animation header-6 parallaxed-footer">
	<!-- global-wrapper -->
	<div id="global-wrapper">
		<!-- header -->

				<header class="menu-header navbar-fixed-top" role="banner">
			<div class="container">
				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<!-- hamburger button -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">菜单</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- / hamburger button -->

						<!-- logo -->
						<a class="navbar-brand" href="index.html">
							<img src="http://www.tp5.com/blog/public/uploads/<?php echo $result['blog_logo']; ?>" style="height: 40px" alt="EDENA website template" class="main-logo"/>
							<img src="http://www.tp5.com/blog/public/uploads/<?php echo $result['blog_logo']; ?>" style="height: 40px" alt="EDENA website template" class="main-logo-light"/>
						</a>
						<!-- / logo -->
					</div>
					<div class="collapse navbar-collapse">
						<!-- Main navigation -->
						<ul class="nav navbar-nav navbar-right">

							<li>
								<a href="#" class="has-sub-menu">站点导航</a>
								<ul class="sub-menu">
									<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
									<li> 
										<a href="#" class="has-sub-menu"><?php echo $vo['category_name']; ?></a>
										<ul class="sub-menu">
											<?php if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$chl): $mod = ($i % 2 );++$i;?>
											<li>
												<a href="<?php echo url('Category/category'); ?>?id=<?php echo $chl['id']; ?>"><?php echo $chl['category_name']; ?></a>
												<!-- <ul class="sub-menu">
													<li><a href="features-header-large.html">陈冠希</a></li>
												</ul> -->

											</li>
											<?php endforeach; endif; else: echo "" ;endif; ?>
										</ul>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</li>

							<li>
								<a href="#" class="has-sub-menu">日记</a>
								<ul class="sub-menu">
									<li><a href="shop-home.html">杂七杂八</a></li>
									<li><a href="shop-products.html">建站日志</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="has-sub-menu">个人中心</a>
								<ul class="sub-menu">
									<li><a href="<?php echo url('Personalcenter/personalcenter'); ?>">进入个人中心</a></li>
									<li><a href="login.html">签到</a></li>
								</ul>
							</li>
							<li>
								<a href="<?php echo url('Donationcenter/donationcenter'); ?>" class="has-sub-menu">捐助中心</a>
								<ul class="sub-menu">
									<li><a href="<?php echo url('Donationcenter/donationcenter'); ?>">扫码支付</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="has-sub-menu">登录</a>
								<ul class="sub-menu">
									<li><a href="<?php echo url('User/login'); ?>">登录</a></li>
									<li><a href="<?php echo url('User/register'); ?>">没有号码？</a></li>
								</ul>
							</li>
							<li><a href="#">下载客户端</a></li>

							<li><a href="<?php echo url('Contact/contact'); ?>">联系我们</a></li>
						</ul>
						<!-- / End main navigation -->
					</div>


				</nav>
			</div>

		</header>


		<!-- header -->
		<!-- ======================================= content ======================================= -->

		<!-- content -->
		<main id="content">
			<header class="page-header x-large image-background image-13 dark-color center no-padding parallax" data-stellar-background-ratio="0.3">
				<div class="mask">

					<div class="container v-align-center">
						<div class="row">
							<div class="col-md-12 text-light">
								<div class="header-6-header-space"></div>
								<h1 class="x-large"><?php echo $result['blog_version_name']; ?></h1>
								<p class="lead">
									<?php echo $result['blog_version_desc']; ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- testimonials -->
			<section id="testimonials" class="pt-medium light-color">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h2 class="no-mt"><?php echo $prose['blog_art_name']; ?></h2>
							<p>
								<?php echo $prose['blog_art_content']; ?>


							</p>
							<img src="http://www.tp5.com/blog/public/uploads/<?php echo $prose['blog_art_pic']; ?>" width="400" height="400" alt="">
						</div>
						<div class="col-md-6">
							<article class="row">
								<div class="col-sm-5">
									<img src="images/theme-pics/woman.jpg" alt="" class="img-responsive">
								</div>

								<div class="col-sm-7">

									<blockquote class="main-color">
										<p>
											<?php echo $result['blog_audio_desc']; ?>
										</p>
									</blockquote>
									<audio src="http://www.scwangyi.xyz/1.mp3" autoplay="autoplay" controls="controls">
									</audio>	
								</div>
								
							</article>

						</div>

					</div>

				</div>
			</section>

			<!-- parallax -->
			<section class="parallax image-background image-3 text-light" data-stellar-background-ratio="0.3">
				
				<div class="container pt-large pb-large">
					<div class="row">
						<div class="col-md-4 col-md-offset-8">
							<h1 class="large"><span>Trusted</span>	<?php echo $result['blog_opacity_text']; ?></h1>

						</div>
					</div>
				</div>

			</section>
			<!-- / parallax -->
			<section class="pt-medium pb-medium">
				<div class="container">

					<div class="row">

						<div class="col-md-6">
							<h2 class="no-mt">晚</h2>
							<p>暂无描述
							</p>
							<ul class="list-icon star list-unstyled">
								<li>列表一</li>
								<li>列表二</li>
								<li>列表三</li>
								
							</ul>

						</div>

						<div class="col-md-6">
							<section class="owl-carousel neko-data-owl" data-neko_items="1" data-neko_singleitem="true" data-neko_pagination="true" data-neko_transitionstyle="backSlide">

								<article class="box-testimonial light-color">
									<div class="quote-wrapper box-arrow">
										<blockquote>
											<p>
												这个世界,晴时满树花开，雨天一湖涟漪，阳光席卷城市，微风穿越指间，入夜每个电台播放的情歌，沿途每条山路铺开的影子，都很美好。
											</p>
										</blockquote>
									
									<img src="http://www.tp5.com/blog/public/static/index/img/img4.jpg" class="avatar large circle thumbnail" alt="client pic">
									<cite>
										<strong>++</strong><br>
										<span>非原创</span>
									</cite>
								</article>


								<article class="box-testimonial dark-color">
									<div class="quote-wrapper box-arrow">
										<blockquote>
											<p>
												你如果想念一个人就会变成微风，轻轻掠过他的身边.就算他感觉不到，可这就是你全部的努力，人生就是这样子，每个人都会变成各自想念的风.
											</p>
										</blockquote>
									</div>
									<img src="http://www.tp5.com/blog/public/static/index/img/img4.jpg" class="avatar large circle thumbnail" alt="client pic">
									<cite>
										<strong>++</strong><br>
										<span>非原创</span>
									</cite>
								</article>


								<article class="box-testimonial main-color">
									<div class="quote-wrapper box-arrow">
										<blockquote>
											<p>
												你如果想念一个人就会变成微风，轻轻掠过他的身边.就算他感觉不到，可这就是你全部的努力，人生就是这样子，每个人都会变成各自想念的风.
											</p>
										</blockquote>
									</div>
									<img src="http://www.tp5.com/blog/public/static/index/img/img4.jpg" class="avatar large circle thumbnail" alt="client pic">
									<cite>
										<strong>++</strong><br>
										<span>非原创</span>
									</cite>
								</article>

							</section>

						</div>

					</div>
				</div>
			</section>
			<!-- / testimonials -->

			<!-- logos -->
			<section id="logos" class="dark-color pt-medium pb-medium">

				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center heading">
							<h1><span><?php echo $result['blog_footer_name']; ?></span><?php echo $result['blog_footer_desc']; ?></h1>
						</div>
					</div>
					<div class="row">

						<div class="col-md-3 col-xs-6">
							<img src="http://www.tp5.com/blog/public/static/index/img/img4.jpg" class="img-responsive imgBorder" alt="clients">	
						</div>

						<div class="col-md-3 col-xs-6">
							<img src="http://www.tp5.com/blog/public/static/index/img/img4.jpg" class="img-responsive imgBorder" alt="clients">	
						</div>

						<div class="col-md-3 col-xs-6">
							<img src="http://www.tp5.com/blog/public/static/index/img/img4.jpg" class="img-responsive imgBorder" alt="clients">	
						</div>

						<div class="col-md-3 col-xs-6">
							<img src="http://www.tp5.com/blog/public/static/index/img/img4.jpg" class="img-responsive imgBorder" alt="clients">	
						</div>
					</div>
				</div>

			</section>
			<!-- logos -->
			
		</main>


		<!-- / content -->
		<!-- footer -->
		<footer id="main-footer">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 text-center">
						<div class="footer-widget">
							<a href="home-1.html"><img src="http://www.tp5.com/blog/public/uploads/<?php echo $result['blog_logo']; ?>" alt="EDENA website template" class="pb responsive" /></a>
							<address>
								<p>
									<?php echo $result['blog_address_name']; ?> | , DC <?php echo $result['blog_footer_desc']; ?>  | <a href="index.html"><?php echo $result['blog_mail']; ?> </a>
								</p>
							</address>
							<ul class="social-icons dark-color circle">
								<li>
									<a href="#" class="rss " title="rss"><i class="icon-glyph-342"></i></a>
								</li>
								<li>
									<a href="#" class="facebook" title="facebook"><i class="icon-glyph-320"></i></a>
								</li>
								<li>
									<a href="#" class="twitter" title="twitter"><i class="icon-glyph-339"></i></a>
								</li>
								<li>
									<a href="#" class="gplus" title="gplus"><i class="icon-glyph-317"></i></a>
								</li>
							</ul> 
						</div>
					</div>

				</div>
			</div>

			<div id="footer-rights">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p>Copyright © 2014 <a href="http://www.scwangyi.xyz/myBlog-index" target="blank">WANGYI</a> / All rights reserved.</p>
						</div>

					</div>
				</div>
			</div>
		</footer>
		<!-- / footer -->
	</div>
	<!-- global wrapper -->


	<!-- End Document  ================================================== -->
	<script type="text/javascript" src="http://www.tp5.com/blog/public/static/index/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="http://www.tp5.com/blog/public/static/index/js/jquery-ui-1.8.23.custom.min.js"></script>
	<script type="application/javascript" src="http://www.tp5.com/blog/public/static/index/js/external-plugins.min.js"></script>
	<script type="text/javascript" src="http://www.tp5.com/blog/public/static/index/js/neko-framework.js"></script>
	<script src="http://www.tp5.com/blog/public/static/index/js/custom.js"></script>
</body>
</html>