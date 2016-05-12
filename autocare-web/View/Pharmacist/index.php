<?php include'../header.php';?>
<?php
//session_start();
//if(!isset($_SESSION['username']))
//{
////    include '../login.php';}
//    die();
//}

//if($_GET['id'])
//{
//    $lid=$_GET['id'];
    echo "<a href='ph_profile.php?uid=$lid&lid=$lid'>Profile</a><br/>";
    echo "<a href='add_medicine.php'>Add Medicine</a><br/>";
    echo "<a href='view_medicine.php'>View Medicine</a><br/>";
//    echo "<a href='../../Controller/p_prescription_controller.php?lid=$lid'>Add Prescription</a><br/>";
//}
?>
<?php include'../footer.php';?>