<?php
    include "header.php";
?>

<?php
 
     $Tour_Id=$_REQUEST["Tour_Id"];
	 $result=mysqli_connect("localhost","root","","sports");
     if(isset($_POST['btnok']))
     {
    $TSponser=$_POST['T_Sponser'];
	$TPlace=$_POST['T_Place'];
	$TState_Date=$_POST['T_State_Date'];
	$TEnd_Date=$_POST['T_End_Date'];
	$TSince=$_POST['T_Since'];
	$TWinner=$_POST['T_Winner'];
	$TLoser=$_POST['T_Loser'];
	$TPrize=$_POST['T_Prize'];
	
		 $qq="UPDATE   tour_tbl set Tour_Sponser='$TSponser',Tour_Place='$TPlace',Tour_State_Date='$TState_Date' ,Tour_End_Date='$TEnd_Date', Tour_Since='$TSince' ,Tour_Winner='$TWinner', Tour_Loser='$TLoser', Tour_Prize='$TPrize' where Tour_Id='$Tour_Id'";
		 
		 $c=mysqli_query($result,$qq);
		 if($c)
		 {
			 ?>
			 <script>
			 alert('Successfully Updatedd');
			 window.location="Tournamentinfo.php";
			 </script>
			 <?php
		 }
		 else{
			 ?>
			 <script>
			 alert('Errorr');
			 </script>
			 <?php
		 }
     }	
	 
	 $query="Select * from tour_tbl where Tour_Id='$Tour_Id'";
	 $c=mysqli_query($result,$query);
	 while($row=mysqli_fetch_array($c))
	 {
	$Tour_Sponser=$row['Tour_Sponser'];
	$Tour_Place=$row['Tour_Place'];
	$Tour_State_Date=$row['Tour_State_Date'];
	$Tour_End_Date=$row['Tour_End_Date'];
	$Tour_Since=$row['Tour_Since'];
	$Tour_Winner=$row['Tour_Winner'];
	$Tour_Loser=$row['Tour_Loser'];
	$Tour_Prize=$row['Tour_Prize'];
	 }

?><!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		<div class="card-title" align="center">
		<h2>Edit Player Info</h2>
   <div class="gallery">
 <form action="#" method="POST" enctype="multipart/form-data">
	
		 <div class="form-group has-success">
         <label style=float:left>Tour_Sponser</label>
                  <input type="text" name="Tour_Sponser" id="f-name" class="form-control" value="<?php echo $Tour_Sponser;?>"/><br/>
		 
		  <div class="form-group has-success">
         <label style=float:left>Tour_Place</label>
                   <input type="text" placeholder="Enter Country Name" name="Tour_Place" required id="f-name" class="form-control" value="<?php echo $Tour_Place;?>">
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Tour_State_Date</label>
                   <input type="date" name="Tour_State_Date" id="f-name" required class="form-control"value="<?php echo $Tour_State_Date;?>">
         </div>
		 <div class="form-group has-success">
         <label style=float:left>Tour_End_Date</label>
                   <input type="date"  name="Tour_End_Date" id="f-name" required class="form-control"value="<?php echo $Tour_End_Date;?>">
         </div> 
		 <div class="form-group has-success">
         <label style=float:left>Tour_Since</label>
                   <input type="text" name="Tour_Since" id="f-name" required class="form-control"value="<?php echo $Tour_Since;?>">
         </div>
		 <div class="form-group has-success">
         <label style=float:left>Tour_Winner</label>
                   <input type="text"  name="Tour_Winner" id="f-name" required class="form-control"value="<?php echo $Tour_Winner;?>">
         </div>
		 <div class="form-group has-success">
         <label style=float:left>Tour_Loser</label>
                   <input type="text"  name="Tour_Loser" id="f-name" required class="form-control"value="<?php echo $Tour_Loser;?>">
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Tour_Prize</label>
                   <input type="text" name="Tour_Prize" id="f-name" required class="form-control"value="<?php echo $Tour_Prize;?>" >
         </div>
		 
		<div>
		 
                   <input type="submit" name="btnok" name="countxt" value="update"/>
         </div>
	</form>
   </div>
		<div class="gallery-grids">
				
</div>
</section>
	
<?php
    include "footer.php";
?>
