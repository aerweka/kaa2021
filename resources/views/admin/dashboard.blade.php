@extends('admin.master_admin')
@section('judul','Dashboard')
@section('style-admin')
<style>
	canvas {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
</style>
@endsection
@section('link-admin')

@endsection
@section('body-admin')
<div class="row m-1 mb-4">
	<div class="card card-body" id="card-atas">
		<div class="row">
			<div class="col-12 col-xl-9" id="welcome">
				<h1 id="welcometext">Welcome Back, Dea!</h1>
				<h3 id="welcomemenu">Dashboard</h3>
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
<div class="row my-1 mx-1 justify-content-between">
	<div class="col col-xl-9 p-0">
		<div class="row col mb-4 pr-sm-0 pr-md-0 pr-lg-0 mr-sm-0 mr-md-0 mr-lg-0">
			<div class="card card-body px-5" id="card-graphic">
				<div class="row">
					<h1 class="judulcard" id="graphic-title">Data User</h1>
				</div>
				<!-- <div class="row align-items-center">
					<span class="dot mr-2" id="dot1"></span>
					<span class="mr-3 captgraph-card align-middle">Pendaftar</span>
					<span class="dot mr-2" id="dot2"></span><span class="captgraph-card align-middle">Peserta</span>
				</div> -->
				<div class="row">
					<div style="height: auto;min-height:340px ;width: 100%;">
						<canvas id="canvas"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="row pr-xl-4">
			<div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-5 pl-0">
				<div class="card" id="card-pendaftar">
					<div class="card-body">
						<div class="row p-0">
							<div class="col p-0">
								<h2 class="angka-kecil mb-1">{{$datacard[1]}}</h2>
								<h2 class="orang-kecil">pendaftar</h2>
							</div>
							<div class="col p-0 m-0">
								<img class="p-0 card-img-top-kecil" src="{{asset('/assets/icons/pendaftar.svg')}}">
							</div>
						</div>

					</div>
					
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-5 pl-0">
				<div class="card" id="card-konfirmasi">
					<div class="card-body">
						<div class="row p-0">
							<div class="col p-0">
								<h2 class="angka-kecil mb-1">{{$datacard[2]}}</h2>
								<h2 class="orang-kecil">konfirmasi pembayaran</h2>
							</div>
							<div class="col p-0 m-0">
								<img class="p-0 card-img-top-kecil konfirmasi" src="{{asset('/assets/icons/konfirmasi.svg')}}">
							</div>
						</div>

					</div>
					
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-3 pl-0">
				<div class="card"  id="card-pembayaran">
					<div class="card-body">
						<div class="row p-0">
							<div class="col p-0">
								<h2 class="angka-kecil mb-1">{{$datacard[3]}}</h2>
								<h2 class="orang-kecil">pembayaran diterima</h2>
							</div>
							<div class="col p-0 m-0">
								<img class="p-0 card-img-top-kecil" src="{{asset('/assets/icons/verifikasi.svg')}}">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-xl-3 p-0 d-none d-xl-block d-lg-block d-md-block d-sm-block pl-5">
		<div class="card p-0" id="card-peserta">
			<div class="card-body">
				<div class="row p-0">
					<div class="col" id="peserta">
						<h1 class="judulcard">Jumlah Peserta</h1>
						<h3 id="capt-peserta"><i>Pendaftar yang telah mengisi data dengan lengkap.</i></h3>
						<h2 class="angka">{{$datacard[0]}}</h2>
						<h2 class="orang">orang</h2>
						<div class="row justify-content-end mr-3">
							<a href="{{url('/admin/export/peserta')}}"><button class="btn download-btn px-4" id="download-dash-btn"><img class="align-top mr-2" src="{{asset('/assets/icons/download-icon.svg')}}"><span class="btn-text">Unduh Data</span></button></a>
						</div>
					</div>
					
				</div>
			</div>
			<img class="p-0 card-img-top" src="{{asset('/assets/icons/peserta.svg')}}">
		</div>
	</div>
	<div class="col-12 col-xl-3 p-0 d-block d-xl-none d-lg-none d-md-none d-sm-none mt-5">
		<div class="card p-0" id="card-peserta">
			<div class="card-body">
				<div class="row p-0">
					<div class="col" id="peserta">
						<h1 class="judulcard">Jumlah Peserta</h1>
						<h3 id="capt-peserta"><i>Pendaftar yang telah mengisi data dengan lengkap.</i></h3>
						<h2 class="angka">{{$datacard[0]}}</h2>
						<h2 class="orang">orang</h2>
						<div class="row justify-content-end mr-3 my-3">
							<a href="{{url('/admin/export/peserta')}}"><button class="btn download-btn px-4" id="download-dash-btn"><img class="align-top mr-2" src="{{asset('/assets/icons/download-icon.svg')}}"><span class="btn-text">Unduh Data</span></button></a>
						</div>
					</div>
					<img class="p-0 card-img-top" src="{{asset('/assets/icons/peserta.svg')}}">
				</div>
			</div>
			
		</div>
	</div>
	<!-- <div class="col-12 col-xl-3 p-0 mt-3 d-block d-sm-none d-xl-none">
		<div class="card p-0" id="card-peserta">
			<div class="card-body px-5">
				<div class="row p-0">
					<div class="col-6 col-xl-12 pr-5 pl-0" id="peserta">
						<h1 class="judulcard">Jumlah Peserta</h1>
						<h3 id="capt-peserta"><i>Pendaftar yang telah mengisi data dengan lengkap.</i></h3>
						<h2 class="angka">{{$datacard[0]}}</h2>
						<h2 class="orang">orang</h2>
						<button class="btn text-right download-btn mt-2" id="download-dash-btn-mobile"><img class="align-top mr-2" src="{{asset('/assets/icons/download-icon.svg')}}"><span class="btn-text">Unduh Data</span></button>
					</div>
					<img class="d-xl-none col-6 p-0 card-img-top-mobile" src="{{asset('/assets/icons/peserta.svg')}}" height="50%" width="50%">
				</div>
			</div>
		</div>
	</div> -->
	
</div>
<div class="row mx-1 mt-4 justify-content-between d-none d-xl-block d-lg-block d-md-block d-sm-block">
	<div class="col-12 col-xl-6 pr-2 pl-0 mb-3">
		<div class="card card-body px-4" id="card-konfirmasi-besar">
			<div class="row p-0 justify-content-between">
				<div class="col">
					<h1 class="judulcard">Konfirmasi Pembayaran</h1>
				</div>
				<div class="col-3 align-self-end">
					<h1 class="viewall text-right"><a href="{{url('/admin/verifikasi')}}">View All</a></h1>
				</div>
			</div>
			@foreach($datakonfirmasi as $d)
			<div class="row my-2 data-row-konfirmasi justify-content-between align-items-center">
				<div class="col-1 d-none d-xl-block d-lg-block d-md-block d-sm-block"><span class="foto"></span></div>
				<div class="col-3"><span class="nama">{{$d->nama_pendaftar}}</span></div>
				<div class="col-3 col-xs-2"><span class="total">Rp {{$d->total_pembayaran}}</span></div>
				<div class="col col-xl-4 col-lg-4 col-md-4 col-sm-4 text-right"><span class="badge
					@if($d->status_pembayaran)badge-success
					@else
					badge-danger
					@endif
					status">
					@if($d->status_pembayaran)Diterima
					@else
					Belum Diverifikasi
					@endif</span></div>
			</div>
			<div class="dropdown-divider"></div>
			@endforeach
		</div>
	</div>
	<div class="col-12 col-xl-6 px-2">
		<div class="card card-body px-4" id="card-pendaftar-besar">
			<div class="row p-0 justify-content-between">
				<div class="col align-self-end">
					<h1 class="judulcard">Pendaftar</h1>
				</div>
				<div class="col-3 align-self-end">
					<h1 class="viewall text-right"><a href="{{url('/admin/pendaftar')}}">View All</a></h1>
				</div>
			</div>
			@foreach($datapendaftar as $d)
			<div class="row my-2 data-row-konfirmasi align-items-center justify-content-between">
				<div class="col-1 mr-4 d-none d-xl-block d-lg-block d-md-block d-sm-block"><span class="foto"></span></div>
				<div class="col-4">
					<div class="row">
						<span class="nama">{{$d->nama_pendaftar}}</span>
					</div>
					<div class="row">
						<span class="univ">{{$d->asal_univ_pendaftar}}</span>
					</div>
				</div>
				<div class="col mr-5">
					<div class="row mb-2 justify-content-end">
						<span class="badge
						@if($d->status_pembayaran!=null)
							@if($d->status_pembayaran == 1)
							badge-success
							@else
							badge-danger
							@endif
						@else
						badge-danger
						@endif
						statusdaftar">
							@if(($d->status_pembayaran!=null))
								@if($d->status_pembayaran == 1)
								Diterima
								@else
								Menunggu Verifikasi
								@endif
							@else
							Belum Konfirmasi
							@endif
						</span>
					</div>
					<div class="row justify-content-end">
						<span class="badge @if($d->status_pendaftaran == 1)
							badge-success
							@else
							badge-danger
							@endif statusdata">
							@if($d->status_pendaftaran == 1)
							Data Lengkap
							@else
							Data belum lengkap
							@endif
						</span>
					</div>
				</div>
			</div>
			<div class="dropdown-divider"></div>
			@endforeach
		</div>
	</div>
</div>
@endsection
@section('script-admin')
<script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
<script src="https://www.chartjs.org/samples/latest/utils.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".menu-ul").each(function(){
			$(this).removeClass("active");
		});
		$(".dash-menu").addClass("active");
	});
</script>
<script>
	var jumlahPeserta = <?php echo json_encode($datagraphic_p); ?>;
	var jumlahPendaftar = <?php echo json_encode($datagraphic); ?>;
	console.log(jumlahPendaftar);
		var lineChartData = {
			labels: ['23 Agustus', '26 Agustus', '29 Agustus','1 September', '4 September','7 September','10 September','13 September'],
			datasets: [{
				label: 'Pendaftar',
				borderColor: window.chartColors.red,
				backgroundColor: window.chartColors.red,
				fill: false,
				data: [
					jumlahPendaftar[0],
					jumlahPendaftar[1],
					jumlahPendaftar[2],
					jumlahPendaftar[3],
					jumlahPendaftar[4],
					jumlahPendaftar[5],
					jumlahPendaftar[6],
					jumlahPendaftar[7]
				],
				
			}, {
				label: 'Peserta',
				borderColor: window.chartColors.blue,
				backgroundColor: window.chartColors.blue,
				fill: false,
				data: [
					jumlahPeserta[0],
					jumlahPeserta[1],
					jumlahPeserta[2],
					jumlahPeserta[3],
					jumlahPeserta[4],
					jumlahPeserta[5],
					jumlahPeserta[6],
					jumlahPeserta[7]
				],
				
			}]
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = Chart.Line(ctx, {
				data: lineChartData,
				options: {
					responsive: true,
					maintainAspectRatio: false,
					hoverMode: 'index',
					stacked: false,
					title: {
						display: false,
						text: 'Chart.js Line Chart - Multi Axis'
					},
					scales: {
						yAxes: [{
							type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
							display: true,
							position: 'left',
							id: 'y-axis-1',
						}, {
							type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
							display: true,
							position: 'right',
							id: 'y-axis-2',

							// grid line settings
							gridLines: {
								drawOnChartArea: false, // only want the grid lines for one axis to show up
							},
						}],
					}
				}
			});
		};
	</script>
@endsection