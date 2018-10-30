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
	margin-left: 400px;
}
.col2 > div{
	margin-right:0px;
}
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
									<?php elseif($_SESSION['year']==3): echo "http://svnit.ac.in/web/department/electrical/pdf/Revised%20-%20B%20Tech%20Electrical%20-%20IIIrd%20Year.pdf"?>
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
	<div class="container">
		<h1 align='center'>Student Profile</h1>
			<?php if(isset($_SESSION['username'])):?>
				<center>WELCOME</center>
				<div class="main">
					<div class="col1">
						<item><strong><span style="font-size:30px;"><?php echo $_SESSION['name'];?>&nbsp;<?php echo $_SESSION['last'];?></span></strong></item>
						<item>
							<img src="image/<?php echo $_SESSION['image'];?>" style="width:40%;height:40%;" class="img-circle">
						</item>
						</div>
						<div class="col2">
						<div class><strong><span style="font-size:30px;"><?php echo $_SESSION['course'];?>&nbsp;<?php if($_SESSION['year']==1):?><?php echo "I"?><?php elseif($_SESSION['year']==2):?><?php echo "II";?><?php elseif($_SESSION['year']==3):?><?php echo "III";?><?php else:?><?php echo "IV"?><?php endif;?><br><?php echo $_SESSION['branch']?></span></strong></div>
						<div style="font-size:30px;">
							Contact <strong><?php echo $_SESSION['mobno'];?></strong>
						</div>
						<div style="font-size:20px;">
							Address <strong><br><?php echo $_SESSION['address'];?></strong>
						</div>
				</div>

			<?php endif?>
		</div>
	</div>
</body>
</html>
