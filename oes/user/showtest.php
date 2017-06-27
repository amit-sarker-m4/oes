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
		<title>show test</title>
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
				
					<form action="showtest.php" method="post">
						<table>
								<?php
									mysql_connect("localhost","root","") or die("Could not Connect My Sql");
									mysql_select_db("exam_db")  or die("Could not connect to Database");
									
									extract($_GET);
									$rs1=mysql_query("select * from subject where sub_id=$subid");
									$row1=mysql_fetch_array($rs1);
									echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";
									
								    echo "<h2><font size=5>Select Quiz Name to Give Quiz</font></h2>";
									echo "<h2><font size=4>- - - - - - - - - - - - - - - - - - - - - - - - - </font></h2>";
								   
								   
								   $rs=mysql_query("select * from test where sub_id=$subid");
								  
									if(mysql_num_rows($rs)<1)
									{
										echo "<br><br><h2 class=head1><font color=red> No Quiz for this Subject</font></h2>";
										exit;
									}
									
									
									echo "<table align=center>";

									
									while($row=mysql_fetch_array($rs) )
									{
										
										echo "<tr><td align=center ><a href=quiz.php?testid=$row[0]&subid=$row[1]><font size=4>$row[2]</font></a>";
										
										
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