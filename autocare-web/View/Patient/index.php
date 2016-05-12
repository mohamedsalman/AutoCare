<?php include'../header.php';?>
<?php
//session_start();
//if(!isset($_SESSION['username']))
//{
//    include '../login.php';
//    die();
//}

//if($_GET['id'])
//{
    //$_GET['id']
    $lid=5002;
    
    echo "<a href='patient_profile.php?uid=$lid&lid=$lid'>Profile</a><br/>";
    echo "<a href='relatives.php?lid=$lid'>View Relatives</a><br/>";
//    echo "<a href='../../Controller/p_prescription_controller.php?lid=$lid'>Add Prescription</a><br/>";
//}
?>
<?php include'../footer.php';?>