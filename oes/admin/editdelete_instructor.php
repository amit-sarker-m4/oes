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
				
			<center><form action="editdelete_instructor.php" method="post">
				
				<table cellpadding="10" cellspacing="0" border="1">
                <tr>
                  <th><center>ID</center></th>
                  <th><center>Name</center></th>
                  <th><center>Department</center></th>
                  <th><center>contact</center></th>
                  <th><center>Action</center></th>
				</tr>
                        <?php 
							mysql_connect("localhost","root","") or die("Could not Connect My Sql");
							mysql_select_db("exam_db")  or die("Could not connect to Database");

							$query = mysql_query("SELECT * FROM teacher");

								
							while($row = mysql_fetch_array($query)) 
							{ 
								echo "<tr>";
							
								echo "<td><center>" . $row['t_id'] . "</td>"; 
								echo "<td><center>" . $row['t_name'] . "</td>"; 
								echo "<td><center>" . $row['t_department'] . "</td>"; 
								echo "<td><center>" . $row['contact'] . "</td>"; 
								 
								echo "<td><center><button ><a href='edit_instructor.php?t_id=$row[t_id]'>Edit </a>".
								"<button ><a onclick='return confirm_alert(this);' href='delete_instructor.php?t_id=$row[t_id]'>Delete </a></td>";
								echo "</tr>"; 
							}
						?>

                </table>

			</form></center>
				
        </div>
	</div>
	
</body>
</html>

<script>
//alert on delete
function confirm_alert(node) {
    return confirm("You are going to delete this Instructor. Click OK to continue or CANCEL to quit.");
}
</script>
<?php
}
?>