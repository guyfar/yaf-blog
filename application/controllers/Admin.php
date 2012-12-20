<?php
class AdminController extends Yaf_Controller_Abstract{
	//default action name
	public function indexAction(){
		$this->getView()->content = "这里是后台，欢迎你gavin	";
	}
}

