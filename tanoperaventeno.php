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

    <title> المفوض القضائي - تضمين  الإجراءات </title>

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
<style type="text/css">
    h4{
        font-family: arial;
        color:#D9534F;
        font-weight: bold;
        font-size: 22px;
    }
</style>
</head>

<body style="font-family:tahoma;">
<?php
 
  //r�cup�ration de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $id  = $_GET["idtan"] ;
  
 
  //requ�te SQL:
  $sql = "SELECT *
            FROM tanfid
	    WHERE idtan = ".$id ;
 
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
               <a class="navbar-brand" href="index.php">مكتب المفوض القضائي  <b>   </b> </a>
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
                    <h1 class="page-header">تبيلغ محضر الحجز للمحجوز عليه  </h1>
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
                                         
                                            <select class="form-control" name="tantrubunal"  >
                                                
                                                <option value="<?php echo $result->tantrubunal ;?>"><?php echo $result->tantrubunal; ?></option>
												
												
                                                
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
                                    <select class="form-control" name="tangenre"  >                         
                                <option value="<?php echo $result->tangenre ;?>"><?php echo $result->tangenre; ?></option>  
                                </select></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                            <label>رقم التنفيذ </label>
                                            <input class="form-control" name="tannum" value="<?php echo($result->tannum) ;?>" >
                                        </div>
                                    </div>
                                <div class="col-md-3">
									<div class="form-group">
                                            <label>رقم الملف</label>
                                            <input class="form-control" name="tannumdoss" value="<?php echo($result->tannumdoss) ;?>" >
                                        </div>
									</div>
                                <div class="col-md-3">
									<div class="form-group" style="margin-left:15px">
                                            <label>تاريخ الجلسة</label>
                                            <input class="form-control" type="date" name="tandateh" value="<?php echo($result->tandateh) ;?>" >
                                        </div>
									</div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
									<div class="form-group" style="margin-right:15px">
                                            <label>طالب الاجراء</label>
                                            <input class="form-control" placeholder="طالب الاجراء" name="tanavec" value="<?php echo($result->tanavec) ;?>">
                                        </div>
									</div>
                                <div class="col-md-6">
									<div class="form-group" style="margin-left:15px">
                                            <label>النائب عنه</label>
                                            <input class="form-control" name="tanavoca" value="<?php echo($result->tanavoca) ;?>" >
                                        </div>
									</div>
								</div>
                            </div>
							<div class="row">
                                <div class="col-md-6">
									<div class="form-group">
                                            <label>المبلغ إليه</label>
                                            <input class="form-control" name="tancontre" value="<?php echo($result->tancontre) ;?>">
                                        </div>
									</div>
                                <div class="col-md-6">
									<div class="form-group">
                                            <label>عنوانه</label>
                                            <input class="form-control" name="tanadress" value="<?php echo($result->tanadress) ;?>">
                                        </div>
									</div>
								</div>
                            </div>
							<div class="row">
                                <div class="col-md-6">
									<div class="form-group" style="margin-right:15px">
                                            <label>المفوض القضائي</label>
                                            <select class="form-control" name="tansource">
                                                <option value="<?php echo($result->tanhuissier) ;?>"><?php echo($result->tanhuissier) ;?></option>
                                                
                                            </select>
                                        </div>
									</div>
                                <div class="col-md-4">
									<!--<div class="form-group">
                                            <label>المفوض القضائي</label>
                                            <select class="form-control">
                                                <option>المفوض القضائي</option>
                                                <option>ذ/ عبد العزيز كندر</option>
												<option>مفوض قضائي آخر</option>
                                                
                                                
                                            </select>
                                        </div>-->
									</div>
                                <div class="col-md-6">
									<div class="form-group" style="margin-left:15px">
                                            <label>الكاتب المحلف</label>
                                            <select class="form-control" name="tanclerc">
												<option value="<?php echo($result->tanclerc) ;?>"><?php echo($result->tanclerc) ;?></option>
																			

                                            </select>
                                        </div>
									</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:15px">
                                    <h4>اجراءات التبليغ </h4>
                                    <hr/>
                                </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-3">
                                        <div class="form-group" style="margin-right:15px">
                                            <label>الملاحظة العامة</label>
                                            <select class="form-control" name="tanreqGen">
                                                
                                                <option value="<?php echo($result->tanreqGen) ;?>"><?php echo($result->tanreqGen) ;?></option>
                                                
                                            </select>
                                        </div>
                                    </div>
                             
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>تاريخ التبليغ</label>
                                    <input type="date" name="tandatetabligh" class="form-control" value="<?php echo($result->tandatetabligh) ;?>">
                                        
                                    </div>
                                </div>

							
                            <div class="col-md-6">
									<div class="form-group" style="margin-left:15px">
                                            <label>الملاحظة الخطية</label>
                                            <textarea class="form-control" rows="2" name="tanreqEcr" value="<?php echo($result->tanreqEcr) ;?>"><?php echo($result->tanreqEcr) ;?></textarea>
                                        </div>
									</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:15px">
                                    <h4>اجراءات  التنفيذ  </h4>
                                    <hr/>
                                </div>
                                </div>
                            </div>	
                            <div class="row">
                                <div class="col-md-3">
                                        <div class="form-group" style="margin-right:15px">
                                            <label>نوع المحضر </label>
                                            <select class="form-control" name="tanpv">
                                                
                                                <option value="<?php echo($result->tanpv) ;?>"><?php echo($result->tanpv) ;?></option>
                                                
                                                
                                            </select>
                                        </div>
                                    </div>
                             
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>تاريخ  تحرير محضر  الحجز </label>
                                    <input type="date" name="tandatepvhajz" class="form-control"  value="<?php echo($result->tandatepvhajz) ;?>">
                                        
                                    </div>
                                </div>

                            
                            <div class="col-md-6">
                                    <div class="form-group" style="margin-left:15px">
                                            <label>ملاحظة الحجز التنفيذي</label>
                                            <textarea class="form-control" rows="2" name="tanreqpv" value="<?php echo($result->tanreqpv) ;?>"><?php echo($result->tanreqpv) ;?></textarea>
                                        </div>
                                    </div>
                            </div>  		
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:15px">
                                    <h4> الحجز  </h4>
                                    <hr/>
                                </div>
                                </div>
                            </div>		
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-right:15px">
                                        <label>تاريخ  تبليغ  محضر الحجز </label>
                                    <input type="date" name="tanpvdatehajz" class="form-control" value="<?php echo($result->tanpvdatehajz) ;?>">
                                        
                                    </div>
                                </div>

                            
                            <div class="col-md-6">
                                <div class="form-group" style="margin-left:15px">
                                    <label>ملاحظة محضر الحجز </label>
                                    <textarea class="form-control" rows="2" name="tanreqpvhajz"value="<?php echo($result->tanreqpvhajz) ;?>"><?php echo($result->tanreqpvhajz) ;?>   </textarea>
                                </div>
                            </div>
                           
                             
                            </div>   
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:15px">
                                    <h4>اجراءات  الخبير </h4>
                                    <hr/>
                                </div>
                                </div>
                            </div>               
                            <div class="row">
                                 <div class="col-md-3" >
                                <div class="form-group" style="margin-right:15px">
                                <label>تاريخ  طلب تعيين خبير</label>

                                <input type="date" name="tandatedem" class="form-control" value="<?php echo($result->tandatedem) ;?>">
                            </div>
                            </div>
                                <div class="col-md-3" >
                                <div class="form-group" style="margin-right:15px">
                                <label>تاريخ تقرير الخبير</label>
                                <input type="date" name="tandaterap" class="form-control" value="<?php echo($result->tandaterap) ;?>">
                                        
                                </div>
                                </div>
                                <div class="col-md-3">
                                    
                                </div>

                            
                            
                            <div class="col-md-3" >
                                <div class="form-group">
                                <label>موديل "ج" في حالة شركة </label><br/>
                                موديل ج  Modele G
                                <input type="checkbox" name="tanmodelG" class="form-control" value="<?php echo($result->tanmodelG); ?> ">
                                        </div>
                            </div>
                             
                            </div>   
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:15px">
                                    <h4>اجراءات  البيع </h4>
                                    <hr/>
                                </div>
                                </div>
                            </div>               
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-right:15px">
                                        <label>تاريخ البيع </label>
                                    <input type="date" name="tandatevente" class="form-control"  value="<?php echo($result->tandatevente) ;?>">
                                        
                                    </div>
                                </div>
                                <div class="col-md-3" >
                                
                                </div>
                                <div class="col-md-3">
                                    
                                </div>

                            
                            
                            <div class="col-md-3" >
                                
                                        
                            </div>
                             <div class="col-md-3" >
                                                                       
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:15px">
                                    <h4> عدم حضور المتزايددين    </h4>
                                    <hr/>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-right:15px">
                                        <label>نوع المحضر  </label>
                                        <input type="text" name="tangenrepv" class="form-control">
                                    </div>
                                    <div class="form-group" style="margin-right:15px">

                                        <label>تعيين تاريخ  جديد للبيع </label>
                                    <input type="date" name="tandatevente1" class="form-control" >
                                        
                                    </div>
                                    
                                </div>
                                <div class="col-md-3" >
                                <div class="form-group" style="margin-right:15px">
                                <label>تاريخ  التحرير</label>
                                <input type="date" name="tandatepvvente" class="form-control">
                                        
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:15px">
                                        <label>مضمون  المحضر  </label>
                                    <textarea name="tanreqpvvente" class="form-control" rows="2"></textarea>
                                        
                                    </div>
                                </div>

                            
                            
                            
                             
                            </div>    
							<div class="row">
							<div class="col-lg-6">
							 
							
                                <input type="submit" class="btn btn-outline btn-success btn-lg" style="margin:15px; width:50%" value="تضمين  التنفيذ " name="tadmin">
                                
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

$idtan = $_REQUEST['idtan'];
$tandatepvvente = strtotime($_POST['tandatepvvente']);
$new_date = date('Y-m-d', $tandatepvvente);
$tandatevente1 = strtotime($_POST['tandatevente1']);
$new_date1 = date('Y-m-d', $tandatevente1);
$tangenrepv = $_POST['tangenrepv'];
$tanreqpvvente = $_POST['tanreqpvvente'];

$sql = "UPDATE tanfid SET tandatepvvente = '$new_date', tandatevente1 = '$new_date1', tangenrepv = '$tangenrepv', tanreqpvvente = '$tanreqpvvente'  WHERE idtan='$idtan'";
   
   if (mysqli_query($conn, $sql)) {
        
     header('Location: tanlistevente1.php');
   } else {
        
      echo "Error updating record: " . mysqli_error($conn);
   }
   mysqli_close($conn);
    }

?>