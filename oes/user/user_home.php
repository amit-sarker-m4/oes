<?php
session_start();
$server="localhost";
$user="root";
$pass="";
$db="exam_db";
$con=mysql_connect("$server","$user","$pass") or die("Could not Connect My Sql");
mysql_select_db("$db",$con)  or die("Could not connect to Database");

if(!isset($_SESSION["sess_user"])){
	
	header("location:index.php");
}
else{
?>

<html>
	<head>
		<title>user home</title>
		<link href="index.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div class="main">
			<div class="header">
				<center><img src="imgs/header.jpg" width="960" height="70" /></center>
				<a href="user_home.php"> Home </a>
				<a href="signout.php"> Logout </a>
			</div>	
			
			<div class="user">
				<center><div class="home">
				<form action="user_home.php" method="post">
					<table>
					
						<h2>Wel come to Online Exam</h2>
						<tr>
							<td><a href="sublist.php"><font size=4>- Subject for Quiz</font></a><br></td>
						</tr>
						<tr>
							<td><a href="teacher_list.php"><font size=4>- Instructor details</font></a><br></td>
						</tr>
						
					</table>
				</form>	
				</div>	</center>
                	
				
			</div>
	</div>

</body>
</html>
<?php
}
?>