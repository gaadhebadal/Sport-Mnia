<?php
 
     $Country_Id=$_REQUEST["Country_Id"];
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
		if(isset($_FILES['flimg']['Country_Name']))
		{
			$newimage=$_FILES['flimg']['Country_Name'];
			move_uploaded_file($_FILES['Country_Img']['tmp_name'],"upload/".$Country_Img);
		}
		else
		{
			$newimage=$Country_Img;
		}			
			     $Country_Name=$_POST['countxt'];
				 $Team_Name=$_POST['teamtxt'];
				 $Stadium_Details=$_POST['stadiumtxt'];
				 $Country_Img=$_FILES['countimg'];
				 $Famous_Places=$_POST['placetxt'];
				 $Famous_Food=$_POST['foodtxt'];
				 $Country_Area=$_POST['areatxt'];
		 
				$result=mysqli_connect("localhost","root","","sports");
				$query="update cntry_tbl set  Country_Name='$Country_Name',Team_Name='$Team_Name',Stadium_Details='$Stadium_Details',Country_Img='$Country_Img',Famous_Places='$Famous_Places',Famous_Food='$Famous_Food',Country_Area='$Country_Area' where Country_Id='$Country_Id'";
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
?><html>
    <form action="#" method="POST" enctype="multipart/form-data">
	<input type="text" name="countxt" value="<?php echo $Country_Name;?>" required placeholder="Enter Country Name"/><br/><br/>
	<input type="text" name="teamtxt" value="<?php echo $Team_Name;?>" required placeholder="Enter Team Name"/><br/><br/>
	<input type="text" name="stadiumtxt" value="<?php echo $Stadium_Details;?>" required placeholder="Enter Stadium Details"/><br/><br/>
	<label>Enter Country Image:</label></br>
	<img src="upload/<?php echo $Country_Img;?>" height=100 width=100/>
	<input  type="file" name="countimg"/><br><br/>
	<input type="text" name="placetxt" value="<?php echo $Famous_Places;?>" required placeholder="Enter Famous Places"/><br/><br/>
	<input type="text" name="foodtxt" value="<?php echo $Famous_Food;?>" required placeholder="Enter Famous Food"/><br/><br/>
	<input type="text" name="areatxt" value="<?php echo $Country_Area;?>"  required placeholder="Enter Country Area"/><br/><br/>
	
	<input type="Submit" name="btnok" value="INSERT"/>
	</form>
<?php
    include "footer.php";
?>
