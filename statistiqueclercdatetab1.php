<?php 
include ('connexion.php');

if(isset($_POST['filter'])){
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $tabclerc = $_POST['tabclerc'];
    $query1 =mysqli_query($conn,"SELECT tabclerc,COUNT(*),tabdatetabligh FROM tabligh WHERE tabclerc = '$tabclerc' AND tabdatetabligh BETWEEN '$from_date' AND '$to_date' GROUP BY tabdatetabligh ");
    
    $count = mysqli_num_rows($query1);

}


?>

<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>المفوض القضائي -  </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/rtl/bootstrap.min.css" rel="stylesheet">
    <link href="css/rtl/jquery.css" rel="stylesheet">
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
                    <h1 class="page-header"> إحصائيات الكتاب المحلفون  </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>احصائيات الكتاب  حسب  تاريخ التبليغ </h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                        <div class="col-lg-3">
                            
                             <input type="submit" name="filter" value="filter" class="btn btn-success btn-lg" style="margin:15px; width:50%"  >
                                
                        </div>
                        <div class="col-lg-3">
                        <label> من  </label>
                        <div>
                        <input type="date" name="from_date" class="form-control" placeholder="من">
                        </div>
                            </div>

                            <div class="col-lg-3">
                            <label> إلى  </label>
                            <div>
                            <input type="date" name="to_date" class="form-control" placeholder="إلى">
                            </div>
                            </div>

                            <div class="col-lg-3">
                            <label>الكاتب المحلف</label>
                               <select class="form-control" name="tabclerc">
                                <option value=""> </option>
                                <?php 
                                    
                                    $query = "SELECT * FROM clerc";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)):; ?>
                                      <option value="<?php echo $row[1];?>"><?php echo "$row[1]";?> </option>}
                                  <?php endwhile; ?>
                              </select>
                            </div>
                            </div>
                            <div id="table-responsive">
                                 <div id='sectionAimprimer1'>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>الكاتب المحلف </th>
                                            <th> تاريخ التبليغ  </th>
                                            <th>عدد الإجراءات</th>

                                        </tr>
                                    </thead>

						<?php
                       
if($count = "0")
{
    echo '<h3>choisir une date</h3>';
}
else
{       
        echo '<CENTER>';
        echo'<h3>    الكاتب المحلف  :  '.$tabclerc.' <h3>';
        echo '<h4>    من  :   '.$from_date.' <h4>';
        echo'<h4>     إلى  :   '.$to_date.' <h4>';
        echo '</CENTER>';
    while($val5=mysqli_fetch_array($query1))
    {

        echo '<tr>';                
                           //
                           echo '<td>'; echo $val5['tabclerc'];echo '</td>';
                           echo '<td>'; echo $val5['tabdatetabligh'];echo '</td>';
                           echo '<td>'; echo $val5['COUNT(*)'];echo '</td>';
                           
                           //echo '<td>';
                           //echo '<input type="checkbox" name="donne[]" value="'.$val['idtab'].'"/>';echo '</td>';
                           
                            echo '</tr>';
                            
    }
}
                          ?>    
                                </table>
                                <button class="btn-lg btn-success " onClick="imprimer('sectionAimprimer1')">طبع </button>
                            </div></div></div></div>
                            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/jquery.min.js"></script>

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
   <!-- <script>
        $(document).ready(function(){
            $.datepicker.setDefaults({
                dateFormat:'yy-mm-dd'
            })
            $(function(){
                $("#from_date").datepicker();
                $("#to_date").datepicker();
            });
            $('#filter').click(function(){
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                if(from_date != '' && to_date !='')
                {
                    $.ajax({
                        url:"filter.php",
                        method:"POST",
                        data:(from_date:from_date, to_date:to_date),
                        success:function(data)
                        {
                            $('#table-responsive').html(data);
                        }


                    });

                }
                else
                {
                    alter("selectionner une date SVP");
                }

            });
        //var table = $('#dataTables-example').DataTable({
        //dom: 'lrtip',
                                
        //});
                                        
        //$('#table-filter').on('change', function(){
        //table.search(this.value).draw();   
        //});
        });
    </script>-->

</body>

</html>
