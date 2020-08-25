<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alur Pembayaran</title>
    <link rel="stylesheet" type="text/css" href="/css/alur_pembayaran.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <tr>
                <a href="/peserta/dashboard_user" class="menu1">Dashboard</a>
                <a href="/peserta/alur_pembayaran" class="menu2">Alur Pembayaran</a>
                <a href="/peserta/konfirmasi_pembayaran" class="menu3">Konfirmasi Pembayaran</a>
                <a href="/peserta/form_pendaftaran" class="menu4">Form Pendaftaran</a>
                <a href="/peserta/cetak_kartu_peserta" class="menu5">Cetak Kartu Peserta</a>
            </tr>
        </div>
        <div class="conten">

            <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn"></button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#">Change Password</a>
                <a href="#">Logout</a>
            </div>
            </div>
            
            <div class="bungkus">
                <h2>ALUR PEMBAYARAN</h2>
                    <p>1. Peserta di wajibkan mendaftarkan akun.</p>
                    <p>2. Peserta melakukan pembayaran via bank <b style="color: red;">BRI 6291-01-016958-53-9 a/n Jeni Dwi Fitriana lalu upload bukti pembayaran (.jpg)</b>.</p>
                    <p>3. Peserta menungu pihak panitia untuk memvalidasi pembayaran yang sudah dilakukan.</p>
                    <p>4. Peserta mengisi formulir yang telah disediakan, termasuk :
                    <br>- Scan Kartu Tanda Mahasiswa.
                    <br>- Pas foto berukuran 3x4.
                    <br>- Scan keterangan aktif dari fakultas untuk angkatan 2015 keatas.</p>
                    <p>5. Data yang inputkan harus data yang sebenar - benarnya.</p>
                    <p>6. Setelah itu peserta dapat mendownload kartu peserta.</p>
            </div>
            <!-- <div class="telpon">Phone Number</div> -->
        </div>
    </div>

    <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
        }
        }
    }
    }
    </script>
    
</body>
</html>