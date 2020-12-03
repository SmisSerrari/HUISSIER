 <?php 
include ('connexion.php');



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
         <form method="post">

   


<?php 
if(isset($_POST['envoyer']))
    {
if(!empty($_POST['monjaz'])) {
    $counter = 0;

        foreach($_POST['monjaz'] as $value){
        $counter = $counter+1;
       
    
            $query = "UPDATE tablighat SET monjaz=1 WHERE idtab = $value";
            mysqli_query($conn,$query);
            $query2 = "UPDATE tablighat SET num_monjaz=NOW() WHERE idtab = $value";
            mysqli_query($conn,$query2);
              
        }
        $num_taslim =  $num_taslim + 1;
          header('Location: encourtabrecu.php?counter='.$counter.'');

    }
}

 ?>



        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../../Users/admin/Desktop/HUISSIER/sb-admin2-rtl-master/index.html">مكنب المفوض القضائي الاستاذ <b>مراد خضار</b></a>
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
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> ملفات التنفيذ المختلف المنجزة</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>الاجراءات المنجزة</h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                        <div class="col-lg-4">
                            
                             <input type="submit" name="envoyer" class="btn btn-success btn-lg" style="margin:15px; width:50%">
                                
                               
                            </div>
                            <div class="col-lg-2">  
                            </div>

                            <div class="col-lg-3">
                                <label> المحكمة  </label>
                                    <select class="form-control" name="trubunal" id="table-filter">
                                        <option >المحكمة</option>
                                                
                                        <option value="محكمة الاستئناف التجارية">محكمة الاستئناف التجارية</option>
                                        <option value="المحكمة الابتدائية المدنية">المحكمة الابتدائية المدنية</option>
                                        <option value="المحكمة التجارية">المحكمة التجارية</option>
                                        <option value="محكمة COMANAV">محكمة COMANAV</option>
                                        <option value="المحكمة الادارية">المحكمة الادارية</option>
                                        <option value="المحكمة الاجتماعية">المحكمة الاجتماعية</option>
                                    </select>
                                
 
                            </div>

                            <div class="col-lg-3">
                            <label>  المحامي</label>
                               <select class="form-control" name="avoca" id="table-filter1">
                                    <option value=""> المحامي</option>
                                        <?php 
                                        $query1 = "SELECT * FROM avocas";          
										$result1 = mysqli_query($conn, $query1);
                                    while ($row1 = mysqli_fetch_array($result1)):; ?>
                                      <option value="<?php echo $row1[1];?>"><?php echo "$row1[1]";?> </option>
                                  <?php endwhile; ?>
                                            </select>
                            </div>
                            </div>
                            <div class="table-responsive">
							
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>مرجعنا</th>
                                            <th>المحكمة</th>
                                            <th> نوع الاجراء</th>
                                            <th>رقم التنفيذ</th>
                                            <th>طالب الاجراء</th>
                                            <th>النائب عنه</th>
                                            <th>المبلغ إليه</th>
                                            
                                            
                                            <th>  تاريخ السحب  </th>
                                            <th> تاريخ  الارجاع  </th>
                                            <th>  تاريخ  التبليغ </th>
                                            <th>الملاحظة العامة </th>
                                            <th width="20%">الملاحظ الخطية </th>
                                            <th>اختيارات</th>
                                        </tr>
                                    </thead>

						<?php
                        
						$NbrCol = 10000;
                        // requête
                        $query = 'SELECT * FROM moukhtalif WHERE encour=1 AND mkhdatet!=0';
                        $result = mysqli_query($conn,$query);;
                        // -------------------------------------------------------
                        
                          while($val = $result->fetch_assoc())
                        { 
						   echo '<td>';
							// ------------------------------------------
							// AFFICHAGE des DONNEES de la fiche
						   echo $val['mkhref'];echo '</td>';
                           echo '<td>';
                           echo $val['mkhtribunal'];echo '</td>';
                           echo '<td>';
                           echo $val['mkhgenre'];echo '</td>';
                           echo '<td>';
                           echo $val['mkhnumdoss'];echo '</td>';
                           echo '<td>';
                           echo $val['mkhavec'];echo '</td>';
                           echo '<td>';
                           echo $val['mkhavoca'];echo '</td>';
                           echo '<td>';
                           echo $val['mkhcontre'];echo '</td>';
                           echo '<td>';
                           echo $val['num_donne'];echo '</td>';
                           echo '<td>';
                           echo $val['num_encour'];echo '</td>';
                           echo '<td>';
                           echo $val['mkhdatet'];echo '</td>';
                           echo '<td>';
                           echo $val['mkhreqgen'];echo '</td>';
                           echo '<td>';
                           echo $val['mkhreqecr'];echo '</td>';
						   echo '<td>';
                           echo (
                             "<div class=\"btn btn-default\" align=\"center\" ><a href=\"tanfidmokhtalif.php?idmkh=".$val['idmkh']."\"> طور التنفيذ </a></div>\n") ;
                           echo '</td>';
    							     echo "</tr>"; 
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
        </div>
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
        $(document).ready(function (){
        var table = $('#dataTables-example').DataTable({
        dom: 'lrtip',
                                
        });
                                        
        $('#table-filter').on('change', function(){
        table.search(this.value).draw();   
        });

        $('#table-filter1').on('change', function(){
        table.search(this.value).draw();   
        });
        });

        
    </script>

</body>

</html>