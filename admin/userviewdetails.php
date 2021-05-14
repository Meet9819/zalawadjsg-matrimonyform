<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit();
}
?>

<?php
include "allcss.php";
?>
<style type="text/css">
     .matter { text-transform: capitalize;
                background: #red;
                display: block;
                padding: 6px 0px;
                line-height: 12px;
                color: #000;
                font-size: 12px;
                border-bottom: 1px solid black;
                margin-bottom: 0;
            }
            
            .matter1 {
             text-transform: capitalize;
                background: #red;
                display: block;
                padding: 6px 0px;
                line-height: 12px;
                color: #fff;
                font-size: 12px;
                border-bottom: 1px solid #EAEAEA;
                margin-bottom: 0;
            }
            
            .matter2 {
             text-transform: capitalize;
                background: #red;
                display: block;
                padding: 6px 0px;
                line-height: 12px;
                color: #e53434;
                font-size: 12px;
                border-bottom: 1px solid #000000;
                margin-bottom: 0;
            }
            
            .ma {
            padding : 3px 0px;
            }
</style>

<?php 
include "header.php";
?>


      

        <div class="content-page">
            <div class="content">
                <div class="container">
                
             
      
      
      
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-header-title">
                                <h4 class="pull-left page-title">Generate Data</h4>
                                <ol class="breadcrumb pull-right">
                                    
                                   


<input type="button"  class="btn btn-primary" id="create_pdf" value="Generate PDF">  


                                      </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                              
    <div class="panel-body">
       <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            
        
  
  
  
  
  
        
<?php
include"../db.php";
$pr_id=$_GET['q'];
$result = mysqli_query($con,"SELECT * FROM user WHERE id=$pr_id");
while($row = mysqli_fetch_array($result))
{
$mobile=$row['mobile'];

$email=$row['email'];

}


?>

  
  <?php


require_once 'class.user.php';




$reg_user = new USER();

 	

if(isset($_POST['add']))
{


 
   
   
$activate = 1;


$result = mysqli_query($con,"UPDATE user SET activate='$activate' WHERE email='$email'");
   
    
                ?>
                <script>
                alert('status changed');
              
                </script>
                
                  <?php
                  
   
   

//request parameters array
$requestParams = array(
    'username' => 'zalawad',
    'password' => '996645',
    'sender' => 'SZYYPM',
    'mobile' => $mobile,
    
    'type' => 1,
    'product' => 1,
    
    'message' => 'Congrats!%0aYour application is approved.%0aYou can proceed for payment using below link%0a%0ahttp://zalawadmandalborivali.com/matrimonial/payment.php%0a%0aJai Jinendra'
);

//merge API url and parameters
$apiUrl = "http://makemysms.in/api/sendsms.php?";
foreach($requestParams as $key => $val){
    $apiUrl .= $key.'='.urlencode($val).'&';
}
$apiUrl = rtrim($apiUrl, "&");

//API call
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_exec($ch);
curl_close($ch); 


	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	
	

		

		if($reg_user->register($name,$email))
		{			
			$id = $reg_user->lasdID();		
			$key = base64_encode($id);
			$id = $key; 
			
			$message = "Pranam $name,<br /><br />
Thank you for your Registration our Team has Approved your Profile.<br /><br />

Please proceed to make the online payment of Rs. 1000/- via the following link.
<br /> 
<a href='http://zalawadmandalborivali.com/matrimonial/payment.php' >http://zalawadmandalborivali.com/matrimonial/payment.php </a> <br /><br />

Jai Jinendra,
<br /><br />
Shree Zalawad Yuvak Yuvati Parichay Milan - Borivali  <br />
Visit: www.zalawadmandalborivali.com <br />
Facebook: www.facebook.com/zalawadmandalborivali/ <br />
Help: 9967996645, 9870153104, 9820899239, 9324631756

";
                        
            $subject = "Congratulation ! Your profile is Approved from Admin";
						
			$reg_user->send_mail($email,$message,$subject);	
			$msg = "
					 We've sent an Email & SMS ";
		}
		else
		{
			echo "sorry , Query could no execute...";
		}		
	
}



 
?>
    
     
     
     
     
  
                                     

<!-- THIS IS THE STARTING POINT OF PDF ..... MAIN WORD IS CLASS="FORM"-->
<form class="form" method="post"> 



     
      
      
      
<div class="container" style="text-align:center">
   <?php if(isset($msg)) echo $msg;  ?>
 
</div>

<?php
include"../db.php";
$pr_id=$_GET['q'];
$result = mysqli_query($con,"SELECT * FROM user WHERE id=$pr_id");
while($row = mysqli_fetch_array($result))
{
$mobile=$row['mobile'];
echo '


      
      
<fieldset>

<div class="form-group" style="text-align:center">


 <button class="btn btn-large btn-primary" type="submit" name="add">Send Link for Payment</button>
      

        <br><br>
<b style="font-size:20px">Registered Mail Id is :  '.$row['email'].'</b>


  <div class="col-sm-12" >
  
   <input type="hidden" name="name" value="'.$row['name'].'"  required />

        <input type="hidden" name="email" value="'.$row['email'].'"  required />

                                        
<img style=" width:  220px;" src="assets/images/logo_dark.png" >

      </div
      
      
</div>

  </fieldset>
                        
                        
                                <br><Br>
                       
                       <fieldset style="background-color: #dee4bc;">

 <div class="form-group">
                     <div class="col-sm-12" style="background-color: #e6322c;padding-right: 4px;
    padding-left: 3px;">
                         <div style="
    color: white;
    text-align: center;
" class="matter">
                         <label >'.$row['gender'].' - '.$row['uniqueid'].'</label>
                        </div>
                     </div>
                 </div>





<div class="form-group">

    <div class="col-sm-2" style="background-color: #206137;padding-right: 4px;
    padding-left: 3px;">

          <div class="matter1" style="height:60px" >
                    <label>Full Name  </label>
                </div>  
                
                
              

              

                <div class="matter1 ma">
                      <label>Birth Date   </label>
                </div>

                <div class="matter1 ma">
                    <label>Time & Place  </label>
                </div>

                <div class="matter1 ma">
                    <label>Height (in inch)   </label>
                </div>

                <div class="matter1 ma">
                    <label>Weight (in kg  </label>
                 </div>
                 
                  <div class="matter1 ma">
                    <label>Complexion  </label>
                 </div>

                  <div class="matter1 ma">
                    <label>Blood Grp  </label>
                </div>

    </div>

        <div class="col-sm-2" style="background-color: #dee3be;padding-right: 4px;
    padding-left: 3px;">

                <div class="matter" style="text-transform:uppercase;height:60px" >
                    <label style="line-height:21px">'.$row['name'].' '.$row['middlename'].' '.$row['lastname'].'</label>
                </div>  


                <div class="matter ma">
                      <label> '.$row['dob'].'</label>
                </div>

                <div class="matter ma">
                    <label>'.$row['timeplace'].'</label>
                </div>

                <div class="matter ma">
                    <label>  '.$row['height'].'</label>
                </div>

                <div class="matter ma">
                    <label>  '.$row['weight'].'</label>
                 </div>
                 
                    <div class="matter ma">
                    <label>  '.$row['complexion'].'</label>
                 </div>

                  <div class="matter ma">
                    <label>  '.$row['bloodgroup'].'</label>
                </div>

         </div>

    

    <div class="col-sm-3" style="
    background-color: #dee4bc;padding-right: 4px;
    padding-left: 3px;
    
">
                 
              <img src="resizer/resizer.php?file=../photos/user/'.$row['img'].'&width=200&height=200&action=resize&quality=100"  title="my_profile" class="img-responsive">
      
        </div>

        

        <div class="col-sm-2" style="background-color: #206137;padding-right: 4px;
    padding-left: 3px;">
            
              <div class="matter1">
                   <label>Family type  </label>
       </div>
       
       
       
            <div class="matter1 ma">
                   <label>Horoscope  </label>
       </div>
       
        <div class="matter1 ma">
                  <label>Manglik   </label>
            </div>
            
             <div class="matter1 ma">
                    <label>Caste   </label>
             </div>
       
             <div class="matter1 ma">
                     <label>Native Place </label>
                </div>
             
          
            <div class="matter1 ma">
                   <label>Res. Telephone  </label>
       </div>

              <div class="matter1 ma">
                   <label>Mobile </label>
       </div>
       
          <div class="matter1">
                    <label>Email Id   </label>
             </div>

 



         </div>

         
         <div class="col-sm-3" style="background-color: #dee3be;padding-right: 4px;
    padding-left: 3px;">
            
             <div class="matter"> <label>  '.$row['staying'].'</label>  </div>
             
             
             <div class="matter ma">
                     <label>'.$row['horoscope'].'</label>
             </div>
            
             <div class="matter ma">
                    <label> '.$row['manglik'].'</label>
             </div>

             <div class="matter ma">
                    <label>'.$row['caste'].'</label>
             </div>

        <div class="matter ma">
                <label> '.$row['nativeplace'].'</label>
      </div>

             <div class="matter">
                   <label> '.$row['telephone'].'</label>
       </div>

             <div class="matter ma">
                   <label> '.$row['mobile'].'</label>
       </div>

             <div class="matter ma">
                 <label> '.$row['email'].'</label>
       </div>

    </div>



   </div>
   
   



<div class="form-group">

         <div class="col-sm-2" style=" background-color: #206137;padding-right: 4px;
    padding-left: 3px;">
                        
                         <div class="matter1 ma">
                       <label>Spectacles</label>
          </div>
                     
                    <div class="matter1 ma">
                       <label>Education</label>
          </div>

                    <div class="matter1 ma">
                      <label>Profession</label>
                     </div>
                   
                 
                   

                     <div class="matter1 ma">
                        <label>Annual Income</label>
                     </div>

          </div>

          <div class="col-sm-5" style="background-color: #dee3be;padding-right: 4px;
    padding-left: 3px;">
                  <div class="matter ma"><label> '.$row['spectacles'].'</label> </div>  
                  <div class="matter ma"><label> '.$row['education'].'</label> </div>
                   <div class="matter ma"> <label>'.$row['profession'].'</label> </div>
                  
                   
    <div class="matter ma"> <label>  '.$row['annualincome'].'</label> </div>

          </div>

        

         <div class="col-sm-2" style="background-color: #206137;padding-right: 4px;
    padding-left: 3px;">
                <div class="matter1 ma"> <label>Hobbies </label> </div>  
                   <div class="matter1 ma"><label>Brothers   </label> </div>
                <div class="matter1 ma"><label>Sisters  </label> </div>
                
               
        <div class="matter1 ma"> <label>Marital Status </label> </div>
             

         </div>

         <div class="col-sm-3" style="background-color: #dee3be;padding-right: 4px;
    padding-left: 3px;">
                <div class="matter ma"> <label>  '.$row['hobbies'].'</label>  </div>  
                 <div class="matter ma">  <label>  '.$row['brother'].'</label>  </div>
                 <div class="matter ma"><label> '.$row['sister'].'</label> </div>
               
        <div class="matter ma"> <label> '.$row['marital'].'</label> </div>
                

         </div>

 </div>







<div class="form-group">

       <div class="col-sm-2" style="background-color: #206137;padding-right: 4px;
    padding-left: 3px;">
               
               <div class="matter1 ma"><label>Office Address </label></div>
               
              
                 
        
      </div>

       <div class="col-sm-10" style="background-color: #dee3be;padding-right: 4px;
    padding-left: 3px;">
                 
                 
                 <div class="matter ma">  <label>    '.$row['officeaddress'].'</label></div>
                 
                 
                  

        </div>



</div>








<div class="form-group">

       <div class="col-sm-2" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
               
               <div class="matter2 ma"><label>Father Name </label></div>
               
                <div class="matter2 ma"> <label>Father Occu.  </label></div>
                 <div class="matter2 ma"> <label>Father Mob  </label> </div>
                 
        
      </div>

       <div class="col-sm-4" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
                 
                 
                 <div class="matter ma" style="text-transform:uppercase">  <label>    '.$row['fathername'].'</label></div>
                 
                   <div class="matter ma"> <label>  '.$row['fatheroccu'].'</label></div>
                   <div class="matter ma"><label> '.$row['fathermob'].'</label></div>
                  

        </div>

         <div class="col-sm-2" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">

<div class="matter2 ma" > <label>Mother Name  </label> </div>
                <div class="matter2 ma"><label>Mosal </label> </div>
        
        <div class="matter2 ma"><label>Mosal Native  </label> </div>

     </div>

          <div class="col-sm-4" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
 <div class="matter ma" style="text-transform:uppercase"><label> '.$row['mothername'].'</label> </div>
                  <div class="matter ma"> <label> '.$row['mosal'].'</label></div>
        <div class="matter ma"> <label>  '.$row['mosalnative'].'</label> </div>

          </div>

</div>











<div class="form-group">

       <div class="col-sm-2" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
               
               <div class="matter2 ma"><label>Resi Address </label></div>
               </div>

       <div class="col-sm-10" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
                 
                 
                 <div class="matter ma">  <label>    '.$row['resiaddress'].'</label></div>
                 </div>

</div>







<div class="form-group">

       <div class="col-sm-2" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
               
               <div class="matter2 ma"><label>Reference</label></div>
                     
        
      </div>

       <div class="col-sm-10" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
                 
                 
                 <div class="matter ma" style="text-transform:uppercase">  <label>    '.$row['reference'].'</label></div>
                 
      </div>



     

</div>









<div class="form-group">

       <div class="col-sm-2" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
               
               <div class="matter2 ma"><label>Partners Choice </label></div>
               </div>

       <div class="col-sm-4" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
                 
                 
                 <div class="matter ma">  <label>    '.$row['preference'].'</label></div>
                 </div>
                 
                 
                    <div class="col-sm-2" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
               
               <div class="matter2 ma"><label>Disability (if any)</label></div>
               </div>

       <div class="col-sm-4" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
                 
                 
                 <div class="matter ma">  <label>    '.$row['disability'].'</label></div>
                 </div>
                 
                 

</div>





  </fieldset> 


                        
                         ';}
                        ?>




  
  
    </form>  






                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                                             
                  
                </div>
            </div>
           


            <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>  


   <script>  
    (function () {  
        var  
         form = $('.form'),  
         cache_width = form.width(),  
         a4 = [595.28, 841.89]; // for a4 size paper width and height  
  
        $('#create_pdf').on('click', function () {  
            $('body').scrollTop(0);  
            createPDF();  
        });  
        //create pdf  
        function createPDF() {  
            getCanvas().then(function (canvas) {  
                var  
                 img = canvas.toDataURL("image/png"),  
                 doc = new jsPDF({  
                     unit: 'px',  
                     format: 'a4'  
                 });  
                doc.addImage(img, 'JPEG', 20, 20);  
                doc.save('zalawad.pdf');  
                form.width(cache_width);  
            });  
        }  
  
        // create canvas object  
        function getCanvas() {  
            form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');  
            return html2canvas(form, {  
                imageTimeout: 2000,  
                removeContainer: true  
            });  
        }  
  
    }());  
</script>  
<script>  
    /* 
 * jQuery helper plugin for examples and tests 
 */  
    (function ($) {  
        $.fn.html2canvas = function (options) {  
            var date = new Date(),  
            $message = null,  
            timeoutTimer = false,  
            timer = date.getTime();  
            html2canvas.logging = options && options.logging;  
            html2canvas.Preload(this[0], $.extend({  
                complete: function (images) {  
                    var queue = html2canvas.Parse(this[0], images, options),  
                    $canvas = $(html2canvas.Renderer(queue, options)),  
                    finishTime = new Date();  
  
                    $canvas.css({ position: 'absolute', left: 0, top: 0 }).appendTo(document.body);  
                    $canvas.siblings().toggle();  
  
                    $(window).click(function () {  
                        if (!$canvas.is(':visible')) {  
                            $canvas.toggle().siblings().toggle();  
                            throwMessage("Canvas Render visible");  
                        } else {  
                            $canvas.siblings().toggle();  
                            $canvas.toggle();  
                            throwMessage("Canvas Render hidden");  
                        }  
                    });  
                    throwMessage('Screenshot created in ' + ((finishTime.getTime() - timer) / 1000) + " seconds<br />", 4000);  
                }  
            }, options));  
  
            function throwMessage(msg, duration) {  
                window.clearTimeout(timeoutTimer);  
                timeoutTimer = window.setTimeout(function () {  
                    $message.fadeOut(function () {  
                        $message.remove();  
                    });  
                }, duration || 2000);  
                if ($message)  
                    $message.remove();  
                $message = $('<div ></div>').html(msg).css({  
                    margin: 0,  
                    padding: 10,  
                    background: "#000",  
                    opacity: 0.7,  
                    position: "fixed",  
                    top: 10,  
                    right: 10,  
                    fontFamily: 'Tahoma',  
                    color: '#fff',  
                    fontSize: 12,  
                    borderRadius: 12,  
                    width: 'auto',  
                    height: 'auto',  
                    textAlign: 'center',  
                    textDecoration: 'none'  
                }).hide().fadeIn().appendTo('body');  
            }  
        };  
    })(jQuery);  
  
</script> 



  <?php 
include "allscript.php";
           ?>

           <?php 
include "footer.php";
           ?>