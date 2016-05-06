<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Masuk | Toko Batu Permata</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#" style="padding-top:7px;">
					<img alt="Toko Batu Permata" src="img/diamond.png" width="35px">
				</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-6" aria-expanded="false" style="height: 1px;">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Nav1</a></li>
					<li><a href="#">Nav2</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" asia-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Dropdown1</a></li>
							<li><a href="#">Dropdown2</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container" style="padding-top:100px">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<p style="text-align:center; font-size:75px; margin:0px"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></p>
			</div>
			<div class="col-sm-3"></div>
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<form action="login_auth.php" class="form" method="post">
					<label for="inputUsername" class="sr-only">Username</label>
					<input type="text" id="inputUsername" name="username" class="form-control" placeholder="username" required >
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
					<br><br>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
				</form>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
	<footer class="footer">
		<div class="container">
			<p class="text-muted" style="text-align:right;">Copyright &copy; Toko Batu Permata - 2016</p>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>