<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        @if ((url()->current()) == (url('/Dashboard')))
        <h1 class="text-white">
            Dashboard
				</h1>
        @elseif ((url()->current()) == (url('/Periksa')))
        <h1 class="text-white">
            Rekam Medis Pasien
				</h1>
        @elseif ((url()->current()) == (url('/ListPasien')))
        <h1 class="text-white">
            Data Pasien
				</h1>
        @elseif ((url()->current()) == (url('/RekamMedis')))
        <h1 class="text-white">
            Histori Rekam Medis
				</h1>
        @endif
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->
