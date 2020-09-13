<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bongo Traveller</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/Admin/Special/images/icons/favicon.ico') ?>"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/vendor/bootstrap/css/bootstrap.min.css') ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/fonts/iconic/css/material-design-iconic-font.min.css') ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/vendor/animate/animate.css') ?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/vendor/css-hamburgers/hamburgers.min.css') ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/vendor/animsition/css/animsition.min.css') ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/vendor/select2/select2.min.css') ?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/vendor/daterangepicker/daterangepicker.css') ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/css/util.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/css/main.css') ?>">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('assets/Admin/Special/images/bg-01.jpg');">
      <div class="wrap-login100">
        <form class="login100-form validate-form" action="<?php echo site_url('Admin/chkAdmin') ?>" method="post">
          <span class="login100-form-logo">
            <i class="zmdi zmdi-landscape"></i>
          </span>

          <span class="login100-form-title p-b-34 p-t-27">
            Log in
          </span>
          <?php if ($this->session->flashdata('class')): ?>
        <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dismissible" role="alert">

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>

  </button>
  <?php echo $this->session->flashdata('message'); ?>
  
    
</div>
              
            <?php endif; ?>
     

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="admin_name" placeholder="Your name">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="admin_password" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              Remember me
            </label>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
          </div>

          <div class="text-center p-t-90">
            <a class="txt1" href="#">
              Forgot Password?
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets/Admin/Special/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets/Admin/Special/vendor/animsition/js/animsition.min.js') ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets/Admin/Special/vendor/bootstrap/js/popper.js') ?>"></script>
  <script src="<?php echo base_url('assets/Admin/Special/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets/Admin/Special/vendor/select2/select2.min.js') ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets/Admin/Special/vendor/daterangepicker/moment.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/Admin/Special/vendor/daterangepicker/daterangepicker.js') ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets/Admin/Special/vendor/countdowntime/countdowntime.js') ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets/Admin/Special/js/main.js') ?>"></script>

</body>
</html>