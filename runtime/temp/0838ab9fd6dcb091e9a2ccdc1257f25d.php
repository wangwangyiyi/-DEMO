<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wamp\www\blog\public/../application/index\view\category\category.html";i:1537700099;}*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>土锤日记</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="http://www.tp5.com/blog/public/static/index/css-1/base.css">
	<link rel="stylesheet" href="http://www.tp5.com/blog/public/static/index/css-1/skeleton.css">
	<link rel="stylesheet" href="http://www.tp5.com/blog/public/static/index/css-1/screen.css">
    <link rel="stylesheet" href="http://www.tp5.com/blog/public/static/index/css-1/mediaelementplayer.css" />
     

    <!--[if IE 7]>
        <link rel="stylesheet" href="stylesheets/ie7.css">
    <![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    
    <!-- Fonts
	================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>
    
    <!-- Scripts
	================================================== -->
</head>

<body>

	<!-- Site Backgrounds
	================================================== -->
	
    <!-- Change to class="poswrapheaderline wide" and class="headerline full" for a full-width header line -->
	<div class="poswrapheaderline"><div class="headerline"></div></div>  
    <!-- Remove or uncomment depending on if you want a background image or tile -->
    <div class="tiledbackground"></div>
    <!--img src="images/bg.jpg" alt="" id="background" /-->
    <!-- Change to class="poswrapper wide" and class="whitebackground full" for a full-width site background -->
    <div class="poswrapper"><div class="whitebackground"></div></div>




	<div class="container main portfolio4column">

        <!-- Header | Logo, Menu
		================================================== -->
	
		
        
        <!-- Page Title And Social
		================================================== -->
        
		
        
        <!-- No Slider Spacer
		================================================== -->
        
        <div class="sixteen columns nosliderspacer"></div>
        
        <!-- Text Block
		================================================== -->
        
		
        <!-- Portfolio Teasers
		================================================== -->
       <li><a class="portfolio_selector" data-group="all-group" href="<?php echo url('Index/index'); ?>">首页</a></li>

        <div class="sixteen columns row noheadline"></div>
        
        
		<div class="sixteen columns row teasers portfolio">
        
    	<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
       		<div class="four columns teaser all-group web-group">
               <a href="<?php echo url('Detail/detail'); ?>" data-text="" class="hovering"><img src="images/thumbs/home_teaser1.jpg" alt="" class="scale-with-grid" />
			   <div class="topline"><a href="<?php echo url('Detail/detail'); ?>?blog_id=<?php echo $vo['blog_id']; ?>"><?php echo $vo['blog_art_name']; ?></a></div>
			   <div class="subline"><a href="<?php echo url('Detail/detail'); ?>?blog_id=<?php echo $vo['blog_id']; ?>"><?php echo $vo['blog_art_author']; ?></a></div>
            </a>
            </div>
		<?php endforeach; endif; else: echo "" ;endif; ?>	
    
			<div class="clear"></div>
		</div><div class="clear"></div> 
        
        <!-- Space Adjuster
        ================================================== -->
        
        <div class="sixteen columns bottomadjust"></div>
            
	</div><!-- container -->

	<!-- Footer
	================================================== -->
	
    <!-- Change to class="container footerwrap full" for a full-width footer -->
	
    <!-- Sub-Footer
	================================================== -->
    
   

<!-- End Document
================================================== -->
</body>
</html>