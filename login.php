<html>
<head><title>Login Page</title></head>
<style>
table{
margin:100px auto;
}
input{
border-radius:5px;
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
<body>
<h1 align='center'>Login Page</h1>
<form method="post" action="login.php">
<table>
<tr>
	<!--Display validation error-->
	<td colspan=2><?php include('errors.php');?></td>
</tr>
<tr><td>Username</td>
<td><input type='text' name='username' ></td>
</tr>
<tr><td>Password</td>
<td><input type='password' name='password'></td>
</tr>
<tr><td></td>
<td><input type='submit' name='login' value='Submit'></td></tr>
<tr><td></td>
<td>
<p>Not a member?<a href="form.php">Sign Up</a></p>
</td></tr>
</form>
</body>
</html>
