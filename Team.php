 <?php
if(isset($_POST['btnok']))
{
	$Tname=$_POST['Team_Name'];
	$Pname=$_POST['Player_Name'];
	$Cname=$_POST['Coach_Name'];
	$Towner=$_POST['Team_Owner'];
	$Tsponser=$_POST['Team_Sponser'];
	$Pname=$_POST['Physio_Name'];
	$Play11name=$_POST['Playing11_Name'];
	$Substname=$_POST['Substituant_Name'];
    $TImg=$_FILES['Team_Img']['name'];
	$TAvgWin=$_POST['Team_Avg_Win'];
	$result=mysqli_connect("localhost","root","","sports");
	
    $query="INSERT into team__tbl values('','$Tname','$Pname','$Cname','$Towner','$Tsponser','$Pname','$Play11name','$Substname','$TImg','$TAvgWin')";
	
	$c=mysqli_query($result,$query);
    if($c)
	{	
        move_uploaded_file($_FILES['Team_Img']['tmp_name'],"upload/".$TImg);
              ?>
		<script>
		     alert('Successfully Inserted');
			 window.location="teminfo.php";
		</script>
		<?php
	}
	else
	{
		       ?>
		<script>
		     alert('Successfully Inserted');
			 window.location="Team.php";
		</script>
		<?php
	}	
}
?>

<html>
    <form action="#" method="POST" enctype="multipart/form-data">
	<input type="text" name="Team_Name" required placeholder="Enter Team_Name"/><br/><br/>
	<input type="text" name="Player_Name" required placeholder="Enter Player_Name"/><br/><br/>
	<input type="text" name="Coach_Name" required placeholder="Enter Coach_Name"/><br/><br/>
	<input type="text" name="Team_Owner" required placeholder="Enter Team_Owner"/><br/><br/>
	<input type="text" name="Team_Sponser" required placeholder="Enter Team_Sponser"/><br/><br/>
	<input type="text" name="Physio_Name" required placeholder="Enter Physio_Name"/><br/><br/>
	<input type="text" name="Playing11_Name" required placeholder="Enter Playing11_Name"/><br/><br/>
	<input type="text" name="Substituant_Name" required placeholder="Enter Substituant_Name"/><br/><br/>
	<label>Enter Team Image:</label></br>	
	<input type="file" name="Team_Img"><br/><br/>
	<input type="text" name="Team_Avg_Win" required placeholder="Enter Team_Avg_Win%"/><br/><br/>
	
	
	<input type="submit" name="btnok" value="INSERT"/>
	
	</form>
</html>