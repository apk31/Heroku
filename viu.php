<html>

<head>
    <title>MyShop VIU</title>
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

        .produk {
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

            transition-duration: 0.3s;
        }

        .bunder3 {
            border-radius: 30px;
            background-color: rgb(253, 219, 107);
            padding: 15px;
            text-decoration: none;
            border: 0px;
            width: 100px;
            color: black;
            font-size: 14px;
        }

        .bunder3:hover {
            background-color: rgb(221, 195, 81);

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

        .listnav label,
        .listnav input {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .listnav input[type="radio"] {
            opacity: 0.011;
        }

        .listnav label {
            border-radius: 8px;
            background-color: lightgray;
            padding: 10px;
            text-decoration: none;
            border: 0px;
            color: black;
        }

        .listnav label:hover {
            background-color: gray;
            color: honeydew;
            transition-duration: 0.3s;
        }

        .listnav input[type="radio"]:checked+label {
            background-color: rgb(110, 110, 110);
            color: honeydew;
            transition-duration: 0.3s;
        }
    </style>
    <!--<link rel="style" href="style/tukel.css">-->
</head>

<body>
    <div style="padding: 20px;">
        <ul class="listnav" style="padding: 20px;">
            <a href="index.php"><img src="pic\logo-min.png" alt="" width="60px" align=left
                    style="padding-left: 30px;"></a>
            <li class="isilist" style="padding-left: 50px;"><a href="index.php">Home</a></li>
            <li class="isilist">
                <div class="dropdown"><a class="dropbtn produk" href="produk.php">Product</a>
                    <div class="dr-content"><a href="movie.php">Movie</a><a href="music.php">Music</a><a
                            href="comingsoon.php">Other</a></div>
                </div>
            </li>
            <li class="isilist"><a href="review.php">Review</a></li>
            <li class="isilist"><a href="comingsoon.php">About</a></li>
            <li class="isilist"><a href="NEWS.php">News</a></li>
            <li class="isi2" style="padding:10;"><a href="cart.php"><img class="fot" src="pic/cart.png"
                        width="30px"></a></li>
            <li class="isi2"><a class="bunder btn1" href="login.php">Login</a></li>
        </ul>
    </div>
    <div class="col" style="padding-left: 50px;padding-right: 50px;">
        <div><img src="pic/viu.jpeg" width="100%"></div>
        <div style="margin-top: 200px;">
            <h1>VIU</h1>
            <h4>Deskripsi :</h4>
            <p>Stream your favorite TV shows and movies without commercials with VIU! You can watch it on any device and
                watch
                your favorite TV shows and movies without internet.</p>
            <h4>Kategori :</h4>
            <ul class="listnav" style="height: auto;">
                <li class="isilist"
                    style="text-align: center;width: 80px;height: 40px;position:relative;padding: 0;margin-right: 15px;">
                    <input type="radio" name="kat" id="share"><label for="share">Sharing</label></li>
                <li class="isilist"
                    style="text-align: center;width: 80px;height: 40px;position:relative;padding: 0;margin-right: 15px;">
                    <input type="radio" name="kat" id="priv"><label for="priv">Private</label></li>
            </ul>
            </p><br><br>
            <h4>Durasi :</h4>
            <p>
            <ul class="listnav" style="height: auto;">
                <li class="isilist"
                    style="text-align: center;width: 100px;height: 40px;position:relative;padding: 0;margin-right: 15px;">
                    <input type="radio" name="dur" id="1m"><label for="1m">1 Bulan</label></li>
                <li class="isilist"
                    style="text-align: center;width: 100px;height: 40px;position:relative;padding: 0;margin-right: 15px;">
                    <input type="radio" name="dur" id="2m"><label for="2m">2 Bulan</label></li>
                <li class="isilist"
                    style="text-align: center;width: 100px;height: 40px;position:relative;padding: 0;margin-right: 15px;">
                    <input type="radio" name="dur" id="3m"><label for="3m">3 Bulan</label></li>
            </ul>
            </p>
            <br><br><br>
            <p style="margin-top: 70px;"><a class="bunder2"
                    href="https://api.whatsapp.com/send/?phone=%2B6282331558378&text=Berikut+bukti+pembayaran+untuk+order+Netflix%2C+Terima+kasih.">Beli
                    Sekarang</a><a style="margin-left: 15px;" class="bunder3" href="cart.php">Masukkan ke Keranjang</a>
            </p>
        </div>
    </div>
    <div>
        <footer>
            <p style="text-align: center;">&copy Copyright 2021 by Penguin Berjalan</p>
        </footer>
    </div>

</body>