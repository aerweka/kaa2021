<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    <!-- <img src="/public/undraw_welcome_cats_thqn.svg" alt=""> -->
</head>
<body>
    <div class="background">
        <form  method="POST" action="/postlogin">
            <div class="container">
                    <h2 class="signin">LOGIN</h2>
                    <input type="text" class="username" placeholder="Username">
                    <br><br>
                    <input type="password" class="password" placeholder="Password">
                    <br><br>
                    <button type="submit" class="btn">Sign In</button>
                    <p>Don't Have Account? <a href="/register">Click Here</p>
                </div>
            </form>
        </div>
</body>
</html>