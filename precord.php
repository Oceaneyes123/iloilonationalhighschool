<?php
require 'sel.php';

$a = $_GET['id'];

$sql = "SELECT * FROM inqtb WHERE lrn = '$a' OR last_name = '$a' OR first_name = '$a' OR school_year='$a' OR sex='$a' OR track='$a' OR strand='$a' OR track1='$a' OR strand1='$a'";
$result = mysqli_query($db, $sql);


require "fpdf.php";




class myPDF extends FPDF{
	function header(){
		$this->SetFont('Arial','B',20);
		$this->Cell(350,10,'Iloilo National High School',0,1,'C');
		
$this->SetFont('Arial','B',5);
$this->Cell(25,10,'LRN',1,0,'C');
$this->Cell(25,10,'Name',1,0,'C');
$this->Cell(7,10,'Sex',1,0,'C');
$this->Cell(15,10,'Birth Date',1,0,'C');
$this->Cell(7,10,'Age',1,0,'C');
$this->Cell(15,10,'Religion',1,0,'C');
$this->Cell(60,10,'Complete Address',1,0,'C');
$this->Cell(60,5,'Parents',1,0,'C');
$this->Cell(30,10,"Guardian's Name",1,0,'C');
$this->Cell(25,10,'Contact Number',1,0,'C');
$this->Cell(76,5,'Track and Strands',1,0,'C');
$this->Cell(1,5,'',0,1);
$this->Cell(154,5,'',0,0);
$this->Cell(30,5,"Father's Name",1,0,'C');
$this->Cell(30,5,"Mother's Name",1,0,'C');
$this->Cell(55,5,'',0,0,'C');
$this->Cell(19,5,'Track 1',1,0,'C');
$this->Cell(19,5,'Strand 1',1,0,'C');
$this->Cell(19,5,'Track 2',1,0,'C');
$this->Cell(19,5,'Strand 2',1,1,'C');
	}
	function footer(){

	}
}


$pdf=new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','Legal',0,'L');


while($row= $result -> fetch_assoc()){
$pdf->Cell(25,5,$row['lrn'],1,0,'C');
$pdf->Cell(25,5,$row['last_name'],1,0,'C');
$pdf->Cell(7,5,$row['sex'],1,0,'C');
$pdf->Cell(15,5,$row['birthdate'],1,0,'C');
$pdf->Cell(7,5,$row['age'],1,0,'C');
$pdf->Cell(15,5,$row['religion'],1,0,'C');
$pdf->Cell(60,5,$row['address'],1,0,'C');
$pdf->Cell(30,5,$row['father_name'],1,0,'C');
$pdf->Cell(30,5,$row['mother_maidenname'],1,0,'C');
$pdf->Cell(30,5,$row['guardian_name'],1,0,'C');
$pdf->Cell(25,5,$row['contact'],1,0,'C');
$pdf->Cell(19,5,$row['track'],1,0,'C');
$pdf->Cell(19,5,$row['strand'],1,0,'C');
$pdf->Cell(19,5,$row['track1'],1,0,'C');
$pdf->Cell(19,5,$row['strand1'],1,1,'C');


}
// $pdf->Cell();
// $pdf->Cell();
// $pdf->Cell();
// $pdf->Cell();
// $pdf->Cell();
// $pdf->Cell();
$pdf->output();

?>