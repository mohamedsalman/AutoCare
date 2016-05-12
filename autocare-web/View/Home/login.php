
<?php include'../header.php';?>

        <title>Login</title>
        
    
    <body>
        <div class="container-fluid">
            <div class="row main-content">       	
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                    <form action="../../Controller/login_controller.php" method="post">
                              <div class="row">
                              <div class="col-md-3">
                               User Name  
                              </div>
                              <div class="col-md-4">
                                 <input class="form-control" type='text'  name='username'/>
                               </div>
                               <div class="col-md-5"></div>
                               </div>
                               <br/>
                               <div class="row">
                              <div class="col-md-3">
                               Password 
                              </div>
                              <div class="col-md-4">
                                  <input class="form-control" type='password'  name='password'/>
                               </div>
                               <div class="col-md-5"></div>
                               </div>
                               <br/>
                               <button type="submit" name="submit" class="btn btn-success">Login</button>
            
        </form>
                </div>
            </div>
        </div>
        <br/>
    </body>
       
<?php include'../footer.php';?>