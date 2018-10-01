<?php
namespace app\common\validate;
use think\Validate;

/**
* 
*/
class User extends Validate
{
	protected $rule = [
			'username' => 'require',
			'admin_name' => 'require',
			'password' => 'require|min:6',
			're_password' => 'require',
			'scrope' => 'require',
			'people' => 'require',
			'resource' => 'require',
			'cate_id' => 'require',
			'pic' => 'require',
			'content' => 'require',
	];
	protected $message = [
			'username.require'   =>'名字不能为空',
			'admin_name.require'   =>'名字不能为空',
			'password.require'   =>'密码不能为空',
			'password.min'   =>'密码长度不能少于6位',
			're_password.require'   =>'确认密码不能为空',
			'scrope.require'   =>'评分不能为空',
			'people.require'   =>'观看人数不能为空',
			'resource.require'   =>'视频地址不能为空',
			'cate_id.require'   =>'所属栏目不能为空',
			'pic.require'   =>'本栏目LOGO不能为空',
			'content.require'   =>'栏目详细介绍不能为空',
	];
	 protected $scene = [
        'register'  =>  ['username','password','re_password'],
        'login'  =>  ['username','password'],
        'admin_add'  =>  ['admin_name','password'],
        'admin_edit'  =>  ['admin_name','password'],
        'user_add'     =>['username','password'],
        'user_edit'     =>['username','password'],

    ];
}