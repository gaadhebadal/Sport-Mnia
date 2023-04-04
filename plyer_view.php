<table border=1  width=1000 height=200>

<tr>
     <th> Player_Id </th>
	 <th> Player_Name </th>
	 <th> Player_Image </th>
	 <th> view </th>
	 <th> Action </th>
</tr>

<?php
    $result=mysqli_connect("localhost","root","","sports");
    $query="Select * from plyer_tbl";
	$c=mysqli_query($result,$query);
	while($row=mysqli_fetch_array($c))
	{
      ?>
	  <tr>
	<td><?php echo $row['Player_Id'];?></td>
	<td><?php echo $row['Player_Name'];?></td>
	<td><img src="upload/<?php echo $row['Player_Image'];?>" height=100 width=100/></td>
	
	<td><a href="viewplayerdetails.php?Player_Id=<?php echo $row['Player_Id'];?>">View</a></td>
	<td>
	<a href="plyer_edit.php?Player_Id=<?php echo $row['Player_Id'];?>">
	Edit
    </a> &nbsp;&nbsp;&nbsp;	
	<a onclick="return confirm('Are you sure you want to delete?'); "
	<a href="plyer_delete.php?Player_Id=<?php echo $row['Player_Id'];?>">
	Delete
	</a>
	</td>
	 </tr>
	 <?php
	}
	?>
	</table>
