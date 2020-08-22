@extends('admin.master_admin')
@section('link-admin')
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
<nav>
	  <div class="nav nav-tabs" id="nav-tab-pendaftar" role="tablist">
	    <a class="nav-item nav-link active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">Semua</a>

	    <a class="nav-item nav-link" id="nav-pendaftar-tab" data-toggle="tab" href="#nav-pendaftar" role="tab" aria-controls="nav-pendaftar" aria-selected="false">Pendaftar</a>

	    <a class="nav-item nav-link" id="navpeserta-tab" data-toggle="tab" href="#navpeserta" role="tab" aria-controls="navpeserta" aria-selected="false">Peserta</a>
	  </div>
	</nav>
<div class="row ml-3">
	<div class="tab-content" id="nav-tab-pendaftarContent">
	  <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">Isinya home</div>
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