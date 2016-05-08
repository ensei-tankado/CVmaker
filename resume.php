<?php
     if(!empty($_POST['cv']))
          {
          $name = $_POST['firstname'] . ' ' . $_POST['lastname'];
          $gender = $_POST['gender'];
          $email = $_POST['email'];
          $exp = $_POST['exp'];
          $dob = $_POST['dob'];
          $number = $_POST['number'];
          $array=array($name,$dob,$gender,$number,$email,$exp);
          $titles=array("Name","Date of Birth","Gender","Ph no","Email","Experience");

          require("fpdf/fpdf.php");

          $pdf = new FPDF();
          $pdf->AddPage();
          $pdf->SetFont("Arial","B",16);

          $pdf->Cell(0,10,"RESUME",0,1,"C");

          for($i=0;$i<6;$i++)
                   {
                       $pdf->Cell(0,10,"",0,1);
                       $pdf->Cell(40,10,"{$titles[$i]}",0,0);
                       $pdf->Cell(5,10,":",0,0);
                       $pdf->Cell(50,10,"{$array[$i]}",0,1);
                   }

          $pdf->SetFont("Arial","I",16);

          $pdf->Cell(0,10,"",0,1);
          $pdf->Cell(0,10,"",0,1);
          $pdf->Cell(0,10,"Signature",0,0,"R");
          $pdf->output();
          }
?>
