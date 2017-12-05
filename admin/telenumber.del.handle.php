<?php
	require_once('../connect.php');
	$id = $_GET['id'];
	$deletesql = "delete from `contact` where id=$id";
	if(mysqli_query($con, $deletesql))
    {
		echo "<script>alert('删除数据成功');window.location.href='telenumber.manage.php';</script>";
	}
    else
    {
		echo "<script>alert('删除数据失败');window.location.href='telenumber.manage.php';</script>";
	}
?>