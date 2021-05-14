<?php
$con=mysql_connect('localhost','root','')or die(mysql_error());
$db=mysql_select_db('zalawadjsg',$con) or die(mysql_error());



if(isset($_GET['activate']))
{
$activate1=$_GET['activate'];
$res=mysql_query("select * from user where id='$activate1'");
while($row=mysql_fetch_object($res))
{
$activate_var=$row->activate;
if($activate_var=='0')
{
$activate_state=1;
}

else
{
$activate_state=0;
}
$update=mysql_query("update user set activate='$activate_state' where id='$activate1' ");
if($update)
{
header("Location:../userdata.php");
}
else
{
echo mysql_error();
}
}
?>
<?php
}
?>