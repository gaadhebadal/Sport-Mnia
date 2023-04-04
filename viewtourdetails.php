<?php
    $Tour_Id=$_REQUEST["Tour_Id"];
	echo $Tour_Id;
	
?>
<table border=1  width=1000 height=200>

<tr>
     <th> Tour_Id </th>
	 <th> Tour_Sponser </th>
     <th> Tour_Place </th>
	 <th> Tour_State_Date </th>
	 <th> Tour_End_Date </th>
	 <th> Tour_Since </th>
	 <th> Tour_Winner </th>
	 <th> Tour_Loser </th>
	 <th> Tour_Prize </th>
	
     
<?php
    $result=mysqli_connect("localhost","root","","sports");
	    $query="select * from tour_tbl where Tour_Id='$Tour_Id'";
		$c=mysqli_query($result,$query);
	    while($row=mysqli_fetch_array($c))
		{
			?>
			<tr>
			   <td><?php echo $row['Tour_Id'];?></td>
			   <td><?php echo $row['Tour_Sponser'];?></td>
			   <td><?php echo $row['Tour_Place'];?></td>
			   <td><?php echo $row['Tour_State_Date'];?></td>
			   <td><?php echo $row['Tour_End_Date'];?></td>
			   <td><?php echo $row['Tour_Since'];?></td>
			   <td><?php echo $row['Tour_Winner'];?></td>
			   <td><?php echo $row['Tour_Loser'];?></td>
			   <td><?php echo $row['Tour_Prize'];?></td>

			   </tr>
			
			<?php
		}
 ?>
