<?php 
	require_once('../connect.php');
	$id = $_POST['id'];
	$Name = $_POST['Name'];
    $Telephone = $_POST['Telephone'];
    $City = $_POST['City'];

	$updatesql = "update `contact` set Name='$Name', Telephone='$Telephone', City='$City' where id=$id";

	// echo $updatesql;
	if(mysqli_query($con, $updatesql))
	{
		echo "<script>alert('修改数据成功');window.location.href='telenumber.manage.php';</script>";
	}
	else
	{
		echo "<script>alert('修改数据失败');window.location.href='telenumber.manage.php';</script>";
	}
?>