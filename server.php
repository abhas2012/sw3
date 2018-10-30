<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$firstname="";
$lastname="";
$email="";
$password1="";
$password2="";
$username="";
$gender="X";
$errors=array();
$course="X";
$image="";
$branch="";
$mobno="";
$address="";
//Connect to db
$db=mysqli_connect('localhost','root','','Registration');
if(isset($_POST['register'])){
	$firstname=mysqli_real_escape_string($db,$_POST['firstname']);
	$lastname=mysqli_real_escape_string($db,$_POST['lastname']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$password1=mysqli_real_escape_string($db,$_POST['password1']);
	$password2=mysqli_real_escape_string($db,$_POST['password2']);
	$year=mysqli_real_escape_string($db,$_POST['year']);
	$image=$_FILES['image']['name'];
	$temp=$_FILES['image']['tmp_name'];
	$target="image/".basename($image);
	move_uploaded_file($temp,$target);
	if(!empty($_POST['gender']))
	{
	$gender=mysqli_real_escape_string($db,$_POST['gender']);
	}
	if(!empty($_POST['course'])){
	$course=mysqli_real_escape_string($db,implode(",",$_POST['course']));
	}
	if(!empty($_POST['branch'])){
		$branch=mysqli_real_escape_string($db,$_POST['branch']);
	}
	if(!empty($_POST['address'])){
		$address=mysqli_real_escape_string($db,$_POST['address']);
	}
	//Ensure form fields are filled
	if(empty($firstname)){
		array_push($errors, "Fill the firstname");
	}
	else{
		$data=trim($firstname);
			$data=stripslashes($data);
			$firstname=htmlspecialchars($data);
		if(!preg_match("/^[a-zA-Z ]*$/", $firstname)){
			array_push($errors,"Only letters and white spaces allowed");
		}
	}
	if(empty($lastname)){
		array_push($errors, "Fill the lastname");
	}
	else{
		$data=trim($lastname);
			$data=stripslashes($data);
			$lastname=htmlspecialchars($data);
		if(!preg_match("/^[a-zA-Z ]*$/", $lastname)){
			array_push($errors,"Only letters and white spaces allowed");
		}
	}
	if(empty($email)){
		array_push($errors, "Fill the email");
	}
	else{
		$data=trim($email);
		$data=stripslashes($data);
		$email=htmlspecialchars($data);
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			array_push($errors,"Invalid email");
		}
	}
	$mobno=mysqli_real_escape_string($db,$_POST['mobno']);
	if(empty($mobno)){
		array_push($errors, "Fill the mobile no");
	}
	else{
		if(strlen($mobno)==10){

}
else{
	array_push($errors,"Mobile No should be of 10 digits");
}
	}
	if(empty($username)){
		array_push($errors, "Fill the username");
	}
	else{
		$data=trim($username);
		$data=stripslashes($data);
		$username=htmlspecialchars($data);
		if(!preg_match("/^[A-Za-z0-9_@]*$/", $username)){
			array_push($errors,"Only letters,digits,_ and @ allowed in username");}
		}
		$query="SELECT * FROM users WHERE username='$username'";
		$res=mysqli_query($db,$query);
		if(mysqli_num_rows($res)==1)
		{array_push($errors,"Username already exists");}
		if(strlen($username)<6){
			array_push($errors,"Username should be at least 6 letters long");
		}
	if($password1 != $password2){
		array_push($errors, "Passwords do not match");
	}
	if(empty($password1)){
		array_push($errors, "Fill the password");
	}
	else{
		$data=trim($password1);
		$data=stripslashes($data);
		$password1=htmlspecialchars($data);
		if(!preg_match("/^[A-Za-z0-9_@]*$/", $password1)){
			array_push($errors,"Only letters,_ and @ allowed in password");
		}
		if(strlen($password1)<6){
			array_push($errors,"Password should be at least 6 letters long");
		}
	}
	if(empty($password2)){
		array_push($errors, "Fill the password");
	}
	else{
		$data=trim($password2);
		$data=stripslashes($data);
		$password2=htmlspecialchars($data);
		if(!preg_match("/^[A-Za-z0-9_@]*$/", $password2)){
			array_push($errors,"Only letters,_ and @ allowed in password");
		}
	}
	if($gender=='X'){
		array_push($errors, "Please select gender");
	}
	if($course=='X'){
		array_push($errors, "Please select a course");
	}
	if(empty($branch)){
			array_push($errors, "Please select a branch");
	}
	if(empty($year)){
		array_push($errors,"Select Year");
	}
	if(empty($image)){
		array_push($errors, "Select Image");
	}
	if(empty($address)){
			array_push($errors, "Enter Address");
	}
	if(count($errors)==0){
		$password=$password1;
		$sql="INSERT INTO users(firstname,lastname,email,mobno,username,password,gender,course,branch,year,image,address) VALUES ('$firstname','$lastname','$email','$mobno','$username','$password','$gender','$course','$branch','$year','$image','$address')";
		mysqli_query($db,$sql);
		 header('location: login.php');
	}
}

//logging in
	if(isset($_POST['login'])){
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	//Ensure form fields are filled
	if(empty($username)){
		array_push($errors, "Fill the username");
	}
	if(empty($password)){
		array_push($errors, "Fill the password");
	}
	if(count($errors)==0){
		$password=$password;
		$query="SELECT * FROM users WHERE username='$username' AND password='$password'";
		$res=mysqli_query($db,$query);
		$row = mysqli_fetch_assoc($res);
		$name=$row['firstname'];
		$last=$row['lastname'];
		$course=$row['course'];
		$email=$row['email'];
		$image=$row['image'];
		$branch=$row['branch'];
		$gender=$row['gender'];
		$year=$row['year'];
		$mobno=$row['mobno'];
		$address=$row['address'];
		if(mysqli_num_rows($res)==1)
		{$_SESSION['username']=$username;
		$_SESSION['success']="You are now logged in";
		$_SESSION['name']=$name;
		$_SESSION['last']=$last;
		$_SESSION['course']=$course;
		$_SESSION['branch']=$branch;
		$_SESSION['email']=$email;
		$_SESSION['image']=$image;
		$_SESSION['year']=$year;
		$_SESSION['gender']=$gender;
		$_SESSION['mobno']=$mobno;
		$_SESSION['address']=$address;
		header('location: index.php');
		}
		else{
			array_push($errors,"Could not log you in");
		}

	}

}
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location:login.php');
}
if(isset($_POST['delete'])){
  $username=$_SESSION['username'];
  $query="DELETE from users where username='$username'";
  mysqli_query($db,$query);
	$img=$_SESSION['image'];
	unlink("image/".$img);
  session_destroy();
  header('location:form.php');
}
$email="";
$mobno="";
$address="";
$image=$_SESSION['image'];
$imgtmp="";
if(isset($_POST['edit'])){
$email=mysqli_real_escape_string($db,$_POST['email']);
$mobno=mysqli_real_escape_string($db,$_POST['mobno']);
$address=mysqli_real_escape_string($db,$_POST['address']);
$val=$_POST['val'];
$newimg=$_FILES['image']['name'];
$temp=$_FILES['image']['tmp_name'];
$target="image/".basename($newimg);
move_uploaded_file($temp,$target);
if(empty($email)){
  array_push($errors, "Fill the email");
}
else{
  $data=trim($email);
  $data=stripslashes($data);
  $email=htmlspecialchars($data);
  if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    array_push($errors,"Invalid email");
  }
  $_SESSION['email']=$email;
}
if(empty($mobno)){
  array_push($errors, "Fill the mobile no");
}
else{
	if(strlen($mobno)==10){
		$_SESSION['mobno']=$mobno;
}
else{
array_push($errors,"Mobile No should be of 10 digits");
}
}
if(empty($address)){
    array_push($errors, "Enter Address");
}
if(!empty($newimg)){
	$image=$newimg;
}
$_SESSION['image']=$image;
$_SESSION['address']=$address;
if(count($errors)==0){
	if($val){
  $u=$_SESSION['username'];
$query="UPDATE users SET email='$email',mobno='$mobno',image='$image',address='$address' where username='$u'";
mysqli_query($db,$query);
header('location:index.php');
}
}
}
?>
