<?php 
include './middleware/is_loggedin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="assets/images/logo/logo.png" type="image/x-icon">
  <link rel="shortcut icon" href="assets/images/logo/logo.png" type="image/x-icon">
  <title>Bursary | Upload Result</title>
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
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/datatables.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">


</head>

<body>

  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    
    <!-- Page Header Start-->
    <?php include 'layout/header.php'; ?>
    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <?php include 'layout/sidebar.php'; ?>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="text-center">
                  <img class="img-fluid for-light mb-3" src="assets/images/logo/logo.png" alt="logo" width="100">
                </div>
                <div class="card">
                  <div class="card-header pb-0">
                    <h4 class="mb-3">Result Uploading Page</h4>
                      <form action="" method="post">
                        <div class="mb-3">
                          <label for="name" class="form-label">Course</label>
                          <select class="form-select" aria-label="Select example">
                            <option selected disabled>Select Course Type</option>
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Level</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Select Level Type</option>
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="jamb-no" class="form-label">Session</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Select Session Type</option>
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="payment-type" class="form-label">Semester</label> 
                          <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Select Semester Type</option>
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                          </select>
                        </div>
                        <div class="mb-3">
                        <label for="payment-type" class="form-label">Add Result File</label>
                          <input type="file" name="payment-type" class="form-control" id="email" placeholder="Payment Type">
                        </div>
                        <button type="button" class="btn btn-success">Upload Results</button>
                      </form>
                  </div>
                </div>
              </div>
              <!-- Zero Configuration  Ends-->
            </div>
          </div>
          <!-- Container-fluid Ends-->
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
  <script src="assets/js/scrollbar/simplebar.js"></script>
  <script src="assets/js/scrollbar/custom.js"></script>
  <!-- Sidebar jquery-->
  <script src="assets/js/config.js"></script>
  <script src="assets/js/sidebar-menu.js"></script>
  <script src="assets/js/chart/knob/knob.min.js"></script>
  <script src="assets/js/chart/knob/knob-chart.js"></script>
  <script src="assets/js/chart/apex-chart/apex-chart.js"></script>
  <script src="assets/js/chart/apex-chart/stock-prices.js"></script>
  <script src="assets/js/prism/prism.min.js"></script>
  <script src="assets/js/clipboard/clipboard.min.js"></script>
  <script src="assets/js/custom-card/custom-card.js"></script>
  <script src="assets/js/notify/bootstrap-notify.min.js"></script>
  <script src="assets/js/datepicker/date-picker/datepicker.js"></script>
  <script src="assets/js/datepicker/date-picker/datepicker.en.js"></script>
  <script src="assets/js/datepicker/date-picker/datepicker.custom.js"></script>
  <script src="assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="assets/js/typeahead/handlebars.js"></script>
  <script src="assets/js/typeahead/typeahead.bundle.js"></script>
  <script src="assets/js/typeahead/typeahead.custom.js"></script>
  <script src="assets/js/typeahead-search/handlebars.js"></script>
  <script src="assets/js/typeahead-search/typeahead-custom.js"></script>
  <script src="assets/js/dashboard/dashboard_2.js"></script>
  <script src="assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatable/datatables/datatable.custom.js"></script>
  <!-- Template js-->
  <script src="assets/js/script.js"></script>
  <!-- <script src="assets/js/theme-customizer/customizer.js"> </script> -->
  <!-- login js-->

</body>

<!-- Mirrored from admin.pixelstrap.com/tivo/template/dashboard-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jan 2023 13:58:07 GMT -->

</html>