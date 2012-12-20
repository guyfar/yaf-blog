<?php
class Bootstrap extends Yaf_Bootstrap_Abstract{
	public function _initConfig(){
		$config = Yaf_application::app()->getConfig();
		Yaf_Registry::set("config",$config);
	}
	/*
	public function _initDefaultName(Yaf_Dispatcher $dispatcher){
		$dispatcher ->setDefaultModule("Index")->setDefaultController("User")->setDefaultAction("index");
		//$dispatcher ->setDefaultModule("Index")->setDefaultController("Index")->setDefaultAction("index");
	}
	*/
	public function _initRoute(Yaf_Dispatcher $dispatcher) {
        $router = Yaf_Dispatcher::getInstance()->getRouter();
        $router->addConfig(Yaf_Registry::get("config")->routes);
        /**
        * 添加一个路由
		*/
		$route  = new Yaf_Route_Rewrite(
			"/admin/index/",
			array(
                    "controller" => "admin",
                    "action"         => "index",
                    )
				);
        $router->addRoute('admin', $route);
    }

}
