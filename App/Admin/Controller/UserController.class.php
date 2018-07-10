<?php 

	// 后台的控制器都要使用 Admin\Controller 空间
	namespace Admin\Controller;  
	use \Core\AdminController;   //完全限定空间（绝对路径）访问

	class UserController extends AdminController {


		//创建doLogin方法，用于处理用户的登录的逻辑
		public function doLogin(){
			session_start();

			if(!isset($_POST['uname'])){
				$this->error("admin","index","index","非法的请求路径!",3);
				exit;
			}

			//接收用户输入的内容
			$uname = $_POST['uname'];
			$pwd = $_POST['pwd'];
			$code = $_POST['validateCode'];

			//判断验证码是否正确
			if(strtolower($code)!=strtolower($_SESSION['validateCode'])){
				$this->error("admin","index","index","验证码输入错误!",3);
				exit;
			}
			

			//调用UserModel 的方法，获取用户登录的数据
			$userModel = new \Model\UserModel;
			// 在UserModel中，提供一个方法，根据用户名获取用户信息
			$userArr = $userModel->getUserInfoByName($uname);
			//如果能够正常获取到数据，表示表示登录成功
			if(!$userArr){
				//提示用户，用户名不存在
				//index.php?p=admin&c=index&a=index  -- 登录页
				$this->error("admin","index","index","您输入的用户名不存在",3);
				exit;
			}			
			//       判断是用户名不存在，还是密码错误
			//       123                                        md5($pwd)                    202cb962ac59075b964b07152d234b70
			//       
			//                                                  双MD5加密
			//       202cb962ac59075b964b07152d234b70           md5(md5($pwd))               asfasfasdfsafasfasdfasdfasdffsaf
			if($userArr['passwd']!=md5($pwd)){
				$this->error("admin","index","index","您输入的密码不正确",3);
				exit;

			}

			//程序能够执行到此处，表示登录成功!
			//   /App/Admin/View/User/a.html
			//   APP.PLAT    -- C:/www/czxyframe/App/Admin/
			//   display() 方法，可以直接设置绝对路径
			$this->display(APP.PLAT."/View/Public/main.html");

		}


	}


 ?>