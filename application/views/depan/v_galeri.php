<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Galeri | KSR-PMI Unit 04 Unimal</title>
  <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
  <meta name="description" content="Selamat datang di situs resmi KSR-PMI Unit 04 Universitas Malikussaleh">
    <meta property="og:url" content="<?php echo base_url();?>" />
    <meta property="og:type" content="article">
    <meta property="og:title" content="Galeri | KSR-PMI Unit 04 Unimal" />
    <meta property="og:image" content="<?php echo base_url().'theme/images/icon.png'?>" />
    <meta property="og:description" content="Selamat datang di situs resmi KSR-PMI Unit 04 Universitas Malikussaleh" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
  <!-- Simple Line Font -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
  <!-- Magnific Popup CSS -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/css/magnific-popup.css'?>">
  <!-- Image Hover CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'theme/css/normalize.css'?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'theme/css/set2.css'?>" />

  <!-- Masonry Gallery -->
  <link href="<?php echo base_url().'theme/css/animated-masonry-gallery.css'?>" rel="stylesheet" type="text/css" />
  <!-- Main CSS -->
  <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
</head>

        <!--====================================
            Developed By Fajar Rivaldi Chan
            Angkatan 21
        =====================================-->

<body>
  <!--============================= HEADER =============================-->
  <div class="header-topbar">
  </div>
  <div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2;">
      <div class="container nav-menu2">
          <div class="row">
              <div class="col-md-12">
                  <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                      <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" style="margin-top:20px !important;" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                          <span class="icon-menu"></span>
                      </button>
                      <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" src="<?php echo base_url().'theme/images/ksr-.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                              <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Profil
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo site_url('sejarah');?>">Sejarah</a>
                                    <a class="dropdown-item" href="<?php echo site_url('visi_misi');?>">Visi Misi</a>
                                    <a class="dropdown-item" href="<?php echo site_url('pengurus');?>">Pengurus</a>
                                    <a class="dropdown-item" href="<?php echo site_url('prestasi');?>">Prestasi</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('relawan');?>">Relawan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pustaka');?>">Pustaka</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">Gallery</a>
                                </li>
                             </ul>
                        </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
    <section>
</section>
<!--//END HEADER -->
  <!--============================= Gallery =============================-->
  <div class="gallery-wrap">
    <div class="container">
<!-- Style 2 -->
<div class="row">
  <div class="col-md-12">
    <h2 class="gallery-style">Gallery Kegiatan</h2>
  </div>
</div><br>
<div class="row">
  <div class="col-md-12">
    <div id="gallery">
      <div id="gallery-content">
        <div id="gallery-content-center">
          <?php foreach ($all_galeri->result() as $row) : ?>
            <a href="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" class="image-link2">
             <img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" class="all img-fluid m-lg-1" alt="#" />
            </a>
          <?php endforeach;?>
       </div>
     </div>
   </div>
 </div>
</div>
<!--//End Style 2 -->

</div>
</div>
<!--//End Gallery -->
<!--============================= FOOTER =============================-->
<footer>
    <div class="container pb-5">
        <div class="row pb-3">
            <div class="col-md-5">
            <div class="foot-logo text-center text-lg-left">
                        <img src="<?php echo base_url().'theme/images/footer.png'?>" width="300" class="img-fluid" alt="footer_logo">
                    <h3 class=" pt-5 text-white text-lg-left">KSR-PMI Unit 04 <br>Universitas Malikussaleh</h3>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="sitemap">
                        <h3>Profile</h3>
                        <ul>
                            <li><a href="<?php echo site_url('sejarah');?>">Sejarah</a></li>
                            <li><a href="<?php echo site_url('visi_misi');?>">Visi Misi</a></li>
                            <li><a href="<?php echo site_url('pengurus');?>">Pengurus</a></li>
                            <li><a href="<?php echo site_url('prestasi');?>">Prestasi</a></li>
                            <li><a href="<?php echo site_url('home#contact');?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                  <div class="sitemap">
                      <h3>Menu</h3>
                      <ul>
                          <li><a href="<?php echo site_url();?>">Home</a></li>
                          <li><a href="<?php echo site_url('blog');?>">Blog</a></li>
                          <li><a href="<?php echo site_url('relawan');?>">Relawan </a></li>
                          <li><a href="<?php echo site_url('pustaka');?>">Pustaka</a></li>
                          <li><a href="<?php echo site_url('galeri');?>">Galeri</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Sekretariat</h3>
                        <p>Jln.Sulawesi No.8 Kampus Bukit Indah Kec. Muara satu, Kab. Aceh Utara</p>
                    </div>
                </div>
            </div>              
        </div>
        <hr class="mt-5">
        <div class="container">
            <div class="row  pt-lg-4 pt-2 pb-4 pb-lg-0 text-center text-lg-left justify-content-lg-between">
                <div class="col-lg-6 pt-1">
                <span class="text-white">Copyright &copy; 2021, KSR-PMI 04 Unimal </span>
                </div>
                <div class="icon mb-3 d-none d-lg-block" style="font-size: 24px;">
                        <ul class="list-inline">
                        <li class="list-inline-item px-2">
                            <a href="https://web.facebook.com/ksrpmi04unimal/">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item px-2">
                            <a href="https://www.instagram.com/ksrpmi_unimal04/">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item px-2">
                            <a href="mailto:ksrpmiunimal04@gmail.com">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                        </li>
                        </ul>
                </div>
            </div>
        </div>     
    </footer>
        <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>

    <script src="<?php echo base_url().'theme/js/jquery-ui-1.10.4.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/jquery.isotope.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/animated-masonry-gallery.js'?>"></script>
    <!-- Magnific popup JS -->
    <script src="<?php echo base_url().'theme/js/jquery.magnific-popup.js'?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url().'theme/js/script.js'?>"></script>

  </body>

  </html>
