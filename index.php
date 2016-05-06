<!DOCTYPE html>
<html>
<head>
	<title>Home | Toko Batu Permata</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/home.css">
</head>
<body>
	<div class="site-wrapper">
		<div class="site-wrapper-inner">
			<div class="cover-container">
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
								<li class="active"><a href="index.php">Home</a></li>
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

				<div class="inner cover">
					<h1 class="cover-heading">Selamat Datang di Toko Batu Permata</h1>
					<br>
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="2" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="3" class="active"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="img/slide_0.jpg" alt="Selamat Datang di Toko Batu Permata" height="750px">
								<div class="carousel-caption">
									<p>Toko Permata paling laris di Pulau Jawa</p>
								</div>
							</div>
							<div class="item">
								<img src="img/slide_1.jpg" alt="Permata Hijau Safir" height="750px">
								<div class="carousel-caption">
									<h4>Permata Hijau Safir</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<a href="#"> <button class="btn btn-default">Lihat produk</button></a>
								</div>
							</div>
							<div class="item">
								<img src="img/slide_2.jpg" alt="Permata Biru Muda" height="750px">
								<div class="carousel-caption">
									<h4>Permata Biru Muda</h4>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
									<a href="#"> <button class="btn btn-default">Lihat produk</button></a>
								</div>
							</div>
							<div class="item">
								<img src="img/slide_3.jpg" alt="Permata Kuning" height="750px">
								<div class="carousel-caption">
									<h4>Permata Kuning</h4>
									<p>Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur.</p>
									<a href="#"> <button class="btn btn-default">Lihat produk</button></a>
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Sebelumnya</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Selanjutnya</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>