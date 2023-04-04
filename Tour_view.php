<table border=1  width=1000 height=200>

<tr>
     <th> Tour_Id </th>
	 <th> Tour_Sponser </th>
	 <th> Tour_Place </th>
	 <th> view </th>
	 <th> Action </th>
</tr>

<?php
    $result=mysqli_connect("localhost","root","","sports");
    $query="Select * from  tour_tbl";
	$c=mysqli_query($result,$query);
	while($row=mysqli_fetch_array($c))
	{
      ?>
	  <tr>
	<td><?php echo $row['Tour_Id'];?></td>
	<td><?php echo $row['Tour_Sponser'];?></td>
	<td><?php echo $row['Tour_Place'];?></td>
	
	<td><a href="viewtourdetails.php?Tour_Id=<?php echo $row['Tour_Id'];?>">View</a></td>
	<td>
	<a href="Tour_edit.php?Tour_Id=<?php echo $row['Tour_Id'];?>">
	Edit
    </a> &nbsp;&nbsp;&nbsp;	
	<a onclick="return confirm('Are you sure you want to delete?'); "
	<a href="Tour_delete.php?Tour_Id=<?php echo $row['Tour_Id'];?>">
	Delete
	</a>
	</td>
	 </tr>
	 <?php
	}
	?>
	</table>
