<?php
session_start();
extract($_POST);
extract($_SESSION);
mysql_connect("localhost","root","");
mysql_select_db("quiz");
if($submit=='Finish')
{
	mysql_query("delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
	unset($_SESSION['qn']);
	header("Location: index.html");
	exit;
}
?>
<html>
<head>
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width=100%>
<tr style="background-color:black;width:100%">
<td colspan=2 style="color:white;padding-left:100px;font-size:35px;width:2000px">ONLINE EXAMINATION SYSTEM</td>
<td><img src="images/topright.jpg" width=380 height=125></td>
</tr>
</table>
<?php

mysql_connect("localhost","root","");
mysql_select_db("quiz");
echo "<h1 class=head1> Review Test Question</h1>";

if(!isset($_SESSION['qn']))
{
		$_SESSION['qn']=0;
}
else if($submit=='Next Question' )
{
	$_SESSION['qn']=$_SESSION['qn']+1;
	
}

$rs=mysql_query("select * from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
mysql_data_seek($rs,$_SESSION['qn']);
$row= mysql_fetch_row($rs);
echo "<form name=myfm method=post action=review.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION['qn']+1;
echo "<tr><td><span class=style2>Que ".  $n .": $row[2]</style>";
echo "<tr><td class=".($row[7]==1?'tans':'style8').">$row[3]";
echo "<tr><td class=".($row[7]==2?'tans':'style8').">$row[4]";
echo "<tr><td class=".($row[7]==3?'tans':'style8').">$row[5]";
echo "<tr><td class=".($row[7]==4?'tans':'style8').">$row[6]";
if($_SESSION['qn']<mysql_num_rows($rs)-1)
echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
else
echo "<tr><td><input type=submit name=submit value='Finish'></form>";

echo "</table></table>";
?>
</body>
</html>
