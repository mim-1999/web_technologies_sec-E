<!DOCTYPE html>
<html>
<head>
<style>
.right
{
	float: right;
	margin-right: 50px;
}
.left
{
	float: left;
	margin-left: 50px;
}
</style>
</head>

<body style="border: 5px solid black;">

<h1><img src="logo.png" width="100" height="100">Urgent e-Pharma System </h1>	
<br><br>
<div class="right">
	<?php echo "Logged in as Rider- ".$_SESSION['name']."||"; ?>
	<a href="Controller/Logout.php">Logout</a>

</div>

<div class="left">

<a href="Welcome.php">home</a>
<a href="View Profile.php">View Profile</a>
<a href="Edit Profile.php">Edit Profile</a>
<a href="Change Profile Picture.php">Change Profile Picture</a>
<a href="Change Password.php">Change Password</a>
<a href="Accept Request.php">Accept Request</a>
<a href="Accept Charge.php">Add Charge</a>
<a href="Notification.php">Notification</a>
<a href="Rating.php">Rating</a>
</div>
 
<br><br>
<hr>

</body>
</html>