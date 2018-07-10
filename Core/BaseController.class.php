<?php 

	//定义命名空间
	namespace Core;

	class BaseController {

		//增加smarty 模板引擎对象
		public $smarty;

		//定义构造方法，用来给属性赋值
		public function __construct(){

			require_once VENDOR."Smarty/Smarty.class.php";
			//实例化 Smarty对象
			$this->smarty = new \Smarty;
			//作Smarty使用的配置
			// var_dump($this->smarty);
			// 1) 设置模板（视图）文件的位置
			$this->smarty->template_dir = APP.PLAT."/View/".CONTROLLER."/";
			// 2) 设置模板编译的路径
			$this->smarty->compile_dir = APP.PLAT."/View_c/";
			// 3) 配置模板是否进行缓存
			$this->smarty->caching = false;
			// 4) 配置缓存目录
			$this->smarty->cache_dir = APP.PLAT."/Cache/";


			//配置 模板开始和结束标记
			$this->smarty->left_delimiter = "<{"; 
			$this->smarty->right_delimiter = "}>";

		}

		//定义一个 操作成功和操作失败的方法
		/*
		 * $p 表示平台
		 * $c 表示控制器
		 * $a 方法
		 * $msg 提示信息
		 * $n 秒数
		*/
		public function success($p,$c,$a,$msg,$n=3)
		{
			// //跳转  index.php?p=xx&c=xxx&a=xxxx
			$url = "index.php?p={$p}&c={$c}&a={$a}";
			// //      n秒以后跳转
			// header("refresh:{$n};url={$url}");
			// //输出信息
			// echo $msg."<br>{$n}秒后自动跳转...<a href='{$url}'>立即跳转</a>";
			//程序不向下执行

			//success.html页面
			include_once APP.PLAT."/View/Public/success.html";

			exit;
		}

		//定义一个 操作成功和操作失败的方法
		/*
		 * $p 表示平台
		 * $c 表示控制器
		 * $a 方法
		 * $msg 提示信息
		 * $n 秒数
		*/
		public function error($p,$c,$a,$msg,$n=3)
		{
			// //跳转  index.php?p=xx&c=xxx&a=xxxx
			$url = "index.php?p={$p}&c={$c}&a={$a}";
			// //      n秒以后跳转
			// header("refresh:{$n};url={$url}");
			// //输出信息
			// echo $msg."<br>{$n}秒后自动跳转...<a href='{$url}'>立即跳转</a>";
			//程序不向下执行

			//success.html页面
			include_once APP.PLAT."/View/Public/error.html";

			exit;
		}


		/*
		 * 自定义Smarty 模板分配变量的方法
		 */
		public function assign($name,$value){

			//调用底层的smarty 的assign的方法
			$this->smarty->assign($name,$value);

		}


		/*
		 * 自定义Smarty 模板分配变量的方法
		 */
		public function display($name){

			//调用底层的smarty 的assign的方法
			$this->smarty->display($name);

		}


	}



 ?>