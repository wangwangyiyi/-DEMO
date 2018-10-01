<?php
namespace app\admin\controller;

use app\common\model\Admin as AdminModel;
use app\common\model\Category as CategoryModel;
use app\common\validate\Category as CategoryValidate;

/**
*@param 导航栏目 string
*
*
*
*
*/ 



class Category extends \think\Controller
{
    public function category()
	{
		$CategoryModel = new CategoryModel();
		$result = $CategoryModel->getTree();
		$this->assign('result',$result);
		return view();
	}
	 public function cate_add()
	{
		if(request()->isPost()){
			$file = request()->file('cate_pic');
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

			$data['category_name'] = input('cate_name');
			$data['desc'] = input('cate_desc');
			$data['p_id'] = input('p_id');
			$data['create_time'] = time();
			$CategoryValidate = new CategoryValidate();
			if(!$CategoryValidate->scene('cate_add')->check($data)){
				return $this->error($CategoryValidate->getError());
			}

			if(CategoryModel::create($data)){
				return $this->success('添加成功!','Category/category');
			}else{
				return $this->error('添加失败！');
			}

		}

		$CategoryModel = new CategoryModel();
		$category = $CategoryModel->getTree();
		$this->assign('category',$category);
		return view();
	}

	public function cate_edit()
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
			$data['category_name'] = input('cate_name');
			$data['desc'] = input('cate_desc');
			$data['p_id'] = input('p_id');
			$data['create_time'] = time();
			$CategoryValidate = new CategoryValidate();
			if(!$CategoryValidate->scene('cate_edit')->check($data)){
				return $this->error($CategoryValidate->getError());
			}

			if(CategoryModel::update($data)){
				return $this->success('更新成功！','Category/category');
			}else{
				return $this->error('更新失败！');
			}			
		}
		$map = input('id');
		$result = CategoryModel::get($map);
		$this->assign('result',$result);
		
		$CategoryModel = new CategoryModel();
		$category = $CategoryModel->getTree();
		$this->assign('category',$category);
		return view();
	}
	public function cate_del()
	{
		$map = input('id');
		if(CategoryModel::destroy($map)){
			return $this->success('删除成功！','Category/category');
		}else{
			return $this->error('删除失败！');
		}		
	}

	public function detail()
	{
		$map = input('id');
		$result = db('blog_category')
		->where('id',$map)
		->find();
		$this->assign('result',$result);
		return view();
	}

}
