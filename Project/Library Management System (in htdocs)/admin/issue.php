<?php 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
    	$date = date("Y-m-d");
    	$query = "Select Id,Name,book_id,book_no,book_name,author_name from users,books where Name = '$_POST[student_name]' and book_name = '$_POST[book_name]'";
			
		$query_run = mysqli_query($connection,$query);
		
		while($row = mysqli_fetch_assoc($query_run))
		{
			$query = "insert into issued_books values ('$row[Id]','$row[Name]','$row[book_id]','$row[book_no]','$row[book_name]','$row[author_name]','$date')";						
			$insert_query_run = mysqli_query($connection,$query);
					
		}
?>

<script type="text/javascript">
			alert("Book issued added.")
			window.location.href = "issue_book.php";
</script>

		