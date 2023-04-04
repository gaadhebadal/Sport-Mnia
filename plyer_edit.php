<?php
 
     $Player_Id=$_REQUEST["Player_Id"];
	 $result=mysqli_connect("localhost","root","","sports");
     if(isset($_POST['btnok']))
     {
    $Player_Name=$_POST['Player_Name'];
	$Testscore=$_POST['T_score'];
	$OneDay_Score=$_POST['One_DayScore'];
	$T20Score=$_POST['Score'];
	$SrikeRate=$_POST['Srike'];
	$HalfCenturies=$_POST['H_Centuries'];
	$Centurie=$_POST['Centu'];
	$Player_Image=$_FILES['img']['name'];
	$TotalScore=$_POST['Total'];
	$Agetxt=$_POST['agetxt'];
	$TeamName=$_POST['T_Name'];
	$TotalMatches_Played=$_POST['Total_MatchesPlayed'];
	$TakenWickets=$_POST['T_Wickets'];
     
	
		 $qq="UPDATE   plyer_tbl set Player_Name='$Player_Name',Test_score='$Testscore',One_Day_Score='$OneDay_Score' ,T20_Score='$T20Score', Srike_Rate='$SrikeRate' ,Half_Centuries='$HalfCenturies', Centuries='$Centurie', Player_Image='$Player_Image' ,Total_Score='$TotalScore', Age='$Agetxt', Team_Name='$TeamName', Total_Matches_Played='$TotalMatches_Played', Taken_Wickets='$TakenWickets' where Player_Id='$Player_Id'";
		 
		 $c=mysqli_query($result,$qq);
		 if($c)
		 {
			 ?>
			 <script>
			 alert('Successfully Updatedd');
			 window.location="plyer_view.php";
			 </script>
			 <?php
		 }
		 else{
			 ?>
			 <script>
			 alert('Errorr');
			 </script>
			 <?php
		 }
     }	
	 
	 $query="Select * from plyer_tbl where Player_Id='$Player_Id'";
	 $c=mysqli_query($result,$query);
	 while($row=mysqli_fetch_array($c))
	 {
	$Player_Name=$row['Player_Name'];
	$Test_score=$row['Test_score'];
	$One_Day_Score=$row['One_Day_Score'];
	$T20_Score=$row['T20_Score'];
	$Srike_Rate=$row['Srike_Rate'];
	$Half_Centuries=$row['Half_Centuries'];
	$Centuries=$row['Centuries'];
	$Player_Image=$row['Player_Image'];
	$Total_Score=$row['Total_Score'];
	$Age=$row['Age'];
	$Team_Name=$row['Team_Name'];
	$Total_Matches_Played=$row['Total_Matches_Played'];
	$Taken_Wickets=$row['Taken_Wickets'];
	 }

?>
<html>
    <form action="#" method="POST" enctype="multipart/form-data">
	<input type="text" name="Player_Name" value="<?php echo $Player_Name;?>" required placeholder="Enter Player_Name"/><br/><br/>
	<input type="text" name="T_score" value="<?php echo $Test_score;?>" required placeholder="Enter Test_score"/><br/><br/>
	<input type="text" name="One_DayScore" value="<?php echo $One_Day_Score;?>" required placeholder="Enter One_Day_Score"/><br/><br/>
	<input type="text" name="Score" value="<?php echo $T20_Score;?>"required placeholder="Enter T20_Score"/><br/><br/>
	<input type="text" name="Srike" value="<?php echo $Srike_Rate;?>" required placeholder="Enter Srike_Rate"/><br/><br/>
	<input type="text" name="H_Centuries" value="<?php echo $Half_Centuries;?>" required placeholder="Enter Half_Centuries"/><br/><br/>
	<input type="text" name="Centu" value="<?php echo $Centuries;?>" required placeholder="Enter Centuries"/><br/><br/>
	<label>Enter Player Image:</label></br>
	<input type="file" name="img" value="<?php echo $Player_Image;?>" required placeholder="Enter Player_Image"/><br/><br/>
	<input type="text" name="Total" value="<?php echo $Total_Score;?>" required placeholder="Enter Total_Score"/><br/><br/>
	<input type="text" name="agetxt" value="<?php echo $Age;?>" required placeholder="Enter Age"/><br/><br/>
	<input type="text" name="T_Name" value="<?php echo $Team_Name;?>" required placeholder="Enter Team_Name"/><br/><br/>
	<input type="text" name="Total_MatchesPlayed" value="<?php echo $Total_Matches_Played;?>" required placeholder="Enter Total_Matches_Played"/><br/><br/>
	<input type="text" name="T_Wickets" value="<?php echo $Taken_Wickets;?>" required placeholder="Enter Taken_Wickets"/><br/><br/>
	
	
	<input type="submit" name="btnok" value="INSERT"/>
	
	</form>
</html>