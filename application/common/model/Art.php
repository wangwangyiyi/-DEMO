<?php
namespace app\common\model;
use think\Model;
use app\common\validate\User as UserValidate;

/**
* 
*/
class Art extends Model
{
	protected $table = 'blog_art';

	 /**
     * 注册
     * @return $check 确认密码
     * @return $data 输入数据
     * 
     */
	function getTree()
	{
		$data = $this->select();
		$result = $this->tree($data);
		return $result;
	}

	public function tree($data,$p_id=0,$level=0)
	{	
		static $arr = [];
		foreach ($data as $k => $v) {
			if($v['p_id'] == $p_id){
 				$v['level'] = $level;
				$arr[] = $v; 
				$this->tree($data,$v['id'],$level+1);
			}
 		}
 		return $arr;

	}

}
