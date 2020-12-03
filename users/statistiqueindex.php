<!--<div class="row">
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
                            echo '<tr>';
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
            </div>-->