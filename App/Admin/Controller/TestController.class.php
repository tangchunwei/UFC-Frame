<?php 

	namespace Admin\Controller;

	class TestController{


		function getCaptcha(){


			//Captcha 类，会自动加载过来
			\Captcha::en_captcha(4,20,108,35);


		}


	}


 ?>