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
		<title>sub add</title>
		<link href="admin.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		
		
		<div class="main">
			<div class="header">
				<center><img src="img/header.jpg" width="960" height="70" /></center>
				<a href="admin_home.php"> Home </a>
				<a href="signout.php"> Logout </a>
			</div>
			
			
			<div class="admin">
				<h2>Add new Subject</h2>
				<center><form action="subadd.php" method="post">
				
					<table>
							
						<tr>
							<td>Enter Subject Name <input name="subname" placeholder="Enter Subject Name" type="text" required/> </td>
						</tr>	
						<tr>
							<td><input type="submit" name="submit" value="Add"/></td>
						</tr>	
					</table>	
				</form>	</center>
			</div>
			
		
		</div>
		

	</body>
</html>

<?php
	mysql_connect("localhost","root","") or die("Could not Connect My Sql");
	mysql_select_db("exam_db")  or die("Could not connect to Database");
	
	extract($_POST);
	if(isset($submit))
	{
		$result=mysql_query("INSERT INTO subject(sub_name) VALUES ('$subname')");
		if($result)
		{
			echo "<script type='text/javascript'>alert('Data has been saved');</script>";
			
		}
		else{
				echo "Some Problem";

		}

	}

?>

<?php
}
?>