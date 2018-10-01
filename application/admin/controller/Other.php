<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;

use app\common\validate\Other as OtherValidate;
use app\common\model\Other as OtherModel;


/**
 *@param 首页内容的显示与修改
 *
 *
 */
class Other extends Controller
{
    public function other()
	{
		$result = OtherModel::get(0);
		$this->assign('result',$result);
		return view();
	}


 public function other_edit()
	{
		$request = Request::instance();
		if($request->isPost()){
			$file = request()->file('blog_logo');
			 if($file){
		        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
		        if($info){
		            // 成功上传后 获取上传信息
		            $data['blog_logo'] = $info->getSaveName(); 
		        }else{
		            // 上传失败获取错误信息
		            echo $file->getError();
		        }
		    }
			$data['blog_other_id'] = input('blog_other_id');
			$data['blog_version_name'] = input('blog_version_name');
			$data['blog_version_desc'] = input('blog_version_desc');
			$data['blog_opacity_text'] = input('blog_opacity_text');
			$data['blog_audio_url'] = input('blog_audio_url');
			$data['blog_audio_desc'] = input('blog_audio_desc');
			$data['blog_footer_name'] = input('blog_footer_name');
			$data['blog_footer_desc'] = input('blog_footer_desc');
			$data['blog_address_name'] = input('blog_address_name');
			$data['blog_address_desc'] = input('blog_address_desc');
			$data['blog_mail'] = input('blog_mail');			

			$OtherValidate = new OtherValidate();
			if(!$OtherValidate->check($data)){
				return $this->error($OtherValidate->getError());
			}

			if(OtherModel::update($data)){
				return $this->success('更新成功！','Other/other');
			}else{
				return $this->error('更新失败！');
			}	
		}
		$map = input('blog_other_id');
		$result = OtherModel::get($map);
		$this->assign('result',$result);
		return view();
	}


	



}