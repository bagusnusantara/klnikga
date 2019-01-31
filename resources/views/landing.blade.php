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
  <title>Klinik Graha Amani</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{ asset('medical/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('medical/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('medical/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('medical/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('medical/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('medical/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('medical/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('medical/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('medical/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('medical/css/main.css') }}">
  </head>
  <body>
    <header id="header">
      <div class="header-top">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6 col-4 header-top-left">
              <a href="telp : 082231212140  "><span class="lnr lnr-phone-handset"></span> <span class="text"><span class="text">0822 3121 2140</span></span></a>
              <a href="mailto:support@klinikgrahaamani.com"><span class="lnr lnr-envelope"></span> <span class="text"><span class="text">grahaamani@gmail.com</span></span></a>
            </div>
            <div class="col-lg-6 col-sm-6 col-8 header-top-right">
            <a href="{{ url('login') }}" class="primary-btn text-uppercase">Masuk</a>
            <a href="#register" class="primary-btn text-uppercase">Daftar</a>
            </div>
          </div>
        </div>
    </div>
      <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li><a href="#home">Home</a></li>
              <li><a href="#dokter">Profil Dokter</a></li>
              <!-- <li class="menu-has-children"><a href="">Dashboard</a>
                <ul>
                    <li><a href="elements.html">Keluhan</a></li>
                  <li class="menu-has-children"><a href="">Diagnosis</a>
                    <ul>
                      <li><a href="#">Isi Diagnosis</a></li>
                      <li><a href="#">Isi Tabel TPR</a></li>
                    </ul>
                  </li>
                </ul>
              </li> -->
              <li><a href="#about">Tentang Kami</a></li>
              <li><a href="#kontak">Kontak</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
      </div>
    </header><!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
          <div class="banner-content col-lg-8 col-md-12">
            <h1>
              Klinik Graha Amani
            </h1>
            <p class="pt-10 pb-10 text-white">
              Klinik ibu anak
            </p>
            <a href="{{ url('login') }}" class="primary-btn text-uppercase">Yuk Berkonsultasi!</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->

    <!-- Start appointment Area -->
    <section id = "register">
    <section class="appointment-area">
      <div class="container">
        <div class="row justify-content-between align-items-center pb-120 appointment-wrap">
          <div class="col-lg-5 col-md-6 appointment-left">
            <h1>
              Waktu Layanan
            </h1>
            <p>
              Demi merawat kesehatan masyarakat yang cepat, tanggap dan efisien, kami siap melayani Anda pada jam-jam berikut :
            </p>
            <ul class="time-list">
              <li class="d-flex justify-content-between">
                <span>Jadwal Praktek Dokter Spesialis Kandungan :</span>
              </li>
              <li class="d-flex justify-content-between">
                <span>Senin</span>
                <span>19.30 WIB - selesai</span>
              </li>
              <li class="d-flex justify-content-between">
                <span>Selasa</span>
                <span>16.30 WIB - selesai</span>
              </li>
              <li class="d-flex justify-content-between">
                <span>Rabu</span>
                <span>16.30 WIB - 18.00 WIB dan 19.30 WIB - 21.00 WIB</span>
              </li>
              <li class="d-flex justify-content-between">
                <span>Kamis</span>
                <span>16.30 WIB - 19.00 WIB dan 19.30 WIB - selesai</span>
              </li>
              <li class="d-flex justify-content-between">
                <span>Jum'at</span>
                <span>19.30 WIB - 21.00 WIB</span>
              </li>
              <li class="d-flex justify-content-between">
                <span>Sabtu</span>
                <span>16.30 WIB - 19.00 WIB</span>
              </li>
              <li class="d-flex justify-content-between">
              </li>
              <li class="d-flex justify-content-between">
                <span>Jadwal Praktek Dokter Spesialis Anak :</span>
              </li>
              <li class="d-flex justify-content-between">
                <span>Senin - Jum'at</span>
                <span>18.00 WIB - 19.30</span>
              </li>
              <li class="d-flex justify-content-between">
                <span>Sabtu</span>
                <span>16.30 WIB - 18.00 WIB</span>
              </li>
              <li class="d-flex justify-content-between">
              </li>
              <li class="d-flex justify-content-between">
                <span>Jadwal Praktek Bidan</span>
              </li>
              <li class="d-flex justify-content-between">
                <span>Setiap Hari</span>
                <span>24 Jam</span>
              </li>
            </ul>

          </div>
          <div class="col-lg-6 col-md-6 appointment-right pt-60 pb-60">
            @include('auth.register_form')
            <!-- <form class="form-wrap" action="#">
              <h3 class="pb-20 text-center mb-30">Daftar Sekarang</h3>
              <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'" >
              <input type="email" class="form-control" name="email" placeholder="Alamat Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Email'" >
              <input type="text" class="form-control" name="Username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" >

              <input id="datepicker1" name="dop" class="dates form-control"  placeholder="Tanggal Lahir" type="text">

              <div class="form-select" id="service-select">
                <select>
                  <option data-display="">Disease Type</option>
                  <option value="1">Type One</option>
                  <option value="2">Type Two</option>
                  <option value="3">Type Three</option>
                  <option value="4">Type Four</option>
                </select>
              </div>

              <textarea name="alamat" class="" rows="5" placeholder="Alamat Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Lengkap'"></textarea>
              <button class="primary-btn text-uppercase">Daftar</button>
            </form> -->
          </div>
        </div>
      </div>
    </section>
  </section>
    <!-- End appointment Area -->

    <!-- Start facilities Area -->
    <section class="facilities-area section-gap" id = "about">
      <div class="container">
              <div class="row d-flex justify-content-center">
                  <div class="menu-content pb-70 col-lg-7">
                      <div class="title text-center">
                          <h1 class="mb-10">Fasilitas Kami</h1>
                          <p>Nikmati berbagai kenyamanan pelayanan kami untuk Anda. </p>
                      </div>
                  </div>
              </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="single-facilities">
              <span class="lnr lnr-heart"></span>
              <a href="#"><h4>24/7 Gawat Darurat Bersalin</h4></a>
              <p>
                Siap melayani 24/7 tempat bersalin keluarga Anda
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-facilities">
              <span class="lnr lnr-rocket"></span>
              <a href="#"><h4>Pelayanan Cepat</h4></a>
              <p>
                Nikmati pelayanan Cepat, Teliti dan Ramah kami.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-facilities">
              <span class="lnr lnr-arrow-right  "></span>
              <a href="#"><h4>Perawatan Intensif</h4></a>
              <p>
                Perawatan Intensif bagi keluarga Anda
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-facilities">
              <span class="lnr lnr-users  "></span>
              <a href="#"><h4>Keluarga Berencana (KB)</h4></a>
              <p>
                Membantu dalam konsultasi perencanaan Keluarga Berencana Anda.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End facilities Area -->

<!-- Start team Area -->
  <section class="team-area section-gap" id="dokter">
      <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="menu-content pb-70 col-lg-7">
                  <div class="title text-center">
                      <h1 class="mb-10">Dokter Kami</h1>
                      <p>Professional, Komunikatif, dan Ramah. </p>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center d-flex align-items-center">
              <div class="col-lg-3 col-md-6 single-team">
                  <div class="thumb">
                      <img class="img-fluid" src="{{ asset('medical/img/foto/t1.jpeg') }}" alt="">
                      <div class="align-items-end justify-content-center d-flex">
                          <p>
                            Dokter Spesialis Obstetri & Ginekologi
                          </p>
                          <h4><center>dr. Arif Tunjungseto, Sp.OG</center></h4>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 single-team">
                  <div class="thumb">
                      <img class="img-fluid" src="{{ asset('medical/img/foto/t2.jpeg') }}" alt="">
                      <div class="align-items-end justify-content-center d-flex">
                          <p>
                            Dokter Spesialis Anak
                          </p>
                          <h4><center>dr. Rizqi Rokhmadhoni Pikir, Sp.A</center></h4>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 single-team">
                  <div class="thumb">
                      <img class="img-fluid" src="{{ asset('medical/img/foto/t3.jpeg')}}" alt="">
                      <div class="align-items-end justify-content-center d-flex">
                          <p>
                            Dokter Spesialis Obstetri & Ginekologi
                          </p>
                          <h4><center>dr. Hartatiek Nila Karmila, Sp.OG</center></h4>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 single-team">
                  <div class="thumb">
                      <img class="img-fluid" src="{{ asset('medical/img/foto/t4.jpeg')}}" alt="">
                      <div class="align-items-end justify-content-center d-flex">
                          <p>
                            Dokter Spesialis Obstetri & Ginekologi
                          </p>
                          <h4><center>dr. Salmon Charles.P.T.Siahaan, Sp.OG</center></h4>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 single-team">
                  <div class="thumb">
                      <img class="img-fluid" src="{{ asset('medical/img/foto/t21.jpeg')}}" alt="">
                      <div class="align-items-end justify-content-center d-flex">
                          <p>
                            Dokter Spesialis Obstetri & Ginekologi
                          </p>
                          <h4><center>Muhammad Ardian.C.L., dr. Sp.OG(K), M. Kes</center></h4>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End team Area -->




      <!-- Start brands Area -->
      <section class="brands-area">
          <div class="container">
              <div class="brand-wrap section-gap">
                  <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                      <div class="col single-brand">
                          <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
                      </div>
                      <div class="col single-brand">
                          <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
                      </div>
                      <div class="col single-brand">
                          <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
                      </div>
                      <div class="col single-brand">
                          <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
                      </div>
                      <div class="col single-brand">
                          <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End brands Area -->

      <section class="maps googleapis">
        <p> <h1><center>Temukan Kami </h1></p>
        <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width=100% height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=ITS%20surabaya&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> -->
          <div class="mapouter"><div class="gmap_canvas"><iframe width=100% height="400" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.8320786827517!2d112.6495755!3d-7.372710100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e2c1ffb44b6f%3A0x4af9204245931e35!2sKlinik+Graha+Amani!5e0!3m2!1sid!2sid!4v1546890264156" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </section>



    <!-- start footer Area -->
    <section id = "kontak">
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-2  col-md-6">
            <div class="single-footer-widget">
              <h6>Layanan</h6>
              <ul class="footer-nav">
                <li><a href="#">Praktek Dokter Spesialis</a></li>
                <li><a href="#">Pelayanan BKIA (Balai Kesehatan Ibu dan Anak) oleh Bidan terlatih</a></li>
                <!-- <li><a href="#">Graha Amani Farma (Pelayanan Farmasi)</a></li> -->
                <!-- <li><a href="#">Graha Vaksin Amani (Pelayanan vaksin anak dan dewasa secara paripurna dan terjangkau)</a></li>
                <li><a href="#">Baby Spa dan baby massage</a></li>
                <li><a href="#">Pelayanan home care</a></li>
                <li><a href="#">Cukur rambut bayi</a></li>
                <li><a href="#">Pertolongan persalinan normal 24 jam oleh bidan atau dokter spesialis kandungan</a></li> -->
              </ul>
            </div>
          </div>

          <div class="col-lg-4  col-md-6">
            <div class="single-footer-widget mail-chimp">
              <h6 class="mb-20">Hubungi Kami</h6>
              <p>
                Klinik Bersalin Graha Amani, Ruko Citra Harmoni, Sidoarjo.
              </p>
              <h3>082231212140</h3>
            </div>
          </div>

          <div class="col-lg-6  col-md-12">
            <div class="single-footer-widget newsletter">
              <h6>Berita Kesehatan</h6>
              <p>Dapatkan artikel dan berita tentang kesehatan ibu dan janin Anda.</p>
              <div id="mc_embed_signup">
                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                  <div class="form-group row" style="width: 100%">
                    <div class="col-lg-8 col-md-12">
                      <input name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
                    </div>

                    <div class="col-lg-4 col-md-12">
                      <button class="nw-btn primary-btn circle">Berlangganan<span class="lnr lnr-arrow-right"></span></button>
                    </div>
                  </div>
                  <div class="info"></div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="row footer-bottom d-flex justify-content-between">
          <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://infodata.co.id" target="_blank">3D-QlinikⓇ</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          <div class="col-lg-4 col-sm-12 footer-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
          </div>
        </div>
      </div>
    </footer>
  </section>
    <!-- End footer Area -->


    <script src="{{ asset('medical/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('medical/js/popper.min.js') }}"></script>
    <script src="{{ asset('medical/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('medical/https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA') }}"></script>
    <script src="{{ asset('medical/js/jquery-ui.js') }}"></script>
      <script src="{{ asset('medical/js/easing.min.js') }}"></script>
    <script src="{{ asset('medical/js/hoverIntent.js') }}"></script>
    <script src="{{ asset('medical/js/superfish.min.js') }}"></script>
    <script src="{{ asset('medical/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('medical/js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset('medical/js/jquery.tabs.min.js') }}"></script>
    <script src="{{ asset('medical/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('medical/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('medical/js/mail-script.js') }}"></script>
    <script src="{{ asset('medical/js/main.js') }}"></script>
  </body>
</html>
