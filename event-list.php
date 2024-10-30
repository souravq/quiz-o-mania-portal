<?php
$PAGE='event';
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
                <h3 class="content-header-title">View all Events</h3>
            </div>
            <div class="content-header-right col-md-6 col-12">
                        <div class="btn-group float-md-right">
                            <a href="add-event.php" class="btn btn-info mb-1" >Add Event </a>
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
                                        <h4 class="card-title">View All Events</h4>
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
                                                            <th>Sr. No. </th>
                                                            <th>Event Name</th>
                                                            <th>Event Date</th>
                                                            <th>Start Time</th>
                                                            <th>End Time</th>
                                                            <th>Event Place</th>
                                                            <th>Event Expense </th>
                                                            <th>Event Expense Details </th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 

                                                        $i=1;
                                                        
                                                        $sql=$obj->select_all('event');
                                                        
                                                        foreach($sql as $value){
                                                                                                    
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i++; ?>.</td>
                                                            <td><?php echo $value['event_name']; ?></td>
                                                            <td> <?php 
                                                            $date_time1= $value['event_date'];
                                                            echo $new_date1 = date("d-m-Y",strtotime($date_time1)); 
                                                             ?></td>
                                                            
                                                            <td> <?php echo $value['event_start_time']; ?></td>
                                                            <td> <?php echo $value['event_end_time']; ?></td>
                                                             <td> <?php echo $value['event_place']; ?></td>
                                                            <td> <?php echo $value['event_expense']; ?></td>
                                                             <td> <?php echo $value['event_expense_details']; ?></td>
                                                            
                                                            
                                                            <td>
                                                                <a href="edit-event.php?eventid=<?= $value['event_id']; ?>" class="btn btn-primary"><i class="la la-edit"></i></a>
                                                                <a class="btn btn-danger" onclick="deleteevent(<?= $value['event_id']; ?>)"><i class="la la-close"></i></a>
                                                            </td>
                                                            
                                                        </tr>
                                                        <?php } ?>

                                                       
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                             <th>Sr. No. </th>
                                                            <th>Event Name</th>
                                                            <th>Event Date</th>
                                                            <th>Start Time</th>
                                                            <th>End Time</th>
                                                            <th>Event Place</th>
                                                            <th>Event Expense </th>
                                                            <th>Event Expense Details </th>
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
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2021 <a class="text-bold-800 grey darken-2" href="#" target="_blank">Quiz-O-Mania </a></span><span class="float-md-right d-none d-lg-block">Developed by Quiz-O-Mania<span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->

    

    <!-- Jquery-->
    <script src="assets/js/jquery-3.4.1.min.js"></script>

    <script Type="text/javascript">

     tbody.on('click', 'tr', function (e) {
    let target = $(e.target);
    if (target.is('i') || target.is('button') || target.is('a') || target.hasClass('select-checkbox')) {
        return;
    }
    //your stuff here
     });
   </script>



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