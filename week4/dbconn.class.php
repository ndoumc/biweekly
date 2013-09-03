<?php
class DatabaseConnection 
{
	var $localH='localhost';
	var $root = 'root';
	var $pass = '';
	
	 var $query = "INSERT INTO users VALUES(NULL,mpho,mc.ndouc@gmail.com,milo123)";
		
	function DatabaseConnection($localH, $root,  $pass)
	{
		$this->localH = $localH;
		$this-> root =  $root;
		$this->pass = $pass;
	}
	
	function establishConnection()
	{
		$conn=mysql_connect($this->localH,$this->root,$this->pass);
		return $conn;
		if ($conn)
		 {
   	 		echo "You are  connected.";
   			 db2_close($conn);
		}
else {
    echo "Connection failed .";
	}

	}
	
	function execute($query)
	{
			$usr = 'mpho';
			$email = 'mc.ndouc@gmail.com';
			$pass = 'milo123';
			
		$query = "INSERT INTO users VALUES(NULL'".$usr."','".$email."','".$pass."')";
		$results = mysql_query($query, $this->establisheConnection());
		return $results; 		
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