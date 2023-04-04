<?php
session_start();
if(!isset($_SESSION['admin']))
{
	?>
	<script>
	   alert('You have to login first');
	   window.location="login.php"; 
	</script>
	<?php
}
?>




<!DOCTYPE html>
<head>
<title>Welcome to Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo" align="center">
      <h3> Sports mania</h3>
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

    <!--  notification start -->
   
                
           
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#" align="center">
               <span class="username">
			   <?php
			   echo $_SESSION['name'];
			   ?>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li>  <a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            </li>
                <li>
                    <a href="countryinfo.php">
                        <i class="fa fa-globe"></i>
                        <span>Country Info </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="playerinfo.php">
                        <i class="fa fa-male"></i>
                        <span>Player Info</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="Teaminfo.php">
                        <i class="fa fa-users"></i>
                        <span>Team Info</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="Tournamentinfo.php">
                        <i class="fa fa-trophy"></i>
                        <span>Tournament Info  </span>
                    </a>
                </li>
      
                <li class="sub-menu">
                    <a href="weatherinfo.php">
                        <i class='fa fa-cloud'></i>
						<span>Weather Info/Condition</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="Pitchreport.php">
                        <i class="fa fa-glass"></i>
                        <span>Pitch Report</span>
                    </a>
                </li>
				
				<li class="sub-menu">
                    <a href="feedback.php">
                        <i class="fa fa-glass"></i>
                        <span>Feedback</span>
                    </a>
                </li>
				
                
                    <li class="sub-menu">
					  <a href="logout.php">
                        <i class="fa fa-sign-out"></i>
                         <span>Sign-out</span>
                   </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->