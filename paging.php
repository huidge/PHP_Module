<?php 
include('conn.php');//链接数据库

if (isset($_GET['page'])) {	//判断分页变量是否存在
	$page=$_GET['page'];	//如果存在，将分页变量值赋给指定的变量
} else {
	$page=1;				//如果不存在，则设置变量初始值为1
}

if ($page) {
	$page_size=10;					//每页显示10条记录
	$query1="select * form tb_book";	//定义查询语句
	$result1=mysql_query($query1);	//执行查询操作
	$message_count=mysql_num_rows($result1);	//获取查询总数
	$page_count=ceil($message_count/$page_size);//获取总的页数
	$offset=($page-1)*$page_size;	//计算每页的起始记录数
	$query2="select * from tb_book where id order by id limit $offset,$page_size";//定义SQL语句，查询当前页显示的记录数
	$result2=mysql_query($query2);	//执行查询操作
}

// 输出数据
while($row = mysqli_fetch_array($result2)) {
echo $row[0];
echo $row[1];
echo $row[2];
    }
mysqli_close($link);//关闭数据库
?>

<div align="right">
共<?php echo $message_count; ?>条记录，共<?php echo $page_count; ?>页
当前第<?php echo $page; ?>页
<?php
if($page!=1) {	//判断，如果分页变量值不为1，输出下面的超链接

	echo "<a href='paging.php?page=1'>首页</a>";
	echo "<a href='paging.php?page=".($page-1)."'>上一页</a>";
}
if ($page<$page_count) { //判断，如果分页变量小于总的记录数，则输出下面的超链接
	echo "<a href='paging.php?page=".($page+1)."'>下一页</a>";
	echo "<a href='paging.php?page=$page_count'>尾页</a>";
}

?>
</div>
