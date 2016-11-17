<?php
namespace Home\Model;
use Think\Model;
class MemberModel extends Model{


	public function getUserInfoByCondation($field=array(),$map=array()){
		$result = $this->field($field)->where($map)->select();
		return $result;
	}

	public function updateMember($data,$where){

		$res = $this->where($where)->save($data);
		return $res;

		
	}

}