<?php
namespace app\admin\controller;

use app\common\model\Admin as AdminModel;
use app\common\model\Art as ArtModel;
use app\common\model\Category as CategoryModel;
use app\common\validate\Art as ArtValidate;

/**
*@param 导航栏目 string
*
*
*
*
*/ 



class Art extends \think\Controller
{
    public function Art()
	{
		$ArtModel = new ArtModel();
		$result = $ArtModel->paginate(8);
		$this->assign('result',$result);
		return view();
	}
	 public function art_add()
	{
		if(request()->isPost()){

			$file = request()->file('blog_art_pic');
			 if($file){
		        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
		        if($info){
		            // 成功上传后 获取上传信息
		            $data['blog_art_pic'] = $info->getSaveName(); 
		        }else{
		            // 上传失败获取错误信息
		            echo $file->getError();
		        }
		    }

			$data['blog_art_name'] = input('blog_art_name');
			$data['blog_art_desc'] = input('blog_art_desc');
			$data['blog_art_author'] = input('blog_art_author');
			$data['blog_category_id'] = input('blog_category_id');
			$data['blog_art_content'] = input('blog_art_content');
			$data['blog_art_time'] = time();

			$ArtValidate = new ArtValidate();
			if(!$ArtValidate->check($data)){
				return $this->error($ArtValidate->getError());
			}

			if(ArtModel::create($data)){
				return $this->success('添加成功!','Art/Art');
			}else{
				return $this->error('添加失败！');
			}

		}

		$CategoryModel = new CategoryModel();
		$category = $CategoryModel->where('p_id','>',0)->select();
		$this->assign('category',$category);
		return view();
	}

	public function art_edit()
	{
		if(request()->isPost()){
			$file = request()->file('pic');
			 if($file){
		        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
		        if($info){
		            // 成功上传后 获取上传信息
		            $data['pic'] = $info->getSaveName(); 
		        }else{
		            // 上传失败获取错误信息
		            echo $file->getError();
		        }
		    }

			$data['blog_art_name'] = input('blog_art_name');
			$data['blog_art_desc'] = input('blog_art_desc');
			$data['blog_art_author'] = input('blog_art_author');
			$data['blog_category_id'] = input('blog_category_id');
			$data['blog_art_content'] = input('blog_art_content');
			$data['blog_art_time'] = time();

			$ArtValidate = new ArtValidate();
			if(!$ArtValidate->check($data)){
				return $this->error($ArtValidate->getError());
			}

			if(ArtModel::create($data)){
				return $this->success('更新成功!','Art/Art');
			}else{
				return $this->error('更新失败！');
			}

		}
		$map = input('blog_id');
		$result = ArtModel::get($map);
		$this->assign('result',$result);
		
		$CategoryModel = new CategoryModel();
		$category = $CategoryModel->where('p_id','>',0)->select();
		$this->assign('category',$category);
		return view();
	}
	public function art_del()
	{
		$map = input('id');
		if(ArtModel::destroy($map)){
			return $this->success('删除成功！','Art/Art');
		}else{
			return $this->error('删除失败！');
		}		
	}
	 public function detail()
	{
		$map = input('blog_id');
		$result = db('blog_art')
		->where('blog_id',$map)
		->join('blog_category','blog_category.id=blog_art.blog_category_id')->find();
		$this->assign('result',$result);
		return view();
	}



}
