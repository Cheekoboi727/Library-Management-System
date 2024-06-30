<?php 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		$query = "delete from categories where category_id = $_GET[bn]";
		
		$query_run = mysqli_query($connection,$query);
		?>
		<script type="text/javascript">
			alert("Category successfully deleted.")
			window.location.href = "manage_cat.php";
		</script>
		<?php
	
?>