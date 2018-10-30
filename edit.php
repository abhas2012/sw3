<?php include('server.php');
//if not logged in,cannot access the page
if(empty($_SESSION['username']))
{
	header('location:login.php');
}
?>
<html>
<head><title>Welcome</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript">
      function changeimg(e) {
            document.getElementById('profile').src = window.URL.createObjectURL(e.files[0]);
      }
			function edit(){
				r=confirm("Do you want to save the changes?");
				if(r){
					document.getElementById('val').value='true';
				}

			}
    </script>
</head>
<style>
    .navbar-default{
        background-color: rgb(46, 33, 221);
    }
    .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
    color: #000; /*Sets the text hover color on navbar*/
}

.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active >
        a:hover, .navbar-default .navbar-nav > .active > a:focus,.navbar-default .navbar-nav > .active >  {
    color: white; /*BACKGROUND color for active*/
    background-color: #030033;
}
.nav > li > a:hover,
.nav > li > a:focus {
    text-decoration: none;
    background-color: silver; /*Change rollover cell color here*/
}

.navbar-default .navbar-nav > li > a {
    color: blanchedalmond; /*Change active text color here*/
}
.navbar-default .navbar-nav > li > span {
    color: blanchedalmond; /*Change active text color here*/
}
.navbar-default .navbar-brand {
    color: blanchedalmond; /*Change active text color here*/
}
@media (min-width: 768px){
.navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
    margin-left: 0px;
}
.main{
display:flex;
width:60%;
margin:100px auto;
flex-direction:row;
}
.col1
{
	display:flex;
	flex-direction:column;
	flex-flow:column wrap;
}
.col1 >div{
	margin-left: 0px;
}
.col2
{
	display:flex;
	flex-direction:column;
	flex-flow:column wrap;
}
.col2 > div{
	margin-right:0px;
}
}
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
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">PROFILE</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href=<?php if($_SESSION['branch']=="Computer Engineering"):?><?php if($_SESSION['year']==1): echo "http://svnit.ac.in/web/department/computer/btech_1.php"?>
					<?php elseif($_SESSION['year']==2): echo "http://svnit.ac.in/web/department/computer/btech_2.php"?>
						<?php elseif($_SESSION['year']==3): echo "http://svnit.ac.in/web/department/computer/btech_3.php"?>
						<?php else: echo "http://svnit.ac.in/web/department/computer/btech_4.php"?><?php endif?><?php elseif($_SESSION['branch']=="Chemical Engineering"):?><?php if($_SESSION['year']==1): echo "http://svnit.ac.in/web/department/computer/btech_1.php"?>
							<?php elseif($_SESSION['year']==2): echo "http://svnit.ac.in/web/department/chemical/pdf/ChED_BTech_II_Scheme&Syllabus.pdf"?>
							<?php elseif($_SESSION['year']==3): echo "http://svnit.ac.in/web/department/chemical/pdf/ChED_BTech_III_Scheme&Syllabus.pdf"?>
							<?php else: echo "http://svnit.ac.in/web/department/chemical/pdf/ChED_BTech_%20IV_Scheme&Syllabus.pdf"?><?php endif?><?php elseif($_SESSION['branch']=="Civil Engineering"):?><?php if($_SESSION['year']==1): echo "http://svnit.ac.in/web/department/computer/btech_1.php"?>
								<?php elseif($_SESSION['year']==2): echo "http://svnit.ac.in/web/department/civil/pdf/2ndyear.pdf"?>
								<?php elseif($_SESSION['year']==3): echo "http://svnit.ac.in/web/department/civil/pdf/3rdyear.pdf"?>
								<?php else: echo "http://svnit.ac.in/web/department/civil/pdf/4thyear.pdf"?><?php endif?><?php elseif($_SESSION['branch']=="Electrical Engineering"):?><?php if($_SESSION['year']==1): echo "http://svnit.ac.in/web/department/computer/btech_1.php"?>
									<?php elseif($_SESSION['year']==2): echo "http://svnit.ac.in/web/department/electrical/pdf/B%20Tech%20Electrical%20-%20IInd%20Year%20Final%20Syllabus.pdf"?>
									<?php else: echo "http://svnit.ac.in/web/department/electrical/pdf/B%20Tech%20Electrical%20-%20IVth%20Year.pdf"?><?php endif?><?php elseif($_SESSION['branch']=="Electronics Engineering"):?><?php if($_SESSION['year']==1): echo "http://svnit.ac.in/web/department/computer/btech_1.php"?>
									<?php elseif($_SESSION['year']==2): echo "http://svnit.ac.in/web/department/electronics/btech_2.php"?>
									<?php elseif($_SESSION['year']==3): echo "http://svnit.ac.in/web/department/electronics/btech_3.php"?>
									<?php else: echo "http://svnit.ac.in/web/department/electronics/btech_4.php"?><?php endif?><?php else:?><?php if($_SESSION['year']==1): echo "http://svnit.ac.in/web/department/computer/btech_1.php"?>
									<?php elseif($_SESSION['year']==2): echo "http://svnit.ac.in/web/department/mechanical/pdf/B.%20Tech.%20II.pdf"?>
									<?php elseif($_SESSION['year']==3): echo "http://svnit.ac.in/web/department/mechanical/pdf/B.%20Tech.%20III.pdf"?>
									<?php else: echo "http://svnit.ac.in/web/department/mechanical/pdf/B.%20Tech.%20IV.pdf"?><?php endif?><?php endif?>>SUBJECTS AND SYLLABUS</span></a></li>
        <li><a href="#"></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="edit.php">EDIT OR DELETE ACCOUNT</a></li>
        <li class="dropdown">
          	<a href="index.php?logout='1'">Logout</a>
						</li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<body>
    <title>Student Registration</title>
    <body>
    <h1 align="center">Student Registration Form</h1>
    <form action="edit.php" method="post" enctype="multipart/form-data">
    <table>
    <tr>
    	<!--Display validation error-->
    	<td colspan=2><?php include('errors.php');?></td>
    </tr>
    <tr>
    <td><label for="firstname">First Name</label></td>
    <td><input type='text' name='firstname' value='<?php echo $_SESSION['name'];?>' disabled></td>
    </tr>
    <tr>
    <td><label for="lastname">Last Name</label></td>
    <td><input type='text' name='lastname' value='<?php echo $_SESSION['last'];?>' disabled></td>
    </tr>
    <tr>
    <td><label for="email">Email</label></td>
    <td><input type='text' name='email' value='<?php echo $_SESSION['email'];?>'></td>
    </tr>
    <tr>
    	<td><label for="year">Mobile No</label></td>
    	<td><input type="text" name="mobno" value="<?php echo $_SESSION['mobno'];?>"></td>
    </tr>
    <tr>
    <td><label for="username">Username</label></td>
    <td><input type='text' name='username' value='<?php echo $_SESSION['username'];?>' disabled></td>
    </tr>
    <tr>
    <td><label>Select Course</label></td>
    <td><input type='checkbox' name='course[]' value='B.Tech' checked disabled>B.Tech.</td>
    </tr>
    <tr>
    	<td> <label>Branch</label> </td>
    	<td> <input type="text" name="branch" value="<?php echo $_SESSION['branch'];?>" disabled> </td>
    </tr>
    <tr>
    	<td><label for="year">Year</label></td>
    	<td><input type="number" name="year" min=1 max=4 value="<?php echo $_SESSION['year'];?>" disabled></td>
    </tr>
    <tr><td><label>Select Gender</label></td>
    <td> <input type="text" name="gender" value="<?php echo $_SESSION['gender'];?>" disabled> </td>
    </tr>
    <tr><td><label>Image</label></td>
    <td><img src="image/<?php echo $_SESSION['image']?>" width="100px" height="100px" id="profile" alt="profile image"></td>
    <td><input type="file" name="image" onchange="changeimg(this)" id="img"></td>
    </tr>
    <tr>
    	<td> <label>Address</label></td>
    	<td> <textarea rows="4" cols="30" name="address"><?php echo $_SESSION['address'];?></textarea> </td>
    </tr>
    <tr>
    <td><button type="submit" name='edit' id='edit' onsubmit="edit()">Edit Account</td>
    <td> <button type="submit" name="delete" id='delete' onsubmit="delete()">Delete Account</td>
  </tr>
	<tr>
		<td> <input type="text" name="val" value="false" hidden="true" id='val'></td>
	</tr>
    </table>
  </form>
</body>
