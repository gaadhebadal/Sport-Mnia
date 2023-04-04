<html>
   <a href="Venue.php">Add New Team Details</a><br><br>  
     <table border=1">
	 <tr>
	    <th>Venue Id</th>
		<th>Venue Name</th>
		<th>Venue_Img</th>
		<th>Stadium Capacity</th>
		<th>Established Date</th>
		<th>Facilities_Name</th>
		<th>Ground Size</th>
		<th>Pitch Condition</th>
		<th>Match Played</th>
		<th>Venue City</th>
		<th>Venue Country</th>
		
	 </tr>
	 <?php
	    $result=mysqli_connect("localhost","root","","sports");
		$q="Select * from   venue__tbl ";
		$c=mysqli_query($result,$q);
		
		While($row=mysqli_fetch_array($c))
		{
			?>
		<tr>
			<td><?php echo $row['Venue_id'];?></td>
			<td><?php echo $row['Venue_Name'];?></td>
			<td>
			<img src="upload/<?php echo $row['Venue_Img'];?>" height=100 width=100/>
			</td>
			<td><?php echo $row['Stadium_Capacity'];?></td>
			<td><?php echo $row['Established_Date'];?></td>
			<td><?php echo $row['Facilities_Name'];?></td>
			<td><?php echo $row['Ground_Size'];?></td>
			<td><?php echo $row['Pitch_Condition'];?></td>
			<td><?php echo $row['Match_Played'];?></td>
			<td><?php echo $row['Venue_City'];?></td>
			<td><?php echo $row['Venue_Ctry'];?></td>
			</tr>
			<?php
		}			
      ?>
</table>

</html>