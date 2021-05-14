<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zalawadjsg";// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$exportType = '';
 

 
    $sql = mysqli_query($conn,"SELECT 
    
    
    img,name,middlename,lastname,gender,dob,timeplace,height,weight,bloodgroup,education,profession,officeaddress,resiaddress,staying,annualincome,spectacles,caste,horoscope,manglik,telephone,mobile,email,hobbies,brother,sister,fathername,fathermob,fatheroccu,mothername,nativeplace,mosal,mosalnative,preference,reference,complexion,marital,uniqueid,disability
    
     FROM `user`");
    $conn->close();
 
$srNo=1;
$rowData ='';
$setData='';
 
while($rec = mysqli_fetch_row($sql))
{
    $rowData = '"' . $srNo . '"' . "\t";
    foreach($rec as $value)
    {
        $value = '"' . $value . '"' . "\t";
        $rowData .= $value;
    }
    $setData .= trim($rowData)."\n";
    $srNo++;
}
$columnHeader ='';
$columnHeader = "Sr No"."\t"."Latest Photo"."\t"."Name"."\t"."Middle Name"."\t"."Last Name"."\t"."Gender"."DOB"."\t"."Time Place"."\t"."Height"."\t"."Weight"."\t"."Blood Group"

."\t"."Education"."\t"."Profession"."\t"."Office Address"."\t"."Residential Address"."\t"."Staying"."\t"."Annual Income"."\t"."Spectacles"."\t"." Caste"."\t"."Horoscope"."\t"."Manglik"."\t"."Telephone"

."\t"."Mobile"."\t"."Email"."\t"."Hobbies"."\t"."Brother"."\t"."Sister"."\t"."Father Name"."\t"."Father Mobile"."\t"." Father Occupation"."\t"."Mother Name"."\t"."Native Place"."\t"."Preference"

."\t"."Mosal"."\t"."Mosal Native"."\t"."Reference"."\t"."Complexion"."\t"."Marital"."\t"."Unique Id"."\t"."Disability"

;
 
if($exportType=='CSV'){
    // if you wanted export file of csv type then used this code
    header("Content-type: text/x-csv");
    header("Content-Disposition: attachment; filename=Users_Data.csv");
}else{
    // if you wanted to export file of excel type then used this code
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=Users_Data.xls");
}
 
header("Pragma: no-cache");
header("Expires: 0");
 
echo ucwords($columnHeader) . "\n" . $setData . "\n";
?>


