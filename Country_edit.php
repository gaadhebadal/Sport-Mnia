<?php
    include "header.php";
?>

<?php
 
     $Country_Id=$_REQUEST['cid'];
	 $result=mysqli_connect("localhost","root","","sports");
	 $query="Select * from  cntry_tbl Where Country_Id='$Country_Id'"; 
     $c=mysqli_query($result,$query);	
     while($row=mysqli_fetch_array($c))
     {
   
		$Country_Name=$row['Country_Name'];
		$Team_Name=$row['Team_Name'];
		$Stadium_Details=$row['Stadium_Details'];
		$Country_Img=$row['Country_Img'];
		$Famous_Places=$row['Famous_Places'];
		$Famous_Food=$row['Famous_Food'];
		$Country_Area=$row['Country_Area'];
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
			$newimage=$Country_Img;
		}			
			     $Country_Name=$_POST['countxt'];
				 $Team_Name=$_POST['teamtxt'];
				 $Stadium_Details=$_POST['stadiumtxt'];
				 $Famous_Places=$_POST['placetxt'];
				 $Famous_Food=$_POST['foodtxt'];
				 $Country_Area=$_POST['areatxt'];
		 
				$result=mysqli_connect("localhost","root","","sports");
				$query="update cntry_tbl set  Country_Name='$Country_Name',Team_Name='$Team_Name',Stadium_Details='$Stadium_Details',Country_Img='$newimage',Famous_Places='$Famous_Places',Famous_Food='$Famous_Food',Country_Area='$Country_Area' Where Country_Id='$Country_Id'";
				$c=mysqli_query($result,$query);
				if($c)
				{	
				  ?>
					<script>
						 alert('Successfully Inserted');
						 window.location="countryinfo.php";
					</script>
					<?php
				}
				else
				{ 
				 echo"Erroorrrr";
				}
					
}
?><!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		<div class="card-title" align="center">
		<h2>Edit Country Info</h2>
   <div class="gallery">
 <form action="#" method="POST" enctype="multipart/form-data">
	
		 <div class="form-group has-success">
         <label style=float:left>Country_Name</label>
                  <input type="text" name="countxt" id="f-name" class="form-control" required placeholder="Enter Country Name" value="<?php echo $Country_Name;?>"/><br/>
		 
		  <div class="form-group has-success">
         <label style=float:left>Team_Name</label>
                   <input type="text" placeholder="Enter Country Name" name="teamtxt" required id="f-name" class="form-control" value="<?php echo $Team_Name;?>">
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Stadium_Detalis</label>
                   <input type="text" placeholder="" name="stadiumtxt" id="f-name" required class="form-control"value="<?php echo $Stadium_Details;?>">
         </div>
		 
		  <div class="form-group has-success"o>
         <label style=float:left>Country_Img</label>
                   <center><img src="upload/<?php echo $Country_Img;?>" height=100 width=100 /></center>
	<input  type="file" name="countimg" class="form-control"/><br><br/>
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Famous_Places</label>
                   <input type="text" placeholder="" name="placetxt" id="f-name" required class="form-control"value="<?php echo $Famous_Places;?>" >
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Famous_Food</label>
                   <input type="text" placeholder="" name="foodtxt" id="f-name" required class="form-control" value="<?php echo $Famous_Food;?>">
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Country_Area</label>
                   <input type="text" placeholder="" name="areatxt" id="f-name"  required class="form-control"value="<?php echo $Country_Area;?>" >
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
