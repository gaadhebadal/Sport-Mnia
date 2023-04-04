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
      Tournament Detail
	  <a style="float:right" href="addtournament_info.php">Add Tounament Info</a>
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
    
            <th>Tour_ID</th>
            <th>Tour_Sponser</th>
            <th>Tour_Place</th>
			<th>Tour_Start_Date</th>
			<th>Tour_End_Date</th>
			<th>Tour_Since</th>
			<th>Tour_Winner</th>
			<th>Tour_Loser</th>
			<th>Tour_Prize</th>
			<th>Action</th>
          </tr>
	
	<?php
	    $result=mysqli_connect("localhost","root","","sports");
		$q="Select * from  tour_tbl";
		$c=mysqli_query($result,$q);
		
		While($row=mysqli_fetch_array($c))
		{
			?>
				
			</thead>
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
			
	           <td><a href="Tour_edit.php?Tour_Id=<?php echo $row['Tour_Id'];?>" class="fa fa-edit" > <a onclick="return confirm('Are you sure you want to delete?'); "
	<a href="Tour_delete.php?Tour_Id=<?php echo $row['Tour_Id'];?>"  class="fa fa-trash"></td>
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
