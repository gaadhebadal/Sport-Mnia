<?php
    $W_Id=$_REQUEST["W_Id"];
	echo $W_Id;
	
?>
<table border=1  width=1000 height=200>

<tr>
     <th> W_Id </th>
	 <th> Season_Name </th>
     <th> Tempreture </th>
	 <th> Humidityy </th>
	 <th> Rain_Percentage </th>
	 <th> Visibility </th>
	
	
     
<?php
    $result=mysqli_connect("localhost","root","","sports");
	    $query="select * from weather__tbl where W_Id='$W_Id'";
		$c=mysqli_query($result,$query);
	    while($row=mysqli_fetch_array($c))
		{
			?>
			<tr>
			   <td><?php echo $row['W_Id'];?></td>
			   <td><?php echo $row['Season_Name'];?></td>
			   <td><?php echo $row['Tempreture'];?></td>
			   <td><?php echo $row['Humidity'];?></td>
			   <td><?php echo $row['Rain_Percentage'];?></td>
			   <td><?php echo $row['Visibility'];?></td>

			   </tr>
			
			<?php
		}
 ?>
