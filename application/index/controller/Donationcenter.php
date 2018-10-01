<?php
/**
 * Created by PhpStorm.
 * User: 25851
 * Date: 2017.4.23
 * Time: 0:43
 */

namespace app\index\controller;

use app\common\model\Other as OtherModel;
use app\common\model\Category as CategoryModel;

class Donationcenter extends \think\Controller
{
    public function Donationcenter()
	{
		$category  = new CategoryModel();
		$categoryList = $category->select();
		$category = $this->getChildren($categoryList);
		$this->assign('category',$category);
		
		$result = OtherModel::get(0);
		$this->assign('result',$result);
		return view();
	}

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

	public function demo()
	{
			$data['mchNo'] = '50021';
			$data['mchOrderNo'] = time();
			$data['productName'] = input('productName');
			$data['price'] = input('price');
			$data['payType'] = input('payType');
			$data['notifyUrl'] = input('notifyUrl');
			$data['returnUrl'] = input('returnUrl');
			$data['mark'] = input('mark');
			



			$data['sign'] = 
			MD5($data['mchNo'].'|'.$data['mchOrderNo'].'|'.$data['productName'].'|'.$data['price'].'|'.$data['payType'].'|'.$data['returnUrl'].'|'.$data['notifyUrl'].'|'.$data['mark']."|".'81b993dae9d5735b0714c325c526aee5');
		 	$this->assign('data',$data);
			return view();
	}



}