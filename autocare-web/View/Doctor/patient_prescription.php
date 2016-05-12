<?php include'../header.php';?>
<?php
if($_GET['lid'])
{

        $lid = $_GET['lid'];
        $curl = curl_init();

           curl_setopt_array($curl, array(
           CURLOPT_URL            => "http://4gp.comli.com/GP_WebService/my_Patients.php",
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING       => "",
           CURLOPT_MAXREDIRS      => 10,
           CURLOPT_TIMEOUT        => 30,
           CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST  => "POST",
           CURLOPT_POSTFIELDS => "doctor_id=$lid",
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
            $doc_id=$lid;
           $object  = json_decode($response, true);

for ($i = 0; $i < count($object['info']); $i++)
{
   
   $p_id=$object['info'][$i]['id'];
   echo "<a href='../../add_prescription.php?p_id=$p_id&d_id=$doc_id'>".$object['info'][$i]['username']."</a><br/>"; 
    
}
        }
}
?>

<?php include'../footer.php';?>