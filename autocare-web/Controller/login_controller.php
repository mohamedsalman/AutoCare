<?php


if(isset($_POST['submit']))
{
    $user_name= $_POST['username'];
    $password = $_POST['password'];
    

//
        $curl = curl_init();

        curl_setopt_array($curl, array(
           CURLOPT_URL            => "http://4gp.comli.com/GP_WebService/login.php",
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING       => "",
           CURLOPT_MAXREDIRS      => 10,
           CURLOPT_TIMEOUT        => 30,
           CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST  => "POST",
           CURLOPT_POSTFIELDS => "username=$user_name&password=$password",
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
            
           $obj  = json_decode($response, true);
           //echo $respons['login_info'][0]['username'];
           $session_user_name= $obj['login_info'][0]['username'];
           $user_id= $obj['login_info'][0]['id'];
           $user_type = $obj['login_info'][0]['user_type_id'];
           if($user_type == 1)
                {
               
                    session_start();
                    $_SESSION['username'] = $session_user_name;
                    header("location:../View/Doctor/index.php?id=".$user_id);
                }
                if($user_type == 2)
                {
                    include '../View/Patient/index.php';
                    session_start();
                    $_SESSION['username'] = $session_user_name;
                    header("location:../View/Patient/index.php?id=".$user_id);
                }
                if($user_type == 3)
                {
                    session_start();
                    $_SESSION['username'] = $session_user_name;
                    header("location:../View/Pharmacist/index.php?id=".$user_id);
                }
                if($user_type == 4)
                {
                    
                    session_start();
                    $_SESSION['username'] = $session_user_name;
                    //header("location:../View/Pharmacist/index.php?id=".$user_id);
                }
                if($user_type == 5)
                {
                    session_start();
                    $_SESSION['username'] = $session_user_name;
                    //header("location:../View/doctor/index.php?id=".$user_id);
                }
                if($user_type == 6)
                {
                    session_start();
                    $_SESSION['username'] = $session_user_name;
                    //header("location:../View/doctor/index.php?id=".$user_id);
                }
          
        }
 


//    include '../Model/database.php';
//    $database = new Database();
//    $database->connection();
//    
//    include '../Model/login.php';
//    $login = new Login_model();
//    $user_type = $login->login($user_name, $password);
//    
//    if($user_type == "doctor")
//    {
//        session_start();
//        $_SESSION['username'] = $user_name;
//        header("location:../add_prescription.php");
//    }
//   else
//    {
//        echo 'No';    
//    }
//    
//    $database->close();
}


?>

