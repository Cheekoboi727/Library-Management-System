<?php
	require("functions.php");
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$name = "";
	$no = 0;
	$author ="";
	$cat = "";
	$query = "SELECT book_name,book_no,books.author_name,books.category_name FROM books";
	

?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registered Books</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
		#side_bar
		{
			background-color: whitesmoke;
			padding: 50px;
			width: 300px;
			height: 450px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<span style=""><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span>	
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php">Library Management System</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">

					<a class="nav-link dropdown-toggle" data-toggle="dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav>
	
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
		<div class="container-fluid">
			<ul class="nav navbar-nav navbar-center">
				<li class="nav-item">
					<a href="admin_dashboard.php" class="nav-link">Dashboard</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" type="button" data-bs-toggle="dropdown">Books</a>
					<div class="dropdown-menu">
						<a href="add_book.php" class="dropdown-item">Add New Book</a>
						<a href="manage-book.php" class="dropdown-item">Manage Books</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" type="button" data-bs-toggle="dropdown">Category</a>
					<div class="dropdown-menu">
						<a href="add_cat.php" class="dropdown-item">Add New Category</a>
						<a href="manage_cat.php" class="dropdown-item">Manage Categories</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" type="button" data-bs-toggle="dropdown">Author</a>
					<div class="dropdown-menu">
						<a href="add_author.php" class="dropdown-item">Add New Author</a>
						<a href="manage_author.php" class="dropdown-item">Manage Authors</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" type="button" data-bs-toggle="dropdown">Issue</a>
					<div class="dropdown-menu">
						<a href="issue_book.php" class="dropdown-item">Issue Book</a>
						<a href="recieve.php" class="dropdown-item">Recieve Book</a>
					</div>
				</li>
			</ul>
	</nav>		
	<br>
	<span><marquee>Hub of all books you need in one place. Library opens at 10am, and closes at 6pm.</marquee></span><br><br>

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form>
				<table class="table" width="900px" style="text-align: center">
					<tr>
						<th scope="col">Book No:</th>
						<th scope="col">Book Name:</th>
						<th scope="col">Author:</th>
						<th scope="col">Category:</th>
					</tr>
					<?php 
						$query_run = mysqli_query($connection,$query);
					
   

						while($row = mysqli_fetch_assoc($query_run))
						{
							$name = $row['book_name'];
							$no = $row['book_no'];
							$author = $row['author_name'];
							$cat = $row['category_name'];
							?>
							<tr>
							<th scope="row"><?php echo $no; ?></th>
							<td><?php echo $name; ?></td>
							<td><?php echo $author; ?></td>
							<td><?php echo $cat; ?></td>
						</tr>
							<?php
						}
					?>
				</table>
			</form>
		</div>
		<div class="col-md-2"></div>
	</div>

</body>
</html>