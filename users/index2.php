<?php

include ('connexion.php');
mysql_query("SET NAMES 'UTF8';");
mysql_query("SET CHARACTER SET 'UTF8';");


    session_start();

    if (!isset($_SESSION['luser'])) {
        echo "";
    }
    else {
        $now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION['expire']) {
            session_destroy();
            echo " انتهاء صلحية الاستخدام <a href='http://localhost/HUISSIER/index.php'>الدخولا</a>";
        }
        else { //Starting this else one [else1]

            //From here all HTML coding can be done -->
            
                echo "Welcome";
    
                    echo $_SESSION['luser'];
                    echo "<a href='http://localhost/HUISSIER/users/deconnextion.php'>الخروج</a>";
                
            

        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>المفوض القضائي</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/rtl/bootstrap.min.css" rel="stylesheet">
    
    <!-- not use this in ltr -->
    <link href="css/rtl/bootstrap.rtl.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/rtl/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome/fontawesome.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style media="printer">
      .noprint * {
          display:none;
      }
      body {
    visibility: hidden;
}
.printthis {
    visibility: visible;
}
  </style>
<script type="text/javascript">
    
function imprimer(sectionAimprimer) {
      var printContents = document.getElementById(sectionAimprimer).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
function imprimer(sectionAimprimer1) {
      var printContents = document.getElementById(sectionAimprimer1).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>
</script>
</head>

<body style="font-family:tahoma;">

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
            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                 <a class="dropdown-toggle" data-toggle="dropdown" href="#"> الجلسات المتأخرة  
                    <b style="width: 40px; height: 40px; color: #fff; background-color: #ff0000; border-radius: 50%; font-size: 14px">
                        <?php 
                            $dateretard = date('Y-m-d' , strtotime('+ 5 days'));
                            $dateretard9 = date('Y-m-d' , strtotime('+ 20 days'));
                            $query56 = "SELECT COUNT(idtab) as idtab FROM tabligh WHERE donne = 0 AND tabgenre = 'جلسة' AND tabdatejalsa BETWEEN '$dateretard' AND '$dateretard9' ";
                            $result56 = mysqli_query($conn,$query56);
                            $val56 = mysqli_fetch_assoc($result56);
                            echo '<Fonts>'.$val56['idtab'].'</Fonts>';

                            ?></b> </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                               <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ت الجلسة  </th>
                                            <th>رقم الملف</th>
                                            <th>ك المحلف </th>
                                           
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            
                            
                            $dateretard = date('Y-m-d' , strtotime('+ 1 days'));
                            $dateretard9 = date('Y-m-d' , strtotime('+ 20 days'));

                            $NbrCol = 100000;
                            // requête
                            $query55 = "SELECT * FROM tabligh WHERE donne = 0 AND tabdatejalsa BETWEEN '$dateretard' AND '$dateretard9' ";
                            $result55 = mysqli_query($conn,$query55);;
                            // -------------------------------------------------------      
                             // while($val55 = $result55->fetch_assoc())
                            while($val55=mysqli_fetch_assoc($result55))
                            {
                                if($val55['tabreqGen'] == "" && $val55['tabreqEcr'] == "" && $val55['tabdatetabligh'] == "" ){
                                    $dateretard2 = date('Y-m-d' , strtotime('+ 0 days'));
                                    $dateretard3 = date('Y-m-d' , strtotime('+ 5 days'));
                                    $dateretard4 = date('Y-m-d' , strtotime('+ 10 days'));
                                    $dateretard5 = date('Y-m-d' , strtotime('+ 15 days'));
                                    if(($val55['tabdatejalsa'] > $dateretard2) && ($val55['tabdatejalsa'] <= $dateretard3)){
                                 echo '<tr class="danger">';                
                                   //
                                   echo '<td>'; echo $val55['tabdatejalsa'];echo '</td>';
                                   echo '<td>'; echo $val55['tabnumdoss'];echo '</td>';
                                   echo '<td>'; echo $val55['tabclerc'];echo '</td>';
                                   echo '</tr>'; 
                                    }
                                    else if(($val55['tabdatejalsa'] > $dateretard3) && ($val55['tabdatejalsa'] <= $dateretard4)){
                                 echo '<tr class="warning">';                
                                   //
                                   echo '<td>'; echo $val55['tabdatejalsa'];echo '</td>';
                                   echo '<td>'; echo $val55['tabnumdoss'];echo '</td>';
                                   echo '<td>'; echo $val55['tabclerc'];echo '</td>';
                                   echo '</tr>'; 
                                    }
                                    else if(($val55['tabdatejalsa'] > $dateretard4) && ($val55['tabdatejalsa'] <= $dateretard5)){
                                 echo '<tr class="success">';                
                                   //
                                   echo '<td>'; echo $val55['tabdatejalsa'];echo '</td>';
                                   echo '<td>'; echo $val55['tabnumdoss'];echo '</td>';
                                   echo '<td>'; echo $val55['tabclerc'];echo '</td>';
                                   echo '</tr>'; 
                                    }
                                    else{
                                 echo '<tr class="info">';                
                                   //
                                   echo '<td>'; echo $val55['tabdatejalsa'];echo '</td>';
                                   echo '<td>'; echo $val55['tabnumdoss'];echo '</td>';
                                   echo '<td>'; echo $val55['tabclerc'];echo '</td>';
                                   echo '</tr>'; 
                                    }
                                }
                            }
                            ?> 
                            </tbody>
                        </table>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" href="deconnexion.php">
                         الخروج</a>
                    
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
			
			 <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <img src="images/logo_KJM.png" style="width: 50%; height: 50%; margin: 15px 55px 20px 0px" >
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> الإدارة </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> تسجيل  <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="enregistrehuissier.php"><i class="fa fa-dashboard fa-fw"></i>تسجيل  مفوض قضائي </a></li>
                                <li><a href="enregistreclerc.php"><i class="fa fa-dashboard fa-fw"></i>إضافة كاتب محلف  </a></li>
                                
                                <li><a href="enregistreavoca.php"><i class="fa fa-dashboard fa-fw"></i>إضافة  محامي  </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> البحث  <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="tabrecherche.php">-  التبليغ</a>
                                </li>
                                <li><a href="tanrecherche.php">- التنفيذ </a>
                                </li>
                                <li><a href="mkhrecherche.php">-  المختلف  </a>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-wrench fa-briefcase"></i>+ التنفيذ<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="#"><i class="fa fa-wrench fa-briefcase"></i>+ ملفات التنفيذات <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="enregistretan.php">- تسجيل الملف </a>
                                        </li>
                                        <li>
                                            <a href="tandoc.php">- ذمج  الوثيقة  </a>
                                        </li>
                                        <li>
                                            <a href="tanbureau.php">- قصد الانجاز </a>
                                        </li>
                                        <li>
                                            <a href="tanencour.php">- طور الانجاز </a>
                                        </li>
                                        <li>
                                            <a href="tantadmin.php">- ملفات قصد  التضمين </a>
                                        </li>
                                        <li>
                                            <a href="tanfine.php">- مآل ملفات التنفيذ</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-wrench"></i>+  الحجز التنفيذي  <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                 <li>
                                                    <a href="tanhajztan.php">- الحجز التنفيذي  </a>
                                                </li>
                                                <li>
                                                    <a href="tanlistepvhjztan.php">-  طلب تعيين خبير  </a>
                                                </li>
                                                <li>
                                                    <a href="tanlisterapexp.php">- تقرير الخبير  </a>
                                                </li>
                                                <li>
                                                    <a href="tanlisteexp.php">- تعين تاريخ البيع   </a>
                                                </li>
                                                <li>
                                                    <a href="tanlistevente.php">- عملية البيع  </a>
                                                </li>
                                                <li>
                                                    <a href="tanlisteventeok.php">- محضر الأداء</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="tandateliste.php"> المنجزة قصد الارسال </a>
                                        </li>
                                        
                                        <li>
                                            <a href="tansave.php">- الحفظ </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                            
                                <li><a href="#"><i class="fa fa-wrench fa-briefcase"></i>+ التنفيذ المختلف  <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                    <a href="enregistremokhtlf.php">- تسجيل  التنفيذ المختلف </a>
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
                                    <a href="suiviemokhtlf.php">- مآل الملف  </a>
                                </li>
                                <li>
                                    <a href="suiviemokhtlf.php">- المنجزة قصد  الإرسال  </a>
                                </li>
                                <li>
                                    <a href="savemokhtlf.php">- الحفظ </a>
                                </li>
                               </ul>
                           </li>
                            </ul>
                            <!-- /.nav-second-level -->
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
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>الشركات (معاينة مجردة) <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="steenregistre.php"> تسجيل  المعيانات </a>
                                </li>
                                <li>
                                    <a href="stebureau.php"> لائحة المعاينات المنجزة  </a>
                                </li>
                            </ul>
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
                    <h1 class="page-header">الإدارة</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">التنفيذ </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge"><?php $query20 = 'SELECT COUNT(*) as idtan FROM tanfid WHERE donne=0';
                        $result20 = mysqli_query($conn,$query20);
                        $var20 = mysqli_fetch_assoc($result20);
                        echo $var20['idtan']; ?></div>
                                    <h4>الاجراءات الواردة</h4>
                                </div>
                            </div>
                        </div>
                        <a href="tanbureau.php">
                            <div class="panel-footer">
                                <span class="pull-left">التفاصيل</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge"><?php $query21 = 'SELECT COUNT(*) as idtan FROM tanfid WHERE donne=1 and encour=0';
                        $result21 = mysqli_query($conn,$query21);
                        $var21 = mysqli_fetch_assoc($result21);
                        echo $var21['idtan']; ?></div>
                                    <h4>طور الإنجاز</h4>
                                </div>
                            </div>
                        </div>
                        <a href="tanencour.php">
                            <div class="panel-footer">
                                <span class="pull-left">التفاصيل</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge"><?php $query22 = 'SELECT COUNT(*) as idtan FROM tanfid WHERE donne=1 and encour=1 and tandatetabligh!=0';
                        $result22 = mysqli_query($conn,$query22);
                        $var22 = mysqli_fetch_assoc($result22);
                        echo $var22['idtan']; ?></div>
                                    <h4>الإجراءات المنجزة</h4>
                                </div>
                            </div>
                        </div>
                        <a href="finietab.php">
                            <div class="panel-footer">
                                <span class="pull-left">التفاصيل</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge"><?php $query23 = 'SELECT COUNT(*) as idtan FROM tanfid WHERE donne=1 and encour=1 and monjaz=0';
                        $result23 = mysqli_query($conn,$query23);
                        $var23 = mysqli_fetch_assoc($result23);
                        echo $var23['idtan']; ?></div>
                                    <h4>قصد الارسال</h4>
                                </div>
                            </div>
                        </div>
                        <a href="datelisttabligh.php">
                            <div class="panel-footer">
                                <span class="pull-left">التفاصيل</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">التنفيذ المختلف </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge"><?php $query31 = 'SELECT COUNT(*) as idm FROM mokhtalif WHERE donne=0';
                        $result31 = mysqli_query($conn,$query31);
                        $var31 = mysqli_fetch_assoc($result31);
                        echo $var31['idm']; ?></div>
                                    <h4>الاجراءات الواردة</h4>
                                </div>
                            </div>
                        </div>
                        <a href="bureaumokhtlf.php">
                            <div class="panel-footer">
                                <span class="pull-left">التفاصيل</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge"><?php $query32 = 'SELECT COUNT(*) as idm FROM mokhtalif WHERE donne=1 and encour=0';
                        $result32 = mysqli_query($conn,$query32);
                        $var32 = mysqli_fetch_assoc($result32);
                        echo $var32['idm']; ?></div>
                                    <h4>طور الإنجاز</h4>
                                </div>
                            </div>
                        </div>
                        <a href="encourmokhtlf.php">
                            <div class="panel-footer">
                                <span class="pull-left">التفاصيل</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge"><?php $query33 = 'SELECT COUNT(*) as idm FROM mokhtalif WHERE donne=1 and encour=1 and mdatetab!=0';
                        $result33 = mysqli_query($conn,$query33);
                        $var33 = mysqli_fetch_assoc($result33);
                        echo $var33['idm']; ?></div>
                                    <h4>الإجراءات المنجزة</h4>
                                </div>
                            </div>
                        </div>
                        <a href="finiemokhtlf.php">
                            <div class="panel-footer">
                                <span class="pull-left">التفاصيل</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge"><?php $query34 = 'SELECT COUNT(*) as idm FROM mokhtalif WHERE donne=1 and encour=1 and monjaz=0';
                        $result34 = mysqli_query($conn,$query34);
                        $var34 = mysqli_fetch_assoc($result34);
                        echo $var34['idm']; ?></div>
                                    <h4>قصد الارسال</h4>
                                </div>
                            </div>
                        </div>
                        <a href="datelistmokhtalif.php">
                            <div class="panel-footer">
                                <span class="pull-left">التفاصيل</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">التبليغ </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge"><?php $query1 = 'SELECT COUNT(*) as idtab FROM tabligh WHERE donne=0';
                        $result1 = mysqli_query($conn,$query1);
                        $var1 = mysqli_fetch_assoc($result1);
                        echo $var1['idtab']; ?></div>
                                    <h4>الاجراءات الواردة</h4>
                                </div>
                            </div>
                        </div>
                        <a href="bureautab.php">
                            <div class="panel-footer">
                                <span class="pull-left">التفاصيل</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge"><?php $query2 = 'SELECT COUNT(*) as idtab FROM tabligh WHERE donne=1 and encour=0';
                        $result2 = mysqli_query($conn,$query2);
                        $var2 = mysqli_fetch_assoc($result2);
                        echo $var2['idtab']; ?></div>
                                    <h4>طور الإنجاز</h4>
                                </div>
                            </div>
                        </div>
                        <a href="encourtab.php">
                            <div class="panel-footer">
                                <span class="pull-left">التفاصيل</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge"><?php $query3 = 'SELECT COUNT(*) as idtab FROM tabligh WHERE donne=1 and encour=1 and tabdatetabligh!=0';
                        $result3 = mysqli_query($conn,$query3);
                        $var3 = mysqli_fetch_assoc($result3);
                        echo $var3['idtab']; ?></div>
                                    <h4>الإجراءات المنجزة</h4>
                                </div>
                            </div>
                        </div>
                        <a href="finietab.php">
                            <div class="panel-footer">
                                <span class="pull-left">التفاصيل</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge"><?php $query4 = 'SELECT COUNT(*) as idtab FROM tabligh WHERE donne=1 and encour=1 and monjaz=0';
                        $result4 = mysqli_query($conn,$query4);
                        $var4 = mysqli_fetch_assoc($result4);
                        echo $var4['idtab']; ?></div>
                                    <h4>قصد الارسال</h4>
                                </div>
                            </div>
                        </div>
                        <a href="datelisttabligh.php">
                            <div class="panel-footer">
                                <span class="pull-left">التفاصيل</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            
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

    <!-- Morris Charts JavaScript -->
    <script src="js/raphael/raphael.min.js"></script>
    <script src="js/morris/morris.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
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
