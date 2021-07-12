<?php
if (isset($_POST['updateCharge'])) 
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

  if (updateCharge($_GET['id'], $data)) 
  {
  	echo 'Successfully updated!!';
  	header('Location: displayCharge.php');
  }
}
?>