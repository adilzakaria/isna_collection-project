<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>

    <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <!-- <link rel="stylesheet" href="http://jrain.oscitas.netdna-cdn.com/tutorial/css/fontawesome-all.min.css"> -->
    <!-- <link rel="stylesheet" href="https://e6t7a8v2.stackpathcdn.com/tutorial/css/fontawesome-all.min.css"> -->
    <link rel="stylesheet" href="../../css/fontawesome-all.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="http://jrain.oscitas.netdna-cdn.com/tutorial/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://e6t7a8v2.stackpathcdn.com/tutorial/css/bootstrap.min.css"> -->


    <link rel="stylesheet" href="../../css/common-1.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&amp;family=Poppins:wght@200;300;400;500;600&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/register.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="form-container">
                    <div class="left-content">
                        <h3 class="title" style="margin-bottom: 5px">Isna</h3>
                        <h3 class="title" style="margin-bottom: 70px">Collection</h3>
                        <h4 class="sub-title" style="word-break: break-all">Mewujudkan</h4>
                        <h4 class="sub-title" style="word-break: break-all">Kreativitas</h4>
                        <h4 class="sub-title" style="word-break: break-all">Melalui</h4>
                        <h4 class="sub-title" style="word-break: break-all">Jarum Dan</h4>
                        <h4 class="sub-title" style="word-break: break-all">Benang</h4>
                    </div>
                    <div class="right-content">
                        <h3 class="form-title">Forgot Password</h3>
                        <form class="form-horizontal" action="/forgot" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="Email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" value="{{ old('email') }}"
                                    style="background-color: rgb(236, 236, 236)" autofocus required>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Buat Password Baru</label>
                                <input type="password" placeholder="Buat Password Baru"
                                    class="form-control @error('password1') is-invalid @enderror" id="password1"
                                    name="password1" style="background-color: rgb(236, 236, 236)" required>
                                <i class="bx bx-hide show-icon" id="showPassword"></i>
                                @error('password1')
                                    <span class="text-danger">
                                        <i class="bx bx-error-circle error-icon"></i>{{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input type="password" placeholder="Konfirmasi Password"
                                    class="form-control @error('password2') is-invalid @enderror" id="password2"
                                    name="password2" style="background-color: rgb(236, 236, 236)" required>
                                <i class="bx bx-hide show-icon" id="showPassword"></i>
                                @error('password2')
                                    <span class="text-danger">
                                        <i class="bx bx-error-circle error-icon"></i>{{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <button class="btn signin" style="margin-top: 50px">Change</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
