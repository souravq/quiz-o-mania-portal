<?php
$PAGE='finance';
include 'include/function.php';
allpagecheck_session();
$obj = new Job;

//$id=$_SESSION['user_login_id'];

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Quiz-O-Mania</title>
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <!-- Toastr-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">



<?php 
    include "header.php";
    
    ?>
<!-- END: Header-->
                 


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
          
        <?php include 'sidebar.php'; ?>
        </div>
    </div>

    
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Finance</h3>
                </div>
               
            </div>
    <div class="content-body">
                    <!-- DOM - jQuery events table -->
                    <section id="dom">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        
                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">
                                            <p class="card-text"></p>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered dom-jQuery-events">
                                                    <thead>
                                                        <tr>
                                                           
                                                            <th>Collector Name</th>
                                                            <th>Total Amount</th>
                                                            <th>Amount Received</th>
                                                            <th>Due Amount</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                      <tbody>
                                                        <?php 
                                                    
                                                         $sql=$obj->select_all_where('login_data','where login_role_value=1');
                                                         
                                                         foreach($sql as $value){


                                                        ?>
                                                        <tr>
                                                            <td><?php echo "Treasurer"; ?></td>
                                                             <td>
                                                                <?php 
                                                                $totalSum=0;
                                                                $userId=$value['login_id'];
                                                                $totalamountSql=$obj->select_all_where('transaction','where user_login_id="'.$userId.'"');
                                                                foreach ($totalamountSql as $totalValues) {
                                                                    $totalSum=$totalSum+$totalValues['transaction_amount'];
                                                                }
                                                                echo $totalSum;

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php 
                                                               
                                                                $userId=$value['login_id'];
                                                                $receivedamountSql=$obj->select_all_where('finance','where user_login_id="'.$userId.'"');
                                                                foreach ($receivedamountSql as $receivedValues) {
                                                                    $receivedSum=$receivedValues['amount_received'];
                                                                }
                                                                echo $receivedSum;

                                                                ?>
                                                                
                                                            </td>
                                                            <td>
                                                                <?php 
                                                                $dueAmount=$totalSum-$receivedSum;
                                                                echo $dueAmount;

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="edit-finance.php?uid=<?= $value['login_id']; ?>" class="btn btn-primary" ><i class="la la-edit"></i></a>
                                                                <a href="view-finance.php?cl_v_id=<?= $value['login_id']; ?>" class="btn btn-success"><i class="la la-eye"></i></a>
                                                            </td>
                                                                
                                                                    
                                                            
                                                             
                                                        </tr>
                                                        <?php } ?>

                                                        <?php 
                                                    
                                                         $sql2=$obj->select_all_where('login_data','where login_role_value=2');
                                                         
                                                         foreach($sql2 as $value2){


                                                        ?>
                                                        <tr>
                                                            <td><?php echo $value2['login_username']." (Collector)"; ?></td>
                                                            <td>
                                                                <?php 
                                                                $totalSum=0;
                                                                $userId=$value2['login_id'];
                                                                $totalamountSql=$obj->select_all_where('transaction','where user_login_id="'.$userId.'"');
                                                                foreach ($totalamountSql as $totalValues) {
                                                                    $totalSum=$totalSum+$totalValues['transaction_amount'];
                                                                }
                                                                echo $totalSum;

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php 
                                                               
                                                                $userId=$value2['login_id'];
                                                                $receivedamountSql=$obj->select_all_where('finance','where user_login_id="'.$userId.'"');
                                                                foreach ($receivedamountSql as $receivedValues) {
                                                                    $receivedSum=$receivedValues['amount_received'];
                                                                }
                                                                echo $receivedSum;

                                                                ?>
                                                                
                                                            </td>
                                                            <td>
                                                                <?php 
                                                                $dueAmount=$totalSum-$receivedSum;
                                                                echo $dueAmount;

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="edit-finance.php?uid=<?= $value2['login_id']; ?>" class="btn btn-primary" ><i class="la la-edit"></i></a>
                                                                <a href="view-finance.php?cl_v_id=<?= $value2['login_id']; ?>" class="btn btn-success"><i class="la la-eye"></i></a>
                                                            </td>
                                                                
                                                                    
                                                            
                                                             
                                                        </tr>
                                                        <?php } ?>

                                                        
                                                      </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            
                                                            <th>Collector Name</th>
                                                            <th>Total Amount</th>
                                                            <th>Amount Received</th>
                                                            <th>Due Amount</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </tfoot>
                                                </table>
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
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2021 <a class="text-bold-800 grey darken-2" href="#" target="_blank">Quiz-O-Mania</a></span><span class="float-md-right d-none d-lg-block">Developed by Quiz-O-Mania<span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->

    <!-- Jquery-->
    <script src="assets/js/jquery-3.4.1.min.js"></script>

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

     <!-- Include Js -->
     <script type="text/javascript" src="include/core.js"></script>
     <!-- Toastr Js-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>

</body>
<!-- END: Body-->

</html>