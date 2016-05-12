<?php include'../header.php';?>
<?php
if($_GET['uid']&&$_GET['lid'])
{
$uid = $_GET['uid'];
$lid = $_GET['lid'];
//​
$json = file_get_contents("http://4gp.comli.com/GP_WebService/view_Profile.php?uid=$uid&lid=$lid") or die("not get contents");
////$json = file_get_contents("localhost:8080/GP_WebService/view_Profile.php?uid=$uid&lid=$lid");

$obj  = json_decode($json, true); 
echo $obj['user_info'][0]['first_name'];
echo '<br>';
echo $obj['user_info'][0]['last_name'];
echo '<br>';
echo $obj['user_info'][0]['username'];
echo '<br>';
echo $obj['user_info'][0]['mail'];
echo '<br>';
echo $obj['user_info'][0]['date_of_birth'];
echo '<br>';
echo $obj['address_info'][0]['city'];
echo '<br>';
echo $obj['address_info'][0]['region'];
echo '<br>';
echo $obj['phone_info'][0]['phone_number'];
echo '<br>';
}

?>
<?php include'../footer.php';?>