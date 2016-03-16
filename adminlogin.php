<?php
mysql_connect("localhost","root","");
mysql_select_db("quiz");
$name1=$_POST['un'];
$pass1=$_POST['pw'];
$data=mysql_query("select * from mst_admin where loginid='$name1' and pass='$pass1'");
if(!$data)
{
die("data not selected".mysql_error());
}else
{
while($row=mysql_fetch_array($data))
{
if(($name1==$row['loginid']) && ($pass1==$row['pass']))
{
header("location:adminpage2.html");
}
else
{
die("wrong entry".mysql_error());
}
}
}
exit();
?>