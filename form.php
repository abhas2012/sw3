<?php include('server.php')?>
<html>
<head>
<style>
input,select
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
<h1 align="center">Student Registration Form</h1>
<form action="form.php" method="post" enctype="multipart/form-data">
<table>
<tr>
	<!--Display validation error-->
	<td colspan=2><?php include('errors.php');?></td>
</tr>
<tr>
<td><label for="firstname">First Name</label></td>
<td><input type='text' name='firstname' value='<?php echo $firstname;?>'></td>
</tr>
<tr>
<td><label for="lastname">Last Name</label></td>
<td><input type='text' name='lastname' value='<?php echo $lastname;?>'></td>
</tr>
<tr>
<td><label for="email">Email</label></td>
<td><input type='text' name='email' value='<?php echo $email;?>'></td>
</tr>
<tr>
	<td><label for="year">Mobile No</label></td>
	<td><input type="text" name="mobno" value="<?php echo $mobno;?>"></td>
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
<td><input type='checkbox' name='course[]' value='B.Tech'>B.Tech.</td>
</tr>
<tr>
	<td> <label>Branch</label> </td>
	<td> <select name="branch">
		<option value="Chemical Engineering">Chemical Engineering</option>
		<option value="Civil Engineering">Civil Engineering</option>
			<option value="Computer Engineering">Computer Engineering</option>
			<option value="Electrical Engineering">Electrical Engineering</option>
			<option value="Electronics Engineering">Electronics Engineering</option>
		<option value="Mechanical Engineering">Mechanical Engineering</option>
	</select> </td>
</tr>
<tr>
	<td><label for="year">Year</label></td>
	<td><input type="number" name="year" min=1 max=4></td>
</tr>
<tr><td><label>Select Gender</label></td>
<td><input type='radio' name='gender' value='Male'>Male
<input type='radio' name='gender' value='Female'>Female
</td>
</tr>
<tr><td><label>Image</label></td>
<td><input type="file" name="image"></td>
</tr>
<tr>
	<td> <label>Address</label></td>
	<td> <textarea rows="4" cols="30" value="<?php echo $address;?>" name="address"></textarea> </td>
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
