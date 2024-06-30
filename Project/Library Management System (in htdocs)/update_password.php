<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$query = "select * from users where Email='$_SESSION[email]'" ;
	
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run))
	{
		$password = $row['Password'];
	}
	if ($password == $_POST['old_password'])
	{
		$query = "update users set Password = '$_POST[new_password]' where Email = '$_SESSION[email]'";
		$query_run = mysqli_query($connection,$query);
		
	}
	else
	{
	?><script type="text/javascript">
		alert("Wrong Password");
		window.location.href = "change_password.php";
	</script>
	<?php
		
	}
?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "user_dashboard.php";
</script>

