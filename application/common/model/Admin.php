<?php
namespace app\common\model;
use think\Model;
use app\common\validate\User as UserValidate;

/**
* 
*/
class Admin extends Model
{
	protected $table = 'blog_admin';

	 /**
     * 注册
     * @return $check 确认密码
     * @return $data 输入数据
     * 
     */

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
			var_dump($result->count+1);
			var_dump($result->login_time = time());
			return 1;
		}

	}

}
