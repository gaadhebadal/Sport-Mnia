<?php
    include "header.php";
?>


 <?php
if(isset($_POST['btnok']))
{
	$Team_Name=$_POST['Team_Name'];
	$Player_Name=$_POST['Player_Name'];
	$Coach_Name=$_POST['Coach_Name'];
	$Team_Owner=$_POST['Team_Owner'];
	$Team_Sponser=$_POST['Team_Sponser'];
	$Physio_Name=$_POST['Physio_Name'];
	$Playing11_Name=$_POST['Playing11_Name'];
	$Substituant_Name=$_POST['Substituant_Name'];
    $Team_Img=$_FILES['countimg']['name'];
	$Team_Avg_Win=$_POST['Team_Avg_Win'];
	$result=mysqli_connect("localhost","root","","sports");
	
    $query="INSERT into team__tbl values('','$Team_Name','$Player_Name','$Coach_Name','$Team_Owner','$Team_Sponser','$Physio_Name','$Playing11_Name','$Substituant_Name','$Team_Img','$Team_Avg_Win')";
	$c=mysqli_query($result,$query);
    if($c)
	{
		move_uploaded_file($_FILES['countimg']['tmp_name'],"upload/".$Team_Img);
         ?>
		  
		<script>
		     alert('Successfully Inserted');
			 window.location="Teaminfo.php";
		</script>
		<?php
	}
	else
	{
		   ?>
		<script>
		     alert('Something Goes Wrong');
			 window.location="addteaminfo.php";
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
         <label style=float:left>Team_Name</label>
                  <input type="text" name="Team_Name" id="f-name" class="form-control" required placeholder="Enter Country Name"/><br/>
		 
		  <div class="form-group has-success">
         <label style=float:left>Player_Name</label>
                   <input type="text" placeholder="Enter Country Name" name="Player_Name" required id="f-name" class="form-control" >
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Coach_Name</label>
                   <input type="text" placeholder="" name="Coach_Name" id="f-name" required class="form-control">
         </div>
		 <div class="form-group has-success">
         <label style=float:left>Team_Owner</label>
                   <input type="text" placeholder="" name="Team_Owner" id="f-name" required class="form-control" >
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Team_Sponser</label>
                   <input type="text" placeholder="" name="Team_Sponser" id="f-name" required class="form-control">
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Physio_Name</label>
                   <input type="text" placeholder="" name="Physio_Name" id="f-name"  required class="form-control" >
         </div>
		  <div class="form-group has-success">
         <label style=float:left>Playing11_Name</label>
                   <input type="text" placeholder="" name="Playing11_Name" id="f-name"  required class="form-control" >
         </div>
		  <div class="form-group has-success">
         <label style=float:left>Substituant_Name</label>
                   <input type="text" placeholder="" name="Substituant_Name" id="f-name"  required class="form-control" >
         </div>
		  
		  <div class="form-group has-success"o>
         <label style=float:left>Team_Img</label>
                   <input type="file" placeholder="" name="countimg" id="f-name" required class="form-control">
         </div>
		  <div class="form-group has-success">
         <label style=float:left>Team_Avg_Win</label>
                   <input type="text" placeholder="" name="Team_Avg_Win" id="f-name"  required class="form-control" >
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
