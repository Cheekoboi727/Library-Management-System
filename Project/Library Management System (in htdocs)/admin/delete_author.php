<?php 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		$query = "delete from authors where author_id = $_GET[bn]";
		
		$query_run = mysqli_query($connection,$query);
		?>
		<script type="text/javascript">
			alert("Author successfully deleted.")
			window.location.href = "manage_author.php";
		</script>
		<?php
	
?>