<?php require_once "dashboard/dbkoneksi.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Blog</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen">
</head>

<body>
  <!-- header top section start -->
  <div class="header_top_section">
    <div class="container">
      <div class="header_main">
        <div class="location_text"><img src="images/map-icon.png"><span class="padding_left_10"><a
              href="#">Senayan City, Central Jakarta</a></span></div>
        <div class="location_text center"><img src="images/call-icon.png"><span class="padding_left_10"><a href="#">Call
              ; 01 23456789</a></span></div>
        <div class="location_text right"><img src="images/mail-icon.png"><span class="padding_left_10"><a
              href="#">szboxstore@gmail.com</a></span></div>
      </div>
    </div>
  </div>
  <!-- header top section end -->
  <!-- header section start -->
  <div class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="logo" href="index.php"><img src="images/logo2.png" width="200px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produk.html">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard/login.html">Log In</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <div class="search_icon"><a href="#"><img src="images/search-icon.png"></a></div>
          </form>
        </div>
      </nav>
    </div>
  </div>
  <body>
  <div class="site-wrap">
    <div class="bg-light py-3">
      <div class="container">
      </div>
    </div>  
    <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM produk WHERE id=?";
            $st = $dbh->prepare($sql);
            $st->execute([$id]);
            $row = $st->fetch();
        ?> 
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?=$row['foto']?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?=$row['nama']?></h2>
            <p></p>
            <p class="mb-4"><?=$row['deskripsi']?></p>
            <p><strong class="text-primary h4"><?="$ " . number_format($row ['harga'], 2, ',', '.');?></strong></p>
            <div class="form-group row">
              <label class="col-4">Color</label> 
              <div class="col-8">
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input name="color" id="color_0" type="checkbox" class="custom-control-input" value="white"> 
                  <label for="color_0" class="custom-control-label">White</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input name="color" id="color_1" type="checkbox" class="custom-control-input" value="black"> 
                  <label for="color_1" class="custom-control-label">Black</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input name="color" id="color_2" type="checkbox" class="custom-control-input" value="red"> 
                  <label for="color_2" class="custom-control-label">Red</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input name="color" id="color_3" type="checkbox" class="custom-control-input" value="blue"> 
                  <label for="color_3" class="custom-control-label">Blue</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input name="color" id="color_4" type="checkbox" class="custom-control-input" value="gold"> 
                  <label for="color_4" class="custom-control-label">Gold</label>
                </div>
              </div>
            </div> 
            <div class="form-group row">
              <label class="col-4">Internal</label> 
              <div class="col-8">
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input name="internal" id="internal_0" type="checkbox" class="custom-control-input" value="64gb"> 
                  <label for="internal_0" class="custom-control-label">64 GB</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input name="internal" id="internal_1" type="checkbox" class="custom-control-input" value="128gb"> 
                  <label for="internal_1" class="custom-control-label">128 GB</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input name="internal" id="internal_2" type="checkbox" class="custom-control-input" value="526gb"> 
                  <label for="internal_2" class="custom-control-label">526 GB</label>
                </div>
              </div>
            </div> 
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            <p><a href="cart.html" class="buy-now btn btn-sm btn-primary">Submit</a></p>

          </div>
        </div>
      </div>
    </div>

    <div class="footer_section">
      <div class="container">
        <div class="footer_location_text">
          <ul>
            <li><img src="images/map-icon.png"><span class="padding_left_5"><a href="#">Senayan City, Central Jakarta</a></span></li>
            <li><img src="images/call-icon.png"><span class="padding_left_5"><a href="#">Call : +01 23456789</a></span>
            </li>
            <li><img src="images/mail-icon.png"><span class="padding_left_5"><a href="#">szboxstore@gmail.com</a></span></li>
          </ul>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <h2 class="useful_text">Useful link </h2>
            <div class="footer_menu">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <h2 class="useful_text">Repair</h2>
            <p class="lorem_text">MOBILES REPAIR <hr> </p>
            <p class="lorem_text"> TABLATE REPAIR  <hr> </p>
            <p class="lorem_text">LAPTOP REPAIR <hr></p>
          </div>
          <div class="col-lg-3 col-sm-6">
            <h2 class="useful_text">social media</h2>
            <div class="social_icon">
              <ul>
                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                <li><a href="#"><img src="images/youtub-icon.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end info section -->
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
      <div class="container">
        <p class="copyright_text">2019 All Rights Reserved. Design by <a href="https://html.design">Free html
            Templates</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></p>
      </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  </body>
</html>