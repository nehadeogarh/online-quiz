<?php
mysql_connect("localhost","root","");
mysql_select_db("quiz");

extract($_POST);

echo "<table width=100%>";
echo "<tr><td align=center></table>";
if(isset($_POST['submit']))
{
if($submit=='submit' || strlen($subname)>0 )
{
$rs=mysql_query("select * from mst_subject where sub_name='$subname'");
if (mysql_num_rows($rs)>0)
{
	echo "Subject is Already Exists";
	exit;
}
mysql_query("insert into mst_subject(sub_name) values ('$subname')") or die(mysql_error());
echo "<p align=center>Subject  <b> \"$subname \"</b> Added Successfully.</p>";
$submit="";
}
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter Subject Name");
document.form1.subname.focus();
return false;
}
return true;
}
</script>

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
<tr><td colspan=2 style="text-align:center;color:red;padding-top:20px;font-size:35px;padding-left:300px"><form name="form1" method="post" onSubmit="return check();"><strong>ADD SUBJECT<strong></td>
<td style="padding-top:0px;color:blue;text-align:right"><a href="adminpage2.html" style="color:blue">HOME</a> | <a href="logout.php">LOGOUT</a></td>
</tr>

    <tr>
      <td width=50% style="padding-left:400px;padding-top:20px"><strong>Enter Subject Name </strong></td>
       <td width=50%> <input name="subname" type="text" id="subname"></td>
	   </tr>
    <tr>
      <td style="text-align:center;padding-left:600px;padding-top:20px"><input type="submit" name="submit" value="Add" ></td>
    </tr>
	</form>
  </table>
</body>
</html>
