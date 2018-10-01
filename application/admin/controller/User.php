<?php
namespace app\admin\controller;
use app\common\validate\User as UserValidate;
use app\common\model\User as UserModel;
use app\common\model\Admin as AdminModel;


   /**
	*@return 
	*
	*
	*/

class User extends \think\Controller
{
	// 后台管理员登录
   public function login()
	{
		if(request()->isPost()){
			$data['admin_name'] = input('admin_name');
			$data['password'] = input('password');
			$data['time'] = time();
			$code = input('verify');

			// $captcha = new Captcha();
			// if($captcha->check($code) !== true){
			// 	return $this->error('验证码错误！');
			// }

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

	// 后台管理员列表
	public function admin()
	{
		$result = AdminModel::paginate(3);	
		$this->assign('result',$result);
		return view();
	}

	// 后台管理员列表添加
	public function adminAdd()
	{
		if(request()->isPost()){
			// $file = $_FILES["pic"]["tmp_name"];
			// $name = rand().substr($_FILES["pic"]["name"],strrpos($_FILES["pic"]['name'],'.'));
			// $bool = move_uploaded_file($file, dirname(dirname(dirname(__dir__))).'/public/upLoadFiles/'.$name);
			// if(!$bool){
			// 	return $this->error('请添加头像！');
			// }
			$file = request()->file('pic');
			 if($file){
		        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
		        if($info){
		            // 成功上传后 获取上传信息
		            $data['pic'] = $info->getFilename(); 
		        }else{
		            // 上传失败获取错误信息
		            echo $file->getError();
		        }
		    }

			$data['admin_name'] = input('admin_name');
			$data['password'] = md5(input('password'));
			$data['level'] = input('level');
			$data['create_time'] = time();

			$UserValidate = new UserValidate();
			if(!$UserValidate->scene('admin_add')->check($data)){
				return $this->error($UserValidate->getError());
			}

			if(AdminModel::create($data)){
				return $this->success('添加成功!','User/admin');
			}else{
				return $this->error('添加失败！');
			}

		}
		return view();
	}

	// 后台管理员列表修改
	public function admin_edit()
	{	
		if(request()->isPost()){
			$file = request()->file('pic');
			 if($file){
		        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
		        if($info){
		            // 成功上传后 获取上传信息
		            $data['pic'] = $info->getFilename(); 
		        }else{
		            // 上传失败获取错误信息
		            echo $file->getError();
		        }
		    }
		    $map = input('id');
		    $data['id'] = $map;
			$data['admin_name'] = input('admin_name');
			$data['password'] = md5(input('password'));
			$data['level'] = input('level');
			$data['create_time'] = time();

			$UserValidate = new UserValidate();
			if(!$UserValidate->scene('admin_edit')->check($data)){
				return $this->error($UserValidate->getError());
			}

			if(AdminModel::update($data)){
				return $this->success('更新成功！','User/admin');
			}else{
				return $this->error('更新失败！');
			}			
		}
		$map = input('id');
		$result = AdminModel::get($map);
		$this->assign('result',$result);
		return view();
	}

	public function admin_del()
	{
		$map = input('id');
		if(AdminModel::destroy($map)){
			return $this->success('删除成功！','User/admin');
		}else{
			return $this->error('删除失败！');
		}		
	}



	// 用户列表
	public function user()
	{
		$result = UserModel::paginate(3);	
		$this->assign('result',$result);
		return view();
	}

	// 用户添加
	public function userAdd()
	{
		if(request()->isPost()){	
			$data['username'] = input('username');
			$data['password'] = input('password');
			$data['create_time'] = time();

			$UserValidate = new UserValidate();
			if(!$UserValidate->scene('user_add')->check($data)){
				return $this->error($UserValidate->getError());
			}

			$UserModel = new UserModel();
			if($UserModel->userAdd($data)){
				return $this->success('添加成功！','User/user');
			}else{
				return $this->error('添加失败！');
			}

		}
		return view();
	}

	// 后台管理员列表修改
	public function user_edit()
	{	
		if(request()->isPost()){
			
		   $data['username'] = input('username');
			$data['password'] = input('password');
			$data['create_time'] = time();

			$UserValidate = new UserValidate();
			if(!$UserValidate->scene('user_edit')->check($data)){
				return $this->error($UserValidate->getError());
			}

			$UserModel = new UserModel();
			if(UserModel::update($data)){
				return $this->success('更新成功！','User/user');
			}else{
				return $this->error('更新失败！');
			}	

		}
		$map = input('id');
		$result = UserModel::get($map);
		$this->assign('result',$result);
		return view();
	}

	public function user_del()
	{
		$map = input('id');
		if(UserModel::destroy($map)){
			return $this->success('删除成功！','User/user');
		}else{
			return $this->error('删除失败！');
		}		
	}

	public function user_detail()
	{
		$map = input('id');
		$result = db('blog_user')
		->where('id',$map)
		->find();
		$this->assign('result',$result);
		return view();	
	}

	public function admin_detail()
	{
		$map = input('id');
		$result = db('blog_admin')
		->where('id',$map)
		->find();
		$this->assign('result',$result);
		return view();	
	}

	



}