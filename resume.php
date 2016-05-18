<?php
     if(!empty($_POST['cv']))
        {
        $name = $_POST['firstname'] . ' ' . $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
	$education = $_POST['education'];
        $exp = $_POST['exp'];
        $dob = $_POST['dob'];
        $number = $_POST['number'];
        $arr=array('Name'=>$name,'Date of Birth'=>$dob,'Gender'=>$gender,'Ph no'=>$number,'Email'=>$email,'Education'=>$education,'Experience'=>$exp);

   	require("fpdf/fpdf.php");

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont("Arial","B",16);

        $pdf->Cell(0,10,"RESUME",0,1,"C");

        foreach ($arr as $key => $value)
                {
                	$pdf->Cell(0,10,"",0,1);
                        $pdf->Cell(40,10,"{$key}",0,0);
                        $pdf->Cell(5,10,":",0,0);
                        $pdf->Cell(50,10,"{$value}",0,1);
                }

        $pdf->SetFont("Arial","I",16);

        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(0,10,"Signature",0,0,"R");
        $pdf->output();
        }
?>
