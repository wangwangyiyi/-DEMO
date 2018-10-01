<?php
/**
 * Created by PhpStorm.
 * User: 25851
 * Date: 2017.4.23
 * Time: 0:43
 */

namespace app\index\controller;
use think\Db;
use app\common\model\Address as addressModel;
use app\common\validate\Address as AddressValidate;
use app\common\validate\Information as informationValidate;
use app\common\model\Information as InformationModel;


class Personalcenter extends \think\Controller
{
    public function Personalcenter()
	{
		if(!empty(session('username'))){
			$blog_user = db('blog_user')->where('username',session('username'))->find();
			$blog_user_data = db('blog_user_data')->where('blog_user_id',$blog_user['id'])->find();
			$this->assign('blog_user_data',$blog_user_data);
			return view();
		}else{
			$this->error('您还没登录','User/login');
		}
	}

    public function address()
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
		$blog_user = db('blog_user')->where('username',session('username'))->find();
		$address = db('blog_user_address')->where('blog_user_id',$blog_user['id'])->select();
		$this->assign('blog_user',$blog_user);
		
		$this->assign('address',$address);
		return view();
	}

    public function information() 
	{
		if(request()->isPost()){
			$data = input('post.');
			// $informationValidate = new informationValidate();
			// $result = $informationValidate->check($data);
			// if(!$result){
			// 	return $this->error($informationValidate->getError());
			// }
			$informationModel = new informationModel();
			$information = $informationModel->addInformation($data);
			if($information){
				return $this->success('用户信息添加成功！');
			}else{
				return $this->error('添加用户信息失败！');
			}
		}
		$username = session('username');
		$this->assign('username',$username);
		return view();
	}

	public function information_edit() 
	{
		if(request()->isPost()){
			$data = input('post.');
			// $informationValidate = new informationValidate();
			// $result = $informationValidate->check($data);
			// if(!$result){
			// 	return $this->error($informationValidate->getError());
			// }
			$informationModel = new informationModel();
			$information = $informationModel->addInformation($data);
			if($information){
				return $this->success('用户信息添加成功！');
			}else{
				return $this->error('添加用户信息失败！');
			}
		}
		$blog_user = db('blog_user')->where('username',session('username'))->find();
		$blog_user_id = $blog_user['id'];
		
		$blog_user_data = db('blog_user_data')->where('blog_user_id',$blog_user_id)->find();
		$username = session('username');
		$this->assign('username',$username);
		$this->assign('blog_user_data',$blog_user_data);

		return view();
	}

// PHP代码（用的是thinkphp5）：
// 省市区三级联动------------
//读取省
	public function address_select()
	{

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
//省市区三级联动结束---------------

	

}