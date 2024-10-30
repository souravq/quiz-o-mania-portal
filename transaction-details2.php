<?php
$PAGE='transaction';

$transaction_id=$_GET['pname'];

//echo $project_name;
include 'include/function.php';
allpagecheck_session();
$obj = new Job;


$projectdetail = $obj->select_all_where('transaction','where transaction_id="'.$transaction_id.'"');
foreach($projectdetail as $projectvalue){
    $transaction_invoice_id=$projectvalue['transaction_invoice_id'];
    $transaction_name=$projectvalue['transaction_name'];
    $transaction_email=$projectvalue['transaction_email'];
    $transaction_ph_no=$projectvalue['transaction_ph_no'];
    $transaction_amount=$projectvalue['transaction_amount'];
    $transaction_pay_mode=$projectvalue['transaction_pay_mode'];
    $transaction_transactionid=$projectvalue['transaction_transactionid'];
    $transaction_membership=$projectvalue['transaction_membership'];
    $transaction_date1=$projectvalue['transaction_date'];

    $transaction_date = date('d-m-Y', strtotime($transaction_date1));
    
     $transaction_type = $projectvalue['transaction_type'];
     $transaction_for = $projectvalue['transaction_for'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz-O-Mania</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
          
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
           
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid gray;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
        @media print {
  #printPageButton {
    display: none;
  }
}

    </style>
</head>
<body>


    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <img src="app-assets/images/logo/quizomania_logo.png" alt="branding logo " style="width: 20%">
                </div>
                <div class="col-6">
                    <div class="company-details" style="padding-top: 5px;padding-bottom: 5px;">
                        <h1 class="text-white">Quiz-O-Mania</h1>
                        <p class="text-white">( Reg No. S000417 of 2018-2019)</p>
                        <p class="text-white">Village + Post - Kolmijore  P.S - Daspur</p>
                        <p class="text-white">Dist - Paschim Medinipur West Bengal</p>
                        <p class="text-white">Contact No - 9046403489  PIN No - 721211</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-12">
                    <h1 class="heading" style="text-align: center; padding-left: 320px; font-size: 25px;">Money Receipt</h1>
                </div>
               
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h3 class="heading">Full Name :  <?= $transaction_name; ?></h3>
                    <p class="sub-heading">Donation Date : <?= $transaction_date; ?> </p>
                    
                    
                </div>
                <div class="col-6">
                    <p class="sub-heading">Receipt No : <?= $transaction_invoice_id; ?></p>
                    

                    
                </div>
                
            </div>
        </div>

        <div class="body-section">
            <h4 class="" style="text-align: center;">Quiz-O-Mania sincerely acknowledges your valuable contribution. Thank You!!!</h4>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Date of Transaction</th>
                        <th>Date of Receipt Generation</th>
                        <th>Transaction Type</th>
                        <th>Transaction For</th>
                        <th>Donation Amount</th>
                        <th>Receipt No</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $transaction_date; ?></td>
                        <td><?php
                         $billing_date=date("d-m-Y"); 
                         echo $billing_date;
                         ?></td>
                        <td><?= $transaction_type; ?></td>
                        <td><?= $transaction_for; ?></td>
                        <td>&#x20b9; <?= $transaction_amount; ?></td>
                        <td><?= $transaction_invoice_id; ?></td>
                    </tr>
                    <tr>
                        <?php if($transaction_transactionid){ ?>
                        <td colspan="6">Transaction Details : <?= $transaction_transactionid; ?></td>
                        <?php }else{ ?>
                        <td colspan="6">Transaction Details : Null </td>
                        <?php } ?>
                    </tr>
                    
                </tbody>
            </table>
            <br>
            
            <h5>Payment Mode: <?= $transaction_pay_mode; ?></h5>
            <br>
            <p>Note: Computer generated donation receipt, need no signature.</p>
        </div>
        <button type="button" id="printPageButton" class="btn btn-primary btn-lg btn-block" onclick="window.print()">Download the Receipt</button>

        <div class="body-section">
            <p>&copy; Copyright 2021 - Quiz-O-Mania. All rights reserved. 
                <a href="https://www.quizomania.in" class="float-right">www.quizomania.in</a>
            </p>
        </div>      
    </div>      

</body>
</html>