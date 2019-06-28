<!doctype html>
<html lang="en">
  <head>

    <title>BloodBank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.timepicker.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/ionicons/css/ionicons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/flaticon/font/flaticon.css')?>">

    <script type="text/javascript" src="<?php echo base_url('assets/js/cookie.js')?>"></script> 


    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">


    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">


  </head>


  <body>
  <div id="fb-root"></div>

  <header role="banner">
      
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <div>
          <img style="width: 75px; "src="<?php echo base_url('assets/images/stema.jpg')?>">
          <a class="navbar-brand" href="<?php echo base_url('index')?>">Blood Bank </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <!-- <li class="nav-item">
                <a class="nav-link active" href="">Home</a>
              </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.html"  id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Donez</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href='<?php echo base_url("cerere_donare") ?>'>Cerere</a>
                  <a class="dropdown-item" href='<?php echo base_url("unde") ?>'>Unde?</a>
                  <!-- <a class="dropdown-item" href='<?php echo base_url("chestionar") ?>'>Model Chestionar</a> -->
                </div>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="doctors.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cereri</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href='<?php echo base_url("cerere_pacient") ?>'>Pacient</a>
                  <a class="dropdown-item" href='<?php echo base_url("cerere_spital") ?>'>Spital</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='<?php echo base_url("voluntar") ?>'>Voluntar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='<?php echo base_url("campanii") ?>'>Campanii</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='<?php echo base_url("cazuri") ?>'>Cazuri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='<?php echo base_url("contact") ?>'>Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
