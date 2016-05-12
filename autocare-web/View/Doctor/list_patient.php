<?php include'../header.php';?>
<div class="container-fluid">
    <div class="row main-content">       	
       <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                    <form action="" method="post">
                       <div class="row">
                              <div class="col-md-3">
                               Patient Name  
                              </div>
                              <div class="col-md-4">
                                 <input class="form-control" type='text'  name='patient_name'/>
                               </div>
                               <div class="col-md-5"></div>
                               </div>
                               <br/>
                               <button type="submit" name="submit" class="btn btn-success">Search</button>

                    </form>
        </div>
    </div>
</div>
    
<?php

if($_GET['lid'])
{

$d_id = $_GET['lid'];
        $curl = curl_init();

           curl_setopt_array($curl, array(
           CURLOPT_URL            => "http://4gp.comli.com/GP_WebService/my_Patients.php",
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING       => "",
           CURLOPT_MAXREDIRS      => 10,
           CURLOPT_TIMEOUT        => 30,
           CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST  => "POST",
           CURLOPT_POSTFIELDS => "doctor_id=$d_id",
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
            
           $object  = json_decode($response, true);
if(isset($_POST['submit']))
{
    $search=$_POST['patient_name'];
  for ($i = 0; $i < count($object['info']); $i++)
{
    if($search == $object['info'][$i]['username'])
    {
   $p_id=$object['info'][$i]['id'];
  
   echo "<a href='patient_profile.php?p_id=$p_id&d_id=$d_id'>".$object['info'][$i]['username']."</a><br/>"; 
    }
    
}  
}
 else
{
for ($i = 0; $i < count($object['info']); $i++)
{
    
    $p_id=$object['info'][$i]['id'];
  
   echo "<a href='patient_profile.php?p_id=$p_id&d_id=$d_id'>".$object['info'][$i]['username']."</a><br/>"; 
 
    
}
    
}
        }
}

//$i=0;
//while (empty($object))
//{
//    $object['info'][$i]['id'];
//    $object['info'][$i]['username'];
//    $i++;
//}
//    
    
    

      
 


?>
<?php include'../footer.php';?>