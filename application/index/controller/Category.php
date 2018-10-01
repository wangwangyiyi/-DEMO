<?php
/**
 * Created by PhpStorm.
 * User: 25851
 * Date: 2017.4.23
 * Time: 0:43
 */

namespace app\index\controller;



class Category extends \think\Controller
{
    public function Category()
	{
		$map = input('id');

		$category = db('blog_art')->join('blog_category','blog_category.id=blog_art.blog_category_id')->where('id',$map)->select();
		$this->assign('category',$category);
		return view();
	}




}