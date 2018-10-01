<?php
/**
 * Created by PhpStorm.
 * User: 25851
 * Date: 2017.4.23
 * Time: 0:43
 */

namespace app\index\controller;
use think\Controller;
use app\common\model\Category as CategoryModel;
use app\common\model\Other as OtherModel;


class Index extends Controller
{
    public function index()
	{
		$category  = new CategoryModel();
		$categoryList = $category->select();
		$category = $this->getChildren($categoryList);
		$this->assign('category',$category);

		$result = OtherModel::get(0);
		$this->assign('result',$result);

		$prose = db('blog_art')->where('blog_category_id',29)->find();
		$this->assign('prose',$prose);

		return view();
	}
	// 树形数组排序
 	function getChildren($categoryModel,$pid=0)
 	{
 		 $arr = array();
        foreach ($categoryModel as $key => $value) {
            if ($value['p_id'] == $pid) {
                $value['children'] = $this->getChildren($categoryModel, $value['id']);
                $arr[] = $value;
            }
        }
        return $arr;
	}



	

}