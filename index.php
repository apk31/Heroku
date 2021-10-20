<html>

<head>
  <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <title>MyShop</title>
  <link rel="icon" type="image/png" sizes="32x32" href="pic/favicon-32x32.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="imgslide.css">
  <link rel="stylesheet" href="card.css">
  <!--<style>
    body {
      background-color: white;
      margin: 0;
      font-family: Lato, Verdana, Geneva, Tahoma, sans-serif;
    }

    td {
      text-align: center;
      padding: 5px;
      width: 25%;
    }

    .listnav {
      list-style-type: none;
      margin: 0;
      padding: 0;

      height: 100px;
      background-color: white;
    }

    .isilist {
      float: left;
      height: 100px;
    }

    .isilist a,
    .dropbtn {
      display: block;
      color: black;
      text-align: center;
      padding: 25px 28px;
      text-decoration: none;
    }

    .isilist a:hover,
    .dropdown:hover .dropbtn {
      box-shadow: 0 5px gray;
      transition-duration: 0.3s;
    }

    .home {
      box-shadow: 0 5px gray;
    }

    .isi2 {
      float: right;
      height: 100px;
      padding: 15px;
    }

    .isi2 a {
      display: block;
      color: black;
      text-align: center;
      padding: 10px;
      text-decoration: none;
    }

    .btn1 a:hover {
      background-color: gray;
      color: honeydew;
      transition-duration: 0.2s;
    }

    .bunder {
      border-radius: 130px;
      background-color: lightgray;
      padding: 10px;
      text-decoration: none;
      border: 0px;
      width: 100px;
      color: black;
    }

    .bunder:hover {
      background-color: gray;
      color: honeydew;
      transition-duration: 0.3s;
    }

    .pad {
      padding: 30px;
    }

    .col {
      column-count: 2;
      height: 300px;
    }

    @keyframes fade {
      0% {
        background-image: url("pic/d1.png");
        background-size: 500px 150px;
        background-repeat: no-repeat;
      }

      16.67% {
        background-image: url("pic/d2.png");
        ;
        background-size: 500px 150px;
        background-repeat: no-repeat;
      }

      33.34% {
        background-image: url("pic/d3.png");
        ;
        background-size: 500px 150px;
        background-repeat: no-repeat;
      }

      50.01% {
        background-image: url("pic/d4.png");
        ;
        background-size: 500px 150px;
        background-repeat: no-repeat;
      }

      66.68% {
        background-image: url("pic/d5.png");
        ;
        background-size: 500px 150px;
        background-repeat: no-repeat;
      }

      83.35% {
        background-image: url("pic/d6.png");
        ;
        background-size: 500px 150px;
        background-repeat: no-repeat;
      }

      100% {
        background-image: url("pic/d1.png");
        ;
        background-size: 500px 150px;
        background-repeat: no-repeat;
      }
    }

    #fader {
      max-height: 150px;
      max-width: 100%;
      animation: fade 20s cubic-bezier(.42, 0, .58, 1) infinite;
    }

    .fot {
      opacity: 0.5;
    }

    .fot:hover {
      opacity: 1;
      transition-duration: 0.25s;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dr-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dr-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: center;
    }

    .dr-content a:hover {
      background-color: #e4e3e3;
    }

    .dropdown:hover .dr-content {
      display: block;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      width: 40%;

      border-radius: 15px;
      margin: auto;
      padding: 40px;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .gbrad {
      border-radius: 15px 15px 0 0;
    }

    .atxt {
      text-decoration: none;
      color: black;
    }
  </style>-->
  <!--<link rel="style" href="style/tukel.css">-->
</head>

<body style="font-weight: normal;">
    <nav class="navbar navbar-expand-sm navbar-light " style="padding: 15px 50px;background-color: rgb(255,255,255);font-size: 17px;">
        <!-- Brand/logo -->
        <a class="navbar-brand " href="kkstrap.html" style="padding-right: 40px;">
            <img src="pic/logo-min.png" alt="logo" style="width:60px;">
        </a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-body home" href="kkstrap.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-body " href="produkstrap.html">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-body" href="produkstrap.html">Review</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-body" href="produkstrap.html">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-body" href="produkstrap.html">News</a>
            </li>
        </ul>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-body bunder " href="loginstrap.html" style="box-shadow: none;margin-top: 7px;">Login</a>
                </li>
                <li class=nav-item>
                    <a class="nav-link" href="#" style="box-shadow: none;"><img src="pic/cart.png" class="cart" style="width: 33px;"></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row" style="padding: 90px 60px !important;margin:0;">
        <div class="col-sm-6">
            <div class="container">
                <h2 style="margin-bottom: 15px;">Get all your premium needs <br> at affordable price</h2>
                <p class="ts">Grab it now before the discounts end.</p>
                <div style="padding-left: 35px;padding-top: 5px;">
                    <a class="bunder" href="produk.html" style="padding: 10px 25px !important;">Product</a>
                    <a style="margin-left: 1rem;padding: 10px 25px !important;" class="bunder" href="/login.html">Login</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div id="fader"><img src="pic/d1.png" alt="Produk" id="a" height="150px" style="opacity: 0;"></div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid" style="padding: 4rem 40px;background-color: rgb(241, 241, 241);">
        <table width=100% style="table-layout:fixed;text-align: center;">
            <tr>
                <td><img class="cart" src="pic/clock.png" width="100px" alt="Fast"></td>
                <td><img class="cart" src="pic/offer.png" width="100px"></td>
                <td><img class="cart" src="pic/guarantee.png" width="100px"></td>
            </tr>
            <tr>
                <td>
                    <h2>Fast</h2>
                </td>
                <td>
                    <h2>Affordable</h2>
                </td>
                <td>
                    <h2>Guaranteed</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Respon admin <b style="color:rgb(255, 46, 46);"> PALING CEPAT </b> dan waktu proses akun yang <b style="color:rgb(255, 46, 46);">SUPER SINGKAT</b>* </p>
                </td>
                <td>
                    <p>Harga <b style="color:rgb(255, 46, 46);">DIJAMIN TERMURAH </b> setiap hari bagi pelanggan</p>
                </td>
                <td>Garansi akun <b style="color:rgb(255, 46, 46);">RESMI</b> dan proses klaim
                    <B style="color:rgb(255, 46, 46);">TERMUDAH</B> </td>
            </tr>
        </table>
    </div>
    <div class="container text-center">
        <h2 align=center>Our Favourite Products</h2><br>
        <div class="row">
            <div class="col-sm">
                <a href="produkstrap.html" style="text-decoration: none;color: black;">
                    <div class="card">
                        <div class="card-body"><img src="pic/d1.png" alt="Avatar" class="img-cards">
                            <div>
                                <h4 class="pad">Netflix</h4>
                                <p>Layanan Video Streaming</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="produkstrap.html" style="text-decoration: none;color: black;">
                    <div class="card">
                        <div class="card-body"><img src="pic/d4.png" alt="Avatar" class="img-cards">
                            <div>
                                <h4 style="padding: 5px;">VIU</h4>
                                <p>Layanan Video Streaming</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="produkstrap.html" style="text-decoration: none;color: black;">
                    <div class="card">
                        <div class="card-body"><img src="pic/d2.png" alt="Avatar" class="img-cards">
                            <div>
                                <h4 class="pad">Spotify</h4>
                                <p>Layanan Musik Streaming</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="produkstrap.html" style="text-decoration: none;color: black;">
                    <div class="card">
                        <div class="card-body"><img src="pic/d3.png" alt="Avatar" class="img-cards">
                            <div>
                                <h4 class="pad">Disney+ Hotstar</h4>
                                <p>Layanan Video Streaming</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <footer class="text-center" style="padding-top: 40px;">
        <p>&copy Copyright 2021 by Penguin Berjalan</p>
    </footer>
</body>


</html>