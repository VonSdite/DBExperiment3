<?php
    require_once('config.php');
    
    // 连库 选库
    $con = mysqli_connect(HOST, USERNAME, PASSWORD, 'telbook');

    if (mysqli_connect_errno($con)) 
    { 
        echo "连接 MySQL 失败: " . mysqli_connect_error(); 
    } 

    if (!mysqli_select_db($con, 'telbook'))
    {
        mysql_error();
    }

    // 字符集
    if (!mysqli_query($con, 'set names utf8'))
    {
        mysql_error();
    }
?>