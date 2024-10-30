<?php
$PAGE='transaction';
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
                <h3 class="content-header-title">View all Donation</h3>
            </div>
            <div class="content-header-right col-md-6 col-12">
                        
                        <div class="btn-group float-md-right">
                            
                            <a id="poexcel" class="btn btn-primary mb-1 mr-2" ><span style="color:white;">Export to Excel</span> </a>
                            
                            <a href="add-transaction.php" class="btn btn-info mb-1" >Add Donation </a>
                        </div>
            </div>
        </div>
        
        <div class="content-header row">
            <ul class="nav nav-tabs" id="myTab" style="margin-left:30px;" role="tablist">
                <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><h5>2021-22</h5></button>
              </li>
              <li class="nav-item" role="presentation">
            <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false"><h5>2022-23</h5></button>
              </li>
              <li class="nav-item" role="presentation">
            <button class="nav-link" id="home1-tab" data-bs-toggle="tab" data-bs-target="#home1" type="button" role="tab" aria-controls="home1" aria-selected="true"><h5>2023-24</h5></button>
              </li>
              <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home2-tab" data-bs-toggle="tab" data-bs-target="#home2" type="button" role="tab" aria-controls="home2" aria-selected="true"><h5>2024-25</h5></button>
              </li>
              
             
            </ul>
            <div class="tab-content" id="myTabContent">
                 <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                   <div class="content-body">
                    <!-- DOM - jQuery events table -->
                    <section id="dom">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">View All Donation</h4>
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
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone No</th>
                                                            <th>Amount</th>
                                                            <th>Pay Mode</th>
                                                            <th>Bill No</th>
                                                            <th>Transaction Id</th>
                                                            <th>Transaction Type</th>
                                                            <th>Transaction For</th>
                                                            <th>Date</th>
                                                           
                                                            <th>Approval</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 

                                                        $i=1;
                                                        if($_SESSION['role_value']==1){
                                                            $sql=$obj->select_all_where('transaction','where transaction_date<"2022-04-01"');
                                                           }else{ 
                                                               $sql=$obj->select_all_where('transaction','where user_login_id="'.$_SESSION['user_login_id'].'" AND transaction_date<"2022-04-01"');
                                                           }

                                                       // $sql=$obj->select_all('project');
                                                        foreach($sql as $value){
                                                                                                    
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i++; ?>.</td>
                                                            <td><?php echo $value['transaction_name']; ?></td>
                                                            <td> <?php echo $value['transaction_email']; ?></td>
                                                            <td> <?php echo $value['transaction_ph_no']; ?></td>
                                                            <td> <?php echo $value['transaction_amount']; ?></td>
                                                             <td> <?php 
                                                             if($value['transaction_to_whom']){
                                                                echo $value['transaction_pay_mode']."(".$value['transaction_to_whom'].")";

                                                             }else{
                                                                echo $value['transaction_pay_mode'];
                                                             }
                                                             
                                                              
                                                             ?></td>
                                                             <td> <?php echo $value['transaction_invoice_id']; ?></td>
                                                            <td> <?php echo $value['transaction_transactionid']; ?></td>
                                                            <td> <?php echo $value['transaction_type']; ?></td>
                                                            <td> <?php echo $value['transaction_for']; ?></td>
                                                          
                                                            <td> <?php 
                                                            $date_time1= $value['transaction_date'];
                                                            echo $new_date1 = date("d-m-Y",strtotime($date_time1)); 
                                                             ?></td>
                                                             <td>
                                                           <?php 
                                                                $status=$value['status'];
                                                                if($status==0){
                                                                   ?>
                                                                    <a class="badge badge-danger label-square" onclick="statuschangeall(<?= $value['transaction_id']; ?>,'transaction','1','transaction_id')"><span style="color:white;">Not Verified</span></a>
                                                                <?php }else if($status==1){
                                                                    ?>
                                                                    <a class="badge badge-success label-square" onclick="statuschangeall(<?= $value['transaction_id']; ?>,'transaction','0','transaction_id')"><span style="color:white;">Verified</span></a>
                                                              <?php
                                                                }
                                                                else{
                                                                    echo ' ';
                                                                }
                                                                ?>
                                                           </td>
                                                            
                                                          
                                                           
                                                            <td>
                                                            <?php
                                            if($_SESSION['role_value']==1 || $_SESSION['role_value']==2){
                                                ?>
                                                 <?php
                                            if($value['status']==0){
                                                ?>
                                                            <a href="edit-transaction.php?transactionid=<?= $value['transaction_id']; ?> +&project_v_id=0" class="btn btn-primary"><i class="la la-edit"></i></a>
                                                            <?php } ?>
                                                            <?php } ?>
                                                            <?php
                                            if($value['status']==1){
                                                ?>
                                                

                                                            <a href="pdf.php?pname=<?= $value['transaction_id']; ?>" class="btn btn-success"><i class="la la-eye"></i></a>
                                                <?php } ?>           
                                                            <?php
                                            if($_SESSION['role_value']==1){
                                                ?>
                                                             <a  class="btn btn-danger" onclick="deletetransaction(<?= $value['transaction_id']; ?>)"><i class="la la-close"></i></a>
                                                             <?php } ?>       
                                                            </td>
                                                            
                                                        </tr>
                                                        <?php } ?>

                                                        <?php 
                                                     if($_SESSION['role_value']==2){

                                                        $branchquery=$obj->select_all_where('users','where user_login_id="'.$_SESSION['user_login_id'].'"');
                                                        foreach($branchquery as $branchvalue){
                                                            $userid=$branchvalue['login_data_id'];
                                                        
                                                        //echo $branchname;
                                                        
                                                        $sqll=$obj->select_all_where('transaction','where user_login_id="'.$userid.'" AND transaction_date<"2022-04-01"');
                                                    
                                                     foreach($sqll as $valuee){

                                                    ?>
                                                     <tr>
                                                     <td><?php echo $i++; ?>.</td>
                                                            <td><?php echo $valuee['transaction_name']; ?></td>
                                                            <td> <?php echo $valuee['transaction_email']; ?></td>
                                                            <td> <?php echo $valuee['transaction_ph_no']; ?></td>
                                                            <td> <?php echo $valuee['transaction_amount']; ?></td>
                                                            <td> <?php echo $valuee['transaction_pay_mode']; ?></td>
                                                            <td> <?php echo $valuee['transaction_invoice_id']; ?></td>
                                                            <td> <?php echo $valuee['transaction_transactionid']; ?></td>
                                                            <td> <?php echo $valuee['transaction_type']; ?></td>
                                                            <td> <?php echo $valuee['transaction_for']; ?></td>
                                                            <td> <?php 
                                                            $date_time1= $valuee['transaction_date'];
                                                            echo $new_date1 = date("d-m-Y",strtotime($date_time1)); 
                                                             ?></td>
                                                              <td>
                                                            <?php
                                            if($_SESSION['role_value']==1 || $_SESSION['role_value']==2){
                                                ?>
                                                 <?php
                                            if($valuee['status']==0){
                                                ?>
                                                            <a href="edit-transaction.php?transactionid=<?= $valuee['transaction_id']; ?> +&project_v_id=0" class="btn btn-primary"><i class="la la-edit"></i></a>
                                                            <?php } ?>
                                                            <?php } ?>
                                                            <?php
                                            if($valuee['status']==1){
                                                ?>
                                                            <a href="pdf.php?pname=<?= $valuee['transaction_id']; ?>" class="btn btn-success"><i class="la la-eye"></i></a>
                                                            <?php } ?>
                                                            <?php
                                            if($_SESSION['role_value']==1){
                                                ?>
                                                             <a  class="btn btn-danger" onclick="deletetransaction(<?= $valuee['transaction_id']; ?>)"><i class="la la-close"></i></a>
                                                             <?php } ?>       
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
                                                            <th>Sr. No. </th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone No</th>
                                                            <th>Amount</th>
                                                            <th>Pay Mode</th>
                                                            <th>Bill No</th>
                                                            <th>Transaction Id</th>
                                                            <th>Transaction Type</th>
                                                            <th>Transaction For</th>
                                                            <th>Date</th>
                                                           
                                                            <th>Approval</th>
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
              <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="content-body">
                    <!-- DOM - jQuery events table -->
                    <section id="dom">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">View All Donation</h4>
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
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone No</th>
                                                            <th>Amount</th>
                                                            <th>Pay Mode</th>
                                                            <th>Bill No</th>
                                                            <th>Transaction Id</th>
                                                            <th>Transaction Type</th>
                                                            <th>Transaction For</th>
                                                            <th>Date</th>
                                                           
                                                            <th>Approval</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 

                                                        $i=1;
                                                        if($_SESSION['role_value']==1){
                                                            $sql=$obj->select_all_where('transaction','where transaction_date>="2022-04-01" AND transaction_date<"2023-04-01"');
                                                           }else{ 
                                                               $sql=$obj->select_all_where('transaction','where user_login_id="'.$_SESSION['user_login_id'].'" AND transaction_date>="2022-04-01" AND transaction_date<"2023-04-01"');
                                                           }

                                                       // $sql=$obj->select_all('project');
                                                        foreach($sql as $value){
                                                                                                    
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i++; ?>.</td>
                                                            <td><?php echo $value['transaction_name']; ?></td>
                                                            <td> <?php echo $value['transaction_email']; ?></td>
                                                            <td> <?php echo $value['transaction_ph_no']; ?></td>
                                                            <td> <?php echo $value['transaction_amount']; ?></td>
                                                             <td> <?php 
                                                             if($value['transaction_to_whom']){
                                                                echo $value['transaction_pay_mode']."(".$value['transaction_to_whom'].")";

                                                             }else{
                                                                echo $value['transaction_pay_mode'];
                                                             }
                                                             
                                                              
                                                             ?></td>
                                                             <td> <?php echo $value['transaction_invoice_id']; ?></td>
                                                            <td> <?php echo $value['transaction_transactionid']; ?></td>
                                                            <td> <?php echo $value['transaction_type']; ?></td>
                                                            <td> <?php echo $value['transaction_for']; ?></td>
                                                          
                                                            <td> <?php 
                                                            $date_time1= $value['transaction_date'];
                                                            echo $new_date1 = date("d-m-Y",strtotime($date_time1)); 
                                                             ?></td>
                                                             <td>
                                                           <?php 
                                                                $status=$value['status'];
                                                                if($status==0){
                                                                   ?>
                                                                    <a class="badge badge-danger label-square" onclick="statuschangeall(<?= $value['transaction_id']; ?>,'transaction','1','transaction_id')"><span style="color:white;">Not Verified</span></a>
                                                                <?php }else if($status==1){
                                                                    ?>
                                                                    <a class="badge badge-success label-square" onclick="statuschangeall(<?= $value['transaction_id']; ?>,'transaction','0','transaction_id')"><span style="color:white;">Verified</span></a>
                                                              <?php
                                                                }
                                                                else{
                                                                    echo ' ';
                                                                }
                                                                ?>
                                                           </td>
                                                            
                                                          
                                                           
                                                            <td>
                                                            <?php
                                            if($_SESSION['role_value']==1 || $_SESSION['role_value']==2){
                                                ?>
                                                 <?php
                                            if($value['status']==0){
                                                ?>
                                                            <a href="edit-transaction.php?transactionid=<?= $value['transaction_id']; ?> +&project_v_id=0" class="btn btn-primary"><i class="la la-edit"></i></a>
                                                             <?php } ?>
                                                            <?php } ?>
                                                            <?php
                                            if($value['status']==1){
                                                ?>

                                                            <a href="pdf.php?pname=<?= $value['transaction_id']; ?>" class="btn btn-success"><i class="la la-eye"></i></a>
                                                <?php } ?>           
                                                            <?php
                                            if($_SESSION['role_value']==1){
                                                ?>
                                                             <a  class="btn btn-danger" onclick="deletetransaction(<?= $value['transaction_id']; ?>)"><i class="la la-close"></i></a>
                                                             <?php } ?>       
                                                            </td>
                                                            
                                                        </tr>
                                                        <?php } ?>

                                                        <?php 
                                                     if($_SESSION['role_value']==2){

                                                        $branchquery=$obj->select_all_where('users','where user_login_id="'.$_SESSION['user_login_id'].'"');
                                                        foreach($branchquery as $branchvalue){
                                                            $userid=$branchvalue['login_data_id'];
                                                        
                                                        //echo $branchname;
                                                        
                                                        $sqll=$obj->select_all_where('transaction','where user_login_id="'.$userid.'" AND transaction_date>="2022-04-01" AND transaction_date<"2023-04-01"');
                                                    
                                                     foreach($sqll as $valuee){

                                                    ?>
                                                     <tr>
                                                     <td><?php echo $i++; ?>.</td>
                                                            <td><?php echo $valuee['transaction_name']; ?></td>
                                                            <td> <?php echo $valuee['transaction_email']; ?></td>
                                                            <td> <?php echo $valuee['transaction_ph_no']; ?></td>
                                                            <td> <?php echo $valuee['transaction_amount']; ?></td>
                                                            <td> <?php echo $valuee['transaction_pay_mode']; ?></td>
                                                            <td> <?php echo $valuee['transaction_invoice_id']; ?></td>
                                                            <td> <?php echo $valuee['transaction_transactionid']; ?></td>
                                                            <td> <?php echo $valuee['transaction_type']; ?></td>
                                                            <td> <?php echo $valuee['transaction_for']; ?></td>
                                                            <td> <?php 
                                                            $date_time1= $valuee['transaction_date'];
                                                            echo $new_date1 = date("d-m-Y",strtotime($date_time1)); 
                                                             ?></td>
                                                              <td>
                                                            <?php
                                            if($_SESSION['role_value']==1 || $_SESSION['role_value']==2){
                                                ?>
                                                <?php
                                            if($valuee['status']==0){
                                                ?>
                                                            <a href="edit-transaction.php?transactionid=<?= $valuee['transaction_id']; ?> +&project_v_id=0" class="btn btn-primary"><i class="la la-edit"></i></a>
                                                            <?php } ?>
                                                            <?php } ?>
                                                            <?php
                                            if($valuee['status']==1){
                                                ?>
                                                            <a href="pdf.php?pname=<?= $valuee['transaction_id']; ?>" class="btn btn-success"><i class="la la-eye"></i></a>
                                                            <?php } ?>
                                                            <?php
                                            if($_SESSION['role_value']==1 ){
                                                ?>
                                                             <a  class="btn btn-danger" onclick="deletetransaction(<?= $valuee['transaction_id']; ?>)"><i class="la la-close"></i></a>
                                                             <?php } ?>       
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
                                                            <th>Sr. No. </th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone No</th>
                                                            <th>Amount</th>
                                                            <th>Pay Mode</th>
                                                            <th>Bill No</th>
                                                            <th>Transaction Id</th>
                                                            <th>Transaction Type</th>
                                                            <th>Transaction For</th>
                                                            <th>Date</th>
                                                           
                                                            <th>Approval</th>
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
              <div class="tab-pane fade" id="home1" role="tabpanel" aria-labelledby="home1-tab">
                  <div class="content-body">
                    <!-- DOM - jQuery events table -->
                    <section id="dom">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">View All Donation</h4>
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
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone No</th>
                                                            <th>Amount</th>
                                                            <th>Pay Mode</th>
                                                            <th>Bill No</th>
                                                            <th>Transaction Id</th>
                                                            <th>Transaction Type</th>
                                                            <th>Transaction For</th>
                                                            <th>Date</th>
                                                           
                                                            <th>Approval</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 

                                                        $i=1;
                                                        if($_SESSION['role_value']==1){
                                                            $sql=$obj->select_all_where('transaction','where transaction_date>="2023-04-01" AND transaction_date<"2024-04-01"');
                                                           }else{ 
                                                               $sql=$obj->select_all_where('transaction','where user_login_id="'.$_SESSION['user_login_id'].'" AND transaction_date>="2023-04-01" AND transaction_date<"2024-04-01"');
                                                           }

                                                       // $sql=$obj->select_all('project');
                                                        foreach($sql as $value){
                                                                                                    
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i++; ?>.</td>
                                                            <td><?php echo $value['transaction_name']; ?></td>
                                                            <td> <?php echo $value['transaction_email']; ?></td>
                                                            <td> <?php echo $value['transaction_ph_no']; ?></td>
                                                            <td> <?php echo $value['transaction_amount']; ?></td>
                                                             <td> <?php 
                                                             if($value['transaction_to_whom']){
                                                                echo $value['transaction_pay_mode']."(".$value['transaction_to_whom'].")";

                                                             }else{
                                                                echo $value['transaction_pay_mode'];
                                                             }
                                                             
                                                              
                                                             ?></td>
                                                             <td> <?php echo $value['transaction_invoice_id']; ?></td>
                                                            <td> <?php echo $value['transaction_transactionid']; ?></td>
                                                            <td> <?php echo $value['transaction_type']; ?></td>
                                                            <td> <?php echo $value['transaction_for']; ?></td>
                                                          
                                                            <td> <?php 
                                                            $date_time1= $value['transaction_date'];
                                                            echo $new_date1 = date("d-m-Y",strtotime($date_time1)); 
                                                             ?></td>
                                                             <td>
                                                           <?php 
                                                                $status=$value['status'];
                                                                if($status==0){
                                                                   ?>
                                                                    <a class="badge badge-danger label-square" onclick="statuschangeall(<?= $value['transaction_id']; ?>,'transaction','1','transaction_id')"><span style="color:white;">Not Verified</span></a>
                                                                <?php }else if($status==1){
                                                                    ?>
                                                                    <a class="badge badge-success label-square" onclick="statuschangeall(<?= $value['transaction_id']; ?>,'transaction','0','transaction_id')"><span style="color:white;">Verified</span></a>
                                                              <?php
                                                                }
                                                                else{
                                                                    echo ' ';
                                                                }
                                                                ?>
                                                           </td>
                                                            
                                                          
                                                           
                                                            <td>
                                                            <?php
                                            if($_SESSION['role_value']==1 || $_SESSION['role_value']==2){
                                                ?>
                                                 <?php
                                            if($value['status']==0){
                                                ?>
                                                            <a href="edit-transaction.php?transactionid=<?= $value['transaction_id']; ?> +&project_v_id=0" class="btn btn-primary"><i class="la la-edit"></i></a>
                                                             <?php } ?>
                                                            <?php } ?>
                                                            <?php
                                            if($value['status']==1){
                                                ?>

                                                            <a href="pdf.php?pname=<?= $value['transaction_id']; ?>" class="btn btn-success"><i class="la la-eye"></i></a>
                                                <?php } ?>           
                                                            <?php
                                            if($_SESSION['role_value']==1){
                                                ?>
                                                             <a  class="btn btn-danger" onclick="deletetransaction(<?= $value['transaction_id']; ?>)"><i class="la la-close"></i></a>
                                                             <?php } ?>       
                                                            </td>
                                                            
                                                        </tr>
                                                        <?php } ?>

                                                        <?php 
                                                     if($_SESSION['role_value']==2){

                                                        $branchquery=$obj->select_all_where('users','where user_login_id="'.$_SESSION['user_login_id'].'"');
                                                        foreach($branchquery as $branchvalue){
                                                            $userid=$branchvalue['login_data_id'];
                                                        
                                                        //echo $branchname;
                                                        
                                                        $sqll=$obj->select_all_where('transaction','where user_login_id="'.$userid.'" AND transaction_date>="2023-04-01" AND transaction_date<"2024-04-01"');
                                                    
                                                     foreach($sqll as $valuee){

                                                    ?>
                                                     <tr>
                                                     <td><?php echo $i++; ?>.</td>
                                                            <td><?php echo $valuee['transaction_name']; ?></td>
                                                            <td> <?php echo $valuee['transaction_email']; ?></td>
                                                            <td> <?php echo $valuee['transaction_ph_no']; ?></td>
                                                            <td> <?php echo $valuee['transaction_amount']; ?></td>
                                                            <td> <?php echo $valuee['transaction_pay_mode']; ?></td>
                                                            <td> <?php echo $valuee['transaction_invoice_id']; ?></td>
                                                            <td> <?php echo $valuee['transaction_transactionid']; ?></td>
                                                            <td> <?php echo $valuee['transaction_type']; ?></td>
                                                            <td> <?php echo $valuee['transaction_for']; ?></td>
                                                            <td> <?php 
                                                            $date_time1= $valuee['transaction_date'];
                                                            echo $new_date1 = date("d-m-Y",strtotime($date_time1)); 
                                                             ?></td>
                                                              <td>
                                                            <?php
                                            if($_SESSION['role_value']==1 || $_SESSION['role_value']==2){
                                                ?>
                                                <?php
                                            if($valuee['status']==0){
                                                ?>
                                                            <a href="edit-transaction.php?transactionid=<?= $valuee['transaction_id']; ?> +&project_v_id=0" class="btn btn-primary"><i class="la la-edit"></i></a>
                                                            <?php } ?>
                                                            <?php } ?>
                                                            <?php
                                            if($valuee['status']==1){
                                                ?>
                                                            <a href="pdf.php?pname=<?= $valuee['transaction_id']; ?>" class="btn btn-success"><i class="la la-eye"></i></a>
                                                            <?php } ?>
                                                            <?php
                                            if($_SESSION['role_value']==1 ){
                                                ?>
                                                             <a  class="btn btn-danger" onclick="deletetransaction(<?= $valuee['transaction_id']; ?>)"><i class="la la-close"></i></a>
                                                             <?php } ?>       
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
                                                            <th>Sr. No. </th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone No</th>
                                                            <th>Amount</th>
                                                            <th>Pay Mode</th>
                                                            <th>Bill No</th>
                                                            <th>Transaction Id</th>
                                                            <th>Transaction Type</th>
                                                            <th>Transaction For</th>
                                                            <th>Date</th>
                                                           
                                                            <th>Approval</th>
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
              <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                  <div class="content-body">
                    <!-- DOM - jQuery events table -->
                    <section id="dom">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">View All Donation</h4>
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
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone No</th>
                                                            <th>Amount</th>
                                                            <th>Pay Mode</th>
                                                            <th>Bill No</th>
                                                            <th>Transaction Id</th>
                                                            <th>Transaction Type</th>
                                                            <th>Transaction For</th>
                                                            <th>Date</th>
                                                           
                                                            <th>Approval</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 

                                                        $i=1;
                                                        if($_SESSION['role_value']==1){
                                                            $sql=$obj->select_all_where('transaction','where transaction_date>="2024-04-01"');
                                                           }else{ 
                                                               $sql=$obj->select_all_where('transaction','where user_login_id="'.$_SESSION['user_login_id'].'" AND transaction_date>="2024-04-01"');
                                                           }

                                                       // $sql=$obj->select_all('project');
                                                        foreach($sql as $value){
                                                                                                    
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i++; ?>.</td>
                                                            <td><?php echo $value['transaction_name']; ?></td>
                                                            <td> <?php echo $value['transaction_email']; ?></td>
                                                            <td> <?php echo $value['transaction_ph_no']; ?></td>
                                                            <td> <?php echo $value['transaction_amount']; ?></td>
                                                             <td> <?php 
                                                             if($value['transaction_to_whom']){
                                                                echo $value['transaction_pay_mode']."(".$value['transaction_to_whom'].")";

                                                             }else{
                                                                echo $value['transaction_pay_mode'];
                                                             }
                                                             
                                                              
                                                             ?></td>
                                                             <td> <?php echo $value['transaction_invoice_id']; ?></td>
                                                            <td> <?php echo $value['transaction_transactionid']; ?></td>
                                                            <td> <?php echo $value['transaction_type']; ?></td>
                                                            <td> <?php echo $value['transaction_for']; ?></td>
                                                          
                                                            <td> <?php 
                                                            $date_time1= $value['transaction_date'];
                                                            echo $new_date1 = date("d-m-Y",strtotime($date_time1)); 
                                                             ?></td>
                                                             <td>
                                                           <?php 
                                                                $status=$value['status'];
                                                                if($status==0){
                                                                   ?>
                                                                    <a class="badge badge-danger label-square" onclick="statuschangeall(<?= $value['transaction_id']; ?>,'transaction','1','transaction_id')"><span style="color:white;">Not Verified</span></a>
                                                                <?php }else if($status==1){
                                                                    ?>
                                                                    <a class="badge badge-success label-square" onclick="statuschangeall(<?= $value['transaction_id']; ?>,'transaction','0','transaction_id')"><span style="color:white;">Verified</span></a>
                                                              <?php
                                                                }
                                                                else{
                                                                    echo ' ';
                                                                }
                                                                ?>
                                                           </td>
                                                            
                                                          
                                                           
                                                            <td>
                                                            <?php
                                            if($_SESSION['role_value']==1 || $_SESSION['role_value']==2){
                                                ?>
                                                 <?php
                                            if($value['status']==0){
                                                ?>
                                                            <a href="edit-transaction.php?transactionid=<?= $value['transaction_id']; ?> +&project_v_id=0" class="btn btn-primary"><i class="la la-edit"></i></a>
                                                             <?php } ?>
                                                            <?php } ?>
                                                            <?php
                                            if($value['status']==1){
                                                ?>

                                                            <a href="pdf.php?pname=<?= $value['transaction_id']; ?>" class="btn btn-success"><i class="la la-eye"></i></a>
                                                <?php } ?>           
                                                            <?php
                                            if($_SESSION['role_value']==1){
                                                ?>
                                                             <a  class="btn btn-danger" onclick="deletetransaction(<?= $value['transaction_id']; ?>)"><i class="la la-close"></i></a>
                                                             <?php } ?>       
                                                            </td>
                                                            
                                                        </tr>
                                                        <?php } ?>

                                                        <?php 
                                                     if($_SESSION['role_value']==2){

                                                        $branchquery=$obj->select_all_where('users','where user_login_id="'.$_SESSION['user_login_id'].'"');
                                                        foreach($branchquery as $branchvalue){
                                                            $userid=$branchvalue['login_data_id'];
                                                        
                                                        //echo $branchname;
                                                        
                                                        $sqll=$obj->select_all_where('transaction','where user_login_id="'.$userid.'" AND transaction_date>="2024-04-01"');
                                                    
                                                     foreach($sqll as $valuee){

                                                    ?>
                                                     <tr>
                                                     <td><?php echo $i++; ?>.</td>
                                                            <td><?php echo $valuee['transaction_name']; ?></td>
                                                            <td> <?php echo $valuee['transaction_email']; ?></td>
                                                            <td> <?php echo $valuee['transaction_ph_no']; ?></td>
                                                            <td> <?php echo $valuee['transaction_amount']; ?></td>
                                                            <td> <?php echo $valuee['transaction_pay_mode']; ?></td>
                                                            <td> <?php echo $valuee['transaction_invoice_id']; ?></td>
                                                            <td> <?php echo $valuee['transaction_transactionid']; ?></td>
                                                            <td> <?php echo $valuee['transaction_type']; ?></td>
                                                            <td> <?php echo $valuee['transaction_for']; ?></td>
                                                            <td> <?php 
                                                            $date_time1= $valuee['transaction_date'];
                                                            echo $new_date1 = date("d-m-Y",strtotime($date_time1)); 
                                                             ?></td>
                                                              <td>
                                                            <?php
                                            if($_SESSION['role_value']==1 || $_SESSION['role_value']==2){
                                                ?>
                                                <?php
                                            if($valuee['status']==0){
                                                ?>
                                                            <a href="edit-transaction.php?transactionid=<?= $valuee['transaction_id']; ?> +&project_v_id=0" class="btn btn-primary"><i class="la la-edit"></i></a>
                                                            <?php } ?>
                                                            <?php } ?>
                                                            <?php
                                            if($valuee['status']==1){
                                                ?>
                                                            <a href="pdf.php?pname=<?= $valuee['transaction_id']; ?>" class="btn btn-success"><i class="la la-eye"></i></a>
                                                            <?php } ?>
                                                            <?php
                                            if($_SESSION['role_value']==1 ){
                                                ?>
                                                             <a  class="btn btn-danger" onclick="deletetransaction(<?= $valuee['transaction_id']; ?>)"><i class="la la-close"></i></a>
                                                             <?php } ?>       
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
                                                            <th>Sr. No. </th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone No</th>
                                                            <th>Amount</th>
                                                            <th>Pay Mode</th>
                                                            <th>Bill No</th>
                                                            <th>Transaction Id</th>
                                                            <th>Transaction Type</th>
                                                            <th>Transaction For</th>
                                                            <th>Date</th>
                                                           
                                                            <th>Approval</th>
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