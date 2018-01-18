<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> 用户登录 </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="author">
  <meta name="Keywords" content="yztx">
  <meta name="Description" content="no-description">
  <meta http-equiv="Content-type" content="text/html;charset=GB2312">
  <link rel='stylesheet' type='text/css' href='style.css'>
  <style type="text/css">
</style>
 </head>

 <body>
<div id="myform">
<center><h3>用户登录</h3></center>
<form method="post" name="myForm" id="myForm">
<fieldset>
<legend>用户登录</legend>
<div>
<label for="Name">用户名</label>
<input type="text" name="username" class="input"
 id="Name" size="20" maxlength="30"  value="admin"/>
*<br/>
<div>
<label for="password">输入密码</label>
<input type="password" name="userpwd" class="input" id="password" size="18" maxlength="15" value="admin"/>
*<br/>
	<div>
		<label for="sub">输入图片中数字的和</label>
		<img src='gd_sub_num.php' onclick="this.src='gd_sub_num.php?time='+new Date().getTime()" style="cursor:hand;">
		<input type="text" name="sub" id='sub' size="10" maxlength="10" />*<br/>
		</div>
		<center>单击图片可刷新验证码</center>
	<div>
<div class="enter">
<input name="create791" type="submit" class="buttom" value="提交" />
<input name="Submit" type="reset" class="buttom" value="重置" />
</div>
<div>
<label for="confirm_password"></label>
</div>
</fieldset>
</form>
<br/>
</div>
 </body>
	<?php
	if($_POST['sub']){
		if($_POST['sub'] == $_SESSION['scode']){
			if($_POST['username'] == 'admin' && $_POST['userpwd'] == 'admin'){
				echo "<script>alert('登录成功！')</script>";
			}else{
				echo "<script>alert('登录失败！')</script>";
			}
		}else{
			echo "<script>alert('验证码错误')</script>";
		}
	}
	?>
</html>
