<?php
    include "header.php";
?>


 <?php
if(isset($_POST['btnok']))
{
	$Country_Name=$_POST['countxt'];
	$Team_Name=$_POST['teamtxt'];
	$Stadium_Details=$_POST['stadiumtxt'];
    $Country_Img=$_FILES['countimg']['name'];
	$Famous_Places=$_POST['placetxt'];
	$Famous_Food=$_POST['foodtxt'];
	$Country_Area=$_POST['areatxt'];
	$result=mysqli_connect("localhost","root","","sports");
	
    $query="INSERT into cntry_tbl values('','$Country_Name','$Team_Name','$Stadium_Details','$Country_Img','$Famous_Places','$Famous_Food','$Country_Area')";
	$c=mysqli_query($result,$query);
    if($c)
	{
		move_uploaded_file($_FILES['countimg']['tmp_name'],"upload/".$Country_Img);
         ?>
		  
		<script>
		     alert('Successfully Inserted');
			 window.location="countryinfo.php";
		</script>
		<?php
	}
	else
	{
		   ?>
		<script>
		     alert('Something Goes Wrong');
			 window.location="addcountryinfo.php";
		</script>
		<?php
   }
}
         ?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		<div class="card-title" align="center">
		<h2>Add Country Info</h2>
   <div class="gallery">
 <form action="#" method="POST" enctype="multipart/form-data">
	
		 <div class="form-group has-success">
         <label style=float:left>Country_Name</label>
                  <input type="text" name="countxt" id="f-name" class="form-control" required placeholder="Enter Country Name"/><br/>
		 
		  <div class="form-group has-success">
         <label style=float:left>Team_Name</label>
                   <input type="text" placeholder="Enter Country Name" name="teamtxt" required id="f-name" class="form-control" >
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Stadium_Detalis</label>
                   <input type="text" placeholder="" name="stadiumtxt" id="f-name" required class="form-control">
         </div>
		 
		  <div class="form-group has-success"o>
         <label style=float:left>Country_Image</label>
                   <input type="file" placeholder="" name="countimg" id="f-name" required class="form-control">
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Famous_Places</label>
                   <input type="text" placeholder="" name="placetxt" id="f-name" required class="form-control" >
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Famous_Food</label>
                   <input type="text" placeholder="" name="foodtxt" id="f-name" required class="form-control" ">
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Country_Area</label>
                   <input type="text" placeholder="" name="areatxt" id="f-name"  required class="form-control" >
         </div>
		 
                   <input type="submit" name="btnok" value="INSERT"/>
         </div>
	</form>
   </div>
		<div class="gallery-grids">
				
</div>
</section>
	
<?php
    include "footer.php";
?>
