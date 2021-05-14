<?php
include"db.php";
// INSERT
if(isset($_POST['save']))
{

$name = $con->real_escape_string($_POST['name']);
$email = $con->real_escape_string($_POST['email']);
$phone = $con->real_escape_string($_POST['phone']);
$product_name= $con->real_escape_string($_POST['product_name']);

$product_price = $con->real_escape_string($_POST['product_price']);



$result = mysqli_query($con,"INSERT INTO payment (name,email,phone,product_name,product_price) VALUES('$name','$email','$phone','$product_name','$product_price')");
   
                ?>
                <script>
                alert('Thank You ...');
               
                </script>
                <?php
}
?>




<?php 
$product_name = $_POST["product_name"];
$price = $_POST["product_price"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];


include 'src/instamojo.php'; 
 // private key   // private auth key  // https://www.instamojo.com/api/1.1/
 
 
  $api = new Instamojo\Instamojo('f4963b88828e7fa36b9dd352c4428ff6', 'ad65c02c506fa8461b20a1ca7186cf0c','https://www.instamojo.com/api/1.1/');

//$api = new Instamojo\Instamojo('test_332db1476133db034c7772dd5ae', 'test_c73c27dca68b4fff4b2e7915c74','https://test.instamojo.com/api/1.1/');



try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "http://zalawadmandalborivali.com/matrimonial/paymentthankyou.php",
        "webhook" => "http://zalawadmandalborivali.com/matrimonial/webhook.php"
        ));
    //print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
  ?>
