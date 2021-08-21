@extends('layouts.layout')

@section('extendsTitle', 'Verifikasi Pembayaran')

@section('pageTitle', 'Verifikasi Pembayaran')

@section('extendsBreadcrump')
<li class="breadcrumb-item active" aria-current="page">Verifikasi Pembayaran</li>
@endsection

@section('headerContent')

@endsection
@section('bodyContent')
<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white">
      <div class="card-body container-fluid mt--3 mb--3 ">
        <div class="row">
          <div class="col-lg-12">
            <div class="nav-wrapper mb-1">
              <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">
                    <span class="d-none d-md-block"><i class="ni ni-align-left-2 mr-2"></i>Semua</span>
                    <span class="d-md-none">Semua</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">
                    <span class="d-none d-md-block"> <i class="ni ni-button-pause mr-2"></i>Belum Verifikasi</span>
                    <span class="d-md-none">Belum Verifikasi</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">
                    <span class="d-none d-md-block"><i class="ni ni-check-bold   mr-2"></i>Sudah Verifikasi</span>
                    <span class="d-md-none">Sudah Verifikasi</span>
                  </a>
                </li>
              </ul>
            </div>
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
                    <table class="table align-items-center">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col" class="sort" data-sort="id">ID Pendaftaran</th>
                          <th scope="col" class="sort" data-sort="nama">Nama </th>
                          <th scope="col" class="sort" data-sort="instansi">Nama Instansi</th>
                          <th scope="col" class="sort" data-sort="total">Total</th>
                          <th scope="col" class="sort" data-sort="status">Status</th>
                          <th scope="col" class="sort" data-sort="action"></th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        @foreach($datasemua as $d)
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
                          <td class="data-semua total" id="email-{{$d->id_pendaftaran}}">
                            Rp {{number_format($d->total_pembayaran,0,',','.')}}
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
                            <!-- <div class="mt-1">
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
                            </div> -->
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
              {{ $datasemua->links() }}
            </div>
          </div>
          <!-- second tab -->
          <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
            <div class="row my-2 mb-3">
              <div class="col-lg-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                  </div>
                  <input type="text" class="form-control" name="search-all" id="searchBlmVerif" aria-describedby="basic-addon1" placeholder="Cari Data">
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
                          <th scope="col" class="sort" data-sort="total">Total</th>
                          <th scope="col" class="sort" data-sort="status">Status</th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        <tr>
                          <th scope="row">
                          </th>
                          <td class="budget">
                            $2500 USD
                          </td>
                          <td>
                            <span class="badge badge-dot mr-4">
                              <i class="bg-warning"></i>
                              <span class="status">pending</span>
                            </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- third tab -->
          <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
            <div class="row my-2 mb-3">
              <div class="col-lg-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                  </div>
                  <input type="text" class="form-control" name="search-all" id="searchSdhVerif" aria-describedby="basic-addon1" placeholder="Cari Data">
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
                          <th scope="col" class="sort" data-sort="total">Total</th>
                          <th scope="col" class="sort" data-sort="status">Status</th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        <tr>
                          <th scope="row">
                          </th>
                          <td class="budget">
                            $2500 USD
                          </td>
                          <td>
                            <span class="badge badge-dot mr-4">
                              <i class="bg-warning"></i>
                              <span class="status">pending</span>
                            </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- main modal -->
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
                  <div class="row mb-3">
                    <div class="col d-flex justify-content-start">
                      <h3>Telah Melakukan Pembayaran</h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <p style="font-weight:600;">Detail :</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <p>Bank Asal</p>
                    </div>
                    <div class="col-sm-1">
                      <span>:</span>
                    </div>
                    <div class="col-sm-7">
                      <span class="bank_asal">
                      </span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <p>Atas Nama</p>
                    </div>
                    <div class="col-sm-1">
                      <span>:</span>
                    </div>
                    <div class="col-sm-7">
                      <span class="an_rekening">
                      </span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <p>Nomor Rekening</p>
                    </div>
                    <div class="col-sm-1">
                      <span>:</span>
                    </div>
                    <div class="col-sm-7">
                      <span class="no_rekening">
                      </span>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col" id="bukti_tf">
                      <label for="buktiTF">Bukti Transfer</label>
                      <img src="{{asset('assets/images/140615.jpg')}}" alt="" style="width: 100%; border: solid 1px rgba(178, 177, 185, .7); border-radius: 3%;">
                    </div>
                  </div>
                  <div class="card card-body" style="border: solid 1px rgba(178, 177, 185, .7)" id="card_confirmation">
                    <div class="row">
                      <div class="col justify-content-center">
                        <h4 class="text-center pertanyaan-text">Apakah pembayaran sudah diterima dan sesuai?</h4>
                      </div>
                    </div>
                    <div class="row ">
                      <div class="col d-flex justify-content-center">
                        <button class="btn btn-secondary btn-sm btn-tidak mx-2" id="">Tidak</button>
                        <button class="btn btn-primary btn-sm btn-ya mx-2" id="">Ya</button>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col justify-content-center">
                        <h6 class="text-center" style="color: red;">Aksi ini tidak dapat dikembalikan.</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
              </div>
              <!-- <div id="">
                    <h2>Berkas</h2>
                    scan ktm
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
                    pas foto
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
                    suket aktif
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
                  </div> -->
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

  $("#searchBlmVerif").on('input', function() {
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

  $("#searchSdhVerif").on('input', function() {
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
    var url = `http://127.0.0.1:8000/getPembayaran/${id}`;
    $.ajax({
      url: url,
      data: {
        id: id
      },
      dataType: 'JSON',
      success: function(data) {
        console.log(data);
        $('.id_pendaftaran').html(data.id_pendaftaran)
        // $('.btn-ya').attr('id', "ya-" + data.id_pendaftaran)
        // $('.btn-tidak').attr('id', "tidak-" + data.id_pendaftaran)
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
        $('.bank_asal').html(data.bank_asal)
        $('.an_rekening').html(data.atas_nama_rekening)
        $('.no_rekening').html(data.nomor_rekening)
        $('#bukti_tf img').attr('src', "{{url('storage/')}}" + data.bukti_pembayaran)
        if (data.status_pembayaran === 1) {
          $('#card_confirmation').hide();
        } else {
          $('#card_confirmation').show();
        }
      }
    })
  })
</script>

<script>
  $(".btn-ya").click(function() {
    let id = $('.id_pendaftaran').text();
    Swal.fire({
      title: 'Apakah anda yakin menerima pembayaran ini?',
      text: "Aksi ini tidak dapat dikembalikan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya',
    }).then(function(e) {

      if (e.value === true) {
        $.ajax({
          type: 'GET',
          url: "{{url('/admin/verifikasi/true/')}}" + id,
          success: function(results) {
            if (results.success) {
              Swal.fire(
                'Berhasil!',
                'Status pembayaran berhasil diubah',
                'success'
              );
              $("#status_pembayaran" + id).removeClass('badge-danger');
              $("#status_pembayaran" + id).addClass('badge-success');
              $("#status_pembayaran" + id).html('Diterima');
              // statusberubah(id);
            } else {
              Swal.fire(
                'Gagal!',
                'Status pembayaran tidak diubah',
                'error'
              )
            }
          }
        });
      } else {
        e.dismiss;
      }
    }, function(dismiss) {
      return false;
    });
  });

  $(".btn-tidak").click(function() {
    let id = $(this).attr('id').slice(-5);
    Swal.fire({
      title: 'Apakah anda yakin menolak pembayaran ini?',
      text: "Aksi ini tidak dapat dikembalikan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya',
    }).then(function(e) {

      if (e.value === true) {

        $.ajax({
          type: 'GET',
          url: "{{url('/admin/verifikasi/false/')}}" + id,
          success: function(results) {
            if (results.success === true) {
              Swal.fire(
                'Berhasil!',
                'Status pembayaran berhasil diubah',
                'success'
              );
              $("#status_pembayaran" + id).removeClass('badge-success');
              $("#status_pembayaran" + id).addClass('badge-danger');
              $("#status_pembayaran" + id).html('Ditolak');
              statusberubah(id);
            } else {
              Swal.fire(
                'Gagal!',
                'Status pembayaran tidak diubah',
                'error'
              )
            }
          }
        });

      } else {
        e.dismiss;
      }

    }, function(dismiss) {
      return false;
    });
  });
</script>
@endsection