<?php include'../header.php';?>
<?php
//session_start();
//if(!isset($_SESSION['username']))
//{
//    include '../login.php';
//    die();
//}
//
if($_GET['id'])
{
    $lid=$_GET['id'];
    
    echo "<a href='doctor_profile.php?uid=$lid&lid=$lid'>Profile</a><br/>";
    echo "<a href='list_patient.php?lid=$lid'>View Patients</a><br/>";
    echo "<a href='patient_prescription.php?lid=$lid'>Add Prescription</a><br/>";
}
?>
<?php include'../footer.php';?>



