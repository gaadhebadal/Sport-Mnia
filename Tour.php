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
			 window.location="tourinfo.php";
		</script>
		<?php
	}
	else
	{
		       ?>
		<script>
		     alert('Something Goes Wrong');
			 window.location="Tour.php";
		</script>
		<?php
	}	
}								



?>

<html>
    <form action="#" method="POST">
	<input type="text" name="Tour_Sponser" required placeholder="Enter Tour_Sponser"/><br/><br/>
	<input type="text" name="Tour_Place" required placeholder="Enter Tour_Place"/><br/><br/>
	<label>Enter Tour Start Date:</label><br>
	<input type="date" name="Tour_State_Date" required placeholder="Enter Tour_State_Date"/><br/><br/>
	<label>Enter Tour End Date:</label><br>
	<input type="date" name="Tour_End_Date" required placeholder="Enter Tour_End_Date"/><br/><br/>
	<input type="text" name="Tour_Since" required placeholder="Enter Tour_Since"/><br/><br/>
	<input type="text" name="Tour_Winner" required placeholder="Enter Tour_Winner"/><br/><br/>
	<input type="text" name="Tour_Loser" required placeholder="Enter Tour_Loser"/><br/><br/>
	<input type="text" name="Tour_Prize" required placeholder="Enter Tour_Prize"/><br/><br/>
	
	<input type="submit" name="btnok" value="INSERT"/>
	
	</form>
</html>