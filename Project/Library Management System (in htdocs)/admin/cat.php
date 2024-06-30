<?php 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		$query = "insert into categories values(null,'$_POST[cat_name]')";
		
		$query_run = mysqli_query($connection,$query);
		?>
		<script type="text/javascript">
			alert("Category successfully added.")
			window.location.href = "add_cat.php";
		</script>
		<?php
	
?>