
<?php
include 'include/function.php';
quiz_fest_allpagecheck_session();
$obj = new Job;

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
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
     
     <style>
         .nav.nav-tabs .nav-item .nav-link.active{
        border: 1px solid orange;
        border-top: 2px solid orange;
        border-bottom: 1px solid #fff;
      }
     </style>
     
     


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Header-->



<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="quiz-fest-dashboard.php"><img class=" priya-logo" alt=" logo" src="app-assets/images/logo/quizomania_logo.png">
                        </a></li>
                    
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        
                     
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">Welcome</span><span class="avatar avatar-online"><img src="app-assets/images/portrait/small/profilepic.png" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                           
                                <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="quiz-fest-logout.php"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
<!-- END: Header-->
                 


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
           <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                
                <li class="mt-3 mb-2 active"><a href="quiz-fest-dashboard.php"><i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard">Quiz Fest Dashboard</span></a>
                </li>
                <li><a class=" nav-item" href="quiz-fest-logout.php"><i class="ft-power"></i><span data-i18n="Invoice Template">Logout </span></a>
                </li>
        </div>
    </div>


    
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
    
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">View all Registered Participants</h3>
            </div>
            <div class="content-header-right col-md-6 col-12">
                        
                        <div class="btn-group float-md-right">
                            
                            <a id="poexcel" class="btn btn-primary mb-1 mr-2" ><span style="color:white;">Export to Excel</span> </a>
                            
                            
                        </div>
            </div>
        </div>
        
        <div class="content-header row">
            <ul class="nav nav-tabs" id="myTab" style="margin-left:30px;" role="tablist">
               
              <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><h5>2022-23</h5></button>
              </li>
              
             
            </ul>
            <div class="tab-content" id="myTabContent">
                 
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="content-body">
                    <!-- DOM - jQuery events table -->
                    <section id="dom">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">View all Registered Participants</h4>
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
                                                <table class="table table-striped table-bordered dom-jQuery-events table2excel">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No. </th>
                                                            <th>Event Type</th>
                                                            <th>Registration Number</th>
                                                            <th>Participant 1 Name</th>
                                                            <th>Participant 1 Meal</th>
                                                            <th>Participant 2 Name</th>
                                                            <th>Participant 2 Meal</th>
                                                            <th>Participant Mobile Number</th>
                                                            <th>Participant Address</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                                                                                                                          <tbody>
                                                    <?php 

                                                        $i=1;
                                                       
                                                        $sql=$obj->select_all('quiz_fest');
                                                        foreach($sql as $value){
                                                                                                    
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i++; ?>.</td>
                                                            <td><?php echo $value['quiz_fest_type']; ?></td>
                                                            <td> <?php echo $value['quiz_fest_registration_number']; ?></td>
                                                            <td> <?php echo $value['quiz_fest_participant_one_name']; ?></td>
                                                            <td> <?php echo $value['quiz_fest_participant_one_meal']; ?></td>
                                                            
                                                             <td> <?php echo $value['quiz_fest_participant_two_name']; ?></td>
                                                            <td> <?php echo $value['quiz_fest_participant_two_meal']; ?></td>
                                                            <td> <?php echo $value['quiz_fest_participant_phone_number']; ?></td>
                                                            <td> <?php echo $value['quiz_fest_participant_address']; ?></td>
                                                          
                                                          
                                                        </tr>
                                                        <?php } ?>

                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Sr. No. </th>
                                                            <th>Event Type</th>
                                                            <th>Registration Number</th>
                                                            <th>Participant 1 Name</th>
                                                            <th>Participant 1 Meal</th>
                                                            <th>Participant 2 Name</th>
                                                            <th>Participant 2 Meal</th>
                                                            <th>Participant Mobile Number</th>
                                                            <th>Participant Address</th>
                                                            
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
     
     <script src="https://rawgit.com/unconditional/jquery-table2excel/master/src/jquery.table2excel.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     <script>
    $("#poexcel").click(function(){
    $(".table2excel").table2excel({

      // exclude CSS class
      exclude: ".noExl",
          name: "Excel Document Name",
          filename: "QuizOMania",
          fileext: ".xls",
          exclude_img: true,
          exclude_links: true,
          exclude_inputs: true
    });
  });
    
    </script>

   


</body>
<!-- END: Body-->

</html>



