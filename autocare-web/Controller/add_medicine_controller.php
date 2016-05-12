<?php
if(isset($_POST['submit']))
{
    
$med_name = $_POST['med_name'];
$price = $_POST['price'];
$exp_date=$_POST['exp_date'];
$quantity=$_POST['quantity'];


           $curl = curl_init();

           curl_setopt_array($curl, array(
           CURLOPT_URL            => "http://4gp.comli.com/GP_WebService/add_medicine.php",
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING       => "",
           CURLOPT_MAXREDIRS      => 10,
           CURLOPT_TIMEOUT        => 30,
           CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST  => "POST",
           CURLOPT_POSTFIELDS => "name=$med_name&price=$price&shelf_life=$exp_date&quantity=$quantity",
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
               //echo $response;
               $object = json_decode($response, true);
              echo "added successfully ";
             
         }
}
?>