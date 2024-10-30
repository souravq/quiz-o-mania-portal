<?php
$PAGE='invoice_list';

include 'include/function.php';
allpagecheck_session();
$obj = new Job;

$invoice_id=$_GET['invoiceid'];

$invoice_view_id=$_GET['invoice_v_id'];
if($invoice_view_id>0){
    $invoice_id = $invoice_view_id;
}
//echo $branch_id;

$fetchData=$obj->select_all_where('invoice','where invoice_id ="'.$invoice_id.'"');
foreach($fetchData as $values){
     $project_name = $values['project_name'];
     $invoice_date=$values['invoice_date'];
     $invoice_due_date=$values['invoice_due_date'];
     $invoice_number=$values['invoice_number'];
     $net_amount=$values['net_amount'];
     $gst_type=$values['gst_type'];
     $gst_percent=$values['gst_percent'];
     $gst_amount=$values['gst_amount'];
     $gst_no=$values['gst_no'];
     $total_invoice_amount=$values['total_invoice_amount'];
     $upload_invoice=$values['upload_invoice'];
}

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
   <!-- <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="dashboard.php"><img class="priya-logo" alt=" logo" src="app-assets/images/logo/logo.png">
                        </a></li>
                    
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-danger badge-up badge-glow">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-danger float-right m-0">5 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan mr-0"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">You have new order!</h6>
                                                <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1 mr-0"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading red darken-1">99% Server load</h6>
                                                <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3 mr-0"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan mr-0"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Complete the task</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal mr-0"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Generate monthly report</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"></i></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6><span class="notification-tag badge badge-warning float-right m-0">4 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Margaret Govan</h6>
                                                <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Carie Berra</h6>
                                                <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Eric Alsobrook</h6>
                                                <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">Akash Das</span><span class="avatar avatar-online"><img src="app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                            <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                                <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="login.html"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</nav>-->
<?php 
    include "header.php";
    
    ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <!--<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="mt-3 mb-2"><a href="dashboard.html"><i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard"> Dashboard</span></a>
                </li>
                
                <li class="nav-item"><a href="branch-list.html"><i class="la la-building"></i><span class="menu-title" data-i18n="Company">Company</span></a>
                </li>
                <li class="nav-item"><a href="user-list.html"><i class="la la-users"></i><span class="menu-title" data-i18n="Company">Users</span></a>
                </li>
                <li class="active active nav-item"><a href="client-list.html"><i class="la la-user-secret"></i><span class="menu-title" data-i18n="Company">Clients</span></a>
                </li>
                <li class=" nav-item"><a href="vendor-list.html"><i class="la la-truck"></i><span class="menu-title" data-i18n="Company">Vendors</span></a>
                </li>
                <li class=" nav-item"><a href="property-list.html"><i class="la la-desktop"></i><span class="menu-title" data-i18n="Company">Property </span></a>
                </li>
                <li class="nav-item"><a href="property-owner-list.html"><i class="la la-diamond"></i><span class="menu-title" data-i18n="Company">Property Owner</span></a>
                </li>
                <li class=" nav-item"><a href="campaign-list.html"><i class="la la-star-half-full"></i><span class="menu-title" data-i18n="Company">Campaigns </span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-bar-chart"></i><span class="menu-title" data-i18n="Company">Finance </span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="invoice-list.html"><i></i><span data-i18n="Invoice Template">Campaign Invoice  </span></a>
                        </li>
                        <li><a class="menu-item" href="income-list.html"><i></i><span data-i18n="Invoice Template">Payments Received</span></a>
                        </li>
                        <li><a class="menu-item" href="vendor-invoice-list.html"><i></i><span data-i18n="Invoice Template">Vendor Invoice </span></a>
                        </li>
                        <li><a class="menu-item" href="vendor-payment-list.html"><i></i><span data-i18n="Invoice Template">Vendor Payment </span></a>
                        </li>
                        <li><a class="menu-item" href="general-expenditure-list.html"><i></i><span data-i18n="Invoice Template">General Expenses </span></a>
                        </li>
                    </ul>
                </li>
                 <li class=" nav-item"><a href="electric-expenditure-list.html"><i class="la la-lightbulb-o"></i><span class="menu-title" data-i18n="Electricity">Electricity</span></a>
                </li>
                
                <li class=" nav-item"><a href="#"><i class="la la-print"></i><span class="menu-title" data-i18n="Company">Reports </span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="project-report-list.html"><i></i><span data-i18n="Invoice Summary">Project Report</span></a>
                        </li>
                        <li><a class="menu-item" href="invoice-report-list.html"><i></i><span data-i18n="Invoice Template">Invoice Report  </span></a>
                        </li>
                        <li><a class="menu-item" href="income-report-list.html"><i></i><span data-i18n="Invoice Template">Income Report </span></a>
                        </li>
                        <li><a class="menu-item" href="expenditure-report.html"><i></i><span data-i18n="Invoice Template">Expenditure Report  </span></a>
                        </li>
                        <li><a class="menu-item" href="general-expense-report.html"><i></i><span data-i18n="Invoice Template">General Expense Report </span></a>
                        </li>
                        <li><a class="menu-item" href="property-available-report.html"><i></i><span data-i18n="Invoice Template">Property Availability Report</span></a>
                        </li>
                        <li><a class="menu-item" href="electricity-report.html"><i></i><span data-i18n="Invoice Template">Electricity Report</span></a>
                        </li>
                        <li><a class="menu-item" href="gst-report.html"><i></i><span data-i18n="Invoice Template">GST Report </span></a>
                        </li>
                        <li><a class="menu-item" href="tds-report.html"><i></i><span data-i18n="Invoice Template">TDS Report</span></a>
                        </li>
                    </ul>
                </li>
                <li><a class=" nav-item" href="login.html"><i class="ft-power"></i><span data-i18n="Invoice Template">Logout </span></a>
                </li>
                
        </ul>-->
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
            <h3 class="content-header-title">
            <?php
             if($invoice_view_id>0){

             ?>View 
             <?php
             } else {
              ?>
              Edit
              <?} ?>
            Invoice</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right">
                        <a href="invoice-list.php" class="btn btn-success mb-1" >View All Clients</a>
                        <!--<a href="permission.php" class="btn btn-success mb-1" >View All Clients</a>-->
                    </div>
                </div>
    </div>
    <div class="content-body">
                    <!-- DOM - jQuery events table -->
                    <div class="row match-height">
                        <div class="col-md-12">
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
                                    <div class="card-body">
                                    <form class="form" id="edit_invoice_form" enctype="multipart/form-data">
                                            <div class="row justify-content-md-center">
                                                <div class="col-md-6">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label  for="project_name">Select Campaign / Project*</label>
                                                            <div >
                                                                <select id="project_name" name="update_project_name" class="form-control" <?php if($invoice_view_id>0){?> readonly<?php } ?> required>
                                                                    <option value="none" selected="" disabled="">Select Campaign / Project*</option>
                                                                    <?php
                                                                    $projectquery=$obj->select_all('project');
                                                                    foreach($projectquery as $projectvalue){
                                                                   
                                                                    ?>
                                                                    <option value="<?php echo $projectvalue['new_project_name']; ?>" <?php if($project_name==$projectvalue['new_project_name'])  {echo 'selected';} ?>><?php echo $projectvalue['new_project_name']; ?></option>
                                                                    <?php } ?>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label  for="invoice_date">Select Invoice Date*</label>
                                                           
                                                            <input type="date" id="invoice_date" class="form-control" placeholder="Enter Bill Due Date" name="update_invoice_date" value="<?= $invoice_date; ?>" <?php if($invoice_view_id>0){?> readonly<?php } ?> required>
                                                            <input type="hidden" name="invoice_id" value="<?= $invoice_id; ?>">
                                                        
                                                        </div>

                                                       <!-- <div class="form-group">
                                                            <label  for="invoice_due_date">Select Invoice Due Date*</label>
                                                          
                                                            <input type="date" id="invoice_due_date" class="form-control" placeholder="Enter Bill Due Date" name="invoice_due_date" value="<?= $invoice_due_date; ?>" <?php if($invoice_view_id>0){?> readonly<?php } ?> required>
                                                        </div>-->

                                                        <!--<div class="form-group">
                                                            <label for="invoice_number"> Invoice Number*</label>-->
                                                            <input type="hidden" id="invoice_number" class="form-control" placeholder="Enter Invoice Number" name="invoice_number" value="<?= $invoice_number; ?>" <?php if($invoice_view_id>0){?> readonly<?php } ?> required>
                                                        

                                                        <div class="form-group">
                                                            <label for="net_amount"> Add Net Amount</label>
                                                            <input type="text" id="net_amount" class="form-control" placeholder="Enter Net Amount" name="net_amount" value="<?= $net_amount; ?>" <?php if($invoice_view_id>0){?> readonly<?php } ?> >
                                                        </div>

                                                        <div class="form-group">
                                                            <label  for="gst_type">Select GST Type</label>
                                                            <div >
                                                                <select id="gst_type" name="gst_type" class="form-control" <?php if($invoice_view_id>0){?> readonly<?php } ?>>
                                                                    <option value="none" selected="" disabled="">Select GST type</option>
                                                                    <option value="SGST" <?php if($gst_type=="SGST")  {echo 'selected';} ?>>SGST</option>
                                                                    <option value="CGST" <?php if($gst_type=="CGST")  {echo 'selected';} ?>>CGST</option>
                                                                    <option value="IGST" <?php if($gst_type=="IGST")  {echo 'selected';} ?>>IGST</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="gst_percent">GST Percentage</label>
                                                            <input type="text" id="gst_percent" class="form-control" placeholder="Enter GST Percentage" name="gst_percent" value="<?= $gst_percent; ?>" <?php if($invoice_view_id>0){?> readonly<?php } ?>>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="gst_amount">GST Amount</label>
                                                            <input type="text" id="gst_amount" class="form-control" placeholder="Enter GST Amount" name="gst_amount" value="<?= $gst_amount; ?>" <?php if($invoice_view_id>0){?> readonly<?php } ?>>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="gst_no">GST No.</label>
                                                            <input type="text" id="gst_no" class="form-control" placeholder="Enter GST No." name="gst_no" value="<?= $gst_no; ?>" <?php if($invoice_view_id>0){?> readonly<?php } ?>>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="total_invoice_amount">Total Invoice Amount</label>
                                                            <input type="text" id="total_invoice_amount" class="form-control" placeholder="Enter Total Amount" name="total_invoice_amount" value="<?= $total_invoice_amount; ?>" <?php if($invoice_view_id>0){?> readonly<?php } ?> >
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="upload_invoice">Upload Invoice<small>
                                                                (File type: .pdf) Max Size: 5 MB
                                                            </small></label>
                                                            <input type="file" id="upload_invoice" class="form-control" name="upload_invoice" placeholder="" accept="application/pdf,.docx,.doc" value="<?= $upload_invoice; ?>" <?php if($invoice_view_id>0){?> readonly<?php } ?> >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                        <?php if($invoice_view_id>0){?>
                                            
                                            <?php }else{ ?>
                                            <div class="form-actions text-center">
                                                <button type="reset" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> Update
                                                </button>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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