<?php
mysql_connect("localhost","root","");
mysql_select_db("quiz");
if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
{
extract($_POST);
mysql_query("insert into mst_test(sub_id,test_name,total_que) values ('$subid','$testname','$totque')",$cn) or die(mysql_error());
echo "<p align=center>Test <b>\"$testname\"</b> Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
alert("Please Enter Test Name");
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
alert("Please Enter Total Question");
document.form1.totque.value;
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
<tr><td colspan=2 style="text-align:center;color:red;padding-top:20px;font-size:35px;padding-left:300px"><form name="form1" method="post" onSubmit="return check();"><strong>ADD TEST<strong></td>
<td style="padding-top:0px;color:blue;text-align:right"><a href="adminpage2.html" style="color:blue">HOME</a> | <a href="logout.php">LOGOUT</a></td>
</tr>
<tr><td>Enter Subject Id</td>
<td><select name="subid">
<?php
$rs=mysql_query("Select * from mst_subject order by  sub_name");
	  while($row=mysql_fetch_array($rs))
	  {
if($row[0]==$subid)
{
echo "<option value='$row[1]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[1]'>$row[1]</option>";
}
}
?>
</select></td></tr>
</body>
</html>