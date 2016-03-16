<?php
mysql_connect("localhost","root","");
mysql_select_db("quiz");

extract($_POST);

echo "<table width=100%>";
echo "<tr><td align=center></table>";
if(isset($_POST['submit']))
{
if($_POST['submit']=='Save' || strlen($_POST['testid'])>0 )
{
extract($_POST);
mysql_query("insert into mst_question(test_id,que_desc,ans1,ans2,ans3,ans4,true_ans) values ('$testid','$addque','$ans1','$ans2','$ans3','$ans4','$anstrue')") or die(mysql_error());
echo "<p align=center>Question Added Successfully.</p>";
unset($_POST);
}
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.addque.value;
if (mt.length<1) {
alert("Please Enter Question");
document.form1.addque.focus();
return false;
}
a1=document.form1.ans1.value;
if(a1.length<1) {
alert("Please Enter Answer1");
document.form1.ans1.focus();
return false;
}
a2=document.form1.ans2.value;
if(a1.length<1) {
alert("Please Enter Answer2");
document.form1.ans2.focus();
return false;
}
a3=document.form1.ans3.value;
if(a3.length<1) {
alert("Please Enter Answer3");
document.form1.ans3.focus();
return false;
}
a4=document.form1.ans4.value;
if(a4.length<1) {
alert("Please Enter Answer4");
document.form1.ans4.focus();
return false;
}
at=document.form1.anstrue.value;
if(at.length<1) {
alert("Please Enter True Answer");
document.form1.anstrue.focus();
return false;
}
return true;
}
</script>
<form name="form1" method="post" onSubmit="return check();">
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
<tr><td>Enter Test Name</td>
<td><select name="testid" id="testid">
<?php
$rs=mysql_query("Select * from mst_test order by test_name");
	  while($row=mysql_fetch_array($rs))
{
if($row[0]==$testid)
{
echo "<option value='$row[0]' selected>$row[2]</option>";
}
else
{
echo "<option value='$row[0]'>$row[2]</option>";
}
}
?></select>
</td></tr>
<tr><td>Enter Question</td>
<td><textarea name="addque" cols="60" rows="2" id="addque"></textarea></td></tr>
<tr><td>Enter Answer1</td>
<td><input name="ans1" type="text" id="ans1" size="85" maxlength="85"></td></tr>
<tr><td>Enter Answer2</td>
<td><input name="ans2" type="text" id="ans2" size="85" maxlength="85"></td></tr>
<tr><td>Enter Answer3</td>
<td><input name="ans3" type="text" id="ans3" size="85" maxlength="85"></td></tr>
<tr><td>Enter Answer4</td>
<td><input name="ans4" type="text" id="ans4" size="85" maxlength="85"></td></tr>
<tr><td>Enter True Answer</td>
<td><input name="anstrue" type="text" id="anstrue" size="85" maxlength="85"></td></tr>
<tr>
      <td><input type="submit" name="submit" value="Add" ></td>
    </tr>
  


</table>
</body>
</form>


