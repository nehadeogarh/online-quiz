<?php
extract($_POST);
mysql_connect("localhost","root","");
mysql_select_db("quiz");
if(isset($_POST['submit']))
{
$query="insert into mst_user(user_id,login,pass,username,address,city,phone,email) values('$uid','$lid','$pass','$name','$address','$city','$phone','$email')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
echo "Your Login ID  $lid Created Sucessfully";
unset($_POST);
}
?>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  </script>
<form name="form1" method="post" onSubmit="return check();">
<head>
<link href="quiz.css" rel="stylesheet" type="text/css">
<title>USER SIGNUP</title>
</head>
<body>
<table width=100%>
<tr style="background-color:black;width:100%">
<td colspan=2 style="color:white;padding-left:100px;font-size:35px;width:2000px">ONLINE EXAMINATION SYSTEM</td>
<td colspan=2><img src="images/topright.jpg" width=380 height=125></td>
</tr>
<tr><td colspan=2 style="color:red;text-align:center;font-size:30px;padding-left:400px">NEW USER SIGNUP</td></tr>
         <tr>
           <td class="style7">Login Id </td>
           <td><input type="text" name="lid"></td>
         </tr>
         <tr>
           <td class="style7">Password</td>
           <td><input type="password" name="pass"></td>
         </tr>
         <tr>
           <td class="style7">Confirm Password </td>
           <td><input name="cpass" type="password" id="cpass"></td>
         </tr>
         <tr>
           <td class="style7">Name</td>
           <td><input name="name" type="text" id="name"></td>
         </tr>
         <tr>
           <td class="style7">Address</td>
           <td><textarea name="address" id="address"></textarea></td>
         </tr>
         <tr>
           <td class="style7">City</td>
           <td><input name="city" type="text" id="city"></td>
         </tr>
         <tr>
           <td class="style7">Phone</td>
           <td><input name="phone" type="text" id="phone"></td>
         </tr>
         <tr>
           <td class="style7">E-mail</td>
           <td><input name="email" type="text" id="email"></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td><input type="submit" name="submit" value="Signup">
           </td>
         </tr>
       </table>
	   </body>
     </form>

