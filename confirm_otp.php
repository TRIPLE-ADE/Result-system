<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="assets/images/logo/logo.png" type="image/x-icon">
  <link rel="shortcut icon" href="assets/images/logo/logo.png" type="image/x-icon">
  <title>Summit University - Result Processing Portal</title>
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>
  <!-- Loader starts-->
  <!-- <div class="loader-wrapper">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"> </div>
    <div class="dot"></div>
  </div> -->
  <!-- Loader ends-->
  <!-- login page start-->
  <div class="container-fluid p-0">
    <div class="row m-0">
      <div class="col-12 p-0">
        <div class="login-card">
          <div>
            <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="assets/images/logo/logo.png" style="height: 90px;" alt="looginpage"></a></div>
            <div class="login-main">
              <form class="theme-form" method="POST" action="controller/AuthController.php">
                <h5 class="text-center">Summit University Bursary Login Portal</h5>

                <p class="text-center">Enter the OTP</p>
                <?php
                if (isset($_GET['msg'])) {
                ?>
                  <div class="alert <?php if ($_GET['type'] == 'success') {
                                      echo 'alert-success';
                                    } else {
                                      echo 'alert-danger';
                                    } ?>  outline alert-dismissible fade show" role="alert">
                    <p><b><?php if ($_GET['type'] == 'success') {
                            echo 'Well done';
                          } else {
                            echo 'Oops';
                          } ?> </b><?php echo $_GET['msg']; ?></p>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php } ?>
                <div class="form-group">
                  <label class="col-form-label">OTP (One Time Password)</label>
                  <input class="form-control" type="text" name="otp" required="" placeholder="OTP">
                  <input class="form-control" type="hidden" name="email" value="<?php echo $_GET['type']; ?>">
                </div>
                <div class="form-group mb-0">
                  <div class="text-end mt-3">
                    <button class="btn btn-success btn-block w-100" name="verify_otp" type="submit">Login</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="assets/js/config.js"></script>
    <!-- Template js-->
    <script src="assets/js/script.js"></script>
    <!-- login js-->
  </div>
</body>

<!-- Mirrored from admin.pixelstrap.com/tivo/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jan 2023 14:00:29 GMT -->

</html>