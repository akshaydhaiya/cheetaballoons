<div>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Balloon Bash</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <!-- <link rel="manifest" href="site.webmanifest"> -->
      <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
      <!-- Place favicon.ico in the root directory -->

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
      <!-- CSS here -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/themify-icons.css">
      <link rel="stylesheet" href="css/nice-select.css">
      <link rel="stylesheet" href="css/flaticon.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/slicknav.css">
      <link rel="stylesheet" href="css/style.css">
      <!-- <link rel="stylesheet" href="css/responsive.css"> -->
  </head>
 
  <header>
        <div class="header-area ">
            <div class="header-top black-bg d-none d-md-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="header-contact">
                                <a href="#"><i class="fa fa-phone"></i> +880 256 356 256</a>
                                <a href="#"><i class="fa fa-envelope"></i> balloonsbash@gmail.com</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area white-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu d-none d-lg-block">
                            <?php //dd($_SERVER['REQUEST_URI'])?>
                            <?php
                      function active($currect_page){
                        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
                        $url = end($url_array);  
                        if($currect_page == $url){
                            echo 'active'; //class name in css 
                        } 
                      }
                      ?>
                      
                                <nav>
                                    <ul id="navigation">
                                    <li><a class="<?php active('index');?>" href="index">Home</a></li>
                                    <li><a class="<?php active('about');?>" href="about">About</a></li>
                                    <li><a class="<?php active('product');?>" href="product">Products</a></li>
                                    <li><a class="<?php active('gallery');?>" href="gallery">Gallery</a></li>
                                    <li><a class="<?php active('contact');?>" href="contact">Contact</a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <div class="quote-area">
                               
                                <div class="get-quote d-none d-lg-block"> 
                                    <a class="boxed-btn" href="contact#quote">Get a quote</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

</div>
