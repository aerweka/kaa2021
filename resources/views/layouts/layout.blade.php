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
  <!-- <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim"> -->
  <title>Admin - @yield('extendsTitle')</title>
  @include('layouts.stylesGlobal')
</head>

<body onload="startTime()">
  @include('layouts.sidebar')
  <!-- Main content -->
  <div class="main-content" id="panel">
    @include('layouts.navbar')
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-12 ">
              <h6 class="h2 text-white d-inline-block mb-0">@yield('pageTitle')</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="/test"><i class="fas fa-home"></i></a></li>
                  @yield('extendsBreadcrump')
                  <!-- <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Default</li> -->
                </ol>
              </nav>
            </div>
            <!-- <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
            </div> -->
          </div>
          @yield('headerContent')
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      @yield('bodyContent')

      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a href="https://www.instagram.com/himasi_ua" class="font-weight-bold ml-1 text-primary" target="_blank">HIMASI</a>
            </div>
          </div>
          <div class="col-lg-6">
          </div>
        </div>
      </footer>
    </div>
  </div>
  @include('layouts.scriptsGlobal')
  <script>
    function startTime() {
      const today = new Date();
      const day = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"]
      let h = today.getHours();
      let m = today.getMinutes();
      let s = today.getSeconds();
      let d = day[today.getDay()];
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('nav-date-desktop').innerHTML = d + ", " + h + ":" + m + ":" + s;
      document.getElementById('nav-date-mobile').innerHTML = d + ", " + h + ":" + m + ":" + s;
      setTimeout(startTime, 1000);
    }

    function checkTime(i) {
      if (i < 10) {
        i = "0" + i
      }; // add zero in front of numbers < 10
      return i;
    }
  </script>
</body>

</html>