<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="/css/regist.css">
</head>
<body>
    <div class="background">
        <q class="lgs">Let's Get Started</q>
        <form method="post" action="/postregister">
            <div class="container">
                    <h2 class="signin">REGISTER</h2>
                    {{ csrf_field() }}
                    <input type="text" class="nama_pendaftar" id="nama_pendaftar"
                    placeholder="Masukan Nama" name="nama_pendaftar">
                    <br><br>
                    <input type="text" class="asal_univ_pendaftar" id="asal_univ_pendaftar"
                    placeholder="Masukan Asal Universitas" name="asal_univ_pendaftar">
                    <br><br>
                    <input type="email" class="email_pendaftar" id="email_pendaftar"
                    placeholder="Masukan Email" name="email_pendaftar">
                    <br><br>
                    <button type="submit" class="btn">Sign Up</button>
                    <p>Already Have Account? <a href="/login">Click Here</p>
                </div>
            </form>
        </div>
</body>
</html>