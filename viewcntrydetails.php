<?php
    $Country_Id=$_REQUEST["Country_Id"];
	echo $Country_Id;
	
?>
<table border=1  width=1000 height=200>

<tr>
     <th> Country_Id </th>
	 <th> Country_Name </th>
	 <th> Team_Name </th> 
	 <th> Stadium_Details </th>
	 <th> Country_Img </th>
	 <th> Famous_places </th>
	 <th> Famous_Food </th>
	 <th> Country_Area </th>

<?php
    $result=mysqli_connect("localhost","root","","sports");
	    $query="select * from cntry_tbl where Country_Id='$Country_Id'";
		$c=mysqli_query($result,$query);
	    while($row=mysqli_fetch_array($c))
		{
			?>
			<tr>
			   <td><?php echo $row['Country_Id'];?></td>
			   <td><?php echo $row['Country_Name'];?></td>
			   <td><?php echo $row['Team_Name'];?></td>
			   <td><?php echo $row['Stadium_Details'];?></td>
			   <td><img src="upload/<?php echo $row['Country_Img'];?>" height=100 width=100/></td>
			   <td><?php echo $row['Famous_Places'];?></td>
			   <td><?php echo $row['Famous_Food'];?></td>
			   <td><?php echo $row['Country_Area'];?></td>
			</tr>
			
			<?php
		}
 ?>