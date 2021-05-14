<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
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
                                <h4 class="pull-left page-title">Team's login</h4>
                                <ol class="breadcrumb pull-right">
                                   
                                    <li class="active"><a href="addteam.php"><b style="color:#b91e39"> Add Team's</b></a></li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">All Team's Data</h3></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">


                                            <table id="datatable" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                         <th>Username</th>
                                                            <th>Email</th>
                                                           <th>Password </th>
                                                           <th>Contact </th>
                                                          
                                                               
                                                               <th>Delete </th>
                                                    </tr>
                                                </thead>


<?php

include"../db.php";

/* code for data delete */
if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM adminlogin WHERE id=".$_GET['del']);

}


$result = mysqli_query($con,"SELECT * FROM adminlogin");
while($row = mysqli_fetch_array($result))
{

echo ' <tbody style=" text-transform: lowercase;">
<tr>
<td> '.$row['username'].'</td>
<td>'.$row['email'].' </td>
<td>'.$row['password'].'</td>
<td>'.$row['contact'].'</td>
   

<td><a href="?del='.$row['id'].'" class="delete"><b style="color:red">Delete</b></a></td>
</tr>

</tbody>

';
}
?>
                                              
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

           <?php 
include "footer.php";
           ?>