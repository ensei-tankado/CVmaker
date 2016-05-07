<?php
if(!empty($_POST['cv']))
{
  $name = $_POST['firstname'] . ' ' . $_POST['lastname'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $exp = $_POST['exp'];
  $dob = $_POST['dob'];
  $number = $_POST['number'];
require("fpdf/fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"RESUME",0,1,"C");
$pdf->Cell(0,10,"",0,1);
$pdf->Cell(40,10,"Name",0,0);
$pdf->Cell(5,10,":",0,0);
$pdf->Cell(50,10,"{$name}",0,1);

$pdf->Cell(0,10,"",0,1);
$pdf->Cell(40,10,"Date of Birth",0,0);
$pdf->Cell(5,10,":",0,0);
$pdf->Cell(50,10,"{$dob}",0,1);

$pdf->Cell(0,10,"",0,1);
$pdf->Cell(40,10,"Gender",0,0);
$pdf->Cell(5,10,":",0,0);
$pdf->Cell(50,10,"{$gender}",0,1);

$pdf->Cell(0,10,"",0,1);
$pdf->Cell(40,10,"Ph no",0,0);
$pdf->Cell(5,10,":",0,0);
$pdf->Cell(50,10,"{$number}",0,1);

$pdf->Cell(0,10,"",0,1);
$pdf->Cell(40,10,"Email",0,0);
$pdf->Cell(5,10,":",0,0);
$pdf->Cell(50,10,"{$email}",0,1);

$pdf->Cell(0,10,"",0,1);
$pdf->Cell(40,10,"Experience",0,0);
$pdf->Cell(5,10,":",0,0);
$pdf->Cell(50,10,"{$exp}",0,1);

$pdf->SetFont("Arial","I",16);

$pdf->Cell(0,10,"",0,1);
$pdf->Cell(0,10,"",0,1);
$pdf->Cell(0,10,"Signature",0,0,"R");
$pdf->output();
}
?>