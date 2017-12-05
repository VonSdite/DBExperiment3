<?php
	require_once('../connect.php');
	$sql = "select * from `contact` order by 'Name'";

	$query  = mysqli_query($con, $sql);
	if($query && mysqli_num_rows($query))
  {
		while($row =mysqli_fetch_assoc($query))
    {
			 $data[] = $row;
		}
	}
  else
  {
		  $data = array();
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>数据库作业</title>
<style type="text/css">
body {
	margin-left: 128px;
	margin-top: 128px;
	margin-right: 128px;
	margin-bottom: 128px;
}
</style>
</head>

<body>
<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
  <tr>
    <td width="130" height="287" align="left" valign="top" bgcolor="#FFFFFF">
      <p><a href="telenumber.add.php">添加联系人</a></p>
      <p><a href="telenumber.manage.php">管理联系人数据</a></p>
  </td>
    <td width="837" valign="top" bgcolor="#FFFFFF">
      <table width="650" align="center" border="0" 
      cellpadding="8" cellspacing="1" bgcolor="#000000">
      <tr>
        <td colspan="6" align="center" bgcolor="#FFFFFF">数据管理列表</td>
        </tr>
      <tr>
        <td width="40" bgcolor="#FFFFFF" align="center">编号</td>
        <td width="37" bgcolor="#FFFFFF" align="center">姓名：</td>
        <td width="100" bgcolor="#FFFFFF" align="center">电话：</td>
        <td width="100" bgcolor="#FFFFFF" align="center">所在城市：</td>
        <td width="60" bgcolor="#FFFFFF" align="center">操作</td>
      </tr>
	<?php 
		if(!empty($data)){
			foreach($data as $value){
	?>
      <tr>
        <td bgcolor="#FFFFFF" align="center">&nbsp;<?php echo $value['id']?></td>
        <td bgcolor="#FFFFFF" align="center">&nbsp;<?php echo $value['Name']?></td>
        <td bgcolor="#FFFFFF" align="center">&nbsp;<?php echo $value['Telephone']?></td>
        <td bgcolor="#FFFFFF" align="center">&nbsp;<?php echo $value['City']?></td>
        <td bgcolor="#FFFFFF">
          <a href="telenumber.del.handle.php?id=<?php echo $value['id']?>">删除</a> 
          <a>&nbsp;&nbsp;&nbsp;</a>
          <a href="telenumber.modify.php?id=<?php echo $value['id']?>">修改</a>
        </td>
      </tr>
        <?php
        		}
		}
        ?>
    </table></td>
  </tr>
</table>
</body>
</html>
