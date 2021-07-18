<!DOCTYPE html>  
<html>  
<head>  
<title>Edit Profile</title> 
<style>
.div{
  display: flex;
  justify-content: center;
}
</style>
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['name'])){require 'header2.php';}
else{header("location:Login.php");}

require 'Controller/showData.php';
require 'Controller/storeData.php';
?> 

<div class="div">
<fieldset>
<legend>EDIT PROFILE</legend>                 
  <form method="post"> 
  <label for="name">Name :</label>
  <input type="text" id="name" name="name" value="<?php echo $name ?>">
  <span class="error"> <?php echo $nameErr;?></span><hr>

  <p>ID             :   <?php echo $id ?></p><hr>

  <label for="email">Email :</label>
  <input type="text" id="email" name="email" value="<?php echo $email ?>">
  <span class="error"> <?php echo $emailErr;?></span><hr>

  <p>Gender         :   <?php echo $gender ?></p><hr>
  <p>Date of Birthday:  <?php echo $dob ?></p>
  <hr>

<input type="submit" name="submit" value="Submit">
</form>  
</fieldset>
</div> 
<?php require 'footer.php';?>
</body>  
</html>  