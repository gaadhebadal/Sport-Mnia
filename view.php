<table border=1  width=1000 height=200>

<tr>
     <th> Country_Id </th>
	 <th> Country_Name </th>
	 <th> Team_Name </th>
	 <th> view </th>
	 <th> Action </th>
</tr>

<?php
    $result=mysqli_connect("localhost","root","","sports");
    $query="Select * from cntry_tbl";
	$c=mysqli_query($result,$query);
	while($row=mysqli_fetch_array($c))
	{
      ?>
	  <tr>
	<td><?php echo $row['Country_Id'];?></td>
	<td><?php echo $row['Country_Name'];?></td>
	<td><?php echo $row['Team_Name'];?></td>
	<td><a href="viewcntrydetails.php?Country_Id=<?php echo $row['Country_Id'];?>">View</a></td>
	<td>
	<a href="edit.php?Country_Id=<?php echo $row['Country_Id'];?>">
	Edit
   <a onclick="return confirm('Are you sure you want to delete?'); "
	<a href="delete.php?Country_Id=<?php echo $row['Country_Id'];?>">
	Delete
	</a>
	</td>
	 </tr>
	 <?php
	}
	?>
	</table>
