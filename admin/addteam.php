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

include('../db.php');
if(isset($_POST['save']))
{
   
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $contact=$_POST['contact'];
           
            $save=mysqli_query($con,"INSERT INTO adminlogin (username, email, password, contact) VALUES ('$username','$email', '$password', '$contact')");


  ?>
                <script>
                alert('Successfully Inserted ...');
                window.location.href='team.php';
                </script>
                <?php

    }
?>



 <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
              



                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Username</label>
                                            <div class="col-md-10">
                                                <input type="text" name="username" class="form-control" placeholder="Username" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" >Email</label>
                                            <div class="col-md-10">
                                                <input type="email" id="example-email" name="email" class="form-control" placeholder="Email" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Password</label>
                                            <div class="col-md-10">
                                                <input type="password" name="password" class="form-control" placeholder="Password" required />
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Contact No</label>
                                            <div class="col-md-10">
                                                <input type="password" name="contact" class="form-control" placeholder="Contact No" required />
                                            </div>
                                        </div>

                                                  
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"></label>
                                            <div  class="col-md-10">
                                              

                                                 <input class="btn btn-primary pull-right" type="submit" name="save" value="Add" />



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