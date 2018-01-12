<?php
//连接MySql数据库公共配置文件
    $server="";		//数据库服务器ip地址
    $db_username="";//数据库用户名
    $db_password="";//数据库密码
    $db_database="";//数据库名称

    $link = mysqli_connect( $server,$db_username,$db_password,$db_database); 
 
    if (!$link) { 
        printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error()); 
    exit; 
    }
?>