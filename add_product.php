<!DOCTYPE html>
<html>
<head>
	<title>Tambah Produk | Toko Batu Permata</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" style="padding-top:7px;">
					<span><img alt="Toko Batu Permata" src="img/diamond.png" width="35px"></span> Admin Page
				</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="logout_auth.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div>
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="dashboard.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li class="parent">
				<a href="view_product.php">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Produk 
				</a>
				<ul class="children collapse in" id="sub-item-1" aria-expanded="true">
					<li>
						<a class="active" href="add_product.php">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Tambah Produk
						</a>
					</li>
					<li>
						<a class="" href="view_product.php">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Lihat Produk
						</a>
					</li>
					<li>
						<a class="" href="edit_product.php">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Ubah Produk
						</a>
					</li>
                    <li>
						<a class="" href="delete_product.php">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Delete Produk
						</a>
					</li>
                    <li>
						<a class="" href="add_picture.php">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Tambah Gambar
						</a>
					</li>
                    <li>
						<a class="" href="view_picture.php">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Lihat Gambar
						</a>
					</li>
				</ul>
			</li>
            <li class="parent">
				<a href="view_comment.php">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Komentar
				</a>
			</li>
            <li class="parent">
				<a href="view_transaksi.php">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Transaksi
				</a>
			</li>
		</ul>
	</div>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Admin</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tambah Produk</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
                    <?php 
                        include "connect.php";
                        $sql=mysql_query("SELECT MAX(ID_PRODUK) FROM PRODUK;");
                        $id=$sql+1;
					echo '<div class="panel-heading">Produk ID : '.$id.'</div>';
                    ?>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="POST" action="insert_product.php">
								<div class="form-group">
									<label>Nama Produk</label>
									<input class="form-control" placeholder="Nama Produk" name="nama_produk" required>
								</div>
								<div class="form-group">
									<label>Harga Produk</label>
									<input class="form-control" placeholder="Harga Produk" type="number" name="harga_produk" required>
								</div>
								<div class="form-group">
									<label>Deskripsi Produk</label>
									<textarea class="form-control" rows="5" placeholder="Deskripsi Produk" name="deskripsi_produk"></textarea>
								</div>
								
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/lumino.glyphs.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>
</html>