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
		<title>registration here</title>
		<link href="index.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div class="main">
			<div class="header">
				<center><img src="img/header.jpg" width="960" height="70" /></center>
				<a href="admin_home.php"> Home </a>
				<a href="admin.php"> Logout </a>
			</div>	
			
			<div class="user">
				<center><div class="home">
				    <h2>Here is the result</h2>
					
					
					
				</div>	</center>
                	
				
			</div>
	</div>

</body>
</html>
<?php
}
?>