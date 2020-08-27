<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/login.css')}}">
</head>
<body>

    <div class="flex">
        <div class="background"></div>
        <div class="container">
            <form method="POST" action="{{ route('login') }}">
                    <h2 class="signin">Login</h2>
                    {{ csrf_field() }}
                    <table style="margin: auto;">
                        <tr>
                            <td>
                                <input type="text" name="username" id="username" class="username" placeholder="Masukan Username" required minlength="8">
                            </td>
                        </tr>
                        <tr>
                            <td><small id="text-username"></small></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="password" id="password_user" class="password_user" placeholder="Masukan Password" required minlength="8"></td>
                        </tr>
                        <tr>
                            <td><small id="text-password"></small>
                            </td>
                        </tr>
                        <tr>
                            <td><button type="submit" class="btn">Masuk</button></td>
                        </tr>
                    </table>
                    
            </form>
            <a href="{{ url('/forgotpassword') }}"><p>Lupa Password?</p></a>
            <p>Tidak punya akun?    <a href="{{ url('/register') }}">Daftar disini.</a></p>
        </div>
    </div>
</body>
<!-- JQuery Script -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#username").on("input",function(){
            if($("#username").val().length > 5){
                if($("#username").val().length < 8){
                    $("#text-username").html("Minimal 8 karakter");
                }
                else{
                    $.ajax({
                        type: 'GET',
                        url: "{{url('/cekusername/')}}"+"/"+$("#username").val(),
                        success: function (results) {
                            if (results.success === true) {
                                $("#text-username").html("Username ditemukan");
                            }
                            else{
                                $("#text-username").html("Username tidak ditemukan");
                            }
                        }
                    });
                }
            }
        });
        $("#password_user").on("input",function(){
            if($("#password_user").val().length > 5){
                if($("#password_user").val().length < 8){
                    $("#text-password").html("Minimal 8 karakter");
                }
                else{
                    $("#text-password").html("");
                }
            }
        });
    });
</script>
</html>