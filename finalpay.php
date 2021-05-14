<?php
include"db.php";
// INSERT
if(isset($_POST['save']))
{

$paymentid = $con->real_escape_string($_POST['paymentid']);
$email = $con->real_escape_string($_POST['email']);

$result = mysqli_query($con,"UPDATE payment SET paymentid='$paymentid' WHERE email='$email'");
   
   $results = mysqli_query($con,"UPDATE user SET status='$paymentid' WHERE email='$email'");
   
                ?>
                <script>
                alert('Thank You So Much');
                window.location.href='http://zalawadmandalborivali.com';
                </script>
                
                
                
                
          
<?php

$con = mysqli_connect('localhost','root','','zalawadjsg');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  

$emailid=$_POST['email'];


$result = mysqli_query($con,"SELECT * FROM user WHERE email='$emailid'");
while($row = mysqli_fetch_array($result))
{
$mobile=$row['mobile'];
$gender=$row['gender'];
$idd=$row['id'];
$name=$row['name']


?>



             



             
                
                  <?php
                  
                  
              
  
//request parameters array
$requestParams = array(
    'username' => 'zalawad',
    'password' => '996645',
    'sender' => 'SZYYPM',
    'mobile' => $mobile,
    
    'type' => 1,
    'product' => 1,
    
    'message' => ' We have received your payment.%0aPlease save this UNIQUE ID $gender-$idd and dont forget to bring this ID on the day of event.%0a%0aAll the best.%0aJai Jinendra'
);

//merge API url and parameters
$apiUrl = "http://makemysms.in/api/sendsms.php?";
foreach($requestParams as $key => $val){
    $apiUrl .= $key.'='.urlencode($val).'&';
}
$apiUrl = rtrim($apiUrl, "&");

//API call
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_exec($ch);
curl_close($ch);
    
               
                
    }
?>
   




   <?php
                
                require_once 'class.user.php';
                
		$reg_user = new USER();



		if($reg_user->register($name,$emailid))
		{			
			$id = $reg_user->lasdID();		
			$key = base64_encode($id);
			$id = $key;
			

			
			 $message = "Pranam,
<br><br>
Welcome to the Shree Zalawad Jain Yuvak Yuvati Parichay Milan,

We have received your payment.
<br>

 This is Your Payment ID - $paymentid
 <br>
 This is Your Registered Email ID - $emailid
<br>
Your Unique ID # is $gender-$idd. Kindly be informed to carry this ID on the day of event, failing which candidate will not be allowed to enter the event
<br><br>


Jai Jinendra,<br>
Shree Zalawad Jain Yuvak Yuvati Parichay Milan - Borivali <br>
Visit: www.zalawadmandalborivali.com <br>
Facebook: www.facebook.com/zalawadmandalborivali/ <br>
Help: 9967996645, 9870153104, 9820899239, 9324631756
";
                        
            $subject = "We have Received Your Payment ! Thank you ! ";
						
			$reg_user->send_mail($emailid,$message,$subject);	
			$msg = "
					 We've sent an email 
                   
			  		
					";
		}
		else
		{
			echo "sorry , Query could no execute...";
		}	

       
    }




?>
        