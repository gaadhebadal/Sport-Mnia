<?php
    include "header.php";
?>


 <?php
if(isset($_POST['btnok']))
{
	$Player_Name=$_POST['Player_Name'];
	$Test_score=$_POST['Test_score'];
	$One_Day_Score=$_POST['One_Day_Score'];
	$T20_Score=$_POST['T20_Score'];
	$Srike_Rate=$_POST['Srike_Rate'];
	$Half_Centuries=$_POST['Half_Centuries'];
	$Centuries=$_POST['Centuries'];
	$Player_Image=$_FILES['countimg']['name'];
    $Total_Score=$_POST['Total_Score'];
	$Age=$_POST['Age'];
	$Team_Name=$_POST['Team_Name'];
	$Total_Matches_Played=$_POST['Total_Matches_Played'];
	$Taken_Wickets=$_POST['Taken_Wickets'];
	$result=mysqli_connect("localhost","root","","sports");
	
    $query="INSERT into plyer_tbl values('','$Player_Name','$Test_score','$One_Day_Score','$T20_Score','$Srike_Rate','$Half_Centuries','$Centuries','$Player_Image','$Total_Score','$Age','$Team_Name','$Total_Matches_Played', '$Taken_Wickets')";
	$c=mysqli_query($result,$query);
    if($c)
	{
		move_uploaded_file($_FILES['countimg']['tmp_name'],"upload/".$Player_Image);
         ?>
		  
		<script>
		     alert('Successfully Inserted');
			 window.location="playerinfo.php";
		</script>
		<?php
	}
	else
	{
		   ?>
		<script>
		     alert('Something Goes Wrong');
			 window.location="addplayerinfo.php";
		</script>
		<?php
   }
}
         ?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		<div class="card-title" align="center">
		<h2>Add Player Info</h2>
   <div class="gallery">
 <form action="#" method="POST" enctype="multipart/form-data">
	
		 <div class="form-group has-success">
         <label style=float:left>Player_Name</label>
                  <input type="text" name="Player_Name" id="f-name" class="form-control" required placeholder="Enter Team Name"/><br/>
		 </div>
		  <div class="form-group has-success">
         <label style=float:left>Test_score</label>
                   <input type="text"  name="Test_score" required id="f-name" class="form-control" >
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>One_Day_Score</label>
                   <input type="text"  name="One_Day_Score"  required id="f-name"  class="form-control">
         </div>
		
		<div class="form-group has-success">
         <label style=float:left>T20_Score</label>
                   <input type="text"  name="T20_Score" required id="f-name"  required class="form-control" >
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Srike_Rate</label>
                   <input type="text"   name="Srike_Rate" required id="f-name" class="form-control">
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Half_Centuries</label>
                   <input type="text"  name="Half_Centuries" required id="f-name" class="form-control" >
         </div>
		  
		  <div class="form-group has-success">
         <label style=float:left>Centuries</label>
                   <input type="text"  name="Centuries"  required id="f-name"   class="form-control" >
          </div>
		  
		  <div class="form-group has-success"o>
         <label style=float:left>Player_Imge</label>
                   <input type="file"  name="countimg" required id="f-name"  class="form-control">
         </div>
		 
		 <div class="form-group has-success">
         <label style=float:left>Total_Score</label>
                   <input type="text"  name="Total_Score"   required id="f-name"   class="form-control" >
         </div>
		 
		 <div class="form-group has-success">
         <label style=float:left>Age</label>
                   <input type="text" placeholder="" name="	Age" id="f-name"  required class="form-control" >
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Team_Name</label>
                   <input type="text" placeholder="" name="Team_Name" id="f-name"  required class="form-control" >
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Total_Matches_Played</label>
                   <input type="text" placeholder="" name="Total_Matches_Played" id="f-name"  required class="form-control" >
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Taken_Wickets</label>
                   <input type="text" placeholder="" name="Taken_Wickets" id="f-name"  required class="form-control" >
         </div>
		 
		 
		     <input type="submit" name="btnok" value="INSERT"/>
         </div>
	</form>
   </div>
		<div class="gallery-grids">
				
</div>
</section>
	
<?php
    include "footer.php";
?>
