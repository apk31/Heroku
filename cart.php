<html>

<head>
  <title>MyShop Checkout</title>
  <link rel="icon" type="image/png" sizes="32x32" href="pic/favicon-32x32.png">
  <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <style>
    body {
      background-color: white;
      margin: 0;
      font-family: Lato, Verdana, Geneva, Tahoma, sans-serif;
    }

    td {
      text-align: center;
      padding: 15px;
      width: 20%;
      border-bottom: 1px solid black;
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

    .bunder2 {
      border-radius: 30px;
      background-color: rgb(134, 238, 120);
      padding: 15px;
      text-decoration: none;
      border: 0px;
      width: 100px;
      color: black;
      font-size: 14px;
    }

    .bunder2:hover {
      background-color: rgb(77, 197, 83);
      color: honeydew;
      transition-duration: 0.3s;
    }

    .pad {
      padding: 30px;
    }

    .col {
      column-count: 2;
      height: auto;
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

      border-radius: 12px;
      margin: auto;
      padding-top: 1px;
      padding-left: 40px;
      padding-right: 40px;
      padding-bottom: 20px;
      background-color: rgb(245, 245, 245);
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .gbrad {
      border-radius: 15px 15px 0 0;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      opacity: 1;
      margin: 0;
    }

    .atxt {
      text-decoration: none;
      color: black;
    }
  </style>
  <!--<link rel="style" href="style/tukel.css">-->
</head>

<body>
  <div style="padding: 20px;">
    <ul class="listnav" style="padding: 20px;">
      <a href="home.html"><img src="pic\logo-min.png" alt="" width="60px" align=left style="padding-left: 30px;"></a>
      <li class="isilist" style="padding-left: 50px;"><a href="home.html">Home</a></li>
      <li class="isilist">
        <div class="dropdown"><a class="dropbtn" href="produk.html">Product</a>
          <div class="dr-content"><a href="movie.html">Movie</a><a href="music.html">Music</a><a
              href="comingsoon.html">Other</a></div>
        </div>
      </li>
      <li class="isilist"><a href="review.html">Review</a></li>
      <li class="isilist"><a href="comingsoon.html">About</a></li>
      <li class="isilist"><a href="NEWS.html">News</a></li>
      <li class="isi2" style="padding:10;"><a href="cart.html"><img class="fot" src="pic/cart.png" width="30px"></a>
      </li>
      <li class="isi2"><a class="bunder btn1" href="login.html">Login</a></li>
    </ul>
  </div>
  <h2 style="padding-left: 100px;">Shopping Cart</h2>
  <div style="padding-left: 100px;" class="col">
    <div>
      <table style="border-top: 1px solid black;table-layout: fixed;border-collapse: collapse;">
        <tr>
          <td colspan="2" style="text-align: left;padding-left: 40px;"><b>Nama Produk</b></td>
          <td><b>Jumlah</b></td>
          <td><b>Harga</b></td>
          <td><b>Total</b></td>
        </tr>
        <tr>
          <td><img src="pic/d1.png" width="120px"></td>
          <td> <b>Netflix Sharing 1 Bulan</b> </td>
          <td><input type="number"
              style="width: 70%;border: 1px solid rgb(202, 202, 202);border-radius: 3px;padding: 5px; " placeholder="1"
              value="1" min="0"></td>
          <td>Rp. 40000</td>
          <td id="total">Rp. 40000</td>
        </tr>
      </table>
    </div>
    <div class="card" style="margin-top: 220px;">
      <h2>Order Summary</h2>
      <div class="container">
        <table>
          <tr>
            <td style="border:0px;text-align: left;padding: 0;">
              <h4><b id="summary">1 Item(s)</b></h4>
            </td>
            <td style="border:0px;text-align: right;padding: 0;">
              <h4>Rp. 40000</h4>
            </td>
          </tr>
          <tr>
            <td style="border:0px;text-align: right;padding: 0;width: 45%; text-align: left;">
              <h4>Promo Code :</h4>
            </td>
            <td style="border:0px;text-align: right;padding: 0;padding-bottom: 18px;width: 55%;"><input
                style="width: 100%;border: 1px solid rgb(202, 202, 202);border-radius: 3px;padding: 3px;" type="text"
                placeholder="MERDEKANONTON" id="coup"></td>
          </tr>
          <tr>
            <td style="text-align: left;padding: 0;padding-bottom: 15px;border-collapse:collapse;" colspan="2"><button
                class="bunder">Apply</button></td>
          </tr>
          <tr>
            <td style="border:0px;text-align: right;padding: 0;padding-top: 15px;width: 33%; text-align: left;">
              <h4>Total Biaya</h4>
            </td>
            <td style="border:0px;text-align: right;padding: 0;padding-top: 15px;width: 50%;">
              <h4 id="total2">Rp. 40000</h4>
            </td>
          </tr>
          <tr>
            <td colspan="2"
              style="border:0;text-align: right;padding: 0;padding-top: 15px;padding-bottom: 15px;border-collapse:collapse;"
              colspan="2"><a class="bunder2"
                href="https://api.whatsapp.com/send/?phone=%2B6282331558378&text=Berikut+bukti+pembayaran+untuk+order+Netflix%2C+Terima+kasih.">Checkout</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div>
    <footer>
      <p style="text-align: center;">&copy Copyright 2021 by Penguin Berjalan</p>
    </footer>
  </div>
</body>