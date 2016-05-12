
<?php

//session_start();
//if(!isset($_SESSION['username']))
//{
//    include './login.php';
//    die();
//}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add_Prescription</title>
        
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row main-content">       	
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                    <form id='students' method='post' name='students' action='Controller/prescription_controller.php' >
                        <button type="button" class='btn btn-danger delete'>- Delete</button>
                        <button type="button" class='btn btn-success addmore'>+ Add More</button>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th><input class='check_all' type='checkbox' onclick="select_all()"/></th>
                                    <th>S. No</th>
                                    <th>Medicine Name</th>
                                   
                                    <th>Repeat Number</th>
                                   
                                </tr>
                                <tr>
                                    <td><input type='checkbox' class='case'/></td>
                                    <td><span id='snum'>1.</span></td>
                                    <td><input class="form-control" type='text' id='countryname_1' name='medicin_name[]' /></td>
                                   
                                    <td><input class="form-control" type='text' id='country_no_1' name='repeat_no[]'/></td>
                                
                                </tr>
                            </table>
                            
                            
                        </div>
<!--                          <div class="row">
                                <div class="col-md-3">
                               Patient_User Name 
                             </div>
                              <div class="col-md-4">
                                 <input class="form-control" type='text'  name='patient_name'/>
                               </div>
                                <div class="col-md-5"></div>
                               </div>
                               <br/>-->
                                <div class="row">
                                <div class="col-md-3">
                               prescription repeat 
                             </div>
                              <div class="col-md-4">
                                 <input class="form-control" type='text'  name='repeat_presc'/>
                               </div>
                                <div class="col-md-5"></div>
                               </div>
                               <br/>
                               
                                <div class="row">
                                <div class="col-md-3">
                               prescription Content  
                             </div>
                              <div class="col-md-4">
                                 <textarea name="p_content" class="form-control"></textarea>
                               </div>
                                <div class="col-md-5"></div>
                               </div>
                               <br/>
                               <input class="form-control" type='hidden'  name='patient_id' value="<?php  echo $_GET['p_id']?>" />
                               <input class="form-control" type='hidden'  name='doctor_id' value="<?php echo $_GET['d_id']?>" />
                               <button type="submit" name="submit" class="btn btn-success">Add Prescription</button>
                               
                    </form>
                </div>	

            </div>	
        </div><!-- /container -->
        <script src="js/auto.js"></script>
       
    </body>
</html>
