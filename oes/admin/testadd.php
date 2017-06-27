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
		<title>test add</title>
		<link href="admin.css" rel="stylesheet" type="text/css">
	</head>
		<body>
		
		
		<div class="main">
			<div class="header">
				<center><img src="img/header.jpg" width="960" height="70" /></center>
				<a href="admin_home.php" > Home </a>
				<a href="signout.php"> Logout </a>
			</div>
			
			
			<div class="admin">
				<h2>Add Test</h2>
				<center><form action="testadd.php" method="post">
				
					<table>
						
						<tr>	
							<td><strong>Enter Subject ID	</strong> 
							<select name="subid">
							
								<?php
									mysql_connect("localhost","root","") or die("Could not Connect My Sql");
									mysql_select_db("exam_db")  or die("Could not connect to Database");
									
									$rs=mysql_query("Select * from subject order by  sub_name");
									while($row=mysql_fetch_array($rs))
									{
										/*  $v= $row["sub_id"];
										$n= $row["sub_name"];
										echo "<option value='$v'>$n</option>";
										*/
											echo "<option value='$row[0]'>$row[1]</option>";
										
									}
								?>
							</select></td>
						</tr>
						
						<tr>
							<td><strong>Enter Test Name 	</strong><input name="testname" placeholder="Enter Test Name" type="text"required/> </td>
						</tr>
						
						<tr>
							<td><strong>Enter Total Question 	</strong><input name="totalquestion" placeholder="Enter Total Question" type="text"required/></td>
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
		$result=mysql_query("INSERT INTO test(sub_id,test_name,total_ques) VALUES ('$subid', '$testname','$totalquestion')");
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
