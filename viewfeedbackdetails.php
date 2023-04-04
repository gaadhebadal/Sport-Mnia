<?php
    $F_Id=$_REQUEST["F_Id"];
	echo $F_Id;
	
?>
<table border=1  width=1000 height=200>

<tr>
     <th> F_Id </th>
	 <th> F_subject </th>
	 <th> User_Name </th> 
	 <th> Email </th>
	 <th> Contact_no </th>

<?php
    $result=mysqli_connect("localhost","root","","sports");
	    $query="select * from feedback__tbl where F_Id='$F_Id'";
		$c=mysqli_query($result,$query);
	    while($row=mysqli_fetch_array($c))
		{
			?>
			<tr>
			   <td><?php echo $row['F_Id'];?></td>
			   <td><?php echo $row['F_subject'];?></td>
			   <td><?php echo $row['User_Name'];?></td>
			   <td><?php echo $row['Email'];?></td>
			   <td><?php echo $row['Contact_no'];?></td>
			</tr>
			
			<?php
		}
 ?>