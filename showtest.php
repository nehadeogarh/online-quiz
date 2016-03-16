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
extract($_GET);
$rs1=mysql_query("select * from mst_subject where sub_id=$subid");
$row1=mysql_fetch_array($rs1);
echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";
$rs=mysql_query("select * from mst_test where sub_id=$subid");
if(mysql_num_rows($rs)<1)
{

	echo "<br><br><h2 class=head1> No Quiz for this Subject </h2>";
	exit;
}
echo "<h2 class=head1 align=center> Select Quiz Name to Give Quiz </h2>";
echo "<table align=center>";

while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a>";
}
echo "</table>";
?>
</body>
</html>

