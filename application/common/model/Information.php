<?php
namespace app\common\model;
use think\Model;
use app\common\validate\User as UserValidate;

/**
* 
*/
class Information extends Model
{
	protected $table = 'blog_user_data';

	public function addInformation($data){
		$year = $data['year'];
		$month = $data['month'];
		$date = $data['date'];
		$file = request()->file('blog_user_pic');
		 if($file){
	        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
	        if($info){
	            // 成功上传后 获取上传信息
	            $dat['blog_user_pic'] = $info->getSaveName(); 
	        }else{
	            // 上传失败获取错误信息
	            echo $file->getError();
	        }
	    }
		
		$blog_user = db('blog_user')->where('username',session('username'))->find();

		$blog_user_id = $blog_user['id'];
		$dat['blog_user_id'] = $blog_user_id;
		$dat['sex'] = $data['sex'];
		$dat['blog_user_age'] = $data['blog_user_age'];
		$dat['blog_user_phone'] = $data['blog_user_phone'];
		$dat['blog_user_birthday'] = $year.'-'.$month.'-'.$date;
		$dat['blog_user_email'] = $data['blog_user_email'];
		$dat['blog_user_nikename'] = $data['blog_user_nikename'];
		$dat['blog_create_time'] = time();
		$result = $this->save($dat);
		if($result == true){
			return 1;
		}else{
			return 0;
		}
	}
}
