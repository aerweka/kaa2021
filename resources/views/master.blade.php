<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>@yield('Judul')</title>
  @yield('style')
  @yield('links')
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style type="text/css">
    footer {
      background-color: #1d2d8c;
      color: white;
    }

    a,
    a:hover {
      text-decoration: none;
      color: inherit;
    }
  </style>
</head>

<body>
  @yield('nav')
  <div class="container-fluid" style="min-height: 1000px">
    @yield('body')
  </div>
  <!-- Start Footer -->
  <footer class="footer pt-0 py-4">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-12">
        <!-- Start Copyright -->
        <div class="copyright text-center text-lg-center">
          &copy; 2020 Copyright <b><a href="https://www.instagram.com/himasi_ua/"> Himpunan Mahasiswa D3 Akuntansi Universitas Airlangga</a></b>
        </div>
        <!-- End Copyright -->
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <!-- JQuery Script -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <!-- Bootstrap Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  @yield('script')
</body>

</html>