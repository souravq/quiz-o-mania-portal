<?php 
//define('PAGE', 'dashboard');
$PAGE='transaction';
include 'include/function.php';
allpagecheck_session();
$obj = new Job;




$transactionid=$_GET['transactionid'];


$fetchData=$obj->select_all_where('transaction','where transaction_id  ="'.$transactionid.'"');
foreach($fetchData as $values){
    
    $transaction_name = $values['transaction_name'];
     $transaction_email = $values['transaction_email'];
     $transaction_ph_no = $values['transaction_ph_no'];
     $transaction_address = $values['transaction_address'];
     $transaction_amount = $values['transaction_amount'];
     $transaction_pay_mode=$values['transaction_pay_mode'];
     //$transaction_to_whom = $values['transaction_to_whom'];
     $transaction_transactionid=$values['transaction_transactionid'];
     //$transaction_membership=$values['transaction_membership'];
     $transaction_date=$values['transaction_date'];
     
     $transaction_type = $values['transaction_type'];
     $transaction_for = $values['transaction_for'];
    
}
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
            <h3 class="content-header-title">Edit Transaction</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right">
                        <a href="transaction-list.php" class="btn btn-success mb-1" >View All Transaction</a>
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
                                        <form id="update_new_transaction_form">
                                            <div class="row justify-content-md-center">
                                                <div class="col-md-6">
                                                    <div class="form-body">

                                                  

                                                        <div class="form-group">
                                                        
                                                            <label for="eventInput6">Person Name<span style="color:red; font-size:20px;">*</span></label>
                                                            <input type="text" id="eventInput6" class="form-control" name="update_person_name" placeholder="Enter Person Name" value="<?php echo $transaction_name; ?>" required>
                                                            <input type="hidden" name="transactionid" value=<?= $transactionid; ?>>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput7">Person Email</label>
                                                            <input type="email" id="eventInput7" class="form-control" name="update_person_email" placeholder="Enter Person Email" value="<?php echo $transaction_email; ?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventInput2">Phone No<span style="color:red; font-size:20px;">*</span></label>
                                                            <input type="text" id="eventInput2" class="form-control" placeholder="Enter Phone No" name="person_phno" value="<?php echo $transaction_ph_no; ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput16">Person Address</label>
                                                            <input type="text" id="eventInput16" class="form-control" placeholder="Enter Person Address" name="person_address" value="<?php echo $transaction_address; ?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventInput3">Amount<span style="color:red; font-size:20px;">*</span></label>
                                                            <input type="text" id="eventInput3" class="form-control" placeholder="Enter Amount" name="person_amount" value="<?php echo $transaction_amount; ?>" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventInput4">Transaction Id</label>
                                                            <input type="text" id="eventInput4" class="form-control" placeholder="Enter Transaction ID" name="transaction_id" value="<?php echo $transaction_transactionid; ?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventInput9">Transaction Date<span style="color:red; font-size:20px;">*</span> </label>
                                                            <input type="date" id="eventInput9" class="form-control" name="transaction_date" placeholder="Enter date" value="<?php echo $transaction_date; ?>"  required>
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="eventInput12">Payment Mode</label><br><br>
                                                            <fieldset>
                                                                <input type="radio" name="transaction_payment_type" id="input-radio-1" value="Cash" <?php if($transaction_pay_mode=='Cash')  {echo 'checked';} ?>>
                                                                <label for="input-radio-1">Cash</label>
                                                            </fieldset>
                                                               

                                                            <fieldset>
                                                                <input type="radio" name="transaction_payment_type" id="input-radio-2" value="Cheque" <?php if($transaction_pay_mode=='Cheque')  {echo 'checked';} ?>>
                                                                <label for="input-radio-2">Cheque</label>
                                                            </fieldset>
                                                            <fieldset>
                                                                <input type="radio" name="transaction_payment_type" id="input-radio-3" value="Bank Transfer" <?php if($transaction_pay_mode=='Bank Transfer')  {echo 'checked';} ?>>
                                                                <label for="input-radio-3">Bank Transfer</label>
                                                            </fieldset>
                                                            
                                                           
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label  for="transaction_type">Transaction Type</label>
                                                            <div >
                                                                <select id="transaction_type" name="transaction_type" class="form-control" >
                                                                    <option value="none" selected="" disabled="">Select Transaction type</option>
                                                                    <option value="Donation" <?php if($transaction_type=="Donation")  {echo 'selected';} ?>>Donation</option>
                                                                    <option value="Remuneration" <?php if($transaction_type=="Remuneration")  {echo 'selected';} ?>>Remuneration</option>
                                                                    <option value="Subscription" <?php if($transaction_type=="Subscription")  {echo 'selected';} ?>>Subscription</option>
                                                                    <option value="Sponsorship" <?php if($transaction_type=="Sponsorship")  {echo 'selected';} ?>>Sponsorship</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--<div class="form-group">-->
                                                        <!--    <label  for="transaction_for">Transaction For Title</label>-->
                                                        <!--    <div >-->
                                                        <!--        <select id="transaction_for" name="transaction_for" class="form-control" >-->
                                                        <!--            <option value="none" selected="" disabled="">Select Transaction For Title</option>-->
                                                        <!--            <option value="Donation" <?php if($transaction_type=="Donation")  {echo 'selected';} ?>>Donation</option>-->
                                                        <!--            <option value="Remuneration" <?php if($transaction_type=="Remuneration")  {echo 'selected';} ?>>Remuneration</option>-->
                                                        <!--            <option value="Subscription" <?php if($transaction_type=="Subscription")  {echo 'selected';} ?>>Subscription</option>-->
                                                        <!--            <option value="Sponsorship" <?php if($transaction_type=="Sponsorship")  {echo 'selected';} ?>>Sponsorship</option>-->
                                                                    
                                                        <!--        </select>-->
                                                        <!--    </div>-->
                                                        <!--</div>-->
                                                        <div class="form-group">
                                                            <label for="transaction_for">Transaction For</label>
                                                            <div >
                                                                <select id="transaction_for" name="transaction_for" class="form-control" >
                                                                    <option value="none" selected="" disabled="">Select Transaction For</option>
                                                                    <option value="<?= $transaction_for; ?>" selected><?= $transaction_for; ?></option>
                                                        <?php 
                                                        
                                                        $titlequery=$obj->select_all('transaction_for_title where transaction_for_title_status=1');
                                                        
                                                        foreach($titlequery as $titlevalue){
                                                                 $transaction_for_tile=$titlevalue['transaction_for_title_title'];
                                                                 
                                                                ?>
                                                                
                                                                    <option value="<?php echo $transaction_for_tile ?>" <?php if($transaction_for==$transaction_for_tile)  {echo 'selected';} ?>><?php echo $transaction_for_tile ?></option>
                                                                    
                                                                
                                                            <?php
                                                            }
                                                            
                                                        ?>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <!--<div class="form-group">-->
                                                        <!--    <label for="eventInput6">Transaction For</label>-->
                                                        <!--    <input type="text" id="eventInput6" class="form-control" name="transaction_for" value="<?= $transaction_for; ?>">-->
                                                        <!--</div>-->

                                                       
                                  
                                                
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions text-center">
                                                <button type="reset" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> Update
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
             $("#to_whom").val("");

         });
         $("#input-radio-3").on("click",function(){
             console.log("Hello3");
             const range=document.getElementById('range');
             range.style.display = "none";
             $("#to_whom").val("");

         });
         $("#input-radio-4").on("click",function(){
             console.log("Hello4");
             const range=document.getElementById('range');
             range.style.display = "none";
             $("#to_whom").val("");

         });
         $("#input-radio-5").on("click",function(){
             console.log("Hello5");
             const range=document.getElementById('range');
             range.style.display = "none";
             $("#to_whom").val("");

         });

         //}else{

         //}
        
        });

    </script>

</body>
<!-- END: Body-->

</html>