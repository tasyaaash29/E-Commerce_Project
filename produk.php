<?php require_once "dashboard/dbkoneksi.php" ?>
<?php
    $sql = "SELECT * FROM produk";
    $rs = $dbh->query($sql);
?>

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
  <title>About</title>
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
        <div class="location_text"><img src="images/map-icon.png"><span class="padding_left_10"><a href="#">Senayan
              City, Central Jakarta</a></span></div>
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
      <a class="logo" href="index.html"><img src="images/logo2.png" width="200px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produk.php">Product</a>
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
  </div><br><br>

    <div class="site-wrap">
      <div class="site-section">
        <div class="container">

          <div class="row mb-5">
            <div class="col-md-9 order-2">
            <br><br>
              <div class="row mb-5">
                <?php 
                foreach ($rs as $row)
                { ?>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                  <div class="block-4 text-center border">
                    <figure class="block-4-image">
                      <h3><a href="detail_produk.php"><img src="<?=$row['foto']?>" alt="Image placeholder"
                          class="img-fluid"></a></h3>
                    </figure>
                    <div class="block-4-text p-4">
                      <h3><a href="detail_produk.php?id=<?=$row['id']?>"><?=$row['nama']?></a></h3>
                      <p class="text-primary font-weight-bold"><?="$ " . number_format($row ['harga'], 2, ',', '.');?></p>
                    </div>
                  </div>
                </div>
               <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

  </html>
  <!-- about section end -->
  <!-- footer section start -->
  <div class="footer_section">
    <div class="container">
      <div class="footer_location_text">
        <ul>
          <li><img src="images/map-icon.png"><span class="padding_left_5"><a href="#">Senayan City, Central
                Jakarta</a></span></li>
          <li><img src="images/call-icon.png"><span class="padding_left_5"><a href="#">Call : +01 23456789</a></span>
          </li>
          <li><img src="images/mail-icon.png"><span class="padding_left_5"><a href="#">szboxstore@gmail.com</a></span>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <h2 class="useful_text">Useful link </h2>
          <div class="footer_menu">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h2 class="useful_text">Repair</h2>
          <p class="lorem_text">MOBILES REPAIR
            <hr>
          </p>
          <p class="lorem_text"> TABLATE REPAIR
            <hr>
          </p>
          <p class="lorem_text">LAPTOP REPAIR
            <hr>
          </p>
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