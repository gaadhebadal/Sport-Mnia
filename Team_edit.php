<?php
    include "header.php";
?>
<?php
 
     $Team_id=$_REQUEST["cid"];
	 $result=mysqli_connect("localhost","root","","sports");
	 $query="Select * from team__tbl Where Team_id='$Team_id'"; 
     $c=mysqli_query($result,$query);	
     while($row=mysqli_fetch_array($c))
     {
   
			$Team_Name=$row['Team_Name'];
			$Test_score=$row['Test_score'];
			$Player_Name=$row['Player_Name'];
			$Coach_Name=$row['Coach_Name'];
			$Team_Owner=$row['Team_Owner'];
			$Team_Sponser=$row['Team_Sponser'];
			$Physio_Name=$row['Physio_Name'];
			$Playing11_Name=$row['Playing11_Name'];
			$Substituant_Name=$row['Substituant_Name'];
			$Team_Img=$row['Team_Img'];
			$Team_Avg_Win=$row['Team_Avg_Win'];
	 } 		 
     if(isset($_POST['btnok']))
     {
		if(isset($_FILES['flimg']['Team_Name']))
		{
			$newimage=$_FILES['flimg']['Team_Img'];
			move_uploaded_file($_FILES['Team_Img']['tmp_name'],"upload/".$Team_Img);
		}
		else
		{
			$newimage=$Team_Img;
		}			
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
				$query="update team__tbl set Team_Name='$Team_Name',Player_Name='$Player_Name',Coach_Name='$Coach_Name',Team_Owner='$Team_Owner',Team_Sponser='$Team_Sponser',Physio_Name='$Physio_Name',Playing11_Name='$Playing11_Name',Substituant_Name='$Substituant_Name',Team_Img='$Team_Img',Team_Avg_Win='$Team_Avg_Win' where Team_id='$Team_id'";
				$c=mysqli_query($result,$query);
				if($c)
				{	
				  ?>
					<script>
						 alert('Successfully Updated');
						 window.location="Teaminfo.php";
					</script>
					<?php
				}
				else
				{ 
				 echo"Erroorrrr";
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
		<h2>Edit Player Info</h2>
   <div class="gallery">
 <form action="#" method="POST" enctype="multipart/form-data">
	
		 <div class="form-group has-success">
         <label style=float:left>Team_Name</label>
                  <input type="text" name="Team_Name" id="f-name" class="form-control" required placeholder="Enter Country Name" value="<?php echo $Team_Name;?>"/><br/>
		 
		  <div class="form-group has-success">
         <label style=float:left>Player_Name</label>
                   <input type="text" placeholder="Enter Country Name" name="Player_Name" required id="f-name" class="form-control" value="<?php echo $Player_Name;?>">
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Coach_Name</label>
                   <input type="text" placeholder="" name="Coach_Name" id="f-name" required class="form-control"value="<?php echo $Coach_Name;?>">
         </div>
		 <div class="form-group has-success">
         <label style=float:left>Team_Owner</label>
                   <input type="text" placeholder="" name="Team_Owner" id="f-name" required class="form-control"value="<?php echo $Team_Owner;?>">
         </div> 
		 <div class="form-group has-success">
         <label style=float:left>Team_Sponser</label>
                   <input type="text" placeholder="" name="Team_Sponser" id="f-name" required class="form-control"value="<?php echo $Team_Sponser;?>">
         </div>
		 <div class="form-group has-success">
         <label style=float:left>Physio_Name</label>
                   <input type="text" placeholder="" name="Physio_Name" id="f-name" required class="form-control"value="<?php echo $Physio_Name;?>">
         </div>
		 <div class="form-group has-success">
         <label style=float:left>Playing11_Name</label>
                   <input type="text" placeholder="" name="Playing11_Name" id="f-name" required class="form-control"value="<?php echo $Playing11_Name;?>">
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Substituant_Name</label>
                   <input type="text" placeholder="" name="Substituant_Name" id="f-name" required class="form-control"value="<?php echo $Substituant_Name;?>" >
         </div>
		  <div class="form-group has-success"o>
         <label style=float:left>Team_Img</label>
                   <center><img src="upload/<?php echo $Team_Img;?>" height=100 width=100 /></center>
	     <input  type="file" name="countimg" class="form-control"/><br><br/>
         </div>
		 
		 
		  <div class="form-group has-success">
         <label style=float:left>Team_Avg_Win</label>
                   <input type="text" placeholder="" name="Team_Avg_Win" id="f-name" required class="form-control" value="<?php echo $Team_Avg_Win;?>">
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
