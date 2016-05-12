<?php include'../header.php';?>
<?php

if(isset($_POST['submit']))
{
    $med_name=$_POST['medicine_name'];

//​{"status":1,"med_info":{"med_id":"2","med_name":"ko7a","med_price":"25","med_adding_date":"2016-05-01 14:15:06","shelf_life":"3","quantity":"20"}}
$json = file_get_contents("http://4gp.comli.com/GP_WebService/view_medicine.php?mid=$med_name") or die("not get contents");
////$json = file_get_contents("localhost:8080/GP_WebService/view_Profile.php?uid=$uid&lid=$lid");

$obj  = json_decode($json, true);
echo $obj['med_info']['med_name'];
echo '<br>';
echo $obj['med_info']['med_price'];
echo '<br>';
echo $obj['med_info']['quantity'];
echo '<br>';
echo $obj['med_info']['shelf_life'];
echo '<br>';
echo $obj['med_info']['med_adding_date'];
echo '<br>';
}
?>

<?php include'../footer.php';?>