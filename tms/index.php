<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
fieldset{
margin-top:4%;
margin-right:20%;
margin-left:20%;
font-size: 20px;
border:1px solid green;
}

</style>
<title>TMS | Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<?php include('includes/header.php');?>
<div class="container">

<marquee scrollamount="6">
<span style="color:#000000;
font-family:'Times New Roman';font-size:16px;"><font size="5" color="red">Well</font> <font size="5" color="#FF0080">Come</font> <font size="5" color="green">to<font size="5" color="brown"> Imagine Ethiopia Tours and </font> <font size="5" color="purple"> 
Travel</font> <font size="5" color="red">Managment</font> <font size="5" color="red">System</font></span></marquee>
<br>
<video width="900" height="400" controls autoplay>
 <source src="images/lalibela.mp4" type="video/mp4">
</video>
<h3>This video shows St.lalibela Rock-Hewn Churches </h3>
<img src="images/l7.jpg" width=100% height="400" alt="noimage"/>
<p>
the Lalibela Rock-Hewn Churches are a series of 11 medieval monolithic cave churches located in the town of Lalibela, Ethiopia. They are considered one of the most remarkable and impressive architectural achievements in sub-Saharan Africa.
Some key facts about the Lalibela churches:
They were carved out of the native pink granite rock during the reign of King Lalibela in the late 12th or early 13th century AD.
The churches are divided into two main groups - the northern group and the southern group - connected by a series of tunnels and passages.
Each church is a freestanding structure carved out of a single piece of rock, with elaborate facades, windows, and even interiors.
The churches feature a unique architectural style that combines elements of Aksumite and Byzantine Christian architecture.
They are considered one of the holiest sites in Ethiopia and a major pilgrimage destination for Ethiopian Orthodox Christians.
In 1978, the Lalibela Rock-Hewn Churches were designated a UNESCO World Heritage Site in recognition of their outstanding universal value.
Preservation and conservation of the churches remains an ongoing challenge due to weathering, erosion, and human activity over the centuries.
</p>
<marquee>
							  <img src="images/tm.jpg" width="200" height="200">
							  <img src="images/l4.jpg"  width="200" height="200">
							  <img src="images/l8.jpg" width="200"height="200">
                              <img src="images/l5.jpg" width="200" height="200">
                              <img src="images/s1.jpg"  width="200" height="200">
                               <img src="images/s3.jpg"  width="200" height="200">
                             </marquee>  
</div>

<!--- routes ---->
<div class="routes">
	<div class="container">
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="glyphicon glyphicon-list-alt"></i></a>
			</div>
			<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
				<p>Enquiries</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<p>Registered users</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<p>Booking</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>