
<?php


include 'sel.php';

if(isset($_GET['id'])){

	$sql = "SELECT * FROM inqtb WHERE lrn=".$_GET['id'];
	$result = mysqli_query($db, $sql);
	$row = mysqli_fetch_array($result);
	$pic = $row['pic'];
}


?>



<?php

require "fpdf.php";
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'inqdb');

class myPDF extends FPDF{
	 var $B=0;
    var $I=0;
    var $U=0;
    var $HREF='';
    var $ALIGN='';

    function WriteHTML($html)
    {
        //HTML parser
        $html=str_replace("\n",' ',$html);
        $a=preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
        foreach($a as $i=>$e)
        {
            if($i%2==0)
            {
                //Text
                if($this->HREF)
                    $this->PutLink($this->HREF,$e);
                elseif($this->ALIGN=='center')
                    $this->Cell(0,5,$e,0,1,'C');
                else
                    $this->Write(5,$e);
            }
            else
            {
                //Tag
                if($e[0]=='/')
                    $this->CloseTag(strtoupper(substr($e,1)));
                else
                {
                    //Extract properties
                    $a2=explode(' ',$e);
                    $tag=strtoupper(array_shift($a2));
                    $prop=array();
                    foreach($a2 as $v)
                    {
                        if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                            $prop[strtoupper($a3[1])]=$a3[2];
                    }
                    $this->OpenTag($tag,$prop);
                }
            }
        }
    }

    function OpenTag($tag,$prop)
    {
        //Opening tag
        if($tag=='B' || $tag=='I' || $tag=='U')
            $this->SetStyle($tag,true);
        if($tag=='A')
            $this->HREF=$prop['HREF'];
        if($tag=='BR')
            $this->Ln(5);
        if($tag=='P')
            $this->ALIGN=$prop['ALIGN'];
        if($tag=='HR')
        {
            if( !empty($prop['WIDTH']) )
                $Width = $prop['WIDTH'];
            else
                $Width = $this->w - $this->lMargin-$this->rMargin;
            $this->Ln(2);
            $x = $this->GetX();
            $y = $this->GetY();
            $this->SetLineWidth(0.4);
            $this->Line($x,$y,$x+$Width,$y);
            $this->SetLineWidth(0.2);
            $this->Ln(2);
        }
    }

    function CloseTag($tag)
    {
        //Closing tag
        if($tag=='B' || $tag=='I' || $tag=='U')
            $this->SetStyle($tag,false);
        if($tag=='A')
            $this->HREF='';
        if($tag=='P')
            $this->ALIGN='';
    }

    function SetStyle($tag,$enable)
    {
        //Modify style and select corresponding font
        $this->$tag+=($enable ? 1 : -1);
        $style='';
        foreach(array('B','I','U') as $s)
            if($this->$s>0)
                $style.=$s;
        $this->SetFont('',$style);
    }

    function PutLink($URL,$txt)
    {
        //Put a hyperlink
        $this->SetTextColor(0,0,255);
        $this->SetStyle('U',true);
        $this->Write(5,$txt,$URL);
        $this->SetStyle('U',false);
        $this->SetTextColor(0);
    }
	function header(){

	}
	function footer(){

	}
}




$pdf=new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('P','A4',0,'L');
$pdf->SetFont('Arial','B',20);
$pdf->Cell(200,10,'Iloilo National High School',0,1,'C');

$pdf->SetFont('Arial','B',15);
$pdf->Cell(200,10,'Student Record',0,1,'C');



$pdf->SetFont('Arial','',10);
$pdf->Cell(10,10,'LRN:',0,0);
$pdf->Cell(30,10, $row['lrn'],0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,10,'Last Name:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(25,10, $row['last_name'],0,0);
//$pdf->Cell(20,10,'',1,0
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,10,'First Name:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10, $row['first_name'],0,0);
//$pdf->Cell(20,10,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,10,'Extension Name:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10, $row['extension_name'],0,1);
//$pdf->Cell(20,10,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,10,'Middle Name:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10, $row['middle_name'],0,1);


$pdf->SetFont('Arial','B',10);
$pdf->Cell(12,10,'Sex:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(15,10, $row['sex'],0,0);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(18,10,' Birthdate:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(23,10, $row['birthdate'],0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,10,'Age:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(18,10, $row['age'],0,0);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(18,10,'Religion:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10, $row['religion'],0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,10,'Address:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10, $row['address'],0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,10,'Father Name:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(45,10, $row['father_name'],0,0);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,10,'Mother Name:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(40,10, $row['mother_maidenname'],0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(28,10,'Guardian Name:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10, $row['guardian_name'],0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(15,10,'Grade:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(10,10, $row['grade'],0,0);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(15,10,'Section:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(20,10, $row['section'],0,0);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,10,'School Year:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10, $row['school_year'],0,1);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(50,5,'',0,1);
$pdf->Cell(50,10,'',0,0);
$pdf->Cell(25,10,'Track and Strand Applied',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,10,'First Track:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(39,10, $row['track'],0,0);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,10,'First Strand:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10, $row['strand'],0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,10,'Second Track:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(34,10, $row['track1'],0,0);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,10,'Second Strand:',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10, $row['strand1'],0,1);




// $pdf->SetFont('Arial','B',10);
// $pdf->Cell(50,10,'Sex:',0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,'Date of Birth:',0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,'Age:',0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,'Religious Affiliation:',0,1);

// $pdf->SetFont('Arial','BU',10);
// $pdf->Cell(50,10,$row['sex'],0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,$row['birthdate'],0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,$row['age'],0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,$row['religion'],0,1);


// $pdf->SetFont('Arial','B',10);
// $pdf->Cell(50,10,'Complete Address',0,1);
// $pdf->SetFont('Arial','BU',10);
// $pdf->Cell(50,10,$row['address'],0,1);

// $pdf->SetFont('Arial','B',10);
// $pdf->Cell(50,10,'Grade Level:',0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,'Section:',0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,'School Year:',0,1);

// $pdf->SetFont('Arial','BU',10);
// $pdf->Cell(50,10,$row['grade_level'],0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,$row['section'],0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,$row['school_year'],0,1);

// $pdf->SetFont('Arial','B',10);
// $pdf->Cell(50,10,'Track:',0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,'Strand:',0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,'Grade:',0,1);

// $pdf->SetFont('Arial','BU',10);
// $pdf->Cell(50,10,$row['track'],0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,$row['strand'],0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,$row['grade'],0,1);

// $pdf->SetFont('Arial','B',10);
// $pdf->Cell(50,10,'Father Name:',0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,'Mother Name:',0,1);

// $pdf->SetFont('Arial','BU',10);
// $pdf->Cell(50,10,$row['father_name'],0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,$row['mother_maidenname'],0,1);

// $pdf->SetFont('Arial','B',10);
// $pdf->Cell(50,10,'Guardian Name:',0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,'Contact:',0,1);

// $pdf->SetFont('Arial','BU',10);
// $pdf->Cell(50,10,$row['guardian_name'],0,0);
// $pdf->Cell(20,10,'',0,0);
// $pdf->Cell(50,10,$row['contact'],0,1);

$pdf->SetXY(50,160);
$pdf->Cell(100,10,'Dean of Discipline/Guidance Center',0,1);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(10,5,'',0,0);
$pdf->Cell(100,5,'I certify that the student has a desirable record and I am favorably endorsing him/her to enroll',0,1);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,5,'',0,0);
$pdf->Cell(20,5,'Certified by:',0,0);
$pdf->Cell(40,5,'_____________________',0,0);
$pdf->Cell(20,5,'Certified by:',0,0);
$pdf->Cell(50,5,'_____________________',0,1);
$pdf->Cell(120,5,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5,'Assessment Center',0,1);
$pdf->Cell(10,5,'',0,0);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(50,7,'Documents submitted',0,1);
$pdf->Cell(30,5,'',0,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(20,5,'Pre-Enrolment Form',0,1);

$pdf->Cell(30,5,'',0,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(20,5,'Original and Clear Copy of Form 138',0,1);

$pdf->Cell(30,5,'',0,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(20,5,'Clear Copy of NCAE Result(for transferees)',0,1);

$pdf->Cell(30,5,'',0,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(20,5,'Original/Clear Copy of NSO Birth Certificate(for transferees)',0,1);

$pdf->Cell(30,5,'',0,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(20,5,'Certificate of endorsement from Principal from Previous School(for transferees)',0,1);

$pdf->Cell(30,5,'',0,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(20,5,'Certificate of Good Moral Character(for transferees)',0,1);


$pdf->Cell(30,5,'',0,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(0,10,'1 Long white Folder(for transferees)',0,1);

$pdf->Cell(20,5,'',0,0);
$pdf->Cell(40,5,'Student is elligible for enrollment to:',0,0);
$pdf->Cell(20,5,'',0,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(20,5,'EOC Class',0,1);


$pdf->Cell(30,5,'',0,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(20,5,'Grade 11',0,0);
$pdf->Cell(10,5,'',0,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(20,5,'Grade 12',0,1);

$pdf->Cell(30,5,'',0,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(20,5,'Academic',0,0);
$pdf->Cell(10,5,'',0,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(20,5,'Arts & Design',0,0);
$pdf->Cell(10,5,'',0,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(20,5,'Sports',0,0);
$pdf->Cell(5,5,'',0,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(20,10,'TVL',0,1);

$pdf->Cell(30,5,'',0,0);
$pdf->Cell(10,5,'Program(Standard/Specialition):___________________________',0,1);
$pdf->Cell(30,5,'',0,0);
$pdf->Cell(10,5,'General Average:______',0,1);
$pdf->Cell(85,5,'',0,0);
$pdf->Cell(10,5,'Asssessed by:_______________________',0,1);
$pdf->Cell(30,5,'',0,0);
$pdf->Cell(10,3,'___________________________',0,1);
$pdf->Cell(30,5,'',0,0);
$pdf->Cell(10,5,'Signature over Printed Name',0,1);



$pdf->Image("image/$pic",150,50,50,50);
$pdf->Image("img/inhs.jpg",33,5,28,28);
$pdf->Image("img/shs.jpg",160,5,30,30);

$pdf->SetTitle('Print');

// $pdf->Cell(10,10,'Sex',1,0);
// $pdf->Cell(20,10,'BirthDate',1,0);
// $pdf->Cell(10,10,'Age',1,0);
// $pdf->Cell(20,10,'Religion',1,0);
// $pdf->Cell(80,5,'Complete Address',1,0);
// $pdf->Cell(30,5,'Father Name',1,0);
// $pdf->Cell(30,5,'Mother Name',1,0);
// $pdf->Cell(40,5,'Guardian Name',1,0);
// $pdf->Cell(30,10,'Contact',1,0);
// $pdf->Cell(40,10,'Remark',1,1);

// $pdf->Cell(130,0,'',0,0);

// $pdf->SetXY(125,35);
// $pdf->Cell(20,5,'Street',1,0);
// $pdf->SetXY(145,35);
// $pdf->Cell(20,5,'Barangay',1,0);
// $pdf->SetXY(165,35);
// $pdf->Cell(20,5,'Municipality/City',1,0);
// $pdf->SetXY(185,35);
// $pdf->Cell(20,5,'Province',1,0);
 $pdf->output();

?>

