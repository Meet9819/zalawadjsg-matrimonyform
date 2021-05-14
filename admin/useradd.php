<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>

<?php
include "allcss.php";
?>

<?php 
include "header.php";
?>
        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-header-title">
                                <h4 class="pull-left page-title">Add Team</h4>
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                  
                  
        <div style="    margin-left: 0px;" class="content-page">
            <div style="margin-top:0px;" class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div style="background-color:#b91e39" class="page-header-title">
                                <h4 style="color:white" class="pull-left page-title">Registration Page</h4>
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="row">


















                        <div class="col-sm-12">
                            <div class="panel panel-primary">
                              
                                <div class="panel-body">
                                   
    


      <?php
include('../db.php');
if (!isset($_FILES['image']['tmp_name'])) {
    echo "";
    }else{
    $file=$_FILES['image']['tmp_name'];
    $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name= addslashes($_FILES['image']['name']);

            move_uploaded_file($_FILES["image"]["tmp_name"],"photos/user/" . $_FILES["image"]["name"]);

            $img="" . $_FILES["image"]["name"];
          
           
            $name=$_POST['name'];
            $middlename=$_POST['middlename'];
                $lastname=$_POST['lastname'];
                  $gender=$_POST['gender'];
                  $dob=$_POST['dob'];
            $timeplace=$_POST['timeplace'];
             $height=$_POST['height'];
             $weight=$_POST['weight'];
              $bloodgroup=$_POST['bloodgroup'];
              $education=$_POST['education'];
             $profession=$_POST['profession'];
            $officeaddress=$_POST['officeaddress'];
              $annualincome=$_POST['annualincome'];
             $spectacles=$_POST['spectacles'];
            $caste=$_POST['caste'];
             $horoscope=$_POST['horoscope'];
              $manglik=$_POST['manglik'];
             $telephone=$_POST['telephone'];
            $mobile=$_POST['mobile'];
              $email=$_POST['email'];
             $hobbies=$_POST['hobbies'];
            $brother=$_POST['brother'];
             $sister=$_POST['sister'];


              $fathername=$_POST['fathername'];
             $fathermob=$_POST['fathermob'];
            $fatheroccu=$_POST['fatheroccu'];

              $mothername=$_POST['mothername'];
             $nativeplace=$_POST['nativeplace'];
                $mosal=$_POST['mosal'];
            
            
            $preference=$_POST['preference'];
              $relativesno=$_POST['relativesno'];
           

            $save=mysqli_query($con,"INSERT INTO user (img,name,middlename,lastname,gender,dob,timeplace,height,weight,bloodgroup,education,profession,officeaddress,annualincome,spectacles,caste,horoscope,manglik,telephone,mobile,email,hobbies,brother,sister,fathername,fathermob,fatheroccu,mothername,nativeplace,mosal ,preference,relativesno)

 VALUES ('$img','$name', '$middlename', '$lastname', '$gender', '$dob','$timeplace','$height','$weight', '$bloodgroup','$education','$profession','$officeaddress','$annualincome','$spectacles','$caste','$horoscope','$manglik','$telephone','$mobile','$email','$hobbies','$brother','$sister','$fathername','$fathermob','$fatheroccu','$mothername','$nativeplace','$preference','$mosal','$relativesno'
 )");

             ?>
                <script>
                alert('Successfully Inserted ...');
                window.location.href='userdata.php';
                </script>
                <?php


                           
    }
?>



 <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
              
             <div class="row">
                        <div class="col-sm-12">
                            <div style="background-color:#b91e39;padding:2px" class="page-header-title">
                                
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>                        
                                   
         <div class="form-group">
               <label class="col-sm-1 control-label">Select Profile Pic</label>
                    <div class="col-md-3">
                     <input type="file" class="fileinput btn-primary" name="image"  /> <span class="help-block">Size of Image [500 x 600]</span>
                     </div>



         </div>




   <div class="form-group">
                                            <label class="col-md-1 control-label">First Name</label>
                                            <div class="col-md-3">
                                                <input type="text"   name="name"  class="form-control" placeholder="First Name"  />
                                            </div>


                                              <label class="col-md-1 control-label" >Middle Name</label>
                                            <div class="col-md-3">
                                                <input type="text"   name="middlename"  class="form-control" placeholder="Middle Name"  />
                                            </div>


                                             <label class="col-md-1 control-label" >Last Name</label>
                                            <div class="col-md-3">
                                                <input type="text"   name="lastname"  class="form-control" placeholder="Last Name"  />
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-1 control-label">Gender</label>
                                            <div class="col-md-3">
                                                

                                                <select name="gender"  class="form-control">
 <option>--- Select Gender --- </option>

  <option value="zm-male">Male</option>
  <option value="zf-female">Female</option>
</select>


                                            </div>


                                              <label class="col-md-1 control-label" >DOB</label>
                                            <div class="col-md-3">
                                                <input type="text"   name="dob"  class="form-control" placeholder="DOB"  />
                                            </div>


                                            <label class="col-md-1 control-label">Time</label>
                                            <div class="col-md-3">
                                                <input type="text"  name="timeplace"  class="form-control" placeholder="Time"  />
                                            </div>

                                        </div>


                                       
                                       
                                       
                                        <div class="form-group">
                                            <label class="col-md-1 control-label">Height</label>
                                            <div class="col-md-3">
                                                <input type="text"   name="height"  class="form-control" placeholder="Height"  />
                                            </div>


                                              <label class="col-md-1 control-label">Weight</label>
                                            <div class="col-md-3">
                                                <input type="text"   name="weight"  class="form-control" placeholder="Weight"  />
                                            </div>

                                               <label class="col-md-1 control-label">Blood Group</label>
                                            <div class="col-md-3">


                                                <select name="bloodgroup"  class="form-control">
 <option>--- Select Blood Group --- </option>

  <option value="A+">A+</option>
  <option value="B+">B+</option>
   <option value="AB+">AB+</option>
  <option value="O+">O+</option>
   <option value="A-">A-</option>
  <option value="B-">B-</option>
   <option value="AB-">AB-</option>
  <option value="O-">O-</option>
</select>


                                               
                                            </div>


                                        </div>





 <div class="form-group">
                                            <label class="col-md-1 control-label">Education</label>
                                            <div class="col-md-5">

                                                  <select name="education"  class="form-control">
 <option>--- Select Education Details --- </option>

  <option value="10th Pass">10th Pass</option>
  <option value="12th Pass & Above">12th Pass & Above</option>
   <option value="Graduate">Graduate</option>
  <option value="Post Graduate">Post Graduate</option>
   
</select>
                                            
                                            </div>


                                              <label class="col-md-1 control-label">Profession</label>
                                            <div class="col-md-5">
                                                <input type="text"  name="profession"  class="form-control" placeholder="Profession"  />
                                            </div>


                                        </div>






 <div class="form-group">
                                            <label class="col-md-1 control-label">Office Address</label>
                                            <div class="col-md-11">

                                             <input type="text" name="officeaddress"  class="form-control" placeholder="Office Address"  />

                                           
                                               
                                            </div>
                                        </div>



 <div class="form-group">
                                            <label class="col-md-1 control-label">Annual Income</label>
                                            <div class="col-md-3">
                                                <input type="text" name="annualincome"  class="form-control" placeholder="Annual Income"  />
                                            </div>

                                              <label class="col-md-1 control-label">Spectacles</label>
                                            <div class="col-md-3">
                                                <input type="text"  name="spectacles"  class="form-control" placeholder="Spectacles"  />
                                            </div>


                                            <label class="col-md-1 control-label">Caste</label>
                                            <div class="col-md-3">
                                                <input type="text"  name="caste"  class="form-control" placeholder="Caste"  />
                                            </div>



                                        </div>




 <div class="form-group">
                                            <label class="col-md-1 control-label">horoscope</label>
                                            <div class="col-md-5">
                                                <input type="text"  name="horoscope"  class="form-control" placeholder="horoscope"  />
                                            </div>

                                               <label class="col-md-1 control-label">Manglik</label>
                                            <div class="col-md-5">

                                             <select name="manglik"  class="form-control">
 <option>--- Select Manglik --- </option>

  <option value="Yes">Yes</option>
  <option value="No">No</option>
   
</select>


                                               
                                            </div>



                                        </div>




 <div class="form-group">
                                            <label class="col-md-1 control-label">telephone</label>
                                            <div class="col-md-3">
                                                <input type="text"   name="telephone"  class="form-control" placeholder="telephone"  />
                                            </div>

                                                 <label class="col-md-1 control-label">mobile</label>
                                            <div class="col-md-3">
                                                <input type="text"  name="mobile"  class="form-control" placeholder="mobile"  />
                                            </div>


                                               <label class="col-md-1 control-label">email</label>
                                            <div class="col-md-3">
                                                <input type="text"  name="email"  class="form-control" placeholder="email"  />
                                            </div>


                                        </div>






 <div class="form-group">
                                         

                                             <label class="col-md-1 control-label">hobbies</label>
                                            <div class="col-md-3">
                                                <input type="text"  name="hobbies"  class="form-control" placeholder="hobbies"  />
                                            </div>
    <label class="col-md-1 control-label">brother</label>
                                            <div class="col-md-3">
                                                <input type="text" name="brother"  class="form-control" placeholder="brother"  />
                                            </div>

                                               <label class="col-md-1 control-label">sister</label>
                                            <div class="col-md-3">
                                                <input type="text"  name="sister"  class="form-control" placeholder="sister"  />
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
                                            <label class="col-md-1 control-label">fathername</label>
                                            <div class="col-md-3">
                                                <input type="text"   name="fathername"  class="form-control" placeholder="fathername"  />
                                            </div>

                                                 <label class="col-md-1 control-label">fathermob</label>
                                            <div class="col-md-3">
                                                <input type="text"   name="fathermob"  class="form-control" placeholder="fathermob"  />
                                            </div>


                                            <label class="col-md-1 control-label">fatheroccu</label>
                                            <div class="col-md-3">
                                                <input type="text"  name="fatheroccu"  class="form-control" placeholder="fatheroccu"  />
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
                                                <input type="text"  name="mothername"  class="form-control" placeholder="Mother Name"  />
                                            </div>


                                               <label class="col-md-1 control-label">Native Place</label>
                                            <div class="col-md-3">
                                                <input type="text"  name="nativeplace"  class="form-control" placeholder="Native Place"  />
                                            </div>

   <label class="col-md-1 control-label">Mosal</label>
                                            <div class="col-md-3">
                                                <input type="text"  name="mosal"  class="form-control" placeholder="Mosal"  />
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
                                         

                                              <label class="col-md-1 control-label">Preference</label>
                                            <div class="col-md-3">
                                                <input type="text" name="preference"  class="form-control" placeholder="Preference"  />
                                            </div>
      

                                              <label class="col-md-1 control-label">Relatives No</label>
                                            <div class="col-md-3">
                                                <input type="text" name="relativesno"  class="form-control" placeholder="Relatives No"  />
                                            </div>



                                        </div>




                                        




                                        <div class="form-group">
                                            <label class="col-md-4 control-label"></label>
                                            <div  class="col-md-4">
                                              

 <input style="width: 100%;" class="btn btn-primary" type="submit" name="Submit" value="Add" />

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
              
                   
                </div>
            </div>
              
           <?php 
include "allscript.php";
           ?>

           <?php 
include "footer.php";
           ?>