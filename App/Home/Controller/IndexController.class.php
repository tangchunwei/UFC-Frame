<?php 
	
	//增加命名空间
	namespace Home\Controller;
	//引入其他空间的类
	use \Core\HomeController;
	//新建类                        Core
	class IndexController extends HomeController{


		//创建index方法
		/*
		 * 默认的访问方法
		 */
	    function index(){

	    	// echo "欢迎使用 czxyframe 框架!";
	    	$frameName = "CzxyFrame 开源框架";
	    	// 加载视图，显示界面
	    	// 
	    	include_once APP.PLAT."/View/".CONTROLLER."/index.html";

	    }


	    //测试操作成功的跳转方法
	    function testSuccess(){

	    	//调用方法
	    	$this->success("home","user","getAllUser","哎呀妈呀，操作成功!",3);


	    }

	    //测试操作成功的跳转方法
	    function testError(){

	    	//调用方法
	    	$this->error("home","user","getAllUser","服务器发生地震!",5);


	    }




	}



 ?>