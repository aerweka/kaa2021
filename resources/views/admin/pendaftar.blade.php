@extends('admin.master_admin')
@section('links-admin')
<link rel="stylesheet" type="text/css" href="{{asset('/styles/data_pendaftar_styles.css')}}">
@endsection
@section('body-admin')
<div class="row m-1 mb-4">
	<div class="card card-body" id="card-atas">
		<div class="row">
			<div class="col-9" id="welcome">
				<h1 id="welcometext">Welcome Back, Dea!</h1>
				<h3 id="welcomemenu">Data Pendaftar</h3>
			</div>
			<!-- <div class="col-3">
				<div class="card card-body" id="card-jam">
					<div class="row px-2">
						<div class="col-4">
							<div class="row px-1" id="hari">Sun,</div>
							<div class="row px-1" id="tgl">20 Aug</div>
						</div>
						<div class="col-8 p-0">
							<h1 id="jam" class="text-center align-middle">13:45</h1>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>
<div class="row ml-3">
	<h1 class="judulhalaman">Pendaftar</h1>
</div>
<nav id="nav-data-pendaftar">
	<div class="nav nav-tabs" id="nav-tab-pendaftar" role="tablist">
	<a class="ml-4 nav-item nav-link active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">Semua</a>

	<a class="ml-4 nav-item nav-link" id="navpeserta-tab" data-toggle="tab" href="#navpeserta" role="tab" aria-controls="navpeserta" aria-selected="false">Peserta</a>

	<a class="ml-4 nav-item nav-link" id="nav-pendaftar-tab" data-toggle="tab" href="#nav-pendaftar" role="tab" aria-controls="nav-pendaftar" aria-selected="false">Pendaftar</a>

	
	</div>
</nav>
<div class="row">
	<div class="tab-content" id="nav-tab-pendaftarContent">
	  <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
	  	<div class="container-fluid">
	  		<!-- Search dan Tombol Download -->
	  		<div class="row justify-content-between mb-4" class="atas-table-home">
	  			<div class="col-4">
	  				<form id="search-all">
	  					<input type="text" name="search-all" placeholder="Search">
	  				</form>
	  			</div>
	  			<div class="col-4 text-right">
	  				<button class="btn text-right download-btn px-4" id="download-dash-btn"><img class="align-top mr-2" src="{{asset('/assets/icons/download-icon.svg')}}"><span class="btn-text">Unduh Data</span></button>
	  			</div>
		  	</div>
		  	<!-- End of Search dan Tombol Download -->
		  	<!-- Header -->
		  	<div class="row p-2 table-header" id="table-home-header">
		  		<div class="col-2">No. Pendaftaran</div>
		  		<div class="col-3">Nama</div>
		  		<div class="col-2">Asal Universitas</div>
		  		<div class="col-2">Email</div>
		  		<div class="col-3">Status</div>
		  	</div>
		  	<!-- End of Header -->
		  	<!-- Data Pendaftar -->
			<div class="row mt-3 data-row-konfirmasi justify-content-between align-items-center">
				<div class="col-2"><span class="nopendaftaran">P0000001</span></div>
				<div class="col-3"><span class="nama">Elsa Jihan Salsabila</span></div>
				<div class="col-2"><span class="univ">Universitas Airlangga</span></div>
				<div class="col-2"><span class="email">elsajihans@gmail.com</span></div>
				<div class="col-2">
					<div class="row mb-2 ">
						<span class="badge badge-success statusdaftar">Menunggu Verifikasi</span>
					</div>
					<div class="row ">
						<span class="badge badge-danger statusdata">Data Belum Lengkap</span>
					</div>
				</div>
				<!-- Button dan Card yang benar -->
				<div class="col-1"><span class="drop" id="drop3" data-toggle="collapse" data-target="#data-semua3" aria-expanded="false" aria-controls="data-semua3"></span></div>
				<div class="collapse mt-3" id="data-semua3" style="width: 100%;">
				  <div class="card card-body card-drop">
				  	<div class="row">
					    <div class="col-5">
					    	<div class="row drop-nopendaftar" id="drop-nopendaftar3">P00000001</div>
					    	<div class="row dropdata drop-nama" id="drop-nama3"><span class="icon icon-nama"></span>Elsa Jihan Salsabila</div>
					    	<div class="row dropdata drop-email" id="drop-email3"><span class="icon icon-email"></span>elsajihans@gmail.com</div>
					    	<div class="row">
					    		<div class="col-6 dropdata drop-notelp p-0" id="drop-notelp3"><span class="icon icon-telp"></span>081333654616</div>
					    		<div class="col-6 dropdata drop-line p-0" id="drop-line3"><span class="icon icon-line"></span>rizalfahm</div>
					    	</div>
					    	<div class="row dropdata drop-kota" id="drop-kota3"><span class="icon icon-kota"></span>Gresik</div>
					    	<div class="row dropdata drop-univ" id="drop-univ3"><span class="icon icon-univ"></span>Universitas Airlangga</div>
					    </div>
					    <div class="col-7">
					    	<div class="card card-body card-drop card-berkas" id="berkas3">
					    		<div class="row">
					    			<h1 class="judulcard">Berkas</h1>
					    		</div>
					    		<div class="row align-items-center">
					    			<div class="col-4">
					    				Scan KTM
					    			</div>
					    			<div class="col-3">
					    				<span class="badge badge-danger">Belum Diupload</span>
					    			</div>
					    			<div class="col-5">
					    				<button class="btn btn-secondary"><span class="icon icon-view"></span>Pratinjau</button>
					    				<button class="btn btn-primary"><span class="icon icon-download"></span>Unduh</button>
					    			</div>
					    		</div>
					    		<div class="dropdown-divider"></div>
					    		<div class="row align-items-center">
					    			<div class="col-4">
					    				Pas Foto
					    			</div>
					    			<div class="col-3">
					    				<span class="badge badge-success">Tersedia</span>
					    			</div>
					    			<div class="col-5">
					    				<button class="btn btn-secondary"><span class="icon icon-view"></span>Pratinjau</button>
					    				<button class="btn btn-primary"><span class="icon icon-download"></span>Unduh</button>
					    			</div>
					    		</div>
					    		<div class="dropdown-divider"></div>
					    		<div class="row align-items-center">
					    			<div class="col-4">
					    				Scan Keterangan
					    			</div>
					    			<div class="col-3">
					    				<span class="badge badge-success">Tersedia</span>
					    			</div>
					    			<div class="col-5">
					    				<button class="btn btn-secondary"><span class="icon icon-view"></span>Pratinjau</button>
					    				<button class="btn btn-primary"><span class="icon icon-download"></span>Unduh</button>
					    			</div>
					    		</div>
					    	</div>
					    </div>
				    </div>
				  </div>
				</div>
				<!-- End of Button dan Card yang benar -->
			</div>
			<div class="dropdown-divider"></div>
			<!-- End of Data Pendaftar -->
	  	</div>
	  </div>
	  <div class="tab-pane fade" id="nav-pendaftar" role="tabpanel" aria-labelledby="nav-pendaftar-tab">isinya profile</div>
	  <div class="tab-pane fade" id="navpeserta" role="tabpanel" aria-labelledby="navpeserta-tab">isinya contanct</div>
	</div>
</div>

@endsection
@section('script-admin')
<script type="text/javascript">
	$(document).ready(function(){
		$(".menu-ul").each(function(){
			$(this).removeClass("active");
		});
		$(".data-menu").addClass("active");
	});
</script>
@endsection