<?php
mysql_connect("localhost","root","");
mysql_select_db("quiz");
$subid=$_POST['subid'];
extract($_POST);

echo "<table width=100%>";
echo "<tr><td align=center></table>";
if(isset($_POST['submit']))
{
extract($_POST);
$rs=mysql_query("select * from mst_subject where sub_id='$subid'");
while($row=mysql_fetch_array($rs))
{
mysql_query("delete from mst_subject where sub_id=$subid") or die(mysql_error());
echo "<p align=center>subject deleted Successfully.</p>";
unset($_POST);
}
}
?>
<form name="form1" method="post"">
<head>
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width=100%>
<tr style="background-color:black;width:100%">
<td colspan=2 style="color:white;padding-left:100px;font-size:35px;width:2000px">ONLINE EXAMINATION SYSTEM</td>
<td colspan=2><img src="images/topright.jpg" width=380 height=125></td>
</tr>
<tr><td colspan=2 style="padding-top:20px;color:blue;text-align:right;padding-left:600px"><a href="adminpage2.html" style="color:blue">HOME</a> | <a href="logout.php">LOGOUT</a></td>
</tr>
<tr><td style="padding-left:450px;padding-top:30px;color:blue;font-size:20px">Enter Test Name</td>
<td style="margin-left:-200px;padding-top:30px"><select name="subid" id="subid">
<?php
$rs=mysql_query("Select * from mst_subject order by sub_name");
	  while($row=mysql_fetch_array($rs))
{
if($row[0]==$subid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?></select>
</td></tr>
<tr>
      <td colspan=2 style="padding-left:600px;padding-top:30px"><input type="submit" name="submit" value="DELETE" ></td>
    </tr>

</table>
</body>
</form>
