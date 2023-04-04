<?php
    include "header.php";
?>

<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<!-- //market-->
		<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Venue Detail
	   <a style="float:right" href="addvenueinfo.php">Add Venue Info</a>
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
    
            <th>Venue_ID</th>
            <th>Venue_Name</th>
            <th>Venue_Image</th>
			<th>Stadium_Capacity</th>
			<th>Established_Date</th>
			<th>Facilities_Name</th>
			<th>Ground_size</th>
			<th>Match_Played</th>
            <th>Venue_City</th>
            <th>Venue_Country</th>	
            <th>Action</th>			
			</tr>
        <?php
	    $result=mysqli_connect("localhost","root","","sports");
		$q="Select * from venue__tbl";
		$c=mysqli_query($result,$q);
		
		While($row=mysqli_fetch_array($c))
		{
			?>
				
			</thead>
      <tr>
		   <td><?php echo $row['Venue_id'];?></td>
			<td><?php echo $row['Venue_Name'];?></td>
		    <td><img src="upload/<?php echo $row['Venue_Img'];?>" height=100 width=100/></td>
			<td><?php echo $row['Stadium_Capacity'];?></td>
			<td><?php echo $row['Established_Date'];?></td>
			<td><?php echo $row['Facilities_Name'];?></td>
			<td><?php echo $row['Ground_Size'];?></td>
			<td><?php echo $row['Match_Played'];?></td>
			<td><?php echo $row['Venue_City'];?></td>
			<td><?php echo $row['Venue_Ctry'];?></td>
			
	           <td><a href="venue_edit.php?Venue_id=<?php echo $row['Venue_id'];?>" class="fa fa-edit" > <a onclick="return confirm('Are you sure you want to delete?'); "
	<a href="venue_delete.php?Venue_id=<?php echo $row['Venue_id'];?>"class="fa fa-trash"></td>
		   </tr>
        <?php
        }
		 ?>
       </table>
    </div>
  </div>
</div>
</section>
				
</div>
</section>
	
<?php
    include "footer.php";
?>
