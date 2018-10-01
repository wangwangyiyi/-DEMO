<?php
/**
 * Created by PhpStorm.
 * User: 25851
 * Date: 2017.4.23
 * Time: 0:43
 */

namespace app\admin\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
	{
		return view();
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