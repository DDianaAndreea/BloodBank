<!doctype html>
<html lang="en">

  <head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta charset="utf-8">
    <title>BloodBank</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.transitions.css')?>">
    <!-- meanmenu CSS
        ============================================ -->
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/meanmenu/meanmenu.min.css')?>"> -->
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css')?>">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/scrollbar/jquery.mCustomScrollbar.min.css')?>"> -->
    <!-- jvectormap CSS
        ============================================ -->
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/jvectormap/jquery-jvectormap-2.0.3.css')?>"> -->
    <!-- notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/notika-custom-icon.css')?>">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/wave/waves.min.css')?>">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?php echo base_url('assets/js/vendor/modernizr-2.8.3.min.js')?>"></script>




  </head>


  <body>

    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <p class="navbar-brand" >Blood Bank </p>
                        <!-- <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li> -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="<?php echo base_url('logout'); ?>"><span><i class="fa fa-sign-out"></i></span></a>
                            </li>       

                        </ul>

                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="<?php echo base_url('inbox')?>"><span><i class="fa fa-envelope"></i></span></a>
                            </li>       
                            <li class="nav-item"><a href="<?php echo base_url('inbox')?>" ><span><i></i></span><div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span><?php echo $unread_msg ?></span></div></a></li>
                            


                        </ul>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>


