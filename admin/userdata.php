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
                                <h4 class="pull-left page-title">Registered Data</h4>
                              <ol class="breadcrumb pull-right">
                                    
                                    <li class="active">
                                    
                                     <a href="export/export.php">  <input class="btn btn-primary pull-right"  value="Export To Excel" /></a>
                                     
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">All Registered Data</h3></div>
                                    
                                    
                                     
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">




















   <table  id="datatable" class="table datatable">
                                                   

  <?php



include "../db.php";

/* code for data delete */
if(isset($_GET['del']))
{
    $SQL = mysqli_query($con,"DELETE FROM user WHERE id=".$_GET['del']);

//header("Location: category.php");

}
/* code for data delete */

?>


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
$PageSql = "SELECT * FROM `user` order by uniqueid desc";
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


        <th>Unique ID</th> 
        
         <th> Name</th> 
        <th>Mobile</th> 
        <th>Email</th> 
       <th>Registered on</th> 
        <th>Education</th>
         <th>DOB</th> 
        <th> Profession</th> 
        <th>Payment ID</th> 
       

  
        
          
         
          <th>A-D      </th>

          

           <th>Edit         </th> 
      

         <th> View Details</th>  
  <th>Delete         </th>

      </tr> 
    </thead> 
    <tbody> 
    <?php 
    while($r = mysqli_fetch_assoc($res)){
 $id=$r['id'];
          $activate=$r['activate'];

    ?>
      <tr> 

     <td><?php echo $r['uniqueid']; ?></td> 
     
        <td><?php echo $r['name']; ?></td> 
        <td><?php echo $r['mobile']; ?></td> 
        <td><?php echo $r['email']; ?></td> 
         <td><?php echo $r['trn_date']; ?></td> 
         
        <td><?php echo $r['education']; ?></td> 
         <td><?php echo $r['dob']; ?></td> 
        <td><?php echo $r['profession']; ?></td> 
        <td><?php echo $r['status']; ?></td> 
        
       
      
       
      
               
               <td>  <?php
               if(($activate)=='0')
               {
               ?>
            <b style="color:red;font-weight:bold"
               class="act"> Registered </b>
            <?php
               }
               if(($activate)=='1')
               {
               ?>
            <b style="color:#00ba00;font-weight:bold" href="" 
               class="deact">Payment Link Send </b>
            <?php
            
             }
               ?>   
               </td>



<?php echo '

<td><a href="useredit.php?edit_id='.$r['id'].'"><b style="color:#0d90ff">Edit</b></a></td>   



<td ><a href="userviewdetails.php?q='.$r['id'].'"><b style="color:black">View Details</b></a></td>

<td><a href="?del='.$r['id'].'" class="delete"><b style="color:red">Delete</b></a></td> 

';

?>


             

      </tr>

    <?php } ?>
    </tbody> 
    </table>

 <!-- <td>  <?php
               if(($activate)=='0')
               {
               ?>
            <a style="color:red;font-weight:bold" href="action/reviewaction.php?activate=<?php echo $r['id'];?>" 
               class="act" onclick="return confirm('Activate <?php echo $data?>');"> Registered </a>
            <?php
               }
               if(($activate)=='1')
               {
               ?>
            <a style="color:#00ba00;font-weight:bold" href="action/reviewaction.php?activate=<?php echo $r['id'];?>" 
               class="deact" onclick="return confirm('De-activate <?php echo $data?>');"> Payment Link Send </a>
            <?php
            
             }
               ?>   
               </td>-- >



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

        