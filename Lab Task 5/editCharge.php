<?php 

require_once 'model/model.php';
require_once 'Controller/updateCharge.php';
if(isset($_GET['id']))
{
  $charge = showCharge($_GET['id']);  
}
else
{
  header('Location: displayCharge.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Charge</title>
</head>
<body>
<form method="POST">
 <fieldset style="width: 15%;">
  <legend>EDIT CHARGE</legend>

  <label for="name">Name</label><br>
  <input type="text" id="name" name="name" value="<?php echo $charge['Name'] ?>"><br>

  <label for="deliveryCharge">Delivery Charge</label><br>
  <input type="text" id="deliveryCharge" name="deliveryCharge" value="<?php echo $charge['Delivery Charge'] ?>">
  <br>
  <label for="location">Location</label><br>
  <input type="text" id="location" name="location" value="<?php echo $charge['Location'] ?>"><br>

  <hr> 

  <input type="checkbox" id="display" name="display"<?php if($charge['Display']== "YES"){echo "checked";} ?>>
  <label for="display">Display</label><br>

  <hr>
  
  <input type="submit" name = "updateCharge" value="Save">

 </fieldset>
</form>
</body>
</html>