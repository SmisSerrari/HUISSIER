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

    <title>المفوض القضائي - قصج الانجاز </title>

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

   





        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">مكنب المفوض القضائي  </a>
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
                            <a href="#"><i class="fa fa-wrench fa-briefcase"></i> التنفيذ<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="enregistretan.php"> تسجيل الملف </a>
                                </li>
								<li>
                                    <a href="tandoc.php"> ذمج  الوثيقة  </a>
                                </li>
								<li>
                                    <a href="tanbureau.php"> قصد الانجاز </a>
                                </li>
								<li>
                                    <a href="tanencour.php"> طور الانجاز </a>
                                </li>
                                <li>
                                    <a href="tantadmin.php">ملفات قصد  التضمين </a>
                                </li>
                                <li>
                                    <a href="tanfin.php"> التنفيذات المبلغة </a>
                                </li>
								<li>
                                    <a href="savetan.php"> الحفظ </a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> الارشيف السنوي<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="archivetabligh.php"> التبليغ </a>
                                </li>
                                <li>
                                    <a href="archivetanfid.php"> التنفيذ </a>
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
                    <h1 class="page-header"> قصد الانجاز  </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>الملفات المسجلة</h3>
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

                            <div class="col-lg-3">
                            <label>الكاتب المحلف</label>
                               <select class="form-control" name="tabclerc" >
                                <option>الكاتب المحلف</option>
                                <?php 
                                    
                                    $query = "SELECT * FROM clerc";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)):; ?>
                                      <option value="<?php echo $row[1];?>"><?php echo "$row[1]";?> </option>}
                                  <?php endwhile; ?>
                              </select>
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
                                            <th>رقم التنفيذ </th>
                                            <th>رقم الملف</th>
                                            <th>حكم عدد </th>
                                            <th>طالب الاجراء</th>
											<th>النائب عنه</th>
                                            <th> المنفذ عليه</th>
											<th>العنوان</th>
                                            <th>الكاتب المحلف</th>
                                            <th>المفوض القاضائي </th>
											<th>اختيارات</th>
                                            
                                        </tr>
                                    </thead>

															<?php
						

                        $NbrCol = 100000;
                        // requête
                        $query = 'SELECT * FROM tanfid WHERE donne!=1';
                        $result = mysqli_query($conn,$query);;
                        // -------------------------------------------------------      
                          while($val = $result->fetch_assoc())
                        { 
                            echo '<tr class="info">';
						   echo '<td>';
							// ------------------------------------------
							// AFFICHAGE des DONNEES de la fiche
						   echo $val['tanregGen'];echo '</td>';
						   echo '<td>';
                           echo $val['tanregPre'];echo '</td>';
                           echo '<td>';
						   echo $val['tantrubunal'];echo '</td>';
						   echo '<td>';
						   echo $val['tangenre'];echo '</td>';
						   echo '<td>';
						   echo $val['tannum'];echo '</td>';
						   echo '<td>';
						   echo $val['tannumdoss'];echo '</td>';
						   echo '<td>';
						   echo $val['tannumh'];echo '</td>';
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
						   echo $val['tanhuissier'];echo '</td>';
						   echo '<td>';
						   echo '<input type="checkbox" class="form-control" name="donne[]" value="'.$val['idtan'].'"/>';echo '</td>';
						   
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
        $(document).ready(function (){
        var table = $('#dataTables-example').DataTable({
        dom: 'lrtip',
                                
        });
                                        
        $('#table-filter').on('change', function(){
        table.search(this.value).draw();   
        });
        });
    </script>

</body>

</html>
<?php 
if(isset($_POST['envoyer']))
    {
 if(!empty($_POST['donne'])) {
    $counter = 0;

        foreach($_POST['donne'] as $value){
        $counter = $counter+1;
       
    
            $query = "UPDATE tanfid SET donne=1 WHERE idtan = $value";
            mysqli_query($conn,$query);
            $query2 = "UPDATE tanfid SET num_donne=NOW() WHERE idtan = $value";
            mysqli_query($conn,$query2);
              
        }
        $num_donne =  $num_donne + 1;
          header('Location: tanburencour.php?counter='.$counter.'');

    }

   
    }

 ?>