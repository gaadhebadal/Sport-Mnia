<?php
    include "header.php";
?>




 <?php
if(isset($_POST['btnok']))
{
	$Pitch_Category=$_POST['Pitch_Category'];
	$Pitch_Image=$_FILES['countimg']['name'];
	$result=mysqli_connect("localhost","root","","sports");
	
    $query="INSERT into pitch__tbl values('','','$Pitch_Category','$Pitch_Image')";
	$c=mysqli_query($result,$query);
    if($c)
	{
		move_uploaded_file($_FILES['countimg']['tmp_name'],"upload/".$Pitch_Image);
       
		 ?>
		  
		<script>
		     alert('Successfully Inserted');
			 window.location="Pitchreport.php";
		</script>
		<?php
	}
	else
	{
		   ?>
		<script>
		     alert('Something Goes Wrong');
			 window.location="addpitchinfo.php";
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
		<h2>Add Pitch Info</h2>
   <div class="gallery">
 <form action="#" method="POST" enctype="multipart/form-data">
	
		 <div class="form-group has-success" >
	<label"Pitch_category" value="<?php echo $Pitch_Category;?>" required >Choose Pitch Category:</label>
	<select name="Pitch_Category" id="pitch_category">
	
	     <option> Enter Pitch Category</option>
		<option value="green">Green</option>
		<option value="dusty">Dusty</option>
		<option value="dead">Dead</option>
	</select><br/><br/>
		 </div>
		 <div class="form-group has-success"o>
         <label style=float:left>Pitch_Image</label>
                   <input type="file" placeholder="" name="countimg" id="f-name" required class="form-control">
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
