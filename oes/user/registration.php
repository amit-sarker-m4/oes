<html>
	<head>
		<title>registration here</title>
		<link href="index.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div class="main">
			<div class="header">
				<center><img src="imgs/header.jpg" width="960" height="70" /></center>
				
			</div>	
			
			<div class="user">
				<div class="image" style="margin-left:180px">
					<center><img src="imgs/user.jpg" width="100" height="90" /></center>
				</div>	
                <div class="reg" style="margin-right:200px">	
					<form action="registration.php" method="post">
					
						<table>
							<h2>New User Registration</h2>
							<tr>
								<td>User ID </td>
								<td>	<input name="loginid" type="text"> </input></td>
							</tr>
							<tr>
								<td>Password </td>
								<td>	<input name="pass" type="password"</input></td>
							</tr>	
						
							<tr>
								<td>Confirm Password </td>
								<td><input name="cpass" type="password"</input></td>
							<tr>
							
							<tr>
								<td>Name </td>
								<td><input name="name" type="text"</input></td>
							</tr>
							
							<tr>
								<td>Address </td>
								<td><textarea name="address" id="address"></textarea></td>
							</tr>
							
							<tr>
								<td>City </td>
								<td><input name="city" type="text"</input></td>
							</tr>
							
							<tr>
								<td>Phone </td>
								<td><input name="phone" type="text"</input></td>
							</tr>
							
							<tr>
								<td>E-mail </td>
								<td><input name="email" type="text"</input></td>
							</tr>
							
							<tr>
								<td><input type="submit" name="submit"  value="Registration"/></td>
							</tr>
						</table>
					</form>	
						
				</div>	
				
			</div>
	</div>

</body>
</html>
<?php
	mysql_connect("localhost","root","") or die("Could not Connect My Sql");
    mysql_select_db("exam_db")  or die("Could not connect to Database");
	$tbl_name="user";
	
	extract($_POST);
	if(isset($submit))
	{
		$result=mysql_query("INSERT INTO $tbl_name VALUES ('$loginid','$pass','$cpass','$name','$address','$city','$phone','$email')");
		if($result)
		{
			echo "Successfully data has inserted";
			header('location:registration_completed.php');
		}
		
			
	}
?>