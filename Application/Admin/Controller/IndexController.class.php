<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {


	/**
	 * [框架整体]
	 * @return [type] [description]
	 */
	 public function main(){

	 	$this->display();
	 }
	/**
	 * [详细内容页]
	 * @return [type] [description]
	 */
    public function index(){

    	$this->display();
    }

    /**
     * [后台模板顶部]
     * @return [type] [description]
     */
     public function top(){
     	$this->display();
    }

    /**
     * [后台模板左边栏]
     * @return [type] [description]
     */
     public function left(){

     	$this->display();

     }

}