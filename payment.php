<?php
include "allcss.php";
?>


<?php 
  $db = mysqli_connect('localhost','root','','zalawadjsg');

if (isset($_POST['email_check'])) {
  	$email = $_POST['email'];
  	$sql = "SELECT * FROM user WHERE email='$email'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }



?>



        <div style="margin-left: 0px;" class="content-page">
            <div style="margin-top:0px;" class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div style="background-color:#b91e39" class="page-header-title">
                                <h4 style="color:white" class="pull-left page-title">Payment</h4>
                                
                                 <h4 style="color:white" class="pull-right page-title">Shree Zalawad Jain Yuvak Yuvati Parichay Milan</h4>
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="row">



  <div class="col-sm-12">
    <div class="panel panel-primary">
       <div class="panel-body">
                                   
    

          <form>
     
    

   

	</form>
         
         

 <form action="pay.php" method="post" enctype="multipart/form-data" class="form-horizontal">

  <input type="hidden" name="product_name" value="Matrimonial Registration">   
     <input type="hidden" required=""  name="product_price" value="1000"  class="form-control"  />

   					 <div class="form-group">
  						 
  					 <label class="col-md-3 control-label"></label>
  					 <label class="col-md-1 control-label">Amount </label>
                                            <div class="col-md-5">
                                              <b style="font-size:24px">1000/- </b>
                                             
                                            </div>
                                         <label class="col-md-3 control-label" ></label>
                                         
                                         </div>
                                         





  					 <div class="form-group">
  					 
  					 <label class="col-md-3 control-label"></label>
  					 <label class="col-md-1 control-label">Candidate Name</label>
                                            <div class="col-md-5">
                                                <input type="text" required=""   name="name"  class="form-control" placeholder="Enter Your Name"  />

                                             
                                            </div>
                                         <label class="col-md-3 control-label" ></label>
                                         
                                         </div>
                                         
                                         
                                         
                                         <div class="form-group">
                                         
                                         
                                           <div id="error_msg"></div>
	
	
	 
	 
	 
	 
  					 
  					 <label class="col-md-3 control-label"></label>
  					 <label class="col-md-1 control-label">Email Id</label>
                                            <div class="col-md-5">
                                            
                                              <div>
	    <input type="email" class="form-control" name="email" placeholder="Email" id="email" required="" >
		<span style="color: #b91e39;"></span>
	  </div>
	  
	  
	  
                                          

                                             
                                            </div>
                                         <label class="col-md-3 control-label" ></label>
                                         
                                         </div>
                                         
                                         

 					<div class="form-group">
  					 
  					 <label class="col-md-3 control-label"></label>
  					 <label class="col-md-1 control-label">Mobile No</label>
                                            <div class="col-md-5">
                                                <input type="text" required=""   name="phone"  class="form-control" placeholder="Enter Your Mobile No"  />

                                             
                                            </div>
                                         <label class="col-md-3 control-label" ></label>
                                         
                                         </div>














  					<div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div  class="col-md-6">
                                            
                                                                                

                                            
                                            <input style="width: 100%;" class="btn btn-primary confirmation" name="save" type="submit" value="Pay " />

                                            </div>
                                             <label class="col-md-3 control-label"></label>
                                        </div>




 
  

                                 
                                    </form>
                                </div>
                            </div>
                        </div>























                    </div>
                    
                   
                </div>
            </div>
            
           
              
              
           <?php 
include "allscript.php";
           ?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

         
     <script src="paymentscript.js"></script>    

