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
				<h3 class="hed" style="color:green">Welcome to Admistrative Area</h3>
				
				<center><form action="admin_home.php" method="post">
					<table >
						<tr>
							<td><a href="add_instructor.php">		- Add Instructor</a></td>
								
						</tr>
						<tr>
							<td><a href="subadd.php">	    - Add Subject</a><br></td>
						</tr>	
						<tr>
							<td><a href="testadd.php">		- Add Test</a><br></td>
						</tr>	
						<tr>
							<td><a href="questionadd.php">		- Add Question</a></td>
								
						</tr>
						<tr>
							<td><a href="manage_sector.php">		- Manage Sector</a></td>
								
						</tr>
						
						
					</table>
				</form></center>
				
            </div>
	</div>

</body>
</html>
<?php
}
?>