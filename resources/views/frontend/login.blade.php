<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/login.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container forms">
        <div class="form-container">
            <div class="row">
                <!-- Menghapus offset pada kolom kiri -->
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    <div class="left-content">
                        <h3 class="title">Site Name</h3>
                        <h4 class="sub-title">Lorem ipsum dolor sit amet.</h4>
                    </div>
                    <div class="right-content">
                        <h3 class="form-title">Login</h3>
                        <form class="form-horizontal" action="login.php" method="POST">
                            <div class="form-group">
                                <label style="padding-right: 50%" for="username">Username / Email</label>
                                <input type="email" id="username" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label style="padding-right: 100%" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <button type="submit" class="btn signin">Login</button>
                            <div class="remember-me">
                                <input type="checkbox" id="remember" class="checkbox">
                                <label for="remember" class="check-label">Remember Me</label>
                            </div>
                            <a href="forgot_password.php" class="forgot">Forgot Password</a>
                        </form>
                        <span class="separator">OR</span>
                        <ul class="social-links">
                            <li><a href="login_with_google.php"><i class="fab fa-google"></i> Login with Google</a></li>
                            <li><a href="login_with_facebook.php"><i class="fab fa-facebook-f"></i> Login with
                                    Facebook</a></li>
                        </ul>
                        <span class="signup-link">Don't have an account? Sign up <a href="signup.php">here</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

</html>