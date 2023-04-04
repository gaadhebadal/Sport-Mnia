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
      Pitch Detail
	   <a style="float:right" href="addpitchinfo.php">Add Pitch Info</a>
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
    
            <th>Pitch_ID</th>
            <th>Pitch_Category</th>
			<th>Pitch_Image</th>
			<th>Action</th>
          </tr>
        <?php
	    $result=mysqli_connect("localhost","root","","sports");
		$q="Select * from pitch__tbl";
		$c=mysqli_query($result,$q);
		
		While($row=mysqli_fetch_array($c))
		{
			?>
				
			</thead>
      <tr>
		   <td><?php echo $row['P_Id'];?></td>
			<td><?php echo $row['Pitch_Category'];?></td>
		    <td><img src="upload/<?php echo $row['Pitch_Image'];?>" height=100 width=100/></td>
			
	           <td><a href="p_edit.php?P_Id=<?php echo $row['P_Id'];?>" class="fa fa-edit" > <a onclick="return confirm('Are you sure you want to delete?'); "
	<a href="p_delete.php?P_Id=<?php echo $row['P_Id'];?>"class="fa fa-trash">
	</td>
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
