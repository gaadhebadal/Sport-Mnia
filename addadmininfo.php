<html>
   <a href="admin.php">Add New Data</a><br><br>  
     <table border=1">
	 <tr>
	    <th>Admin Id</th>
		<th>Username</th>
		<th>Password</th>
	 </tr>
	 <?php
	    $result=mysqli_connect("localhost","root","","sports");
		$q="Select * from admin_tbl";
		$c=mysqli_query($result,$q);
		
		While($row=mysqli_fetch_array($c))
		{
			?>
		<tr>
			<td><?php echo $row['admin_id'];?></td>
			<td><?php echo $row['Username'];?></td>
			<td><?php echo $row['password'];?></td>
		</tr>
			<?php
		}	
      ?>

</table>

</html>