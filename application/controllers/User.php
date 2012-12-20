<?php
class UserController extends Yaf_Controller_Abstract{
	//default action name
	public function indexAction(){
		$this->getView()->content = "nice to meet you";
	}
}

