 <?php
if(isset($_POST['btnok']))
{
	$W_Id=$_POST['pitch_id'];
	$Pitch_Category=$_POST['pitch_category'];
	$Pitch_Image=$_FILES['img']['name'];
	$result=mysqli_connect("localhost","root","","sports");
	
    $query="INSERT into pitch__tbl values('','$W_Id','$Pitch_Category','$Pitch_Image')";
	
	$c=mysqli_query($result,$query);
    if($_POST['pitch_category']=="Select Pitch Category")
    {
		?>
		<script>
		alert("Select Pitch Category");
		</script>
		
		<?php
	}
	else
	{
	
    if($c)
	{	
     move_uploaded_file($_FILES['img']['tmp_name'],"upload/".$Pitch_Image);
          ?>
		<script>
		     alert('Successfully Inserted');
			 window.location="pitchinfo.php";
		</script>
		<?php
	}
	else
	{
		  ?>
		<script>
		     alert('Something Goes Wrong');
			 window.location="pitch.php";
		</script>
		<?php
	}
	}

}
?>

<html>
    <form action="#" method="POST" enctype="multipart/form-data">
	<input type="Int" name="pitch_id" required placeholder=" Enter pitch Id"/><br/><br/>
	<label"Pitch_category" required>Choose Pitch Category:</label>
	<select name="pitch_category" id="pitch_category">
		<option>Select Pitch Category</option>
		<option value="green">Green</option>
		<option value="dusty">Dusty</option>
		<option value="dead">Dead</option>
	</select><br/><br/>
     <label>Choose Pitch mage:</label></br>
	<input type="file" name="img" required /><br/><br/>
	
	<input type="submit" name="btnok" value="INSERT"/>
	</form>
</html>