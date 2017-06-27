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
		<title>question add</title>
		<link href="admin.css" rel="stylesheet" type="text/css">
	</head>
		<body>
		
		
		<div class="main">
			<div class="header">
				<center><img src="img/header.jpg" width="960" height="70" /></center>
				<a href="admin_home.php" > Home </a>
				<a href="signout.php"> Logout </a>
			
			</div>
			
			<div style="margin:auto;width:90%;height:500px;text-align:center">
				<h3>Add Question</h3>
				<form name="form1" method="post" >
					<table width="80%"  border="1" align="center">
					<tr>
						<td width="24%" height="32"><strong>Select Test Name </strong></td>
						<td width="1%" height="5">  
						<td width="75%" height="32">

						<select name="testid">
						
								<?php
									mysql_connect("localhost","root","") or die("Could not Connect My Sql");
									mysql_select_db("exam_db")  or die("Could not connect to Database");
									
									$rs=mysql_query("Select * from test order by  test_name");
									while($row=mysql_fetch_array($rs))
									{
									    $v= $row["test_id"];
										$n= $row["test_name"];
										echo "<option value='$v'>$n</option>";
									
											
										
									}
								?>
						
						
						</select>
        
						<tr>
							<td height="26"><strong> Enter Question </strong></td>
							<td>&nbsp;</td>
							<td><textarea name="addque" cols="60" rows="2" id="addque" required></textarea></td>
						</tr>
						<tr>
							<td height="26"><strong>Enter Answer1 </strong></td>
							<td>&nbsp;</td>
							<td><input name="ans1" type="text" id="ans1" size="85" maxlength="85"required/></td>
						</tr>
						<tr>
							<td height="26"><strong>Enter Answer2 </strong></td>
							<td>&nbsp;</td>
							<td><input name="ans2" type="text" id="ans2" size="85" maxlength="85"required/></td>
						</tr>
						<tr>
							<td height="26"><strong>Enter Answer3 </strong></td>
							<td>&nbsp;</td>
							<td><input name="ans3" type="text" id="ans3" size="85" maxlength="85"required/></td>
						</tr>
						<tr>
							<td height="26"><strong>Enter Answer4</strong></td>
							<td>&nbsp;</td>
							<td><input name="ans4" type="text" id="ans4" size="85" maxlength="85"required/></td>
						</tr>
						<tr>
							<td height="26"><strong>Enter True Answer </strong></td>
							<td>&nbsp;</td>
							<td><input name="anstrue" type="text" id="anstrue" size="50" maxlength="50"required/></td>
						</tr>
						<tr>
							<td height="26"></td>
							<td>&nbsp;</td>
							<td><input type="submit" name="submit" value="Add"/></td>
						</tr>
					</table>
				</form>
					
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
		$result=mysql_query("INSERT INTO question(test_id,ques_desc,ans1,ans2,ans3,ans4,true_ans) VALUES ('$testid', '$addque','$ans1','$ans2','$ans3','$ans4','$anstrue')");
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
