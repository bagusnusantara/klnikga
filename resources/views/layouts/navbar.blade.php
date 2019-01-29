<header id="header">
  <div class="header-top">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-sm-6 col-4 header-top-left">
          <a href="telp : 031 - 7871434"><span class="lnr lnr-phone-handset"></span> <span class="text"><span class="text">082231212140</span></span></a>
          <a href="mailto:support@klinikgrahaamani.com"><span class="lnr lnr-envelope"></span> <span class="text"><span class="text">support@klinikgrahaamani.com</span></span></a>
        </div>
        <div class="col-lg-6 col-sm-6 col-8 header-top-right">
          <!-- Authentication Links -->

        <!-- <a href="{{ url('logout') }}" class="primary-btn text-uppercase">Logout</a> -->
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
          @can('isPasien')
          <li class="menu-has-children"><a href="{{ url('Dashboard')}}">Dashboard</a></li>
          <li><a href="{{ url('Periksa')}}">Rekam Medis Pasien</a></li>
          <li><a href="{{ url('Masukan')}}">Kritik dan Saran</a></li>
          @endcan
          @can('isDokter')
          <li><a href="{{ url('ListPasien')}}">Data Pasien</a></li>
          <!-- <li><a href="{{ url('RekamMedis')}}">Histori Rekam Medis</a></li> -->
          <!-- <li><a href="{{ url('TindakanMedis')}}">Tindakan Medis</a></li> -->
          @endcan
          <li><li>
          <a>
          <a class="dropdown-item" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          </li></a></li>


        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </div>
</header><!-- #header -->
