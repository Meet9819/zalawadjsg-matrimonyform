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
                                <h4 class="pull-left page-title">Dashboard</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Zalawad JSG</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="panel panel-primary text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title">No of Admin</h4></div>
                                <div class="panel-body">




<?php
include"../db.php";

$result = mysqli_query($con,"select count(1) FROM adminlogin");
$row = mysqli_fetch_array($result);

$total = $row[0];

       echo'  

       <h3 class=""><b>'. $total.'</b></h3>'  
?>



                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="panel panel-primary text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title">No of Registered User</h4></div>
                                <div class="panel-body">



<?php
include"../db.php";

$result = mysqli_query($con,"select count(1) FROM user");
$row = mysqli_fetch_array($result);

$total = $row[0];

       echo'  

       <h3 class=""><b>'. $total.'</b></h3>'  
?>



                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="panel panel-primary text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title">No of Paid User</h4></div>
                                <div class="panel-body">
                                   
<?php
include"../db.php";

$result = mysqli_query($con,"select count(1) FROM user where status is not null");
$row = mysqli_fetch_array($result);

$total = $row[0];

       echo'  

       <h3 class=""><b>'. $total.'</b></h3>'  
?>


                                </div>
                            </div>
                        </div>


                          <div class="col-sm-6 col-lg-3">
                            <div class="panel panel-primary text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title">No of Admin User</h4></div>
                                <div class="panel-body">
                                   
<?php
include"../db.php";

$result = mysqli_query($con,"select count(1) FROM adminlogin");
$row = mysqli_fetch_array($result);

$total = $row[0];

       echo'  

       <h3 class=""><b>'. $total.'</b></h3>'  
?>


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