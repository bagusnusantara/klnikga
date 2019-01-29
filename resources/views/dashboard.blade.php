@extends('layouts.main')

@section('contents')

<!-- <div id="temps_div"></div>
<?= $lava->render('LineChart', 'Temps', 'temps_div') ?> -->

  <!-- Start top-category-widget Area -->


  			<!-- Start post-content Area -->
  			<section class="post-content-area">
  				<div class="container">
  					<div class="row">
  						<div class="col-lg-8 posts-list">

                <a class="posts-title"><h2>Selamat Datang di Klinik Graha Amani !!</h2></a>
  							<div class="single-post row">
  								<div class="col-lg-3 col-md-3 meta-details">
  									<ul class="tags">
  										<h4>Data Pasien</h4>
  									</ul>
  									<div class="user-details row">

  										<p class="user-name col-lg-12 col-md-12 col-6"><span class="lnr lnr-user"></span><a href="#"> : @foreach($user as $u){{ $u->name }} @endforeach</a></p>
  										<p class="date col-lg-12 col-md-12 col-6"><span class="lnr lnr-calendar-full"></span><a href="#"> :@foreach($user as $u) {{ $u->tgl_lahir }} @endforeach</a> </p>
                      <p class="view col-lg-12 col-md-12 col-6"><span class="lnr lnr-home"></span><a href="#"> :  </a>@foreach($user as $u) {{ $u->alamat_tinggal}} @endforeach</p>
                      <p class="view col-lg-12 col-md-12 col-6"><span class="lnr lnr-users"></span><a href="#"> Anak ke :@foreach($taksir as $anak) {{ $anak->anak_ke }} @endforeach </a> </p>

                      <div class="view col-lg-12 col-md-12 col-6">
                      <div class="single-sidebar-widget tag-cloud-widget">
                        <h6 class="tagcloud-title" style="background-color: #00e7ca">Usia Kehamilan</h6>
                        <ul>
                            <center><p>@foreach($taksir as $tanggal) {{ \Carbon\Carbon::parse($tanggal->hpht)->diff(\Carbon\Carbon::now())->format(' %m Bulan %d Hari') }} @endforeach</p></center>
                        </ul>
                      </div>
                     </div>
                     <!-- <div class="view col-lg-12 col-md-12 col-6">
                     <div class="single-sidebar-widget tag-cloud-widget">
                       <h6 class="tagcloud-title" style="background-color: #fffa81">Taksiran Persalinan</h6>
                       <ul>
                           <center><p>@foreach($taksir as $taksiran){{ $taksiran->taksiran_persalinan}} @endforeach</p></center>
                       </ul>
                     </div>
                    </div> -->

  									</div>
  								</div>
  								<div class="col-lg-9 col-md-9">
                    <br>
  									<div class="feature-img">
  										<img class="img-fluid" src="{{asset('medical/img/pregnant.png')}}" alt="">
  									</div>
  									<p class="excert">
  									</p>
  								</div>
  							</div>

  						</div>
  						<div class="col-lg-4 sidebar-widgets">
  							<div class="widget-wrap">

  								<div class="single-sidebar-widget tag-cloud-widget">
  									<h4 class="tagcloud-title" style="background-color: #00739f">Tanggal Periksa Selanjutnya</h4>
  									<ul>
    										<center><h2>@foreach($periksa_next as $next){{ $next->tgl_periksa_selanjutnya}}@endforeach</h2></center>
  									</ul>
  								</div>

                  <div class="single-sidebar-widget tag-cloud-widget">
  									<h4 class="tagcloud-title" style="background-color: #009c59">Resiko Kehamilan</h4>
  									<ul style="background-color: #FF0000 color:#FFF">
                        @foreach($pudji as $pu)
                        @if($pu->skor <= 2){
                          <center><h1 style="color: #00FF00">{{ $pu->skor }}</h1></center>
    										  <center><h4 style="color: #00FF00">KRR<br><small>(Kehamilan Resiko Rendah)</small></h4></center>
                        }

                        @elseif( $pu->skor >= 6 &&  $pu->skor <= 10 ){
                          <center><h1 style="color: #FFFF00">{{ $pu->skor }}</h1></center>
                          <center><h4 style="color: #FFFF00">KRT<br><small>(Kehamilan Resiko Tinggi)</small></h4></center>
                        }
                        @elseif( $pu->skor >=12)
                          <center><h1 style="color: #FF0000">{{ $pu->skor }}</h1></center>
                          <center><h4 style="color: #FF0000">KRST<br><small>(Kehamilan Resiko Sangat Tinggi)</small></h4></center>
                        @endif
                        @endforeach
  									</ul>
  								</div>
                  <div class="single-sidebar-widget tag-cloud-widget">
  									<h4 class="tagcloud-title" style="background-color: #dbd100">Taksiran Persalinan</h4>
  									<ul>
    										 <center><p>@foreach($taksir as $taksiran){{ $taksiran->taksiran_persalinan}} @endforeach</p></center>
  									</ul>
  								</div>


  							</div>
  						</div>

  					</div>
  				</div>
  			</section>
  			<!-- End post-content Area -->


@stop
