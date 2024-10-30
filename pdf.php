<?php 

$PAGE='transaction';

$transaction_id=$_GET['pname'];

//echo $project_name;
include 'include/function.php';
allpagecheck_session();
$obj = new Job;


/*$projectdetail = $obj->select_all_where('transaction','where transaction_id="'.$transaction_id.'"');
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
}

$fetchData=$obj->select_all_where('transaction_subject','where transaction_subject_id=1');
foreach($fetchData as $values){
    
     $transaction_type = $values['transaction_type'];
     $transaction_for = $values['transaction_for'];
     
}*/
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



$billing_date=date("d-m-Y"); 
//echo $billing_date;



require("fpdf/fpdf.php");
class PDF extends FPDF
{
	/* Page header */
	function Header()
{
    // Logo
    $this->Image('app-assets/images/logo/quizomania_logo.png',10,6,23);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Move to the right
    $this->Cell(143);
    // Title
    $this->Cell(30,5,'Quiz-O-Mania',0,1);
    // Move to the right
    $this->SetFont('Arial','',10);
    $this->Cell(117);
    $this->Cell(0,5,'(A Quizzing & Social Welfare Organization)',0,1);

    $this->Cell(123);
    $this->Cell(0,5,'Village + Post - Kolmijore  P.S - Daspur',0,1);

    $this->Cell(124);
    $this->Cell(0,5,'Dist - Paschim Medinipur West Bengal',0,1);

    $this->Cell(116);
    $this->Cell(0,5,'Contact No - 9046403489  PIN No - 721211',0,1);
    // Line break
    $this->Ln(10);
}
}

/* Instanciation of inherited class */
$pdf = new PDF('P','mm','A4');
$pdf->AliasNbPages();
//$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);

$pdf->Cell(71 ,10,'',0,0);
$pdf->Cell(59 ,5,'Money Receipt',0,0);
$pdf->Cell(59 ,10,'',0,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(24 ,5,'Full Name :',0,0);
$pdf->Cell(90 ,5,$transaction_name,0,0);
//$pdf->Cell(71 ,5,'Full Name :',0,0);
//$pdf->Cell(71 ,5,$transaction_name,0,0);

$pdf->SetFont('Arial','',10);
$pdf->Cell(20 ,5,'Receipt No :',0,0);
$pdf->Cell(0 ,5,$transaction_invoice_id,0,1);

$pdf->SetFont('Arial','',10);
$pdf->Cell(114,10,'',0,0);
$pdf->Cell(26 ,5,'Date of Recepit : ',0,0);
$pdf->Cell(0 ,5, $billing_date,0,1);

$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);

$pdf->Cell(0 ,5,'Quiz-O-Mania sincerely acknowledges your valuable contribution. Thank You!!!',0,1,'C');

//Table

$pdf->Cell(50 ,5,'',0,1);

$pdf->SetFont('Arial','B',9);
/*Heading Of the table*/
$pdf->Cell(26,6,'D.O.Donation',1,0,'C');
/*$pdf->Cell(30,6,'D.O.Receipt Gene.',1,0,'C');*/
$pdf->Cell(38 ,6,'Transaction Type',1,0,'C');
$pdf->Cell(60 ,6,'Transaction For',1,0,'C');
$pdf->Cell(29 ,6,'Donation Amount',1,0,'C');
$pdf->Cell(0 ,6,'Receipt No',1,1,'C');/*end of line*/
/*Heading Of the table end*/
$pdf->SetFont('Arial','',9);
    
		$pdf->Cell(26 ,6,$transaction_date,1,0,'C');
		/*$pdf->Cell(30 ,6,$billing_date,1,0,'C');*/
		$pdf->Cell(38 ,6,$transaction_type,1,0,'C');
		$pdf->Cell(60 ,6,$transaction_for,1,0,'C');
		$pdf->Cell(29 ,6,$transaction_amount,1,0,'C');
		$pdf->Cell(0 ,6,$transaction_invoice_id,1,1,'C');

		

$pdf->Ln(3);
$pdf->Cell(20 ,10,'',0,0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(35 ,6,'Transaction Details :',0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(0 ,6, $transaction_transactionid,0,1);

$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(25 ,5,'Payment Mode :',0,0);
$pdf->Cell(0 ,5, $transaction_pay_mode,0,1);

$pdf->Ln(3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(130 ,5,'All Donations are exempted U/S 80G of Income Tax',0,1);

$pdf->Ln(3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(130 ,5,'PAN : AAALK3212G . Registration no: S000417 of 2018-2019 , West Bengal Societies Registration Act of 1961',0,1);

$pdf->Ln(3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(130 ,5,'Note: Computer generated donation receipt, need no signature.',0,1);

$pdf->Ln(3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(130 ,5,'© Copyright 2021 - Quiz-O-Mania. All rights reserved.',0,0);

$pdf->Cell(0 ,5,'www.quizomania.in',0,1);


//$pdf->SetFont('','U');
//$link = $pdf->AddLink();
//$pdf->Write(5,'here',$link);

	


$file = $transaction_invoice_id.'.pdf';

$pdf->output($file,'D');


?>