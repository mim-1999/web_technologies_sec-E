<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
</head>
<body>
<?php 

session_start();

if (isset($_SESSION['user_name'])){ require 'Logged In Dashboard.php';}
else
{
	require 'header.php';
}

?>
<h1 style="text-align: center;
  margin: 20% 0;">Welcome to our Company</h1>  	
<?php require 'footer.php';?>
</body>
</html>