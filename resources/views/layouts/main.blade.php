<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
@include('layouts/head')
@yield('head')
</head>
  <body>
    @include('layouts/navbar')
    @include('layouts/banner')
    <!-- Start our-mission Area -->
			<section class="our-mission-area section-gap">
				<div class="container">
                    @yield('contents')
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-10">
							<div class="title text-center">
                    @yield('content')
							</div>
						</div>
					</div>

				</div>
			</section>
		<!-- End our-mission Area -->



    <!-- start footer Area -->
    <footer class="footer-area section-gap">
      @include('layouts/footer')
    </footer>
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
    @include('layouts.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    @include('sweet::alert')
  </body>
</html>
