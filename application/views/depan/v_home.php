<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KSR-PMI Unit 04 Unimal</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <meta name="description" content="Selamat datang di situs resmi KSR-PMI Unit 04 Universitas Malikussaleh">
    <meta property="og:url" content="<?php echo base_url();?>" />
    <meta property="og:type" content="article">
    <meta property="og:title" content="KSR-PMI Unit 04 Unimal" />
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
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.8/font-awesome-animation.min.css">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

        <!--====================================
            Developed By Fajar Rivaldi Chan
            Angkatan 21
        =====================================-->

<body>
    <!--============================= HEADER =============================-->
    <div class="header-topbar">
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded navbar-expand-lgt navbar-nd">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right mt-5" style="margin-top:20px !important;" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
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

      <div id="home" class="jumbotron jumbotron-fluid">
            <div class="container sec1 text-center">
                <img class="n-logo mb-4" src="<?php echo base_url().'theme/images/04.png'?>" alt="logo ksr" width="240">  
                <h1 class="display-4 pb-3">Selamat Datang di Situs Resmi</h1>
                <h2 class="display-5">KSR-PMI Unit 04 <br>Universitas Malikussaleh</h2>
                <a href="#start" class="btn btn-outline-danger btn-jumbo"><i class="fa fa-angle-double-down faa-bounce faa-reverse animated faa-fast" aria-hidden="true" style="font-size: 20px;"></i></a>
            </div>
            <div id="start"></div>
        </div>
<!--//END HEADER -->
<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="<?php echo base_url().'theme/images/img.png'?>" class="img-fluid about-img" alt="#">
            </div>
            <div class="col-md-7 pt-3">
               <h2>Tentang Kami</h2>
               <p>Korps Sukarela Palang Merah Indonesia (KSR-PMI) adalah salah satu organisasi mahasiswa yang ada diperguruan tinggi sebagai organisasi relawan Palang Mareh yang mengedepankan kemanusian, KSR- PMI merupakan wadah persiapan tenaga Kepalang Merahan yang selalu berada dalam kesiagaan dengan rasa senang, tulus dan ikhlas di setiap saat untuk menberikan bantuan sesama sesuain dengan kemampuan.</p>
                <p>Relawan KSR-PMI Unit 04 Unimal juga terus berusaha semaksimal mungkin dalam memberikan pelayanan kepada masyarakat sebagai pengamalan Tri Darma Perguruan Tinggi tanpa mengharapkan imbalan dan pamrih.</p>
                <p>Sementara itu, KRS-PMI diperguruan Tinggi juga di tuntut harus dapat Mengaktualisasikan kinerjanya secara profesional ...</p>
                <a href="<?php echo site_url('sejarah');?>" class="btn btn-default rounded mt-3">Baca Lainnya...</a>
            </div>
        </div>
    </div>
</section>
<!--//END ABOUT -->
<section class="mt-5">
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-1 col-3">
                <img src="<?php echo base_url().'theme/images/kemanusiaan.png'?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-1 col-3">
                <img src="<?php echo base_url().'theme/images/kesamaan.png'?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-1 col-3">
                <img src="<?php echo base_url().'theme/images/kenetralan.png'?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-1 col-3">
                <img src="<?php echo base_url().'theme/images/kemaandirian.png'?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-1 col-3">
                <img src="<?php echo base_url().'theme/images/kesukarelaan.png'?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-1 col-3">
                <img src="<?php echo base_url().'theme/images/kesatuan.png'?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-1 col-3">
                <img src="<?php echo base_url().'theme/images/kesemestaan.png'?>" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!--============================= OUR COURSES =============================-->
<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Artikel Terbaru</h2>
                    <a href="<?php echo base_url()?>/blog"><h5>Lainnya <i class="fa fa-chevron-right faa-passing animated pl-2 faa-fast" aria-hidden="true"></i></h5></a>
                </div>
            </div>
        </div>
        <div class="row">
          <?php foreach ($berita->result() as $row) :?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="contoh">
                            <div class="card-body">
                                <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class=""><h4 class="card-title"> <?php echo limit_words($row->tulisan_judul,5).'...';?></h4></a>
                                <span class="text-muted"><i class="fa fa-bookmark" aria-hidden="true"></i> <?php echo $row->tulisan_kategori_nama;?></span>
                                <p class="card-text pt-3"><?php echo limit_words($row->tulisan_isi,10).'...';?></p>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="btn btn-outline-danger tombol pl-3 pr-3">Baca Selengkapnya <i class="fa fa-chevron-right faa-passing animated pl-2 faa-fast" aria-hidden="true"></i></a>
                            </div>
                        </div>
            </div>
          <?php endforeach;?>
        </div>
    </div>
</section>
<!--//END OUR COURSES -->
<section>
    <div class="detailed_chart">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="chart-text">
                    <p>Ayo bergabung Bersama Kami</p>
                    <p><span>Menjadi Bagian dari <br>KSR-PMI Unit 04 Unimal<span></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mt-4 text-lg-right text-center">
                    <a href="#" class="btn btn-danger btn-gabung">Gabung</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--============================= EVENTS =============================-->
<section class="kontak">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="card p-lg-5 mb-1 p-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-6">
                        <form action="<?php echo site_url('contact/kirim_pesan');?>" method="post">
                          <h2 class="pb-3 pt-4">Kontak Kami</h2>
                            <div class="text-success"><?php echo $this->session->flashdata('msg');?></div>
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="xnama" placeholder="Nama Kamu">                            
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="nama">Email</label>
                                    <input type="email" class="form-control" name="xemail" placeholder="Email Aktif">                            
                                </div>
                            </div>
                          <div class="form-group">
                            <label for="subjek">Subjek</label>
                            <input type="text" class="form-control" id="subjek" name="xphone" placeholder="subjek">
                          </div>
                          <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3"  name="xmessage" placeholder="Tulis Pesan Kamu"></textarea>
                          </div>
                          <button type="submit" class="btn btn-danger tombol w-100 mt-4 mb-4">Kirim <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                        </form>
                      </div>
                      <div class="col-lg-6">
                        <h2 class="pb-3 pt-4">Hubungi Kami</h2>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> ksrpmiunimal04@gmail.com</p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Jln.Sulawesi No.8 Kampus Bukit Indah Kec. Muara satu, Kab. Aceh Utara</p>
                        <h2 class="mt-5">Lokasi</h2>
                        <div class="embed-responsive embed-responsive-21by9 mb-5">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.3418825549724!2d97.06313349999999!3d5.2047969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30477796fd166881%3A0x3417d1e1525cbe2c!2sKesekretariatan%20UKM%20KSR%20PMI%20Unit%2004%20Universitas%20Malikussaleh!5e0!3m2!1sen!2sid!4v1631072963464!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" width="600" height="450"></iframe>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
    </div>
</div>
</section>

<!--//END EVENTS -->
<!--============================= FOOTER =============================-->
<footer>
    <div class="container pb-5">
        <div class="row pb-3">
            <div class="col-md-5">
                <div class="foot-logo">
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
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
    </body>

    </html>
