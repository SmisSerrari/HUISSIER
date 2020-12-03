<?php

include("connexion.php");


if(isset($_POST['submit']))
{   

$date=$_POST['date'];
$h= $_POST['h'];
$m= $_POST['m'];
$s= $_POST['s'];
        //updating the table
$result = mysqli_query($conn, "UPDATE timer SET date='$date' WHERE idtime=1");
$result = mysqli_query($conn, "UPDATE timer SET h='$h' WHERE idtime=1");
$result = mysqli_query($conn, "UPDATE timer SET m='$m' WHERE idtime=1");
$result = mysqli_query($conn, "UPDATE timer SET s='$s' WHERE idtime=1");  
//redirectig to the display page. In our case, 
echo "Timer updated";
}

?>

<head>
	
</head>
<body>
<?php

include ('connexion.php');


$query = "SELECT * FROM timer WHERE idtime = 1";
$result = mysqli_query($conn, $query);
while ($var = mysqli_fetch_array($result)) {
$date = $var['date'];
$h  = $var['h'];
$m = $var['m'];
$s = $var['s'];

echo $date;  echo $h; echo $m;   echo $s;
}

?>

	<form role="form" action="" method="POST">
		<div class="row">
	 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><b> معلومات عن الكاتب  المحلف </b></h4>
                        </div>
  

                        <div class="panel-body">
                            <div class="row">
                                
                                    
                                        <div class="panel-body">
										<div class="col-md-4">
										
							</div>
                            
                                <div class="col-md-4">
									
							        <div class="form-group" style="margin-bottom:15px">
                                            <label> عدد الأيام   </label>
                                            <input class="form-control" type="date" name="date" value="<?php echo $date ?>">
                                    </div>
                                    <div class="form-group" style="margin-bottom:15px">
                                            <label>الساعات</label>
                                            <input class="form-control" type="number" name="h" value="<?php echo $h ?>">
                                    </div>
                                    <div class="form-group" style="margin-bottom:15px">
                                            <label>الدقائق </label>
                                            <input class="form-control" type="number" name="m" value="<?php echo $m ?>">
                                    </div>
                                    <div class="form-group" style="margin-bottom:15px">
                                            <label>الثواني</label>
                                            <input class="form-control" type="number" name="s" value="<?php echo $s ?>">
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


                            
                        </div></div></div></div></div></form></body>
                   

</body>
