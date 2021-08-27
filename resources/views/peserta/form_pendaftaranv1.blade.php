<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>KAA 2021</title>
    <!-- Favicon -->
    <link rel="icon" href="../assets/img/brand/kaa fix biru dongker1.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
    @include('layouts.stylesGlobal')
</head>

<body>
    <!-- Sidenav -->
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="{{asset('/assets/images/acc2.png')}}">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->pendaftaran->nama_pendaftar}}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="/profile" class="dropdown-item">
                                    <i class="ni ni-lock-circle-open"></i>
                                    <span>Ganti Password</span>
                                </a>

                                <div class="dropdown-divider"></div>
                                <a href="{{ url('/logout') }}" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-12 col-7">
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="{{ url('/peserta/dashboard_user') }}">Dashboards</a></li>
                                </ol>
                            </nav>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="{{ url('/peserta/alur_pembayaran') }}">Alur Pembayaran</a></li>
                                </ol>
                            </nav>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="{{ url('/peserta/konfirmasi_pembayaran') }}">Konfirmasi Pembayaran</a></li>
                                </ol>
                            </nav>
                            @if(Auth::user()->pendaftaran->pembayarans != null)
                            @if(Auth::user()->pendaftaran->pembayarans->status_pembayaran == 1)
                            <!-- form pendaftaran muncul karena sudah bayar tapi belum dikonfirmasi -->
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="{{ url('/peserta/form_pendaftaran') }}">Form Pendaftaran</a></li>
                                </ol>
                            </nav>
                            @endif
                            @endif
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="{{ url('/peserta/cetak_kartu_peserta') }}">Cetak Kartu</a></li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                    <!-- Card stats -->


                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-sm-12 d-flex justify-content-center">
                                <h1 class="mb-0 ">Form Pendaftaran</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body border-0">
                                <div class="row align-items-center">
                                    <div class="col-sm-12 d-flex justify-content-center">
                                        @if(Auth::user()->pendaftaran->status_pendaftaran == 1 && Auth::user()->pendaftaran->pembayarans->status_pembayaran == 1)
                                        <h3>
                                            Pendaftaranmu telah diterima. Silahkan mencetak kartu peserta </h3>

                                        @elseif(Auth::user()->pendaftaran->pembayarans->status_pembayaran == 1)
                                        <form method="post" action="/peserta/form_pendaftaran" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            @if(session()->has('success'))
                                            <div style="text-align:center; border-radius:20px" class="alert alert-success alert-dismissible">
                                                <strong>{{ session('success') }}</strong>
                                            </div>
                                            @endif
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <div class="form-group mb-3" style="width: 500px;">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <!-- <div class="input-group-prepend">
                                                            </div> -->
                                                            <input class="form-control" input type="text" class="nama_pendaftar" id="nama_pendaftar" placeholder="Masukan Nama" name="nama_pendaftar" value="{{ auth()->user()->pendaftaran->nama_pendaftar}}" disabled required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <div class="form-group mb-3" style="width: 500px;">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <!-- <div class="input-group-prepend">
                                                            </div> -->
                                                            <input class="form-control" input type="text" class="asal_daerah" id="asal_daerah" placeholder="Masukan Asal Daerah" name="asal_daerah" value="{{ old('asal_daerah') }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 d-flex justify-content-start">
                                                    <div class="form-group mb-3" style="width: 500px;">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <!-- <div class="input-group-prepend">
                                                            </div> -->
                                                            <input class="form-control" input type="text" class="asal_univ_pendaftar" id="asal_univ_pendaftar" placeholder="Masukan Asal Universitas" name="asal_univ_pendaftar" value="{{ auth()->user()->pendaftaran->asal_univ_pendaftar}}" disabled required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <!-- <div class="input-group-prepend">
                                                            </div> -->
                                                            <input class="form-control" input type="email" class="email_pendaftar" id="email_pendaftar" placeholder="Masukan Email" name="email_pendaftar" value="{{ auth()->user()->pendaftaran->email_pendaftar}}" disabled required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 d-flex justify-content-start">
                                                    <div class="form-group mb-3" style="width: 500px;">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <!-- <div class="input-group-prepend">
                                                            </div> -->
                                                            <input class="form-control" input type="number" class="no_telepon_pendaftar" id="no_telepon_pendaftar" placeholder="Masukan Nomor Telepon" name="no_telepon_pendaftar" value="{{ old('no_telepon_pendaftar') }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <!-- <div class="input-group-prepend">
                                                            </div> -->
                                                            <input class="form-control" input type="text" class="id_line_pendaftar" id="id_line_pendaftar" placeholder="Masukan ID Line" name="id_line_pendaftar" value="{{ old('id_line_pendaftar') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label for="customer_id">Scan KTM</label><br>
                                            <input type="file" class="scan_ktm" name="scan_ktm" id="scan_ktm" accept=".pdf,.jpeg,.png,.jpg" required><br><br>

                                            <label for="customer_id">Pas Foto</label><br>
                                            <input type="file" class="pas_foto" name="pas_foto" id="pas_foto" accept=".jpeg,.png,.jpg" required><br><br>

                                            <label for="customer_id">Scan Surat Keterangan</label><br>
                                            <input type="file" class="scan_suket_aktif" name="scan_suket_aktif" id="scan_suket_aktif" accept=".pdf"><br><br>

                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <footer class="footer pt-0">
                    <div class="row alig n-items-center justify-content-lg-between">
                        <div class="col-lg-6">
                            <div class="copyright text-center  text-lg-left  text-muted">
                                &copy; 2021 <a href="https://www.instagram.com/himasi_ua" class="font-weight-bold ml-1" target="_blank">HIMASI UNAIR</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.instagram.com/kaasemnas2021/" class="nav-link" target="_blank">KAA 2021</a>
                                </li>
                                <li class="nav-item">
                                    <!-- <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Instagram</a> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
        <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <!-- Optional JS -->
        <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
        <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
        <!-- Argon JS -->
        <script src="../assets/js/argon.js?v=1.2.0"></script>
        @include('layouts.scriptsGlobal')
</body>

</html>