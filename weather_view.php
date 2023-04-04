<table border=1  width=1000 height=200>

<tr>
     <th> W_Id </th>
	 <th> Season_Name </th>
	 <th> Tempreture </th>
	 <th> view </th>
	 <th> Action </th>
</tr>

<?php
    $result=mysqli_connect("localhost","root","","sports");
    $query="Select * from  weather__tbl";
	$c=mysqli_query($result,$query);
	while($row=mysqli_fetch_array($c))
	{
      ?>
	  <tr>
	<td><?php echo $row['W_Id'];?></td>
	<td><?php echo $row['Season_Name'];?></td>
	<td><?php echo $row['Tempreture'];?></td>
	
	<td><a href="viewweatherdetails.php?W_Id=<?php echo $row['W_Id'];?>">View</a></td>
	<td>
	<a href="weather_edit.php?W_Id=<?php echo $row['W_Id'];?>">
	Edit
    </a> &nbsp;&nbsp;&nbsp;	
	<a onclick="return confirm('Are you sure you want to delete?'); "
	<a href="weather_delete.php?W_Id=<?php echo $row['W_Id'];?>">
	Delete
	</a>
	</td>
	 </tr>
	 <?php
	}
	?>
	</table>

