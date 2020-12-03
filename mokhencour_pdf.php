<?php 

include ('connexion.php');

$counter = $_REQUEST['counter'];
//$idk = $_GET['idk'];
//$sql = "SELECT * FROM kabada WHERE idk ='" . $idk . "'";
$sql = "SELECT * FROM moukhtalif WHERE encour = 1 ORDER BY UNIX_TIMESTAMP(num_encour) DESC LIMIT ".$counter."";
$result=mysqli_query($conn,$sql);


$tbl = "<h1 align=\"centre\"><b> مكتب المفوض القضائي  الاستاذ مراد خضار </b></h1>
        <h3 align=\"centre\"><b> العنوان : شارع لالة الياقوت الرقم 44 الطابق الخامس الدارالبيضاء </b></h3>
        <h4 align=\"centre\"><b> الهاتف الثابت: 0522552749 المحمول : 0663610457 البريد الالكتروني : com.gmail@huissier.mourad.khoudar </b></h4>
		<hr><br><h2>تنفيذ طور الانجاز  </h2><br><h3> عدد الاجراءات : ".$counter."</h3>";

$tbl .= <<<EOD


<table cellspacing="0" cellpadding="1" border="1">

<thead>
    <tr>
        <th align="center" width="40">مرجعنا</th>
		<th align="center" width="60">المحكمة</th>
        <th align="center" width="90">نوع الاجراء</th>		
        <th align="center" width="70">رقم التنفيذ</th>
        <th align="center" width="90"> طالب الاجراء</th>                                                   
        <th align="center" width="90">النائب عنه </th>
        <th align="center" width="90">المنفذ عليه</th>                                         
        <th align="center" width="75">المفوض القضائي</th>
        <th align="center" width="75">تاريخ السحب  </th>                                            
    </tr>
</thead>                                   

EOD;
while($val = $result->fetch_assoc())
    {
$tbl .= "<tr>";
$tbl .= "<td width=\"40\" align=\"center\"> ".$val["mkhref"]." </td>"; 
$tbl .= "<td width=\"60\" align=\"center\"> ".$val["mkhtribunal"]." </td>";
$tbl .= "<td width=\"90\" align=\"center\"> ".$val["mkhgenre"]." </td>";
$tbl .= "<td width=\"70\" align=\"center\"> ".$val["mkhnumtan"]." </td>"; 
$tbl .= "<td width=\"90\" align=\"center\"> ".$val["mkhavec"]." </td>";  
$tbl .= "<td width=\"90\" align=\"center\"> ".$val["mkhavoca"]." </td>";
$tbl .= "<td width=\"90\" align=\"center\"> ".$val["mkhcontre"]." </td>";
$tbl .= "<td width=\"75\" align=\"center\"> ".$val["mkhhuiss"]." </td>"; 
$tbl .= "<td width=\"75\" align=\"center\"> ".$val["num_encour"]." </td>";
$tbl .= "</tr>";

    }

$tbl .= "</table></div>";




require('TCPDF/tcpdf.php');
$tcpdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set default monospaced font
$tcpdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set title of pdf

$tcpdf->SetTitle('تنفيذ طور الانجاز');
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