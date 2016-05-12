<?php include'../header.php';?>

    <body>
        <div class="container-fluid">
            <div class="row main-content">       	
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                    <form action="medicine_data.php" method="post">
                              <div class="row">
                              <div class="col-md-3">
                               Medicine Name  
                              </div>
                              <div class="col-md-4">
                                 <input class="form-control" type='text'  name='medicine_name'/>
                               </div>
                               <div class="col-md-5"></div>
                               </div>
                               <br/>
                              
                               <button type="submit" name="submit" class="btn btn-success">View Medicine</button>
            
        </form>
                </div>
            </div>
        </div>
        <br/>
    </body>
       
<?php include'../footer.php';?>
