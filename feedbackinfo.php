<html>
   <a href="Feed_back.php">Add New Data</a><br><br>  
     <table border=1">
	 <tr>
	    <th>Feedback Id</th>
		<th>Feedback Subject</th>
		<th>Username</th>
		<th>Email</th>
		<th>Contect no</th>
	 </tr>
	 <?php
	    $result=mysqli_connect("localhost","root","","sports");
		$q="Select * from feedback__tbl";
		$c=mysqli_query($result,$q);
		
		While($row=mysqli_fetch_array($c))
		{
			?>
		<tr>
			<td><?php echo $row['F_Id'];?></td>
			<td><?php echo $row['F_subject'];?></td>
			<td><?php echo $row['User_Name'];?></td>
			<td><?php echo $row['Email'];?></td>
			<td><?php echo $row['Contact_no'];?></td>
		</tr>
			<?php
		}	
      ?>

</table>

</html>