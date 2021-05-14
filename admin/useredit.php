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
                  
                    <div class="row">





                        <div class="col-sm-12">
                            <div class="panel panel-primary">
                              
                                <div class="panel-body">
                                   
    



<?php

    error_reporting( ~E_NOTICE );
    
    require_once '../dbconfig.php';
    
    if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
    {
        $id = $_GET['edit_id'];
        $stmt_edit = $DB_con->prepare('SELECT uniqueid,img,name,middlename,lastname,gender,dob,timeplace,height,weight,bloodgroup,education,profession,officeaddress,resiaddress,staying,annualincome,spectacles,caste,horoscope,manglik,telephone,mobile,email,hobbies,brother,sister,fathername,fathermob,fatheroccu,mothername,nativeplace,preference,mosal,reference,mosalnative,complexion,disability FROM user WHERE id =:id');
        $stmt_edit->execute(array(':id'=>$id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
    }
    else
    {
        header("Location: useredit.php");
    }
    
    
    
    if(isset($_POST['btn_save_updates']))
    {
  $uniqueid = $_POST['uniqueid'];
             $name = $_POST['name'];
             $disability= $_POST['disability'];
             
                $middlename = $_POST['middlename'];
                   $lastname = $_POST['lastname'];
                      $gender = $_POST['gender'];

                   $dob=$_POST['dob'];
             $timeplace=$_POST['timeplace'];
             $height=$_POST['height'];
             $weight=$_POST['weight'];
        

         $bloodgroup=$_POST['bloodgroup'];
              $education=$_POST['education'];
             $profession=$_POST['profession'];
            $officeaddress=$_POST['officeaddress'];
            
               $resiaddress=$_POST['resiaddress'];
                  $staying=$_POST['staying'];
                  
                  
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
          
            $preference=$_POST['preference'];
              $mosal=$_POST['mosal'];
             $reference=$_POST['reference'];
             
               $mosalnative=$_POST['mosalnative'];
             $complexion=$_POST['complexion'];


        $imgFile = $_FILES['user_image']['name'];
        $tmp_dir = $_FILES['user_image']['tmp_name'];
        $imgSize = $_FILES['user_image']['size'];
                    
        if($imgFile)
        {
            $upload_dir = 'photos/user/'; // upload directory 
            $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
            $img = rand(1000,1000000).".".$imgExt;
            if(in_array($imgExt, $valid_extensions))
            {           
                if($imgSize < 5000000)
                {
                    unlink($upload_dir.$edit_row['img']);
                    move_uploaded_file($tmp_dir,$upload_dir.$img);
                }
                else
                {
                    $errMSG = "Sorry, your file is too large it should be less then 5MB";
                }
            }
            else
            {
                $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";        
            }   
        }
        else
        {
            $img = $edit_row['img']; 
        }   
            





        if(!isset($errMSG))
        {
$stmt = $DB_con->prepare('UPDATE user SET uniqueid=:uniqueid,name=:name,middlename=:middlename,lastname=:lastname,gender=:gender, img=:img,dob=:dob,  timeplace=:timeplace,  height=:height , weight=:weight, bloodgroup=:bloodgroup, education=:education, profession=:profession, officeaddress=:officeaddress,resiaddress=:resiaddress,staying=:staying, 

    annualincome=:annualincome, spectacles=:spectacles, caste=:caste, horoscope=:horoscope, 

    manglik=:manglik, telephone=:telephone, mobile=:mobile, email=:email, hobbies=:hobbies, brother=:brother, sister=:sister, fathername=:fathername, fathermob=:fathermob, fatheroccu=:fatheroccu, mothername=:mothername, nativeplace=:nativeplace,  preference=:preference, mosal=:mosal, reference=:reference, mosalnative=:mosalnative, complexion=:complexion, disability=:disability WHERE id=:id');
           



  $stmt->bindParam(':uniqueid',$uniqueid);

 $stmt->bindParam(':disability',$disability);  
            $stmt->bindParam(':name',$name);  

            $stmt->bindParam(':middlename',$middlename); 
            $stmt->bindParam(':lastname',$lastname); 
            $stmt->bindParam(':gender',$gender); 

            $stmt->bindParam(':img',$img);
            $stmt->bindParam(':dob',$dob);
            $stmt->bindParam(':timeplace',$timeplace);
            $stmt->bindParam(':height',$height);
            $stmt->bindParam(':weight',$weight);

            $stmt->bindParam(':bloodgroup',$bloodgroup);
            $stmt->bindParam(':education',$education);
            $stmt->bindParam(':profession',$profession);
            $stmt->bindParam(':officeaddress',$officeaddress);

$stmt->bindParam(':resiaddress',$resiaddress);
$stmt->bindParam(':staying',$staying);

            $stmt->bindParam(':annualincome',$annualincome);
            $stmt->bindParam(':spectacles',$spectacles);
            $stmt->bindParam(':caste',$caste);
            $stmt->bindParam(':horoscope',$horoscope);
             
            $stmt->bindParam(':manglik',$manglik);    
            $stmt->bindParam(':telephone',$telephone);
            $stmt->bindParam(':mobile',$mobile);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':hobbies',$hobbies);
            $stmt->bindParam(':brother',$brother);

            $stmt->bindParam(':sister',$sister);    
            $stmt->bindParam(':fathername',$fathername);
            $stmt->bindParam(':fathermob',$fathermob);
            $stmt->bindParam(':fatheroccu',$fatheroccu);
            $stmt->bindParam(':mothername',$mothername);
            $stmt->bindParam(':nativeplace',$nativeplace);

            
            $stmt->bindParam(':preference',$preference);
            $stmt->bindParam(':mosal',$mosal);
            $stmt->bindParam(':reference',$reference);
            
              $stmt->bindParam(':mosalnative',$mosalnative);
            $stmt->bindParam(':complexion',$complexion);



            $stmt->bindParam(':id',$id);
                
            if($stmt->execute()){
                ?>
                <script>
                alert('Successfully Updated ...');
                window.location.href='userdata.php';
                </script>
                <?php
            }
            else{
                $errMSG = "Sorry Data Could Not Updated !";
            }
        
        }
        
                        
    }
    
?>






 <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                 <div class="form-group">
                                            <label class="col-md-2 control-label">Unique ID</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $uniqueid; ?>"  name="uniqueid"  class="form-control" placeholder="Unique Id"  />
                                            </div>
                                        </div>
                                        
                                        
                                        
               <div class="form-group">
                                            <label class="col-md-2 col-xs-12 control-label">Profile Image</label>
                                            <div class="col-md-10 col-xs-12">
                                                  <img src="photos/user/<?php echo $img; ?>" height="70" width="   100px" />

            
            
    <input type="file" class="fileinput btn-primary"  name="user_image" accept="image/*" />


 <span class="help-block">Choose Image</span>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Name</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $name; ?>"  name="name"  class="form-control" placeholder="Name"  />
                                            </div>
                                        </div>

                                          <div class="form-group">
                                            <label class="col-md-2 control-label">Middle Name</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $middlename; ?>"  name="middlename"  class="form-control" placeholder="Middle Name"  />
                                            </div>
                                        </div>

                                          <div class="form-group">
                                            <label class="col-md-2 control-label">Last Name</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $lastname; ?>"  name="lastname"  class="form-control" placeholder="Last Name"  />
                                            </div>
                                        </div>

                                          <div class="form-group">
                                            <label class="col-md-2 control-label">Gender</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $gender; ?>"  name="gender"  class="form-control" placeholder="Gender"  />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" >Date of Birth</label>
                                            <div class="col-md-10">
                                                <input type="text" value="<?php echo $dob; ?>"  name="dob"  class="form-control" placeholder="Date of 
Birth "  />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Time - Place</label>
                                            <div class="col-md-10">
                                                <input type="text" value="<?php echo $timeplace; ?>"  name="timeplace"  class="form-control" placeholder="Time - Place"  />
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Height</label>
                                            <div class="col-md-10">
                                                <input type="text" value="<?php echo $height; ?>"  name="height"  class="form-control" placeholder="Height"  />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Weight</label>
                                            <div class="col-md-10">
                                                <input type="text" value="<?php echo $weight; ?>"  name="weight"  class="form-control" placeholder="Weight"  />
                                            </div>
                                        </div>




 <div class="form-group">
                                            <label class="col-md-2 control-label">Blood Group</label>
                                            <div class="col-md-10">
                                                <input type="text" value="<?php echo $bloodgroup; ?>"  name="bloodgroup"  class="form-control" placeholder="Blood Group"  />
                                            </div>
                                        </div>




 <div class="form-group">
                                            <label class="col-md-2 control-label">Education</label>
                                            <div class="col-md-10">
                                                <input type="text" value="<?php echo $education; ?>"  name="education"  class="form-control" placeholder="Education"  />
                                            </div>
                                        </div>




 <div class="form-group">
                                            <label class="col-md-2 control-label">Profession</label>
                                            <div class="col-md-10">
                                                <input type="text" value="<?php echo $profession; ?>" name="profession"  class="form-control" placeholder="Profession"  />
                                            </div>
                                        </div>



 <div class="form-group">
                                            <label class="col-md-2 control-label">Office Address</label>
                                            <div class="col-md-10">
                                                <input type="text" value="<?php echo $officeaddress; ?>" name="officeaddress"  class="form-control" placeholder="Office Address"  />
                                            </div>
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                            <label class="col-md-2 control-label">Staying with Family ?</label>
                                            <div class="col-md-10">
                                                <input type="text" value="<?php echo $staying; ?>" name="staying"  class="form-control" placeholder="Staying with Family ?"  />
                                            </div>
                                        </div>
                                        



 <div class="form-group">
                                            <label class="col-md-2 control-label">Annual Income</label>
                                            <div class="col-md-10">
                                                <input type="text" value="<?php echo $annualincome; ?>"  name="annualincome"  class="form-control" placeholder="Annual Income"  />
                                            </div>
                                        </div>










 <div class="form-group">
                                            <label class="col-md-2 control-label">Spectacles</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $spectacles; ?>"   name="spectacles"  class="form-control" placeholder="Spectacles"  />
                                            </div>
                                        </div>


 <div class="form-group">
                                            <label class="col-md-2 control-label">Caste</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $caste; ?>"   name="caste"  class="form-control" placeholder="Vaste"  />
                                            </div>
                                        </div>


 <div class="form-group">
                                            <label class="col-md-2 control-label">Horoscope</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $horoscope; ?>"   name="horoscope"  class="form-control" placeholder="Horoscope"  />
                                            </div>
                                        </div>


 <div class="form-group">
                                            <label class="col-md-2 control-label">Manglik</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $manglik; ?>"   name="manglik"  class="form-control" placeholder="Manglik"  />
                                            </div>
                                        </div>


 <div class="form-group">
                                            <label class="col-md-2 control-label">Telephone</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $telephone; ?>"   name="telephone"  class="form-control" placeholder="Telephone"  />
                                            </div>
                                        </div>




 <div class="form-group">
                                            <label class="col-md-2 control-label">Mobile</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $mobile; ?>"   name="mobile"  class="form-control" placeholder="Mobile"  />
                                            </div>
                                        </div>


 <div class="form-group">
                                            <label class="col-md-2 control-label">Email</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $email; ?>"   name="email"  class="form-control" placeholder="Email"  />
                                            </div>
                                        </div>


 <div class="form-group">
                                            <label class="col-md-2 control-label">Hobbies</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $hobbies; ?>"   name="hobbies"  class="form-control" placeholder="Hobbies"  />
                                            </div>
                                        </div>


 <div class="form-group">
                                            <label class="col-md-2 control-label">Brother</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $brother; ?>"  name="brother"  class="form-control" placeholder="Brother"  />
                                            </div>
                                        </div>


 <div class="form-group">
                                            <label class="col-md-2 control-label">Sister</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $sister; ?>"   name="sister"  class="form-control" placeholder="Sister"  />
                                            </div>
                                        </div>



 <div class="form-group">
                                            <label class="col-md-2 control-label">Father Name</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $fathername; ?>"   name="fathername"  class="form-control" placeholder="Father Name"  />
                                            </div>
                                        </div>


 <div class="form-group">
                                            <label class="col-md-2 control-label">Father Mob</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $fathermob; ?>"   name="fathermob"  class="form-control" placeholder="Father Mob"  />
                                            </div>
                                        </div>



 <div class="form-group">
                                            <label class="col-md-2 control-label">Father Occu</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $fatheroccu; ?>"  name="fatheroccu"  class="form-control" placeholder="Father Occu"  />
                                            </div>
                                        </div>
                                        
                                        
                                        
 <div class="form-group">
                                            <label class="col-md-2 control-label">Residential Address</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $resiaddress; ?>"  name="resiaddress"  class="form-control" placeholder="Residential Address"  />
                                            </div>
                                        </div>
                                        
                                        
                                        



 <div class="form-group">
                                            <label class="col-md-2 control-label">Mother Name</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $mothername; ?>"   name="mothername"  class="form-control" placeholder="Mother Name"  />
                                            </div>
                                        </div>



 <div class="form-group">
                                            <label class="col-md-2 control-label">Native Place</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $nativeplace; ?>"   name="nativeplace"  class="form-control" placeholder="Native Place"  />
                                            </div>
                                        </div>




 <div class="form-group">
                                            <label class="col-md-2 control-label">Preference</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $preference; ?>"  name="preference"  class="form-control" placeholder="Preference"  />
                                            </div>
                                        </div>


 <div class="form-group">
                                            <label class="col-md-2 control-label">Mosal</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $mosal; ?>"   name="mosal"  class="form-control" placeholder="Mosal"  />
                                            </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="form-group">
                                            <label class="col-md-2 control-label">Mosal Native</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $mosalnative; ?>"   name="mosalnative"  class="form-control" placeholder="Mosal Native"  />
                                            </div>
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                            <label class="col-md-2 control-label">Complexion</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $complexion; ?>"   name="complexion"  class="form-control" placeholder="Complexion"  />
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        

                                         <div class="form-group">
                                            <label class="col-md-2 control-label">Reference</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $reference; ?>"   name="reference"  class="form-control" placeholder="reference"  />
                                            </div>
                                        </div>

   <div class="form-group">
                                            <label class="col-md-2 control-label">Disability</label>
                                            <div class="col-md-10">
                                                <input type="text"  value="<?php echo $disability; ?>"   name="disability"  class="form-control" placeholder="disability"  />
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label"></label>
                                            <div  class="col-md-10">
                                              

                                                 <input class="btn btn-primary pull-right" type="submit" name="btn_save_updates" value="Update" />



                                            </div>
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

           <?php 
include "footer.php";
           ?>