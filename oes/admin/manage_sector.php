<?php
session_start();
$server="localhost";
$user="root";
$pass="";
$db="exam_db";
$con=mysql_connect("$server","$user","$pass") or die("Could not Connect My Sql");
mysql_select_db("$db",$con)  or die("Could not connect to Database");

if(!isset($_SESSION["sess_user"])){
	
	header("location:admin.php");
}
else{
?>
<html>
	<head>
		<title>admin home</title>
		<link href="admin.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div class="main">
		<div class="header">
			<center><img src="img/header.jpg" width="960" height="70" /></center>
			<a href="admin_home.php"> Home </a>
			<a href="signout.php"> Logout </a>
		</div>	
			
		<div class="user">
			<h3 class="hed" style="color:green">Manage Sector</h3>
				
			<center><form action="manage_instructor.php" method="post">
				<table>
					<a href="editdelete_instructor.php"> - Manage Instructor</a><br>
					<a href="editdelete_subject.php"> - Manage Subject</a>
				</table>					
			</form></center>
				
        </div>
	</div>
	
</body>
</html>
<?php
}
?>
