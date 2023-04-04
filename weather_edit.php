<?php
    include "header.php";
?>
<?php
 
     $W_Id=$_REQUEST["W_Id"];
	 $result=mysqli_connect("localhost","root","","sports");
     if(isset($_POST['btnok']))
     {
   	$SName=$_POST['Season_Name'];
	$Temp=$_POST['Tempreture'];
	$Humi=$_POST['Humidity'];
	$RainPerc=$_POST['Rain_Percentage'];
	$Visib=$_POST['Visibility'];
	
    	 $qq="UPDATE   weather__tbl set Season_Name='$SName',Tempreture='$Temp',Humidity='$Humi' ,	Rain_Percentage='$RainPerc', 	Visibility='$Visib' where W_Id='$W_Id'";
		 
		 $c=mysqli_query($result,$qq);
		 if($c)
		 {
			 ?>
			 <script>
			 alert('Successfully Updatedd');
			 window.location="weatherinfo.php";
			 </script>
			 <?php
		 }
		 else{
			 ?>
			 <script>
			 alert('Errorr');
			 </script>
			 <?php
		 }
     }	
	 
	 $query="Select * from weather__tbl where W_Id='$W_Id'";
	 $c=mysqli_query($result,$query);
	 while($row=mysqli_fetch_array($c))
	 {
	$Season_Name=$row['Season_Name'];
	$Tempreture=$row['Tempreture'];
	$Humidity=$row['Humidity'];
	$Rain_Percentage=$row['Rain_Percentage'];
	$Visibility=$row['Visibility'];
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
         <label style=float:left>Season_Name</label>
                  <input type="text" name="Season_Name" id="f-name" class="form-control" required placeholder="Enter Country Name" value="<?php echo $Season_Name;?>"/><br/>
		 
		 <div class="form-group has-success">
         <label style=float:left>Tempreture</label>
                   <input type="text" placeholder="" name="Tempreture" id="f-name" required class="form-control"value="<?php echo $Tempreture;?>">
         </div>
		 <div class="form-group has-success">
         <label style=float:left>Humidity</label>
                   <input type="text" placeholder="" name="Humidity" id="f-name" required class="form-control"value="<?php echo $Humidity;?>">
         </div>
		 
		  <div class="form-group has-success">
         <label style=float:left>Rain_Percentage</label>
                   <input type="text" placeholder="" name="Rain_Percentage" id="f-name" required class="form-control"value="<?php echo $Rain_Percentage;?>" >
         </div>
		  
		 
		 
		  <div class="form-group has-success">
         <label style=float:left>Visibility</label>
                   <input type="text" placeholder="" name="Visibility" id="f-name" required class="form-control" value="<?php echo $Visibility;?>">
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
