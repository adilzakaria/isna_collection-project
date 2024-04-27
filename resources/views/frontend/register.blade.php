<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

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
                        <h3 class="form-title">Register</h3>
                        <form class="form-horizontal" action="/register" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Username</label>
                                <input type="nama" placeholder="Username"
                                    class="form-control @error('nama') is-invalid @enderror" id="nama"
                                    name="nama" value="{{ old('nama') }}"
                                    style="background-color: rgb(236, 236, 236)">
                                @error('nama')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>No Hp</label>
                                <input type="hp" placeholder="No Hp"
                                    class="form-control @error('hp') is-invalid @enderror" id="hp" name="hp"
                                    value="{{ old('hp') }}" style="background-color: rgb(236, 236, 236)">
                                @error('hp')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group" style="margin-top: -15px">
                                <label>Email</label>
                                <input type="email" placeholder="Email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" value="{{ old('email') }}"
                                    style="background-color: rgb(236, 236, 236)">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group input-container">
                                <label>Password</label>
                                <input type="password" id="password" placeholder="Create Password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    style="background-color: rgb(236, 236, 236)">
                                <i class="far fa-eye" id="togglePassword"
                                    style="margin-top: 12px; cursor: pointer;"></i>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="remember-me" style="margin-top: -15px; width: 100%;">
                                <input class="checkbox" type="checkbox" id="agreementCheckbox">
                                <span class="check-label" for="agreementCheckbox">
                                    Saya menyetujui ketentuan yang berlaku
                                </span>
                            </div>
                            <button class="btn signin" id="registerButton" disabled
                                style="background-color: #ccc; margin-top: 20px; margin-bottom: -20px;">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // Toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Toggle the eye slash icon
            if (this.classList.contains('fa-eye-slash')) {
                this.classList.remove('fa-eye-slash');
                this.classList.add('fa-eye');
            } else {
                this.classList.remove('fa-eye');
                this.classList.add('fa-eye-slash');
            }
        });

        const agreementCheckbox = document.getElementById('agreementCheckbox');
        const registerButton = document.getElementById('registerButton');

        agreementCheckbox.addEventListener('change', function() {
            registerButton.disabled = !this.checked;
            if (this.checked) {
                registerButton.style.backgroundColor = '#007bff'; // Ganti dengan warna asal
            } else {
                registerButton.style.backgroundColor = '#ccc'; // Ganti dengan warna abu-abu
            }
        });

        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            if (!agreementCheckbox.checked) {
                event.preventDefault();
                alert('Anda harus menyetujui ketentuan yang berlaku.');
            }
        });
    </script>
</body>

</html>
