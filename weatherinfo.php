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
      Weather Condition
	 <a style="float:right" href="addweatherinfo.php">Add Weather Info</a>

    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
    
            <th>Weather_Id</th>
            <th>Season_Name</th>
            <th>Tempreture</th>
			<th>Humidity</th>
			<th>Rain</th>
			<th>Visibility</th>
			<th>Action</th>
          </tr>
        </thead>
        <tbody>
		<?php $con=mysqli_connect("localhost","root","","sports"); 
         $q="SELECT * FROM weather__tbl"; 
		 $r=mysqli_query($con, $q); 
		 while($row=mysqli_fetch_array ($r)) 
         { 
	 ?>
		 <tr>
            <td><?php echo $row['W_Id'];?></td>
	        <td><?php echo $row['Season_Name'];?></td>
	         <td><?php echo $row['Tempreture'];?></td>
	         <td><?php echo $row['Humidity'];?></td>
	         <td><?php echo $row['Rain Percentage'];?></td>
	         <td><?php echo $row['Visibility'];?></td>
			<td><a href="weather_edit.php?W_Id=<?php echo $row['W_Id'];?>" class="fa fa-edit" > <a onclick="return confirm('Are you sure you want to delete?'); "
	<a href="weather_delete.php?W_Id=<?php echo $row['W_Id'];?>" class="fa fa-trash"></td>
		   
           </tr>
           <?php
        }
		 ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
				
</div>
	
<?php
    include "footer.php";
?>