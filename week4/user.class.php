<?php
	class user 
	{
		public $username;
		public $email;
		public $password;
		function user__construct($username,$email)
		{
			$this->username	= $username;
			$this->email = $email;
			
		}
		
		function setPassword($password)
		{	
			$pass = md5($password);
			return $pass;
		}
		
		function displayUerInfo()
		{
			return 	$email."".$username;
		}
		
		function save()
		{
			$conn=mysql_connect('localhost','root','');
		$query = "INSERT INTO users VALUES(NULL'".$usr."','".$email."','".$pass."')";
		$results = mysql_query($query, $this->establishConnection());
		if(!$results)
		{
			echo "Nothing  saved ";	
		}	
		}
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

</body>
</html>