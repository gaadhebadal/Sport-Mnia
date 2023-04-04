<?php
    include "header.php";
?>
<?php
 
     $Venue_id=$_REQUEST["Venue_id"];
	 $result=mysqli_connect("localhost","root","","sports");
     $query="Select * from   venue__tbl Where Venue_id='$Venue_id'"; 
	 $c=mysqli_query($result,$query);	
     while($row=mysqli_fetch_array($c))
     {
   
		$Venue_Name=$row['Venue_Name'];
		$Venue_Img=$row['Venue_Img'];
		$Stadium_Capacity=$row['Stadium_Capacity'];
		$Established_Date=$row['Established_Date'];
		$Facilities_Name=$row['Facilities_Name'];
		$Ground_Size=$row['Ground_Size'];
		$Match_Played=$row['Match_Played'];
		$Venue_City=$row['Venue_City'];
		$Venue_Ctry=$row['Venue_Ctry'];
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
			$newimage=$Venue_Img;
		}			
			     $Venue_Name=$_POST['countxt'];
				 $Stadium_Capacity=$_POST['teamtxt'];
				 $Established_Date=$_POST['stadiumtxt'];
				 $Facilities_Name=$_POST['placetxt'];
				 $Ground_Size=$_POST['foodtxt'];
				 $Match_Played=$_POST['areatxt'];
				 $Venue_City=$_POST['vcity'];
				 $Venue_Ctry=$_POST['vcntry'];
		 
				$result=mysqli_connect("localhost","root","","sports");
				$query="update venue__tbl set  Venue_Name='$Venue_Name',Venue_Img='$newimage',Stadium_Capacity='$Stadium_Capacity',Established_Date='$Established_Date',Facilities_Name='$Facilities_Name',Ground_Size='$Ground_Size',Match_Played='$Match_Played',Venue_City='$Venue_City',Venue_Ctry='$Venue_Ctry' Where Venue_id='$Venue_id'";
				$c=mysqli_query($result,$query);
				if($c)
				{	
				  ?>
					<script>
						 alert('Successfully Inserted');
						 window.location="venueinfo.php";
					</script>
					<?php
				}
				else
				{ 
				 echo"Erroorrrr";
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
		<h2>Edit Player Info</h2>
   <div class="gallery">
 <form action="#" method="POST" enctype="multipart/form-data">
	
		 <div class="form-group has-success">
         <label style=float:left>Venue_Name</label>
                  <input type="text" name="countxt" id="f-name" class="form-control" required placeholder="Enter Country Name" value="<?php echo $Venue_Name;?>"/><br/>
		 
		 <div class="form-group has-success"o>
         <label style=float:left>Venue_Img</label>
                   <center><img src="upload/<?php echo $Venue_Img;?>" height=100 width=100 /></center>
	     <input  type="file" name="countimg" class="form-control"/><br><br/>
         </div>
		  <div class="form-group has-success">
         <label style=float:left>Stadium_Capacity</label>
                   <input type="text" placeholder="Enter Country Name" name="teamtxt" required id="f-name" class="form-control" value="<?php echo $Stadium_Capacity;?>">
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Established_Date</label>
                   <input type="text" placeholder="" name="stadiumtxt" id="f-name" required class="form-control"value="<?php echo $Established_Date;?>">
         </div>
		 <div class="form-group has-success">
         <label style=float:left>Facilities_Name</label>
                   <input type="text" placeholder="" name="placetxt" id="f-name" required class="form-control"value="<?php echo $Facilities_Name;?>">
         </div> 
		 <div class="form-group has-success">
         <label style=float:left>Ground_Size</label>
                   <input type="text" placeholder="" name="foodtxt" id="f-name" required class="form-control"value="<?php echo $Ground_Size;?>">
         </div>
		
		 <div class="form-group has-success">
         <label style=float:left>Match_Played</label>
                   <input type="text" placeholder="" name="areatxt" id="f-name" required class="form-control"value="<?php echo $Match_Played;?>">
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Venue_City</label>
                   <input type="text" placeholder="" name="vcity" id="f-name" required class="form-control"value="<?php echo $Venue_City;?>" >
         </div>
		  
		 
		 
		  <div class="form-group has-success">
         <label style=float:left>Venue_Ctry</label>
                   <input type="text" placeholder="" name="vcntry" id="f-name" required class="form-control" value="<?php echo $Venue_Ctry;?>">
         </div>
		 
		<div>
		 
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
