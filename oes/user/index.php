<!DOCTYPE html>
<html lang="en">


	<head>
		<title>online exam</title>
		<link href="index.css" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
		<body>
		
		
		<div class="main">
			<div class="header">
				<center><img src="imgs/header.jpg" width="960" height="70" /></center>
				
			</div>
			<div class="about">
				<center><h2><strong>Wel come to Online Quiz</strong></h2></center>
				<br />
				<p class="pr" style="color: blue">Wel Come to Online exam. This Site will provide the quiz for various subject of interest. You need to Signup first for the take the online exam.If you are first for this site then you need to Registration first.</p>
			</div>
			
			<div class="log">
			<form action="index.php" method="post">
				<table>
					<h2>User Login</h2>
					<tr>
						
						<td><input name="loginid" placeholder="User Name" type="text"> </input></td>
					</tr>	
					<tr>	
						
						<td><input name="pass" placeholder="Password" type="password"</input></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" style="margin-left:60px" value="Log In"/></td>
					</tr>
					
				</table>
					<p class="para" style="color:#AB0404;">New User ?<a href="registration.php"> Registration here</a></p>
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
	$rs=mysql_query("select * from user where loginid='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)>0)
	{
		$uname="user";
		session_start();
		$_SESSION['sess_user']=$uname;
		header('location:user_home.php');
	}
}
?>


