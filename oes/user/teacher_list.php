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
				<form action="teacher_list.php" method="post">
					
					
						<?php
						
							mysql_connect("localhost","root","") or die("Could not Connect My Sql");
							mysql_select_db("exam_db")  or die("Could not connect to Database");
							
							$rs=mysql_query("select * from teacher");
							extract($_GET);
							
							echo "<table cellpadding=5 cellspacing=0 border=1>";
							echo "<tr><th>Name		</th><th>Department		</th><th>Contact		</th></tr>";
							
							while($row = mysql_fetch_array($rs)) {
								echo "<tr><td>";
								echo $row['t_name'];
								echo "</td><td>";
								echo $row['t_department'];
								echo "</td><td>";
								echo $row['contact'];
								echo "</td></tr>";
							}
							
							
							
							
							
							echo "</table>";
						
						?>
						
						
						
						
						
						
						
					
				</form>	
				</div>	</center>
                	
				
			</div>
	</div>

</body>
</html>

<?php
}
?>