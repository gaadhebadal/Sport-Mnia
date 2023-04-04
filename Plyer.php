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
      Player details
	  <a style="float:right" href="addplayerinfo.php">Add Player Info</a>
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
    
            <th>Player_ID</th>
            <th>Player_Name</th>
            <th>Test_score</th>
			<th>One_Day_score</th>
			<th>T20_score</th>
		    <th>Strike_rate</th>
            <th>Half_Centuries</th>
			<th>Centuries</th>
			<th>Player_Image</th>
			<th>Total_Score</th>
			<th>Age</th>
			<th>Team_Name</th>
			<th>Total_Matches_Played</th>
			<th>Taken_Wickets</th>
			
          </tr>
		 <?php
	    $result=mysqli_connect("localhost","root","","sports");
		$q="Select * from plyer_tbl";
		$c=mysqli_query($result,$q);
		
		While($row=mysqli_fetch_array($c))
		{
		?>
        </thead>
             <tr>
			   <td><?php echo $row['Player_Id'];?></td>
			   <td><?php echo $row['Player_Name'];?></td>
               <td><?php echo $row['Test_score'];?></td>
			   <td><?php echo $row['One_Day_Score'];?></td>
			   <td><?php echo $row['T20_Score'];?></td>
			   <td><?php echo $row['Srike_Rate'];?></td>
			   <td><?php echo $row['Half_Centuries'];?></td>
			   <td><?php echo $row['Centuries'];?></td>
			   <td><img src="upload/<?php echo $row['Player_Image'];?>" height=100 width=100/></td>
			   <td><?php echo $row['Total_Score'];?></td>
			   <td><?php echo $row['Age'];?></td>
			   <td><?php echo $row['Team_Name'];?></td>
			   <td><?php echo $row['Total_Matches_Played'];?></td>
			   <td><?php echo $row['Taken_Wickets'];?></td>
			   
			   
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
	</section>
		
<?php
    include "footer.php";
?>
