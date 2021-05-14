<?php
include "allcss.php";
?>


<body>


                            
        <div style="margin-left: 0px;" class="content-page">
            <div style="margin-top:0px;" class="content">
                <div class="container">
                    

                    <div class="row">
                        <div class="col-sm-12">
                            <div style="background-color:#b91e39" class="page-header-title">

                            <div class="clearfix"></div>
                            
                            </div>
                        </div>
                    </div>
                  
                    <div class="row">

                     <div style="text-align:center" class="col-sm-12">
                            <div class="panel panel-primary">
                              
                                <div class="panel-body">


                                    <img style=" width:  200px; " src="admin/assets/images/logo_dark.png">


                                        <div style="font-size:18px" class="panel-body">
                                        
                                        
                                        <p><b>Thank You For Your Payment! </b>  
</p>


                                   </div>

                                 </div>
                            </div>
                        </div>

                    </div>







  
           
            
    

    <div class="container" style="
    text-align: center;background-color:white;
">

   






  <?php

include 'src/instamojo.php';

 // private key  // private auth key
 $api = new Instamojo\Instamojo('f4963b88828e7fa36b9dd352c4428ff6', 'ad65c02c506fa8461b20a1ca7186cf0c','https://www.instamojo.com/api/1.1/');

// $api = new Instamojo\Instamojo('test_332db1476133db034c7772dd5ae', 'test_c73c27dca68b4fff4b2e7915c74','https://test.instamojo.com/api/1.1/');


$payid = $_GET["payment_request_id"];


try {
    $response = $api->paymentRequestStatus($payid);


    echo "<h3>Payment ID: " . $response['payments'][0]['payment_id'] . "</h3>" ;
    echo "<h3>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h3>" ;
    echo "<h3>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h3>" ;
    
  

  //echo "<pre>";
  // print_r($response);
//echo "</pre>";


echo "
 <form action='finalpay.php' method='post' enctype='multipart/form-data' class='form-horizontal'>
      

             <br><br> 
                       
 <input type='hidden' class='form-control' name='email' value=" . $response['payments'][0]['buyer_email'] ."> 

 
             <br><br> 
   <input type='hidden' class='form-control' name='paymentid' value=". $response['payments'][0]['payment_id'] ."> 

             <br><br> 
     
               
                                

<input style='width:100%;background-color:#00a0e3'  class='btn btn-primary btnus' type='submit'  name='save' value='Zalawad Mandal Borivali' />

           <br><br>                          
                        </form>

";




    ?>


    <?php
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}



  ?>



          
<?php

$con = mysqli_connect('localhost','root','','zalawadjsg');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  

$emailid=$response['payments'][0]['buyer_email'];


$result = mysqli_query($con,"SELECT * FROM user WHERE email='$emailid'");
while($row = mysqli_fetch_array($result))
{
$mobile=$row['mobile'];

}


?>





      
    </div> 