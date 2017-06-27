<html>
	<head>
		<title>admin arena</title>
		<link href="admin.css" rel="stylesheet" type="text/css">
	</head>
		<body>
		
		
		<div class="main">
			<div class="header">
				<center><img src="img/header.jpg" width="960" height="70" /></center>
				
			</div>
			
			<div class="image">
				<img src="img/loginadmin.jpg" width="70" height="70" />
			
			</div>
			<br />
			<br />
			<br />
			<br />
			<h2>Adminstrative Login</h2>
			<div class="admin" >
				
				<form action="admin.php" method="post">
					<table>
					
						
						<tr>				
							<td> <input name="loginid" placeholder="User Name" type="text" required/> </td>
						</tr>	
						
						<tr>
							<td> <input name="pass" placeholder="Password" type="password" required/></td>
						</tr>	
						
						<tr>
							<td><input type="submit" name="submit" style="margin-left:60px" value="Log In"/></td>
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
	$rs=mysql_query("select * from admin where loginid='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)>0)
	{
		$uname="admin";
		session_start();
		$_SESSION['sess_user']=$uname;
		header('location:admin_home.php');
	}	
	
}



?>












