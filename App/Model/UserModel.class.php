<?php 

	//命名空间
	namespace Model;
	use \Core\Model;
	//创建模型类
	class UserModel extends Model{

		protected $table = 'user';

		/*
		* 查询所有的User表中的数
		*/
		function findAll($data=[]){

			//返回一个数组
			return $this->getAll($data);

		}

		/*
		 * 根据用户名获取一条（getRow）用户的信息
		 * 参数：$uname  用户名
		 */      
		function getUserInfoByName($uname){

			//根据$uname 查询一行数据
			$sql = "select * from ".$this->getTableName()." where username =:name ";

			//定义参数的数组
			$data[':name'] = $uname;

			//调用父类的getRow
			$arr = $this->getRow($sql,$data);
			
			return $arr;

		}

	}



 ?>