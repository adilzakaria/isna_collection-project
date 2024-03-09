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
    <link rel="stylesheet" href="assets/css/order.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    @include('frontend.navcontent')

    <nav id="navbar" class="navbar"
        style="background-color: White; box-shadow: 0 15px 19px rgba(0, 0, 0, 0.2); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
        <h1
            style="text-align: left; font-weight: bold; margin: 0; width: 58%; font-family: 'Poppins', sans-serif; color: black; font-size: 25px">
            Pembayaran</h1>
    </nav>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
           <div class="card border-card" style="height: 100%;">
                <div class="card mt-5 mx-5">
                <h2 class="m-3">Pemesanan</h2>
                <div style="display: inline-flex; margin-left:1rem;">
                <h5 style="margin-left:1rem;">Username</h5>
                <h5 style="margin-left:1rem;">: adilzakaria</h5>
                </div>
                <div style="display: inline-flex; margin-left:1rem;">
                <h5 style="margin-left:1rem;">No-Hp</h5>
                <h5 style="margin-left:1rem;">: adilzakaria</h5>
                </div>
                <div style="display: inline-flex; margin-left:1rem;">
                <h5 style="margin-left:1rem;">Email</h5>
                <h5 style="margin-left:1rem;">: adilzakaria</h5>
                </div>
                <div style="display: inline-flex; margin-left:1rem;">
                <h5 style="margin-left:1rem;">Alamat</h5>
                <h5 style="margin-left:1rem;">: adilzakaria</h5>
                </div>
                </div>

                <!-- detail pesanan -->
                <div style="display: inline-flex; margin-left:1rem;">
                <div class="mx-5 mt-3" style="width: 60%;">
                <h2>Detail Pesanan</h2>
                <output class="form-control my-3" style="font-size: 15px;">Kameja Wanita</output>
                <output class="form-control my-3" style="font-size: 15px;">L</output>
                <input type="text-area" style="width: 100%; height: 30%;">
                <h6 class="my-3" style="font-size: 15px;">Total Harga : - </h6>
                <h6 style="font-size: 15px;">Estimasi Waktu : - </h6>
                </div>
                <div class="mt-5"">
                <img src="assets/img/portfolio/baju1.jpg" alt="" style="width:200px; height:200px;">    
                </div>
                </div>
                <div style="margin-left:4rem; margin-top: 5rem; margin-bottom: 3rem;">
                <button type="submit" class="btn btn-body kirim" style="width: 40%; height: 100%;font-size: 15px;">Bayar</button>
                </div>
           </div>
        </div>
    </div>
</div>

</body>