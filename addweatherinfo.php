<?php
    include "header.php";
?>


 <?php
if(isset($_POST['btnok']))
{
	$Team_Name=$_POST['Season_Name'];
	$Player_Name=$_POST['Tempreture'];
	$Coach_Name=$_POST['Humidity'];
	$Team_Owner=$_POST['Rain_Percentage'];
	$Team_Sponser=$_POST['Visibility'];
	$result=mysqli_connect("localhost","root","","sports");
	
    $query="INSERT into weather__tbl values('','$Team_Name','$Player_Name','$Coach_Name','$Team_Owner','$Team_Sponser')";
	$c=mysqli_query($result,$query);
    if($c)
	{
		 ?>
		  
		<script>
		     alert('Successfully Inserted');
			 window.location="weatherinfo.php";
		</script>
		<?php
	}
	else
	{
		   ?>
		<script>
		     alert('Something Goes Wrong');
			 window.location="addweatherinfo.php";
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
         <label style=float:left>Season_Name</label>
                  <input type="text" name="Season_Name" id="f-name" class="form-control" required placeholder="Enter Country Name"/><br/>
		
		  <div class="form-group has-success">
         <label style=float:left>Tempreture</label>
                   <input type="text" placeholder="Enter Country Name" name="Tempreture" required id="f-name" class="form-control" >
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Humidity</label>
                   <input type="text" placeholder="" name="Humidity" id="f-name" required class="form-control">
         </div>
		 <div class="form-group has-success">
         <label style=float:left>Rain_Percentage</label>
                   <input type="text" placeholder="" name="Rain_Percentage" id="f-name" required class="form-control" >
         </div>
		 <div class="form-group has-success">
         <label style=float:left>Visibility</label>
                   <input type="text" placeholder="" name="Visibility" id="f-name" required class="form-control" >
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
