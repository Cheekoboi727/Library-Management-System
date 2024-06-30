<?php 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		$query = "insert into books values(null,'$_POST[book_name]','$_POST[author_name]','$_POST[book_no]','$_POST[category_name]')";
		
		$query_run = mysqli_query($connection,$query);
		?>
		<script type="text/javascript">
			alert("Book successfully added.")
			window.location.href = "add_book.php";
		</script>
		<?php
	
?>


