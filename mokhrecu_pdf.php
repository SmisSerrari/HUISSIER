<?php 

include ('connexion.php');

$counter = $_REQUEST['counter'];
//$idk = $_GET['idk'];
//$sql = "SELECT * FROM kabada WHERE idk ='" . $idk . "'";
$sql = "SELECT * FROM mokhtalif  WHERE monjaz = 1 ORDER BY UNIX_TIMESTAMP(num_monjaz) DESC LIMIT ".$counter."";
$result=mysqli_query($conn,$sql);

$tbl = "<h1 align=\"centre\"><b> مكتب المفوض القضائي  الاستاذ مراد خضار </b></h1>
        <h3 align=\"centre\"><b> العنوان : شارع لالة الياقوت الرقم 44 الطابق الخامس الدارالبيضاء </b></h3>
        <h4 align=\"centre\"><b> الهاتف الثابت: 0522552749 المحمول : 0663610457 البريد الالكتروني : com.gmail@huissier.mourad.khoudar </b></h4>
		<hr><br><h2>تنفيذ قصد الارسال  </h2><br><h3> عدد الاجراءات : ".$counter."</h3>";

$tbl .= <<<EOD


<table cellspacing="0" cellpadding="1" border="1">

<thead>

        <tr>
            <th align="center" width="40">المرجع</th>
		<th align="center" width="60">المحكمة</th>
        <th align="center" width="60">نوع الاجراء</th>		
        <th align="center" width="60">رقم التنفيذ</th>
        <th align="center" width="85"> طالب الاجراء</th>
        <th align="center" width="85">المنفذ عليه </th>
        <th align="center" width="75">المفوض القضائي</th>
		<th align="center" width="85">المأل النهائي للملف</th> 
        <th align="center" width="75">تاريخ الإنجاز</th>
        <th align="center" width="75">تاريخ السحب  </th>                                        
                                                                                        
        </tr>
</thead>

EOD;
while($val = $result->fetch_assoc())
    {
$tbl .= "<tr>";
$tbl .= "<td width=\"40\" align=\"center\"> ".$val["mreqGen"]." </td>"; 
$tbl .= "<td width=\"60\" align=\"center\"> ".$val["mtribunal"]." </td>";
$tbl .= "<td width=\"60\" align=\"center\"> ".$val["mgenre"]." </td>";
$tbl .= "<td width=\"60\" align=\"center\"> ".$val["mnumtan"]." </td>"; 
$tbl .= "<td width=\"85\" align=\"center\"> ".$val["mavec"]." </td>";  
$tbl .= "<td width=\"85\" align=\"center\"> ".$val["mcontre"]." </td>";
$tbl .= "<td width=\"75\" align=\"center\"> ".$val["huissier"]." </td>";
$tbl .= "<td width=\"85\" align=\"center\"> ".$val["mreqecrfin"]." </td>"; 
$tbl .= "<td width=\"75\" align=\"center\"> ".$val["mdatefin"]." </td>";
$tbl .= "<td width=\"75\" align=\"center\"> ".$val["num_monjaz"]." </td>";
$tbl .= "</tr>";

    }

$tbl .= "</table></div>";




require('TCPDF/tcpdf.php');
$tcpdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set default monospaced font
$tcpdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set title of pdf

$tcpdf->SetTitle('قصد  الارسال');
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