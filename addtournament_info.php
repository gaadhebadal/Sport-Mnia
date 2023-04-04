<?php
    include "header.php";
?>


 <?php
if(isset($_POST['btnok']))
{
	$Tour_Sponser=$_POST['Tour_Sponser'];
	$Tour_Place=$_POST['Tour_Place'];
	$Tour_State_Date=$_POST['Tour_State_Date'];
	$Tour_End_Date=$_POST['Tour_End_Date'];
	$Tour_Since=$_POST['Tour_Since'];
	$Tour_Winner=$_POST['Tour_Winner'];
	$Tour_Loser=$_POST['Tour_Loser'];
	$Tour_Prize=$_POST['Tour_Prize'];
    $result=mysqli_connect("localhost","root","","sports");
	
    $query="INSERT into tour_tbl values('','$Tour_Sponser','$Tour_Place','$Tour_State_Date','$Tour_End_Date','$Tour_Since','$Tour_Winner','$Tour_Loser','$Tour_Prize')";
	$c=mysqli_query($result,$query);
    if($c)
	{
		 ?>
		  
		<script>
		     alert('Successfully Inserted');
			 window.location="Tournamentinfo.php";
		</script>
		<?php
	}
	else
	{
		   ?>
		<script>
		     alert('Something Goes Wrong');
			 window.location="addtournament_info.php";
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
         <label style=float:left>Tour_Sponser</label>
                  <input type="text" name="Tour_Sponser" id="f-name" class="form-control" required placeholder="Enter Country Name"/><br/>
		 
		  <div class="form-group has-success">
         <label style=float:left>Tour_Place</label>
                   <input type="text" placeholder="Enter Country Name" name="Tour_Place" required id="f-name" class="form-control" >
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Tour_State_Date</label>
                   <input type="date" placeholder="" name="Tour_State_Date" id="f-name" required class="form-control">
         </div>
		 <div class="form-group has-success">
         <label style=float:left>Tour_End_Date</label>
                   <input type="date" placeholder="" name="Tour_State_Date" id="f-name" required class="form-control" >
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Tour_Since</label>
                   <input type="text" placeholder="" name="Tour_Since" id="f-name" required class="form-control">
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Tour_Winner</label>
                   <input type="text" placeholder="" name="Tour_Winner" id="f-name"  required class="form-control" >
         </div>
		  <div class="form-group has-success">
         <label style=float:left>Tour_Loser</label>
                   <input type="text" placeholder="" name="Tour_Loser" id="f-name"  required class="form-control" >
         </div>
		  <div class="form-group has-success">
         <label style=float:left>Tour_Prize</label>
                   <input type="text" placeholder="" name="Tour_Prize" id="f-name"  required class="form-control" >
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
