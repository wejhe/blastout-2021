<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('intern.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("a").on('click', function(event) {
				if (this.hash !== "") {
      				event.preventDefault();
					var hash = this.hash;
					$('html, body').animate({
        				scrollTop: $(hash).offset().top
						}, 800, function(){
   						window.location.hash = hash;
					});
				}
  			});
		});
	</script>
	<title>Blast Out 2021 | Feel The Real</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?php echo base_url('index.php')?>">
				<img src="<?php echo base_url('intern/img/brand.png')?>" width="100" height="30" alt="brand">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="#sambutan">Sambutan</a>
					<a class="nav-item nav-link" href="#keunggulan">Keunggulan</a>
					<a class="nav-item nav-link" href="#tim">Tim</a>
					<a class="nav-item nav-link" href="#testimoni">Testimoni</a>
					<a class="nav-item nav-link" href="#galeri">Galeri</a>
				</div>
			</div>
			<form class="form-inline">
				<a class="btn btn-outline-light my-2 my-sm-0" href="#" role="button">Daftar</a>
				<a class="btn btn-outline-light my-2 my-sm-0" href="#" role="button" style="margin-left:8px;">Masuk</a>
			</form>
		</div>
	</nav>

	<div class="card bg-dark text-white">
  		<img src="<?php echo base_url('intern/img/balairung.jpg')?>" class="card-img" alt="balairung">
  		<div class="card-img-overlay">
			<br><br><br><br><br><br>
			<div class="container">
				<div class="row">
					<div class="col">
						<h4><b>Balairung Klaten Association</b></h4>
						<p>Proudly Present</p>
						<br>
						<h1><strong>BLAST OUT 2021</strong></h1>
						<p align="justify">Sebuah wahana bagi kalian para pejuang PTN tahun 2021 untuk mengasah dan melatih kemampuan serta menunjukkan seberapa siap kalian untuk lolos SBMPTN tahun 2021. Dengan sistem ujian online yang telah disempurnakan, kalian akan merasakan suasana ujian layaknya saat UTBK, sehingga kalian tidak perlu lagi merasa takut untuk menghadapi UTBK yang sebenarnya. <strong>Feel The Real!</strong></p>
						<form>
  							<div class="form-group">
    							<label for="semangat">Tunjukkan semangatmu di sini!</label>
    							<input type="text" class="form-control" id="semangat" aria-describedby="spirit">
    							<small id="spirit" class="form-text text-muted">Contoh : Bismillah 2021 Lolos UGM! - Namamu/Asal Sekolah</small>
  							</div>
							<button type="submit" class="btn btn-outline-light">Submit</button>
						</form>
					</div>
					<div class="col">
						<p align="right">
							<img class="rounded" src="<?php echo base_url('intern/img/ketua.jpg')?>" width="500" height="400" alt="brand">
						</p>
					</div>
				</div>
			</div>
  		</div>
	</div>

	<div class="jumbotron" id="sambutan">
		<div class="container">
			<br><br>
			<div class="row">
				<div class="col">
					<img class="rounded" src="<?php echo base_url('intern/img/ketua.jpg')?>" width="500" height="400" alt="brand">
				</div>
				<div class="col">
					<h4><b>Sambutan Ketua Panitia Blast Out 2021</b></h4>
					<br>
					<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed arcu eget sem accumsan consectetur et tempor nunc. Quisque fringilla elit eu nisi tempus porttitor. Etiam elit velit, vulputate et augue eu, interdum commodo elit. Vestibulum id justo lorem. Quisque id nunc nec magna iaculis facilisis ac ut felis. Ut commodo eros sit amet lorem consequat, sed fermentum orci feugiat. Nunc pellentesque metus augue, nec aliquam nunc consequat ac. Suspendisse felis turpis, maximus ut purus sed, consectetur volutpat sapien. Cras porta gravida venenatis. Duis commodo vitae ligula et rutrum. Vestibulum bibendum purus et interdum mollis. Vivamus tempus, lorem a mollis ullamcorper, felis est feugiat magna, sit amet accumsan libero purus ac arcu. Duis pharetra lorem et commodo elementum.</p>
					<br>
					<p align="right"><strong>Yoel Adisatya - Teknik Geomatika 2018</strong></p>
				</div>
 			</div>
		</div>
	</div>

	<!--<div class="container">
		<div class="card-deck">
			<div class="card">
				<img src="..." class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
				<div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div>
			</div>
			<div class="card">
				<img src="..." class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
				<div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div>
			</div>
			<div class="card">
				<img src="..." class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
				<div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div>
			</div>
		</div>
	</div>-->
</body>
</html>