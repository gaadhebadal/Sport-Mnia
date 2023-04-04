<table border=1  width=1000 height=200>

<tr>
     <th> F_Id </th>
	 <th> F_subject </th>
	 <th> User_Name </th>
	 <th> view </th>
	 <th> Action </th>
</tr>

<?php
    $result=mysqli_connect("localhost","root","","sports");
    $query="Select * from feedback__tbl";
	$c=mysqli_query($result,$query);
	while($row=mysqli_fetch_array($c))
	{
      ?>
	  <tr>
	<td><?php echo $row['F_Id'];?></td>
	<td><?php echo $row['F_subject'];?></td>
	<td><?php echo $row['User_Name'];?></td>

	<td><a href="viewfeedbackdetails.php?F_Id=<?php echo $row['F_Id'];?>">View</a></td>
	<td>
	<a href="f_edit.php?F_Id=<?php echo $row['F_Id'];?>">
	Edit
    </a> &nbsp;&nbsp;&nbsp;	
	<a onclick="return confirm('Are you sure you want to delete?'); "
	<a href="f_delete.php?F_Id=<?php echo $row['F_Id'];?>">
	Delete
	</a>
	</td>
	 </tr>
	 <?php
	}
	?>
	</table>
