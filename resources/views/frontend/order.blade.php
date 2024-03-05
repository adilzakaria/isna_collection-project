<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesanan Saya</title>


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
    <link rel="stylesheet" href="assets/css/akun.css">
    <link rel="stylesheet" href="assets/css/order.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    @include('frontend.navcontent')

    <nav id="navbar" class="navbar"
        style="background-color: White; box-shadow: 0 15px 19px rgba(0, 0, 0, 0.2); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
        <h1
            style="text-align: left; font-weight: bold; margin: 0; width: 58%; font-family: 'Poppins', sans-serif; color: black; font-size: 25px">
            Hai, Pengguna</h1>
    </nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
           <div class="card border-card">
                <h2 class="m-3">Panduan Ukuran</h2>
                <!-- <div style="display: inline-flex; margin-left:1rem;">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <label for="exampleFormControlInput1" class="form-label" style="margin-left: 130px;">Email address</label>
                </div>
                <div style="display: inline-flex; margin-left:1rem;">
                <input style="width: 45%;" type="number" class="form-control" id="exampleFormControlInput1">
                <input style="width: 45%; margin-left: 2rem;" type="number" class="form-control" id="exampleFormControlInput1">
                </div>
                <div style="display: inline-flex; margin-left:1rem;">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <label for="exampleFormControlInput1" class="form-label" style="margin-left: 130px;">Email address</label>
                </div>
                <div style="display: inline-flex; margin-left:1rem; margin-bottom: 1rem;">
                <input style="width: 45%;" type="number" class="form-control" id="exampleFormControlInput1">
                <input style="width: 45%; margin-left: 2rem;" type="number" class="form-control" id="exampleFormControlInput1">
                </div> -->
                <div style="display: inline-flex;">
                <img src="assets/img/sizechart1.jpg" class="img-fluid"alt="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
           <div class="card border-card">
                <h2 class="m-3">Alamat Pengiriman</h2>
                <div class="form-group"style="display: inline-flex; margin-left:1rem;">
                <input style="width: 35%;" type="text" class="form-control input_form" id="provinsi" placeholder="Provinsi">
                <input style="width: 30%; margin-left: 2rem;" type="text" class="form-control input_form" id="kota" placeholder="Kota">
                <input style="width: 25%; margin-left: 2rem;" type="text" class="form-control input_form" id="kecamatan" placeholder="Kecamatan">
                </div>
                <div style="display: inline-flex; margin-left:1rem; margin-top:1rem;">
                <input style="width: 73%;" type="text" class="form-control input_form" id="alamat" placeholder="Alamat Lengkap">
                <input style="width: 20%; margin-left: 2rem;" type="text" class="form-control input_form" id="kode" placeholder="Kode Pos">
                </div>
                
                <div style="margin-top:2rem;">
                <h2 class="m-3">Detail Pesanan</h2>
                </div>
                <div style="margin-left:1rem; font-size: 14px;">
                <label for="exampleFormControlInput1" class="form-label">Ukuran</label>
                </div>
                <div class="form-group" style="display: inline-flex; margin-left:1rem;">
                <select style="width: 50%;" class="form-select-lg" aria-label="Default select example">
                    <option selected>S</option>
                    <option value="1">M</option>
                    <option value="2">L</option>
                    <option value="3">XL</option>
                    <option value="4">XXL</option>
                </select>
                </div>
                <div style="margin-left:1rem; font-size: 14px; margin-top: 1rem;">
                <label for="exampleFormControlInput1" class="form-label">Jenis Baju</label>
                </div>
                <div class="form-group" style="display: inline-flex; margin-left:1rem;">
                <select style="width: 50%;" class="form-select-lg" aria-label="Default select example">
                    <option selected>Kameja Wanita</option>
                    <option value="1">Kameja Pria</option>
                    <option value="2">Tunik</option>
                    <option value="3">Long Dress</option>
                    <option value="4">Blazer Pria</option>
                    <option value="4">Blazer Wanita</option>
                </select>
                </div>
                <div class="form-group" style="margin-left:1rem; font-size: 14px; margin-top: 1rem;">
                <label for="exampleFormControlInput1" class="form-label">Unggah Gambar</label>
                </div>
                <div class="form-group" style="display: inline-flex; margin-left:1rem;">
                <input class="form-control input_form form-control-lg" id="formFileLg" type="file" style="width: 90%;" placeholder="format .jpg/.png">
                </div>
                <div class="form-group" style="margin-left:1rem; font-size: 14px; margin-top: 1rem;">
                <label for="exampleFormControlInput1" class="form-label">Tambahan</label>
                </div>
                <div class="form-group" style="display: inline-flex; margin-left:1rem;">
                <textarea class="form-control input_form" id="exampleFormControlTextarea1" rows="3"style="width: 90%; height: 90px;"></textarea>
                </div>
                <div class="m-3 text-center">
                <button type="submit" class="btn btn-body kirim" style="width: 50%; font-size: 14px;">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>