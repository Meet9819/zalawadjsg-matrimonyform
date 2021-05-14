<?php
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "zalawadjsg";

 try
 {
     $db_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e)
 {
     echo "ERROR : ".$e->getMessage();
 }



$conn = new mysqli('localhost','root','');
mysqli_select_db($conn, 'zalawadjsg');

$setSql = "SELECT * FROM `user`";
$setRec = mysqli_query($conn,$setSql);

$stmt=$db_con->prepare('select * from user');
$stmt->execute();

$setData='';

while($rec =$stmt->FETCH(PDO::FETCH_ASSOC))
{
  $rowData = '';
  foreach($rec as $value)
  {
    $value = '"' . $value . '"' . "\t";
    $rowData .= $value;
  }
  $setData .= trim($rowData)."\n";
}


header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=UserRegistration.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo ucwords($setData)."\n";

?>
