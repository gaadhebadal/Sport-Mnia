<table border=1  width=1000 height=200>

<tr>
     <th> P_Id </th>
	 <th> W_Id </th>
	 <th> Pitch_Category </th>
	 <th> view </th>
	 <th> Action </th>
</tr>

<?php
    $result=mysqli_connect("localhost","root","","sports");
    $query="Select * from pitch__tbl";
	$c=mysqli_query($result,$query);
	while($row=mysqli_fetch_array($c))
	{
      ?>
	  <tr>
	<td><?php echo $row['P_Id'];?></td>
	<td><?php echo $row['W_Id'];?></td>
	<td><?php echo $row['Pitch_Category'];?></td>

	<td><a href="viewpitchdetails.php?P_Id=<?php echo $row['P_Id'];?>">View</a></td>
	<td>
	<a href="p_edit.php?P_Id=<?php echo $row['P_Id'];?>">
	Edit
    </a> &nbsp;&nbsp;&nbsp;	
	<a onclick="return confirm('Are you sure you want to delete?'); "
	<a href="p_delete.php?P_Id=<?php echo $row['P_Id'];?>">
	Delete
	</a>
	</td>
	 </tr>
	 <?php
	}
	?>
	</table>
