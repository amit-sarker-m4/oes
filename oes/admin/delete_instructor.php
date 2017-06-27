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
			<h3 class="hed" style="color:green">Manage Instructor</h3>
				
			<center><form action="delete_instructor.php" method="post">
				
				
                        <?php 
							mysql_connect("localhost","root","") or die("Could not Connect My Sql");
							mysql_select_db("exam_db")  or die("Could not connect to Database");

	                        $x=$_REQUEST["t_id"];
							
							mysql_query("DELETE FROM teacher WHERE t_id=$x");


							$message = '<div class="alert alert-success  fade in" role="alert">
							
							<strong>Yes!</strong> You are successfull to delete.
							 </div>';
							 
							echo"$message";

							
						?>
						

               

			</form></center>
				
        </div>
	</div>
	
</body>
</html>


<?php
}
?>