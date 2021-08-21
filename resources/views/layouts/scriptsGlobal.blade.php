<!-- Argon Scripts -->
<!-- Core -->
<script src="{{ asset('/js/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/js/bootstrapJs/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/js/js-cookie/js.cookie.js') }}"></script>
<!-- <script src="{{ asset('/js/sweetalert2/dist/sweetalert2.min.js') }}"></script> -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- chart JS -->
<!-- <script src="{{ asset('/js/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('/js/chart.js/Chart.extension.js') }}"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Argon JS -->
<script src="{{ URL::asset('/js/argon.js?v=1.2.0') }}"></script>
@yield('extendsScripts')