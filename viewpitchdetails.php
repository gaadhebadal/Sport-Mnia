<?php
    $P_Id=$_REQUEST["P_Id"];
	echo $P_Id;
	
?>
<table border=1  width=1000 height=200>

<tr>
     <th> P_Id </th>
	 <th> W_Id </th>
	 <th> Pitch_Category </th> 
	 <th> Pitch_Image </th>

<?php
    $result=mysqli_connect("localhost","root","","sports");
	    $query="select * from pitch__tbl where P_Id='$P_Id'";
		$c=mysqli_query($result,$query);
	    while($row=mysqli_fetch_array($c))
		{
			?>
			<tr>
			   <td><?php echo $row['P_Id'];?></td>
			   <td><?php echo $row['W_Id'];?></td>
			   <td><?php echo $row['Pitch_Category'];?></td>
			   <td><img src="upload/<?php echo $row['Pitch_Image'];?>" height=100 width=100/></td>
			   </tr>
			
			<?php
		}
 ?>