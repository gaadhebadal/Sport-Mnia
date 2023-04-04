 <?php
if(isset($_POST['btnok']))
{
	$Player_Name=$_POST['Player_Name'];
	$Test_score=$_POST['Test_score'];
	$One_Day_Score=$_POST['One_Day_Score'];
	$T20_Score=$_POST['T20_Score'];
	$Srike_Rate=$_POST['Srike_Rate'];
	$Half_Centuries=$_POST['Half_Centuries'];
	$Centuries=$_POST['Centuries'];
	$Player_Image=$_FILES['Player_Image']['name'];
	$Total_Score=$_POST['Total_Score'];
	$Age=$_POST['Age'];
	$Team_Name=$_POST['Team_Name'];
	$Total_Matches_Played=$_POST['Total_Matches_Played'];
	$Taken_Wickets=$_POST['Taken_Wickets'];
	$result=mysqli_connect("localhost","root","","sports");
	
    $query="INSERT into plyer_tbl values('','$Player_Name','$Test_score','$One_Day_Score','$T20_Score','$Srike_Rate','$Half_Centuries','$Centuries','$Player_Image','$Total_Score','$Age','$Team_Name','$Total_Matches_Played','$Taken_Wickets')";
	
	$c=mysqli_query($result,$query);
    if($c)
	{	
     move_uploaded_file($_FILES['Player_Image']['tmp_name'],"upload/".$Player_Image);
	           ?>
		<script>
		     alert('Successfully Inserted');
			 window.location="plyerinfo.php";
		</script>
		<?php
	}
	
	else
	{
	          ?>
		<script>
		     alert('Something Goes Wrong');
			 window.location="Player.php";
		</script>
		<?php
	}
}
?>
<html>
    <form action="#" method="POST" enctype="multipart/form-data">
	<input type="text" name="Player_Name" required placeholder="Enter Player_Name"/><br/><br/>
	<input type="text" name="Test_score" required placeholder="Enter Test_score"/><br/><br/>
	<input type="text" name="One_Day_Score" required placeholder="Enter One_Day_Score"/><br/><br/>
	<input type="text" name="T20_Score" required placeholder="Enter T20_Score"/><br/><br/>
	<input type="text" name="Srike_Rate" required placeholder="Enter Srike_Rate"/><br/><br/>
	<input type="text" name="Half_Centuries" required placeholder="Enter Half_Centuries"/><br/><br/>
	<input type="text" name="Centuries" required placeholder="Enter Centuries"/><br/><br/>
	<label>Enter Player Image:</label></br>
	<input type="file" name="Player_Image" required placeholder="Enter Player_Image"/><br/><br/>
	<input type="text" name="Total_Score" required placeholder="Enter Total_Score"/><br/><br/>
	<input type="text" name="Age" required placeholder="Enter Age"/><br/><br/>
	<input type="text" name="Team_Name" required placeholder="Enter Team_Name"/><br/><br/>
	<input type="text" name="Total_Matches_Played" required placeholder="Enter Total_Matches_Played"/><br/><br/>
	<input type="text" name="Taken_Wickets" required placeholder="Enter Taken_Wickets"/><br/><br/>
	
	
	<input type="submit" name="btnok" value="INSERT"/>
	
	</form>
</html>