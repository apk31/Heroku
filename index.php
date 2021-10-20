<html>

<head>
  <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <title>MyShop</title>
  <link rel="icon" type="image/png" sizes="32x32" href="pic/favicon-32x32.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
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

<body>
  <div style="padding: 20px;">
    <ul class="listnav" style="padding: 20px;">
      <a href="index.php"><img src="pic\logo-min.png" alt="" width="60px" align=left style="padding-left: 30px;"></a>
      <li class="isilist" style="padding-left: 50px;"><a class="home" href="/index.php">Home</a></li>
      <li class="isilist">
        <div class="dropdown"><a class="dropbtn" href="produk.php">Product</a>
          <div class="dr-content"><a href="movie.php">Movie</a><a href="music.php">Music</a><a
              href="comingsoon.php">Other</a></div>
        </div>
      </li>
      <li class="isilist"><a href="review.php">Review</a></li>
      <li class="isilist"><a href="comingsoon.php">About</a></li>
      <li class="isilist"><a href="NEWS.php">News</a></li>
      <li class="isi2" style="padding:10;"><a href="cart.php"><img class="fot" src="pic/cart.png" width="30px"></a>
      </li>
      <li class="isi2"><a class="bunder btn1" href="login.php">Login</a></li>
    </ul>
  </div>
  <div class="col pad" style="height:300px">
    <div style="height: 250px;">
      <h1 style="padding-left: 50px;">Get all your premium needs <br>at affordable price</h1>
      <p style="font-size: 18px;padding-left: 50px;">Grab it now before the discounts end.</p><br>
      <div style="padding-left: 80px"><a class="bunder" href="produk.php"
          style="padding-left: 20px;padding-right: 20px;">Product</a><a
          style="margin-left: 30px;padding-left: 20px;padding-right: 20px;" class="bunder" href="/login.php">Login</a>
      </div>
    </div>
    <div id="fader"><img src="pic/d1.png" alt="Produk" id="a" height="150px" style="opacity: 0;"></div>
  </div>
  <div style="padding: 50px;background-color: whitesmoke;">
    <table width=100% style="table-layout:fixed;">
      <tr>
        <td><img class="fot" src="pic/clock.png" width="100px" alt="Fast"></td>
        <td><img class="fot" src="pic/offer.png" width="100px"></td>
        <td><img class="fot" src="pic/guarantee.png" width="100px"></td>
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
          <p>Respon admin <b style="color:rgb(255, 46, 46);"> PALING CEPAT </b> dan waktu proses akun yang <b
              style="color:rgb(255, 46, 46);">SUPER SINGKAT</b>* </p>
        </td>
        <td>
          <p>Harga <b style="color:rgb(255, 46, 46);">DIJAMIN TERMURAH </b> setiap hari bagi pelanggan</p>
        </td>
        <td>Garansi akun <b style="color:rgb(255, 46, 46);">RESMI</b> dan proses klaim <B
            style="color:rgb(255, 46, 46);">TERMUDAH</B> </td>
      </tr>
    </table>
  </div>
  <div style="padding: 50px;">
    <h1 align=center>Our Favourite Products</h1>
    <table style="table-layout: fixed;">
      <tr>
        <td><a class="atxt" href="netflix.php">
            <div class="card">
              <img src="pic/d1.png" alt="Avatar" style="width:100%;">
              <div class="container">
                <h4><b>Netflix</b></h4>
                <p>Layanan Video Streaming</p>
              </div>
            </div>
          </a></td>
        <td><a class="atxt" href="spotify.php">
            <div class="card">
              <img src="pic/d2.png" alt="Avatar" style="width:100%;">
              <div class="container">
                <h4><b>Spotify</b></h4>
                <p>Layanan Musik Streaming</p>
              </div>
            </div>
          </a></td>
        <td><a class="atxt" href="disney.php">
            <div class="card">
              <img src="pic/d3.png" alt="Avatar" style="width:100%;">
              <div class="container">
                <h4><b>Disney+ Hotstar</b></h4>
                <p>Layanan Video Streaming</p>
              </div>
            </div>
          </a></td>
        <td><a class="atxt" href="viu.php">
            <div class="card">
              <img src="pic/d4.png" alt="Avatar" style="width:100%;">
              <div class="container">
                <h4><b>VIU</b></h4>
                <p>Layanan Video Streaming</p>
              </div>
            </div>
          </a></td>
      </tr>
    </table>
  </div>
  <!--<div><h1 align=center>Our Satisfied Costumers</h1>
        
        </div>-->
  <div>
    <footer>
      <p style="text-align: center;">&copy Copyright 2021 by Penguin Berjalan</p>
    </footer>
  </div>
  <!--<div align=center><iframe frameBorder="0" width="60%" height="100%" src="https://docs.google.com/document/d/e/2PACX-1vRjOrCkUB17yv08jsKC0auai6xRKHEbUU3hFW78zNJKip3tGeXgYGf_rEngzRTiR6olHWVz3fXEnWjF/pub?embedded=true"></iframe></div>-->
</body>

</html>