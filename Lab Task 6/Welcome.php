<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
</head>
<body style="border: 5px solid black;">
<?php
session_start();
if (isset($_SESSION['name']))
{require 'header2.php';}
else{require 'header.php';}
 ?>


<h1 style="text-align: center">Welcome to our Company</h1> 
<h2 style="text-align: center">Ready to serve you immedietly</h2>	



<?php require 'footer.php';?>
</body>
</html>