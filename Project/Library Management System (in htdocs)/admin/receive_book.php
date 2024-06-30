<?php 
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "library");
    $query = "DELETE FROM issued_books WHERE student_id = $_GET[bn] AND book_id = $_GET[cn]";
    
    $query_run = mysqli_query($connection, $query);
    if (!$query_run) {
        die("Query execution failed: " . mysqli_error($connection));
    } else {
        echo "Book successfully deleted from issued books.";
    }
?>
<script type="text/javascript">
    alert("Book successfully received.");
    window.location.href = "recieve.php";
</script>
