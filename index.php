<?php

include "koneksi.php";

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>SPK</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!--
        Freshness Template
		http://www.templatemo.com/preview/templatemo_422_freshness
        -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <header class="site-header" id="top">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                          <i class="fa fa-bars"></i>
                        </button>
                        <div class="logo-wrapper">
                            <a class="navbar-brand" href="index.html">
                               Kab. Serang
                                <span class="logo-s"></span>
                            </a>
                        </div>  
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#our-work">Visi</a></li>
                            <li><a href="#who-we-are">Misi</a></li>
                            <li><a href="?page=register">Register</a></li>
                            <li><a href="?page=login">Login</a></li>
                        </ul>
                    </div>
                </div> 
            </div>
        </nav>
    </header>

    
    <div class="cta">
      <div class="container">
        <div class="row"> 
          <div class="col-md-12">
            <h2 style="text-align:center;">Sistem Pemenang Tender Proyek </h2>
            <h2 style="text-align:center;">Di Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Serang</h2>
          </div>
        </div>
      </div>
    </div>

	<div class="container">
        <div class="row"> 
          <div class="col-md-12">
			<?php
			
				$page=@$_GET['page'];
				if($page == "register"){
					include "register.php";
				}
				else if($page == "login"){
					include "login.php";
				}

			
			?>
		  </div>
		</div>
	</div>

    <div class="main-content">
    
      <div class="container">
      
        <div class="row">
          <div class="first-section" id="our-work">
            <div class="col-md-4 col-sm-12">
			  <img class="first-icon" src="img/kabserang.png" height="200px" width="200px">
              <h2>Visi</h2>
              <p style="text-align:justify;">- Terwujudnya infrastruktur kebinamargaan, pengelolaan sumber daya air, & keirigasian 
			  yg handal untuk mendukung masyarakat kab. serang yg berkualitas.</p>
			  <p style="text-align:justify;">- visi dinas pekerjaan umum kab. serang tahun 2011-2015
			  tersebut diharapkan menjadi pilar utama pembangunan dalam urusan pemerintahan daerah.</p>
			  <p style="text-align:justify;">- Terwujudnya masyarakat yg berkualitas menuju kabupaten serang yg agamis,
			  adil & sejahtera.</p></br>
			</div>
          </div>
        </div>
        
        <div class="row">
          <div class="go-pro-btn">
            <div class="col-md-12 col-sm-12">
              <a href="#">Kab Serang</a>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="first-discription" id="who-we-are">
            <div class="col-md-4 col-md-offset-8 col-sm-12">
              <h6>Misi</h6>
              <p>- Mewujudkan ketersediaan dan kualitas prasarana jalan & jembatan yg memadai.</p>
              <p>- Meningkatkan pengelolaan irigasi yg berdaya guna & berhasil guna.</p>
              <p>- Meningkatkan Sumber Daya Air yg memadai.</p>
              <p>- Mewujudkan pelayanan pembinaan jasa konstruksi yg optimal.</p>
              <p>- Meningkatkan Sumber daya aparatur yg profesional yg mewujudkan tata kelola pemerintahan yg baik.</p>
            </div>
          </div>
        </div>
        
        <div class="row">
        
          <div class="big-icon hidden-xs">
            <div class="col-md-12 col-sm-12">
              <img src="img/kabserang.png" height="200px" width="200px" alt="">
            </div>
          </div>
          
        </div>
        
      </div><!-- container END -->
      
    </div><!-- main content END -->


      <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-sm-12">
                    <p class="copyright">Copyright &copy; 2018 <a href="#">eka nurkamil</a></p>
                </div>
              </div>
            </div>
      </footer> 

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>