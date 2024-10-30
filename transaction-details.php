<?php
$PAGE='transaction';

$transaction_id=$_GET['pname'];

//echo $project_name;
include 'include/function.php';
allpagecheck_session();
$obj = new Job;


$projectdetail = $obj->select_all_where('transaction','where transaction_id="'.$transaction_id.'"');
foreach($projectdetail as $projectvalue){
    $transaction_invoice_id=$projectvalue['transaction_invoice_id'];
    $transaction_name=$projectvalue['transaction_name'];
    $transaction_email=$projectvalue['transaction_email'];
    $transaction_ph_no=$projectvalue['transaction_ph_no'];
    $transaction_amount=$projectvalue['transaction_amount'];
    $transaction_pay_mode=$projectvalue['transaction_pay_mode'];
    $transaction_transactionid=$projectvalue['transaction_transactionid'];
    $transaction_membership=$projectvalue['transaction_membership'];
    $transaction_date=$projectvalue['transaction_date'];
}

?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>View All Branch - Priya Communications </title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Header-->
<?php 
    include "header.php";
    
    ?>
<!-- END: Header-->
                 


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
        <!--<//?php include 'sidebar.php'; ?>-->
        </div>
    </div>


    
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
    
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Transaction Details</h3>
            </div>
            <div class="content-header-right col-md-6 col-12">
                        <!-- <div class="btn-group float-md-right">
                            <a href="add-project.html" class="btn btn-info mb-1" >Add Campaign </a>
                        </div> -->
                    </div>
        </div>
        
    <div class="content-body">
                    <!-- DOM - jQuery events table -->
                    <section id="dom">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Transaction Details</h4>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">
                                            <p class="card-text"></p>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered ">
                                                    <tbody>
                                                        <tr>
                                                            <th>Transaction Invoice Number</th>
                                                            <td><?= $transaction_invoice_id; ?></td> 
                                                        </tr>
                                                        <tr>
                                                            <th>Name</th>
                                                            <td><?= $transaction_name; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Email Id</th>
                                                            <td><?= $transaction_email; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Phone No</th>
                                                            <td><?= $transaction_ph_no; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Amount </th>
                                                            <td><?= $transaction_amount; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Pay Mode</th>
                                                            <td><?= $transaction_pay_mode; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Transaction Id</th>
                                                            <td><?= $transaction_transactionid; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Membership</th>
                                                            <td><?= $transaction_membership; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Transaction Date</th>
                                                            <td><?= $transaction_date; ?></td>
                                                        </tr>
                                                        
                                                       
                                                      
                                                       
                                                       
                                                    </tbody>
                                                    
                                                    
                                                </table>
                                                <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.print()">Print this page</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- DOM - jQuery events table -->
                </div>
               
                </div>
                </div>
    
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2021 <a class="text-bold-800 grey darken-2" href="#" target="_blank">Priya Communication </a></span><span class="float-md-right d-none d-lg-block">Developed by Vertitect Technologies<span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/tables/datatables/datatable-advanced.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>