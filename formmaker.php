<? php include('formserver.php')?>
<html>
<head>
<style>
input
{
margin-bottom:10px;
border-radius:5px;
border-color:red;
}
table{
margin:100px auto;
}
td{
margin:0 auto;
}
.error{
	width:92%;
	margin: 0px auto;
	padding: 10px;
	border: 1px solid #a94442;
	color: #a94442;
	background:#f2dede;
	border-radius: 5px;
	text-align:left;
}
</style>
<title>Student Registration</title>
<body>
<h1 align="center">Form making form</h1>
<form action="formmaker.php" method="post">
<table>
<tr>
	<!--Display validation error-->
	<td colspan=2><?php include('servererrors.php');?></td>
</tr>
<tr>
<td><label for="firstname">Form Name</label></td>
<td><input type='text' name='formname' value='<?php echo $formname;?>'></td>
</tr>
<tr>
<td><label for="lastname">Layout</label></td>
<td><select name='layout'>
	<option value="select" selected>Select</option>
	<option value='wide'>Wide</option>
	<option value='compact'>Compact</option>
	<option value="spacious">Spacious</option>
</select></td>
</tr>
<tr>
<td><label for="email">Font Size</label></td>
<td><select name='fontsize'>
	<option value="select" selected>Select</option>
	<option value='10'>10</option>
	<option value='12'>12</option>
	<option value="14">14</option>
	<option value="14">14</option>
</select></td>
</tr>
<tr>
<td><label for="username">Username</label></td>
<td><input type='text' name='username'value='<?php echo $username;?>'></td>
</tr>
<tr>
<td><label for="password1">Password</label></td>
<td><input type='password' name='password1'></td>
</tr>
<tr>
<td><label for="password2">Confirm Password</label></td>
<td><input type='password' name='password2'></td>
</tr>
<tr>
<td><label>Select Course</label></td>
<td><input type='checkbox' name='course[]' value='B.Tech'>B.Tech.
<input type='checkbox' name='course[]' value='M.Tech'>M.Tech.
<input type='checkbox' name='course[]' value='PHD'>P.H.D.</td>
</tr>
<tr><td><label>Select Gender</label></td>
<td><input type='radio' name='gender' value='Male'>Male
<input type='radio' name='gender' value='Female'>Female</td>
</td>
</tr>
<tr><td><label>Image</label></td>
<td><input type="file" name="image"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value='Submit'name='register'></td>
</tr>
</p>
<tr><td>
</td><td>
<p>Already a member?<a href="login.php">Sign In</a></p>
</td>
</tr>
</table>
</form>
</body>
</head>
</html>
