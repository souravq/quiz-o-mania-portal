<?php 

echo "hello";
?>
<?php
//session_start();
//include("include/config.php");

//use config\db\abybaby as config;  //use namespace from config file's class

//$obj_db = new config\DB;           //object create for db class
//$obj_api = new config\API;         //objecrt create for api class


// (A) CONNECT TO DATABASE
//'u435244696_quizomaniauser','xP8eZKsiG90&','u435244696_quizomania'
// ! CHANGE THESE SETTINGS TO YOUR OWN !
$dbhost = "localhost";
$dbname = "u435244696_quizomania";
$dbchar = "utf8";
$dbuser = "u435244696_quizomaniauser";
$dbpass = "xP8eZKsiG90";
$pdo = new PDO(
  "mysql:host=$dbhost;charset=$dbchar;dbname=$dbname",
  $dbuser, $dbpass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
  ]
);

// (B) LOAD PHPSPREADSHEET
require "vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



?>




<?php

// (C) CREATE A NEW SPREADSHEET + WORKSHEET
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle('Users');


// (D) FETCH USERS + WRITE TO SPREADSHEET
$stmt = $pdo->prepare("SELECT * FROM `quizomania_transaction`");
$stmt->execute();
$i = 2;
  $sheet->setCellValue('A1', 'transaction_id');
  $sheet->setCellValue('B1', 'user_login_id');
  $sheet->setCellValue('C1', 'transaction_invoice_id');
  $sheet->setCellValue('D1', 'transaction_name');
  $sheet->setCellValue('E1', 'transaction_email');
  $sheet->setCellValue('F1', 'transaction_ph_no');
  $sheet->setCellValue('G1', 'transaction_amount');
  $sheet->setCellValue('H1', 'transaction_pay_mode');
  $sheet->setCellValue('I1', 'transaction_transactionid');
  $sheet->setCellValue('J1', 'transaction_date');
  $sheet->setCellValue('K1', 'transaction_type');
  $sheet->setCellValue('L1', 'transaction_for');
  $sheet->setCellValue('M1', 'status');
  
while ($row = $stmt->fetch()) {
  $sheet->setCellValue('A'.$i, $row['transaction_id']);
  $sheet->setCellValue('B'.$i, $row['user_login_id']);
  $sheet->setCellValue('C'.$i, $row['transaction_invoice_id']);
  $sheet->setCellValue('D'.$i, $row['transaction_name']);
  $sheet->setCellValue('E'.$i, $row['transaction_email']);
  $sheet->setCellValue('F'.$i, $row['transaction_ph_no']);
  $sheet->setCellValue('G'.$i, $row['transaction_amount']);
  $sheet->setCellValue('H'.$i, $row['transaction_pay_mode']);
  $sheet->setCellValue('I'.$i, $row['transaction_transactionid']);
  $sheet->setCellValue('J'.$i, $row['transaction_date']);
  $sheet->setCellValue('K'.$i, $row['transaction_type']);
  $sheet->setCellValue('L'.$i, $row['transaction_for']);
  $sheet->setCellValue('M'.$i, $row['status']);
  
  $i++;
}
   

// (E) SAVE FILE
$writer = new Xlsx($spreadsheet);
$writer->save('transaction_list_excel.xlsx');
?>
<script>
    window.location.assign('http://portal.quizomania.in/transaction_list_excel.xlsx');
    setTimeout(function(){ 
    window.location.assign('http://portal.quizomania.in/transaction-list.php');
        
    }, 3000);
</script>
