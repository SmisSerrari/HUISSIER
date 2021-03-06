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
                                <li><a href="tabrecherchefilter.php">-  التبليغ</a>
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
                           <!-- <div class="row">
                        <div class="col-lg-3">
                            
                            <input type="submit" name="filter" value="filter" class="btn btn-success btn-lg" style="margin:15px; width:50%"  >
                                
                                
                               
                            </div>
                        </div>-->

                            <div class="row">
                        <div class="col-lg-3">
                            
                            <label> المحكمة  </label>
                                    <select class="form-control" name="tabtrubunal" id="table-filter">
                                        <option ></option>
                                                
                                        <option value="محكمة الاستئناف التجارية">محكمة الاستئناف التجارية</option>
                                        <option value="المحكمة الابتدائية المدنية">المحكمة الابتدائية المدنية</option>
                                        <option value="المحكمة التجارية">المحكمة التجارية</option>
                                        <option value="محكمة COMANAV">محكمة COMANAV</option>
                                        <option value="المحكمة الادارية">المحكمة الادارية</option>
                                        <option value="المحكمة الاجتماعية">المحكمة الاجتماعية</option>
                                    </select>
                                
                                
                               
                            </div>
                            <div class="col-lg-3">
                            <label>  المحامي</label>
                               <select class="form-control" name="tabavoca" id="table-filter1">
                                    <option value=""></option>
                                        <?php 
                                        $query1 = "SELECT * FROM avocas";
                                    $result1 = mysqli_query($conn, $query1);
                                       
                                    while ($row1 = mysqli_fetch_array($result1)):; ?>
                                      <option value="<?php echo $row1[1];?>"><?php echo "$row1[1]";?> </option>
                                  <?php endwhile; ?>
                                            </select>
                            </div>
                            <div class="col-lg-3">
                            <label> الكاتب المحلف</label>
                               <select class="form-control" name="tabclerc" id="table-filter2">
                                    <option value=""></option>
                                        <?php 
                                        $query2 = "SELECT * FROM clerc";
                                    $result2 = mysqli_query($conn, $query2);
                                       
                                    while ($row2 = mysqli_fetch_array($result2)):; ?>
                                      <option value="<?php echo $row2[1];?>"><?php echo "$row2[1]";?> </option>
                                  <?php endwhile; ?>
                              </select>
                            </div>  
                            

                            <div class="col-lg-3">
                                <label>الملاحظة العامة</label>
                                    <select class="form-control" name="tabreqGen" id="table-filter3">   
                                                <option ></option>
                                                <option value="بلغ">بلغ</option>
                                                <option value="الرفض">الرفض</option>
                                                <option value="مغلق">مغلق</option>
                                                <option value="مغلق باستمرار">مغلق باستمرار</option>
                                                <option value="مجهول بالعنوان">مجهول بالعنوان</option>
                                                <option value="انتقل من العنوان">انتقل من العنوان</option>
                                                <option value="لم يعثر على العنوان">لم يعثر على العنوان</option>
                                                <option value="العنوان ناقص">العنوان ناقص</option>
                                 </select>
                            </div>
                            </div>
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
      $query3 = "SELECT * FROM tabligh";

    $result3 =mysqli_query($conn,$query3);
    
        
    while($val= $result3 -> fetch_assoc())
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
                                }
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
        $('#table-filter1').on('change', function(){
        table.search(this.value).draw();   
        });$('#table-filter2').on('change', function(){
        table.search(this.value).draw();   
        });$('#table-filter3').on('change', function(){
        table.search(this.value).draw();   
        });

        });
    </script>

</body>

</html>

<?php

?>