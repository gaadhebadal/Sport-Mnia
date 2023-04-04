 <?php
if(isset($_POST['btnok']))
{
	$Venue_Name=$_POST['Venue_Name'];
	$VImg=$_FILES['Venue_Img']['name'];
	$Stadium_Capacity=$_POST['Stadium_Capacity'];
	$Established_Date=$_POST['Established_Date'];
	$Facilities_Name=$_POST['Facilities_Name'];
	$Ground_Size=$_POST['Ground_Size'];
	$Pitch_Condition=$_POST['Pitch_Condition'];
	$Match_Played=$_POST['Match_Played'];
	$Venue_City=$_POST['Venue_City'];
	$Venue_Ctry=$_POST['Venue_Ctry'];
	$result=mysqli_connect("localhost","root","","sports");
	
    $query="INSERT into venue__tbl values('','$Venue_Name','$VImg','$Stadium_Capacity','$Established_Date','$Facilities_Name','$Ground_Size','$Pitch_Condition','$Match_Played','$Venue_City','$Venue_Ctry')";
	
	$c=mysqli_query($result,$query);
    if($c)
	{	
       move_uploaded_file($_FILES['Venue_Img']['tmp_name'],"upload/".$VImg);
       ?>
		<script>
		     alert('Successfully Inserted');
			 window.location="venuinfo.php";
		</script>
		<?php
	}
	else
	{
		 ?>
		<script>
		     alert('Something Goes Wrong');
			 window.location="Venue.php";
		</script>
		<?php
	}	
}								
?>

<html>
    <form action="#" method="POST" enctype="multipart/form-data">
	<input type="text" name="Venue_Name" required placeholder="Enter Venue name"/><br/><br/>
	<label>Enter Venue Image:</label></br>
	<input type="file" name="Venue_Img""/><br/><br/>
	<input type="text" name="Stadium_Capacity" required placeholder="Enter Stadium Capacity"/><br/><br/>
	<label>Enter Established  Date :</label></br>
	<input type="date" name="Established_Date" required placeholder="Enter Established Date"/><br/><br/>
	<input type="text" name="Facilities_Name" required placeholder="Enter Facilities Name"/><br/><br/>
	<input type="text" name="Ground_Size" required placeholder="Enter Ground Size"/><br/><br/>
	<input type="text" name="Pitch_Condition" required placeholder="Enter Pitch Condition"/><br/><br/>
	<input type="text" name="Match_Played" required placeholder="Enter Match Played"/><br/><br/>
	<input type="text" name="Venue_City" required placeholder="Enter Venue City"/><br/><br/>
	<input type="text" name="Venue_Ctry" required placeholder="Enter Venue Country"/><br/><br/>
	
	<input type="submit" name="btnok" value="INSERT"/>
	
	</form>
</html>