<table border=1  width=1000 height=200>

<tr>
     <th> Team_id </th>
	 <th> Team_Name </th>
	 <th> Player_Name </th>
	 <th> view </th>
	 <th> Action </th>
</tr>

<?php
    $result=mysqli_connect("localhost","root","","sports");
    $query="Select * from team__tbl";
	$c=mysqli_query($result,$query);
	while($row=mysqli_fetch_array($c))
	{
      ?>
	  <tr>
	<td><?php echo $row['Team_id'];?></td>
	<td><?php echo $row['Team_Name'];?></td>
	<td><?php echo $row['Player_Name'];?></td>
	
	<td><a href="viewteamdetails.php?Team_id=<?php echo $row['Team_id'];?>">View</a></td>
	<td>
	<a href="Team_edit.php?Team_id=<?php echo $row['Team_id'];?>">
	Edit
    </a> &nbsp;&nbsp;&nbsp;	
	<a onclick="return confirm('Are you sure you want to delete?'); "
	<a href="Team_delete.php?Team_id=<?php echo $row['Team_id'];?>"  class="fa fa-trash">
	Delete
	</a>
	</td>
	 </tr>
	 <?php
	}
	?>
	</table>
