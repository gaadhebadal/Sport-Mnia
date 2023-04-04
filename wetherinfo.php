<html>
   <a href="Weather.php">Add New Data</a><br><br>  
     <table border=1">
	 <tr>
	    <th>Weather Id</th>
		<th>Season Name</th>
		<th>Tempreture</th>
		<th>Humidity</th>
		<th>Rain Percentage</th>
		<th>Visibility</th>
	 </tr>
	 <?php
	    $result=mysqli_connect("localhost","root","","sports");
		$q="Select * from weather__tbl";
		$c=mysqli_query($result,$q);
		
		While($row=mysqli_fetch_array($c))
		{
			?>
		<tr>
			<td><?php echo $row['W_Id'];?></td>
			<td><?php echo $row['Season_Name'];?></td>
			<td><?php echo $row['Tempreture'];?></td>
			<td><?php echo $row['Humidity'];?></td>
			<td><?php echo $row['Rain Percentage'];?></td>
			<td><?php echo $row['Visibility'];?></td>
		</tr>
			<?php
		}	
      ?>

</table>

</html>