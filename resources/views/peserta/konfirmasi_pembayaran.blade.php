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
                    <!-- <div class="container-flex">
                        <div class="bukti">
                            <label>Bukti Pembayaran</label><br>
                            <input type="file" class="bukti_pembayaran" name="bukti_pembayaran" id="bukti_pembayaran"><br><br>
                            <p class="note" style="color: red;">Note:Format yang diupload wajib (.jpg).</p>
                        </div>
                        
                        <div class="status">
                            <label>Status Pembayaran</label><br>
                            <a class="sp">Belum Disetujui</a>
                            <p class="note" style="color: red;">Note:Status pembayaran akan berubah "<b style="color: green;">DISETUJUI<b style="color: red;">" apabila pembayaran telah tervalidasi</p>
                        </div>
                    </div> -->
                    <!-- <button type="submit" class="btn">Submit</button><br><br> -->


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

                    <input type="text" class="asal_univ_pendaftar" id="asal_univ_pendaftar"
                    placeholder="Masukan Asal Universitas" name="asal_univ_pendaftar" value="{{ old('asal_univ_pendaftar') }}" required>

                    <input type="email" class="email_pendaftar" id="email_pendaftar"
                    placeholder="Masukan Email" name="email_pendaftar" value="{{ old('email_pendaftar') }}" required>

                    <input type="number" class="no_telepon_pendaftar" id="no_telepon_pendaftar"
                    placeholder="Masukan Nomor Telepon" name="no_telepon_pendaftar" value="{{ old('no_telepon_pendaftar') }}" required>

                    <input type="text" class="id_line_pendaftar" id="id_line_pendaftar"
                    placeholder="Masukan ID Line" name="id_line_pendaftar" value="{{ old('id_line_pendaftar') }}" required>

                    <label for="customer_id">Scan KTM</label><br>
                    <input type="file" class="scan_ktm" name="scan_ktm" id="scan_ktm"required><br><br>
                    
                    <label for="customer_id">Pas Foto</label><br>
                    <input type="file" class="pas_foto" name="pas_foto" id="pas_foto" required><br><br>
                    
                    <label for="customer_id">Scan Surat Keterangan</label><br>
                    <input type="file" class="scan_suket_aktif" name="scan_suket_aktif" id="scan_suket_aktif"><br><br>

                    <button type="submit" class="btn">Submit</button>
                </form>



            </div>
            <!-- <div class="telpon">Phone Number</div> -->
        </div>
    </div>
</body>
</html>