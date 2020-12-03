<?php 

include ('connexion.php');

$counter = $_REQUEST['counter'];
//$idk = $_GET['idk'];
//$sql = "SELECT * FROM kabada WHERE idk ='" . $idk . "'";
$sql = "SELECT * FROM tabligh  WHERE donne = 1 ORDER BY UNIX_TIMESTAMP(num_donne) DESC LIMIT ".$counter."";
$result=mysqli_query($conn,$sql);


$tbl = "<h1><b><center> مكتب المفوض القضائي  الاستاذ    </center></b></h1><hr><br><h2> قصد الانجاز  </h2><br><h3> عدد الاجراءات : ".$counter."</h3>";

$tbl .= <<<EOD


<table cellspacing="0" cellpadding="1" border="1">

<thead>
    <tr>
        <th align="center" width="40">المرجع</th>
        <th align="center" width="60">نوع الاجراء</th>
        <th align="center" width="110">رقم الملف</th>
        <th align="center" width="90"> طالب الاجراء</th>
        <th align="center" width="90">المبلغ إليه</th>                                            
        <th align="center" width="155">العنوان</th>                                        
        <th align="center" width="70">الكاتب المحلف</th>
        <th align="center" width="75">تاريخ السحب  </th>                                            
    </tr>
</thead>                                   

EOD;
while($val = $result->fetch_assoc())
    {
$tbl .= "<tr>";
$tbl .= "<td width=\"40\" align=\"center\"> ".$val["idtab"]." </td>"; 
$tbl .= "<td width=\"60\" align=\"center\"> ".$val["tabgenre"]." </td>";
$tbl .= "<td width=\"110\" align=\"center\"> ".$val["tabnumdoss"]." </td>"; 
$tbl .= "<td width=\"90\" align=\"center\"> ".$val["tabavec"]." </td>";  
$tbl .= "<td width=\"90\" align=\"center\"> ".$val["tabcontre"]." </td>";
$tbl .= "<td width=\"155\" align=\"center\"> ".$val["tabadress"]." </td>";
$tbl .= "<td width=\"70\" align=\"center\"> ".$val["tabclerc"]." </td>"; 
$tbl .= "<td width=\"75\" align=\"center\"> ".$val["num_donne"]." </td>";
$tbl .= "</tr>";

    }

$tbl .= "</table></div>";




require('TCPDF/tcpdf.php');
$tcpdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set default monospaced font
$tcpdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set title of pdf

$tcpdf->SetTitle('قصد الانجاز');
$tcpdf->cell(80, 10, "TITRE DE PAGE", 1,0,"C");
// set margins
$tcpdf->SetMargins(10, 10, 10, 10);
$tcpdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$tcpdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set header and footer in pdf
$tcpdf->setPrintHeader(true);
$tcpdf->setPrintFooter(false);
$tcpdf->setListIndentWidth(3);

// set auto page breaks
$tcpdf->SetAutoPageBreak(TRUE, 11);



// set image scale factor
$tcpdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

$tcpdf->AddPage();
$tcpdf->SetFont('aealarabiya', '', 10.5);

$tcpdf->setRTL(true);




$tcpdf->writeHTML($tbl, true, false, false, false, '');









// set font

//Close and output PDF document
$tcpdf->Output('demo.pdf', 'I');
 ?>