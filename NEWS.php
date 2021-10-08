<html>

<head>
  <title>MyShop</title>
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
    }

    .listnav {
      list-style-type: none;
      margin: 0;
      padding: 0;

      height: 100px;
      background-color: white;
    }

    .home {
      box-shadow: 0 5px gray;
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

    .news {
      box-shadow: 0 5px gray;
    }

    .isilist a:hover,
    .dropdown:hover .dropbtn {
      box-shadow: 0 5px gray;
      transition-duration: 0.3s;
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
      padding: 25px;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .gbrad {
      border-radius: 15px 15px 0 0;
    }


    div.gallery {
      margin: 5px;
      border-bottom: 1px solid #ccc;
      border-left: 1px solid #ccc;
      border-right: 1px solid #ccc;
      border-radius: 5px;
      float: left;
      width: 180px;
      height: 350px;
    }

    div.gallery:hover {
      border-color: #777;
      transition: 0.5s;
    }

    div.gallery img {
      width: 100%;
      height: auto;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
    }

    div.desc {
      padding: 15px;
      text-align: center;
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
      <li class="isilist"><a class="news" href="NEWS.html">News</a></li>
      <li class="isi2" style="padding:10;"><a href="cart.html"><img class="fot" src="pic/cart.png" width="30px"></a>
      </li>
      <li class="isi2"><a class="bunder btn1" href="login.html">Login</a></li>
    </ul>
  </div>
  <div class="card" style="margin: auto;background-color: rgb(248, 248, 248);">

    <div style="height:  500px;" style="width: 70%">
      <h2>The News in this Weekend</h2>

      <div class="gallery">
        <a target="_blank" href="#">
          <img src="pic/news1.jpeg" width="200" height="auto">
        </a>
        <div class="desc">Hollywood is preparing for its most important October ever<p><a class="bunder"
              href="https://edition.cnn.com/2021/10/01/media/venom-let-there-be-carnage-box-office-analysis/index.html">More
              Details</a></div>
        </p>
      </div>

      <div class="gallery">
        <a target="_blank" href="#">
          <img src="pic/news2.jpeg" width="200" height="auto">
        </a>
        <div class="desc">Daniel Craig To Receive Star On Hollywood Walk Of Fame Next Week<p><a class="bunder"
              href="https://losangeles.cbslocal.com/2021/10/01/daniel-craig-star-hollywood-walk-of-fame-next-week/">More
              Details</a></div>
        </p>
      </div>

      <div class="gallery">
        <a target="_blank" href="#">
          <img src="pic/news3.jpeg" width="200" height="auto">
        </a>
        <div class="desc">'Hollywood of the North' film studio opens in Liverpool<p><a class="bunder"
              href="https://www.bbc.com/news/uk-england-merseyside-58749878">More Details</a></div>
        </p>
      </div>
    </div>
  </div>
  <div style="margin-top: 30px;">
    <footer>
      <p style="text-align: center;">&copy Copyright 2021 by Penguin Berjalan</p>
    </footer>
  </div>
</body>

</html>