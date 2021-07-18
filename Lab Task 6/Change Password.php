<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<style>.div
{
  display: flex;
  justify-content: center;
}
</style>
</head>
<body>
 <?php 

session_start();

if (isset($_SESSION['name'])){ require 'header2.php';}
else{header("location:Login.php");}

require 'Controller/confirmPasswordChange.php';
 ?>


<div class="div">
<form method="post">
 <fieldset>
  <legend>CHANGE PASSWORD</legend>

  <label for="current_password">Current Password :</label>
  <input type="password" id="current_password" name="current_password">
  <span class="error"> <?php echo $current_passwordErr;?></span>
  <br><br>

  <label for="new_password">New Password :</label>
  <input type="password" id="new_password" name="new_password">
  <span class="error"> <?php echo $new_passwordErr;?></span>
  <br><br>

  <label for="retype_new_password">Retype New Password :</label>
  <input type="password" id="retype_new_password" name="retype_new_password">
  <span class="error"> <?php echo $retype_new_passwordErr;?></span>
  <br><br>

  <hr>

  <input type="submit" value="Submit">

 </fieldset>
</form>
<?php
echo $message;
?>
</div> 
<?php require 'footer.php';?>
</body>
</html>