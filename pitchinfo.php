<html>
   <a href="pitch.php">Add New Data</a><br><br>  
     <table border=1">
	 <tr>
		<th>W_id</th>
		<th>Pitch Category</th>
		<th>Pitch_Image</th>
	 </tr>
	 <?php
	    $result=mysqli_connect("localhost","root","","sports");
		$q="Select * from pitch__tbl";
		$c=mysqli_query($result,$q);
		
		While($row=mysqli_fetch_array($c))
		{
			?>
		<tr>
			<td><?php echo $row['W_Id'];?></td>
			<td><?php echo $row['Pitch_Category'];?></td>
			<td><img src="upload/<?php echo $row['Pitch_Image'];?>" height=100 width=100/>
			</td>
		</tr>
			<?php
		}	
      ?>

</table>

</html>