<?php
$PAGE='income_list';
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
           <!-- <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="mt-3 mb-2"><a href="dashboard.html"><i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard"> Dashboard</span></a>
                </li>
                
                <li class="nav-item"><a href="branch-list.html"><i class="la la-building"></i><span class="menu-title" data-i18n="Company">Company</span></a>
                </li>
                <li class="nav-item"><a href="user-list.html"><i class="la la-users"></i><span class="menu-title" data-i18n="Company">Users</span></a>
                </li>
                <li class=" nav-item"><a href="client-list.html"><i class="la la-user-secret"></i><span class="menu-title" data-i18n="Company">Clients</span></a>
                </li>
                <li class=" nav-item"><a href="vendor-list.html"><i class="la la-truck"></i><span class="menu-title" data-i18n="Company">Vendors</span></a>
                </li>
                <li class="nav-item"><a href="property-list.html"><i class="la la-desktop"></i><span class="menu-title" data-i18n="Company">Property </span></a>
                </li>
                <li class=" nav-item"><a href="property-owner-list.html"><i class="la la-diamond"></i><span class="menu-title" data-i18n="Company">Property Owner</span></a>
                </li>
                <li class=" nav-item"><a href="campaign-list.html"><i class="la la-star-half-full"></i><span class="menu-title" data-i18n="Company">Campaigns </span></a>
                </li>
                <li class="active active nav-item"><a href="#"><i class="la la-bar-chart"></i><span class="menu-title" data-i18n="Company">Finance </span></a>
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
                
                <li class="nav-item"><a href="#"><i class="la la-print"></i><span class="menu-title" data-i18n="Company">Reports </span></a>
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
                    <h3 class="content-header-title">View All Incomes</h3>
                </div>
                <div class="content-header-right col-md-6 col-12">
                            <div class="btn-group float-md-right">
                                <a href="add-income.php" class="btn btn-info mb-1" >Add Income</a>
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
                                                            <th>Date</th>

                                                            <th>Invoice No.</th>
                                                          
                                                            <th>Project</th>
                                                            <th>Amount
                                                                Received</th>
                                                            <th>Mode</th>
                                                            <th>Status </th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
                                                    $i=1;
                                                    
                                                        if($_SESSION['role_value']==1){
                                                            $sql=$obj->select_all('project_payment');
                                                           }else{ 
                                                               $sql=$obj->select_all_where('project_payment','where user_login_id="'.$_SESSION['user_login_id'].'"');
                                                           }
                                                     
                                                     foreach($sql as $value){

                                                    ?>

                                                        <tr>
                                                            <td><?php echo $value['project_start_date']; ?></td>
                                                            <td><?php echo $value['project_invoice']; ?></td>
                                                            <?php 
                                                            $id = $value['user_login_id']; 
                                                           
                                                            ?>
                                                           
                                                            <td><?php echo $value['project_name']; ?></td>
                                                            <td><?php echo $value['project_recieved_amount']; ?></td>
                                                            <td><?php echo $value['project_payment_method']; ?></td>
                                                            <td>
                                                                
                                                                <?php 
                                                                $status=$value['status'];
                                                                if($status==0){
                                                                    echo '<div class="badge badge-danger label-square">';
                                                                    echo '<span>';
                                                                    echo 'Not Approved';
                                                                    echo '</span>';
                                                                    echo '</div>';
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
                                                            <?php if($status==0 && ($id==$_SESSION['user_login_id'])){ ?>
                                                            <a href="edit-income-list.php?incomeid=<?= $value['project_payment_id']; ?> +&income_v_id=0" class="btn btn-primary"><i class="la la-edit"></i></a>
                                                            <?php }else if($_SESSION['role_value']==1){ ?>
                                                                <a href="edit-income-list.php?incomeid=<?= $value['project_payment_id']; ?> +&income_v_id=0" class="btn btn-primary"><i class="la la-edit"></i></a>
                                                                <?php  } ?>
                                                            <a href="edit-income-list.php?income_v_id=<?= $value['project_payment_id']; ?> +&incomeid=0" class="btn btn-success"><i class="la la-eye"></i></a>
                                                            <?php if($status==0 && ($id==$_SESSION['user_login_id'])){ ?>
                                                            <a class="btn btn-danger" onclick="deleteprojectincome(<?= $value['project_payment_id']; ?>)"><i class="la la-close"></i></a>
                                                            <?php }else if($_SESSION['role_value']==1){ ?>
                                                                <a class="btn btn-danger" onclick="deleteprojectincome(<?= $value['project_payment_id']; ?>)"><i class="la la-close"></i></a>
                                                                <?php  } ?>
                                                            </td>
                                                            
                                                        </tr>
                                                        <?php } ?>

                                                        <?php 
                                                     if($_SESSION['role_value']==2){

                                                        $branchquery=$obj->select_all_where('users','where user_login_id="'.$_SESSION['user_login_id'].'"');
                                                        foreach($branchquery as $branchvalue){
                                                            $userid=$branchvalue['login_data_id'];
                                                        
                                                        //echo $branchname;
                                                        
                                                        $sqll=$obj->select_all_where('project_payment','where user_login_id="'.$userid.'"');
                                                    
                                                     foreach($sqll as $valuee){

                                                    ?>
                                                       <tr>
                                                            <td><?php echo $valuee['project_start_date']; ?></td>
                                                            <td><?php echo $valuee['project_invoice']; ?></td>
                                                            <?php 
                                                            $id = $valuee['user_login_id']; 
                                                           
                                                            ?>
                                                            <td><?php echo $valuee['project_name']; ?></td>
                                                            <td><?php echo $valuee['project_recieved_amount']; ?></td>
                                                            <td><?php echo $valuee['project_payment_method']; ?></td>
                                                            <td>
                                                                
                                                                <?php 
                                                                $status=$valuee['status'];
                                                                if($status==0){
                                                                    echo '<div class="badge badge-danger label-square">';
                                                                    echo '<span>';
                                                                    echo 'Not Approved';
                                                                    echo '</span>';
                                                                    echo '</div>';
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
                                                            <?php if($status==0 && ($id==$_SESSION['user_login_id'])){ ?>
                                                            <a href="edit-income-list.php?incomeid=<?= $valuee['project_payment_id']; ?> +&income_v_id=0" class="btn btn-primary"><i class="la la-edit"></i></a>
                                                            <?php }else if($_SESSION['role_value']==1){ ?>
                                                                <a href="edit-income-list.php?incomeid=<?= $valuee['project_payment_id']; ?> +&income_v_id=0" class="btn btn-primary"><i class="la la-edit"></i></a>
                                                                <?php  } ?>
                                                            <a href="edit-income-list.php?income_v_id=<?= $valuee['project_payment_id']; ?> +&incomeid=0" class="btn btn-success"><i class="la la-eye"></i></a>
                                                            <?php if($status==0 && ($id==$_SESSION['user_login_id'])){ ?>
                                                            <a class="btn btn-danger" onclick="deleteprojectincome(<?= $valuee['project_payment_id']; ?>)"><i class="la la-close"></i></a>
                                                            <?php }else if($_SESSION['role_value']==1){ ?>
                                                                <a class="btn btn-danger" onclick="deleteprojectincome(<?= $value['project_payment_id']; ?>)"><i class="la la-close"></i></a>
                                                                <?php  } ?>
                                                            </td>
                                                            
                                                        </tr>
                                                        <?php 
                                                    } 
                                                }
                                                     }
                                                    ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Invoice No.</th>
                                                           
                                                            <th>Project</th>
                                                            <th>Amount
                                                                Received</th>
                                                            <th>Mode</th>
                                                            <th>Status </th>
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