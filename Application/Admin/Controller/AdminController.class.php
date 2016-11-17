<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {


	protected function _initialize(){

		//这里做登录验证，islogin时为了把后台模板搭建所用
		

		if(I("get.islogin")=="yes"){

		
			$this->redirect("Index/main");


		}else{



			$this->redirect("Public/login");
		}

	}


	public function main(){

		$this->display();
	}



}