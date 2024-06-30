<?php
	session_start();

	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$name = "";
	$id = 0;
	$no ="";
	$author = "";
	$student = "";
	$date = "";
	$query = "SELECT book_id,book_name,book_no,author_name,issue_date FROM issued_books where student_id = $_SESSION[id]";

?>	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Issued Books</title>

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
				<a class="navbar-brand" href="user_dashboard.php">Library Management System</a>
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
	<br>
	<span><marquee>Hub of all books you need in one place. Library opens at 10am, and closes at 6pm.</marquee></span><br><br>


	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form>
				<table class="table" width="900px" style="text-align: center">
					<tr>
						<th scope="col">Book ID:</th>
						<th scope="col">Book Name:</th>
						<th scope="col">Book No:</th>
						<th scope="col">Author:</th>
						<th scope="col">Issue Date:</th>
					</tr>
					<?php 
						$query_run = mysqli_query($connection,$query);
						while($row = mysqli_fetch_assoc($query_run))
						{
							$id = $row['book_id'];
							$name = $row['book_name'];
							$no = $row['book_no'];
							$author = $row['author_name'];
							$date = $row['issue_date'];
							?>
							<tr>
								<th scope="row"><?php echo $id; ?></th>
								<td><?php echo $name; ?></td>
								<td><?php echo $no; ?></td>
								<td><?php echo $author; ?></td>
								<td><?php echo $date; ?></td>
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