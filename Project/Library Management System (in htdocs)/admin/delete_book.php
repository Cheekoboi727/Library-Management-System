<?php 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		$query = "delete from books where book_no = $_GET[bn]";
		
		$query_run = mysqli_query($connection,$query);
		?>
		<script type="text/javascript">
			alert("Book successfully deleted.")
			window.location.href = "manage-book.php";
		</script>
		<?php
	
?>