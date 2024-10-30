<?php 
//define('PAGE', 'dashboard');
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
    
    <title>Quiz O Mania </title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/selects/selectivity-full.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/selectivity/selectivity.css">
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
            <h3 class="content-header-title">Add Event</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right">
                        <a href="event-list.php" class="btn btn-success mb-1" >View All Events</a>
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
                                        <form id="add_new_event_form">
                                            <div class="row justify-content-md-center">
                                                <div class="col-md-6">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="eventInput1">Event Name<span style="color:red; font-size:20px;">*</span></label>
                                                            <input type="text" id="eventInput1" class="form-control" name="event_name" placeholder="Enter Event Name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput2">Event Date<span style="color:red; font-size:20px;">*</span> </label>
                                                            <input type="date" id="eventInput2" class="form-control" name="event_date" placeholder="Enter date" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventInput3">Event Start Time</label>
                                                            <input type="text" id="eventInput3" class="form-control" placeholder="Enter Event Start Time" name="event_start_time">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput4">Event End Time</label>
                                                            <input type="text" id="eventInput4" class="form-control" placeholder="Enter Event End Time" name="event_end_time">
                                                        </div>
                                                        <div class="form-group">
                                                        
                                                            <label for="eventInput5">Event Place</label>
                                                            <input type="text" id="eventInput5" class="form-control" name="event_place" placeholder="Enter Event Place">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventInput6">Event Expense</label>
                                                            <input type="text" id="eventInput6" class="form-control" placeholder="Enter Event Expense" name="event_expense">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventInput7">Event Expense Details</label>
                                                            <input type="text" id="eventInput7" class="form-control" placeholder="Enter Event Expense Details" name="event_expense_details">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions text-center">
                                                <button type="reset" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> Submit
                                                </button>
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
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2021 <a class="text-bold-800 grey darken-2" href="https://quizomania.in/" target="_blank">Quiz O Mania </a></span><span class="float-md-right d-none d-lg-block">Developed by Quiz O Mania<span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->

    
     <!-- Jquery-->
     <script src="assets/js/jquery-3.4.1.min.js"></script>


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/select/selectivity-full.min.js"></script>
    <script src="app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/select/form-selectivity.js"></script>
    <script src="app-assets/js/scripts/forms/form-repeater.js"></script>
    <!-- END: Page JS-->

     <!-- Include Js -->
     <script type="text/javascript" src="include/core.js"></script>
     <!-- Toastr Js-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>

     <script>
         $(document).ready(function(){
         //var selectedValue=document.getElementById("input-radio-1").value;
         //console.log(selectedValue);
        // if(selectedValue=="Cash"){
            $("#input-radio-1").on("click",function(){
             console.log("Hello");
             const range=document.getElementById('range');
             range.style.display = "block";

         });
         $("#input-radio-2").on("click",function(){
             console.log("Hello2");
             const range=document.getElementById('range');
             range.style.display = "none";

         });
         $("#input-radio-3").on("click",function(){
             console.log("Hello3");
             const range=document.getElementById('range');
             range.style.display = "none";

         });
         $("#input-radio-4").on("click",function(){
             console.log("Hello4");
             const range=document.getElementById('range');
             range.style.display = "none";

         });
         $("#input-radio-5").on("click",function(){
             console.log("Hello5");
             const range=document.getElementById('range');
             range.style.display = "none";

         });

         //}else{

         //}
        
        });

    </script>



</body>
<!-- END: Body-->

</html>