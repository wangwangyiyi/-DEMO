<?php
namespace app\common\validate;
use think\Validate;

/**
* 
*/
class Address extends Validate
{
	protected $rule = [


		'blog_consignee' => 'require',
		'blog_phone' => 'require',
	];
	protected $message = [
			'blog_consignee.require'   =>'收货人不能为空',
			'blog_phone.require'   =>'收货联系手机号不能为空',
	];
}