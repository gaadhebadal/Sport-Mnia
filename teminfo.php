<html>
   <a href="Team.php">Add New Team Details</a><br><br>  
     <table border=1">
	 <tr>
	    <th>Team Id</th>
		<th>Team Name</th>
		<th>Player Name</th>
		<th>Coach Name</th>
		<th>Team Owner</th>
		<th>Team Sponser</th>
		<th>Physio Name</th>
		<th>Palying 11 Name</th>
		<th>Substituant Name</th>
		<th>Team_Image</th>
		<th>Team Avg win</th>
		<th>action</th>
	 </tr>
	 <?php
	    $result=mysqli_connect("localhost","root","","sports");
		$q="Select * from   team__tbl";
		$c=mysqli_query($result,$q);
		
		While($row=mysqli_fetch_array($c))
		{
			?>
		<tr>
			<td><?php echo $row['Team_id'];?></td>
			<td><?php echo $row['Team_Name'];?></td>
			<td><?php echo $row['Player_Name'];?></td>
			<td><?php echo $row['Coach_Name'];?></td>
			<td><?php echo $row['Team_Owner'];?></td>
			<td><?php echo $row['Team_Sponser'];?></td>
			<td><?php echo $row['Physio_Name'];?></td>
			<td><?php echo $row['Playing11_Name'];?></td>
			<td><?php echo $row['Substituant_Name'];?></td>
			<td><img src="upload/<?php echo $row['Team_Img'];?>" height=100 width=100/>
			</td>
			<td><?php echo $row['Team_Avg_Win'];?></td>
			<td>
			  <a href="tem.php?Team_id=<?php echo $row['Team_id'];?>">Edit</a>
			  </td>
			</tr>
			<?php
		}			
      ?>

</table>

</html>