<?php 

  $db = mysqli_connect('localhost','root','','zalawadjsg');



if (isset($_POST['email_check'])) {

  	$email = $_POST['email'];

  	$sql = "SELECT * FROM user WHERE email='$email'";

  	$results = mysqli_query($db, $sql);

  	if (mysqli_num_rows($results) > 0) {

  	  echo "taken";	

  	}else{

  	  echo 'not_taken';

  	}

  	exit();

  }











if (isset($_POST['mobile_check'])) {

    $mobile = $_POST['mobile'];

    $sql = "SELECT * FROM user WHERE mobile='$mobile'";

    $results = mysqli_query($db, $sql);

    if (mysqli_num_rows($results) > 0) {

      echo "taken"; 

    }else{

      echo 'not_taken';

    }

    exit();

  }









?>









<html>

<head>

 

</head>

<body>
<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127348898-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-127348898-1');
        </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->




 <form>

     

      <div id="error_msg"></div>

	

	  <div>

	    <input type="email" name="email" placeholder="Email" id="email">

		<span></span>

	  </div>

	 

   <div id="error_msg"></div>

  

    <div>

      <input type="text" name="mobile" placeholder="mobile" id="mobile">

    <span></span>

    </div>

   

	</form>







</body>

</html>

<!-- scripts -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="script.js"></script>