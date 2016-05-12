<?php include'../header.php';?>
    <body>
        <div class="container-fluid">
            <div class="row main-content">       	
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                    <form action="../../Controller/add_medicine_controller.php" method="post">
                              <div class="row">
                              <div class="col-md-3">
                               Medicine Name  
                              </div>
                              <div class="col-md-4">
                                 <input class="form-control" type='text'  name='med_name'/>
                               </div>
                               <div class="col-md-5"></div>
                               </div>
                               <br/>
                               <div class="row">
                              <div class="col-md-3">
                              Price
                              </div>
                              <div class="col-md-4">
                                  <input class="form-control" type='text'  name='price'/>
                               </div>
                               <div class="col-md-5"></div>
                               </div>
                               <br/>
                                 <div class="row">
                              <div class="col-md-3">
                              Shelf Life
                              </div>
                              <div class="col-md-4">
                                  <input class="form-control" type='text'  name='exp_date'/>
                               </div>
                               <div class="col-md-5"></div>
                               </div>
                               <br/>
                                 <div class="row">
                              <div class="col-md-3">
                              Quantity
                              </div>
                              <div class="col-md-4">
                                  <input class="form-control" type='text'  name='quantity'/>
                               </div>
                               <div class="col-md-5"></div>
                               </div>
                               <br/>
                               <button type="submit" name="submit" class="btn btn-success">Add Medicine</button>
            
        </form>
                </div>
            </div>
        </div>
        <br/>
    </body>
       
<?php include'../footer.php';?>

