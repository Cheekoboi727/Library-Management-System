<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
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
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-items">
					<a class="nav-link" href="index.php">Admin Login</a>
				</li>
				<li class="nav-items">
					<a class="nav-link" href="../index.php">User Login</a>
				</li>
				<li class="nav-items">
					<a class="nav-link" href="../signup.php">Register</a>
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
			<center><h3>Admin Login Form</h3></center>
			<form action="" method="post">
				<div class="form-group">
					<label for="name">Email:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<br>
				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</form>

			<?php
				session_start();
				if(isset($_POST['login']))
				{
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"library");
						$query = "SELECT * FROM admins WHERE email = '$_POST[email]'";
						$query_run = mysqli_query($connection,$query);
						while($row = mysqli_fetch_assoc($query_run))
						{
							if($row['Email'] == $_POST['email'])
							{
								if($row['Password'] == $_POST['password'])
								{
									$_SESSION['name'] = $row['Name'];
									$_SESSION['email'] = $row['Email'];
									$_SESSION['id'] = $row['Id'];
									header("Location:admin_dashboard.php");
								}
								else
								{
									?>
									<br><br><center><span class="alert alert-danger">Wrong Password</span></center>
									<?php
								}
							}
							else
								echo "Wrong Email ID";

						}
				}
			?>
		</div>
	</div>
</body>
</html>