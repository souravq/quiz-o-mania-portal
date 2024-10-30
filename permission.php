<?php
$PAGE='permission';
include 'include/function.php';
allpagecheck_session();
$obj = new Job;

?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Quiz-O-Mania </title>
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/invoice.css">
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

    <!-- BEGIN: Header-->
  
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
                <h3 class="content-header-title">Permission</h3>
            </div>
            <div class="content-header-right col-md-6 col-12">
                        <div class="btn-group float-md-right">
                            <!--<a href="add-invoice.php" class="btn btn-info mb-1" >Add Invoice </a>-->
                        </div>
                    </div>
        </div>
        
    <div class="content-body">
                    <!-- DOM - jQuery events table -->
                    <section id="dom">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Permission</h4>
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
                                                            <th>Invoice No.  </th>
                                                            <th>Person Name.  </th>
                                                            <th>Project Name</th>
                                                            <th>Payable Amount</th>
                                                            <th>Due Amount</th>
                                                            
                                                            <th>Status </th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
                                                    $i=1;
                                                    //if($_SESSION['role_value']==1){
                                                     $sql=$obj->select_all('invoice');
                                                     foreach($sql as $value){

                                                    ?>
                                                        <tr>
                                                            <td><?php echo $value['invoice_number']; ?></td>
                                                            <td><?php 
                                                             if($_SESSION['role_value']==1){
                                                                echo "Admin";
                                                            }else{
                                                            $id = $value['user_login_id']; 
                                                            $name=$obj->select_all_where('users','where login_data_id="'.$id.'"');
                                                            foreach($name as $namevalue){
                                                                $nameofuser=$namevalue['user_name'];
                                                            }
                                                            echo $nameofuser;
                                                        }
                                                            ?></td>
                                                            <td><?php 
                                                            $name= $value['project_name']; 
                                                            echo $name;
                                                            ?></td>
                                                            <td><?php 
                                                            $amount = $value['total_invoice_amount']; 
                                                            echo $amount;
                                                            ?></td>
                                                            <td><?php 
                                                            $price=$obj->select_all_where('project','where new_project_name="'.$name.'"');
                                                            foreach($price as $valuee){
                                                                $cost=$valuee['new_project_value'];

                                                            }
                                                            $due = ($cost-$amount);
                                                            //$status=$value['status'];
                                                            //if($status==1){
                                                                echo $due;
                                                            //}
                                                            ?></td>
                                                            
                                                            
                                                            <td>
                                                                
                                                                <?php 
                                                                $status=$value['status'];
                                                                if($status==0){
                                                                   // echo '<div class="badge badge-danger label-square">';
                                                                   // echo '<span>';
                                                                    //echo 'Not Approved';
                                                                    //echo '</span>';
                                                                   // echo '</div>';?>
                                                                   <a class="badge badge-danger label-square" onclick="statuschange(<?= $value['invoice_id']; ?>)"><span style="color:white;">Not Approved</span></a>
                                                                <?php 
                                                                }else if($status==1){
                                                                    echo '<div class="badge badge-success label-square">';
                                                                    echo '<span>';
                                                                    echo 'Approved';
                                                                    echo '</span>';
                                                                    echo '</div>';
                                                                }
                                                                else{
                                                                    echo ' ';
                                                                }
                                                                ?>
                                                                
                                                        </td>
                                                            <td>
                                                            <?php //if($status==1){ ?>
                                                            <a href="edit-invoice.php?invoiceid=<?= $value['invoice_id']; ?> +&invoice_v_id=0" class="btn btn-primary"><i class="la la-edit"></i></a>
                                                            <?php //} ?>
                                                            <a href="edit-invoice.php?invoice_v_id=<?= $value['invoice_id']; ?> +&invoiceid=0" class="btn btn-success"><i class="la la-eye"></i></a>
                                                            <?php //if($status==1){ ?>
                                                            <a class="btn btn-danger" onclick="deleteinvoice(<?= $value['invoice_id']; ?>)"><i class="la la-close"></i></a>
                                                            <?php //} ?>
                                                            </td>
                                                            
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                    
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
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2021 <a class="text-bold-800 grey darken-2" href="#" target="_blank">Priya Communication </a></span><span class="float-md-right d-none d-lg-block">Developed by Vertitect Technologies<span id="scroll-top"></span></span></p>
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