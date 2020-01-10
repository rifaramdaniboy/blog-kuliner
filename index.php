	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Culinary</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="/blog-kuliner/assets/blogger/css/linearicons.css">
			<link rel="stylesheet" href="/blog-kuliner/assets/blogger/css/font-awesome.min.css">
			<link rel="stylesheet" href="/blog-kuliner/assets/blogger/css/bootstrap.css">
			<link rel="stylesheet" href="/blog-kuliner/assets/blogger/css/owl.carousel.css">
			<link rel="stylesheet" href="/blog-kuliner/assets/blogger/css/main.css">
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						  <a class="navbar-brand">
						  	<a  href="index.php"><img src="/blog-kuliner/assets/blogger/img/rt.png" width="50px" height="50px" alt="">
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="#home">Home</a></li>
								<li><a href="#berita">Berita</a></li>
								<li><a href="#about">About</a></li>
								<!-- Dropdown -->
							      </div>
							    </li>								
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>
			<!-- End Header Area -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="/blog-kuliner/assets/blogger/img/kuliner.jpg">
				<div class="overlay-bg overlay"></div>
				<div class="container">
					<div class="row fullscreen">
						<div class="banner-content d-flex align-items-center col-lg-12 col-md-12">
							<h1>
								Pelipur Lapar						
							</h1>
						</div>	
						<div class="head-bottom-meta d-flex justify-content-between align-items-end col-lg-12">
							
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start Berita Area -->
			<section class="category-area section-gap" id="berita">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10">Berita Terbaru</h1>
						</div>
					</div>	
					<div class="row">
								<?php 
								include ('config/koneksi.php');
								$frontend = new Frontend();
								foreach ($frontend->index() as $data) {
								?>
								<div class="col-lg-6 col-md-6 blog-right">
									<div class="thumb">
										<img class="img-fluid" src="/blog-kuliner/admin/berita/img/<?php echo $data['gambar'] ?>" style="width: 300px; height: 200px;" alt="">
									</div>
									<div class="detais">
										<ul class="tags">
										<br>
										<li><button href="" class="btn btn-sm btn-primary"><?php echo $data['nama_kategori']; ?></button></li>
										</ul>
										<a href="single-blog.php?id=<?php echo $data['id'] ?>">
											<h4><?php echo $data['judul'] ?></h4>
										</a>
										<p class="date"><?php echo date('d F Y', strtotime($data['tgl_berita'])) ?></p>
									</div>		
								</div>
								<?php } ?>
						</div>
					</div>
				</div>
			</section>
			<!-- End Berita Area -->
			
			<!-- Start About Area -->
			<section class="about-video-area section-gap" id="about">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 about-video-left">
							<div class="title text-center">
								
							</div>
						</div>
					</div>						
					<div class="row justify-content-center d-flex align-items-center">
						<div class="col-lg-12 team-left">
							<div class="title text-center">
								<h1 class="mb-10">About</h1>
							</div>
							<h1>Pengertian</h1>
							<br>
							<p>
								 kuliner adalah hasil olahan yang berupa masakan berupa lauk-pauk, panganan maupun minuman. Kuliner tidak terlepas dari kegiatan masak-memasak yang erat kaitannya dengan konsumsi makanan sehari-hari. Kata kuliner merupakan unsur serapan bahasa Inggris yaitu culinary yang berarti berhubungan dengan memasak. Sedangkan orang yang bekerja di bidang kuliner disebut koki atau chef.
								 <br><br>
                                 Saat ini istilah kuliner sering didengar, dibaca lewat media cetak maupun audio visual. Istilah ini semakin menyebar luas di Indonesia setelah acara di televisi yang di pandu oleh Bondan Winarnodi dengan slogan maknyus-nya itu.
							</p>
							<H1>Pengguna istilah kuliner</H1>
							<br>
							<p>
								Dalam perkembangannya, penggunaan istilah kuliner digunakan untuk berbagai macam kegiatan, seperti Seni kuliner yaitu seni persiapan, memasak dan penyajian makanan, biasanya dalam bentuk makanan.
                                Ada juga wisata kuliner yaitu wisata yang bertujuan untuk mencoba menikmati hasil masakan di tempat wisata tersebut. Misalnya wisata kuliner di kota Bandung yaitu mencoba menikmati makanan khas daerah Bandung.<br><br>
                                Wisata kuliner merupakan perpaduan menikmati suatu makanan sambil menikmati suasana jalan-jalan, bersantai atau sedang berlibur, sehingga memanfaatkan waktu ke tempat-tempat yang menyediakan makanan khas.
                                Dengan kata lain istilah wisata kuliner dapat diuraikan secara bebas tanpa menghilangkan makna perpaduan antara berwisata sambil mencari makanan khas.<br><br>
                                Saat ini kuliner sudah merupakan sebuah gaya hidup yang tidak dapat dipisahkan dari kehidupan sehari-hari karena makanan adalah sebuah kebutuhan sehari-hari. Semua itu, membutuhkan cara pengolahan makanan yang enak.
							</p>
						</div>
					</div>
				</div>	
			</section>
			<!-- End about Area -->

			<!-- Footer -->
			<?php 
			include ('layouts/includes/footer.php')
			?>
			<!-- End Footer -->

			<script src="/blog-kuliner/assets/blogger/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="/blog-kuliner/assets/blogger/js/vendor/bootstrap.min.js"></script>
			<script src="/blog-kuliner/assets/blogger/js/jquery.ajaxchimp.min.js"></script>
			<script src="/blog-kuliner/assets/blogger/js/parallax.min.js"></script>			
			<script src="/blog-kuliner/assets/blogger/js/owl.carousel.min.js"></script>		
			<script src="/blog-kuliner/assets/blogger/js/jquery.magnific-popup.min.js"></script>				
			<script src="/blog-kuliner/assets/blogger/js/jquery.sticky.js"></script>
			<script src="/blog-kuliner/assets/blogger/js/main.js"></script>	
		</body>
	</html>