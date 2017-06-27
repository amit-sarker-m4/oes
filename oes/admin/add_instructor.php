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
			<h3 class="hed" style="color:green">Add Instructor</h3>
				
			<center><form action="add_instructor.php" method="post">
				<table>
					<tr>
						<td>Name:	<br />	
						<input type="text" class="n" style="color:blue;" name="name" required/></td>
					</tr>
					<tr>
						<td>Department: <br />
						<input type="text" class="d" style="color:blue;" name="department" required/></td>
					</tr>
					<tr>
						<td>Contact: 	<br />
						<input type="text" class="c" style="color:blue;" name="contact" required/></td>
					</tr>
					<tr>
							<td><input type="submit" name="submit" value="Add"/></td>
					</tr>
				</table>					
			</form></center>
				
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
		$result=mysql_query("INSERT INTO teacher(t_name,t_department,contact) VALUES('$name', '$department', '$contact')");
		
		if($result)
		{
			echo "<script type='text/javascript'>alert('Data has been saved');</script>";
			
		}
		else
		{
				echo "Some Problem";

		}

	}


?>
<?php
}
?>