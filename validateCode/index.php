<?php
session_start();

if($_SESSION['check'] == $_POST['checkcode']){
   echo "<script>alert('验证码输入正确！');</script>";
}

?>

<script type="text/javascript">
<!--
	function check(){
	  document.getElementById('show').src="checkcode.php?time="+new Date().getTime();

	 
	}
//-->
</script>



<img src="checkcode.php" id="show">
<a href="javascript:void(0);" onclick="check()">点击更换验证码</a>

<form  method="post">
<input type="text" value="" name="checkcode">
<input type="submit" value="提交">
</form>
