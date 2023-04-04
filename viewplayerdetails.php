<?php
    $Player_Id=$_REQUEST["Player_Id"];
	echo $Player_Id;
	
?>
<table border=1  width=1000 height=200>

<tr>
     <th> Player_Id </th>
	 <th> Player_Name </th>
     <th> Player_Image </th>
	 <th> One_Day_Score </th>
	 <th> T20_Score </th>
	 <th> Srike_Rate </th>
	 <th> Half_Centuries </th>
	 <th> Centuries </th>
	 <th> Test_score </th>
	 <th> Total_Score </th>
	 <th> Age </th>
	 <th> Team_Name </th>
	 <th> Total_Matches_Played </th>
     <th>Taken_Wickets</ th>
<?php
    $result=mysqli_connect("localhost","root","","sports");
	    $query="select * from plyer_tbl where Player_Id='$Player_Id'";
		$c=mysqli_query($result,$query);
	    while($row=mysqli_fetch_array($c))
		{
			?>
			<tr>
			   <td><?php echo $row['Player_Id'];?></td>
			   <td><?php echo $row['Player_Name'];?></td>
			   <td><img src="upload/<?php echo $row['Player_Image'];?>" height=100 width=100/></td>
			   <td><?php echo $row['One_Day_Score'];?></td>
			   <td><?php echo $row['T20_Score'];?></td>
			   <td><?php echo $row['Srike_Rate'];?></td>
			   <td><?php echo $row['Half_Centuries'];?></td>
			   <td><?php echo $row['Centuries'];?></td>
			   <td><?php echo $row['Test_score'];?></td>
			   <td><?php echo $row['Total_Score'];?></td>
			   <td><?php echo $row['Age'];?></td>
			   <td><?php echo $row['Team_Name'];?></td>
			   <td><?php echo $row['Total_Matches_Played'];?></td>
			   <td><?php echo $row['Taken_Wickets'];?></td>
			   </tr>
			
			<?php
		}
 ?>
 ?>