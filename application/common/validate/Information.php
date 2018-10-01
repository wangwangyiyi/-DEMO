<?php
namespace app\common\validate;
use think\Validate;

/**
* 
*/
class Information extends Validate
{
	protected $rule = [


		'blog_user_nikename' => 'require',
		'blog_user_pic' => 'require',
		'sex' => 'require',
		'blog_user_phone' => 'require',
		'blog_email' => 'require',
		'blog_user_age' => 'require',
		'blog_user_nikename' => 'require',


	];
	protected $message = [
			'blog_user_nikename.require'   =>'名字不能为空',
			'blog_user_pic.require'   =>'logo不能为空',
			'sex.require'   =>'性别不能为空',
			'blog_user_phone.require'   =>'电话不能为空',
			'blog_email.require'   =>'EMAIL介绍不能为空',
			'blog_user_age.require'   =>'年龄不能为空',
			'blog_user_nikename.require'   =>'昵称不能为空',


	];
}