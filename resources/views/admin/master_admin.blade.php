@extends('master')

@section('Judul')
Admin - @yield('judul')
@endsection

@section('style')
@yield('style-admin')
@endsection

@section('links')
@yield('links-admin')
<link rel="stylesheet" type="text/css" href="{{asset('/styles/admin_styles.css')}}">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->

<!-- Favicon -->
<link rel="icon" href="{{ asset('/favicon.ico') }}" />
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- Icons -->
<link rel="stylesheet" href="{{ asset('/css/nucleo/css/nucleo.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('/css/fontawesome/css/all.min.css') }}" type="text/css">
<!-- Page plugins -->
<!-- Argon CSS -->
<link rel="stylesheet" href="{{ asset('/styles/argon.css?v=1.2.0') }}" type="text/css">
@endsection

@section('nav')
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
      <a class="navbar-brand" href="javascript:void(0)">
        <img src="{{ asset('/img/logo-brand.png') }}" class="navbar-brand-img" alt="...">
      </a>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="dashboard.html">
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="icons.html">
              <i class="ni ni-planet text-orange"></i>
              <span class="nav-link-text">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="map.html">
              <i class="ni ni-pin-3 text-primary"></i>
              <span class="nav-link-text">Google</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.html">
              <i class="ni ni-single-02 text-yellow"></i>
              <span class="nav-link-text">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tables.html">
              <i class="ni ni-bullet-list-67 text-default"></i>
              <span class="nav-link-text">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">
              <i class="ni ni-key-25 text-info"></i>
              <span class="nav-link-text">Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.html">
              <i class="ni ni-circle-08 text-pink"></i>
              <span class="nav-link-text">Register</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="upgrade.html">
              <i class="ni ni-send text-dark"></i>
              <span class="nav-link-text">Upgrade</span>
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading p-0 text-muted">
          <span class="docs-normal">Documentation</span>
        </h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
              <i class="ni ni-spaceship"></i>
              <span class="nav-link-text">Getting started</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
              <i class="ni ni-palette"></i>
              <span class="nav-link-text">Foundation</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
              <i class="ni ni-ui-04"></i>
              <span class="nav-link-text">Components</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
              <i class="ni ni-chart-pie-35"></i>
              <span class="nav-link-text">Plugins</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active active-pro" href="upgrade.html">
              <i class="ni ni-send text-dark"></i>
              <span class="nav-link-text">Upgrade to PRO</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<!-- <nav class="navbar navbar-expand-lg">
	<a class="navbar-brand" href="{{url('/admin/')}}">
		<img src="{{asset('/assets/images/logo.png')}}" width="50" height="50">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fa fa-bars"></i>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav menu-ul">
			<li class="nav-item mr-4 dash-menu">
				<a class="nav-link" href="{{url('/admin')}}">
					<span class="icon icon-home mr-2"></span>
					<span class="menu-text">Dashboard</span>
				</a>
			</li>
			<li class="nav-item mr-4 data-menu">
				<a class="nav-link" href="{{url('/admin/pendaftar')}}">
					<span class="icon icon-data mr-2"></span>
					<span class="menu-text">Data Pendaftar</span>
				</a>
			</li>
			<li class="nav-item mr-4 verif-menu">
				<a class="nav-link" href="{{url('/admin/verifikasi')}}">
					<span class="icon icon-verifikasi mr-2"></span>
					<span class="menu-text">Verifikasi Pembayaran</span>
				</a>
			</li>
		</ul>
	</div>
	<ul class="navbar-nav mr-2 ml-auto">
		<li class="nav-item">
			<a data-toggle="collapse" href="#profilec" role="button" aria-expanded="false" aria-controls="profilec" id="profilebtn">
				<span class="right-icon profile-icon"></span>
			</a>
			<div class="collapse" id="profilec">
				<div class="p-2" id="profileContainer">
					<div class="card card-body mx-1 my-2 p-3">
						<a href="{{url('/admin/changepassword')}}"><span>Ganti Password</span></a>
					</div>
					<div class="card card-body mx-1 my-2 p-3">
						<a href="{{url('/logout')}}"><span>Logout</span></a>
					</div>
				</div>
			</div>
		</li>
	</ul>
</nav> -->
@endsection

@section('body')
@yield('body-admin')
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
  $(document).ready(function() {
    $('#profilec').on('show.bs.collapse', function() {
      $("#isiNotif").collapse('hide');
    });
    $('#isiNotif').on('show.bs.collapse', function() {
      $("#profilec").collapse('hide');
    });
  })
</script>
@yield('script-admin')
@endsection