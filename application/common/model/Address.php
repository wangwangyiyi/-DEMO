<?php
namespace app\common\model;
use think\Model;


/**
* 
*/
class Address extends Model
{
	protected $table = 'blog_user_address';

	public function addAddress($data){

		$province = db('province')->field('province')->where('provinceID',$data['province'])->find();
		$city = db('city')->field('city')->where('cityID',$data['city'])->find();
		$area = db('area')->field('area')->where('areaID',$data['area'])->find();
		$blog_user = db('blog_user')->where('username',session('username'))->find();


		$blog_user_id = $blog_user['id'];
		$dat['blog_user_id'] = $blog_user_id;
		$dat['blog_consignee'] = $data['blog_consignee'];
		$dat['blog_phone'] = $data['blog_phone'];
		$dat['blog_consignee_address'] = $province['province'].$city['city'].$area['area'].$data['blog_address'];
		$dat['blog_create_time'] = time();
		$result = $this->save($dat);
		if($result == true){
			return 1;
		}else{
			return 0;
		}
	}
	public function editAddress($data){
		$province = db('province')->field('province')->where('provinceID',$data['province'])->find();
		$city = db('city')->field('city')->where('cityID',$data['city'])->find();
		$area = db('area')->field('area')->where('areaID',$data['area'])->find();
		$dat['blog_consignee_address'] = $province['province'].$city['city'].$area['area'].$data['blog_address'];

		$dat['id'] = $data['id'];
		$dat['blog_user_id'] = $data['blog_user_id'];
		$dat['blog_consignee'] = $data['blog_consignee'];
		$dat['blog_phone'] = $data['blog_phone'];
		$dat['blog_consignee_address'] = $province['province'].$city['city'].$area['area'].$data['blog_address'];
		$dat['blog_create_time'] = time();
		$result = $this->update($dat);
		if($result == true){
			return 1;
		}else{
			return 0;
		}

	}

}
