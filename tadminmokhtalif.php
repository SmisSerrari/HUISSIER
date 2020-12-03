<?php 
include ('connexion.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> المفوض القضائي - تضمين الاجراءات </title>

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

<body style="font-family:tahoma;">
<?php
 
  //r�cup�ration de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $idm  = isset($_GET["idm"]) ;
  
 
  //requ�te SQL:
  $sql = "SELECT *
            FROM mokhtalif
	    WHERE idm = ".$idm ;
 
  //ex�cution de la requ�te:
  $query = mysqli_query( $conn, $sql ) ;
 
  //affichage des donn�es:
  if( $result = mysqli_fetch_object( $query ) )
  {
  ?>

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
                <a class="navbar-brand" href="index.html">مكنب المفوض القضائي الاستاذ <b>مراد خضار </b> </a>
            </div>
            <!-- /.navbar-header -->

            
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
                                <li><a href="mrecherche.php">-  المختلف  </a>
                                </li>
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
                    <h1 class="page-header">تضمين الاجراءات</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
			<div class="col-lg-6">
                                    <h1>المحكمة</h1>
									</div>
			<div class="col-lg-6">

											<form role="form" name="ajouter" action="" method="POST">
										
                                        <div class="form-group">
                                         
                                            <select class="form-control" name="mtrubunal" >
                                                
                                                <option value="<?php echo $result->mtrubunal ;?>"><?php echo $result->mtrubunal; ?></option>
												
												
                                                
                                            </select>
                                        </div>
										
								</div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><b>نوع الاجراء</b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                
                                    
                            <div class="panel-body">
                            
                            </div>
							<div class="row">
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-right:15px">
                                    <label>  نوع الاجراء </label>
                                    <select class="form-control" name="mgenre"  >                         
                                <option value="<?php echo $result->mgenre ;?>"><?php echo $result->mgenre; ?></option>  
                                </select></div>
                                </div>
								<div class="col-md-3">
									<div class="form-group">
                                            <label>رقم التنفيذ</label>
                                            <input class="form-control" name="mnumtan" value="<?php echo($result->mnumtan) ;?>" >
                                        </div>
									</div>
                                <div class="col-md-3">
									<div class="form-group">
                                            <label>رقم الملف</label>
                                            <input class="form-control" name="mnumdoss" value="<?php echo($result->mnumdoss) ;?>" >
                                        </div>
									</div>
                                <div class="col-md-3">
									<div class="form-group" style="margin-left:15px">
                                            <label>تاريخ السحب</label>
                                            <input class="form-control" type="date" value="<?php echo($result->mdatee) ;?>" >
                                        </div>
									</div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
									<div class="form-group" style="margin-right:15px">
                                            <label>طالب الاجراء</label>
                                            <input class="form-control" name="mavec" value="<?php echo($result->mavec) ;?>">
                                        </div>
									</div>
                                <div class="col-md-6">
									<div class="form-group" style="margin-left:15px">
                                            <label>النائب عنه</label>
                                            <input class="form-control" placeholder="النائب عنه" name="mavoca" value="<?php echo($result->mavoca) ;?>" >
                                        </div>
									</div>
								</div>
                            </div>
							<div class="row">
                                <div class="col-md-6">
									<div class="form-group">
                                            <label>المبلغ إليه</label>
                                            <input class="form-control" name="mcontre" value="<?php echo($result->mcontre) ;?>">
                                        </div>
									</div>
                                <div class="col-md-6">
									<div class="form-group">
                                            <label>عنوانه</label>
                                            <input class="form-control" placeholder="عنوانه" name="madress" value="<?php echo($result->madress) ;?>">
                                        </div>
									</div>
								</div>
                            </div>
							<div class="row">
                                
                                <div class="col-md-6">
									<div class="form-group" style="margin-right: 15px">
                                            <label>المفوض القضائي</label>
                                            <select class="form-control">
                                                <option value="<?php echo($result->huissier) ;?>"><?php echo($result->huissier) ;?></option>
                                                
                                                
                                                
                                            </select>
                                        </div>
									</div>
                            </div>
							<div class="row">
                                <div class="col-md-3">
                                        <div class="form-group" style="margin-right:15px">
                                            <label>الملاحظة العامة</label>
                                            <select class="form-control" name="mreqgen">
                                                <option >الملاحظة العامة</option>
                                                <option value="بلغ">بلغ</option>
                                                <option value="الرفض">الرفض</option>
                                                <option value="مغلق باستمرار">مغلق باستمرار</option>
                                                <option value="مغلق">مغلق</option>
                                                <option value="مجهول بالعنوان">مجهول بالعنوان</option>
                                                <option value="انتقل من العنوان">انتقل من العنوان</option>
                                                <option value="لم يعثر على العنوان">لم يعثر على العنوان</option>
                                                <option value="العنوان ناقص">العنوان ناقص</option>
                                            </select>
                                        </div>
                                    </div>
                             
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>تاريخ التبليغ</label>
                                    <input type="date" name="mdatet" class="form-control">
                                        
                                    </div>
                                </div>

							
                            <div class="col-md-6">
								<div class="form-group" style="margin-left:15px">
                                       <label>الملاحظة الخطية</label>
                                            <textarea class="form-control" rows="2" name="mreqecr" ></textarea>
                                        </div>
									</div>
                            </div>					

							<div class="row">
							<div class="col-lg-6">
							 
							
                                <input type="submit" class="btn btn-outline btn-success btn-lg" style="margin:15px; width:50%" value="تعديل الاجراء" name="tadmin">
                                
								</div>
								<div class="col-lg-6">
							
                            


                            </div>
							</form>
                            </div>
                            <!-- /.row (nested) -->
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

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
  <?php
  }//fin if 
  ?>
</body>

</html>
<?php

if(isset($_POST['tadmin']))

{

$idm = $_REQUEST['idm'];
$mreqgen = $_POST['mreqgen'];
$mdatetab = strtotime($_POST['mdatetab']);
$new_date = date('Y-m-d', $mdatetab);
$mreqecr = $_POST['mreqecr'];

$sql = "UPDATE mokhtalif SET mdatetab = '$new_date', mreqgen = '$mreqgen', mreqecr = '$mreqecr' WHERE idm='$idm'";
   
   if (mysqli_query($conn, $sql)) {
        
     header('Location: datelistmokhtalif.php');
   } else {
        
      echo "Error updating record: " . mysqli_error($conn);
   }
   mysqli_close($conn);
    }

?>