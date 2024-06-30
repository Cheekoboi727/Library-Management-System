<?php
	require("functions.php");
	session_start();

?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>

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
		<div class="col-md-3" >
			<div class="card bg-light" style="width:300px">
				<div class="card-header">Registered Users</div>
				<div class="card-body">
					<p class="card-text">No of total users: <?php echo get_user_count();?></p>
					<a href="regusers.php" class="btn btn-danger" >View Registered Users</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-light" style="width:300px">
				<div class="card-header">Available Books</div>
				<div class="card-body">
					<p class="card-text">No of available books: <?php echo get_book_count()?></p>
					<a href="regbooks.php" class="btn btn-primary">View available books</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-light" style="width:300px">
				<div class="card-header">Registered Categories</div>
				<div class="card-body">
					<p class="card-text">No of categories: <?php echo get_category_count();?></p>
					<a href="regcat.php" class="btn btn-success">View Categories</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-light" style="width:300px">
				<div class="card-header">Registered Authors</div>
				<div class="card-body">
					<p class="card-text">No of registered authors: <?php echo get_author_count();?></p>
					<a href="regaut.php" class="btn btn-info" >View registered authors</a>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-3">
			<div class="card bg-light" style="width:300px">
				<div class="card-header">Issued Books</div>
				<div class="card-body">
					<p class="card-text">No of issued books: <?php echo get_issued_book_count();?></p>
					<a href="issuebook.php" class="btn btn-warning">View issued books</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>