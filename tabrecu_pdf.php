<?php 

include ('connexion.php');

$counter = $_REQUEST['counter'];
//$idk = $_GET['idk'];
//$sql = "SELECT * FROM kabada WHERE idk ='" . $idk . "'";
$sql = "SELECT * FROM tabligh  WHERE monjaz = 1 ORDER BY UNIX_TIMESTAMP(num_monjaz) DESC LIMIT ".$counter."";
$result=mysqli_query($conn,$sql);


$tbl = "<h1 align=\"centre\"><b> مكتب المفوض القضائي     </b></h1>
        <h3 align=\"centre\"><b> العنوان : الدارالبيضاء </b></h3>
        <h4 align=\"centre\"><b> الهاتف الثابت: 0522123456 المحمول : 0600123456 البريد الالكتروني : com.gmail@huissier.application </b></h4>
        <hr><br><h2>تنفيذ طور الانجاز  </h2><br><h3> عدد الاجراءات : ".$counter." بتاريخ  ".$num_encour."</h3>";

$tbl .= <<<EOD


<table cellspacing="0" cellpadding="1" border="1">

<thead>

        <tr>
            <td align="center" width="40">المرجع</td>
		    <td align="center" width="80">المحكمة </td>
            <td align="center" width="65">نوع الاجراء</td>
            <td align="center" width="105">رقم الملف</td>
            <td align="center" width="90"> طالب الاجراء</td>
            <td align="center" width="75"> النائب  ذ(ة)عنه </td>
            <td align="center" width="85">المبلغ  إليه </td>
            <td align="center" width="90">الملاحظة الخطية</td>                                           
            <td align="center" width="75"> تاريخ  الطبع </td>                                        
                                                                                        
        </tr>
</thead>

EOD;
while($val = $result->fetch_assoc())
    {
$tbl .= "<tr>";
$tbl .= "<td width=\"40\" align=\"center\">".$val["idtab"]."</td>"; 
$tbl .= "<td width=\"80\" align=\"center\">".$val["tabtrubunal"]."</td>";
$tbl .= "<td width=\"65\" align=\"center\">".$val["tabgenre"]."</td>";
$tbl .= "<td width=\"105\" align=\"center\">".$val["tabnumdoss"]."</td>"; 
$tbl .= "<td width=\"90\" align=\"center\">".$val["tabavec"]."</td>";
$tbl .= "<td width=\"75\" align=\"center\">".$val["tabavoca"]."</td>";    
$tbl .= "<td width=\"85\" align=\"center\">".$val["tabcontre"]."</td>";
$tbl .= "<td width=\"90\" align=\"center\">".$val["tabreqGen"]."</td>";
$tbl .= "<td width=\"75\" align=\"center\">".$val["num_monjaz"]."</td>";

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