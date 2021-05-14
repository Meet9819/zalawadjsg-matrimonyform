<?php
include "allcss.php";
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
  $("#myform").on("submit", function(){
    $("#pageloader").fadeIn();
  });//submit
});//document ready



	</script>

	<style type="text/css">
		#pageloader
{
  background: rgba( 255, 255, 255, 0.8 );
  display: none;
  height: 100%;
  position: fixed;
  width: 100%;
  z-index: 9999;
}

#pageloader img
{
  left: 50%;
  margin-left: -32px;
  margin-top: -32px;
  position: absolute;
  top: 50%;
}

	</style>
	
	

<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127348898-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-127348898-1');
        </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    
    
    
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("input.confirmation").click(function(e){
        if(!confirm('Are you sure? All the Information You Entered are Correct ? ')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>   




<?php 
$con = mysqli_connect('localhost','root','','zalawadjsg');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }




if (isset($_POST['email_check'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM user WHERE email='$email'";
    $results = mysqli_query($con, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }






if (isset($_POST['mobile_check'])) {
    $mobile = $_POST['mobile'];
    $sql = "SELECT * FROM user WHERE mobile='$mobile'";
    $results = mysqli_query($con, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }




?>



<div id="pageloader">
   <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="processing..." />
</div>


        <div style="margin-left: 0px;" class="content-page">
            <div style="margin-top:0px;" class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div style="background-color:#b91e39" class="page-header-title">
                                <h4 style="color:white" class="pull-left page-title">Registration Page</h4>
                                
                                 <h4 style="color:white" class="pull-right page-title">Shree Zalawad Jain Yuvak Yuvati Parichay Milan</h4>
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="row">

  <b style="
    font-size: 15px;
    color: #bb1a36;
    padding: 13px;
">- All Field are Manadatory </b><br><br>

  <div class="col-sm-12">
    <div class="panel panel-primary">
       <div class="panel-body">
                                   
  


 <form id="myform" action="thankyou.php" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return checkForm(this);">




   
<div class="form-group">
 <div class="col-md-12">
     <label style="text-align:left" class="col-md-1 control-label">Mobile</label>
  </div>
</div>
     
    <div id="error_msg"></div>
  <div class="form-group">
  <div class="col-md-12">
    <div>
      <input type="text" required="" name="mobile" class="form-control" placeholder="mobile" id="mobile"><br>
    <span style="color:#b91e39;font-weight: bold;font-size: 15px;"></span>
    </div>
   </div>
   </div>


<div class="form-group">
 <div class="col-md-12">
     <label style="text-align:left" class="col-md-1 control-label">Email</label>
  </div>
</div>

<div class="form-group">
  <div class="col-md-12">
  <div>
    <input type="email" name="email" class="form-control"  placeholder="Email" id="email">  <br>
    <span style="color:#b91e39;font-weight: bold;font-size: 15px;"></span>
  </div></div>
</div>



              
             <div class="row">



                        <div class="col-sm-12">
                            <div style="background-color:#b91e39;padding:2px" class="page-header-title">
                                
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>                        
                                   
         <div class="form-group">
               <label class="col-sm-1 control-label">Latest Photo</label>
                    <div class="col-md-3">
                     <input type="file" class="fileinput btn-primary" name="image" required="" /> <span class="help-block">Passport Size Photo</span>
                     </div>
        </div>


 



  					 <div class="form-group">
                                            <label class="col-md-1 control-label">First Name</label>
                                            <div class="col-md-3">
                                                <input type="text" required=""   id="name"  name="name"  class="form-control" placeholder="First Name"  />
                                            </div>



                                              <label class="col-md-1 control-label" >Middle Name</label>
                                            <div class="col-md-3">
                                                <input type="text" required=""     name="middlename"  class="form-control" placeholder="Middle Name"  />
                                            </div>


                                             <label class="col-md-1 control-label" >Last Name</label>
                                            <div class="col-md-3">
                                                <input type="text" required=""     name="lastname"  class="form-control" placeholder="Last Name"  />
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-1 control-label">Gender</label>
                                            <div class="col-md-3">
                                                

                                                <select required="" name="gender"  class="form-control">
 <option value="">--- Select Gender --- </option>

  <option value="ZM">Male</option>
  <option value="ZF">Female</option>
</select>


                                            </div>


                                              <label class="col-md-1 control-label" >Birth Date</label>
                                            <div class="col-md-3">
                                                <input type="date" required=""     name="dob"  class="form-control" placeholder="Birth Date"  />
                                            </div>


                                            <label class="col-md-1 control-label">Time & Place</label>
                                            <div class="col-md-3">
                                                <input type="text" required=""   name="timeplace"  class="form-control" placeholder="Time & Place of birth"  />
                                            </div>

                                        </div>


                                       
                                       
                                       
                                        <div class="form-group">
                                            <label class="col-md-1 control-label">Height (in inch)</label>
                                            <div class="col-md-3">
                                                <input type="text" required=""     name="height"  class="form-control" placeholder="Height"  />
                                            </div>


                                              <label class="col-md-1 control-label">Weight (in Kg)</label>
                                            <div class="col-md-3">
                                                <input type="text" required=""     name="weight"  class="form-control" placeholder="Weight"  />
                                            </div>

                                               <label class="col-md-1 control-label">Blood Group</label>
                                            <div class="col-md-3">


                                                <select required="" name="bloodgroup"  class="form-control">
 <option value="">--- Select Blood Group --- </option>

  <option value="A+">A+</option>
  <option value="B+">B+</option>
   <option value="AB+">AB+</option>
  <option value="O+">O+</option>
   <option value="A-">A-</option>
  <option value="B-">B-</option>
   <option value="AB-">AB-</option>
  <option value="O-">O-</option>
  <option value="Not Known">Not Known</option>
</select>


                                               
                                            </div>


                                        </div>





 <div class="form-group">
                                            <label class="col-md-1 control-label">Education</label>
                                            <div class="col-md-5">


 <input type="text" required=""    name="education"  class="form-control" placeholder="Education"  />
                                           
                                           
                                                  </div>


                                              <label class="col-md-1 control-label">Profession</label>
                                            <div class="col-md-5">
                                                <input type="text" required="" name="profession"  class="form-control" placeholder="Profession"  />
                                            </div>


                                        </div>






 <div class="form-group">
                                            <label class="col-md-1 control-label">Telephone (Res.)</label>
                                            <div class="col-md-5">

                                            
   <input type="text" required=""     name="telephone"  class="form-control" placeholder="Res. Telephone"  />
                                        
                                           
                                               
                                            </div>
                                            
                                            
                                             <label class="col-md-1 control-label">Family Type </label>
                                            <div class="col-md-5">
                                            
                                            

                                                <select required="" name="staying"  class="form-control">
 <option value="">--- Select Family Type --- </option>

  <option value="Joint Family">Joint Family</option>
  <option value="Nuclear Family">Nuclear Family</option>
</select>



                                           
                                           
                                               
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                        </div>



 <div class="form-group">
                                            <label class="col-md-1 control-label">Annual Income &nbsp;&nbsp;&nbsp; (in lakhs)</label>
                                            <div class="col-md-3">
                                                <input type="text" required=""   name="annualincome"  class="form-control" placeholder="Annual Income"  />
                                            </div>

                                              <label class="col-md-1 control-label">Spectacles</label>
                                            <div class="col-md-3">
                                              
                                                <select required="" name="spectacles"  class="form-control">
 <option value="">--- Select Spectacles --- </option>

  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select>


                                          
                                            </div>


                                            <label class="col-md-1 control-label">Caste</label>
                                            <div class="col-md-3">
                                             
                                              <select required="" name="caste"  class="form-control">
 <option value="">--- Select Caste --- </option>

  <option value="Deravasi">Deravasi</option>
  <option value="Sthankwasi">Sthankwasi</option>
   <option value="Terapanthi">Terapanthi</option>
  <option value="Digambar">Digambar</option>
  
</select>
   
                                              </div>



                                        </div>




 <div class="form-group">
                                            <label class="col-md-1 control-label">Native Place</label>
                                            <div class="col-md-5">
                                               

                                            <input type="text" required=""    name="nativeplace"  class="form-control" placeholder="Native Place"  />
                                           
                </div>

                                               <label class="col-md-1 control-label">Manglik</label>
                                            <div class="col-md-5">

                                             <select required="" name="manglik"  class="form-control">
 <option value="">--- Select Manglik --- </option>

  <option value="Yes">Yes</option>
  <option value="No">No</option>
   
</select>


                                               
                                            </div>



                                        </div>




 <div class="form-group">
                                            <label class="col-md-1 control-label">Office Address</label>
                                            <div class="col-md-11">
                                               <input type="text" required=""   name="officeaddress"  class="form-control" placeholder="Flat No., Wing,  Buiding Name, Road Name, City, Pincode"  />
                                               
                                                  </div>

                                           


  </div>





 <div class="form-group">
                                         

                                             <label class="col-md-1 control-label">Hobbies</label>
                                            <div class="col-md-3">
                                                <input type="text" required=""    name="hobbies"  class="form-control" placeholder="Hobbies"  />
                                            </div>
    <label class="col-md-1 control-label">Brother</label>
                                            <div class="col-md-3">
                                            
                                              <select required="" name="brother"  class="form-control">
 <option value="">--- Select No of Brother --- </option>
<option value="No">No</option>
  <option value="1">1</option>
  <option value="2">2</option>
    <option value="3">3</option>
  <option value="4">4</option>
    <option value="5">5</option>
  <option value="5 & Above">5 & Above</option>
   
</select>

                                                 </div>

                                               <label class="col-md-1 control-label">Sister</label>
                                            <div class="col-md-3">
                                              
                                                <select required="" name="sister"  class="form-control">
 <option value="">--- Select No of Sister --- </option>
<option value="No">No</option>
  <option value="1">1</option>
  <option value="2">2</option>
    <option value="3">3</option>
  <option value="4">4</option>
    <option value="5">5</option>
  <option value="5 & Above">5 & Above</option>
   
</select>

 
                                            </div>


                                        </div>
                                        
                                        
                                        
 <div class="form-group">
                                          
                                               
                                               <label class="col-md-1 control-label">Horoscope</label>
                                            <div class="col-md-5">
                                                 
                                                   <select required="" name="horoscope"  class="form-control">
 <option value="">--- Select horoscope --- </option>

  <option value="Interested">Interested</option>
  <option value="Not Interested">Not Interested</option>
   
</select>

                            
                                           
                                            
                                            
                                            
                                            </div>

                                               <label class="col-md-1 control-label">Complexion</label>
                                            <div class="col-md-5">
 <input type="text" required="" name="complexion"  class="form-control" placeholder="Complexion"  />
                                           
                                            </div>



                                        </div>
                                        
                                        
                                          <div class="form-group">
                                         
                                              <label class="col-md-1 control-label">Partner Choice</label>
                                            <div class="col-md-3">
                                                <input type="text" required=""   name="preference"  class="form-control" placeholder="Partner Choice"  />
                                            </div>
                                            
                                            
                                            
                                              <label class="col-md-1 control-label">Marital Status</label>
                                            <div class="col-md-3">
                                            
                                             <select required="" name="marital"  class="form-control">
 <option value="">--- Select Marital Status --- </option>

  <option value="Freshers">Freshers</option>
  <option value="Engagement Broken">Engagement Broken</option>
   
</select>


                                                   </div>
                                                   
                                                   
                                                   
                               <label class="col-md-1 control-label">Disability</label>
                                            <div class="col-md-3">
                                            
                                             <input type="text" required=""   name="disability"  class="form-control" placeholder="Disability"  />


                                             </div>
      




                                        </div>
                                        



<br><br>
 <div class="row">
                        <div class="col-sm-12">
                            <div style="background-color:#b91e39;padding:2px" class="page-header-title">
                                
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>     


 <div class="form-group">
                                            <label class="col-md-1 control-label">Father Name</label>
                                            <div class="col-md-3">
                                                <input type="text" required=""     name="fathername"  class="form-control" placeholder="Enter Father's Full Name"  />
                                            </div>

                                                 <label class="col-md-1 control-label">Father Mob</label>
                                            <div class="col-md-3">
                                                <input type="text" required=""     name="fathermob"  class="form-control" placeholder="Father's Mobile Number"  />
                                            </div>


                                            <label class="col-md-1 control-label">Father Occu</label>
                                            <div class="col-md-3">
                                                <input type="text" required=""    name="fatheroccu"  class="form-control" placeholder="Father's Occupation"  />
                                            </div>

                                        </div>
                                        
                                          <div class="form-group">
                                            <label class="col-md-1 control-label">Resi Address</label>
                                            <div class="col-md-11">
                                              <input type="text" required=""   name="resiaddress"  class="form-control" placeholder="Flat No., Wing, Buiding Name, Road Name, City, Pincode"  />
                                            </div>
                                        </div>
<br><br>
 <div class="row">
                        <div class="col-sm-12">
                            <div style="background-color:#b91e39;padding:2px" class="page-header-title">
                                
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>     


 <div class="form-group">
                                            <label class="col-md-1 control-label">Mother Name</label>
                                            <div class="col-md-3">
                                                <input type="text" required=""    name="mothername"  class="form-control" placeholder="Mother's Full Name"  />
                                            </div>


                                            <label class="col-md-1 control-label">Mosal</label>
                                            <div class="col-md-3">
                                                <input type="text" required=""    name="mosal"  class="form-control" placeholder="Nana / Mama's Name"  />
                                            </div>
                                            
                                               <label class="col-md-1 control-label">Mosal Native</label>
                                            <div class="col-md-3">
                                                <input type="text" required=""    name="mosalnative"  class="form-control" placeholder="Mosal Native"  />
                                            </div>

 

                                        </div>











<br><br>
 <div class="row">
                        <div class="col-sm-12">
                            <div style="background-color:#b91e39 ;padding:2px" class="page-header-title">
                                
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>     


                                    <div class="form-group">
                                         

                                             

                                              <label class="col-md-1 control-label">Reference</label>
                                            <div class="col-md-11">
                                                <input type="text" required=""   name="reference"  class="form-control" placeholder="Reference Name / Address / Contact Number"  />
                                            </div>



                                        </div>






        <div class="form-group">
                   <div class="col-md-12" style=" text-align: center;">
                                                                                                         
 <label style="
    font-size: 16px; font-weight: bold;color: #b91e39;" class="checkbox-inline">
      <input type="checkbox"  required="" value="">I HEREBY DECLARE THAT WHATEVER STATED HERE IN ABOVE IS TRUE TO THE BEST OF MY KNOWLEDGE AND BELIEF. I ALSO UNDERTAKE TO ABIDE THE RULES, REGULATION & CONDITON OF THE MANDAL.
    </label>
    </div>
    </div>



                                        <div class="form-group">
                                            <label class="col-md-4 control-label"></label>
                                            <div  class="col-md-4">
                                              

 <input style="width: 100%;" id="confirmation" class="btn btn-primary " type="submit" name="Submit" value="Submit" />

                                            </div>
                                             <label class="col-md-4 control-label"></label>
                                        </div>




 
  

                                 
                                    </form>
                                </div>
                            </div>
                        </div>









                    </div>
                    
                   
                </div>
            </div>
            
              <footer style="    background-color: #bb1a36;
    border-top: 1px solid rgba(0, 0, 0, .05);
    color: #ffffff;
    text-align: left!important;
    padding: 10px 30px;
    width:100%;
    position: absolute;
    left: 0px;"> 2018 © Shree Zalawad Jain Yuvak Yuvati Parichay Milan - Borivali </footer>
              
              
           <?php 
include "allscript.php";
           ?>
           
            
        
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    
    
   
 

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="script.js"></script>
         