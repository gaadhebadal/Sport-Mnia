<?php
 
     $Team_id=$_REQUEST["Team_id"];
	 $result=mysqli_connect("localhost","root","","sports");
	 $query="Select * from  team__tbl Where Team_id='$Team_id'"; 
     $c=mysqli_query($result,$query);	
     while($row=mysqli_fetch_array($c))
     {
   
				$Team_Name=$row['Team_Name'];
				$Player_Name=$row['Player_Name'];
				$Coach_Name=$row['Coach_Name'];
				$Team_Owner=$row['Team_Owner'];
				$Team_Sponser=$row['Team_Sponser'];
				$Physio_Name=$row['Physio_Name'];
				$Playing11_Name=$row['Playing11_Name'];
				$Substituant_Name=$row['Substituant_Name'];
				$Team_Img=$row['Team_Img'];
				$Team_Avg_Win=$row['Team_Avg_Win'];
	 } 		 
     if(isset($_POST['btnok']))
     {
		if(isset($_FILES['flimg']['Country_Name']))
		{
			$newimage=$_FILES['flimg']['Team_Img'];
			move_uploaded_file($_FILES['Team_Img']['tmp_name'],"upload/".$Team_Img);
		}
		else
		{
			$newimage=$Team_Img;
		}			
				
				$Team_Name=$_POST['T_Name'];
				$Player_Name=$_POST['P_Name'];
				$Coach_Name=$_POST['C_Name'];
				$Team_Owner=$_POST['T_Owner'];
				$Team_Sponser=$_POST['T_Sponser'];
				$Physio_Name=$_POST['P_Name'];
				$Playing11_Name=$_POST['Pl_Name'];
				$Substituant_Name=$_POST['S_Name'];
				$Team_Img=$_FILES['T_Img']['name'];
				$Team_Avg_Win=$_POST['T_Avg_Win'];
					 
				$result=mysqli_connect("localhost","root","","sports");
				$query="update team__tbl set values Team_Name='$Team_Name',Player_Name='$Player_Name',Coach_Name='$Coach_Name' ,Team_Owner='$Team_Owner', Team_Sponser='$Team_Sponser' ,Physio_Name='$Physio_Name', Playing11_Name='$Playing11_Name', Substituant_Name='$Substituant_Name' ,Team_Img='$Team_Img', Team_Avg_Win='$Team_Avg_Win'";
		 
				$c=mysqli_query($result,$query);
				if($c)
				{	
				  ?>
					<script>
						 alert('Successfully Inserted');
						 window.location="teminfo.php";
					</script>
					<?php
				}
				else
				{ 
				 echo"Erroorrrr";
				}
					
}
?>
<html>
    <form action="#" method="POST" enctype="multipart/form-data">
	<input type="text" name="T_Name" required placeholder="Enter Team_Name"/><br/><br/>
	<input type="text" name="P_Name" required placeholder="Enter Player_Name"/><br/><br/>
	<input type="text" name="C_Name" required placeholder="Enter Coach_Name"/><br/><br/>
	<input type="text" name="T_Owner" required placeholder="Enter Team_Owner"/><br/><br/>
	<input type="text" name="T_Sponser" required placeholder="Enter Team_Sponser"/><br/><br/>
	<input type="text" name="P_Name" required placeholder="Enter Physio_Name"/><br/><br/>
	<input type="text" name="Pl_Name" required placeholder="Enter Playing11_Name"/><br/><br/>
	<input type="text" name="S_Name" required placeholder="Enter Substituant_Name"/><br/><br/>
	<label>Enter Team Image:</label></br>	
	<img src="upload/<?php echo $Team_Img;?>" height=100 width=100/>
	 <img  type="file" name="img"/><br><br/>
	<input type="text" name="T_Avg_Win" required placeholder="Enter Team_Avg_Win"/><br/><br/>
	
	
	<input type="submit" name="btnok" value="INSERT"/>
	
	</form>
</html>