
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

    <title> المفوض القضائي  - تسجيل الدخول</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/rtl/bootstrap.min.css" rel="stylesheet">
    
    <!-- not use this in ltr -->
    <link href="css/rtl/bootstrap.rtl.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/rtl/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="font-family: tahoma,arial">

    <div class="container">
        <div class="row">
            
            <div class="col-md-4 col-md-offset-4">
                <img src="images/logo_KJM.png" style="width: 50%; height: 50%; margin: 50px 100px 50px 0px" >
                <div class="login-panel panel panel-default" style="margin-top: -30px">
                    <div class="panel-heading">
                        <h3 class="panel-title">تسجيل الدخول</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="اسم المستخدم" name="pseudo" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="كلمة السر" name="password" type="password" >
                                </div>
                                
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="الدخول">
                            </fieldset>
                                
                        </form>
                    </div>
                </div>
                    
                
            </div>
        </div>
    </div>

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
<?php 

include ('connexion.php');
session_start();
if(isset($_SESSION['idlog']))
{
    header("Location: index2.php");
    exit;
}

if(isset($_POST['submit']))
{
    if(!empty($_POST['pseudo']) && !empty($_POST['password']))
    {
        $_POST['pseudo'] = htmlentities($_POST['pseudo'],ENT_QUOTES);
        $_POST['password'] = htmlentities($_POST['password'],ENT_QUOTES);
        $sql =  "SELECT * fROM user WHERE pseudo ='".$_POST['pseudo']."'";
        $res = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($res);
        if(!empty($_POST['pseudo']))
        {
            $_POST['password'] = md5($_POST['password']);
            if ($data['password'] == $_POST['password']) 
            {
                 $_SESSION['pseudo'] = $_POST['pseudo'];
                 $_SESSION['idlog'] = $data['idlog'];
                 header("Location: index2.php");
            }
            else echo '<font color="red">Mot de passe incorrect</font></br>';    
        }else echo '<font color="red">Login incorrect</font></br>';  
    }else echo '<font color="red">Mot de passe ou login manquant</font></br>';  
}


?>