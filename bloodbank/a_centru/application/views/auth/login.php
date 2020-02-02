<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Register </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">

    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">

    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>">
   
  </head>

<body>
    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" >
            <div class="nk-form">
                <form action="<?php echo base_url('verify') ?>" method="POST">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-user-md "></i></span>
                    <div class="nk-int-st">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                </div></div>
                <div class="form-group">
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-key"></i></span>
                    <div class="nk-int-st">
                        <input type="password" name="parola" class="form-control" placeholder="Parola">
                    </div>
                </div></div>

                <button type="submit"  class="btn btn-login btn-success btn-float "><i class="fa fa-chevron-circle-right"></i></button>
            </form>
            </div>
        </div>


    </div


    <script src="<?php echo base_url('assets/js/vendor/jquery-1.12.4.min.js')?>"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
   
</body>
