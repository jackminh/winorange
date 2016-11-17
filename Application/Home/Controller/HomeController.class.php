<?php
namespace Home\Controller;
use Think\Controller;
class HomeController extends Controller{
	/**
	*  空操作
	*/
	public function _empty(){
		$this->redirect("Index/index");
	}
	/*
	*	首次执行此方法
	*/
	protected function _initialize(){
		
	}
}