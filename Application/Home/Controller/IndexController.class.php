<?php
namespace Home\Controller;
use Home\Controller\HomeController;

class IndexController extends HomeController {


    public function index(){
    	$this->assign("flagindex","index");
 		$this->display();
    }

    /**
     * [关于我们]
     * @return [type] [description]
     */
    public function about(){
    	$this->assign("flagabout","about");
    	$this->display();
    }

    /**
     * [联系我们]
     * @return [type] [description]
     */
    public function contact(){
    	$this->assign("flagcontact","contact");
    	$this->display('Index/index');
    }

    /**
     * [产品介绍]
     * @return [type] [description]
     */
    public function product(){
    	$this->assign("flagproduct","product");
    	$this->display('Index/index');
    }
    
    /**
     * [合作案例]
     * @return [type] [description]
     */
    public function casees(){
    	$this->assign("flagcasees",'case');
    	$this->display("Index/index");
    }

}