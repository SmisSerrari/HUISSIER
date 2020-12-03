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

    <title> المفوض القضائي - تسجيل الإجراءات </title>

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
  $id  = $_GET["idmkh"] ;
  
 
  //requ�te SQL:
  $sql = "SELECT *
            FROM moukhtalif
	    WHERE idmkh = ".$id ;
 
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
                    <h1 class="page-header">تعديل الاجراءات</h1>
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
                                         
                                            <select class="form-control" name="mkhtribunal"  >
                                                
                                                <option value="<?php echo $result->mkhtribunal ;?>"><?php echo $result->mkhtribunal; ?></option>
                                                
                                                
                                                
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
                                    <select class="form-control" name="mkhgenre"  >                         
                                <option value="<?php echo $result->mkhgenre ;?>"><?php echo $result->mkhgenre; ?></option>  
                                </select></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                            <label>رقم التنفيذ</label>
                                            <input class="form-control" name="mkhnumtan" value="<?php echo($result->mkhnumtan) ;?>" >
                                        </div>
                                    </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                            <label>رقم الملف</label>
                                            <input class="form-control" name="mkhnumdoss" value="<?php echo($result->mkhnumdoss) ;?>" >
                                        </div>
                                    </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:15px">
                                            <label>تاريخ السحب</label>
                                            <input class="form-control" type="date" value="<?php echo($result->mkhdatee) ;?>" >
                                        </div>
                                    </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:15px">
                                            <label>طالب الاجراء</label>
                                            <input class="form-control" name="mkhavec" value="<?php echo($result->mkhavec) ;?>">
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:15px">
                                            <label>النائب عنه</label>
                                            <input class="form-control" placeholder="النائب عنه" name="mkhavoca" value="<?php echo($result->mkhavoca) ;?>" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label>المبلغ إليه</label>
                                            <input class="form-control" name="mkhcontre" value="<?php echo($result->mkhcontre) ;?>">
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label>عنوانه</label>
                                            <input class="form-control" placeholder="عنوانه" name="mkhadress" value="<?php echo($result->mkhadress) ;?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:15px">
                                            <label>المفوض القضائي</label>
                                            <select class="form-control">
                                                <option value="<?php echo($result->mkhhuiss) ;?>"><?php echo($result->mkhhuiss) ;?></option>
                                                
                                                
                                                
                                            </select>
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:15px">
                                            <label>الكاتب المحلف</label>
                                            <select class="form-control" name="mkhclerc">
                                                <option value="<?php echo($result->mkhclerc) ;?>"><?php echo($result->mkhclerc) ;?></option>
                                                                            

                                            </select>

                                        </div>
									</div>
                            </div>
							<div class="row">
                                <div class="col-md-3">
                                        <div class="form-group" style="margin-right:15px">
                                            <label>الملاحظة العامة</label>
                                            <select class="form-control" name="mkhreqgen">
                                                <option >الملاحظة العامة</option>
                                                <option value="<?php echo($result->mkhreqgen) ;?>"><?php echo($result->mkhreqgen) ;?></option>
                                               
                                            </select>
                                        </div>
                                    </div>
                             
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>تاريخ التبليغ</label>
                                    <input type="date" name="mkhdatet" class="form-control" value="<?php echo($result->mkhdatet) ;?>">
                                        
                                    </div>
                                </div>

							
                            <div class="col-md-6">
								<div class="form-group" style="margin-left:15px">
                                       <label>الملاحظة الخطية</label>
                                            <textarea class="form-control" rows="1" name="mkhreqecr"><?php echo($result->mkhreqecr) ;?></textarea>
                                        </div>
									</div>
                            </div>
							<div class="row">				
							 <div class="col-md-3">
                                    <div class="form-group" style="margin-right:15px">
                                        <label>تاريخ التنفيذ</label>
                                    <input type="date" name="mkhdatetan" class="form-control">
                                        
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-right:15px">
                                        <label>المفوض القضائي المنفذ </label>
                                        <select class="form-control" name="mkhtanhuis">
                                            <option>المفوض القضائي</option>
                                            <?php 
                                        $query2 = "SELECT * FROM huissiers";          
                                        $result2 = mysqli_query($conn, $query2);
                                    while ($row2 = mysqli_fetch_array($result2)):; ?>
                                         
                                      <option value="<?php echo $row2[1];?>"><?php echo "$row2[1]";?> </option>
                                  <?php endwhile; ?></select>
                                        
                                    </div>
                                </div>

							
                            <div class="col-md-6">
								<div class="form-group" style="margin-left:15px">
                                       <label>الملاحظة الخطية لمأل التنفيذ</label>
                                            <textarea class="form-control" rows="2" name="mkhreqecrtan"></textarea>
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

$idmkh = $_REQUEST['idmkh'];
$mkhdatetan = strtotime($_POST['mkhdatetan']);
$new_date = date('Y-m-d', $mkhdatetan);
$mkhreqecrtan = $_POST['mkhreqecrtan'];
$mkhtanhuis = $_POST['mkhtanhuis'];

$sql = "UPDATE moukhtalif SET mkhdatetan = '$new_date', mkhreqecrtan = '$mkhreqecrtan', mkhtanhuis='$mkhtanhuis' WHERE idmkh='$idmkh'";
   
   if (mysqli_query($conn, $sql)) {
        
     header('Location: suiviemokhtlf.php');
   } else {
        
      echo "Error updating record: " . mysqli_error($conn);
   }
   mysqli_close($conn);
    }

?>