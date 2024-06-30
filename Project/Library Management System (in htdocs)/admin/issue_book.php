<?php
	require("functions.php");
	session_start();

	$id=0;
	$book_id=0;
	$book_name="";
	$book_no="";
	$author_name = 0;

?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Issue Book</title>

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

	<div class= "row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="issue.php" method="post">
				<div class="form-group">
					<label>Book Name:</label>
					<select class="form-control" name="book_name">
						<option>-Select Book-</option>
						<?php
							$connection = mysqli_connect("localhost","root","");
							$db = mysqli_select_db($connection,"library");
							$query = "SELECT book_name FROM books";
							$query_run = mysqli_query($connection,$query);
							while($row = mysqli_fetch_assoc($query_run))
							{
								?>
								<option><?php echo $row['book_name'];?></option>
								<?php
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Student Name:</label>
					<select class="form-control" name="student_name">
						<option>-Select Student-</option>
						<?php
							$connection = mysqli_connect("localhost","root","");
							$db = mysqli_select_db($connection,"library");
							$query = "SELECT Name FROM users";
							$query_run = mysqli_query($connection,$query);
							while($row = mysqli_fetch_assoc($query_run))
							{
								?>
								<option><?php echo $row['Name'];?></option>
								<?php
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Issue Date:</label>
					<input type="text" name="issuedate" class="form-control" value="<?php echo date("y-m-d");?>" required="" disabled>
				</div>
				<br>
				<button class="btn btn-success" name="add-book">Issue Book</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>