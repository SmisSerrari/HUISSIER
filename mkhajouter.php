<?php

  //connection au serveur:
include ('connexion.php');

if(isset($_POST["submit"]))
{
    $mkhtribunal = $_POST['mkhtribunal'];
    $mkhregGen = $_POST['mkhregGen'];
    $mkhregPre = $_POST['mkhregPre'];
    $mkhgenre = $_POST['mkhgenre'];
    $mkhnumtan = $_POST['mkhnumtan'];
    $mkhnumdoss = $_POST['mkhnumdoss'];
    $mkhnumh = $_POST['mkhnumh'];
    $mkhdatee = $_POST['mkhdatee'];
    $mkhavec = $_POST['mkhavec'];
    $mkhavoca = $_POST['mkhavoca'];
    $mkhcontre = $_POST['mkhcontre'];
    $mkhadress = $_POST['mkhadress'];
    $mkhcontre1 = $_POST['mkhcontre1'];
    $mkhadress1 = $_POST['mkhadress1'];
    $mkhhuiss = $_POST['mkhhuiss'];
    $mkhclerc = $_POST['mkhclerc'];

    $query = "INSERT INTO moukhtalif( mkhtribunal, mkhregGen, mkhregPre, mkhgenre, mkhnumtan, mkhnumdoss, mkhnumh, mkhdatee, mkhavec, mkhavoca, mkhcontre, mkhadress, mkhcontre1, mkhadress1, mkhhuiss, mkhclerc) 
        VALUES ('$mkhtribunal','$mkhregGen','$mkhregPre','$mkhgenre','$mkhnumtan','$mkhnumdoss','$mkhnumh',$mkhdatee','$mkhavec','$mkhavoca','$mkhcontre','$mkhadress','$mkhcontre1','$mkhadress1','$mkhhuiss','$mkhclerc')";

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