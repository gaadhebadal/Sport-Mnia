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
      Feedback
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
    
            <th>Feedback_Id</th>
            <th>Feedback_Subject</th>
			<th>User_Name</th>
			<th>Email</th>
			<th>Contact no</th>
          </tr>
       <?php
	    $result=mysqli_connect("localhost","root","","sports");
		$q="Select * from  feedback__tbl";
		$c=mysqli_query($result,$q);
		
		While($row=mysqli_fetch_array($c))
		{
			?>
				
			</thead>
		   
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

