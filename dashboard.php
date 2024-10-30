<?php 
//define('PAGE', 'dashboard');
$PAGE='dashboard';
include 'include/function.php';
allpagecheck_session();
$obj = new Job;
?>
<!DOCTYPE php>
<php class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/php; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Quiz O Mania </title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/meteocons/style.css">
    
    
    
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
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/timeline.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-ecommerce.css">
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
           <?php include 'sidebar.php'; ?>
        </div>
    </div>

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper" style="background-color: cadetblue;">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- eCommerce statistic -->
                <div class="row">
                     <?php  if(($_SESSION['role_value']==1)){ ?>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="info">₹
                                            <?php 
                                                $amount=0;
                                                $site=$obj->select_all('transaction');
                                                foreach($site as $values){
                                                    $amount=$amount+$values['transaction_amount'];
                                                }
                                                
                                                echo $amount;
                                                ?>
                                            
                                            </h3>
                                            <h6>Total Donation</h6>
                                        </div>
                                        <div>
                                        	<img src="images/billboard.png" class="float-right" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php  if(($_SESSION['role_value']==2)){ ?>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="info">₹
                                            <?php 
                                                $amount=0;
                                                $site=$obj->select_all_where('transaction','where user_login_id="'.$_SESSION["user_login_id"].'"');
                                                foreach($site as $values){
                                                    $amount=$amount+$values['transaction_amount'];
                                                }
                                                
                                                echo $amount;
                                                ?>
                                            
                                            </h3>
                                            <h6>Total Donation</h6>
                                        </div>
                                        <div>
                                        	<img src="images/billboard.png" class="float-right" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="warning">
                                            <?php 
                                                $site=$obj->select_num_rows('member','');
                                                
                                                echo $site;
                                                ?>
                                           
                                            </h3>
                                            <h6>Total Members</h6>
                                        </div>
                                        <div>
                                        	<img src="images/billboard2.png" class="float-right" alt="">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <?php  if(($_SESSION['role_value']==1)){ ?>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="success">
                                               0
                                            </h3>
                                            <h6>Total Campaigns</h6>
                                        </div>
                                        <div>
                                        	<img src="images/project.png" class="float-right" alt="">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        <?php  if(($_SESSION['role_value']==2)){ ?>
                	<div class="col-xl-4 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="danger">
                                            <?php 
                                                $site=$obj->select_num_rows('transaction','where user_login_id="'.$_SESSION["user_login_id"].'" &&  status=1');
                                                
                                                echo $site;
                                                ?>
                                           
                                            </h3>
                                            <h6>Invoice Raised</h6>
                                        </div>
                                        <div>
                                        	<img src="images/invoice.png" class="float-right" alt="">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                </div>
                  <?php  if(($_SESSION['role_value']==1)){ ?>
                <div class="row">
                     <?php  if(($_SESSION['role_value']==1)){ ?>
                	<div class="col-xl-4 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="danger">
                                            <?php 
                                                $site=$obj->select_num_rows('transaction','where status=1');
                                                
                                                echo $site;
                                                ?>
                                           
                                            </h3>
                                            <h6>Invoice Raised</h6>
                                        </div>
                                        <div>
                                        	<img src="images/invoice.png" class="float-right" alt="">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    
                    <?php  if(($_SESSION['role_value']==2)){ ?>
                	<div class="col-xl-4 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="danger">
                                            <?php 
                                                $site=$obj->select_num_rows('transaction','where user_login_id=$_SESSION["user_login_id"] &&  status=1');
                                                
                                                echo $site;
                                                ?>
                                           
                                            </h3>
                                            <h6>Invoice Raised</h6>
                                        </div>
                                        <div>
                                        	<img src="images/invoice.png" class="float-right" alt="">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="info">₹
                                            <?php 
                                                $Received_Amount=0;
                                                $site2=$obj->select_all('finance');
                                                foreach($site2 as $values2){
                                                    $Received_Amount=$Received_Amount+$values2['amount_received'];
                                                }
                                                
                                                echo $Received_Amount;
                                                ?>
                                           
                                            </h3>
                                            <h6>Payment Received</h6>
                                        </div>
                                        <div>
                                        	<img src="images/income.png" class="float-right" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="warning">₹
                                                <?php 
                                                echo $amount-$Received_Amount;
                                                ?>
                                            
                                            </h3>
                                            <h6>Payment Due</h6>
                                        </div>
                                        <div>
                                        	<img src="images/due.png" class="float-right" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                 
                    
                    
                </div>
                <?php } ?>
                <!--/ eCommerce statistic -->

                <!-- Products sell and New Orders -->

 
                   
                <!--/ Products sell and New Orders Ends-->
              


                <!-- Recent Transactions -->
                <?php  if(($_SESSION['role_value']==1)){ ?>
                <div class="row">
                    <div id="recent-renewals" class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Finance Status</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive" style="height:330px;">
                                    <table id="recent-renewal" class="table table-hover table-xl mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Collector Name</th>
                                                <th class="border-top-0">Total Amount</th>
                                                <th class="border-top-0">Amount Received</th>
                                                <th class="border-top-0">Due Amount</th>

                                               
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
                                                           
                                                             
                                                        </tr>
                                                        <?php } ?>

                                                        
                                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <?php } ?>
                <?php  if(($_SESSION['role_value']==2)){ ?>
                <div class="row">
                    <div id="recent-renewals" class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Finance Status</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive" style="height:150px;">
                                    <table id="recent-renewal" class="table table-hover table-xl mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Collector Name</th>
                                                <th class="border-top-0">Total Amount</th>
                                                <th class="border-top-0">Amount Received</th>
                                                <th class="border-top-0">Due Amount</th>

                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                                      

                                                        
                                                        <tr>
                                                             <?php 
                                                    
                                                         $sql2=$obj->select_all_where('login_data','where login_id=$_SESSION["user_login_id"]');
                                                         
                                                         foreach($sql2 as $value2){
                                                             $name=$value2['login_username'];
                                                         }
                                                         ?>
                                                            <td><?php echo $name." (Collector)"; ?></td>
                                                            <td>
                                                                <?php 
                                                                $totalSum=0;
                                                                $userId=$_SESSION['user_login_id'];
                                                                $totalamountSql=$obj->select_all_where('transaction','where user_login_id="'.$userId.'"');
                                                                foreach ($totalamountSql as $totalValues) {
                                                                    $totalSum=$totalSum+$totalValues['transaction_amount'];
                                                                }
                                                                echo $totalSum;

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php 
                                                               
                                                                $userId=$_SESSION['user_login_id'];
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
                                                           
                                                             
                                                        </tr>
                                                       

                                                        
                                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <?php } ?>
                <?php  if(($_SESSION['role_value']==1)){ ?>
                <div class="row">
                   
                    <div id="recent-electricity-bills" class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Last Added Donation</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive" style="height:330px; overflow: scroll;">
                                    <table id="recent-electricity" class="table table-hover table-xl mb-0">
                                        <thead>
                                        
                                            <tr>
                                                <th class="border-top-0">Date</th>
                                                <th class="border-top-0">Person Name</th>
                                                <th class="border-top-0">Amount</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody >
                                       
                                        <?php 
                                                    //$i=1;
                                                    //if($_SESSION['role_value']==1){
                                                     $sql2=$obj->select_all('transaction ORDER BY transaction_id DESC LIMIT 10');
                                                     foreach($sql2 as $value2){

                                                    ?>
                                            <tr>
                                                <td class="text-truncate"><?= $value2['transaction_date']; ?></td>
                                                <td class="text-truncate"><?= $value2['transaction_name']; ?></td>
                                                <td class="text-truncate"><?= $value2['transaction_amount']; ?></td>
                                               
                                            </tr>
                                           <?php } ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                
                 <?php  if(($_SESSION['role_value']==2)){ ?>
                <div class="row">
                   
                    <div id="recent-electricity-bills" class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Last Added Donation</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive" style="height:330px;overflow: scroll;">
                                    <table id="recent-electricity" class="table table-hover table-xl mb-0">
                                        <thead>
                                        
                                            <tr>
                                                <th class="border-top-0">Date</th>
                                                <th class="border-top-0">Person Name</th>
                                                <th class="border-top-0">Amount</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody >
                                       
                                        <?php 
                                                    //$i=1;
                                                    //if($_SESSION['role_value']==1){
                                                     $sql2=$obj->select_all_where('transaction','where user_login_id="'.$_SESSION["user_login_id"].'" ORDER BY transaction_id DESC LIMIT 10');
                                                     foreach($sql2 as $value2){

                                                    ?>
                                            <tr>
                                                <td class="text-truncate"><?= $value2['transaction_date']; ?></td>
                                                <td class="text-truncate"><?= $value2['transaction_name']; ?></td>
                                                <td class="text-truncate"><?= $value2['transaction_amount']; ?></td>
                                               
                                            </tr>
                                           <?php } ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                
              <?php  if(($_SESSION['role_value']==2)){ ?>
                <div class="row">
                   
                    <div id="recent-electricity-bills" class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Previous Deposit</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table id="recent-electricity" class="table table-hover table-xl mb-0">
                                        <thead>
                                        
                                            <tr>
                                                 <th class="border-top-0">Sr. No. </th>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Date</th>
                                                <th class="border-top-0">Deposit Amount</th>
                                               
                                            </tr>
                                        </thead>
                                       <tbody>
                                                    <?php 

                                                        $i=1;
                                                       
                                                        $sql=$obj->select_all_where('finance_list','where user_login_id=$_SESSION["user_login_id"]');
                                                           
                                                        foreach($sql as $value){
                                                                                                    
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i++; ?>.</td>
                                                            <td><?php echo $login_username; ?></td>
                                                            <td> <?php echo $value['date']; ?></td>
                                                            <td> <?php echo $value['amount_received']; ?></td>
                                                           
                                                          
                                                           
                                                           
                                                        </tr>
                                                        <?php 
                                                    
                                                
                                                     }
                                                    ?>
                                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php } ?>
                <!--/ Recent Transactions -->
               
                <!--Recent Orders & Monthly Sales -->
                
                   
                <!--/Recent Orders & Monthly Sales -->

                <!-- Basic Horizontal Timeline -->
               
                <!--/ Basic Horizontal Timeline -->
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

   


    <!-- BEGIN: Vendor JS-->
    <!-- <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/vendors/js/vendors.min.js"></script> -->
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- <script src="app-assets/vendors/js/charts/chartist.min.js"></script>
    <script src="app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js"></script>
    <script src="app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="app-assets/vendors/js/charts/morris.min.js"></script> -->
    <!-- <script src="app-assets/vendors/js/timeline/horizontal-timeline.js"></script>
    <script src="app-assets/vendors/js/charts/chart.min.js"></script> -->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <!-- <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script> -->
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!--  -->
    
    <!-- <script src="app-assets/js/scripts/charts/chartjs/bar/column.js"></script> -->
    <!-- END: Page JS-->




    <!-- /********************************** -->
    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/chart.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    
    <script src="app-assets/js/scripts/charts/chartjs/bar/column.js"></script>
    <script src="app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    
    <!-- END: Page JS-->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart1);

      function drawChart1() {

        var data = google.visualization.arrayToDataTable([
          ['Property', 'Count'],
          ['Total Property',     <?php echo $total; ?>],
          ['Available Property',  <?php echo $ava; ?>],
          ['Booked Property',   <?php echo $booked; ?>],
         
        ]);

        var options = {
          title: 'Total Property Status',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    
</body>
<!-- END: Body-->

</php>