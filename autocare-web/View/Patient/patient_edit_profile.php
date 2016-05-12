<?php include '../header.php';?>
    <section id="blogArchive">      
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                <h2>Prescription Page</h2>
              </div>
              <div class="blog-breadcrumbs-right">
                <ol class="breadcrumb">
                  <li>You are here</li>
                  <li><a href="#">Home</a></li>                  
                  <li class="active">Profile</li>
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
              
              
              <form action="" method="POST">
                  Enter New First Name:
    <div class="row">
      <div class="col-lg-4">
          <div class="input-group">
      
      <input name="first_name" type="text" class="form-control" aria-label="...">
          </div>
      </div>
    </div>
                  
                  Enter New Last Name:
    <div class="row">
      <div class="col-lg-4">
          <div class="input-group">
      
      <input name="last_name" type="text" class="form-control" aria-label="...">
          </div>
      </div>
    </div>
              Enter New Email:
    <div class="row">
      <div class="col-lg-4">
          <div class="input-group">
      
              <input name="email" type="text" class="form-control" aria-label="...">
          </div>
      </div>
    </div>    
              
              <br>
              <div class="btn-toolbar">
                  <button name="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
              
              <?php
              if(@$_POST)
              {
                  echo'okkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk';
                  
                  
                  
                       $curl = curl_init();

curl_setopt_array($curl, array(
   CURLOPT_URL            => "http://4gp.comli.com/GP_WebService/login.php",
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING       => "",
   CURLOPT_MAXREDIRS      => 10,
   CURLOPT_TIMEOUT        => 30,
   CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST  => "POST",
   CURLOPT_POSTFIELDS => "username=amir&password=123",
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
   
   
   include './patient/patient.php';
$patient =new patient();

   
 $patient->id = $obj['login_info'][0]['id'];
 $obj['login_info'][0]['first_name']=$_POST['first_name'];
 $obj['login_info'][0]['flast_name']=$_POST['last_name'];
 $obj['login_info'][0]['mail']=$_POST['email'];

  //$obj['login_info'][0]['mail'];
}
                  
            
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
              }
              ?>
              
<?php include '../footer.php';?>