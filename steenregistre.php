<?php 

include ('connexion.php');




 $query1 = "SELECT * FROM avocas";          
$result1 = mysqli_query($conn, $query1);


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>المفوض القضائي - تسجيل  المعاينات</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/rtl/bootstrap.min.css" rel="stylesheet">
    
    <!-- not use this in ltr -->
    <link href="css/rtl/bootstrap.rtl.css" rel="stylesheet">
	<link href="style_huissier.css" rel="stylesheet">

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
                    <h1 class="page-header">تسجيل  المعاينات المجردة</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
			

											<form role="form" name="ajouter" action="" method="POST">

                                    
										
								
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><b>نوع الاجراء</b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                
                                    
                                        <div class="panel-body">
                                            <div class="col-md-4">
                                    <div class="form-group" >
                                            <label>مرجعنا</label>
                                            <input class="form-control" placeholder="مرجعنا " name="steref">
                                        </div>
                                    </div>
                            
                                
									<div class="col-md-4">
									<div class="form-group">
                                        <label>نوع الاجراء</label>
                        				<select name="stegenre" class="form-control">
                                            <option>نوع الاجراء</option>
                                            <option value="معاينة مجاردة">معاينة مجردة</option>      
										</select>
                                    </div>
        							</div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label>المفوض القضائي</label>
                                        <select class="form-control" name="stehuis">
                                         <option> المفوض القضائي  <option>
                                        <?php 
                                        $query1 = "SELECT * FROM huissiers";          
                                        $result1 = mysqli_query($conn, $query1);
                                    while ($row1 = mysqli_fetch_array($result1)):; ?>
                                      <option value="<?php echo $row1[1];?>"><?php echo "$row1[1]";?> </option>
                                  <?php endwhile; ?>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                <div class="row">
                                <div class="col-md-4">
									<div class="form-group" style="margin-right:15px">
                                        <label>طالبة الجراء</label>
                                        <input class="form-control" placeholder="طالبة الإجراء" name="stenom">
                                        </div>
									</div>
                                    <div class="col-md-4">
                                    <div class="form-group" >
                                        <label>اسم الشركة</label>
                                        <input class="form-control" placeholder="اسم الشركة" name="stecontre">
                                        </div>
                                    </div>
							     
                                <div class="col-md-4">
									<div class="form-group" style="margin-left:15px">
                                            <label>تاريخ  الانجاز</label>
                                            <input class="form-control" type="date" placeholder="2020/02/20" name="steDateope">
                                        </div>
									</div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-right:15px">
                                        <label>رقم الشاحنة 1</label>
                                        <input class="form-control" placeholder="رقم الشاحنة" name="stemat1">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group" >
                                        <label>اسم سائق  الشاحنة 1</label>
                                        <input class="form-control" placeholder="اسم السائق " name="stechauf1">
                                        </div>
                                    </div>
                                 
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-left:15px">
                                            <label>رقم البطاقة الوطنية </label>
                                            <input class="form-control" type="text" placeholder="AA123456" name="stecin1">
                                        </div>
                                    </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
									<div class="form-group" style="margin-right:15px">
                                            <label>نوع البضاعة </label>
                                            <input class="form-control" placeholder="نوع البضاعة" name="steproduit1">
                                        </div>
									</div>
                                    <div class="col-md-6">
                                    <div class="form-group" style="margin-left:15px">
                                            <label>الوزن </label>
                                            <input class="form-control" placeholder="الوزن" name="stepoids1">
                                        </div>
                                    </div>
                                
                            </div>                          
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-right:15px">
                                        <label>رقم الشاحنة 2</label>
                                        <input class="form-control" placeholder="رقم الشاحنة" name="stemat2">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group" >
                                        <label>اسم سائق  الشاحنة 2</label>
                                        <input class="form-control" placeholder="اسم السائق " name="stechauf2">
                                        </div>
                                    </div>
                                 
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-left:15px">
                                            <label>رقم البطاقة الوطنية </label>
                                            <input class="form-control" type="text" placeholder="AA123456" name="stecin2">
                                        </div>
                                    </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:15px">
                                            <label>نوع البضاعة </label>
                                            <input class="form-control" placeholder="نوع البضاعة" name="steproduit2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group" style="margin-left:15px">
                                            <label>الوزن </label>
                                            <input class="form-control" placeholder="الوزن" name="stepoids2">
                                        </div>
                                    </div>
                                
                            </div> 
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-right:15px">
                                        <label>رقم الشاحنة 3</label>
                                        <input class="form-control" placeholder="رقم الشاحنة" name="stemat3">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group" >
                                        <label>اسم سائق  الشاحنة 3</label>
                                        <input class="form-control" placeholder="اسم السائق " name="stechauf3">
                                        </div>
                                    </div>
                                 
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-left:15px">
                                            <label>رقم البطاقة الوطنية </label>
                                            <input class="form-control" type="text" placeholder="AA123456" name="stecin3">
                                        </div>
                                    </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:15px">
                                            <label>نوع البضاعة </label>
                                            <input class="form-control" placeholder="نوع البضاعة" name="steproduit3">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group" style="margin-left:15px">
                                            <label>الوزن </label>
                                            <input class="form-control" placeholder="الوزن" name="stepoids3">
                                        </div>
                                    </div>
                                
                            </div> 
							<div class="row">
							<div class="col-lg-6">
							 
							
                                <input type="submit" class="btn btn-outline btn-success btn-lg" name="submit" style="margin:15px; width:50%" value="تسجيل  المعاينة">
                                
								</div>
								<div class="col-lg-6">
							
                                <input type="reset" class="btn btn-outline btn-warning btn-lg" style="margin:15px; width:50%" value="مسح المعلومات">


                            </div>
							</form>
                            </div>

<?php 

  //connection au serveur:




include ('connexion.php');

if(isset($_POST["submit"]))
{
    
    $steref = $_POST["steref"];
    $stegenre = $_POST["stegenre"];
    $stehuis = $_POST["stehuis"];
    $stenom = $_POST["stenom"];
    $stecontre = $_POST["stecontre"];
    $steDateope = $_POST["steDateope"];
    $stemat1 = $_POST["stemat1"];
    $stechauf1 = $_POST["stechauf1"];
    $stecin1 = $_POST["stecin1"];
    $steproduit1 = $_POST["steproduit1"];
    $stepoids1 = $_POST["stepoids1"];
    $stemat2 = $_POST["stemat2"];
    $stechauf2 = $_POST["stechauf2"];
    $stecin2 = $_POST["stecin2"];
    $steproduit2 = $_POST["steproduit2"];
    $stepoids2 = $_POST["stepoids2"];
    $stemat3 = $_POST["stemat3"];
    $stechauf3 = $_POST["stechauf3"];
    $stecin3 = $_POST["stecin3"];
    $steproduit3 = $_POST["steproduit3"];
    $stepoids3 = $_POST["stepoids3"];
    

$query = "INSERT INTO societe ( steref,stegenre,stehuis, stenom, stecontre, steDateope, stemat1, stechauf1, stecin1, steproduit1, stepoids1, stemat2, stechauf2, stecin2, steproduit2, stepoids2, stemat3, stechauf3, stecin3, steproduit3, stepoids3 )
            VALUES ( '$steref' , '$stegenre' , '$stehuis' , '$stenom' , '$stecontre', '$steDateope' , '$stemat1' , '$stechauf1', '$stecin1', '$steproduit1', '$stepoids1', '$stemat2' , '$stechauf2', '$stecin2', '$steproduit2', '$stepoids2', '$stemat3' , '$stechauf3', '$stecin3', '$steproduit3', '$stepoids3') ";

   if (mysqli_query($conn, $query)) {
      echo '<center><b> تم تسجيل المعاينة بنجاح  </b><center>';
     
    } 

    else 

    {
      echo "Error: " . $query . "" . mysqli_error($conn);
      echo "non";
    }
      mysqli_close($conn);
}

?>
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

</body>

</html>



