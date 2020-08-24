<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="/css/regist.css">
</head>
<body>
    <div class="flex">
        <div class="background">
        <q class="lgs">Let's Get Started</q>
        </div>
        <div class="container">
            <form method="post" action="/postregister">
                    <h2 class="signin">REGISTER</h2>
                    {{ csrf_field() }}

                    <!-- REGISTER VIA PENDAFTARAN -->
                    <input type="text" class="username" id="username"
                    placeholder="Masukan Username" name="username">
                    <br><br>
                    <input type="text" class="nama_pendaftar" id="nama_pendaftar"
                    placeholder="Masukan Nama" name="nama_pendaftar">
                    <br><br>
                    <input type="text" class="asal_univ_pendaftar" id="asal_univ_pendaftar"
                    placeholder="Masukan Asal Universitas" name="asal_univ_pendaftar">
                    <br><br>
                    <input type="email" class="email_pendaftar" id="email_pendaftar"
                    placeholder="Masukan Email" name="email_pendaftar">
                    <br><br>
                    <input type="password" class="password_user" id="password_user"
                    placeholder="Masukan Password" name="password_user">
                    <br><br>
                    <!-- REGISTER VIA PENDAFTARAN -->

                    <!-- REGISTER VIA PENGGUNA -->
                    <!-- REGISTER VIA PENGGUNA -->

                    <button type="submit" class="btn">Sign Up</button>
                    <p>Already Have Account? <a href="/login">Click Here</p>
            </form>
        </div>
    </div>
</body>
</html>