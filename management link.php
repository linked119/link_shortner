<!--Shorten for you v1.2-->
<?php include "inc.php"; ?>
<?php if(!isset($_SESSION['userId'])): 
header("location: login.php");
endif; ?>

<?php
include "php/config.php";
  $new_url = "";
  if(isset($_GET)){
    foreach($_GET as $key=>$val){
      $u = mysqli_real_escape_string($conn, $key);
      $new_url = str_replace('/', '', $u);
    }
      $sql = mysqli_query($conn, "SELECT full_url FROM url WHERE shorten_url = '{$new_url}'");
      if(mysqli_num_rows($sql) > 0){
        $sql2 = mysqli_query($conn, "UPDATE url SET clicks = clicks + 1 WHERE shorten_url = '{$new_url}'");
        if($sql2){
            $full_url = mysqli_fetch_assoc($sql);
            header("Location:".$full_url['full_url']);
          }
      }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets1/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets1/img/favicon.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Shoter for you |Management
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets1/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets1/demo/demo.css" rel="stylesheet" />


  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">  
  <style>
    *{font-family: "Gill Sans", sans-serif;}
    .modal {
      transition: opacity 0.25s ease;
    }
    body.modal-active {
      overflow-x: hidden;
      overflow-y: visible !important;
    }
  </style>


  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
</head>

<body class="">
  <div style="width:100%;"  class="wrapper">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets1/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
     <div class="logo"><a href="index.php/../../" class="simple-text logo-normal">
         <span style="font-weight:bold; color:#a284d8;">Shoter</span> <span style="font-weight:bold; color:#ff589e;">For</span> <span style="font-weight:bold; color:#a284d8;">You</span> 
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">

        <li class="nav-item ">
            <a href="#" class="nav-link" >
              <i class="fa fa-plus-circle"></i>
              <p class="modal-open bg-transparent">Add link here!</p>
            </a></li>

         <li class="nav-item ">
            <a class="nav-link" href="./dashboard.php" >
              <i class="fa fa-tachometer"></i>
              <p>Dashboard</p>
            </a>
          </li>
        
          <li  style="background-color:#00cae3;"  class="nav-item active">
            <a  style="background-color:#00cae3; box-shadow:none; color:#fff;"   class="nav-link" href="./management link.php">
              <i class="fa fa-list"></i>
              <p>Management link</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="./achivement.php">
              <i class="fa fa-star"></i>
              <p>Achivement</p>
            </a>
          </li>
        <li class="nav-item  ">
            <a class="nav-link" href="./tickets.php">
              <i  class="fa fa-ticket"></i>
              <p>tickets</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="./referal.php">
              <i class="fa fa-refresh"></i>
              <p>Referral</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./withdraw.php">
              <i class="fa fa-arrow-down"></i>
              <p>Withdraw</p>
            </a>
          </li>
            <li class="nav-item ">
            <a class="nav-link" href="./report.php">
              <i class="fa fa-flag"></i>
              <p>Report</p>
            </a>
          </li>
          <li class="nav-item active-pro ">
            <a class="nav-link" href="./settings.php">
              <i class="fa fa-cog"></i>
              <p>settings</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
  
    <li style="list-style-type: none;" class="nav-item "  class=" flex items-center justify-center h-screen">
            <a class="nav-link" >
            <!--Modal-->
        <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-left px-6">

       <!--Title-->
        <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold"><span style="color:#ff589e;">Create</span> <span style="color:#a284d8;">link here !</span></p>
       </div>
  

      <form action="#" autocomplete="off">
      <input type="text" spellcheck="false" name="full_url" placeholder="Enter or paste a long url" required>
      <i class="url-icon uil uil-link"></i>
      <button>Shorten</button>
      </form>

      </div>

      <div class="blur-effect"></div>
      <div class="popup-box">
      <div class="info-box">Your short link is ready. You can also edit your short link now but can't edit once you saved it.</div>
      <form action="#" autocomplete="off">
      <label>Edit your shorten url</label>
      <input type="text" class="shorten-url" spellcheck="false" required>
      <i class="copy-icon uil uil-copy-alt"></i>
      <button>Save</button>
      </form>
      <script src="script.js"></script>


        
      </div>
    </div>
  </div>
  <script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
    
     
  </script>
      </a>
  </li>

      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Management</a>
          </div>
           
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              
            </form>
            <ul class="navbar-nav">

              <li class="nav-item dropdown">
               
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                 <li style="position: relative; margin-top: -18px;" class="nav-item ">
                  <a class="nav-link" href="user.php" ><i class="fa fa-user-circle-o" aria-hidden="true"></i><?php echo $_SESSION['userName']; ?></a>
                  </li>
                  
                  </a>
                
                  <?php if(isset($_SESSION['userId'])): ?>
                  <li class="nav-item ">
                  <a class="nav-link" href="logout.php" ><i class="fa fa-sign-out" aria-hidden="true"></i>logout</a>
                  </li>

                  <?php else: ?>

                  <button><a href="index.php">Get started</a></button>
                  <button><a href="login.php">Login</a></button>

                  <?php endif; ?>

                  
               
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="content">
        <div class="container-fluid">
          <div class="table-responsive" class="row">
          <?php
      $sql2 = mysqli_query($conn, "SELECT * FROM url ORDER BY id DESC");
      if(mysqli_num_rows($sql2) > 0){;
        ?>
          <div class="statistics">
            <?php
              $sql3 = mysqli_query($conn, "SELECT COUNT(*) FROM url");
              $res = mysqli_fetch_assoc($sql3);

              $sql4 = mysqli_query($conn, "SELECT clicks FROM url");
              $total = 0;
              while($count = mysqli_fetch_assoc($sql4)){
                $total = $count['clicks'] + $total;
              }
            ?>
        </div>
        <div class="urls-area">
          <div  class="title">
            <li style="font-weight:bold; color:black;">Shorten URL</li>
            <li style="font-weight:bold; color:black;">Original URL</li>
            <li style="font-weight:bold; color:black;">Views</li>
            <li style="font-weight:bold; color:black;">Action</li>
          </div>
          <?php
            while($row = mysqli_fetch_assoc($sql2)){
              ?>
                <div class="data">
                <li>
                <a href="#" target="_blank">
                  <?php
                    if($domain.strlen($row['shorten_url']) > 50){
                      echo $domain.substr($row['shorten_url'], 0, 50) . '...';
                    }else{
                      echo $domain.$row['shorten_url'];
                    }
                  ?>
                  </a>
                </li>
                
                <li>
                  <?php
                    if(strlen($row['full_url']) > 60){
                      echo substr($row['full_url'], 0, 60) . '...';
                    }else{
                      echo $row['full_url'];
                    }
                  ?>
                </li>

                <li>
                  <?php echo $row['clicks'] ?>
                </li>

                <li><a href="#">Delete</a></li>
              </div>
              <?php
            }
          ?>
      </div>
        <?php
      }
    ?>
    </div>
		 
           
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="#home">
                 Shoter For You 
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>,Shorten For You. All Rights Reserved.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            
            <div class="clearfix"></div>
          </a>
        </li>
        
    
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.php" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>


      
  <!--   Core JS Files   -->
  <script src="assets1/js/core/jquery.min.js"></script>
  <script src="assets1/js/core/popper.min.js"></script>
  <script src="assets1/js/core/bootstrap-material-design.min.js"></script>
  <script src="assets1/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="assets1/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="assets1/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="assets1/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="assets1/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets1/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="assets1/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="assets1/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets1/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets1/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="assets1/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="assets1/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets1/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="assets1/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets1/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets1/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets1/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets1/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').php();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>
