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

    <title>المفوض القضائي - المنجزة قصد التضمين </title>

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
               <a class="navbar-brand" href="index.php">مكنب المفوض القضائي  <b>   </b> </a>
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
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> الإدارة </a>
                        </li><li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> تسجيل  <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="enregistrehuissier.php"><i class="fa fa-dashboard fa-fw"></i>تسجيل  مفوض قضائي </a></li>
                                <li><a href="enregistreclerc.php"><i class="fa fa-dashboard fa-fw"></i>إضافة كاتب محلف  </a></li>
                                
                                <li><a href="enregistreavoca.php"><i class="fa fa-dashboard fa-fw"></i>إضافة  محامي  </a></li>
                            </ul>
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
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> الارشيف  <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="archivetabligh.php"> التبليغ </a>
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
                    <h1 class="page-header">ملفات التنفيذ المنجزة </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3> الملفات  المنجزة </h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            <div class="row">
                        <div class="col-lg-4">
                            
                             <input type="submit" name="envoyer" class="btn btn-success btn-lg" style="margin:15px; width:50%"  >
                                
                        </div>
                        <div class="col-lg-2">  
                            </div>

                            <div class="col-lg-3">
 
                            </div>
                        </div>
                            <div class="table-responsive">
							
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th> منجز   </th>
                                            <th>المرجع</th>
                                            <th>المحكمة</th>
                                            <th> نوع الاجراء</th>
                                            <th>رقم التنفيذ </th>
                                            <th>رقم الملف</th>
                                            <th>طالب الاجراء</th>
											<th>النائب عنه</th>
                                            <th>المنفذ عليه </th>
											<th>العنوان</th>
                                            <th>الكاتب المحلف</th>
                                            <th>  تاريخ السحب  </th>
                                            <th> تاريخ  الارجاع  </th>
                                            
											<th>الملاحظة العامة </th>
                                            <th>الملاحظة الخطية  </th>
                                            <th> تاريخ  الانجاز  </th>
                                            <th> نوع المحضر  </th>
                                            <th> الملاحظة النهائية للمحضر   </th>
                                            <th>تاريخ التحرير  </th>
                                            
                                        </tr>
                                    
</thead>
															<?php
						$NbrCol = 100000;
					
                        // requête
                        $query = 'SELECT * FROM tanfid WHERE encour=1 AND monjaz=0 AND tandatepv!=0';
                        $result = mysqli_query($conn,$query);
                        // -------------------------------------------------------
                       
                          while($val = $result->fetch_assoc())
                        { 
                           echo '<tr>';
                           echo '<td>';
                           echo '<input type="checkbox" name="monjaz[]" value="'.$val['idtan'].'"/>';echo '</td>';
						   echo '<td>';      
                            echo $val['idtan'];echo '</td>';
                           echo '<td>';
                           echo $val['tantrubunal'];echo '</td>';
                           echo '<td>';
                           
                           echo $val['tangenre'];echo '</td>';
                           echo '<td>';
                           echo $val['tannum'];echo '</td>';
                           echo '<td>';
                           echo $val['tannumdoss'];echo '</td>';
                           echo '<td>';
                           echo $val['tanavec'];echo '</td>';
                           echo '<td>';
                           echo $val['tanavoca'];echo '</td>';
                           echo '<td>';
                           echo $val['tancontre'];echo '</td>';
                           echo '<td>';
                           echo $val['tanadress'];echo '</td>';
                           echo '<td>';
                           echo $val['tanclerc'];echo '</td>';
                           echo '<td>';
                           echo $val['num_donne'];echo '</td>';
                           echo '<td>';
                           echo $val['num_encour'];echo '</td>';
                           echo '<td>';
                        
                           echo $val['tanreqGen'];echo '</td>';
                           echo '<td>';
                           echo $val['tanreqEcr'];echo '</td>';
                           echo '<td>';
                           echo $val['tandatetabligh'];echo '</td>';
                           echo '<td>';
                           echo $val['tanpv'];echo '</td>';
                           echo '<td>';
                           echo $val['tanreqpv'];echo '</td>';
                           echo '<td>';
                           echo $val['tandatepv'];echo '</td>';
						                                      
                           
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
        $(document).ready(function() {
          $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
<?php 
include ('connexion.php');

if(isset($_POST['envoyer']))
    {
 if(!empty($_POST['monjaz'])) {
    $counter = 0;

        foreach($_POST['monjaz'] as $value){
        $counter = $counter + 1;
       
    
            $query = "UPDATE tanfid SET monjaz=1 WHERE idtan = $value";
            mysqli_query($conn,$query);
            $query2 = "UPDATE tanfid SET num_monjaz=NOW() WHERE idtan = $value";
            mysqli_query($conn,$query2);
              
        }
          $num_monjaz =  $num_monjaz + 1;
          header('Location: tanburencour.php?counter='.$counter.'');
          
    }

   


}

 ?>