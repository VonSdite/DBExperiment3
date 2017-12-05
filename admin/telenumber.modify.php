<?php
	require_once('../connect.php');
	//读取旧信息

	$id = $_GET['id'];
	$query = mysqli_query($con, "select * from `contact` where id=$id");
	$data = mysqli_fetch_assoc($query);
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
      <form id="form1" name="form1" method="post" action="telenumber.modify.handle.php">

    	<input type="hidden" name="id" value="<?php echo $data['id']?>" />

      <table width="800" border="0" cellpadding="8" cellspacing="1">
        <tr>
          <td colspan="2" align="center">修改数据</td>
          </tr>
        <tr>
          <td width="450" align="center">姓名：</td>
          <td width="300"><label for="Name"></label>
            <input type="text" name="Name" id="Name" value="<?php echo $data['Name']?>"/></td>
        </tr>
        <tr>
          <td align="center">电话：</td>
          <td><input type="text" name="Telephone" id="Telephone"  value="<?php echo $data['Telephone']?>"/></td>
        </tr>
        <tr>
          <td align="center">所在城市：</td>
          <td><input type="text" name="City" id="City" value="<?php echo $data['City']?>"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="button" id="button" value="提交" /></td>
          </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>
