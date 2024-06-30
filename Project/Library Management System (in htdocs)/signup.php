<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
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
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-items">
					<a class="nav-link" href="admin/index.php">Admin Login</a>
				</li>
				<li class="nav-items">
					<a class="nav-link" href="index.php">User Login</a>
				</li>
				<li class="nav-items">
					<a class="nav-link" href="signup.php">Register</a>
				</li>
			</ul>
		</div>
	</nav>
	<br>
	<span><marquee>Hub of all books you need in one place. Library opens at 10am, and closes at 6pm.</marquee></span>
	<br>
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>Library Timing</h5>
			<ul>
				<li>Opening Timing: 10.00 am</li>
				<li>Closing Timing: 6.00 pm</li>
				<li>(Closed on Weekends)</li>
			</ul>
			<h5>What we pride on?</h5>
			<ul>
				<li>Having all the books you need</li>
				<li>Having the best registration system</li>
				<li>Having the best history taking</li>
			</ul>
		</div>
		<div class="col-md-8" id="main_content">
			<center><h3>User Registration Form</h3></center>
			<form action="register.php" method="post">
				<div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Email:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Mobile No:</label>
					<input type="text" name="mobile" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Address:</label>
					<textarea rows="3" cols="40" class="form-control" name="address"></textarea>
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
</body>
</html>