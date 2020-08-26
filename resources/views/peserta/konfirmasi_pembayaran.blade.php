<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembayaran</title>
    <link rel="stylesheet" type="text/css" href="/css/konfirmasi_pembayaran.css">
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
            <div class="bungkus">
                <h2>KONFIRMASI PEMBAYARAN</h2>

                <form method="post" action="/peserta/konfirmasi_pembayaran" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                @if(session()->has('success'))
                <div style="text-align:center; border-radius:20px" class="alert alert-success alert-dismissible">
                <strong>{{ session('success') }}</strong>
                </div>
                @endif

                    <input type="text" class="atas_nama_rekening" id="atas_nama_rekening"
                    placeholder="Masukan Atas Nama Rekening" name="atas_nama_rekening" value="{{ old('atas_nama_rekening') }}" required>

                    <input type="text" class="bank_asal" id="bank_asal"
                    placeholder="Masukan Bank Asal" name="bank_asal" value="{{ old('bank_asal') }}" required>

                    <input type="number" class="nomor_rekening" id="nomor_rekening"
                    placeholder="Masukan Nomor Rekening" name="nomor_rekening" value="{{ old('nomor_rekening') }}" required>

                    <input type="number" class="total_pembayaran" id="total_pembayaran"
                    placeholder="Masukan Total Pembayaran" name="total_pembayaran" value="{{ old('total_pembayaran') }}" required>

                    <label>Bukti Pembayaran</label><br>
                    <input type="file" class="bukti_pembayaran" name="bukti_pembayaran" id="bukti_pembayaran" required accept=".jpg,.jpeg,.png"><br><br>

                    <button type="submit" class="btn">Submit</button>
                </form>



            </div>
            <!-- <div class="telpon">Phone Number</div> -->
        </div>
    </div>
</body>
</html>