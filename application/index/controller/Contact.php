<?php
/**
 * Created by PhpStorm.
 * User: 25851
 * Date: 2017.4.23
 * Time: 0:43
 */

namespace app\index\controller;


class Contact extends \think\Controller
{
    public function contact()
	{
		$map = input('blog_id');
		$detail = db('blog_art')->where('blog_id',$map)->find();
		$this->assign('detail',$detail);
		return view();
	}



}