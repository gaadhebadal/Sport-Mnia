<table border=1  width=1000 height=200>

<tr>
     <th> Venue_id </th>
	 <th> Venue_Name </th>
	 <th> Venue_Img </th>
	 <th> view </th>
	 <th> Action </th>
</tr>

<?php
    $result=mysqli_connect("localhost","root","","sports");
    $query="Select * from  venue__tbl";
	$c=mysqli_query($result,$query);
	while($row=mysqli_fetch_array($c))
	{
      ?>
	  <tr>
	<td><?php echo $row['Venue_id'];?></td>
	<td><?php echo $row['Venue_Name'];?></td>
	<td><?php echo $row['Venue_Img'];?></td>
	
	<td><a href="viewvenuedetails.php?Venue_id=<?php echo $row['Venue_id'];?>">View</a></td>
	<td>
	<a href="venue_edit.php?Venue_id=<?php echo $row['Venue_id'];?>">
	Edit
    </a> &nbsp;&nbsp;&nbsp;	
	<a onclick="return confirm('Are you sure you want to delete?'); "
	<a href="venue_delete.php?Venue_id=<?php echo $row['Venue_id'];?>">
	Delete
	</a>
	</td>
	 </tr>
	 <?php
	}
	?>
	</table>

