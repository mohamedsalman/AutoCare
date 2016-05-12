<?php include '../header.php';?>
  
<?php
 if(isset($_GET['lid']))
   {

$uid = $_GET['lid'];

 $json = file_get_contents("http://4gp.comli.com/GP_WebService/view_relatives.php?uid=$uid&lid=$uid")or die("not get contents");
 $object  = json_decode($json, true);
 for ($i = 0; $i < count($object['relatives_info']); $i++)
 {
      $object['relatives_info'][$i]['mail'];
     
 }
 
    
    //echo $object['relatives_info'][0]['first_name'].$object['relatives_info'][0]['last_name'];
    //echo $object['relatives_info'][0]['last_name'];
//    echo $object['relatives_info'][0]['mail'];
    //echo $object['relatives_info'][0]['phone_number'];
  
  
    //echo $object['login_info'][0]['last_name'];
    //echo $object['login_info'][0]['mail'];
   }

    ?>
<!--=========== END HEADER SECTION ================-->       
    <section id="blogArchive">      
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                <h2>Your Relatives</h2>
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
    <button class="btn btn-primary" onclick="location.href='patient_edit_profile.php'">Edit Your Relatives</button>
    
    
</div>

           
           
       <div class=" panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
  <div class="row">
  <div class="col-lg-4">Name</div>
  <div class="col-lg-4"><?php echo $object['relatives_info'][0]['first_name']." ".$object['relatives_info'][0]['last_name'];?></div>
  <div class="col-lg-4">Repeating</div>
</div>
  </div>
  
   <div class="panel-heading">
  <div class="row">
  <div class="col-lg-4">Email</div>
  <div class="col-lg-4"><?php echo $object['relatives_info'][0]['mail'];?></div>
  <div class="col-lg-4">Repeating</div>
</div>
  </div>
  
   <div class="panel-heading">
  <div class="row">
  <div class="col-lg-4">Phone Number</div>
  <div class="col-lg-4"><?php echo $object['relatives_info'][0]['phone_number'];?></div>
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


//<?php
//
//for ($i = 0; $i < count($object['info']); $i++)
//{
//    echo $object['info'][$i]['id'];
//    echo $object['info'][$i]['username'];
//    
//}
//
//           $object  = json_decode($response, true);
//
//        
//
//
//
//
//?>