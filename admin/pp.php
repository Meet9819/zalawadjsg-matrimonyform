<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>

    <!DOCTYPE html>
    <html lang="en">

 
      <?php 
include"allcss.php";
?>

    <body>

     

            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Registration Data</li>

            </ul>

            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">

                            <div class="page-content-wrap">

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">All Registration Data</h3>

                                            </div>



 
    
                                            <div class="panel-body">
                                                <table class="table datatable">
                                                   










 <?php


$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'zalawadjsg');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

$perpage = 1;
if(isset($_GET['page']) & !empty($_GET['page'])){
  $curpage = $_GET['page'];
}else{
  $curpage = 1;
}
$start = ($curpage * $perpage) - $perpage;
$PageSql = "SELECT * FROM `user`";
$pageres = mysqli_query($connection, $PageSql);
$totalres = mysqli_num_rows($pageres);

$endpage = ceil($totalres/$perpage);
$startpage = 1;
$nextpage = $curpage + 1;
$previouspage = $curpage - 1;

$ReadSql = "SELECT * FROM `user` LIMIT $start, $perpage";
$res = mysqli_query($connection, $ReadSql);
?>

    <thead> 
      <tr> 
        <th>User Id</th> 
        <th>Username</th> 
        <th>Email</th> 
        <th>Password</th> 
           <th>Mobile</th> 
        <th>Status</th> 
          <th>Token Code</th> 
     
        
      </tr> 
    </thead> 
    <tbody> 
    <?php 
    while($r = mysqli_fetch_assoc($res)){
    ?>
      <tr> 

    <td><?php echo $r['name']; ?></td> 
        <td><?php echo $r['email']; ?></td> 
        <td><?php echo $r['lastname']; ?></td> 
        <td><?php echo $r['middlename']; ?></td> 
         <td><?php echo $r['mobile']; ?></td> 
       <td><?php echo $r['status']; ?></td> 

 
        


      </tr> 
    <?php } ?>
    </tbody> 
    </table>
  </div>

  <nav aria-label="Page navigation">
  <ul style="padding:10px" class="pagination">
  <?php if($curpage != $startpage){ ?>
    <li class="page-item">
      <a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">First</span>
      </a>
    </li>
    <?php } ?>
    <?php if($curpage >= 2){ ?>
    <li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
    <?php } ?>
    <li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>
    <?php if($curpage != $endpage){ ?>
    <li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
    <li class="page-item">
      <a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Last</span>
      </a>
    </li>
    <?php } ?>
  </ul>
</nav>

                                                </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                             
</div>
                    </div>
                </div>

            </div>
            </div>
            </div>


 



    </body>

    </html>