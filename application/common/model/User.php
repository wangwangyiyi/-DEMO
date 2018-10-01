<?php
namespace app\common\model;

use app\common\validate\User as UserValidate;
use think\Model;
use think\Session;
/**
* 
*/
class User extends Model
{
	protected $table = 'blog_user';

	 /**
     * 注册
     * @return $check 确认密码
     * @return $data 输入数据
     * 
     */
	function register($data)
	{
		if($data['password'] !== $data['re_password']){
			return $this->error('两次密码输入不一致');
		}
		$result = $this->where('username',$data['username'])->find();
		if($result){
			return 0;
		}else{
			$this->save([
				'username'=>$data['username'],
				'password'=>md5($data['password']),
				'create_time'=>$data['time'],
			]);
			return 1;
		}

	}

	 /**
     * 注册
     * @return $data 输入数据
     * 
     */
	function login($data)
	{
		$result = $this->where('username',$data['username'])->find();
		if(!$result || md5($data['password']) !== $result->password){
			return 0;
		}else{
			$this->where('username',$data['username'])->update([
				'count'  => $result->count+1,
				'login_time'  => time(),
			]);
			session::set('username',$data['username']);
			return 1;
		}

	}
	
	public function userAdd($data)
	{
		$data['password'] = md5($data['password']);
		if($this->save($data)){
			return 1;
		}else{
			return 0;
		}
	}








}

















