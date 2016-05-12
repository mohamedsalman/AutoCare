<?php  include '../header.php';?>
  
<?php
//  $curl = curl_init();
//
//curl_setopt_array($curl, array(
////   CURLOPT_URL            => "http://4gp.comli.com/GP_WebService/login.php",
//    CURLOPT_URL            => "localhost/GP_WebService/login.php",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING       => "",
//   CURLOPT_MAXREDIRS      => 10,
//   CURLOPT_TIMEOUT        => 30,
//   CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST  => "POST",
//   CURLOPT_POSTFIELDS => "username=amir&password=123",
//   CURLOPT_HTTPHEADER     => array(
//       "authorization: Basic YWRtaW46YW5hMDEwYW5h",
//       "content-type: application/x-www-form-urlencoded"
//   ),
//));
//
//$response = curl_exec($curl);
//$err      = curl_error($curl);
//
//curl_close($curl);
//
//if ($err)
//{
//   echo "cURL Error #:" . $err;
//}
//else
//{
//    $object  = json_decode($response, true);
    
  
  if($_GET['uid']&&$_GET['lid'])
   {

$uid = $_GET['uid'];
$lid = $_GET['lid'];
   
  
    //echo $object['login_info'][0]['last_name'];
    //echo $object['login_info'][0]['mail'];
$json = file_get_contents("http://4gp.comli.com/GP_WebService/view_Profile.php?uid=$uid&lid=$lid") or die("not get contents");
$object  = json_decode($json, true); 
   }
    ?>
<!--=========== END HEADER SECTION ================-->       
    <section id="blogArchive">      
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                <!--<h2>Welcome, <?//php echo $object['login_info'][0]['first_name'].' '.$object['login_info'][0]['last_name'];?></h2>-->
              </div>
              <div class="blog-breadcrumbs-right">
                <ol class="breadcrumb">
                  <li>You are here</li>
                  <li><a href="#">Home</a></li>                  
                  <li class="active">Prescription</li>
                </ol>
              </div>
            </div>
          </div>
        </div>        
      </div>      
    </section>
    <section id="errorPage">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
           <!--Content-->
           <div class="btn-toolbar">
    <button class="btn btn-primary" onclick="location.href='patient_edit_profile.php'">Edit Profile</button>
    
    
</div>

           
           
       <div class=" panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
  <div class="row">
  <div class="col-lg-4">First Name</div>
  <div class="col-lg-4"><?php echo $object['user_info'][0]['first_name'];?></div>
  <div class="col-lg-4">Repeating</div>
</div>
  </div>
  
   <div class="panel-heading">
  <div class="row">
  <div class="col-lg-4">Last Name</div>
  <div class="col-lg-4"><?php echo $object['user_info'][0]['last_name'];?></div>
  <div class="col-lg-4">Repeating</div>
</div>
  </div>
  
   <div class="panel-heading">
  <div class="row">
  <div class="col-lg-4">Email</div>
  <div class="col-lg-4"><?php echo $object['user_info'][0]['mail'];?></div>
  <div class="col-lg-4">Repeating</div>
</div>
  </div>
  <div class="panel-heading">
  <div class="row">
  <div class="col-lg-4">Last Name</div>
  <div class="col-lg-4"><?php echo $object['user_info'][0]['date_of_birth'];?></div>
  <div class="col-lg-4">Repeating</div>
</div>
  </div>
  <div class="panel-heading">
  <div class="row">
  <div class="col-lg-4">Last Name</div>
  <div class="col-lg-4"><?php echo $object['address_info '][0]['city'];?></div>
  <div class="col-lg-4">Repeating</div>
</div>
  </div>
  <div class="panel-heading">
  <div class="row">
  <div class="col-lg-4">Last Name</div>
  <div class="col-lg-4"><?php echo $object['address_info '][0]['region'];?></div>
  <div class="col-lg-4">Repeating</div>
</div>
  </div>
  <div class="panel-heading">
  <div class="row">
  <div class="col-lg-4">Last Name</div>
  <div class="col-lg-4"><?php echo $object['phone_info'][0]['phone_number'];?></div>
  <div class="col-lg-4">Repeating</div>
</div>
  </div>
  <!-- Table -->
  
  

</div>    
           
       

  
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
          </div>
        </div>
      </div>
    </section>
    <!--=========== Start Footer SECTION ================-->
   <?php include '../footer.php';?>