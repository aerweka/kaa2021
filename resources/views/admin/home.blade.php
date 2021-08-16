@extends('layouts.layout')

@section('extendsTitle', 'Home')

@section('pageTitle', 'Home')

@section('headerContent')
<!-- start Card data lengkap -->
<div class="row">
  <!-- start Card jumlah peserta -->
  <div class="col-xl-3 col-md-6">
    <div class="card card-stats">
      <div class="card-body" style="height: 100px;">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Jumlah <span id="addOnSpace" style="visibility: hidden;">---</span> Peserta</h5>
            <span class="h2 font-weight-bold mb-0">{{$datacard[0]?? ''}}</span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow" id="home-card-icon">
              <i class="ni ni-single-02"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end Card jumlah peserta -->

  <!-- start Card jumlah pendaftar -->
  <div class="col-xl-3 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body" style="height: 100px;">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Pendaftar</h5>
            <span class="h2 font-weight-bold mb-0">{{$datacard[1]?? ''}}</span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
              <i class="ni ni-single-copy-04"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end Card jumlah pendaftar -->

  <!-- start Card jumlah pembayaran butuh verif -->
  <div class="col-xl-3 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body" style="height: 100px;">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Verifikasi Pembayaran</h5>
            <span class="h2 font-weight-bold mb-0">{{$datacard[2]?? ''}}</span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
              <i class="ni ni-money-coins"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end Card jumlah pembayaran butuh verif -->

  <!-- start Card jumlah pembayaran terverif -->
  <div class="col-xl-3 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body" style="height: 100px;">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Pembayaran Diterima</h5>
            <span class="h2 font-weight-bold mb-0">{{$datacard[3] ?? ''}}</span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
              <i class="ni ni-check-bold"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end Card jumlah pembayaran terverif -->
</div>
<!-- end Card data lengkap -->
@endsection

@section('bodyContent')
<!-- start chart pendaftar peserta -->
<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white">
      <div class="card-header bg-transparent">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Data Pengguna</h3>
          </div>
          <div class="col d-flex justify-content-end px-1">
            <a href="{{url('admin/export/moodle-user')}}" type="button" class="btn btn-icon btn-primary " type="button" data-toggle="tooltip" data-placement="left" title="Unduh Data Moodle User">
              <span class="btn-inner--icon"><i class="ni ni-cloud-download-95 text-white"></i></span>
            </a>
          </div>
        </div>

      </div>
      <div class="card-body">
        <div class="row">
          <div style="width: 100%;">
            <div class="chart">
              <canvas id="chartPesertaPendaftar" class="chart-canvas"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end chart pendaftar peserta -->

<div class="row">
  <!-- start tabel informasi Verifikasi pembayaran -->
  <div class="col-xl-6">
    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Verifikasi Pembayaran</h3>
          </div>
          <div class="col text-right">
            <a href="{{url('/admin/pendaftar')}}" class="btn btn-sm btn-primary">See all</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush" style="width: 100%;">
          <thead class="thead-light">
          </thead>
          <tbody>
            @foreach($datakonfirmasi as $d)
            <tr>
              <th scope="row">
                <div class="media align-items-center">
                  <a href="#" class="avatar rounded-circle">
                    <img alt="Image placeholder" src="
                    @if($d->pas_foto != null)
                    {{url('storage/'.$d->pas_foto)}}
					          @else
					          {{asset('/assets/images/defaultphoto.png')}}
					          @endif">
                  </a>
                </div>
              </th>
              <th>
                {{$d->nama_pendaftar}}
              </th>
              <td>
                Rp {{number_format($d->total_pembayaran,0,',','.')}}
              </td>
              <td>
                <span class="badge 
                @if($d->status_pembayaran) badge-success
					      @else badge-danger
					      @endif">
                  @if($d->status_pembayaran)Diterima
                  @else
                  Belum Diverifikasi
                  @endif
                </span>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- end tabel informasi Verifikasi pembayaran -->

  <!-- start tabel informasi pendaftar -->
  <div class="col-xl-6">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Pendaftar</h3>
          </div>
          <div class="col text-right">
            <a href="{{url('/admin/pendaftar')}}" class="btn btn-sm btn-primary">See all</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush" style="width: 100%;">
          <thead class="thead-light">
          </thead>
          <tbody>
            @foreach($datapendaftar as $d)
            <tr>
              <td scope="row">
                <div class="media align-items-center">
                  <a href="#" class="avatar rounded-circle">
                    <img alt="Image placeholder" src="
                    @if($d->pas_foto != null)
                    {{url('storage/'.$d->pas_foto)}}
                    @else
                    {{asset('/assets/images/defaultphoto.png')}}
                    @endif">
                  </a>
                </div>
              </td>
              <td>
                {{$d->nama_pendaftar}}
              </td>
              <td>
                {{$d->asal_univ_pendaftar}}
              </td>
              <td>
                <div>
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
                    @if(($d->status_pembayaran!=null && $d->status_pembayaran == 1))
                    Diterima
                    @else
                    Menunggu Verifikasi
                    @endif
                  </span>
                  <div class="mt-1">
                    <span class="badge 
                @if($d->status_pendaftaran == 1)
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
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- end tabel informasi pendaftar -->
</div>
@endsection

@section('extendsScripts')
<script>
  var jumlahPeserta = <?php echo json_encode($datagraphic_p); ?>;
  var jumlahPendaftar = <?php echo json_encode($datagraphic); ?>;
  console.log(jumlahPeserta);
  var lineChartData = {
    labels: [
      '31 Agustus',
      '7 September',
      '14 September',
      '21 September',
      '28 September',
      '5 Oktober',
      '12 Oktober',
      '19 Oktober'
    ],
    datasets: [{
        label: 'Pendaftar',
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
        borderColor: 'rgba(255, 72, 72, 1)',
        backgroundColor: 'rgba(255, 72, 72, .5)',
      },
      {
        label: 'Peserta',
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
        borderColor: 'rgba(119, 172, 241, 1)',
        backgroundColor: 'rgba(119, 172, 241, .5)',
      }
    ]
  };

  window.onload = function() {
    startTime();
    var ctx = document.getElementById('chartPesertaPendaftar').getContext('2d');
    window.myLine = new Chart(ctx, {
      type: 'bar',
      data: lineChartData,
      options: {
        responsive: true,
        maintainAspectRatio: false,
        hoverMode: 'index',
        stacked: false,
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
        },
      }
    });
  };
</script>
@endsection