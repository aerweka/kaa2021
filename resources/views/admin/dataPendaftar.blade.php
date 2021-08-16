@extends('layouts.layout')

@section('extendsTitle', 'Data Pendaftar')

@section('pageTitle', 'Data Pendaftar')

@section('extendsBreadcrump')
<li class="breadcrumb-item active" aria-current="page">Data Pendaftar</li>
@endsection

@section('headerContent')

@endsection
@section('bodyContent')
<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white">
      <div class="card-body container-fluid mt--3 mb--3 ">
        <div class="row">
          <div class="col-lg-11">
            <div class="nav-wrapper mb-1">
              <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true" onclick="tabOne()">
                    <span class="d-none d-md-block"><i class="ni ni-align-left-2 mr-2"></i>Semua</span>
                    <span class="d-md-none">Semua</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false" onclick="tabTwo()">
                    <span class="d-none d-md-block"> <i class="ni ni-button-pause mr-2"></i>Pendaftar</span>
                    <span class="d-md-none">Pendaftar</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false" onclick="tabThree()">
                    <span class="d-none d-md-block"><i class="ni ni-check-bold mr-2"></i>Peserta</span>
                    <span class="d-md-none">Peserta</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- donwload button -->
          <div class="col=lg-1 d-flex justify-content-end align-items-center " id="btnDownload">
            <a href="{{url('/admin/export/semua')}}" type="button" class="btn btn-icon btn-primary" type="button" title="Unduh Semua Data">
              <span class="btn-inner--icon"><i class="ni ni-cloud-download-95 text-white"></i></span>
            </a>
          </div>
        </div>
        <div class="tab-content " id="myTabContent">
          <!-- first tab -->
          <div class="tab-pane fade show active " id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
            <div class="row my-2 mb-3">
              <div class="col">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                  </div>
                  <!-- search bar -->
                  <form action="" id="search-all">
                    <input type="text" class="form-control" name="search-all" id="searchAll" aria-describedby="basic-addon1" placeholder="Cari Data">
                  </form>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="table-responsive ">
                  <div>
                    <table class="table align-items-center" id="">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col" class="sort" data-sort="id">ID Pendaftaran</th>
                          <th scope="col" class="sort" data-sort="nama">Nama </th>
                          <th scope="col" class="sort" data-sort="instansi">Nama Instansi</th>
                          <th scope="col" class="sort" data-sort="email">Email</th>
                          <th scope="col" class="sort" data-sort="status">Status</th>
                          <th scope="col" class="sort" data-sort="action"></th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        @foreach($all as $d)
                        <tr class="data-semua" id="datasemua-{{$d->id_pendaftaran}}">
                          <th scope="row" class="data-semua nopendaftaran searchable" id="nopendaftaran-{{$d->id_pendaftaran}}">
                            {{$d->id_pendaftaran}}
                          </th>
                          <td class="data-semua nama searchable" id="nama-{{$d->id_pendaftaran}}">
                            {{$d->nama_pendaftar}}
                          </td>
                          <td class="data-semua univ searchable" id="univ-{{$d->id_pendaftaran}}">
                            {{$d->asal_univ_pendaftar}}
                          </td>
                          <td class="data-semua email searchable" id="email-{{$d->id_pendaftaran}}">
                            {{$d->email_pendaftar}}
                          </td>
                          <td>
                            <div>
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
                            statusdaftar">
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
                            <div class="mt-1">
                              <span class="badge @if($d->status_pendaftaran == 1)
                              badge-success
                              @else
                              badge-danger
                              @endif statusdata">
                                @if($d->status_pendaftaran)
                                Data Lengkap
                                @else
                                Data belum lengkap
                                @endif
                              </span>
                            </div>
                          </td>
                          <td>
                            <a type="button" class="btn btn-sm btn-icon-only text-light" data-toggle="modal" data-target="#mainModal" data-id='{{$d->id_pendaftaran}}' data-tab='semua'>
                              <i class="fas fa-ellipsis-v"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center" id="nodatasemua">
              <h5 class="text-center mt-3">Data tidak ditemukan.</h5>
            </div>
            <div class="row justify-content-end">
              {{ $all->links() }}
            </div>
          </div>
          <!-- second tab -->
          <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
            <div class="row my-2 mb-3">
              <div class="col">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                  </div>
                  <!-- search bar -->
                  <form action="" id="search-all">
                    <input type="text" class="form-control" name="search-all" id="searchPendaftar" aria-describedby="basic-addon1" placeholder="Cari Data">
                  </form>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="table-responsive ">
                  <div>
                    <table class="table align-items-center">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col" class="sort" data-sort="id">ID Pendaftaran</th>
                          <th scope="col" class="sort" data-sort="nama">Nama </th>
                          <th scope="col" class="sort" data-sort="instansi">Nama Instansi</th>
                          <th scope="col" class="sort" data-sort="email">Email</th>
                          <th scope="col" class="sort" data-sort="status">Status</th>
                          <th scope="col" class="sort" data-sort="action"></th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        @foreach($pendaftar as $d)
                        <tr class="data-semua" id="datasemua-{{$d->id_pendaftaran}}">
                          <th scope="row" class="data-peserta nopendaftaran searchable" id="nopendaftaran-{{$d->id_pendaftaran}}">
                            {{$d->id_pendaftaran}}
                          </th>
                          <td class="data-semua nama searchable" id="nama-{{$d->id_pendaftaran}}">
                            {{$d->nama_pendaftar}}
                          </td>
                          <td class="data-peserta univ searchable" id="univ-{{$d->id_pendaftaran}}">
                            {{$d->asal_univ_pendaftar}}
                          </td>
                          <td class="data-peserta email searchable" id="email-{{$d->id_pendaftaran}}">
                            {{$d->email_pendaftar}}
                          </td>
                          <td>
                            <div>
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
                            statusdaftar">
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
                            <div class="mt-1">
                              <span class="badge @if($d->status_pendaftaran == 1)
                              badge-success
                              @else
                              badge-danger
                              @endif statusdata">
                                @if($d->status_pendaftaran)
                                Data Lengkap
                                @else
                                Data belum lengkap
                                @endif
                              </span>
                            </div>
                          </td>
                          <td>
                            <a type="button" class="btn btn-sm btn-icon-only text-light" data-toggle="modal" data-target="#mainModal" data-id='{{$d->id_pendaftaran}}' data-tab='pendaftar'>
                              <i class="fas fa-ellipsis-v"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center" id="nodatasemua">
              <h5 class="text-center mt-3" id="nodatapendaftar">Data tidak ditemukan.</h5>
            </div>
            <div class="row justify-content-end">
              {{ $pendaftar->links() }}
            </div>
          </div>
          <!-- third tab -->
          <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
            <div class="row my-2 mb-3">
              <div class="col">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                  </div>
                  <!-- search bar -->
                  <form action="" id="search-all">
                    <input type="text" class="form-control" name="search-all" id="searchPeserta" aria-describedby="basic-addon1" placeholder="Cari Data">
                  </form>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="table-responsive ">
                  <div>
                    <table class="table align-items-center">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col" class="sort" data-sort="id">ID Pendaftaran</th>
                          <th scope="col" class="sort" data-sort="nama">Nama </th>
                          <th scope="col" class="sort" data-sort="instansi">Nama Instansi</th>
                          <th scope="col" class="sort" data-sort="email">Email</th>
                          <th scope="col" class="sort" data-sort="status">Status</th>
                          <th scope="col" class="sort" data-sort="action"></th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        @foreach($peserta as $d)
                        <tr class="data-peserta" id="datapeserta-{{$d->id_pendaftaran}}">
                          <th scope="row" class="data-peserta nopendaftaran searchable" id="nopendaftaran-{{$d->id_pendaftaran}}">
                            {{$d->id_pendaftaran}}
                          </th>
                          <td class="data-peserta nama searchable" id="nama-{{$d->id_pendaftaran}}">
                            {{$d->nama_pendaftar}}
                          </td>
                          <td class="data-peserta univ searchable" id="univ-{{$d->id_pendaftaran}}">
                            {{$d->asal_univ_pendaftar}}
                          </td>
                          <td class="data-peserta email searchable" id="email-{{$d->id_pendaftaran}}">
                            {{$d->email_pendaftar}}
                          </td>
                          <td>
                            <div>
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
                            statusdaftar">
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
                            <div class="mt-1">
                              <span class="badge @if($d->status_pendaftaran == 1)
                              badge-success
                              @else
                              badge-danger
                              @endif statusdata">
                                @if($d->status_pendaftaran)
                                Data Lengkap
                                @else
                                Data belum lengkap
                                @endif
                              </span>
                            </div>
                          </td>
                          <td>
                            <a type="button" class="btn btn-sm btn-icon-only text-light" data-toggle="modal" data-target="#mainModal" data-id='{{$d->id_pendaftaran}}' data-tab='peserta'>
                              <i class="fas fa-ellipsis-v"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center" id="nodatasemua">
              <h5 class="text-center mt-3" id="nodatapeserta">Data tidak ditemukan.</h5>
            </div>
            <div class="row justify-content-end">
              {{ $peserta->links() }}
            </div>
          </div>
          <!-- main mobal -->
          <div class="modal fade" id="mainModal" tabindex="-1" role="dialog" aria-labelledby="mainModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <h2>Biodata</h2>
                  <!-- id -->
                  <div class="row">
                    <div class="col-sm-3">
                      <p>Id</p>
                    </div>
                    <div class="col-sm-1">
                      <span>:</span>
                    </div>
                    <div class="col-sm-8">
                      <span class="id_pendaftaran"></span>
                    </div>
                  </div>
                  <!-- nama -->
                  <div class="row">
                    <div class="col-sm-3">
                      <p>Nama</p>
                    </div>
                    <div class="col-sm-1">
                      <span>:</span>
                    </div>
                    <div class="col-sm-8">
                      <span class="nama_pendaftar"></span>
                    </div>
                  </div>
                  <!-- asal -->
                  <div class="row">
                    <div class="col-sm-3">
                      <p>Asal</p>
                    </div>
                    <div class="col-sm-1">
                      <span>:</span>
                    </div>
                    <div class="col-sm-8">
                      <span class="asal_daerah">
                      </span>
                    </div>
                  </div>
                  <!-- instansi -->
                  <div class="row">
                    <div class="col-sm-3">
                      <p>Instansi</p>
                    </div>
                    <div class="col-sm-1">
                      <span>:</span>
                    </div>
                    <div class="col-sm-8">
                      <span class="asal_univ_pendaftar"></span>
                    </div>
                  </div>
                  <!-- email -->
                  <div class="row">
                    <div class="col-sm-3">
                      <p>Email</p>
                    </div>
                    <div class="col-sm-1">
                      <span>:</span>
                    </div>
                    <div class="col-sm-8">
                      <span class="email_pendaftar"></span>
                    </div>
                  </div>
                  <!-- no hp -->
                  <div class="row">
                    <div class="col-sm-3">
                      <p>Nomor HP</p>
                    </div>
                    <div class="col-sm-1">
                      <span>:</span>
                    </div>
                    <div class="col-sm-8">
                      <span class="no_telepon_pendaftar">
                      </span>
                    </div>
                  </div>
                  <!-- line -->
                  <div class="row">
                    <div class="col-sm-3">
                      Line
                    </div>
                    <div class="col-sm-1">
                      <span>:</span>
                    </div>
                    <div class="col-sm-8">
                      <span class="id_line_pendaftar">
                      </span>
                    </div>
                  </div>
                  <hr>
                  <div id="">
                    <h2>Berkas</h2>
                    <!-- scan ktm -->
                    <div class="row">
                      <div class="col-md-4">
                        <span>Scan KTM</span>
                      </div>
                      <div class="col-md-4">
                        <span class="scan_ktm badge">
                        </span>
                      </div>
                      <div class="col-md-4 d-flex justify-content-center link_ktm">
                        <a href="{{url('/admin/pendaftar/scan_ktm/'.$d->id_pendaftaran.'/view')}}" type="button" data-toggle="tooltip" data-placement="bottom" title="Lihat Berkas">
                          <i class="far fa-eye mx-3"></i>
                        </a>
                        <a href="{{url('/admin/pendaftar/scan_ktm/'.$d->id_pendaftaran.'/download')}}" type="button" data-toggle="tooltip" data-placement="bottom" title="Unduh Berkas">
                          <i class="fas fa-cloud-download-alt"></i>
                        </a>
                      </div>
                    </div>
                    <!-- pas foto -->
                    <div class="row mt-3">
                      <div class="col-md-4">
                        <span>Pas Foto</span>
                      </div>
                      <div class="col-md-4">
                        <span class="pas_foto badge ">
                        </span>
                      </div>
                      <div class="col-md-4 d-flex justify-content-center link_foto">
                        <a href="{{url('/admin/pendaftar/pas_foto/'.$d->id_pendaftaran.'/view')}}" type="button" data-toggle="tooltip" data-placement="bottom" title="Lihat Berkas">
                          <i class="far fa-eye mx-3"></i>
                        </a>
                        <a href="{{url('/admin/pendaftar/pas_foto/'.$d->id_pendaftaran.'/download')}}" type="button" data-toggle="tooltip" data-placement="bottom" title="Unduh Berkas">
                          <i class="fas fa-cloud-download-alt"></i>
                        </a>
                      </div>
                    </div>
                    <!-- suket aktif -->
                    <div class="row mt-3">
                      <div class="col-md-4">
                        <span>Scan Keterangan</span>
                      </div>
                      <div class="col-md-4">
                        <span class="scan_suket_aktif badge">
                        </span>
                      </div>
                      <div class="col-md-4 d-flex justify-content-center link_suket_aktif">
                        <a href="{{url('/admin/pendaftar/scan_suket_aktif/'.$d->id_pendaftaran.'/view')}}" type="button" data-toggle="tooltip" data-placement="bottom" title="Lihat sadf Berkas">
                          <i class="far fa-eye mx-3"></i>
                        </a>
                        <a href="{{url('/admin/pendaftar/scan_suket_aktif/'.$d->id_pendaftaran.'/download')}}" type="button" data-toggle="tooltip" data-placement="bottom" title="Unduh Berkas">
                          <i class="fas fa-cloud-download-alt"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('extendsScripts')
<script>
  function tabOne() {
    $("#btnDownload a").attr('href', "{{url('/admin/export/semua')}}").attr('title', 'Unduh Semua Data');
  };

  function tabTwo() {
    $("#btnDownload a").attr('href', "{{url('/admin/export/pendaftar')}}").attr('title', 'Unduh Data Pendaftar')
  }

  function tabThree() {
    $('#btnDownload a').attr('href', "{{url('/admin/export/peserta')}}").attr('title', 'Unduh Data Peserta');
  }
</script>
<script>
  $("#nodatasemua").hide();
  $("#nodatapendaftar").hide();
  $("#nodatapeserta").hide();

  $("#searchAll").on('input', function() {
    let found = false;
    if ($(this).val().length > 2) {
      $(".data-semua").hide();
      let searchterm = $(this).val().toLowerCase();
      $(".data-semua .searchable").each(function(index) {
        if ($(this).html().toLowerCase().includes(searchterm)) {
          let id = $(this).attr('id').slice(-5);
          $("#datasemua-" + id).show();
          $("#datasemua-" + id + " .data-semua").show();
          $("#dividersemua-" + id).show();
          found = true;
          $("#nodatasemua").hide();
        }
      });
      if (!found) {
        $("#nodatasemua").show();
      }
    } else {
      $(".data-semua").show();
      $("#nodatasemua").hide();
    }
  });

  $("#searchPendaftar").on('input', function() {
    let found = false;
    if ($(this).val().length > 2) {
      $(".data-pendaftar").hide();
      let searchterm = $(this).val().toLowerCase();
      $(".data-pendaftar .searchable").each(function(index) {
        if ($(this).html().toLowerCase().includes(searchterm)) {
          let id = $(this).attr('id').slice(-5);
          $("#datapendaftar-" + id).show();
          $("#datapendaftar-" + id + " .data-pendaftar").show();
          $("#dividerpendaftar-" + id).show();
          found = true;
          $("#nodatapendaftar").hide();
        }
      });
      if (!found) {
        $("#nodatapendaftar").show();
      }
    } else {
      $(".data-pendaftar").show();
      $("#nodatapendaftar").hide();
    }
  });

  $("#searchPeserta").on('input', function() {
    let found = false;
    if ($(this).val().length > 2) {
      $(".data-peserta").hide();
      let searchterm = $(this).val().toLowerCase();
      $(".data-peserta .searchable").each(function(index) {
        if ($(this).html().toLowerCase().includes(searchterm)) {
          let id = $(this).attr('id').slice(-5);
          $("#datapeserta-" + id).show();
          $("#datapeserta-" + id + " .data-peserta").show();
          $("#dividerpeserta-" + id).show();
          found = true;
          $("#nodatapeserta").hide();
        }
      });
      if (!found) {
        $("#nodatapeserta").show();
      }
    } else {
      $(".data-peserta").show();
      $("#nodatapeserta").hide();
    }
  });
</script>
<script>
  $('[data-toggle=modal]').on('click', function() {
    const id = $(this).data('id')
    var url = `http://127.0.0.1:8000/getSemua/${id}`;
    if ($(this).data('tab') === 'pendaftar') {
      url = `http://127.0.0.1:8000/getPendaftar/${id}`
    } else if ($(this).data('tab') === 'peserta') {
      url = `http://127.0.0.1:8000/getPeserta/${id}`
    } else {
      console.log('semua');
    }
    $.ajax({
      url: url,
      data: {
        id: id
      },
      dataType: 'JSON',
      success: function(data) {
        console.log(data);
        $('.id_pendaftaran').html(data.id_pendaftaran)
        $('.nama_pendaftar').html(data.nama_pendaftar)
        if (data.asal_daerah === null) {
          $('.asal_daerah').html('-')
        } else {
          $('.asal_daerah').html(data.asal_daerah)
        }
        $('.asal_univ_pendaftar').html(data.asal_univ_pendaftar)
        $('.email_pendaftar').html(data.email_pendaftar)
        if (data.no_telepon_pendaftar === null) {
          $('.no_telepon_pendaftar').html('-')
        } else {
          $('.no_telepon_pendaftar').html(data.no_telepon_pendaftar)
        }
        if (data.id_line_pendaftar === null) {
          $('.id_line_pendaftar').html('-')
        } else {
          $('.id_line_pendaftar').html(data.id_line_pendaftar)
        }
        if (data.scan_ktm === null) {
          $('.scan_ktm').addClass('badge-danger').html('Belum Diupload')
          $('.link_ktm').css({
            'pointer-events': 'none',
            'opacity': .8
          })
        } else {
          $('.scan_ktm').addClass('badge-success').html('Tersedia')
        }
        if (data.pas_foto === null) {
          $('.pas_foto').addClass('badge-danger').html('Belum Diupload')
          $('.link_foto').css({
            'pointer-events': 'none',
            'opacity': .8
          })
        } else {
          $('.pas_foto').addClass('badge-success').html('Tersedia')
        }
        if (data.scan_suket_aktif === null) {
          $('.scan_suket_aktif').addClass('badge-danger').html('Belum Diupload')
          $('.link_suket_aktif').css({
            'pointer-events': 'none',
            'opacity': .8
          })
        } else {
          $('.scan_suket_aktif').addClass('badge-success').html('Tersedia')
        }
      }
    })
  })
</script>
@endsection