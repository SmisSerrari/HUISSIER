<?php

include ('connexion.php');
mysql_query("SET NAMES 'UTF8';");
mysql_query("SET CHARACTER SET 'UTF8';");


//$query ="SELECT count(idtab) FROM tabligh WHERE donne!=0";
//$result = mysqli_query($conn , $query); 
	
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
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> الاحصائيات  <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="statistiquehuissier.php">- أحصاء المفوض القضائي  </a>
                                </li>
                                <li><a href="statistiqueclercdate.php">- إحصاء المكتب  </a>
                                </li>
                                <li><a href="statistiqueclercreq.php">- إحصاء الكتاب المحلفون   </a>
                                </li>
                            </ul>
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
                                        <a href="bureautan.php">- قصد الانجاز </a>
                                        </li>
                                        <li>
                                            <a href="tanencour.php">- طور الانجاز </a>
                                        </li>
                                        <li>
                                            <a href="tanfin.php">- منجزة قصد التضمين </a>
                                        </li>
                                        <li>
                                            <a href="tansave.php">- الحفظ </a>
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
                                    <a href="encourtan.php">- طور الانجاز </a>
                                </li>
                                <li>
                                    <a href="fintan.php">- منجزة قصد التضمين </a>
                                </li>
                                <li>
                                    <a href="savetan.php">- الحفظ </a>
                                </li>
                               </ul></li>
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
            <div class="row">
                <div class="col-lg-6">
                   
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i><b>&nbsp; التبليغات</b>
                            <div class="pull-left">
                                <div class="btn-group">
                                
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                            
                                    <div class="table-responsive">
                                       
                                        <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>الكاتب المحلف</th>
                                            <th> الملاحظة العامة</th>
                                            <th>عدد الاجراءات</th>
                                            <th>عدد النقط </th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>

						<?php
                       // $query1 = 'SELECT COUNT(*) as idtab FROM tablighat';
                        //$result1 = mysqli_query($conn,$query1);
                        //$var = mysqli_fetch_assoc($result1);
                        //echo $var['idtab'];

                        $NbrCol = 100000;
                        // requête
                        $query5 = 'SELECT tabreqGen,COUNT(*),tabclerc FROM tabligh WHERE tabclerc="عادل كواد" GROUP BY tabreqGen';
                        $result5 = mysqli_query($conn,$query5);
                        
                        

                        // -------------------------------------------------------      
                            while($val5 = mysqli_fetch_assoc($result5))
                        { 
						   
							// ------------------------------------------
							// AFFICHAGE des DONNEES de la fiche
						   echo '<tr>';				   
						   //
						   echo '<td>'; echo $val5['tabclerc'];echo '</td>';
                           echo '<td>'; echo $val5['tabreqGen'];echo '</td>';
                           echo '<td>'; echo $val5['COUNT(*)'];echo '</td>';
                           if($val5['tabreqGen']=="بلغ"){
                           echo '<td>';
                            echo $val5['COUNT(*)']*3;

                            echo '</td>';
                        }
                            else if ($val5['tabreqGen']=="الرفض"){
                            echo '<td>';
                            echo $val5['COUNT(*)']*1;

                            echo '</td>';

                            }else if($val5['tabreqGen']=="مغلق"){
                                echo '<td>';
                            echo $val5['COUNT(*)']*(-1);

                            echo '</td>';
                            }else if(($val5['tabreqGen']=="مجهول بالعنوان")|| ($val5['tabreqGen']=="انتقل من العنوان")|| ($val5['tabreqGen']=="العنوان ناقض")|| ($val5['tabreqGen']=="لم أعثر على العنوان")|| ($val5['tabreqGen']=="مغلق باستمرار")){
                                echo '<td>';
                            echo $val5['COUNT(*)']*(0);

                            echo '</td>';
                        }
						   //echo '<td>';
						   //echo '<input type="checkbox" name="donne[]" value="'.$val['idtab'].'"/>';echo '</td>';
						   
						    echo '</tr>';
						
						}
						?>

                                 
                                </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                            </div>
                                <div class="row">
                                  <div class="col-lg-12">
                            
                                    <div class="table-responsive">
                                       
                                        <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>الكاتب المحلف</th>
                                            <th> الملاحظة العامة</th>
                                            <th>عدد الاجراءات</th>
                                            <th>عدد النقط </th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>

                        <?php
                       // $query1 = 'SELECT COUNT(*) as idtab FROM tablighat';
                        //$result1 = mysqli_query($conn,$query1);
                        //$var = mysqli_fetch_assoc($result1);
                        //echo $var['idtab'];

                        $NbrCol = 100000;
                        // requête
                        $query5 = 'SELECT tabreqGen,COUNT(*),tabclerc FROM tabligh WHERE tabclerc="أمين أكويف" GROUP BY tabreqGen';
                        $result5 = mysqli_query($conn,$query5);
                        
                        

                        // -------------------------------------------------------      
                            while($val5 = mysqli_fetch_assoc($result5))
                        { 
                           
                            // ------------------------------------------
                            // AFFICHAGE des DONNEES de la fiche
                           echo '<tr>';                
                           //
                           echo '<td>'; echo $val5['tabclerc'];echo '</td>';
                           echo '<td>'; echo $val5['tabreqGen'];echo '</td>';
                           echo '<td>'; echo $val5['COUNT(*)'];echo '</td>';
                           if($val5['tabreqGen']=="بلغ"){
                           echo '<td>';
                            echo $val5['COUNT(*)']*3;

                            echo '</td>';
                        }
                            else if ($val5['tabreqGen']=="الرفض"){
                            echo '<td>';
                            echo $val5['COUNT(*)']*1;

                            echo '</td>';

                            }else if($val5['tabreqGen']=="مغلق"){
                                echo '<td>';
                            echo $val5['COUNT(*)']*(-1);

                            echo '</td>';
                            }else if(($val5['tabreqGen']=="مجهول بالعنوان")|| ($val5['tabreqGen']=="انتقل من العنوان")|| ($val5['tabreqGen']=="العنوان ناقض")|| ($val5['tabreqGen']=="لم أعثر على العنوان")|| ($val5['tabreqGen']=="مغلق باستمرار")){
                                echo '<td>';
                            echo $val5['COUNT(*)']*(0);

                            echo '</td>';
                        }
                           //echo '<td>';
                           //echo '<input type="checkbox" name="donne[]" value="'.$val['idtab'].'"/>';echo '</td>';
                           
                            echo '</tr>';
                        
                        }
                        ?>

                                 
                                </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                             
                            </div>
                                     <div class="row">
                                       <div class="col-lg-12">
                                 
                                         <div class="table-responsive">
                                            
                                             <table class="table table-striped table-bordered table-hover">
                                         <thead>
                                             <tr>
                                                 <th>الكاتب المحلف</th>
                                                 <th> الملاحظة العامة</th>
                                                 <th>عدد الاجراءات</th>
                                                 <th>عدد النقط </th>
                                                 
                                                 
                                                 
                                             </tr>
                                         </thead>

                             <?php
                            // $query1 = 'SELECT COUNT(*) as idtab FROM tablighat';
                             //$result1 = mysqli_query($conn,$query1);
                             //$var = mysqli_fetch_assoc($result1);
                             //echo $var['idtab'];

                             $NbrCol = 100000;
                             // requête
                             $query5 = 'SELECT tabreqGen,COUNT(*),tabclerc FROM tabligh WHERE tabclerc="عبد الإله بوجردة" GROUP BY tabreqGen';
                             $result5 = mysqli_query($conn,$query5);
                             
                             

                             // -------------------------------------------------------      
                                 while($val5 = mysqli_fetch_assoc($result5))
                             { 
                                
                                 // ------------------------------------------
                                 // AFFICHAGE des DONNEES de la fiche
                                echo '<tr>';                
                                //
                                echo '<td>'; echo $val5['tabclerc'];echo '</td>';
                                echo '<td>'; echo $val5['tabreqGen'];echo '</td>';
                                echo '<td>'; echo $val5['COUNT(*)'];echo '</td>';
                                if($val5['tabreqGen']=="بلغ"){
                                echo '<td>';
                                 echo $val5['COUNT(*)']*3;

                                 echo '</td>';
                             }
                                 else if ($val5['tabreqGen']=="الرفض"){
                                 echo '<td>';
                                 echo $val5['COUNT(*)']*1;

                                 echo '</td>';

                                 }else if($val5['tabreqGen']=="مغلق"){
                                     echo '<td>';
                                 echo $val5['COUNT(*)']*(-1);

                                 echo '</td>';
                                 }else if(($val5['tabreqGen']=="مجهول بالعنوان")|| ($val5['tabreqGen']=="انتقل من العنوان")|| ($val5['tabreqGen']=="العنوان ناقض")|| ($val5['tabreqGen']=="لم أعثر على العنوان")|| ($val5['tabreqGen']=="مغلق باستمرار")){
                                     echo '<td>';
                                 echo $val5['COUNT(*)']*(0);

                                 echo '</td>';
                             }
                                //echo '<td>';
                                //echo '<input type="checkbox" name="donne[]" value="'.$val['idtab'].'"/>';echo '</td>';
                                
                                 echo '</tr>';
                             
                             }
                             ?>

                                      
                                     </table>
                                         </div>
                                         <!-- /.table-responsive -->
                                     </div>
                                     <!-- /.col-lg-4 (nested) -->
                                  
                                 </div>
                                  <div class="row">
                                  <div class="col-lg-12">
                            
                                    <div class="table-responsive">
                                       
                                        <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>الكاتب المحلف</th>
                                            <th> الملاحظة العامة</th>
                                            <th>عدد الاجراءات</th>
                                            <th>عدد النقط </th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>

                        <?php
                       // $query1 = 'SELECT COUNT(*) as idtab FROM tablighat';
                        //$result1 = mysqli_query($conn,$query1);
                        //$var = mysqli_fetch_assoc($result1);
                        //echo $var['idtab'];

                        $NbrCol = 100000;
                        // requête
                        $query5 = 'SELECT tabreqGen,COUNT(*),tabclerc FROM tabligh WHERE tabclerc="مصطفى" GROUP BY tabreqGen';
                        $result5 = mysqli_query($conn,$query5);
                        
                        

                        // -------------------------------------------------------      
                            while($val5 = mysqli_fetch_assoc($result5))
                        { 
                           
                            // ------------------------------------------
                            // AFFICHAGE des DONNEES de la fiche
                           echo '<tr>';                
                           //
                           echo '<td>'; echo $val5['tabclerc'];echo '</td>';
                           echo '<td>'; echo $val5['tabreqGen'];echo '</td>';
                           echo '<td>'; echo $val5['COUNT(*)'];echo '</td>';
                           if($val5['tabreqGen']=="بلغ"){
                           echo '<td>';
                            echo $val5['COUNT(*)']*3;

                            echo '</td>';
                        }
                            else if ($val5['tabreqGen']=="الرفض"){
                            echo '<td>';
                            echo $val5['COUNT(*)']*1;

                            echo '</td>';

                            }else if($val5['tabreqGen']=="مغلق"){
                                echo '<td>';
                            echo $val5['COUNT(*)']*(-1);

                            echo '</td>';
                            }else if(($val5['tabreqGen']=="مجهول بالعنوان")|| ($val5['tabreqGen']=="انتقل من العنوان")|| ($val5['tabreqGen']=="العنوان ناقض")|| ($val5['tabreqGen']=="لم أعثر على العنوان")|| ($val5['tabreqGen']=="مغلق باستمرار")){
                                echo '<td>';
                            echo $val5['COUNT(*)']*(0);

                            echo '</td>';
                        }
                           //echo '<td>';
                           //echo '<input type="checkbox" name="donne[]" value="'.$val['idtab'].'"/>';echo '</td>';
                           
                            echo '</tr>';
                        
                        }
                        ?>

                                 
                                </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                             
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                       
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>المرجع</th>
                                            <th>المحكمة</th>
                                            <th> نوع الاجراء</th>
                                            
                                            
                                        </tr>
                                    </thead>

                        <?php
                       // $query1 = 'SELECT COUNT(*) as idtab FROM tablighat';
                        //$result1 = mysqli_query($conn,$query1);
                        //$var = mysqli_fetch_assoc($result1);
                        //echo $var['idtab'];

                        $NbrCol = 100000;
                        // requête
                        $query5 = 'SELECT tabclerc,COUNT(*),tabdatetabligh FROM tabligh GROUP BY tabdatetabligh';
                        $result5 = mysqli_query($conn,$query5);
                        
                        

                        // -------------------------------------------------------      
                            while($val5 = mysqli_fetch_assoc($result5))
                        { 
                           
                            // ------------------------------------------
                            // AFFICHAGE des DONNEES de la fiche
                           echo '<tr>';                
                           //
                           echo '<td>'; echo $val5['tabclerc'];echo '</td>';
                           echo '<td>'; echo $val5['COUNT(*)'];echo '</td>';
                           echo '<td>'; echo $val5['tabdatetabligh'];echo '</td>';
                           //echo '<td>';
                           //echo '<input type="checkbox" name="donne[]" value="'.$val['idtab'].'"/>';echo '</td>';
                           
                            echo '</tr>';
                        
                        }
                        ?>

                                 
                                </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                                               
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> التبليغات المنجزة 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            <div id='sectionAimprimer1'>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th> نوع الاجراء </th>
                                            <th>رقم الملف</th>
                                            
                                            <th>الملاحظة العامة </th>
                                            <th>تاريخ التبليغ </th>
                                            <th> الكاتب المحلف </th>
                                            
                                        </tr>
                                    </thead>

                                                            <?php
                        

                        $NbrCol = 100000;
                        // requête
                        $query = 'SELECT * FROM tabligh WHERE encour=1 and tabdatetabligh!=0 ORDER BY tabdatetabligh DESC LIMIT 18';
                        $result = mysqli_query($conn,$query);;
                        // -------------------------------------------------------      
                          while($val = $result->fetch_assoc())
                        { 
                           echo '<td>';
                            // ---------------------------------- --------
                            // AFFICHAGE des DONNEES de la fiche
                           echo $val['tabgenre'];echo '</td>';
                           echo '<td>';
                           echo $val['tabnumdoss'];echo '</td>';
                           echo '<td>';
                           echo $val['tabreqGen'];echo '</td>';
                           echo '<td>';
                           echo $val['tabdatetabligh'];echo '</td>';
                           echo '<td>';
                           echo $val['tabclerc'];echo '</td>';                          
                           echo '</tr>';
                        }
                        ?> 
                                </table>
                            </div>
                            </div><button class="btn-lg btn-success " onClick="imprimer('sectionAimprimer1')">طبع </button>
                            <!-- /.list-group -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <!--<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                            <a href="#" class="btn btn-default btn-block">View Details</a>
                        </div>
                        <!-- /.panel-body 
                    </div>-->
                    <!-- /.panel -->
                    <!--<div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i> Chat
                            <div class="btn-group pull-left">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown pull-left">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i> Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i> Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw"></i> Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        
                        <!-- /.panel-body -->
                        
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
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
