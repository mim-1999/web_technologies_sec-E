<!DOCTYPE html>
<html>
<head>
<title>Add Charge</title>
</head>
<body>
<form action="Controller/saveCharge.php" method="POST" enctype="multipart/form-data">
 <fieldset style="width: 15%;">
  <legend>ADD CHARGE</legend>

  <label for="name">Name</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="deliveryCharge">Delivery Charge</label><br>
  <input type="text" id="deliveryCharge" name="deliveryCharge"><br>

  <label for="location">Location</label><br>
  <input type="text" id="location" name="location"><br>

  <hr>

  <input type="checkbox" id="display" name="display">
  <label for="display">Display</label><br>

  <hr>
  
  <input type="submit" name = "saveCharge" value="Save">

 </fieldset>
</form>
</body>
</html>