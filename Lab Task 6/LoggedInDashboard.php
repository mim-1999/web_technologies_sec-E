<!DOCTYPE html>
<html>
<head>
<style>
.right{
	float: right;
	margin-right: 50px;
}
</style>
</head>
<?php
session_start();
if (!isset($_SESSION['name'])){require 'header.php'}

?>


<body style="border: 5px solid black;">

<h1><img src="logo.png" width="100" height="100">Urgent e-Pharma System </h1>	
<br><br>
<div class="right">
	<?php echo "Logged in as Rider- ".$_SESSION['name']."||"; ?>
	<a href="Controller/Logout.php">Logout</a>

</div>

<hr>
<br>
<br>
<ul>
<h4><a href="Welcome.php"><li>home</li></a></h4>
<h4><a href="View Profile.php"><li>View Profile</li></a></h4>
<h4><a href="Edit Profile.php"><li>Edit Profile</li></a></h4>
<h4><a href="Change Profile Picture.php"><li>Change Profile Picture</li></a></h4>
<h4><a href="Change Password.php"><li>Change Password</li></a></h4>
<h4><a href="Accept Request.php"><li>Accept Request</li></a></h4>
<h4><a href="Accept Charge.php"><li>Add Charge</li></a></h4>
<h4><a href="Notification.php"><li>Notification</li></a></h4>
<h4><a href="Rating.php"><li>Rating</li></a></h4>
</ul>
 
<br><br>
<hr>


</body>
</html>