<?php
    $Team_id=$_REQUEST["Team_id"];
	echo $Team_id;
	
?>
<table border=1  width=1000 height=200>

<tr>
     <th> Team_id </th>
	 <th> Team_Name </th>
     <th> Player_Name </th>
	 <th> Coach_Name </th>
	 <th> Team_Owner </th>
	 <th> Team_Sponser </th>
	 <th> Physio_Name </th>
	 <th> Playing11_Name </th>
	 <th> Substituant_Name </th>
	 <th> Team_Img </th>
	 <th> Team_Avg_Win </th>
	
     
<?php
    $result=mysqli_connect("localhost","root","","sports");
	    $query="select * from team__tbl where Team_id='$Team_id'";
		$c=mysqli_query($result,$query);
	    while($row=mysqli_fetch_array($c))
		{
			?>
			<tr>
			   <td><?php echo $row['Team_id'];?></td>
			   <td><?php echo $row['Team_Name'];?></td>
			   <td><?php echo $row['Player_Name'];?></td>
			   <td><?php echo $row['Coach_Name'];?></td>
			   <td><?php echo $row['Team_Owner'];?></td>
			   <td><?php echo $row['Team_Sponser'];?></td>
			   <td><?php echo $row['Physio_Name'];?></td>
			   <td><?php echo $row['Playing11_Name'];?></td>
			   <td><?php echo $row['Substituant_Name'];?></td>
			   <td><img src="upload/<?php echo $row['Team_Img'];?>" height=100 width=100/></td>
			   <td><?php echo $row['Team_Avg_Win'];?></td>

			   </tr>
			
			<?php
		}
 ?>