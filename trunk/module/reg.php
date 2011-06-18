<H4>Registration</h4>
<p><a href="index.php?id=changepassword ">Change Password</a></p>
<br><BR><ul>
<LI> Account and password can not be empty .<BR>
<LI> Account and password can not be less than 4 and Over 15 characters .<BR>
<LI>Account and password are written in English letters and numerals .<BR><BR><BR>
</ul>

<script type="text/javascript">//<![CDATA[
function isAlphaNumeric(value)
{
  if (value.match(/^[a-zA-Z0-9]+$/))
    return true;
  else
    return false;
}
function checkform(f)
{
  if (f.account.value=="")
  {
    alert("Fill in all fields Please");
    return false;
  }
  if (!isAlphaNumeric(f.account.value))
  {
    alert("Fill in all fields");
    return false;
  }
  if (f.password.value=="")
  {
    alert("No password ");
    return false;
  }
  if (!isAlphaNumeric(f.password.value))
  {
    alert("444444");
    return false;
  }
  if (f.password2.value=="")
  {
    alert("You didnt repeat a password");
    return false;
  }
  if (f.password.value!=f.password2.value)
  {
    alert("Not the same password ");
    return false; 
  }
  return true;
}
//]]></script>
<form method="post" action="index.php?id=reg" onsubmit="return checkform(this)">
<table>
 <tr>
  <td>Login</td>
  <td><input type="text" name="account" maxlength="15" /></td>
 </tr>
 <tr>
  <td>Password</td>
  <td><input type="password" name="password" maxlength="15" /></td>
 </tr>
 <tr>
  <td>Repeat Password</td>
  <td><input type="password" name="password2" maxlength="15" /></td>
 </tr>
 <tr>
  <td colspan="2" style="text-align: center;"><br />
  <input type="submit" name="submit" value="Register" /></td>
 </tr>
</table>
</form>

<?php
if(ereg("^([a-zA-Z0-9_-])*$", $_POST['account']) && ereg("^([a-zA-Z0-9_-])*$", $_POST['password']) && ereg("^([a-zA-Z0-9_-])*$", $_POST['password2']))
{
	if ($page="index.php" && $_POST['account'] && strlen($_POST['account'])<16 && strlen($_POST['account'])>3 && $_POST['password'] && $_POST['password2'] && $_POST['password']==$_POST['password2'])
	{	
		$check=mysql_query("select * from accounts where login='".$_POST['account']."'");
		$check1=mysql_num_rows($check);
		if($check1>0)
		{
			echo "<p clss='error'><b>Failed to register : an account already excist .</b></p>";
		}
		else
		{
	  		mysql_query("INSERT INTO accounts (login, password) VALUES ('".$_POST['account']."', '".base64_encode(pack('H*', sha1($_POST['password'])))."')", $link);
  			mysql_close($link);
	 		print '<p class="error"><b>Registration over successful </b></p>';
		}
	}
	else
	{
  	print '<p class="error"><b> </b></p>'.mysql_error();
	}
}
else
{
	echo "Restrictions have not been tested for safety. Please try to sign up with another username and password.";
}
?>
<br><br><br><br><br><br>
           
            
 