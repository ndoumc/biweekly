<?php
	require "user.class.php";
	$userNym = trim($_POST['username']);
	$userEmail = trim($_POST['email']);
	$pass = trim($_POST['password']);
	$objTest = new user();
	
 	echo $objTest->displayUerInfo($userEmail,$email);
	
	$obj = new user("milo123","mc.ndouc@gmail.com");
	echo $obj->save();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="testUsers.php">
  <table width="350" border="5">
  
    <tr>
      <td colspan="2"><div align="center"></div>        
      <div align="center"><strong>SIGN UP</strong></div></td>
    </tr>
    <tr>
      <td><div align="right">USERNAME : </div></td>
      <td><input type="text" name="username"></td>
    </tr>
    <tr>
      <td><div align="right">EMAIL ADDRESS : </div></td>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <td colspan="2"> 
</td>
      </tr>
    <tr>
      <td colspan="2">
	  <input type="submit" name="sub" value="LOGIN">
		</td>
      </tr>
  </table>
</form>
</body>
</html>