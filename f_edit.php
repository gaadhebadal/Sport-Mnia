<?php
 
     $F_Id=$_REQUEST["F_Id"];
	 $result=mysqli_connect("localhost","root","","sports");
     if(isset($_POST['btnok']))
     {
		 $F_Sub=$_POST['fsub'];
		 $U_Name=$_POST['username'];
		 $email=$_POST['email'];
		 $F_con=$_POST['C_no'];
		 
		 $qq="UPDATE feedback__tbl set F_subject='$F_Sub',User_Name='$U_Name',Email='$email',Contact_no='$F_con' where F_Id='$F_Id'";
		 
		 $c=mysqli_query($result,$qq);
		 if($c)
		 {
			 ?>
			 <script>
			 alert('Successfully Updatedd');
			 window.location="f_view.php";
			 </script>
			 <?php
		 }
		 else
		 {
			 ?>
			 <script>
			 alert('Errorr');
			 window.location="f_view.php";
			 </script>
			 <?php
		 }
     }	
	 
	 $query="Select * from feedback__tbl where F_Id='$F_Id'";
	 $c=mysqli_query($result,$query);
	 while($row=mysqli_fetch_array($c))
	 {
		 $F_subject=$row['F_subject'];
		 $User_Name=$row['User_Name'];
		 $Email=$row['Email'];
		 $Contact_no=$row['Contact_no'];
		 
	 }

?>

<html>
    <form action="#" method="POST">
	<input type="text" name="fsub" value="<?php echo $F_subject;?>"  required placeholder="Enter Feedback Subject"/><br/><br/>
	<input type="text" name="username" value="<?php echo $User_Name;?>"  required placeholder="Enter User Name"/><br/><br/>
	<input type="varchar" name="email"value="<?php echo $Email;?>"  required placeholder="Enter email"/><br/><br/>
    <input type="text" name="C_no" value="<?php echo $Contact_no;?>" required placeholder="Enter Contact no"/><br/><br/>
	
	<input type="submit" name="btnok" value="INSERT"/>
	
	</form>
</html>