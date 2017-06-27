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
		<title>subject list</title>
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
					<form action="sublist.php" method="post">
						<table>
							
								<?php
									mysql_connect("localhost","root","") or die("Could not Connect My Sql");
									mysql_select_db("exam_db")  or die("Could not connect to Database");
								   echo "<h2>Select Subject to Give Quiz</h2>";
								   $result=mysql_query("select * from subject order by sub_name");
								   while($row=mysql_fetch_row($result))
								   {
									 
									   echo "<tr><td align=center ><font size=4><a href=showtest.php?subid=$row[0] >$row[1]	</a></font></td></tr>";
								   }
								
								
								?>
								
						</table>
					</form>
				</div>	</center>
                	
				
			</div>
	</div>

</body>
</html>

<?php
}
?>