<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"C:\wamp\www\blog\public/../application/index\view\personalcenter\address.html";i:1538299198;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">

		<title>地址管理</title>

		<link href="http://www.tp5.com/blog/public/static/index/css-2/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="http://www.tp5.com/blog/public/static/index/css-2/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen|Marck+Script" rel="stylesheet" type="text/css">

		<link href="http://www.tp5.com/blog/public/static/index/css-2/css/personal.css" rel="stylesheet" type="text/css">
		<link href="http://www.tp5.com/blog/public/static/index/css-2/css/addstyle.css" rel="stylesheet" type="text/css">
		<script src="http://www.tp5.com/blog/public/static/index/css-2/AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="http://www.tp5.com/blog/public/static/index/css-2/AmazeUI-2.4.2/assets/js/amazeui.js"></script>

	</head>
	<style>
		.box>select{
			width: 25%;
			display: inline-block;
		}
	</style>
	<body>
		
		<b class="line"></b>

		<div class="center">
			<div class="col-main">
				<div class="main-wrap">

					<div class="user-address">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">地址管理</strong> / <small>Address&nbsp;list</small></div>
						</div>
						<hr/>
						<ul class="am-avg-sm-1 am-avg-md-3 am-thumbnails">
							<?php if(is_array($address) || $address instanceof \think\Collection || $address instanceof \think\Paginator): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$address): $mod = ($i % 2 );++$i;?>		
							<li class="user-addresslist defaultAddr">
								<span class="new-option-r"><i class="am-icon-check-circle"></i>默认地址</span>
								<p class="new-tit new-p-re">
									<span class="new-txt"><?php echo $blog_user['username']; ?></span>
									<span class="new-txt-rd2"><?php echo $address['blog_phone']; ?></span>
								</p>
								<div class="new-mu_l2a new-p-re">
									<p class="new-mu_l2cw">
										<span class="title">地址：</span>
										<span class="provinc"><?php echo $address['blog_consignee_address']; ?></span>
								</div>
								<div class="new-addr-btn">
									<a href="#"><i class="am-icon-edit"></i>编辑</a>
									<span class="new-addr-bar">|</span>
									<a href="javascript:void(0);" onclick="delClick(this);"><i class="am-icon-trash"></i>删除</a>
								</div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<div class="clear"></div>
						<a class="new-abtn-type" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0}">添加新地址</a>
						<!--例子-->
						<div class="am-modal am-modal-no-btn" id="doc-modal-1">

							<div class="add-dress">

								<!--标题 -->
								<div class="am-cf am-padding">
									<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">新增地址</strong> / <small>Add&nbsp;address</small></div>
								</div>
								<hr/>

								<div class="am-u-md-12 am-u-lg-8" style="margin-top: 20px;">
									<form class="am-form am-form-horizontal" action="" method="post">

										<div class="am-form-group">
											<label for="user-name" class="am-form-label">收货人</label>
											<div class="am-form-content">
												<input type="text" name="blog_consignee" id="user-name" placeholder="收货人">
											</div>
										</div>

										<div class="am-form-group">
											<label for="user-phone" class="am-form-label">手机号码</label>
											<div class="am-form-content">
												<input id="user-phone" name="blog_phone" placeholder="手机号必填" type="email">
											</div>
										</div>
										<div class="am-form-group">
											<label for="user-address" class="am-form-label">所在地</label>
											<div class="box">
												<select name="province" class="province"></select>
												<select name="city" class="city"></select>
												<select name="area" class="area"></select>
											</div>
										</div>

										<div class="am-form-group">
											<label for="user-intro" class="am-form-label">详细地址</label>
											<div class="am-form-content">
												<textarea class="" rows="3" id="user-intro" name="blog_address" placeholder="输入详细地址"></textarea>
												<small>100字以内写出你的详细地址...</small>
											</div>
										</div>

										<div class="am-form-group">
											<div class="am-u-sm-9 am-u-sm-push-3">
												<button class="am-btn am-btn-danger">保存</button>
												<a href="javascript: void(0)" class="am-close am-btn am-btn-danger" data-am-modal-close>取消</a>
											</div>
										</div>
									</form>
								</div>

							</div>

						</div>

					</div>

					<script type="text/javascript">
						$(document).ready(function() {							
							$(".new-option-r").click(function() {
								$(this).parent('.user-addresslist').addClass("defaultAddr").siblings().removeClass("defaultAddr");
							});
							
							var $ww = $(window).width();
							if($ww>640) {
								$("#doc-modal-1").removeClass("am-modal am-modal-no-btn")
							}
							
						})
					</script>

					<div class="clear"></div>

				</div>
				<!--底部-->
				
			</div>

				<aside class="menu">
				<ul>
					<p class="m-coupon">
						<a href="<?php echo url('Index/index'); ?>">
							<span class="m-title">首页</span>
						</a>
					</p>
					<li class="">
						<a href="<?php echo url('Personalcenter/personalcenter'); ?>"><i class="am-icon-user"></i>个人中心</a>
					</li>
					<li class="person">
						<p><i class="am-icon-newspaper-o"></i>个人资料</p>
						<ul>
							<li> <a href="<?php echo url('Personalcenter/information'); ?>">用户资料添加</a></li>
							<li> <a href="<?php echo url('Personalcenter/address'); ?>">地址管理</a></li>
						</ul>
					</li>
					

					
				</ul>

			</aside>
		</div>

		

	</body>
<script>
/* 省市区三级联动 */
function privance() //省
{
$.post("<?php echo url('Personalcenter/privance'); ?>", {param1: 'value1'}, function(data, textStatus, xhr) {
var html;
for (var i = 0; i<data.length; i++) {
html += "<option value='"+data[i]['provinceID']+"'>"+data[i]['province']+"</option>";
}
$('.province').html(html);
});
}
privance();

function city() //市
{
var provinceid = $('.province').val(); //省id
console.log(provinceid)
$.post("<?php echo url('Personalcenter/city'); ?>", {father: provinceid}, function(data, textStatus, xhr) {
var html;
for (var i = 0; i<data.length; i++) {
html += "<option value='"+data[i]['cityID']+"'>"+data[i]['city']+"</option>";
}
$('.city').html(html);
area();
});
}

city();

function area() //县
{
var cityid = $('.city').val(); //市id
//alert(cityid);
$.post("<?php echo url('Personalcenter/area'); ?>", {father: cityid}, function(data, textStatus, xhr) {
var html;
for (var i = 0; i<data.length; i++) {
html += "<option value='"+data[i]['areaID']+"'>"+data[i]['area']+"</option>";
}
$('.area').html(html);
});
}
area();

$('.province').change(function(event) { //选择省
city();
});

$('.city').change(function(event) { //选择市
area();
});
/* 省市区三级联动 end */

</script>
</html>