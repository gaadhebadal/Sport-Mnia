<html>
   <a href="Tour.php">Add New Tour Details</a><br><br>  
     <table border=1">
	 <tr>
	    <th>Tour Id</th>
		<th>Tour Sponser</th>
		<th>Tour Place</th>
		<th>Tour Start Date</th>
		<th>Tour End Date</th>
		<th>Tour Since</th>
		<th>Tour Winner</th>
		<th>Tour Loser</th>
		<th>Tour Prize</th>
		
	 </tr>
	 <?php
	    $result=mysqli_connect("localhost","root","","sports");
		$q="Select * from    tour_tbl";
		$c=mysqli_query($result,$q);
		
		While($row=mysqli_fetch_array($c))
		{
			?>
		<tr>
			<td><?php echo $row['Tour_Id'];?></td>
			<td><?php echo $row['Tour_Sponser'];?></td>
			<td><?php echo $row['Tour_Place'];?></td>
			<td><?php echo $row['Tour_State_Date'];?></td>
			<td><?php echo $row['Tour_End_Date'];?></td>
			<td><?php echo $row['Tour_Since'];?></td>
			<td><?php echo $row['Tour_Winner'];?></td>
			<td><?php echo $row['Tour_Loser'];?></td>
			<td><?php echo $row['Tour_Prize'];?></td>
			</tr>
			<?php
		}			
      ?>

</table>

</html>