<?php
if(isset($_POST['btnok']))
{
	$Username=$_POST['usertxt'];
	$password=$_POST['passtxt'];
	$result=mysqli_connect("localhost","root","","sports");
    $query="INSERT into admin_tbl values('','$Username','$password')";
	
	$c=mysqli_query($result,$query);
    if($c)
	{	
        ?>
		<script>
		     alert('Successfully Inserted');
			 window.location="addadmininfo.php";
		</script>
		<?php
	}
	else
	{ 
	   ?>
		<script>
		     alert('SOMETHING GOES WRONG');
			 window.location="admin.php";
		</script>
		<?php
	}

}
?>

<html>
    <form action="#" method="POST">
	
	<input type="text" name="usertxt" required placeholder="Enter Username"/><br/><br/>
	<input type="password" name="passtxt" required placeholder="password"/><br/><br/>
	
	<input type="submit" name="btnok" value="INSERT"/>
	
	</form>
</html>