
<?php
if(isset($_POST['btnok']))
{
	$Country_Name=$_POST['countxt'];
	$Team_Name=$_POST['teamtxt'];
	$Stadium_Details=$_POST['stadiumtxt'];
    $Country_Img=$_FILES['countimg']['name'];
	$Famous_Places=$_POST['placetxt'];
	$Famous_Food=$_POST['foodtxt'];
	$Country_Area=$_POST['areatxt'];
	$result=mysqli_connect("localhost","root","","sports");
	
    $query="INSERT into cntry_tbl values('','$Country_Name','$Team_Name','$Stadium_Details','$Country_Img','$Famous_Places','$Famous_Food','$Country_Area')";
	$c=mysqli_query($result,$query);
    if($c)
	{
		move_uploaded_file($_FILES['countimg']['tmp_name'],"upload/".$Country_Img);
         ?>
		  
		<script>
		     alert('Successfully Inserted');
			 window.location="countryinfo.php";
		</script>
		<?php
	}
	else
	{
		   ?>
		<script>
		     alert('Something Goes Wrong');
			 window.location="country.php";
		</script>
		<?php
   }
}
         ?>

<html>
    <form action="#" method="POST" enctype="multipart/form-data">
	<input type="text" name="countxt" required placeholder="Enter Country Name"/><br/><br/>
	<input type="text" name="teamtxt" required placeholder="Enter Team Name"/><br/><br/>
	<input type="text" name="stadiumtxt" required placeholder="Enter Stadium Details"/><br/><br/>
	<label>Enter Country Image:</label></br>
	<input type="file" name="countimg" required /><br/><br/>
	<input type="text" name="placetxt" required placeholder="Enter Famous Places"/><br/><br/>
	<input type="text" name="foodtxt" required placeholder="Enter Famous Food"/><br/><br/>
	<input type="text" name="areatxt" required placeholder="Enter Country Area"/><br/><br/>
	
	<input type="submit" name="btnok" value="INSERT"/>
	</form>
</html>