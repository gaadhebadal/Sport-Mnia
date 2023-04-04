<?php
if(isset($_POST['btnok']))
{
	$F_Subject =$_POST['fsub'];
	$User_Name =$_POST['username'];
	$Email =$_POST['email'];
	$Contact_no =$_POST['C_no'];
	
	
	$result=mysqli_connect("localhost","root","","sports");
    $query="INSERT into feedback__tbl values('','$F_Subject','$User_Name','$Email','$Contact_no')";
	
	$c=mysqli_query($result,$query);
    if($c)
	{	
         ?>
		<script>
		     alert('Successfully Inserted');
			 window.location="feedbackinfo.php";
		</script>
		<?php
	}
	else
	{
		 ?>
		<script>
		     alert('Something Goes Wrong');
			 window.location="Feed_back.php";
		</script>
		<?php
	}

}
?>

<html>
    <form action="#" method="POST">
	<input type="text" name="fsub" required placeholder="Enter Feedback Subject"/><br/><br/>
	<input type="text" name="username" required placeholder="Enter User Name"/><br/><br/>
	<input type="text" name="email" required placeholder="Enter email"/><br/><br/>
    <input type="text" name="C_no" required placeholder="Enter Contact no"/><br/><br/>
	
	<input type="submit" name="btnok" value="INSERT"/>
	
	</form>
</html>