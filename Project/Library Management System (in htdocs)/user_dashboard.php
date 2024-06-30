<?php
	session_start();
	function get_user_issue(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		$user_issued_book = 0;
		$query = "SELECT count(*) as user_issued_book from issued_books where student_id = $_SESSION[id]";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_issued_book = $row['user_issued_book'];
		}
		return ($user_issued_book);
	}
?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>

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
	<span><marquee>Hub of all books you need in one place. Library opens at 10am, and closes at 6pm.</marquee></span><br><br><br><br><br>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-2" >
			<div class="card bg-light" style="width:300px">
				<div class="card-header"><center>Issued Books</center></div>
				<div class="card-body">
					<p class="card-text">No of issued books:<?php echo get_user_issue() ?></p>
					<a href="issued_books.php" class="btn btn-danger"  >View Issued Books</a>
				</div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>

</body>
</html>