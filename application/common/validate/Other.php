<?php
namespace app\common\validate;
use think\Validate;

/**
* 
*/
class Other extends Validate
{
	protected $rule = [
			'blog_logo' => 'require',
			'blog_version_name' => 'require',
			'blog_version_desc' => 'require',
			'blog_opacity_text' => 'require',
			'blog_audio_url' => 'require',
			'blog_audio_desc' => 'require',
			'blog_footer_name' => 'require',
			'blog_footer_desc' => 'require',
			'blog_address_name' => 'require',
			'blog_address_desc' => 'require',
			'blog_mail' => 'require',
	];
	protected $message = [
			'blog_logo.require'   =>'LOGO不能为空',
			'blog_version_name.require'   =>'版本名字不能为空',
			'blog_version_desc.require'   =>'版本描述不能为空',
			'blog_opacity_text.require'   =>'半透明描述不能为空',
			'blog_audio_url.require'   =>'URL不能为空',
			'blog_audio_desc.require'   =>'URL描述不能为空',
			'blog_footer_name.require'   =>'底部名称不能为空',
			'blog_footer_desc.require'   =>'底部描述不能为空',
			'blog_address_name.require'   =>'地址不能为空',
			'blog_address_desc.require'   =>'地址介绍不能为空',
			'blog_mail.require'   =>'邮编不能为空',

	];
}