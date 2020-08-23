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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
@endsection

@section('nav')
	<nav class="navbar navbar-expand-lg">
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
				<!-- <li class="nav-item mr-4">
					<a data-toggle="collapse" href="#isiNotif" role="button" aria-expanded="false" aria-controls="isiNotif" id="notifbtn">
						<span class="right-icon notif-icon"></span>
					</a>
					<div class="collapse notifcard" id="isiNotif">
					  <div class="p-2" id="notifContainer">
					  	<div class="card card-notif card-body unread mx-1 my-2 p-3" id="notif1">
					  		Notif 1
					  	</div>
					  	<div class="card card-notif card-body read mx-1 my-2 p-3" id="notif2">
					  		Notif 2
					  	</div>
					  	<span id="markread">Mark All As Read</span>
					  </div>
					</div>
				</li> -->
				<li class="nav-item">
					<a data-toggle="collapse" href="#profilec" role="button" aria-expanded="false" aria-controls="profilec" id="profilebtn">
						<span class="right-icon profile-icon"></span>
					</a>
					<div class="collapse" id="profilec">
					  <div class="p-2" id="profileContainer">
					  	<div class="card card-body mx-1 my-2 p-3">
					  		<a href="{{url('/admin/gantipassword')}}"><span>Ganti Password</span></a>
					  	</div>
					  	<div class="card card-body mx-1 my-2 p-3">
					  		<a href="{{url('/logout')}}"><span>Logout</span></a>
					  	</div>
					  </div>
					</div>
				</li>
			</ul>
	</nav>
@endsection

@section('body')
	@yield('body-admin')
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script>
		$(document).ready(function() {
			$('#profilec').on('show.bs.collapse', function () {
				$("#isiNotif").collapse('hide');	  
			});
			$('#isiNotif').on('show.bs.collapse', function () {
				$("#profilec").collapse('hide');	  
			});
		})
	</script>
	@yield('script-admin')
@endsection