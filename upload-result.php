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
  <title>Bursary | Payment</title>
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
                <div class="card">
                  <div class="card-header pb-0">
                    <h4>Result Uploading Page</h4>
                    <!-- <button style="float:right;" class="btn btn-success btn-sm" id="add-payment" >Add Payment</button> -->
                      <!-- Button trigger modal -->
                    <button type="button" style="float:right;" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                      Upload Result
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Result</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="post">

                              <div class="mb-3">
                                <label for="name" class="form-label">Course</label>
                                <!-- <input type="text" name="name" id="name" class="form-control" placeholder="Fullname"> -->
                                <select class="form-select" aria-label="Default select example">
                                  <option selected disabled>Select Course</option>
                                  <?php
                                  $get_payment_type = "SELECT * FROM payment_types";
                                  $query_payment_type = mysqli_query($dbconnetion, $get_payment_type);
                                  while($payment_type = mysqli_fetch_array($query_payment_type)){
                                    $payment = $payment_type['name'];
                                    $payment_id = $payment['id'];
                                    ?>
                                  <option value="<?php echo $payment_id;?>"><?php echo $payment;?></option>

                                  <?php
                                  }
                                  ?>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="email" class="form-label">Level</label>
                                <!-- <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com"> -->
                                <select class="form-select" aria-label="Default select example">
                                  <option selected disabled>Select Level</option>
                                  <?php
                                  $get_payment_type = "SELECT * FROM payment_types";
                                  $query_payment_type = mysqli_query($dbconnetion, $get_payment_type);
                                  while($payment_type = mysqli_fetch_array($query_payment_type)){
                                    $payment = $payment_type['name'];
                                    $payment_id = $payment['id'];
                                    ?>
                                  <option value="<?php echo $payment_id;?>"><?php echo $payment;?></option>

                                  <?php
                                  }
                                  ?>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="jamb-no" class="form-label">Session</label>
                                <!-- <input type="text" name="name" id="jamb-no" class="form-control" placeholder="Jamb Registration"> -->
                                <select class="form-select" aria-label="Default select example">
                                  <option selected disabled>Select Session</option>
                                  <?php
                                  $get_payment_type = "SELECT * FROM payment_types";
                                  $query_payment_type = mysqli_query($dbconnetion, $get_payment_type);
                                  while($payment_type = mysqli_fetch_array($query_payment_type)){
                                    $payment = $payment_type['name'];
                                    $payment_id = $payment['id'];
                                    ?>
                                  <option value="<?php echo $payment_id;?>"><?php echo $payment;?></option>

                                  <?php
                                  }
                                  ?>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="payment-type" class="form-label">Semester</label>
                                <!-- <input type="text" name="payment-type" class="form-control" id="email" placeholder="Payment Type"> -->
                                <select class="form-select" aria-label="Default select example">
                                  <option selected disabled>Select semester</option>
                                  <?php
                                  $get_payment_type = "SELECT * FROM payment_types";
                                  $query_payment_type = mysqli_query($dbconnetion, $get_payment_type);
                                  while($payment_type = mysqli_fetch_array($query_payment_type)){
                                    $payment = $payment_type['name'];
                                    $payment_id = $payment['id'];
                                    ?>
                                  <option value="<?php echo $payment_id;?>"><?php echo $payment;?></option>

                                  <?php
                                  }
                                  ?>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="payment-type" class="form-label">Add Result File</label>
                                <input type="file" name="payment-type" class="form-control" id="email" placeholder="Payment Type">
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-red" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Upload</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Jamb Registration</th>
                            <th>Payment type</th>
                            <th>Amount</th>
                            <th>Reference</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>2010/10/14</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td>2009/09/15</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td>2008/12/13</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>30</td>
                            <td>2008/12/19</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2013/03/03</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>36</td>
                            <td>2008/10/16</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
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