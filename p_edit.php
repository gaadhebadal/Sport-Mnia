<?php
    include "header.php";
?>
<?php
 
     $P_Id=$_REQUEST["P_Id"];
	 $result=mysqli_connect("localhost","root","","sports");
     $query="Select * from   pitch__tbl Where P_Id ='$P_Id '"; 
	 $c=mysqli_query($result,$query);	
     while($row=mysqli_fetch_array($c))
     {
   
		$Pitch_Category=$row['Pitch_Category'];
		$Pitch_Image=$row['Pitch_Image'];
	 } 	
      if(isset($_POST['btnok']))
     {
		if(isset($_FILES['countimg']['name']))
		{
			$newimage=$_FILES['countimg']['name'];
			move_uploaded_file($_FILES['countimg']['tmp_name'],"upload/".$newimage);
		}
		else
		{
			$newimage=$Pitch_Image;
		}			
			     $Pitch_Category=$_POST['countxt'];	 
				 
				 $result=mysqli_connect("localhost","root","","sports");
				$query="update pitch__tbl set  Pitch_Category='$Pitch_Category',Pitch_Image='$newimage' Where P_Id='$P_Id'";
				$c=mysqli_query($result,$query);
				if($c)
				{	
				  ?>
					<script>
						 alert('Successfully Inserted');
						 window.location="pitchreport.php";
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
	<div class="form-group has-success" >
	<label"Pitch_category" value="<?php echo $Pitch_Category;?>" required >Choose Pitch Category:</label>
	<select name="countxt" id="pitch_category">
		<option>Select Pitch Category</option>
		<option value="green">Green</option>
		<option value="dusty">Dusty</option>
		<option value="dead">Dead</option>
	</select><br/><br/>
		 </div>
		  <div class="form-group has-success"o>
         <label style=float:left>Choose Pitch image:</label>
                   <center><img src="upload/<?php echo $Pitch_Image;?>" height=100 width=100 /></center>
	     <input  type="file" name="countimg" class="form-control"/><br><br/>
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
