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
<?php

error_reporting(1);

extract($_POST);
extract($_GET);
extract($_SESSION);
/*$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($rs))
{
unset($_SESSION[qn]);
exit;
}*/
if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
}

?>

<html>
	<head>
		
		
	</head>
<body>
	<div class="main">
		<div class="header">
				<center><img src="imgs/header.jpg" width="960" height="70" /></center>
				
			</div>
		
				<?php
			mysql_connect("localhost","root","") or die("Could not Connect My Sql");
			mysql_select_db("exam_db")  or die("Could not connect to Database");


			$query="select * from question";

			$rs=mysql_query("select * from question where test_id=$tid");
			
				echo "<center><h1 class=head1 style= color:blue > Result</h1></center>";
				echo "<h3 class=head1 style= color:red><a href='sublist.php'>Want to Give Another Subject Test !!!</a></h3>";
					$_SESSION[qn]=$_SESSION[qn]+1;
					
					
					echo "<Table align=center><tr class=tot style= color:#008000><td>Total Question<td>" .$_SESSION[qn];
					echo "<tr class=tans style= color:#0000A0><td>True Answer<td>".$_SESSION[trueans];
					$w=$_SESSION[qn]-$_SESSION[trueans];
					echo "<tr class=fans style= color:#FF0000><td>Wrong Answer<td> ". $w;
					echo "</table>";
					
					
					
					mysql_query("insert into result(loginid,test_id,test_date,score) values('$loginid',$tid,'".date("d/m/Y")."',$_SESSION[trueans])");
					
					unset($_SESSION[qn]);
					unset($_SESSION[sid]);
					unset($_SESSION[tid]);
					unset($_SESSION[trueans]);
					exit;		
		
				?>
				
			
				
	</div>
	
	

</body>
</html>
<?php
}
?>