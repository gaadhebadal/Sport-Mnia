<?php
session_start();
if(isset($_POST["Login"]))
{
	$Username=$_POST["emailtxt"];
	$password=$_POST["pswdtxt"];
	
	$result=mysqli_connect("localhost","root","","sports");
	
	$q="Select *from   admin_tbl where Username='$Username' AND password='$password'";
	$c=mysqli_query($result,$q);
    $r=mysqli_num_rows($c);
    if($r==0)
	{
		?> 
		 <script>
		      alert('Invaild username password');
		</script>
		<?php
		
	}
	else{
		$_SESSION['admin']=$Username;
		while($row=mysqli_fetch_array($c))
		{
			$_SESSION['name']=$row['name'];
		}
	?> 
		 <script>
		     window.location="index.php";
         </script>		 
		<?php
		
	}
}	
	
	/*if($email=="admin@gmail.com" &&  $pswdtxt=="admin1234")
	{
		?> 
		 <script>
		     window.location="index.php";
         </script>		 
		<?php
	}
	else
	{
		?>
		<script>
		      alert('Invaild username password');
		</script>
		<?php
		
	}*/

?>
<!DOCTYPE html>
<html lang="en">


<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
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
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>login</h2>
		<form action="#" method="post">
		<div class="form-group">
		<label>Email address</label>
			<input type="text" class="ggg" name="emailtxt" placeholder="E-MAIL" required="">
		</div>
		<div class="form-group">
        <label>Password</label>		
			<input type="password" class="ggg" name="pswdtxt" placeholder="PASSWORD" required="">
	   </div>
				<div class="clearfix"></div>
				<input type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" value="Sign In" name="Login">
				<form action="#" method="post">
		</form>
		</form>
</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>