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

    <title>المفوض القضائي - البحث عن التبليغات </title>

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
                    <h1 class="page-header">البحث عن التبليغات </h1>
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
                            <div class="table-responsive">
							
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>السجل الخاص</th>
                                            <th>السجل العام</th>
                                            <th>المحكمة</th>
                                            <th> نوع الاجراء</th>
                                            <th>رقم الملف</th>
                                            <th>طالب الاجراء</th>
											<th>النائب عنه</th>
                                            <th>المبلغ إليه</th>
											<th>العنوان</th>
                                            <th>الكاتب المحلف</th>
                                            <th>تاريخ الجلسة أو البيع</th>
                                            <th>  تاريخ السحب  </th>
                                            <th> تاريخ  الارجاع  </th>
                                            <th> تاريخ  التبليغ  </th>
                                            <th> المحلاحظة العامة   </th>
                                            <th> الملاحظة الخطية  </th>
                                            <th> تاريخ  الارسال  </th>
                                        </tr>
                                    
</thead>
															<?php
						$NbrCol = 100000;
					
                        // requête
                        $query = 'SELECT * FROM tabligh';
                        $result = mysqli_query($conn,$query);
                        // -------------------------------------------------------
                       
                          while($val = $result->fetch_assoc())
                        { 
                                    if ($val['donne'] == 0) {
                                        echo '<tr class="info">';
                                   echo '<td>';      
                                    echo $val['tabregGen'];echo '</td>';
                                    echo '<td>';      
                                    echo $val['tabregPre'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabtrubunal'];echo '</td>';
                                   echo '<td>';
                                   
                                   echo $val['tabgenre'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabnumdoss'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabavec'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabavoca'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabcontre'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabadress'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabclerc'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabdatejalsa'];echo '</td>';
                                   echo '<td>';
                                   echo $val['num_donne'];echo '</td>';
                                   echo '<td>';
                                   echo $val['num_encour'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabdatetabligh'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabreqGen'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabreqEcr'];echo '</td>'; 
                                   echo '<td>';
                                   echo $val['num_monjaz'];echo '</td>';                                    
                                   
                                  echo '</tr>';
                                       
                                    }
                                    if ($val['donne'] == 1 && $val['encour'] == 0 && $val['tabdatetabligh'] == "" && $val['tabreqGen'] == "" && $val['tabreqEcr'] == ""){
                                   echo '<tr class="success">';
        						   echo '<td>';      
                                   echo $val['tabregGen'];echo '</td>';
                                   echo '<td>';      
                                   echo $val['tabregPre'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabtrubunal'];echo '</td>';
                                   echo '<td>';
                                   
                                   echo $val['tabgenre'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabnumdoss'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabavec'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabavoca'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabcontre'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabadress'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabclerc'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabdatejalsa'];echo '</td>';
                                   echo '<td>';
                                   echo $val['num_donne'];echo '</td>';
                                   echo '<td>';
                                   echo $val['num_encour'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabdatetabligh'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabreqGen'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabreqEcr'];echo '</td>'; 
        						   echo '<td>';
                                   echo $val['num_monjaz'];echo '</td>';                                    
                                   
        						  echo '</tr>';
        						}
                                if ($val['encour'] == 1 && $val['tabdatetabligh'] == "" && $val['tabreqGen'] == "" && $val['tabreqEcr'] == ""){
                                   echo '<tr class="WARNING">';
                                   echo '<td>';      
                                    echo $val['tabregGen'];echo '</td>';
                                    echo '<td>';      
                                    echo $val['tabregPre'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabtrubunal'];echo '</td>';
                                   echo '<td>';
                                   
                                   echo $val['tabgenre'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabnumdoss'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabavec'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabavoca'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabcontre'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabadress'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabclerc'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabdatejalsa'];echo '</td>';
                                   echo '<td>';
                                   echo $val['num_donne'];echo '</td>';
                                   echo '<td>';
                                   echo $val['num_encour'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabdatetabligh'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabreqGen'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabreqEcr'];echo '</td>'; 
                                   echo '<td>';
                                   echo $val['num_monjaz'];echo '</td>';                                    
                                   
                                  echo '</tr>';
                                }
                                if ($val['encour'] == 1 && $val['tabdatetabligh'] != "" && $val['tabreqGen'] != "" && $val['tabreqEcr'] != "" && $val['monjaz'] == 0){
                                   echo '<tr class="danger">';
                                   echo '<td>';      
                                    echo $val['tabregGen'];echo '</td>';
                                    echo '<td>';      
                                    echo $val['tabregPre'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabtrubunal'];echo '</td>';
                                   echo '<td>';
                                   
                                   echo $val['tabgenre'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabnumdoss'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabavec'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabavoca'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabcontre'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabadress'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabclerc'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabdatejalsa'];echo '</td>';
                                   echo '<td>';
                                   echo $val['num_donne'];echo '</td>';
                                   echo '<td>';
                                   echo $val['num_encour'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabdatetabligh'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabreqGen'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabreqEcr'];echo '</td>'; 
                                   echo '<td>';
                                   echo $val['num_monjaz'];echo '</td>';                                    
                                   
                                  echo '</tr>';
                                }
                                    if ($val['encour'] == 1 && $val['tabdatetabligh'] != "" && $val['tabreqGen'] != "" && $val['tabreqEcr'] != "" && $val['num_monjaz'] != ""){
                                   echo '<tr>';
                                   echo '<td>';      
                                    echo $val['tabregGen'];echo '</td>';
                                    echo '<td>';      
                                    echo $val['tabregPre'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabtrubunal'];echo '</td>';
                                   echo '<td>';
                                   
                                   echo $val['tabgenre'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabnumdoss'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabavec'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabavoca'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabcontre'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabadress'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabclerc'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabdatejalsa'];echo '</td>';
                                   echo '<td>';
                                   echo $val['num_donne'];echo '</td>';
                                   echo '<td>';
                                   echo $val['num_encour'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabdatetabligh'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabreqGen'];echo '</td>';
                                   echo '<td>';
                                   echo $val['tabreqEcr'];echo '</td>'; 
                                   echo '<td>';
                                   echo $val['num_monjaz'];echo '</td>';                                    
                                   
                                  echo '</tr>';
                                }}
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