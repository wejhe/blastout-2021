<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('intern.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
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
					<script>
						$(document).ready(function(){
							$("a").on('click', function(event) {
								if (this.hash !== "") {
									event.preventDefault();
									var hash = this.hash;
									$('html, body').animate({
										scrollTop: $(hash).offset().top
										}, 1000, function(){
										window.location.hash = hash;
									});
								}
							});
						});
					</script>
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
							<button type="submit" class="btn btn-outline-light">Kirim</button>
						</form>
					</div>
					<div class="col">
						<p align="right">
							<img class="rounded" src="<?php echo base_url('intern/img/logo.png')?>" width="500" height="500" alt="brand">
						</p>
					</div>
				</div>
			</div>
  		</div>
	</div>

	<div class="jumbotron" id="sambutan">
		<div class="container">
			<br><br><br><br><br>
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
			<br><br><br><br><br>
		</div>
	</div>

	<div class="container" id="keunggulan">
		<br><br><br><br><br>
		<h4 align="center"><b>Keunggulan Blast Out 2021</b></h4>
		<br><br>
		<div class="card-deck">
			<div class="card">
				<img src="<?php echo base_url('intern/img/piala.jpg')?>" class="card-img-top" alt="piala">
				<div class="card-body">
					<h5 align="center" class="card-title"><b>Ranking Nasional</b></h5>
					<p align="justify" class="card-text">Peserta dapat mengetahui posisi nilainya dibandingkan dengan peserta Try Out lain dari hampir seluruh daerah di Indonesia.</p>
				</div>
			</div>
			<div class="card">
				<img src="<?php echo base_url('intern/img/pulpen.jpg')?>" class="card-img-top" alt="pulpen">
				<div class="card-body">
					<h5 align="center" class="card-title"><b>Feel The Real</b></h5>
					<p align="justify" class="card-text">Peserta akan merasakan suasana ujian layaknya saat UTBK, sehingga akan lebih siap dalam menghadapi UTBK yang sebenarnya.</p>
				</div>
			</div>
			<div class="card">
				<img src="<?php echo base_url('intern/img/komputer.jpg')?>" class="card-img-top" alt="komputer">
				<div class="card-body">
					<h5 align="center" class="card-title"><b>Sistem Ujian Online</b></h5>
					<p align="justify" class="card-text">Peserta akan mengerjakan soal-soal Try Out secara online dengan menggunakan komputer, layaknya UTBK yang sebenarnya.</p>
				</div>
			</div>
			<div class="card">
				<img src="<?php echo base_url('intern/img/gedung.jpg')?>" class="card-img-top" alt="gedung">
				<div class="card-body">
					<h5 align="center" class="card-title"><b>Gadjah Mada Fair</b></h5>
					<p align="justify" class="card-text">Peserta dapat mengikuti Gadjah Mada Fair, sebuah acara yang menampilkan stand seluruh fakultas yang ada di UGM.</p>
				</div>
			</div>
		</div>
		<br><br><br><br><br>
	</div>

	<div class="jumbotron" id="tim">
		<div class="container">
			<br><br><br>
			<h4 align="center"><b>Panitia Blast Out 2021</b></h4>
			<br><br>
			<div class="card-deck">
				<div class="card">
					<img src="<?php echo base_url('intern/img/pictsekre.jpg')?>" class="card-img-top" alt="sekretaris">
					<div class="card-body">
						<h5 align="center" class="card-title"><b>Sekretaris</b></h5>
						<p align="center" class="card-text">Francisca O M</p>
					</div>
				</div>
				<div class="card">
					<img src="<?php echo base_url('intern/img/pictketua.jpg')?>" class="card-img-top" alt="ketua">
					<div class="card-body">
						<h5 align="center" class="card-title"><b>Ketua Panitia</b></h5>
						<p align="center" class="card-text">Yoel Adisatya</p>
					</div>
				</div>
				<div class="card">
					<img src="<?php echo base_url('intern/img/pictwakil.jpg')?>" class="card-img-top" alt="wakil">
					<div class="card-body">
						<h5 align="center" class="card-title"><b>Wakil Ketua</b></h5>
						<p align="center" class="card-text">Miraq</p>
					</div>
				</div>
				<div class="card">
					<img src="<?php echo base_url('intern/img/pictbendahara.jpg')?>" class="card-img-top" alt="bendahara">
					<div class="card-body">
						<h5 align="center" class="card-title"><b>Bendahara</b></h5>
						<p align="center" class="card-text">Tetria Y M</p>
					</div>
				</div>
			</div>
			<br>
			<div class="card-deck">
				<div class="card">
					<img src="<?php echo base_url('intern/img/pictacara.jpg')?>" class="card-img-top" alt="acara">
					<div class="card-body">
						<h5 align="center" class="card-title"><b>Divisi Acara</b></h5>
						<p align="center" class="card-text">Koordinator :<br>Wahyu dan Laras</p>
					</div>
				</div>
				<div class="card">
					<img src="<?php echo base_url('intern/img/pictit.jpg')?>" class="card-img-top" alt="it">
					<div class="card-body">
						<h5 align="center" class="card-title"><b>Divisi IT</b></h5>
						<p align="center" class="card-text">Koordinator :<br>Bagus Satrio Nugroho</p>
					</div>
				</div>
				<div class="card">
					<img src="<?php echo base_url('intern/img/pictticketing.jpg')?>" class="card-img-top" alt="ticketing">
					<div class="card-body">
						<h5 align="center" class="card-title"><b>Divisi Ticketing</b></h5>
						<p align="center" class="card-text">Koordinator :<br>Argha H D</p>
					</div>
				</div>
			</div>
			<br>
			<div class="card-deck">
				<div class="card">
					<img src="<?php echo base_url('intern/img/pictperkap.jpg')?>" class="card-img-top" alt="perkap">
					<div class="card-body">
						<h5 align="center" class="card-title"><b>Divisi Perkap</b></h5>
						<p align="center" class="card-text">Koordinator :<br>Abyan Nadzir I</p>
					</div>
				</div>
				<div class="card">
					<img src="<?php echo base_url('intern/img/pictdanus.jpg')?>" class="card-img-top" alt="sponsorship">
					<div class="card-body">
						<h5 align="center" class="card-title"><b>Divisi Sponsorship</b></h5>
						<p align="center" class="card-text">Koordinator :<br>Hesti Sekar</p>
					</div>
				</div>
				<div class="card">
					<img src="<?php echo base_url('intern/img/picthumpub.jpg')?>" class="card-img-top" alt="humpub">
					<div class="card-body">
						<h5 align="center" class="card-title"><b>Divisi Humas dan Publikasi</b></h5>
						<p align="center" class="card-text">Koordinator :<br>Lanny R K</p>
					</div>
				</div>
			</div>
			<br>
			<div class="card-deck">
				<div class="card">
					<img src="<?php echo base_url('intern/img/pictpengawas.jpg')?>" class="card-img-top" alt="pengawas">
					<div class="card-body">
						<h5 align="center" class="card-title"><b>Divisi Pengawas</b></h5>
						<p align="center" class="card-text">Koordinator :<br>Risky H</p>
					</div>
				</div>
				<div class="card">
					<img src="<?php echo base_url('intern/img/pictkeamanan.jpg')?>" class="card-img-top" alt="keamanan">
					<div class="card-body">
						<h5 align="center" class="card-title"><b>Divisi Keamanan</b></h5>
						<p align="center" class="card-text">Koordinator :<br>Anargha N</p>
					</div>
				</div>
				<div class="card">
					<img src="<?php echo base_url('intern/img/pictksk.jpg')?>" class="card-img-top" alt="ksk">
					<div class="card-body">
						<h5 align="center" class="card-title"><b>Divisi KSK</b></h5>
						<p align="center" class="card-text">Koordinator :<br>Febrini Malau</p>
					</div>
				</div>
			</div>
			<br>
			<div class="card-deck">
				<div class="card">
					<img src="<?php echo base_url('intern/img/pictddd.jpg')?>" class="card-img-top" alt="ddd">
					<div class="card-body">
						<h5 align="center" class="card-title"><b>Divisi DDD</b></h5>
						<p align="center" class="card-text">Koordinator :<br>Puspita Nur I</p>
					</div>
				</div>
				<div class="card">
					<img src="<?php echo base_url('intern/img/pictbriefing.jpg')?>" class="card-img-top" alt="briefing">
					<div class="card-body">
						<h5 align="center" class="card-title"><b>Divisi Briefing</b></h5>
						<p align="center" class="card-text">Koordinator :<br>Anwar B P</p>
					</div>
				</div>
				<div class="card">
					<img src="<?php echo base_url('intern/img/pictkonsumsi.jpg')?>" class="card-img-top" alt="konsum">
					<div class="card-body">
						<h5 align="center" class="card-title"><b>Divisi Konsumsi</b></h5>
						<p align="center" class="card-text">Koordinator :<br>Intan Afrilia S</p>
					</div>
				</div>
			</div>
			<br><br><br><br><br>
		</div>
	</div>

	<div class="container" id="testimoni">
		<br><br><br><br><br>
		<h4 align="center"><b>Testimoni Blast Out 2020</b></h4>
		
	</div>
</body>
</html>