<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
      <a class="navbar-brand" href="javascript:void(0)">
        <img src="{{ asset('/img/logo-brand.png') }}" class="navbar-brand-img" alt="...">
      </a>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <h6 class="navbar-heading p-0 mt-4 text-muted">
        <span class="docs-normal">Selamat Datang, ... !</span>
      </h6>
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            @if($sidebar == 'home')
            <a class="nav-link active" href="/test">
              @else
              <a class="nav-link" href="/test">
                @endif
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
          </li>
          <li class="nav-item">
            @if($sidebar == 'pendaftar')
            <a class="nav-link active" href="/testPendaftar">
              @else
              <a class="nav-link" href="/testPendaftar">
                @endif
                <i class="ni ni-chart-bar-32 text-primary"></i>
                <span class="nav-link-text">Data Pendaftar</span>
              </a>
          </li>
          <li class="nav-item">
            @if($sidebar == 'verifikasi')
            <a class="nav-link active" href="/testVerif">
              @else
              <a class="nav-link" href="/testVerif">
                @endif
                <i class="ni ni-check-bold text-primary"></i>
                <span class="nav-link-text">Verifikasi Pembayaran</span>
              </a>
          </li>
          <li class="nav-item">
            @if($sidebar == 'ubahPW')
            <a class="nav-link active" href="/testUbah">
              @else
              <a class="nav-link" href="/testUbah">
                @endif
                <i class="ni ni-settings-gear-65 text-primary"></i>
                <span class="nav-link-text">Ubah Sandi</span>
              </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Logout -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="{{url('logout')}}" target="_blank">
              <i class="ni ni-button-power text-danger"></i>
              <span class="nav-link-text">Keluar</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>