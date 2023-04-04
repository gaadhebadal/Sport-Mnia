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
      Team Details
	  <a style="float:right" href="addteaminfo.php">Add Team Info</a>
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
    
            <th>Team_ID</th>
            <th>Team_Name</th>
            <th>Player_Name</th>
			<th>Coach_Name</th>
			<th>Team_Owner</th>
			<th>Team_Sponser</th>
			<th>Physio_NAMe</th>
			<th>Playing11_Name</th>
			<th>Sabstituant_Name</th>
			<th>Team_Image</th>
			<th>Team_win</th>
			<th>Action</th>
          </tr>
		 
	 <?php
	    $result=mysqli_connect("localhost","root","","sports");
		$q="Select * from team__tbl";
		$c=mysqli_query($result,$q);
		
		While($row=mysqli_fetch_array($c))
		{
			?>
				
			</thead>
         <tr>
		  <td><?php echo $row['Team_id'];?></td>
			<td><?php echo $row['Team_Name'];?></td>
			<td><?php echo $row['Player_Name'];?></td>
			<td><?php echo $row['Coach_Name'];?></td>
			<td><?php echo $row['Team_Owner'];?></td>
			<td><?php echo $row['Team_Sponser'];?></td>
			<td><?php echo $row['Physio_Name'];?></td>
			<td><?php echo $row['Playing11_Name'];?></td>
			<td><?php echo $row['Substituant_Name'];?></td>
			<td><img src="upload/<?php echo $row['Team_Img'];?>" height=100 width=100/></td>
			<td><?php echo $row['Team_Avg_Win'];?></td>
			
	
			
			  <td><a href="Team_edit.php?cid=<?php echo $row['Team_id'];?>" class="fa fa-edit" > <a onclick="return confirm('Are you sure you want to delete?'); "
	         <a href="Team_delete.php?Team_id=<?php echo $row['Team_id'];?>"  class="fa fa-trash"></td>
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
