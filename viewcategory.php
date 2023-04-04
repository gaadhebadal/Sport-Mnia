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
      Country Info
	<a style="float:right" href="addcountryinfo.php">Add Country Info</a>
    </div>
    <div class="bootstap-dta-table-panel">
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
    
            <th>Country_Id </th>
            <th>Country_Name</th>
            <th>Team_Name</th>
			<th>Stadium_Details</th>
			<th>Country_Image</th>
			<th>Famous_Places</th>
			<th>Famous_Food</th>
			<th>Country_Area</th>
			<th>Action</th>
          </tr>
        </thead>
		<tbody> 
				<?php
				$result=mysqli_connect("localhost","root","","sports"); 
				$query="SELECT * FROM cntry_tbl";  
				$c=mysqli_query($result, $query); 
				while($row=mysqli_fetch_array ($c)) 
				{ 
				   ?> 
		           <tr>
						<td><?php echo $row['Country_Id'];?></td> 
						<td><?php echo $row['Country_Name'];?></td> 
						<td><?php echo $row['Team_Name'];?></td> 
						<td><?php echo $row['Stadium_Details'];?></td>
						<td>
						<img src="upload/<?php echo $row['Country_Img'];?>" height=100 width=100/>
	                    </td>
						<td><?php echo $row['Famous_Places'];?></td> 
						<td><?php echo $row['Famous_Food'];?></td> 
						<td><?php echo $row['Country_Area'];?></td> 
						<td><a href="edit.php" class="fa fa-edit" > <a href="delete.php" class="fa fa-trash">
						</a></a></td>
						 </tr>
				<?php 
				} 
				?> 
</tbody>  <table>
            
    </div>
  </div>
</div>
</section>
				
</div>
</section>
	
<?php
    include "footer.php";
?>
