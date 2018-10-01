<?php
/**
 * Created by PhpStorm.
 * User: 25851
 * Date: 2017.4.23
 * Time: 0:43
 */

namespace app\admin\controller;
use think\Db;
use app\common\model\Address as addressModel;
use app\common\validate\Address as AddressValidate;


class Personalcenter extends \think\Controller
{
    public function Personalcenter()
	{
		return view();
	}


	public function address()
	{

		$address = db('blog_user_address')->select();		
		$this->assign('address',$address);
		return view();
	}

	public function address_add()
	{
		if(request()->isPost()){	
			$data = input('post.');
			$AddressValidate  = new AddressValidate();
			$vali = $AddressValidate->check($data);
			if(!$vali){
				return $this->error($AddressValidate->getError());
			}

			$address = new addressModel();
			$result = $address->addAddress($data);
			if($result){
				return $this->success('地址添加成功！');
			}else{
				return $this->error('地址添加失败！');
			}
		}
		$username = db('blog_user')->select();
		$this->assign('username',$username);
		return view();

	}

	public function address_edit()
	{
		if(request()->isPost()){	
			$data = input('post.');
			// $AddressValidate  = new AddressValidate();
			// $vali = $AddressValidate->check($data);
			// if(!$vali){
			// 	return $this->error($AddressValidate->getError());
			// }
		
		$map =input('id');

			$address = new addressModel();
			$result = $address->editAddress($data);
			if($result){
				return $this->success('地址添加成功！');
			}else{
				return $this->error('地址添加失败！');
			}
		}
		$map =input('id');
		$address = db('blog_user_address')->where('id',$map)->find();
		$this->assign('address',$address);
		$username = db('blog_user')->select();
		$this->assign('username',$username);
		return view();

	}
	public function address_del(){
		$id = input('id');
		$del = addressModel::destroy($id);
		if($del){
				return $this->success('成功！');
			}else{
				return $this->error('失败！');
			}
	}


	public function address_detail()
	{
		$map = input('id');
		$result = db('blog_user_address')
		->where('id',$map)
		->find();
		$this->assign('result',$result);
		return view();
	}

	public function information()
	{

		$blog_user_data = db('blog_user_data')->select();		
		$this->assign('blog_user_data',$blog_user_data);
		return view();
	}





	public function information_detail()
	{
		$map = input('id');
		$blog_user_data = db('blog_user_data')
		->where('id',$map)
		->find();
		$this->assign('blog_user_data',$blog_user_data);
		return view();
	}






















	public function privance()
	{
	$list = Db::name('province')->select();
	return $list; 
	}

	//读取市
	public function city($father)
	{
	if ($father) {
	$where = "father=$father";
	} else {
	$where = "father=110000";
	}
	$list = Db::name('city')->where($where)->select();
	return $list;
	}

	//读取区
	public function area($father)
	{
	if ($father) {
  	$where = "father=$father";
	} else {
	$where = "father=110100";
	}
	$list = Db::name('area')->where($where)->select();
	return $list;
	}











}