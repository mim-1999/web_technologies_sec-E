<?php  
if (!isset($_POST['name'])) 
{
  require_once ('model/model.php');
  $charges = showAllcharges();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Display Charges</title>
</head>
<body>
<style>
table,td,th{
border:1px solid black;
    }
</style>
<fieldset style="width:15%;">
<legend>Display</legend>
<table>
<thead>
<tr>
<th>Name</th>
<th>Delivery Charge</th>
<th>Location</th>
<th colspan="2">Edit&Delete</th>
</tr>
</thead>
<body>
<?php 
foreach ($charges as $i => $charge): 
if ($charge['Display'] == "YES" || isset($_POST['name'])):
?>
<tr>

<td><?php echo $charge['Name'] ?></td>
<td><?php echo $charge['Delivery Charge'] ?></td>
<td><?php echo $charge['Location'] ?></td>
<td><a href="editCharge.php?id=<?php echo $charge['ID'] ?>">Edit</a></td>
<td><a href="deleteCharge.php?id=<?php echo $charge['ID'] ?>">Delete</a></td>
</tr>
 <?php endif; endforeach; ?>
</body>
</table>
</fieldset>
</body>
</html>