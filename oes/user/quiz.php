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
		<title>quiz</title>
		<link href="index.css" rel="stylesheet" type="text/css">
		
		<head runat="server">
    <title></title>
    <script language ="javascript" >
        var tim;
       
        var min = 0;
        var sec = 10;
        var f = new Date();
        function f1() {
            f2();
            document.getElementById("starttime").innerHTML = "Started Exam at : " + f.getHours() + ":" + f.getMinutes();
             
          
        }
        function f2() {
            if (parseInt(sec) > 0) {
                sec = parseInt(sec) - 1;
                document.getElementById("showtime").innerHTML = "Time  Left : "+min+" Minutes ," + sec+" Seconds";
                tim = setTimeout("f2()", 1000);
            }
            else {
                if (parseInt(sec) == 0) {
                    min = parseInt(min) - 0;
                    if (parseInt(min) == 0) {
                        clearTimeout(tim);
                        window.confirm("times up");
						
					window.location.href = "result.php";	 
                    }
                    else {
                        sec = 60;
                        document.getElementById("showtime").innerHTML = "Time Left : " + min + " Minutes ," + sec + " Seconds";
                        tim = setTimeout("f2()", 1000);
                    }
                }
               
            }
        }
    </script>
		
	</head>
<body onload="f1()" >
    

	<div class="main">
		<div class="header">
			<center><img src="imgs/header.jpg" width="960" height="70" /></center>
			<a href="user_home.php"> Home </a>
			<a href="signout.php"> Logout </a>
		</div>	
		
		
		<form id="form1" runat="server">
			<div class="time" style="float:right;">
				<table width="100%" align="center">
					<tr>
						<td colspan="2">
							<h2></h2>
						</td>
					</tr>
					<tr>
						<td>
							<div id="starttime"></div>
 
							<div id="endtime"></div>
 
							<div id="showtime"></div>
						</td>
					</tr>
        
				</table>
			</div>
		</form>
		
		
	
		
		
		
		
		
		<center><div class="home">
			
		<?php
			mysql_connect("localhost","root","") or die("Could not Connect My Sql");
			mysql_select_db("exam_db")  or die("Could not connect to Database");


			$query="select * from question";

			$rs=mysql_query("select * from question where test_id=$tid");
		
				
				if($submit=='Next Question' && isset($ans))
				{
					mysql_data_seek($rs,$_SESSION[qn]);
					$row= mysql_fetch_row($rs);	
					mysql_query("insert into useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')");
					if($ans==$row[7])
					{
						$_SESSION[trueans]=$_SESSION[trueans]+1;
					}
					$_SESSION[qn]=$_SESSION[qn]+1;
				}
				else if($submit=='Get Result' && isset($ans))
				{
					mysql_data_seek($rs,$_SESSION[qn]);
					$row= mysql_fetch_row($rs);	
					mysql_query("insert into useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')");
					if($ans==$row[7])
					{
						$_SESSION[trueans]=$_SESSION[trueans]+1;
					}
					
					
					echo'<script type="text/javascript"> window.location.href = "finalresult.php";  </script>';
					
					/*echo "<h1 class=head1 style= color:blue> Result</h1>";
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
					exit; */
				}
			
			$rs=mysql_query("select * from question where test_id=$tid");

			mysql_data_seek($rs,$_SESSION[qn]);
			$row= mysql_fetch_row($rs);
			echo "<form name=myfm method=post action=quiz.php>";
			echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
			$n=$_SESSION[qn]+1;
			echo "<tR><td><span class=style2>Que ".  $n .": $row[2]</style>";
			echo "<tr><td class=style8><input type=radio name=ans value=1>$row[3]";
			echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[4]";
			echo "<tr><td class=style8><input type=radio name=ans value=3>$row[5]";
			echo "<tr><td class=style8><input type=radio name=ans value=4>$row[6]";

			if($_SESSION[qn]<mysql_num_rows($rs)-1)
			echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
			else
			echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
			echo "</table></table>";
		?>



		</div>	</center>	
	</div>
		
</body>
</html>
<?php
}
?>


