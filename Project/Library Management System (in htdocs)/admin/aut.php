<?php 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		$query = "insert into authors values(null,'$_POST[author_name]')";
		
		$query_run = mysqli_query($connection,$query);
		?>
		<script type="text/javascript">
			alert("Author successfully added.")
			window.location.href = "add_author.php";
		</script>
		<?php
	
?>