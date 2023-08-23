<!DOCTYPE html>
<html dir="ltr" lang="en">

<!--- js ---->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>

<!-- databoot -->
<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'grab'; ///////////////////////////////

$conn = mysqli_connect($servername, $username, $password, $dbname);

mysqli_set_charset($conn, "utf8");
// SQL query to retrieve data from a table
$sql = 'SELECT * FROM food_order'; /////////////////////////////

// Execute the query and get the result set
$result = mysqli_query($conn, $sql);
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/Grab_logo/Grab_logo_resize.png">
    <title>GrabFood</title>
    <!-- Custom CSS -->
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.php">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="assets/images/Grab_logo/Grab_logo_resize.png" alt="homepage"
                                    class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="assets/images/Grab_logo/Grab_logo_resize.png" alt="homepage"
                                    class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="assets/images/Grab_logo/Grab_logo_name_resize.png" alt="homepage"
                                    class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="assets/images/Grab_logo/Grab_logo_name_resize.png" class="light-logo"
                                    alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/Grab_logo/Grab_logo_resize.png" alt="user"
                                    class="rounded-circle" width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark">Grab food</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                        Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"><span class="hide-menu">Consumer</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="consumer.php"
                                aria-expanded="false"><i class="icon-user"></i><span class="hide-menu">Consumer
                                    profile</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Rider</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="rider.php"
                                aria-expanded="false"><i class="icon-user"></i><span class="hide-menu">Rider
                                    profile</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Merchant</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="restaurant.php"
                                aria-expanded="false"><i class="icon-basket"></i><span
                                    class="hide-menu">Restaurant</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="food_order.php"
                                aria-expanded="false"><i class=" icon-basket"></i><span class="hide-menu">Food order
                                </span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i class=" icon-basket"></i><span class="hide-menu">Food
                                </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="food_type.php" class="sidebar-link"><span
                                            class="hide-menu"> Food category
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="food.php" class="sidebar-link"><span
                                            class="hide-menu"> Food
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Grab</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php">Food order</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- Start Top Leader Table -->
                <!-- *************************************************************** -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Food Order</h4>
                                    <div class="ml-auto">
                                        <div class="dropdown sub-dropdown">
                                            <a href="#" class="btn waves-effect waves-light btn-rounded btn btn-success"
                                                style="float:right;" onclick="insertData()">Add</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">No</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">ID
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Price
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">
                                                    Status</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Consumer
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Rider
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Payment
                                                </th>
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Edit
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Remove
                                                </th>
                                            </tr>
                                        </thead>



                                        <tbody>
                                            <?php
                                            $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                                            $i = 1;
                                            while ($objResult = mysqli_fetch_array($objQuery)) {
                                                ?>

                                                <tr>
                                                    <td class="font-weight-medium text-dark border-top-2 px-2 py-4">
                                                        <div align="center">
                                                            <?php echo $i; ?>
                                                        </div>
                                                    </td>
                                                    <td class="font-weight-medium text-dark border-top-2 px-2 py-4">
                                                        <?php echo $objResult["order_ID"]; ?>
                                                    </td>

                                                    <td class="font-weight-medium text-dark border-top-2 px-2 py-4">
                                                        <?php echo $objResult["order_price"]; ?>
                                                    </td>
                                                    <td class="font-weight-medium text-dark border-top-2 px-2 py-4">
                                                        <?php echo $objResult["order_status"]; ?>
                                                    </td>
                                                    <td class="font-weight-medium text-dark border-top-2 px-2 py-4">
                                                        <?php echo $objResult["cus_email"]; ?>
                                                    </td>
                                                    <td class="font-weight-medium text-dark border-top-2 px-2 py-4">
                                                        <?php echo $objResult["rider_email"]; ?>
                                                    </td>
                                                    <td class="font-weight-medium text-dark border-top-2 px-2 py-4">
                                                        <?php echo $objResult["payment_ID"]; ?>
                                                    </td>




                                                    <td
                                                        class="font-weight-medium text-dark border-top-2 px-2 py-4 text-center">
                                                        <div class="d-flex align-items-center">
                                                            <form action="updataedata.php" method="post">

                                                                <a href="#" class="btn btn-warning btn-rounded"
                                                                    onclick="editData('<?php echo $objResult['order_ID'] ?>', '<?php echo $objResult['order_price'] ?>','<?php echo $objResult['order_status'] ?>' , '<?php echo $objResult['cus_email'] ?>' ,'<?php echo $objResult['rider_email'] ?>' , '<?php echo $objResult['payment_ID'] ?>')">Edit</a>


                                                            </form>
                                                        </div>
                                                    </td>



                                                    <td class="font-weight-medium text-dark px-2 py-4 text-center">
                                                        <div class="d-flex align-items-center">
                                                            <form action="deletedata.php" method="post">
                                                                <a href="#"
                                                                    class="btn waves-effect waves-light btn-rounded btn-danger delete-res"
                                                                    data-order="<?php echo $objResult["order_ID"]; ?>">Remove</a>
                                                            </form>
                                                        </div>
                                                    </td>


                                                </tr>
                                                <?php
                                                $i++;
                                            }
                                            ?>


                                        </tbody>
                                    </table>
                                </div>
                                <div style="float:right;">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" style="color: #2dce89;" href="javascript:void(0)"
                                                    aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link text-dark"
                                                    href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link text-dark"
                                                    href="javascript:void(0)">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link text-dark"
                                                    href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" style="color: #2dce89;" href="javascript:void(0)"
                                                    aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                <!-- All Rights Reserved by Adminmart. Designed and Developed by <a
                    href="https://wrappixel.com">WrapPixel</a>. -->
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.min.js"></script>

    <style>
    .form-group {
        text-align: left;
    }

    label {
        margin-right: 1rem;
    }
    </style>


    <script>
    // ===================================================================== Insert data =====================================================================
    function insertData() {
  // Display a pop-up window with a form for inserting the data
  Swal.fire({
    title: "Insert Data",
    html:
      '<form id="insert-form" class="form">' +
      '<div class="form-group">' +
      '<label for="id" class="label font-weight-medium text-dark">ID:</label>' +
      '<input type="text" id="id" name="id" class="form-control" required>' +
      "</div>" +
      '<div class="form-group">' +
      '<label for="price" class="label font-weight-medium text-dark">Price:</label>' +
      '<input type="number" id="price" name="price" class="form-control" required>' +
      "</div>" +
      '<div class="form-group">' +
                    '<label for="status" class="label font-weight-medium text-dark">Status :</label>' +
                    '<select id="status" name="status" class="form-control">' +
                    '<option value="finish">Finish</option>' +
                    '<option value="delivery">Delivery</option>' +
                    '<option value="cancel">Cancel</option>' +
                    '</select>' +
                    '</div>' +
      '<div class="form-group">' +
      '<label for="consumer" class="label font-weight-medium text-dark">Consumer:</label>' +
      '<input type="email" id="consumer" name="consumer" class="form-control" required>' +
      "</div>" +
      '<div class="form-group">' +
      '<label for="rider" class="label font-weight-medium text-dark">Rider:</label>' +
      '<input type="email" id="rider" name="rider" class="form-control" required>' +
      "</div>" +
      '<div class="form-group">' +
      '<label for="payment" class="label font-weight-medium text-dark">Payment:</label>' +
      '<input type="text" id="payment" name="payment" class="form-control" required>' +
      "</div>" +
      "</form>",
    showCancelButton: true,
    confirmButtonText: "Save",
    showLoaderOnConfirm: true,
    confirmButtonColor: "#10ae68",
    allowOutsideClick: () => !Swal.isLoading(),
  }).then((result) => {
    if (result.isConfirmed) {
      // Show a success message
      $.ajax({
        type: "POST",
        url: "insert-data-order.php",
        data: {
          id: $("#id").val(),
          price: $("#price").val(),
          status: $("#status").val(),
          consumer: $("#consumer").val(),
          rider: $("#rider").val(),
          payment: $("#payment").val(),
        },
        success: function (data) {
          Swal.fire({
            title: "Success!",
            text: "Data has been saved successfully.",
            icon: "success",
            confirmButtonColor: "#10ae68",
          }).then((result) => {
            if (result.isConfirmed) {
              location.reload();
            }
          });
        },
        error: function () {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Something went wrong!",
          });
        },
      });
    }
  });
}




    // ===================================================================== Update data =====================================================================
    function editData(id,price,status,consumer,rider,payment) {
        // Display a pop-up window with a form for editing the data
        Swal.fire({
            title: 'Edit Data',
            html: '<form id="edit-form" class="form">' +
                '<div class="form-group">' +
                '<label for="id" class="label font-weight-medium text-dark">ID :</label>' +
                '<input type="text" id="id" name="id" value="' + id +
                '" class="form-control" disabled>' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="price" class="label font-weight-medium text-dark">Price :</label>' +
                '<input type="number" id="price" name="price" value="' + price +
                '" class="form-control" required>' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="status" class="label font-weight-medium text-dark">Status :</label>' +
                '<select id="status" name="status" class="form-control">' +
                '<option value="finish">Finish</option>' +
                `${status === 'finish' && "<option value='finish'>Finish</option> <option value='delivery'>Delivery</option>  <option value='cancel'>Cancel</option>"}` +
                `${status === 'delivery' && "<option value='delivery'>Delivery</option> <option value='finish'>Finish</option>  <option value='cancel'>Cancel</option>"}` +
                `${status === 'cancel' && "<option value='cancel'>Cancel</option> <option value='finish'>Finish</option>  <option value='delivery'>Delivery</option>"}` +
                '</select>' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="consumer" class="label font-weight-medium text-dark">Consumer :</label>' +
                '<input type="email" id="consumer" name="consumer" value="' + consumer +
                '" class="form-control" required>' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="rider" class="label font-weight-medium text-dark">Rider :</label>' +
                '<input type="email" id="rider" name="rider" value="' + rider +
                '" class="form-control" required>' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="payment" class="label font-weight-medium text-dark">Payment :</label>' +
                '<input type="text" id="payment" name="payment" value="' + payment +
                '" class="form-control" required>' +
                '</div>' +
                '</form>',
                
            showCancelButton: true,
            confirmButtonText: 'Save',
            showLoaderOnConfirm: true,
            confirmButtonColor: '#10ae68',


            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {
                // Show a success message
                console.log($('#address').val());
                $.ajax({
                    type: 'POST',
                    url: 'update-data-order.php',
                    data: {
                        id: $('#id').val(),
                        price: $('#price').val(),
                        status: $('#status').val(),
                        consumer: $('#consumer').val(),
                        rider: $('#rider').val(),
                        payment: $('#payment').val(),
                    },
                    success: function(data) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Data edited successfully.',
                            icon: 'success',
                            confirmButtonColor: '#10ae68'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // location.reload();
                            }
                        });
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                        });
                    }
                });
            }

        });
    }

    // ===================================================================== delete data =====================================================================
    $(document).ready(function () {
            $('.delete-res').click(function () {
                var order_ID = $(this).data('order');
                Swal.fire({
                    icon: 'warning',
                    title: 'Are you sure?',
                    text: 'You want to delete ' + order_ID + ' record!',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',

                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            url: 'delete-data-order.php',
                            data: {
                                order_ID: order_ID
                            },
                            success: function (data) {
                                Swal.fire({
                                    title: 'Success!',
                                    text: 'record deleted successfully.',
                                    icon: 'success',
                                    confirmButtonColor: '#10ae68'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                });
                            },
                            error: function () {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Something went wrong!'
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>