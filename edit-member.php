<?php
$PAGE='members';
include 'include/function.php';
allpagecheck_session();
$obj = new Job;

$member_id=$_GET['uid'];

$member_view_id=$_GET['u_v_id'];
if($member_view_id>0){
    $member_id = $member_view_id;
}
//echo $branch_id;

$fetchData=$obj->select_all_where('member','where member_id  ="'.$member_id.'"');
foreach($fetchData as $values){
    $user_login_id = $values['user_login_id'];

    $member_id  = $values['member_id'];

    $member_name = $values['member_name'];
     $member_address = $values['member_address'];
     $member_email_id = $values['member_email_id'];
     $member_ph_no = $values['member_ph_no'];
     $member_designation=$values['member_designation'];
     $member_photo=$values['member_photo'];
     
    
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
            <h3 class="content-header-title">
            <?php
             if($member_view_id>0){

             ?>View 
             <?php
             } else {
              ?>
              Edit
              <?php } ?>
            User</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right">
                        <a href="members-list.php" class="btn btn-success mb-1" >View All Member</a>
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
                                       <form id="update_member_form" enctype="multipart/form-data">
                                            <div class="row justify-content-md-center">
                                                <div class="col-md-6">
                                                    <div class="form-body">

                                                   
                                                    
                                                        <div class="form-group">
                                                            <label for="eventInput1"> Name<span style="color:red; font-size:20px;">*</span></label>
                                                            <input type="text" id="eventInput1" class="form-control" placeholder="Enter name" name="update_member_name" value="<?= $member_name; ?>" <?php if($member_view_id>0){?> readonly<?php } ?> required>
                                                            <input type="hidden" name="member_id" value=<?= $member_id ; ?>>
                                                            <input type="hidden" name="user_login_id" value=<?= $user_login_id; ?>>
                                                        </div>
                                                      
                                                        <div class="form-group">
                                                        <label for="eventInput12">Address<span style="color:red; font-size:20px;">*</span></label>
                                                        <input type="text" id="eventInput12" class="form-control" placeholder="Enter Address" name="update_member_address" value="<?php echo $member_address; ?>" <?php if($member_view_id>0){?> readonly<?php } ?> required >
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="eventInput2"> Email ID</label>
                                                            <input type="email" id="eventInput2" class="form-control" placeholder="Enter Email Id" name="member_email" value="<?= $member_email_id; ?>" <?php if($member_view_id>0){?> readonly<?php } ?>>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventInput3">Phone No.<span style="color:red; font-size:20px;">*</span></label>
                                                            <input type="text" id="eventInput3" class="form-control" placeholder="Enter Phone Number" name="member_phone_number" value="<?= $member_ph_no; ?>" <?php if($member_view_id>0){?> readonly<?php } ?> pattern="[6789][0-9]{9}" required>
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="eventInput4">Designation</label>
                                                            <input type="text" id="eventInput4" class="form-control" placeholder="Enter Designation" name="member_designation" value="<?= $member_designation; ?>" <?php if($member_view_id>0){?> readonly<?php } ?>>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventInput5">Upload Photo<small>
                                                                (File type: .jpeg, .png, .jpg) Max Size: 1 MB
                                                            </small>
                                                            </label>
                                                            <input type="file" id="eventInput5" class="form-control" name="member_photo" value="<?= $member_photo; ?>" accept=".png,.jpg,.jpeg">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php if($member_view_id>0){?>
                                            
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