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

    <title>المفوض القضائي - تسجيل  المفوض القضائي </title>

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
                    <h1 class="page-header">تسجيل  المفوض القضائي </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

											<form role="form" name="ajouter" action="" method="POST">

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><b> معلومات عن  الاستاذ   </b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                
                                    
                                        <div class="panel-body">
										<div class="col-md-4">
										
							</div>
                            
                                <div class="col-md-4">
									
							        <div class="form-group" style="margin-bottom:15px">
                                            <label> اسم  و نسب الأستاذ  </label>
                                            <input class="form-control" type="text" placeholder="النسب
                                        " name="huisnom">
                                    </div>
                                    <div class="form-group" style="margin-bottom:15px">
                                            <label>تاريخ  التسجيل </label>
                                            <input class="form-control" type="date" placeholder="تاريخ  التسجيل " name="huisdate">
                                    </div>
                                    <div class="form-group" style="margin-bottom:15px">
                                            <label> رقم البطاقة الوطنية  </label>
                                            <input class="form-control" type="text" placeholder="رقم البطاقة الوطنية  
                                        " name="huiscin">
                                    </div>
                                </div>
                                <div class="col-md-4">
									
									</div>
                                
                            </div>
                            		

							<div class="row">

							<div class="col-lg-6">
							 
							
                                <input type="submit" class="btn btn-outline btn-success btn-lg" name="submit" style="margin:15px; width:50%" value="تسجيل ">
                                
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

    $huisnom = $_POST["huisnom"];
  
    $huisdate = $_POST["huisdate"];
    $huiscin = $_POST["huiscin"];
    
    

$query = "INSERT INTO huissiers ( huisnom, huisdate, huiscin )
            VALUES ( '$huisnom' , '$huisdate', '$huiscin') ";

   if (mysqli_query($conn, $query)) {
      echo '<center><b> تمت إضافة  المفوض القضائي  الاستاذ '.$huisnom.' </b></center>';
     
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


