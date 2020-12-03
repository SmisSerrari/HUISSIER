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

    <title>المفوض القضائي - تسجيل التنفيذات المختلفة </title>
	
	

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
               <a class="navbar-brand" href="index.php">مكنب المفوض القضائي الاستاذ <b>مراد خضار </b> </a>
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
                    <h1 class="page-header">تسجيل  ملفات التنفيذ المحتلف </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
			<div class="col-lg-4">
                                    <P><h1>المحكمة</h1></P>
									</div>
			<div class="col-lg-4">
											<form role="form" method="post" action="">

                                        <div class="form-group">
                                         
                                            <select class="form-control" name="mtrubunal" required>
												 <option>المحكمة</option>
                                                <option value="محكمة الاستئناف التجارية">محكمة الاستئناف التجارية</option>
												<option value="المحكمة الابتدائية المدنية">المحكمة الابتدائية المدنية</option>
                                                <option value="المحكمة التجارية">المحكمة التجارية</option>
												<option value="محكمة COMANAV">محكمة COMANAV</option>
												<option value="المحكمة الادارية">المحكمة الادارية</option>
                                                <option value="المحكمة الاجتماعية">المحكمة الاجتماعية</option>
												
                                                
                                            </select>
                                        </div>
										
										
								</div>
				
								
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            تسجيل ملفات التنفيذ
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                
                                    
                                        <div class="panel-body">
										<div class="col-lg-4">
                            <h3>نوع الاجراء</h3>
                            </div>
							<div class="col-lg-4"><p>
                                <select class="form-control" name="mgenre" required>
                                <option></option>
                                <option value="عرض عيني "> عرض عيني </option>
                                <option value="معاينة ">معاينة </option>
                                <option value="معاينة و استجواب">معاينة و استجواب</option>
                                <option value="معاينة مجردة">معاينة مجردة</option>   
								<option value="حجز تحفظي على منقولات"> حجز تحفظي على منقولات  </option> 
                                <option value="حجز تحفظي على أ أصل تجاري">حجز تحفظي على أ أصل تجاري</option>
                                <option value="حجز تحفظي على عقار">حجز تحفظي على عقار</option>
                                <option value="حجز تحفظي على ناقلة ">حجز تحفظي على ناقلة</option>
                                <option value="حجز تحفظي على شاحنة ">حجز تحفظي على شاحنة</option>
                                <option value="حجز تحفظي على  باخرة  ">حجز تحفظي على باخرة</option>
								<option value="حجز تحفظي على  حصص ">حجز تحفظي على حصص</option>
                                <option value="حجز تحفظي على  أسهم ">حجز تحفظي على  أسهم</option>
                                <option value="حجز  وصفي   ">حجز  وصفي</option>
                                                
                                            </select>
							</p>
                            </div></div>
							<div class="row">
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-right:15px">
                                        <label>السجل العام </label>
                                        <input class="form-control" placeholder="مرجعنا" name="mregGen" required>
                                        </div>
                                    </div>
                                <div class="col-md-4">
									<div class="form-group">
                                        <label>السجل الخاض</label>
                                        <input class="form-control" plaleftceholder="رقم التنفيذ" name="mregPre">
                                        </div>
									</div>
                                
                                
									<div class="col-md-4">
									<div class="form-group" style="margin-left:15px">
                                            <label>تاريخ  السحب</label>
                                            <input type="date" class="form-control" name="mdatee" required>
                                        </div>
									</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-right:15px">
                                        <label>رقم التنفيذ </label>
                                        <input class="form-control" placeholder="رقم التنفيذ" name="mnumtan" required>
                                        </div>
                                    </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>رقم الملف</label>
                                        <input class="form-control" plaleftceholder="رقم الملف" name="mnumdoss" required>
                                        </div>
                                    </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-left:15px">
                                        <label>رقم الحكم او الأمر</label>
                                        <input class="form-control" placeholder="رقم الحكم او الأمر" name="mnumh">
                                        </div>
                                    </div>
                                
                                    
                            </div>
                            <div class="row">
                                <div class="col-md-6">
									<div class="form-group" style="margin-right:15px">
                                            <label>طالب الاجراء</label>
                                            <input class="form-control" placeholder="طالب الاجراء" name="mavec" required>
                                        </div>
									</div>
                                <div class="col-md-6">
									<div class="form-group" style="margin-left:15px">
                                            <label>النائب عنه</label>
                                            <input class="form-control" placeholder="النائب عنه " name="mavoca" autofocus>
                                            
                                        </div>
									</div>
							</div>
							<div class="row">
                                <div class="col-md-6">
									<div class="form-group" style="margin-right:15px">
                                            <label>المبلغ إليه 1</label>
                                            <input class="form-control" placeholder="المبلغ إليه" name="mcontre" required>
                                        </div>
									</div>
                                <div class="col-md-6">
									<div class="form-group" style="margin-left:15px">
                                            <label>العنوان 1</label>
                                            <input class="form-control" placeholder="عنوانه" name="madress"required>
                                        </div>
									</div>
								</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label>المبلغ إليه 2</label>
                                            <input class="form-control" placeholder="المبلغ إليه" name="mcontre1">
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label>العنوان 2</label>
                                            <input class="form-control" placeholder="عنوانه" name="madress1">
                                        </div>
                                    </div>
                                </div>
                            
							<div class="row">
                                <div class="col-md-3">
                                        <div class="form-group" style="margin-right:15px">
                                            <label>المفوض القضائي</label>
                                            <input class="form-control" placeholder="النائب عنه " name="huissier" autofocus>
                                        </div>
                                </div>
                                <!--<div class="col-md-3">
									<div class="form-group" style="margin-right:15px">
                                            <label>الكاتب المحلف</label>
                                            <input class="form-control" placeholder="النائب عنه " name="mclerc" autofocus>
                                        </div>
                                    </div>-->
                                        
										
                            </div>
							
							<div class="row">
							<div class="col-lg-6">
							 
							
                                <input type="submit" name="submit" class="btn btn-outline btn-success btn-lg" style="margin:15px; width:50%"  value="تسجيل الاجراءات">
                                
								</div>
								<div class="col-lg-6">
							
                                <input type="reset" class="btn btn-outline btn-warning btn-lg" style="margin:15px; width:50%" value="مسح المعلومات">


                            
                            </div>
							</form>
                            </div>
                            <!-- /.row (nested) -->
	<?php

  //connection au serveur:
include ('connexion.php');

if(isset($_POST["submit"]))
{
    

                $mtrubunal = $_POST['mtrubunal'];
                $mregGen = $_POST['mregGen'];
                $mregPre = $_POST['mregPre'];
                $mgenre = $_POST['mgenre'];
                $mnumtan = $_POST['mnumtan'];
                $mnumdoss = $_POST['mnumdoss'];
                $mnumh = $_POST['mnumh'];
                $mdatee = $_POST['mdatee'];
                $mavec = $_POST['mavec'];
                $mavoca = $_POST['mavoca'];
                $mcontre = $_POST['mcontre'];
                $madress = $_POST['madress'];
                $mcontre1 = $_POST['mcontre1'];
                $madress1 = $_POST['madress1'];
                $huissier = $_POST['huissier'];

    $query = "INSERT INTO mokhtalif ( mtrubunal, mregGen, mregPre, mgenre, mnumtan, mnumdoss, mnumh, mdatee, mavec, mavoca, mcontre, madress, mcontre1, madress1, huissier) VALUES ('$mtrubunal','$mregGen','$mregPre','$mgenre','$mnumtan','$mnumdoss','$mnumh','$mdatee','$mavec','$mavoca','$mcontre','$madress','$mcontre1','$madress1','$huissier')";
    
    $result = mysqli_query($conn,$query);
    if (mysqli_query($conn, $query)) {
         echo '<center><b> تم تسجيل  الملف  بنجاح  </b><center>';

         
    } 

    else 

    {
      echo "Error: " . $query . "" . mysqli_error($conn);
      
    }
    mysqli_close($conn);
}
      
?>
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
