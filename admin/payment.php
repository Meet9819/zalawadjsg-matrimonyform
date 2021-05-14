<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit();
}
?>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>


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
                                <h4 class="pull-left page-title">All Payment Detailsa</h4>
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">All Payment Details </h3></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">





   <table  id="datatable" class="table datatable">
 
 <?php


$connection = mysqli_connect('localhost','root','');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'zalawadjsg');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

$perpage = 15;
if(isset($_GET['page']) & !empty($_GET['page'])){
  $curpage = $_GET['page'];
}else{
  $curpage = 1;
}
$start = ($curpage * $perpage) - $perpage;
$PageSql = "SELECT * FROM `payment`";
$pageres = mysqli_query($connection, $PageSql);
$totalres = mysqli_num_rows($pageres);

$endpage = ceil($totalres/$perpage);
$startpage = 1;
$nextpage = $curpage + 1;
$previouspage = $curpage - 1;

$ReadSql = "SELECT * FROM `payment` LIMIT $start, $perpage";
$res = mysqli_query($connection, $ReadSql);
?>


    <thead> 
      <tr> 


        <th> Name</th> 
        <th>Mobile</th> 
        <th>Email</th>  
        <th>Payment ID</th> 
       

      </tr> 
    </thead> 
    <tbody> 
    <?php 
    while($r = mysqli_fetch_assoc($res)){


    ?>
      <tr> 
  
        <td><?php echo $r['name']; ?></td> 
        <td><?php echo $r['phone']; ?></td> 
        <td><?php echo $r['email']; ?></td> 
        <td><?php echo $r['paymentid']; ?></td> 
       
       
      </tr>

    <?php } ?>
    </tbody> 
    </table>


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

        