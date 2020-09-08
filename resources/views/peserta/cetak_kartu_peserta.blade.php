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

                @if ($bayar2)
                <!-- form pendaftaran muncul karena sudah bayar tapi belum dikonfirmasi -->
                <a href="/peserta/form_pendaftaran" class="menu4">Form Pendaftaran</a>
                @else
                <!-- form pendaftaran hilang karena belum bayar -->
                <a href="/peserta/form_pendaftaran" class="menu4" style="display:none;">Form Pendaftaran</a>
                @endif

                <a href="/peserta/cetak_kartu_peserta" class="menu5">Cetak Kartu Peserta</a>
            </tr>
        </div>
        <div class="conten">
                <div class="bungkus">
                <h2>CETAK KARTU PESERTA</h2>
                <a type="submit" class="btn" href="/exportpdf">Print</a>
            </div>
        </div>
    </div>
</body>
</html>