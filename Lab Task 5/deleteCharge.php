<!DOCTYPE html>
<html>
<head>
<title>Delete Charge</title>
<?php 

require_once 'model/model.php';
if(isset($_GET['id']))
{
  $charge = showCharge($_GET['id']);  
}
else
{
  header('Location: displayCharge.php');
}
 ?>
</head>
<body>
<form method="POST">
<fieldset style="width: 15%;">
<legend>DELETE CHARGE</legend>

  Name : <?php echo $charge['Name'] ?><br>

  Delivery Charge : <?php echo $charge['Delivery Charge'] ?><br>

  Location : <?php echo $charge['Location'] ?><br>

  Displayable :<?php echo $charge['Display'] ?><br>

  <hr>
  <a href="Controller/removeCharge.php?id=<?php echo $charge['ID'] ?>">Delete</a>

 </fieldset>
</form>
</body>
</html>
