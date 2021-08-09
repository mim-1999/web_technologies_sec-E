<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
</head>
<body class="banner">

<?php 
session_start();
if (isset($_SESSION['name'])){header("location:Welcome.php");}
else{require 'header.php';}
require 'Controller/savePassword.php';
?>

<div class="div">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset>
  <legend>Forgot Password</legend>

  <label for="email">Enter Email :</label>
  <input type="text" id="email" name="email">
  <span class="error"> <?php echo $emailErr;?></span><hr>

  <input type="submit" value="Submit">
 </fieldset>
</form> 

<?php 
echo $msg;?>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require 'footer.php';?>
</body>
</html>