<?php
    include "header.php";
?>
<?php
 
     $Player_Id=$_REQUEST["cid"];
	 $result=mysqli_connect("localhost","root","","sports");
	 $query="Select * from plyer_tbl Where Player_Id='$Player_Id'"; 
     $c=mysqli_query($result,$query);	
     while($row=mysqli_fetch_array($c))
     {
   
			$Player_Name=$row['Player_Name'];
			$Test_score=$row['Test_score'];
			$One_Day_Score=$row['One_Day_Score'];
			$T20_Score=$row['T20_Score'];
			$Srike_Rate=$row['Srike_Rate'];
			$Half_Centuries=$row['Half_Centuries'];
			$Centuries=$row['Centuries'];
			$Player_Image=$row['Player_Image'];
			$Total_Score=$row['Total_Score'];
			$Age=$row['Age'];
			$Team_Name=$row['Team_Name'];
			$Total_Matches_Played=$row['Total_Matches_Played'];
			$Taken_Wickets=$row['Taken_Wickets'];
	 } 		 
     if(isset($_POST['btnok']))
     {
		if(isset($_FILES['countimg']['name']))
		{
			$newimage=$_FILES['countimg']['name'];
			move_uploaded_file($_FILES['countimg']['tmp_name'],"upload/".$newimage);
		}
		else
		{
			$newimage=$Player_Image;
		}			
				$Player_Name=$_POST['Player'];
				$Test_score=$_POST['Tscore'];
				$One_Day_Score=$_POST['ODay_Score'];
				$T20_Score=$_POST['T_Score'];
				$Srike_Rate=$_POST['S_Rate'];
				$Half_Centuries=$_POST['H_Centuries'];
				$Centuries=$_POST['Centur'];
				$Total_Score=$_POST['T_Score'];
				$Age=$_POST['agetxt'];
				$Team_Name=$_POST['TName'];
				$Total_Matches_Played=$_POST['T_Matches_Played'];
				$Taken_Wickets=$_POST['T_Wickets'];
		 
				$result=mysqli_connect("localhost","root","","sports");
				$query="update plyer_tbl set Player_Name='$Player_Name',Test_score='$Test_score',One_Day_Score='$One_Day_Score',T20_Score='$T20_Score',Srike_Rate='$Srike_Rate',Half_Centuries='$Half_Centuries',Centuries='$Centuries',Player_Image='$newimage',Total_Score='$Total_Score',Age='$Age',Team_Name='$Team_Name',Total_Matches_Played='$Total_Matches_Played',Taken_Wickets='$Taken_Wickets' where Player_Id='$Player_Id'";
				$c=mysqli_query($result,$query);
				if($c)
				{	
				  ?>
					<script>
						 alert('Successfully Updated');
						 window.location="playerinfo.php";
					</script>
					<?php
				}
				else
				{ 
				 echo"Erroorrrr";
				}
					
}
?>?><!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		<div class="card-title" align="center">
		<h2>Edit Player Info</h2>
   <div class="gallery">
 <form action="#" method="POST" enctype="multipart/form-data">
	
		 <div class="form-group has-success">
         <label style=float:left>Player_Name</label>
                  <input type="text" name="Player" id="f-name" class="form-control" required placeholder="Enter Country Name" value="<?php echo $Player_Name;?>"/><br/>
		 
		  <div class="form-group has-success">
         <label style=float:left>Test_score</label>
                   <input type="text" placeholder="Enter Country Name" name="Tscore" required id="f-name" class="form-control" value="<?php echo $Test_score;?>">
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>One_Day_Score</label>
                   <input type="text" placeholder="" name="ODay_Score" id="f-name" required class="form-control"value="<?php echo $One_Day_Score;?>">
         </div>
		 <div class="form-group has-success">
         <label style=float:left>T20_Score</label>
                   <input type="text" placeholder="" name="T_Score" id="f-name" required class="form-control"value="<?php echo $T20_Score;?>">
         </div> 
		 <div class="form-group has-success">
         <label style=float:left>Srike_Rate</label>
                   <input type="text" placeholder="" name="S_Rate" id="f-name" required class="form-control"value="<?php echo $Srike_Rate;?>">
         </div>
		 <div class="form-group has-success">
         <label style=float:left>Half_Centuries</label>
                   <input type="text" placeholder="" name="H_Centuries" id="f-name" required class="form-control"value="<?php echo $Half_Centuries;?>">
         </div>
		 <div class="form-group has-success">
         <label style=float:left>Centuries</label>
                   <input type="text" placeholder="" name="Centur" id="f-name" required class="form-control"value="<?php echo $Centuries;?>">
         </div>
		 
		  <div class="form-group has-success"o>
         <label style=float:left>Player_Image</label>
                   <center><img src="upload/<?php echo $Player_Image;?>" height=100 width=100 /></center>
	     <input  type="file" name="countimg" class="form-control"/><br><br/>
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Total_Score</label>
                   <input type="text" placeholder="" name="T_Score" id="f-name" required class="form-control"value="<?php echo $Total_Score;?>" >
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Age</label>
                   <input type="text" placeholder="" name="agetxt" id="f-name" required class="form-control" value="<?php echo $Age;?>">
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Team_Name</label>
                   <input type="text" placeholder="" name="TName" id="f-name"  required class="form-control"value="<?php echo $Team_Name;?>" >
         </div>
		  <div class="form-group has-success">
         <label style=float:left>Total_Matches_Played</label>
                   <input type="text" placeholder="" name="T_Matches_Played" id="f-name"  required class="form-control"value="<?php echo $Total_Matches_Played;?>" >
         </div>
		 <div class="form-group has-success">
         <label style=float:left>Taken_Wickets</label>
                   <input type="text" placeholder="" name="T_Wickets" id="f-name"  required class="form-control"value="<?php echo $Taken_Wickets;?>" >
         </div>
		 
                   <input type="submit" name="btnok" name="countxt" value="update"/>
         </div>
	</form>
   </div>
		<div class="gallery-grids">
				
</div>
</section>
	
<?php
    include "footer.php";
?>
