<?php  
require_once '../model/model.php';


if (isset($_POST['saveCharge'])) 
{
	$data['name'] = $_POST['name'];
	$data['deliveryCharge'] = $_POST['deliveryCharge'];
	$data['location'] = $_POST['location'];
	if (isset($_POST['display'])) 
	{
		$data['display'] = "YES";
	}
	else
		$data['display'] = "NO";

  if (addCharge($data)) 
  {
  	echo 'Successfully added!!';
  	header('Location: ../displayCharge.php');
  }
} 
else 
{
	echo 'You are not allowed to access this page.';
}
?>