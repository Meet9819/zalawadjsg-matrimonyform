<?php 
//request parameters array
$requestParams = array(
    'username' => 'zalawad',
    'password' => '996645',
    'sender' => 'SZYYPM',
    'mobile' => '9819461979',
    
    'type' => 1,
    'product' => 1,
    
    'message' => 'Insert sms content'
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
?>