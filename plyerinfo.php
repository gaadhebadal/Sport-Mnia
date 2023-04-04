<html>
   <a href="Player.php">Add New Player Details</a><br><br>  
     <table border=1">
	 <tr>
	    <th>Player Id</th>
		<th>player Name</th>
		<th>Test Score</th>
		<th>OneDay Score</th>
		<th>T20 Score</th>
		<th>Strike Rate</th>
		<th>Half Centuries</th>
		<th>Centuries</th>
		<th>Player_Image</th>
		<th>Total Score</th>
		<th>Age</th>
		<th>Team Name</th>
		<th>Total Match Played</th>
		<th>Taken Wickets</th>
		<th>Action</th>
	 </tr>
	 <?php
	    $result=mysqli_connect("localhost","root","","sports");
		$q="Select * from  plyer_tbl";
		$c=mysqli_query($result,$q);
		
		While($row=mysqli_fetch_array($c))
		{
			?>
		<tr>
			<td><?php echo $row['Player_Id'];?></td>
			<td><?php echo $row['Player_Name'];?></td>
			<td><?php echo $row['Test_score'];?></td>
			<td><?php echo $row['One_Day_Score'];?></td>
			<td><?php echo $row['T20_Score'];?></td>
			<td><?php echo $row['Srike_Rate'];?></td>
			<td><?php echo $row['Half_Centuries'];?></td>
			<td><?php echo $row['Centuries'];?></td>
			<td>
			<img src="upload/<?php echo $row['Player_Image'];?>" height=100 width=100/>
			</td>
			<td><?php echo $row['Total_Score'];?></td>
			<td><?php echo $row['Age'];?></td>
			<td><?php echo $row['Team_Name'];?></td>
			<td><?php echo $row['Total_Matches_Played'];?></td>
			<td><?php echo $row['Taken_Wickets'];?></td>
			<td>
			  <a href="Player_edit.php?Player_Id=<?php echo $row['Player_Id'];?>">Edit</a>
			</td>
			</tr>
			<?php
		}			
      ?>

</table>

</html>