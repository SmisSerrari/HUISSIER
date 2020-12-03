<?php
include ('connexion.php');
$counter = $_REQUEST['counter'];

//$idk = $_GET['idk'];
//$sql = "SELECT * FROM kabada WHERE idk ='" . $idk . "'";
$sql = "SELECT * FROM mokhtalif WHERE donne = 1 ORDER BY UNIX_TIMESTAMP(num_donne) DESC LIMIT ".$counter."";
$result=mysqli_query($conn,$sql);

 

?> 



<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>المفوض القضائي - تسجيل الإجراءات</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/rtl/bootstrap.min.css" rel="stylesheet">
    
    <!-- not use this in ltr -->
    <link href="css/rtl/bootstrap.rtl.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/rtl/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body  style="font-family:tahoma;">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">مكنب المفوض القضائي الاستاذ <b>مراد خضار</b></a>
            </div>
            <!-- /.navbar-header -->

            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="البحث...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> الإدارة</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>التبليغ <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="enregistretab.php"> تسجيل الاجراءات </a>
                                </li>
								<li>
                                    <a href="uploadtabligh.php"> ذمج الوثيقة  </a>
                                </li>
								<li>
                                    <a href="bureautab.php"> قصد الانجاز </a>
                                </li>
								<li>
                                    <a href="encourtab.php"> طور الانجاز </a>
                                </li>
                                <li>
                                    <a href="finietab.php"> منجزة قصد التضمين </a>
                                </li>
                                <li>
                                    <a href="datelisttabligh.php"> منجزة قصد  الارسال </a>
                                </li>
								<li>
                                    <a href="savetab.php"> الحفظ </a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-briefcase"></i>+ التنفيذ<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="#"><i class="fa fa-wrench fa-briefcase"></i>+ ملفات التنفيذات <span class="fa arrow"></span></a>
                                	<ul class="nav nav-second-level">
                                		<li>
                                    	<a href="enregistretan.php">- تسجيل الملفات  </a>
                                		</li>
										<li>
                                    	<a href="burotan.php">- قصد الانجاز </a>
		                                </li>
										<li>
		                                    <a href="encourtan.php">- طور الانجاز </a>
		                                </li>
		                                <li>
		                                    <a href="finietan.php">- منجزة قصد التضمين </a>
		                                </li>
										<li>
		                                    <a href="savetan.php">- الحفظ </a>
		                                </li>
                                	</ul>
                                </li>
                            
								<li><a href="#"><i class="fa fa-wrench fa-briefcase"></i>+ التنفيذ المختلف  <span class="fa arrow"></span></a>
                                	<ul class="nav nav-second-level">
                                		<li>
                                    <a href="enregistremokhtlf.php">- تسجيل ملفات التنفيذ المختلف </a>
                                </li>
								<li>
                                    <a href="bureaumokhtlf.php">- قصد الانجاز </a>
                                </li>
								<li>
                                    <a href="encourmokhtlf.php">- طور الانجاز </a>
                                </li>
                                <li>
                                    <a href="finiemokhtlf.php">- منجزة قصد التضمين </a>
                                </li>
                                <li>
                                    <a href="datelistmokhtalif.php">- تتبع ملف التنفيذ </a>
                                </li>
                                <li>
                                    <a href="suiviemokhtlf.php">- منجزة قصد التضمين </a>
                                </li>
								<li>
                                    <a href="savemokhtlf.php">- الحفظ </a>
                                </li>
                               </ul></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> الخزينة العامة <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 
                            	<li>
                                    <a href="enregistrekabada.php">  الاجراءات التراتيبة (تسجيل)</a>
                                </li>
                                <li>
                                    <a href="afficheregestre.php">الاجراءات  المسجلة بالسجل </a>
                                </li>
								<li>
                                    <a href="uploadkabada.php"> ذمج الوثيقة </a>
                                </li>
								<li>
                                    <a href="modifkabada.php"> إضافة أو تعديل عنوان </a>
                                </li>
								<li>
                                    <a href="bureaukabada.php"> قصد الانجاز </a>
                                </li>
								<li>
                                    <a href="encourkabada.php"> طور الانجاز </a>
                                </li>
                                <li>
                                    <a href="finkabada.php"> منجزة قصد التضمين </a>
                                </li>
								<li>
                                    <a href="prixkabada.php"> الاتعاب </a>
                                </li>
								<li>
                                    <a href="deviskabada.php"> الاتعاب المستخلصة </a>
                                </li>
                                <li>
                                    <a href="datelistkabada.php"> تاريخ  طلب القائمة </a>
                                </li>                                
								<li>
                                    <a href="enregistrekabhajz.php">الاجراءات التكميلية</a>
                                </li>
								<li>
                                    <a href="ajoutedatehajz.php"> تاريخ إنجاز الحجز </a>
                                </li>
                                <li>
                                    <a href="tankabada.php"> مآل اجراءات التنفيذ </a>
                                </li>
								<li>
                                    <a href="archivekabada.php"> ارشيف الخزينة العامة </a>
                                </li>
                                </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>+ الارشيف السنوي<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="archivetabligh.html">- التبليغ </a>
                                </li>
                                <li>
                                    <a href="archivetanfid.html">- التنفيذ </a>
                                </li>
								<li>
                                    <a href="archivemokhtalif.html">- التنفيذ المختلف</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                 </div>
            <!-- /.navbar-static-side -->
        </nav>
                <!-- /.sidebar-collapse -->
       <div id="page-wrapper">
       <form method="post" action="mokhtalif_pdf.php?counter=<?php echo $counter ?>" target="_blank">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">طبع الإجراءات قصد الانجاز </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>الاجراءات المسجلة</h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<div class="row" style="margin-bottom:40px;">
                        <div class="col-lg-3">
                            
                             <input type="submit" name="pdf_print" class="btn btn-danger btn-lg" value="Imprimer PDF" style="margin:15px; width:80%">
                                
                               
                            </div>

                             <div class="col-lg-3" style="text-align:right;">
                            
                             
                               
                            </div>
                            </div>
                            <div class="table-responsive">
							
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>السجل العام</th>
                                            <th>السجل الخاص</th>
                                            <th>المحكمة</th>
                                            <th> نوع الاجراء</th>
                                            <th>رقم التنفيذ</th>
                                            <th>رقم الملف</th>
											<th>رقم الحكم</th>
                                            <th>تاريخ التسجيل</th>
											<th>طالب الاجراء</th>
                                            <th>النائب عنه</th>
											<th>المنفذ عليه</th>
                                            <th>العنوان</th>
                                            
                                            <th>المفوض القضائي</th>
                                            
                                        </tr>
                                    </thead>
									<?php	
                        $NbrCol = 100000;
                        // requête
                        $query = 'SELECT * FROM mokhtalif WHERE donne=1';
                        $result = mysqli_query($conn,$query);;
                        // -------------------------------------------------------      
                          while($val = $result->fetch_assoc())
                        { 
						  echo '<tr class="info">';
							// ------------------------------------------
							// AFFICHAGE des DONNEES de la fiche
                           echo '<td>';   echo $val['mregGen'];echo '</td>';
                           echo '<td>';   echo $val['mregPre'];echo '</td>';
                           echo '<td>';   echo $val['mtrubunal'];echo '</td>';
                           echo '<td>'; echo $val['mgenre'];echo '</td>';
                           echo '<td>'; echo $val['mnumtan'];echo '</td>';
                           echo '<td>'; echo $val['mnumdoss'];echo '</td>';
                           echo '<td>'; echo $val['mnumh'];echo '</td>';
                           echo '<td>'; echo $val['mdatee'];echo '</td>';
                           echo '<td>'; echo $val['mavec'];echo '</td>';
                           echo '<td>'; echo $val['mavoca'];echo '</td>';
                           echo '<td>'; echo $val['mcontre'];echo '</td>';
                           echo '<td>'; echo $val['madress'];echo '</td>';  
                           echo '<td>'; echo $val['huissier'];echo '</td>';
                           
						   
						   echo '</tr>';
                       }


?>

                                 
                                </table>
								
                                
                                
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </form></div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="js/jquery/jquery.dataTables.min.js"></script>
    <script src="js/bootstrap/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
          $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>