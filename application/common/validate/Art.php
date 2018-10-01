<?php
namespace app\common\validate;
use think\Validate;

/**
* 
*/
class Art extends Validate
{
	protected $rule = [


		'blog_art_name' => 'require',
		'blog_art_desc' => 'require',
		'blog_art_pic' => 'require',
		'blog_art_author' => 'require',
		'blog_category_id' => 'require',
		'blog_art_time' => 'require',
		'blog_art_content' => 'require',
	];
	protected $message = [
			'blog_art_pic.require'   =>'LOGO不能为空',
			'blog_art_name.require'   =>'名字不能为空',
			'blog_art_desc.require'   =>'描述不能为空',
			'blog_art_author.require'   =>'作者不能为空',
			'blog_category_id.require'   =>'所属元素不能为空',
			'blog_art_content.require'   =>'地址介绍不能为空',
	];
}