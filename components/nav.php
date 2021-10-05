<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Shorten For You</title>

    <link rel="icon" type="img/png" href="assets/img/favicon.jpg">
    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css1/fontawesome.css">
    <link rel="stylesheet" href="assets/css1/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css1/animated.css">
    <link rel="stylesheet" href="assets/css1/owl.css">
   
   
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php/../../" class="logo">
              <h4 style="font-size:18px;color:#a284d8;">Shorten<span style="font-size:18px; color:#ff589e;">For </span><small style="font-size:18px; color:#a284d8; font-weight:bold;">you</small></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav" >

              <li class="scroll-to-section"><a href="how it work.php/../">How it work</a></li>
              <li class="scroll-to-section"><a href="payout rates.php/../">Payout-rates</a></li>
              <li class="scroll-to-section"><a href="payement prove.php/../">Payement prove</a></li>
              <?php if(isset($_SESSION['userId'])): ?>
              <li class="nav-item active">
              <a class="nav-link" href="logout.php" >logout</a>

              </li>
              <?php else: ?>
              <button style="margin-right:4px;
                             border-radius:28px;
                             border:1px solid #ff589e;
                             background-color:#ff589e;
                             color:#fff;"><a style="text-decoration:none; color:white; font-weight:bold;" href="index.php">Get started</a></button>
              <button style="margin-right:4px;
                             border-radius:28px;
                             border:1px solid #a284d8;
                             background-color:#a284d8;
                             color:#fff;"><a style="text-decoration:none; color:white; font-weight:bold;" href="login.php">Login</a></button>
                             <?php endif; ?>

            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->


 
  <!-- Scripts -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/templatemo-custom.js"></script>

</body>
</html>