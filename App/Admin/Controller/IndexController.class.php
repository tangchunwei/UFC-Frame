<?php 

	//定义命名空间
	//后台控制器的类，必须用  Admin\Controller  来命名空间
	namespace Admin\Controller;
	//引用 Core 命名空间下的 AdminController类
	use \Core\AdminController;

	//注意：IndexController 要继承 后台公共的控制器 AdminController(在Core文件夹下)
	
	class IndexController extends AdminController {

		//定义方法
		function index(){
			// echo "欢迎进入后台管理系统!";
			// App/Admin/View/Index/index.html"
			$this->display("index.html");

		}



	}


 ?>