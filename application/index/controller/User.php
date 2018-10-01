<?php
/**
 * 前台用户控制器
 * 
 */

namespace app\index\controller;

use think\captcha\Captcha;
use app\common\model\User as UserModel;
use app\common\validate\User as UserValidate;

class User extends \think\Controller
{
	 /**
     * 注册
     * @return $code 验证码
     * @return $data 登录数据
     * 
     */

	public function register()
	{
		if(request()->isPost()){
			$data['username'] = input('username');
			$data['password'] = input('password');
			$data['re_password'] = input('re_password');
			$data['time'] = time();
			$code = input('verify');

			$captcha = new Captcha();
			if($captcha->check($code) !== true){
				return $this->error('验证码错误！');
			}

			$UserValidate = new UserValidate();
			
			if(!$UserValidate->scene('register')->check($data)){
				return $this->error($UserValidate->getError());
			}

			$userModel = new UserModel();
			$result = $userModel->register($data);

			if($result){
				return $this->success('注册成功');
			}else{
				return $this->error('账号或者密码错误！');
			}
		}
		return view();
	}


	 /**
     * 注册
     * @return $code 验证码
     * @return $data 登录数据
     * 
     */
	public function login()
	{
		if(request()->isPost()){
			$data['username'] = input('username');
			$data['password'] = input('password');
			$data['time'] = time();
			$code = input('verify');

			$captcha = new Captcha();
			if($captcha->check($code) !== true){
				return $this->error('验证码错误！');
			}

			$UserValidate = new UserValidate();
			
			if(!$UserValidate->scene('login')->check($data)){
				return $this->error($UserValidate->getError());
			}

			$userModel = new UserModel();
			$result = $userModel->login($data);
			if($result){
				return $this->success('登录成功');
			}else{
				return $this->error('账号或者密码错误！');
			}

		}	
		return view();
	}
	public function contact()
	{
		return view();
	}


}