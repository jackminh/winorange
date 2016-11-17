<?php
namespace Home\Behaviors;
use Think\Behavior;

class PageHeaderBehavior extends Behavior{
	public function run(&$params){	  
		$log = M('log');
		$log->action_name = "小张";
		$log->action_content = $params;
		$log->add();
	}

}
