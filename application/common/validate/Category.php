<?php
namespace app\common\validate;
use think\Validate;

/**
* 
*/
class Category extends Validate
{
	protected $rule = [
			'category_name' => 'require',
			'desc' => 'require',
			'pic' => 'require',
	];
	protected $message = [
			'category_name.require'   =>'名字不能为空',
			'desc.require'   =>'描述不能为空',
			'pic.require'   =>'图片不能为空',
	];
	 protected $scene = [
        'cate_add'     =>['category_name','desc,','pic'],
        'cate_edit'     =>['category_name','desc','pic'],

    ];
}