<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$query = "update users set Name='$_POST[name]',Email='$_POST[email]',Mobile_No='$_POST[mobile]',Address='$_POST[address]' where Email='$_SESSION[email]'" ;
	
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "view_profile.php";
</script>

