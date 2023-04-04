<?php
    include "header.php";
?>


 <?php
if(isset($_POST['btnok']))
{
	$Team_Name=$_POST['Venue_Name'];
	$Team_Img=$_FILES['countimg']['name'];
	$Player_Name=$_POST['Stadium_Capacity'];
	$Coach_Name=$_POST['Established_Date'];
	$Team_Owner=$_POST['Facilities_Name'];
	$Team_Sponser=$_POST['Ground_Size'];
	$Playing11_Name=$_POST['Match_Played'];
	$Substituant_Name=$_POST['Venue_City'];
	$Team_Avg_Win=$_POST['Venue_Ctry'];
	$result=mysqli_connect("localhost","root","","sports");
	
    $query="INSERT into venue__tbl values('','$Team_Name','$Team_Img','$Player_Name','$Coach_Name','$Team_Owner','$Team_Sponser','$Playing11_Name','$Substituant_Name','$Team_Avg_Win')";
	$c=mysqli_query($result,$query);
    if($c)
	{
		move_uploaded_file($_FILES['countimg']['tmp_name'],"upload/".$Team_Img);
         ?>
		  
		<script>
		     alert('Successfully Inserted');
			 window.location="venueinfo.php";
		</script>
		<?php
	}
	else
	{
		   ?>
		<script>
		     alert('Something Goes Wrong');
			 window.location="addvenueinfo.php";
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
		<h2>Add Venue Info</h2>
   <div class="gallery">
 <form action="#" method="POST" enctype="multipart/form-data">
	
		 <div class="form-group has-success">
         <label style=float:left>Venue_Name</label>
                  <input type="text" name="Venue_Name" id="f-name" class="form-control" required placeholder="Enter Country Name"/><br/>
		</div>
		 <div class="form-group has-success">
         <label style=float:left>Venue_Img</label>
                   <input type="file" name="countimg"  required id="f-name" required class="form-control">
         </div>
		  <div class="form-group has-success">
         <label style=float:left>Stadium_Capacity</label>
                   <input type="text" placeholder="Enter Country Name" name="Stadium_Capacity" required id="f-name" class="form-control" >
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Established_Date</label>
                   <input type="date" placeholder="" name="Established_Date" id="f-name" required class="form-control">
         </div>
		 <div class="form-group has-success">
         <label style=float:left>Facilities_Name</label>
                   <input type="text" placeholder="" name="Facilities_Name" id="f-name" required class="form-control" >
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Ground_Size</label>
                   <input type="text" placeholder="" name="Ground_Size" id="f-name" required class="form-control">
         </div>
		
		  <div class="form-group has-success">
         <label style=float:left>Match_Played</label>
                   <input type="text" placeholder="" name="Match_Played" id="f-name"  required class="form-control" >
         </div>
		  <div class="form-group has-success">
         <label style=float:left>Venue_City</label>
                   <input type="text" placeholder="" name="Venue_City" id="f-name"  required class="form-control" >
         </div>
		  
		<div class="form-group has-success">
         <label style=float:left>Venue_Ctry</label>
                   <input type="text" placeholder="" name="Venue_Ctry" id="f-name"  required class="form-control" >
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
