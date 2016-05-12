<?php
/*
Site : http:www.smarttutorials.net
Author :muni
*/
require_once './config.php';
if($_POST['type'] == 'country_table'){
	$row_num = $_POST['row_num'];
	$name = $_POST['name_startsWith'];
       
	$query = "SELECT `name` FROM `item` where `item_type_id` = '1' and UPPER(name) LIKE '".strtoupper($name)."%'";
	$result = mysqli_query($con, $query);
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$name = $row['name'].'|'.$row_num;
		array_push($data, $name);	
	}	
	echo json_encode($data);
}


