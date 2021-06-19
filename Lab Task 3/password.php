<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
  
<style>
.error {color: #FF0000;}
</style>

<?php
$currPass = $newPass = $retypePass = "";
$currPassErr = $newPassErr = $retypePassErr = "";
$current_password = "abc@1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["current_password"])) 
  {
    $currPassErr = "Enter Current Password";
  } 
  else 
  {
    $currPass = test_input($_POST["current_password"]);
    if (strlen($currPass) < 8)
    {
      $currPassErr = "Must be atleast 8 characters";
      $currPass="";
    }
    else if (!preg_match("/[@,#,$,%]/",$currPass)) 
    {
      $currPassErr = "Must contain at least one of the special character (@, #, $,%)";
      $currPass="";
    }
    else if($currPass!=$current_password)
    {
      $currPassErr = "Password doesn't match";
      $currPass="";
    }
  }

  if (empty($_POST["new_password"])) 
  {
    $newPassErr = "Enter New Password";
  } 
  else 
  {
    $newPass = test_input($_POST["new_password"]);
    if (strlen($newPass) < 8)
    {
      $new_passwordErr = "Must be atleast 8 characters";
      $newPass="";
    }
    else if (!preg_match("/[@,#,$,%]/",$newPass)) 
    {
      $newPassErr = "Password must contain at least one of the special characters (@, #, $,%)";
      $newPass ="";
    }
    else if($newPass==$currPass)
    {
      $newPassErr = "Can't be same as the current password";
      $newPass="";
    }
  }

  if (empty($_POST["retype_password"])) 
  {
    $retypePassErr = "Retype New Password";
  } 
  else 
  {
    $retypePass = test_input($_POST["retype_password"]);
    if($retype_new_password!=$new_password)
    {
      $retypePassErr = "Password doesn't match with new password";
      $retypePass="";
    }
  }
}
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
 <fieldset>
  <legend>CHANGE PASSWORD</legend>

  Current Password :
  <input type="password" id="current_password" name="current_password">
  <span class="error"> <?php echo $currPassErr;?></span>
  <br><br>

  <label for="new_password">New Password :</label>
  <input type="password" id="new_password" name="new_password">
  <span class="error"> <?php echo $newPassErr;?></span>
  <br><br>

  <label for="retype_new_password">Retype New Password :</label>
  <input type="password" id="retype_new_password" name="retype_new_password">
  <span class="error"><?php echo $retypePassErr;?></span>
  <br><br>

  <hr>

  <input type="submit" value="Submit">

 </fieldset>
</form>
</body>
</html>