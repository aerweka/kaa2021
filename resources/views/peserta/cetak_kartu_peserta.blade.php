<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Kartu Peserta</title>
    <link rel="stylesheet" type="text/css" href="/css/cetak_kartu_peserta.css">
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
                <h2>CETAK KARTU PESERTA</h2>
                <input type="text" class="name" placeholder="Name">
                <a type="submit" class="btn" href="#">Submit</a>
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