<?php 
    require_once('../connect.php');

    // print_r($_POST);
    if (empty($_POST['Name']))
    {
        echo "<script>alert('联系人姓名为空');window.location.href='telenumber.add.php'</script>";
    }

    $Name = $_POST['Name'];
    $Telephone = $_POST['Telephone'];
    $City = $_POST['City'];
    
    $insertsql = "INSERT INTO `contact` (`Name`, `Telephone`, `City`) VALUES ('$Name', '$Telephone', '$City')";

    // echo $insertsql;
    if (mysqli_query($con, $insertsql))
    {
        echo "<script>alert('添加成功');window.location.href='telenumber.add.php'</script>";
    }
    else
    {
        echo "<script>alert('添加失败');window.location.href='telenumber.add.php'</script>";
    }   
 ?>