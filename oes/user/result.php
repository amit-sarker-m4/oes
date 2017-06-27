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
header("location:quiz.php");
}

?>

<html>
	<head>
		
		
	</head>
<body>
	<div class="main">
		
				<?php
			mysql_connect("localhost","root","") or die("Could not Connect My Sql");
			mysql_select_db("exam_db")  or die("Could not connect to Database");


			$query="select * from question";

			$rs=mysql_query("select * from question where test_id=$tid");
			
								mysql_data_seek($rs,$_SESSION[qn]);
					$row= mysql_fetch_row($rs);	
					mysql_query("insert into useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,0,0,0,0,0,0,0)");
					$_SESSION[qn]=$_SESSION[qn]+1;
		
				?>
				
				<script type="text/javascript">
					window.location.href = "quiz.php";
				</script>
			
	</div>

</body>
</html>

<?php
}
?>