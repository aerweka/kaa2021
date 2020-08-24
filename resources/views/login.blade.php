<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/login.css')}}">
    <!-- <img src="/public/undraw_welcome_cats_thqn.svg" alt=""> -->
</head>
<body>
    <div class="flex">
        <div class="background"></div>
        <div class="container">
            <form method="POST" action="{{ route('login') }}">
                    <h2 class="signin">LOGIN</h2>
                    {{ csrf_field() }}
                    <input type="text" name="username" id="username" class="username" placeholder="Masukan Username" required>
                    <br>
                    <input type="password" name="password" id="password_user" class="password_user" placeholder="Masukan Password" required>
                    <br>
                    <button type="submit" class="btn">Sign In</button>
                    <p>Don't Have Account? <a href="{{ url('/register') }}">Click Here</p>
            </form>
        </div>
    </div>
</body>
</html>