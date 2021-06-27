<!DOCTYPE html>
<html>
<head>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto;
}
.right{
	float: right;
	margin-right: 50px;
}
.left{
	float: left;
	margin-left: 50px;
}
</style>
</head>
<body>
<header class="grid-container," style="
margin-top: 50px;">
<div class="left">
	<h1 style="margin: auto;">Urgent ePharma System</h1>
    
</div>	
<div class="right">
	<?php echo "Logged in as ".$_SESSION['user_name']."||"; ?>
    <a href="Logout.php">Logout</a>
</div>
<div class="left">
<ul>
<h3><li><b>Dashboard<b></li></h3>
<h4><a href="Welcome.php"><li>home</li></a></h4>
<h4><a href="View Profile.php"><li>View Profile</li></a></h4>
<h4><a href="Edit Profile.php"><li>Edit Profile</li></a></h4>
<h4><a href="Change Profile Picture.php"><li>Change Profile Picture</li></a></h4>
<h4><a href="Change Password.php"><li>Change Password</li></a></h4>
</ul>
</div>
</header> 
<br>
<br>
<hr>
</body>
</html>