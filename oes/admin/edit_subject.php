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
			<h3 class="hed" style="color:green">Manage Subject</h3>
				
			
				
				
               
                        <?php 
							mysql_connect("localhost","root","") or die("Could not Connect My Sql");
							mysql_select_db("exam_db")  or die("Could not connect to Database");
							
							

							 
				 if(isset($_POST['update'])) {
					
					
					
					
					$sub_id = $_POST['sub_id'];
					$sub_name = $_POST['sub_name'];
					
					
					$result= mysql_query("UPDATE subject SET sub_name='$sub_name' WHERE sub_id= '$sub_id' ")or die("UPDATE could not successfully");
					
					
					mysql_select_db('exam_db');
					
					
					if($result)
					{
					   echo "Yes! Updated data successfully\n ";
					}
					
						
					
					
				 }
				 
				 else {
            ?>
							
							
			<center><form method="post" action="edit_subject.php">
				<table>
					<tr>
						<th><br> <input type="text" name="sub_id" id="sub_id" value="<?php echo $_GET['sub_id'];?>" hidden/></th>
					</tr>
					<tr>
						<th>Name: <br> <input type="text" name="sub_name" id="sub_name" required/></th>
					</tr>
					
					<tr>
						<th><input type= "submit" name = "update" value="update" id = "update"/></th>
					</tr>
				</table>			
							
			</form></center>
		<?php
			}
		?>					
							
		 </div>
	</div>
	
</body>
</html>
<?php
}

?>
