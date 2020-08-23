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
				<h3 id="welcomemenu">Verifikasi Pembayaran</h3>
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
	<h1 class="judulhalaman">Konfirmasi Pembayaran</h1>
</div>
<nav id="nav-data-pendaftar">
	<div class="nav nav-tabs" id="nav-tab-data-konfirmasi" role="tablist">
	<a class="ml-4 nav-item nav-link active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">Semua</a>

	<a class="ml-4 nav-item nav-link" id="navbelum-tab" data-toggle="tab" href="#nav-belum" role="tab" aria-controls="nav-belum" aria-selected="false">Butuh Verifikasi</a>

	<a class="ml-4 nav-item nav-link" id="nav-sudah-tab" data-toggle="tab" href="#nav-sudah" role="tab" aria-controls="nav-sudah" aria-selected="false">Terverifikasi</a>
	</div>
</nav>
<div class="row">
	<div class="tab-content" id="nav-tab-data-konfirmasi">
	  <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
	  	<div class="container-fluid">
	  		<!-- Search dan Tombol Download -->
	  		<div class="row justify-content-between mb-4" class="atas-table-home">
	  			<div class="col-4">
	  				<form id="search-all">
	  					<input type="text" name="search-all" placeholder="Search" id="searchall">
	  				</form>
	  			</div>
		  	</div>
		  	<!-- End of Search dan Tombol Download -->
		  	<!-- Header -->
		  	<div class="row p-2 table-header" id="table-home-header">
		  		<div class="col-2">No. Pendaftaran</div>
		  		<div class="col-3">Nama</div>
		  		<div class="col-2">Asal Universitas</div>
		  		<div class="col-2">Total</div>
		  		<div class="col-3">Status</div>
		  	</div>
		  	<!-- End of Header -->
		  	<!-- Data Pendaftar -->
		  	@foreach($datasemua as $d)
			<div class="row mt-3 data-row-konfirmasi justify-content-between align-items-center data-semua" id="datasemua-{{$d->id_pendaftaran}}">
				<div class="col-2"><span class="nopendaftaran searchable" id="nopendaftaran-{{$d->id_pendaftaran}}">{{$d->id_pendaftaran}}</span></div>
				<div class="col-3"><span class="nama searchable" id="nama-{{$d->id_pendaftaran}}">{{$d->nama_pendaftar}}</span></div>
				<div class="col-2"><span class="univ searchable" id="univ-{{$d->id_pendaftaran}}">{{$d->asal_univ_pendaftar}}</span></div>
				<div class="col-2"><span class="total">Rp {{$d->total_pembayaran}}</span></div>
				<div class="col-2">
					<div class="row mb-2 ">
						<span class="badge
						@if($d->status_pembayaran >= 0)
							@if($d->status_pembayaran == 1)
							badge-success
							@elseif($d->status_pembayaran == 2)
							badge-danger
							@else
							badge-danger
							@endif
						@else
						badge-danger
						@endif
						statuspembayaran" id="status_pembayaran{{$d->id_pembayaran}}">
							@if($d->status_pembayaran >= 0)
								@if($d->status_pembayaran == 1)
								Diterima
								@elseif($d->status_pembayaran == 2)
								Ditolak
								@elseif($d->status_pembayaran == 0)
								Menunggu Verifikasi
								@endif
							@else
							Belum Konfirmasi
							@endif
						</span>
					</div>
				</div>
				<!-- Button dan Card yang benar -->
				<div class="col-1"><span class="drop" id="drop{{$d->id_pendaftaran}}" data-toggle="collapse" data-target="#data-drop-semua{{$d->id_pendaftaran}}" aria-expanded="false" aria-controls="data-drop-semua{{$d->id_pendaftaran}}"></span></div>
				<div class="collapse mt-3" id="data-drop-semua{{$d->id_pendaftaran}}" style="width: 100%;">
				  <div class="card card-body card-drop">
				  	<div class="row">
					    <div class="col-4">
					    	<div class="row drop-nopendaftar" id="drop-nopendaftar3">{{$d->id_pendaftaran}}</div>
					    	<div class="row dropdata drop-nama" id="drop-nama3"><span class="icon icon-nama"></span>{{$d->nama_pendaftar}}</div>
					    	<div class="row dropdata drop-email" id="drop-email3"><span class="icon icon-email"></span>{{$d->email_pendaftar}}</div>
					    	<div class="row">
					    		<div class="col-6 dropdata drop-notelp p-0" id="drop-notelp3"><span class="icon icon-telp"></span>@if($d->no_telepon_pendaftar == null)
								-
								@else
								{{ $d->no_telepon_pendaftar }}
								@endif</div>
					    		<div class="col-6 dropdata drop-line p-0" id="drop-line3"><span class="icon icon-line"></span>@if($d->id_line_pendaftar == null)
								-
								@else
								{{ $d->id_line_pendaftar }}
								@endif</div>
					    	</div>
					    	<div class="row dropdata drop-kota" id="drop-kota3"><span class="icon icon-kota"></span>@if($d->asal_daerah == null)
								-
								@else
								{{ $d->asal_daerah }}
								@endif</div>
					    	<div class="row dropdata drop-univ" id="drop-univ3"><span class="icon icon-univ"></span>{{$d->asal_univ_pendaftar}}</div>
					    	<div class="row dropdata">
					    		Telah melakukan pembayaran menggunakan rekening
					    	</div>
					    	<div class="row dropdata">
					    		<span><b>{{$d->bank_asal}}<br>
					    			Atas Nama : {{$d->atas_nama_rekening}}<br>
					    			No. Rek : {{$d->nomor_rekening}}
					    		</b>
					    		</span>
					    		<br>
					    	</div>
					    	<div class="row dropdata">
					    		<span>Pada <b>{{$d->tanggal_pembayaran}}</b></span>
					    	</div>
					    </div>
					    <div class="col-4">
					    	<img src="{{asset('/assets/images/uploads/bukti-trf/1.jpg')}}" width="100%">
					    </div>
					    @if($d->status_pembayaran == 0)
					    <div class="col-4">
					    	<div class="row">
					    		<div class="card card-body card-drop card-berkas" id="berkas3">
					    		<div class="row justify-content-center">
					    			<h4 class="text-center pertanyaan-text">Apakah pembayaran sudah diterima dan sesuai?</h4>
					    		</div>
					    		<br>
					    		<div class="row justify-content-center mt-3">
					    			<div class="col-4">
					    				<button class="btn btn-secondary btn-lg btn-tidak" id="tidak-{{$d->id_pembayaran}}">Tidak</button>
					    			</div>
					    			<div class="col-4">
					    				<button class="btn btn-primary btn-lg btn-ya" id="ya-{{$d->id_pembayaran}}">Ya</button>
					    			</div>
					    		</div>
					    		<br>
					    		<div class="row justify-content-center mt-3">
					    			<h6 class="text-center">Aksi ini tidak dapat dikembalikan.</h6>
					    		</div>
					    	</div>
					    	</div>
					    	
					    </div>
					    @endif
				    </div>
				  </div>
				</div>
				<!-- End of Button dan Card yang benar -->
			</div>
			<div class="dropdown-divider data-semua" id="dividersemua-{{$d->id_pendaftaran}}"></div>
			@endforeach
			<div class="row justify-content-center" id="nodatasemua">
				<h5 class="text-center mt-3">Data tidak ditemukan.</h5>
			</div>
			<div class="row justify-content-end">
				{{ $datasemua->links() }}
			</div>
			<!-- End of Data Pendaftar -->
	  	</div>
	  </div>
	  <div class="tab-pane fade" id="nav-belum" role="tabpanel" aria-labelledby="nav-belum-tab">
	  	<div class="container-fluid">
	  		<!-- Search dan Tombol Download -->
	  		<div class="row justify-content-between mb-4" class="atas-table-home">
	  			<div class="col-4">
	  				<form id="search-belum">
	  					<input type="text" name="search-belum" placeholder="Search" id="searchbelum">
	  				</form>
	  			</div>
		  	</div>
		  	<!-- End of Search dan Tombol Download -->
		  	<!-- Header -->
		  	<div class="row p-2 table-header" id="table-home-header">
		  		<div class="col-2">No. Pendaftaran</div>
		  		<div class="col-3">Nama</div>
		  		<div class="col-2">Asal Universitas</div>
		  		<div class="col-2">Total</div>
		  		<div class="col-3">Status</div>
		  	</div>
		  	<!-- End of Header -->
		  	<!-- Data Pendaftar -->
		  	@foreach($databelum as $d)
			<div class="row mt-3 data-row-konfirmasi justify-content-between align-items-center data-belum" id="databelum-{{$d->id_pendaftaran}}">
				<div class="col-2"><span class="nopendaftaran searchable" id="nopendaftaran-{{$d->id_pendaftaran}}">{{$d->id_pendaftaran}}</span></div>
				<div class="col-3"><span class="nama searchable" id="nama-{{$d->id_pendaftaran}}">{{$d->nama_pendaftar}}</span></div>
				<div class="col-2"><span class="univ searchable" id="univ-{{$d->id_pendaftaran}}">{{$d->asal_univ_pendaftar}}</span></div>
				<div class="col-2"><span class="total">Rp {{$d->total_pembayaran}}</span></div>
				<div class="col-2">
					<div class="row mb-2 ">
						<span class="badge
						@if($d->status_pembayaran >= 0)
							@if($d->status_pembayaran == 1)
							badge-success
							@elseif($d->status_pembayaran == 2)
							badge-danger
							@else
							badge-danger
							@endif
						@else
						badge-danger
						@endif
						statuspembayaran" id="status_pembayaranbelum{{$d->id_pembayaran}}">
							@if($d->status_pembayaran >= 0)
								@if($d->status_pembayaran == 1)
								Diterima
								@elseif($d->status_pembayaran == 2)
								Ditolak
								@elseif($d->status_pembayaran == 0)
								Menunggu Verifikasi
								@endif
							@else
							Belum Konfirmasi
							@endif
						</span>
					</div>
				</div>
				<!-- Button dan Card yang benar -->
				<div class="col-1"><span class="drop" id="drop{{$d->id_pendaftaran}}" data-toggle="collapse" data-target="#data-belum{{$d->id_pendaftaran}}" aria-expanded="false" aria-controls="data-belum{{$d->id_pendaftaran}}"></span></div>
				<div class="collapse mt-3" id="data-belum{{$d->id_pendaftaran}}" style="width: 100%;">
				  <div class="card card-body card-drop">
				  	<div class="row">
					    <div class="col-4">
					    	<div class="row drop-nopendaftar" id="drop-nopendaftar3">{{$d->id_pendaftaran}}</div>
					    	<div class="row dropdata drop-nama" id="drop-nama3"><span class="icon icon-nama"></span>{{$d->nama_pendaftar}}</div>
					    	<div class="row dropdata drop-email" id="drop-email3"><span class="icon icon-email"></span>{{$d->email_pendaftar}}</div>
					    	<div class="row">
					    		<div class="col-6 dropdata drop-notelp p-0" id="drop-notelp3"><span class="icon icon-telp"></span>@if($d->no_telepon_pendaftar == null)
								-
								@else
								{{ $d->no_telepon_pendaftar }}
								@endif</div>
					    		<div class="col-6 dropdata drop-line p-0" id="drop-line3"><span class="icon icon-line"></span>@if($d->id_line_pendaftar == null)
								-
								@else
								{{ $d->id_line_pendaftar }}
								@endif</div>
					    	</div>
					    	<div class="row dropdata drop-kota" id="drop-kota3"><span class="icon icon-kota"></span>@if($d->asal_daerah == null)
								-
								@else
								{{ $d->asal_daerah }}
								@endif</div>
					    	<div class="row dropdata drop-univ" id="drop-univ3"><span class="icon icon-univ"></span>{{$d->asal_univ_pendaftar}}</div>
					    	<div class="row dropdata">
					    		Telah melakukan pembayaran menggunakan rekening
					    	</div>
					    	<div class="row dropdata">
					    		<span><b>{{$d->bank_asal}}<br>
					    			Atas Nama : {{$d->atas_nama_rekening}}<br>
					    			No. Rek : {{$d->nomor_rekening}}
					    		</b>
					    		</span>
					    		<br>
					    	</div>
					    	<div class="row dropdata">
					    		<span>Pada <b>{{$d->tanggal_pembayaran}}</b></span>
					    	</div>
					    </div>
					    <div class="col-4">
					    	<img src="{{asset('/assets/images/uploads/bukti-trf/1.jpg')}}" width="100%">
					    </div>
					    @if($d->status_pembayaran == 0)
					    <div class="col-4">
					    	<div class="row">
					    		<div class="card card-body card-drop card-berkas" id="berkas3">
					    		<div class="row justify-content-center">
					    			<h4 class="text-center pertanyaan-text">Apakah pembayaran sudah diterima dan sesuai?</h4>
					    		</div>
					    		<br>
					    		<div class="row justify-content-center mt-3">
					    			<div class="col-4">
					    				<button class="btn btn-secondary btn-lg btn-tidak-belum" id="tidak-{{$d->id_pembayaran}}">Tidak</button>
					    			</div>
					    			<div class="col-4">
					    				<button class="btn btn-primary btn-lg btn-ya-belum" id="ya-{{$d->id_pembayaran}}">Ya</button>
					    			</div>
					    		</div>
					    		<br>
					    		<div class="row justify-content-center mt-3">
					    			<h6 class="text-center">Aksi ini tidak dapat dikembalikan.</h6>
					    		</div>
					    	</div>
					    	</div>
					    	
					    </div>
					    @endif
				    </div>
				  </div>
				</div>
				<!-- End of Button dan Card yang benar -->
			</div>
			<div class="dropdown-divider data-belum" id="dividerbelum-{{$d->id_pendaftaran}}"></div>
			@endforeach
			<div class="row justify-content-center" id="nodatabelum">
				<h5 class="text-center mt-3">Data tidak ditemukan.</h5>
			</div>
			<div class="row justify-content-end">
				{{ $databelum->links() }}
			</div>
			<!-- End of Data Pendaftar -->
	  	</div>
	  </div>
	  <div class="tab-pane fade" id="nav-sudah" role="tabpanel" aria-labelledby="nav-sudah-tab">
	  	<div class="container-fluid">
	  		<!-- Search dan Tombol Download -->
	  		<div class="row justify-content-between mb-4" class="atas-table-home">
	  			<div class="col-4">
	  				<form id="search-sudah">
	  					<input type="text" name="search-sudah" placeholder="Search" id="searchsudah">
	  				</form>
	  			</div>
		  	</div>
		  	<!-- End of Search dan Tombol Download -->
		  	<!-- Header -->
		  	<div class="row p-2 table-header" id="table-home-header">
		  		<div class="col-2">No. Pendaftaran</div>
		  		<div class="col-3">Nama</div>
		  		<div class="col-2">Asal Universitas</div>
		  		<div class="col-2">Total</div>
		  		<div class="col-3">Status</div>
		  	</div>
		  	<!-- End of Header -->
		  	<!-- Data Pendaftar -->
		  	@foreach($datasudah as $d)
			<div class="row mt-3 data-row-konfirmasi justify-content-between align-items-center data-sudah" id="datasudah-{{$d->id_pendaftaran}}">
				<div class="col-2"><span class="nopendaftaran searchable" id="nopendaftaran-{{$d->id_pendaftaran}}">{{$d->id_pendaftaran}}</span></div>
				<div class="col-3"><span class="nama searchable" id="nama-{{$d->id_pendaftaran}}">{{$d->nama_pendaftar}}</span></div>
				<div class="col-2"><span class="univ searchable" id="univ-{{$d->id_pendaftaran}}">{{$d->asal_univ_pendaftar}}</span></div>
				<div class="col-2"><span class="total">Rp {{$d->total_pembayaran}}</span></div>
				<div class="col-2">
					<div class="row mb-2 ">
						<span class="badge
						@if($d->status_pembayaran >= 0)
							@if($d->status_pembayaran == 1)
							badge-success
							@elseif($d->status_pembayaran == 2)
							badge-danger
							@else
							badge-danger
							@endif
						@else
						badge-danger
						@endif
						statuspembayaran" id="status_pembayaran{{$d->id_pembayaran}}">
							@if($d->status_pembayaran >= 0)
								@if($d->status_pembayaran == 1)
								Diterima
								@elseif($d->status_pembayaran == 2)
								Ditolak
								@elseif($d->status_pembayaran == 0)
								Menunggu Verifikasi
								@endif
							@else
							Belum Konfirmasi
							@endif
						</span>
					</div>
				</div>
				<!-- Button dan Card yang benar -->
				<div class="col-1"><span class="drop" id="drop{{$d->id_pendaftaran}}" data-toggle="collapse" data-target="#data-sudah{{$d->id_pendaftaran}}" aria-expanded="false" aria-controls="data-sudah{{$d->id_pendaftaran}}"></span></div>
				<div class="collapse mt-3" id="data-sudah{{$d->id_pendaftaran}}" style="width: 100%;">
				  <div class="card card-body card-drop">
				  	<div class="row justify-content-between">
					    <div class="col-4">
					    	<div class="row drop-nopendaftar" id="drop-nopendaftar3">{{$d->id_pendaftaran}}</div>
					    	<div class="row dropdata drop-nama" id="drop-nama3"><span class="icon icon-nama"></span>{{$d->nama_pendaftar}}</div>
					    	<div class="row dropdata drop-email" id="drop-email3"><span class="icon icon-email"></span>{{$d->email_pendaftar}}</div>
					    	<div class="row">
					    		<div class="col-6 dropdata drop-notelp p-0" id="drop-notelp3"><span class="icon icon-telp"></span>@if($d->no_telepon_pendaftar == null)
								-
								@else
								{{ $d->no_telepon_pendaftar }}
								@endif</div>
					    		<div class="col-6 dropdata drop-line p-0" id="drop-line3"><span class="icon icon-line"></span>@if($d->id_line_pendaftar == null)
								-
								@else
								{{ $d->id_line_pendaftar }}
								@endif</div>
					    	</div>
					    	<div class="row dropdata drop-kota" id="drop-kota3"><span class="icon icon-kota"></span>@if($d->asal_daerah == null)
								-
								@else
								{{ $d->asal_daerah }}
								@endif</div>
					    	<div class="row dropdata drop-univ" id="drop-univ3"><span class="icon icon-univ"></span>{{$d->asal_univ_pendaftar}}</div>
					    	<div class="row dropdata">
					    		Telah melakukan pembayaran menggunakan rekening
					    	</div>
					    	<div class="row dropdata">
					    		<span><b>{{$d->bank_asal}}<br>
					    			Atas Nama : {{$d->atas_nama_rekening}}<br>
					    			No. Rek : {{$d->nomor_rekening}}
					    		</b>
					    		</span>
					    		<br>
					    	</div>
					    	<div class="row dropdata">
					    		<span>Pada <b>{{$d->tanggal_pembayaran}}</b></span>
					    	</div>
					    </div>
					    <div class="col-4">
					    	<img src="{{asset('/assets/images/uploads/bukti-trf/1.jpg')}}" width="100%">
					    </div>
				    </div>
				  </div>
				</div>
				<!-- End of Button dan Card yang benar -->
			</div>
			<div class="dropdown-divider data-sudah" id="dividersudah-{{$d->id_pendaftaran}}"></div>
			@endforeach
			<div class="row justify-content-center" id="nodatasudah">
				<h5 class="text-center mt-3">Data tidak ditemukan.</h5>
			</div>
			<div class="row justify-content-end">
				{{ $databelum->links() }}
			</div>
			<!-- End of Data Pendaftar -->
	  	</div>
	  </div>
	</div>
</div>

@endsection
@section('script-admin')
<script type="text/javascript">
	$(document).ready(function(){
		$(".menu-ul").each(function(){
			$(this).removeClass("active");
		});
		$(".verif-menu").addClass("active");

		$("#nodatasemua").hide();
		$("#nodatabelum").hide();
		$("#nodatasudah").hide();

		if($(".data-semua").length < 1){
			$("#nodatasemua").show();
		}

		if($(".data-belum").length < 1){
			$("#nodatabelum").show();
		}

		if($(".data-sudah").length < 1){
			$("#nodatasudah").show();
		}

		$("#searchall").on('input',function(){
			let found = false;
			if($(this).val().length > 2){
				$(".data-semua").hide();
				let searchterm = $(this).val().toLowerCase();
				$(".data-semua .searchable").each(function(index){
					if($(this).html().toLowerCase().includes(searchterm)){
						let id = $(this).attr('id').slice(-5);
						$("#datasemua-"+id).show();
						$("#datasemua-"+id+".data-semua").show();
						$("#dividersemua-"+id).show();
						found = true;
						$("#nodatasemua").hide();
					}
				});
				if(!found){
					$("#nodatasemua").show();
				}
			}
			else{
				$(".data-semua").show();
				$("#nodatasemua").hide();
				if($(".data-semua").length < 1){
					$("#nodatasemua").show();
				}
			}
		});

		$("#searchbelum").on('input',function(){
			let found = false;
			if($(this).val().length > 2){
				$(".data-belum").hide();
				let searchterm = $(this).val().toLowerCase();
				$(".data-belum .searchable").each(function(index){
					if($(this).html().toLowerCase().includes(searchterm)){
						let id = $(this).attr('id').slice(-5);
						$("#databelum-"+id).show();
						$("#databelum-"+id+" .data-belum").show();
						$("#dividerbelum-"+id).show();
						found = true;
						$("#nodatabelum").hide();
					}
				});
				if(!found){
					$("#nodatabelum").show();
				}
			}
			else{
				$(".data-belum").show();
				$("#nodatabelum").hide();

				if($(".data-belum").length < 1){
					$("#nodatabelum").show();
				}
			}
		});

		$("#searchsudah").on('input',function(){
			let found = false;
			if($(this).val().length > 2){
				$(".data-sudah").hide();
				let searchterm = $(this).val().toLowerCase();
				$(".data-sudah .searchable").each(function(index){
					if($(this).html().toLowerCase().includes(searchterm)){
						let id = $(this).attr('id').slice(-5);
						$("#datasudah-"+id).show();
						$("#datasudah-"+id+" .data-sudah").show();
						$("#dividersudah-"+id).show();
						found = true;
						$("#nodatasudah").hide();
					}
				});
				if(!found){
					$("#nodatasudah").show();
				}
			}
			else{
				$(".data-sudah").show();
				$("#nodatasudah").hide();
				if($(".data-sudah").length < 1){
					$("#nodatasudah").show();
				}
			}
		});

		$(".btn-ya").click(function(){
			let id = $(this).attr('id').slice(-5);
			Swal.fire({
			  title: 'Apakah anda yakin menerima pembayaran ini?',
			  text: "Aksi ini tidak dapat dikembalikan!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Ya',
			}).then(function (e) {

            if (e.value === true) {

                $.ajax({
                    type: 'GET',
                    url: "{{url('/admin/verifikasi/true/')}}"+id,
                    success: function (results) {
                        if (results.success === true) {
                        	Swal.fire(
							  'Berhasil!',
							  'Status pembayaran berhasil diubah',
							  'success'
							);
							$("#status_pembayaran"+id).removeClass('badge-danger');
							$("#status_pembayaran"+id).addClass('badge-success');
							$("#status_pembayaran"+id).html('Diterima');
							statusberubah(id);
                        } else {
                            Swal.fire(
							  'Gagal!',
							  'Status pembayaran tidak diubah',
							  'danger'
							)
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        });
		});

		$(".btn-tidak").click(function(){
			let id = $(this).attr('id').slice(-5);
			Swal.fire({
			  title: 'Apakah anda yakin menolak pembayaran ini?',
			  text: "Aksi ini tidak dapat dikembalikan!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Ya',
			}).then(function (e) {

            if (e.value === true) {

                $.ajax({
                    type: 'GET',
                    url: "{{url('/admin/verifikasi/false/')}}"+id,
                    success: function (results) {
                        if (results.success === true) {
                        	Swal.fire(
							  'Berhasil!',
							  'Status pembayaran berhasil diubah',
							  'success'
							);
							$("#status_pembayaran"+id).removeClass('badge-success');
							$("#status_pembayaran"+id).addClass('badge-danger');
							$("#status_pembayaran"+id).html('Ditolak');
							statusberubah(id);
                        } else {
                            Swal.fire(
							  'Gagal!',
							  'Status pembayaran tidak diubah',
							  'danger'
							)
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        });
		});

		$(".btn-ya-belum").click(function(){
			let id = $(this).attr('id').slice(-5);
			Swal.fire({
			  title: 'Apakah anda yakin menerima pembayaran ini?',
			  text: "Aksi ini tidak dapat dikembalikan!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Ya',
			}).then(function (e) {

            if (e.value === true) {

                $.ajax({
                    type: 'GET',
                    url: "{{url('/admin/verifikasi/true/')}}"+id,
                    success: function (results) {
                        if (results.success === true) {
                        	Swal.fire(
							  'Berhasil!',
							  'Status pembayaran berhasil diubah',
							  'success'
							);
							$("#status_pembayaranbelum"+id).removeClass('badge-danger');
							$("#status_pembayaranbelum"+id).addClass('badge-success');
							$("#status_pembayaranbelum"+id).html('Diterima');
							statusberubah(id);
                        } else {
                            Swal.fire(
							  'Gagal!',
							  'Status pembayaran tidak diubah',
							  'danger'
							)
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        });
		});

		$(".btn-tidak-belum").click(function(){
			let id = $(this).attr('id').slice(-5);
			Swal.fire({
			  title: 'Apakah anda yakin menolak pembayaran ini?',
			  text: "Aksi ini tidak dapat dikembalikan!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Ya',
			}).then(function (e) {

            if (e.value === true) {

                $.ajax({
                    type: 'GET',
                    url: "{{url('/admin/verifikasi/false/')}}"+id,
                    success: function (results) {
                        if (results.success === true) {
                        	Swal.fire(
							  'Berhasil!',
							  'Status pembayaran berhasil diubah',
							  'success'
							);
							$("#status_pembayaranbelum"+id).removeClass('badge-success');
							$("#status_pembayaranbelum"+id).addClass('badge-danger');
							$("#status_pembayaranbelum"+id).html('Ditolak');
							statusberubah(id);
                        } else {
                            Swal.fire(
							  'Gagal!',
							  'Status pembayaran tidak diubah',
							  'danger'
							)
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        });
		});

		function statusberubah(id){
			$("#data-belum"+id).remove();
		}
	});
</script>
@endsection