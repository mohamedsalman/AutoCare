<?php
 
if(isset($_POST['submit']))
{
    
$med_name = $_POST['medicin_name'];
$repeat_no = $_POST['repeat_no'];
$purchasing_number=$_POST['repeat_presc'];
$content=$_POST['p_content'];
$patient=$_POST['patient_id'];
$doctor=$_POST['doctor_id'];

$med_data=http_build_query($med_name);
$med_rep =http_build_query($repeat_no);

            $curl = curl_init();

            curl_setopt_array($curl, array(
               CURLOPT_URL            => "http://4gp.comli.com/GP_WebService/add_Prescription.php",
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_ENCODING       => "",
               CURLOPT_MAXREDIRS      => 10,
               CURLOPT_TIMEOUT        => 30,
               CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
               CURLOPT_CUSTOMREQUEST  => "POST",
               CURLOPT_POSTFIELDS     => "medicine_name=$med_data&repeat_no=$med_rep&purchasing_number=$purchasing_number&content=$content&paitent_id=$patient&doctor_id=$doctor",
               CURLOPT_HTTPHEADER     => array(
                   "authorization: Basic YWRtaW46YW5hMDEwYW5h",
                   "content-type: application/x-www-form-urlencoded"
               ),
            ));

            $response = curl_exec($curl);
            $err      = curl_error($curl);

            curl_close($curl);

            if ($err)
            {
               echo "cURL Error #:" . $err;
            }
            else
            {
               echo $response;
               $object = json_decode($response, true);
            }
           //echo $respons['login_info'][0]['username'];
//           $session_user_name= $obj['login_info'][0]['username'];
//           $user_id= $obj['login_info'][0]['id'];
//           $user_type = $obj['login_info'][0]['user_type_id'];
        
//$db= new Database();
//$db->connection();
//include '../Model/prescription.php';
//$new_prescription = new prescription();
//$id=$new_prescription->prescription_id($content,$purchasing_number,$patient);
//
//
//foreach( $name as $key => $item_name )
//{
//    $check = $new_prescription->Presc_items($name[$key], $repeat_no[$key], $id);
//    if($check == FALSE)
//     {
//        break;
//     }  

// print "The name is ".$n." and email is ".$email[$key].", thank you\n";
}


//$db->close();
//echo 'Done';
//
//header('location:../index.php');
//}


?>

