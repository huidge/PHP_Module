	<?php
	session_start();
	$counter = intval(file_get_contents("count.dat"));
	if(!$_SESSION['temp']){
		$_SESSION['temp'] = true;
		$counter++;
		$fp = fopen("count.dat","w");
		fwrite($fp, $counter);
		fclose($fp);
	}
	?>
<!DOCTYPE html>
<html>
 <head>
  <title> 防止页面刷新影响计数效果 </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="dz5362">
  <meta name="Keywords" content="dz5362">
  <meta name="Description" content="no-description">
  <meta http-equiv="Content-type" content="text/html;charset=utf-8">
  <style type="text/css">
	*{
	margin:0px;
	padding:0px;
	}
	#header{
	width:252px;
	background:#ccc;
	color:#fff;
	height:30px;
	line-height:30px;
	text-align:center;
	margin:auto;
	margin-top:10px;
	font-size:12px;
	}
	#mains{
	width:250px;
	background:#eee;
	border:1px solid #ccc;
	color:#000;
	height:30px;
	line-height:30px;
	text-align:center;
	margin:auto;
	font-size:14px;
	}
  </style>
 </head>

 <body>
  
 </body>
</html>
	<div id='header'>防止页面刷新影响计数效果</div>
	<div id='mains'>
	<center>
		游客总访问次数：<span><?php echo "$counter";?></span>次
	</center>
</div>