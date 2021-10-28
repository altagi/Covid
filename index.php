<?php include 'templates/header.php'; ?>

<!-- ======= Hero ======= -->
<section id="hero" class="hero d-flex align-items-center">

<div class="container">
  <div class="row">
	<div class="col-lg-6 d-flex flex-column justify-content-center">
	  <h1 data-aos="fade-up">Live Data Penyebaran Virus Corona di Indonesia</h1>
	  <div data-aos="fade-up" data-aos-delay="600">
		<div class="text-center text-lg-start">
		  <a href="#indonesia" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
			<span>Lihat Data</span>
			<i class="bi bi-arrow-down"></i>
		  </a>
		</div>
	  </div>
	</div>
	<div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
	  <img src="vendor/img/remote-work-man.png" class="img-fluid" alt="">
	</div>
  </div>
</div>

</section>
<!-- End Hero -->

<main id="main">

<!-- ======= Indonesia ======= -->
<?php
	$url  = file_get_contents('https://api.kawalcorona.com/indonesia');
	$indonesia = json_decode($url,true);
?>
<section id="indonesia" class="counts">
	<?php if (is_array($indonesia)):?>
	<?php foreach ($indonesia as $value) : ?>
  <div class="container" data-aos="fade-up">
	  <div class="card">
		  <div class="card-header">
		  	<h3 class="card-title text-center">Data Global Indonesia</h3>
		  </div>
	  </div>
	  <br>
	<div class="row gy-4">
	  <div class="col-lg-3 col-md-6">
		<div class="count-box">
		  <i class="bi bi-emoji-frown"></i>
		  <div>
			<span><?= $value ['positif'];?></span>
			<p>Total Positif</p>
		  </div>
		</div>
	  </div>

	  <div class="col-lg-3 col-md-6">
		<div class="count-box">
		  <i class="bi bi-emoji-neutral" style="color: #ee6c20;"></i>
		  <div>
			<span><?= $value ['dirawat'];?></span>
			<p>Total Dirawat</p>
		  </div>
		</div>
	  </div>

	  <div class="col-lg-3 col-md-6">
		<div class="count-box">
		  <i class="bi bi-emoji-smile" style="color: #15be56;"></i>
		  <div>
			<span><?= $value ['sembuh'];?></span>
			<p>Total Sembuh</p>
		  </div>
		</div>
	  </div>

	  <div class="col-lg-3 col-md-6">
		<div class="count-box">
		  <i class="bi bi-emoji-dizzy" style="color: #bb0852;"></i>
		  <div>
			<span><?= $value ['meninggal'];?></span>
			<p>Total Meninggal</p>
		  </div>
		</div>
	  </div>
	</div>

  </div>
  <?php endforeach; ?>
  <?php endif;?>
  <br>
		
</section>
<!-- End Indonesia -->


<!-- Provinsi -->
<?php
	$url  = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/');
	$provinsi = json_decode($url,true);
?>
<section id="provinsi">
	<div class="container" data-aos="fade-up">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
				<div class="card">
					<div class="card-header">
					<h3 class="card-title text-center">Data Kasus Per Provinsi</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive service">
							<table class="table table-bordered table-hover mb-0 text-nowrap css-serian">
								<thead>
									<tr>
										<th>No.</th>
										<th>Provinsi</th>
										<th>Positif</th>
										<th>Sembuh</th>
										<th>Meninggal</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; 
									foreach ($provinsi as $p) : ?>
									<tr>
										<td><?= $no;?></td>
										<td><?= $p ['attributes']['Provinsi'];?> </td>
										<td><?= $p ['attributes']['Kasus_Posi'];?></td>
										<td><?= $p ['attributes']['Kasus_Semb'];?></td>
										<td><?= $p ['attributes']['Kasus_Meni'];?></td>
									</tr>
									<?php $no++; endforeach;?>
								
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Provinsi -->

<!-- ======= About ======= -->
<section id="about" class="features">

  <div class="container" data-aos="fade-up">

	<header class="section-header">
	  <p>Mari lindungi diri kita serta keluarga dari Virus Corona Dengan Cara:</p>
	</header>

	<div class="row">

	  <div class="col-lg-6">
		<img src="vendor/img/protected.jpg" class="img-fluid" alt="Lindungi Keluarga">
	  </div>

	  <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
		<div class="row align-self-center gy-4">

		  <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
			<div class="feature-box d-flex align-items-center">
			  <i class="bi bi-check"></i>
			  <h3>Memakai Masker</h3>
			</div>
		  </div>

		  <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
			<div class="feature-box d-flex align-items-center">
			  <i class="bi bi-check"></i>
			  <h3>Menjaga Jarak</h3>
			</div>
		  </div>

		  <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
			<div class="feature-box d-flex align-items-center">
			  <i class="bi bi-check"></i>
			  <h3>Mencuci Tangan Menggunakan Sabun dan Air Mengalir</h3>
			</div>
		  </div>

		  <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
			<div class="feature-box d-flex align-items-center">
			  <i class="bi bi-check"></i>
			  <h3>Menjauhi Kerumunan</h3>
			</div>
		  </div>

		  <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
			<div class="feature-box d-flex align-items-center">
			  <i class="bi bi-check"></i>
			  <h3>Mengurangi Mobilitas</h3>
			</div>
		  </div>

		  <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
			<div class="feature-box d-flex align-items-center">
			  <i class="bi bi-check"></i>
			  <h3>Menghindari Makan Bersama</h3>
			</div>
		  </div>

		</div>
	  </div>

	</div> <!-- / row -->

  </div>

</section>
<!-- End About -->

</main>

<?php include 'templates/footer.php'; ?>
