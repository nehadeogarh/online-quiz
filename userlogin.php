<?php
mysql_connect("localhost","root","");
mysql_select_db("quiz");
$name=$_POST['un1'];
$pass=$_POST['pw1'];
$data=mysql_query("select * from mst_user where login='$name'");
if(!$data)
{
die("data not selected".mysql_error());
}else
{
while($row=mysql_fetch_array($data))
{
if(($name==$row['login']) && ($pass==$row['pass']))
{
header("location:page1.html");

}
else
{
die("wrong entry".mysql_error());
}
}
}
exit();
?>