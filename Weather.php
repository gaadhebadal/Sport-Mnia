 <?php
if(isset($_POST['btnok']))
{
	$Season_Name=$_POST['Season_Name'];
	$Tempreture=$_POST['Tempreture'];
	$Humidity=$_POST['Humidity'];
	$RainPercentage=$_POST['RainPercentage'];
	$Visibility=$_POST['Visibility'];

	$result=mysqli_connect("localhost","root","","sports");
	
    $query="INSERT into weather__tbl values('','$Season_Name','$Tempreture','$Humidity','$RainPercentage','$Visibility')";
	$c=mysqli_query($result,$query);
    if($c)
	{	
                ?>
		<script>
		     alert('Successfully Inserted');
			 window.location="wetherinfo.php";
		</script>
		<?php
	}
	else
	{
		        ?>
		<script>
		     alert('Something Goes Wrong');
			 window.location="Weather.php";
		</script>
		<?php
	}	
}					
?>

<html>
    <form action="#" method="POST">
	<input type="text" name="Season_Name" required placeholder="Enter Season_Name"/><br/><br/>
	<input type="text" name="Tempreture" required placeholder="Enter Tempreture"/><br/><br/>
	<input type="text" name="Humidity" required placeholder="Enter Humidity"/><br/><br/>
	<input type="text" name="RainPercentage" required placeholder="Enter Rain Percentage"/><br/><br/>
	<input type="text" name="Visibility" required placeholder="Enter Visibility"/><br/><br/>
	
	<input type="submit" name="btnok" value="INSERT"/>
	
	</form>
</html>