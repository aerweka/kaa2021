@extends('master')

@section('Judul')
	Admin - @yield('judul')
@endsection

@section('style')
	<style type="text/css">
		.nav-item.active{
			background-color: #8BBF99;
			border-radius: 20px;
			padding-left: 10px;
			padding-right: 10px;
		}
		.nav-item a{
			font-family: Montserrat;
			font-style: normal;
			font-weight: 500;
			font-size: 1rem;
			line-height: 22px;
			/* identical to box height */
			color: #8BBF99;
			max-width: 200px;
		}
		.nav-item.active a{
			color: #FFFFFF;
		}
		.menu-text{
			vertical-align: middle;
		}
	</style>
	@yield('style-admin')
@endsection

@section('links')
	@yield('links-admin')
@endsection

@section('body')
	<nav class="navbar navbar-expand-lg">
	  <a class="navbar-brand" href="{{url('/admin/')}}">
	    <img src="" width="30" height="30" alt="">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item mr-4 dash-menu active">
	        <a class="nav-link" href="{{url('/admin/dashboard')}}">
	        	<img class="mr-2" src="{{asset('/icons/home-icon.svg')}}">
	        	<span class="menu-text">Dashboard</span>
	        </a>
	      </li>
	      <li class="nav-item mr-4 data-menu">
	        <a class="nav-link" href="{{url('/admin/pendaftar')}}">
	        	<img class="mr-2" src="{{asset('/icons/datapendaftar-icon.svg')}}">
	        	<span class="menu-text">Daftar Pendaftar</span>
	        </a>
	      </li>
	      <li class="nav-item mr-4 verif-menu active">
	        <a class="nav-link" href="{{url('/admin/verifikasi')}}">
	        	<img class="mr-2" src="{{ asset('/icons/verifikasi-icon.svg')}}">
	        	<span class="menu-text">Verifikasi Pembayaran</span>
	        </a>
	      </li>
	    </ul>
	  </div>
	</nav>
	@yield('body-admin')
@endsection



@section('script')
	@yield('script-admin')
@endsection