<?php
/* Smarty version 3.1.30, created on 2018-04-08 18:31:59
  from "C:\www\czxyframe\App\Admin\View\Index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac9ef9f1e6750_01405834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e68213d006d214acdcf3af1deda554e80909ba5' => 
    array (
      0 => 'C:\\www\\czxyframe\\App\\Admin\\View\\Index\\index.html',
      1 => 1523183516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac9ef9f1e6750_01405834 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>用户登录</title>
	<link rel="stylesheet" href="Public/css/base.css" />
	<link rel="stylesheet" href="Public/css/login.css" />
	<?php echo '<script'; ?>
 src="Public/js/jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="superlogin"></div>
<div class="loginBox">
	<div class="logo"><img src="Public/images/logo_login.png"/></div>
	<div class="loginMain">
		<div class="tabwrap">
		<form action="index.php?p=admin&c=user&a=doLogin" id="loginForm" method="post">
		<table border="0" cellspacing="0" cellpadding="0">
			<tr><td class="title">用户名：</td><td><input type="text" id="username" name="uname" class="form-control txt" /></td></tr>
			<tr><td class="title">密   码：</td><td><input type="password" id="passwd" name="pwd" class="form-control txt" /></td></tr>
			<tr><td class="title">验证码：</td><td><input type="text" id="validateCode" name="validateCode" class="form-control txt txt2" /><span class="yzm"><img src="index.php?p=admin&c=test&a=getCaptcha" onclick="this.src='index.php?p=admin&c=test&a=getCaptcha&r='+Math.random()" style="cursor: pointer;" /></span></td></tr>
			<tr class="errortd"><td>&nbsp;</td><td><i class="ico-error"></i><span class="errorword">用户名或密码错误，请重新输入！</span></td></tr>		
			<tr><td>&nbsp;</td><td><input type="button" id="btn_login" class="loginbtn" value="登录" /><input type="button" class="resetbtn" value="重置" onclick="location.href='loginA.html'"/></td></tr>
			<tr><td>&nbsp;</td><td class="forgetpsw"><a href="login_forgetb.html">忘记密码？</a></td></tr>	
		</table>
		</form>
		</div>
	</div>
</div>
<div class="footer">Copyright © 2016-2017 传智专修学院  All Rights Reserved.</div>
</body>
</html>

<?php echo '<script'; ?>
 language="javascript" type="text/javascript">
$(function(){
	
	//手动验证表单各项值是否为空
	$("#btn_login").click(function(){
		
		if($("#username").val()==""){
			alert("用户名不能为空!");
			$("#username").focus();
			
		}else if($("#passwd").val()==""){
			alert("密码不能为空!");
			$("#passwd").focus();
			
		}else if($("#validateCode").val()==""){
			alert("验证码不能为空!");
			$("#validateCode").focus();
			
		}
		else{
			//此处应该做用户名、密码验证
			$("#loginForm").submit();
			
		}
		
	});
	
});
<?php echo '</script'; ?>
>
<?php }
}
