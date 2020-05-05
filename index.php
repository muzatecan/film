<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>fiml</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!---------------css ----------->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Navbar ======= -->
  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="#">menu</a></li>
            <li><a href="#">menu</a></li>
            <li><a href="#">menu</a></li>
          </ul>
        </div>
        <div class="col-md-6 d-none d-md-block  mr-auto">
          <div class="tweet d-flex">
            <span class="icofont-twitter text-white mt-2 mr-3"></span>
            <div>
              <p><em><br></a></em></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-none d-md-block">
          <h3>tempat downlod film terjelek</h3>
          <p>nggak usah download film disini</a></p>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Film</a>

      <a href="#" class="burger" data-toggle="collapse" data-target="#main-navbar">
        <span></span>
      </a>

    </div>
  </nav>
   

  <main id="main">

    <!-- ======= judul ======= -->
    <section class="section site-portfolio">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
            <h2>kumpulan film yang tidak pantas untuk ditonton</h2>
            <p class="mb-0">film membuang waktu</p>
          </div>



<!-- ======= konten ======= -->
<?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select * from film");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
            <td><?php echo $d['id']; ?></td>

                <?php 
		}
		?>
   

          <div class="col-md-12 col-lg-6 text-left text-lg-right" data-aos="fade-up" data-aos-delay="100">
            <div id="filters" class="filters">
              <a href="#" data-filter="*" class="active"> New</a>
              <a href="#" data-filter=".aksi">Aksi</a>
              <a href="#" data-filter=".drama">Drama</a>
              <a href="#" data-filter=".animasi">Animasi</a>
              <a href="#" data-filter=".horror">Horror</a>
            </div>
          </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
          <div class="item drama col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="itaew.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>itaew</h3>
                <span>jangan ditonton</span>
              </div>
              <img class="img-fluid" src="assets/img/itaew.jpg">
            </a>
          </div>
          <div class="item drama col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="#" class="item-wrap fancybox">
              <div class="work-info">
                <h3>plastik</h3>
                <span>film halu</span>
              </div>
              <img class="img-fluid" src="assets/img/drakor.jpg">
            </a>
          </div>
          <div class="item animasi col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="#" class="item-wrap fancybox">
              <div class="work-info">
                <h3>SEPONGDULU</h3>
                <span>film goblog</span>
              </div>
              <img class="img-fluid" src="assets/img/spongebob.jpg">
            </a>
          </div>
          <div class="item animasi col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="#" class="item-wrap fancybox">
              <div class="work-info">
                <h3>upil ipin</h3>
                <span>kapan gedenya?</span>
              </div>
              <img class="img-fluid" src="assets/img/upin.jpg">
            </a>
          </div>
          <div class="item animasi aksi col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="#" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Powerrangers</h3>
                <span>2017</span>
              </div>
              <img class="img-fluid" src="assets/img/power.jpeg">
            </a>
          </div>
          <div class="item animasi drama col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="#" class="item-wrap fancybox">
              <div class="work-info">
                <h3>frozen</h3>
                <span>embuh opo</span>
              </div>
              <img class="img-fluid" src="assets/img/frozen.jpg">
            </a>
          </div>
        </div>
      </div>
    </section>
   
    <!-- end menu -->

 
  

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="credits">
         </div>
        </div>
        <div class="col-sm-6 social text-md-right">
          <a href="#"><span class="icofont-twitter"></span></a>
          <a href="#"><span class="icofont-facebook"></span></a>
          <a href="#"><span class="icofont-dribbble"></span></a>
          <a href="#"><span class="icofont-behance"></span></a>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>