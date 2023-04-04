<?php
    $Venue_id=$_REQUEST["Venue_id"];
	echo $Venue_id;
	
?>
<table border=1  width=1000 height=200>

<tr>
     <th> Venue_id </th>
	 <th> Venue_Name </th>
     <th> Venue_Img </th>
	 <th> Stadium_Capacity </th>
	 <th> Established_Date </th>
	 <th> Facilities_Name </th>
	 <th> Ground_Size </th>
	 <th> Pitch_Condition </th>
	 <th> Match_Played </th>
	 <th> Venue_City </th>
	 <th> Venue_Ctry </th>
	
     
<?php
    $result=mysqli_connect("localhost","root","","sports");
	    $query="select * from venue__tbl where Venue_id='$Venue_id'";
		$c=mysqli_query($result,$query);
	    while($row=mysqli_fetch_array($c))
		{
			?>
			<tr>
			   <td><?php echo $row['Venue_id'];?></td>
			   <td><?php echo $row['Venue_Name'];?></td>
			   <td><img src="upload/<?php echo $row['Venue_Img'];?>" height=100 width=100/></td>
			   <td><?php echo $row['Stadium_Capacity'];?></td>
			   <td><?php echo $row['Established_Date'];?></td>
			   <td><?php echo $row['Facilities_Name'];?></td>
			   <td><?php echo $row['Ground_Size'];?></td>
			   <td><?php echo $row['Pitch_Condition'];?></td>
			   <td><?php echo $row['Match_Played'];?></td>
			   <td><?php echo $row['Venue_City'];?></td>
			   <td><?php echo $row['Venue_Ctry'];?></td>

			   </tr>
			
			<?php
		}
 ?>
