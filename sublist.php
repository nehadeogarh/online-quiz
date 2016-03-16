<html>
<body>
<table width=100%>
<tr style="background-color:black;width:100%">
<td colspan=2 style="color:white;padding-left:100px;font-size:35px;width:2000px">ONLINE EXAMINATION SYSTEM</td>
<td><img src="images/topright.jpg" width=380 height=125></td>
</tr>
<tr><td style="color:red;font-size:30px;padding-left:530px;padding-top:25px">Select Subject To Give Quiz</td></tr>
<tr><td><br></td></tr>
</table>
<?php
mysql_connect("localhost","root","");
mysql_select_db("quiz");
$rs=mysql_query("select * from mst_subject");
echo "<table align=center>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";
?>
</body>
</html>