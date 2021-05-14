<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <title>Admin | Welcome to Shree Zalawad Yuvak Yuvati Parichay Milan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
 
</head>

<body>
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="panel panel-color panel-primary panel-pages">
            <div class="panel-body">
                <h3 class="text-center m-t-0 m-b-30"> <span class="">
                <img style="
    width: 300px;
   
" src="assets/images/logo_dark.png" alt="logo" ></span></h3>
                <h4 class="text-muted text-center m-t-0"><b>Admin Login</b></h4>
            


    <?php
    require('../db.php');
    session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){

        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);

    //Checking is user existing in the database or not
        $query = "SELECT * FROM `adminlogin` WHERE username='$username' and password='$password'";
        $result = mysqli_query($con,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['username'] = $username;
            header("Location: index.php"); // Redirect user to index.php
            }else{
                echo "<div  class='form'><p style='text-align:center;color:orange'>Username/password is incorrect.</p></div>";
                }
    }else{
?>

        <?php } ?>

          <form action="" class="form-horizontal m-t-20" name="login" method="post">
                            

               <div class="form-group">
                        <div class="col-xs-12">

                         <input type="text" name="username" placeholder="Username" required class="form-control" />

                              </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            
                             <input type="password" name="password" class="form-control" placeholder="Password" />

                              </div>
                    </div>
                  
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">

                        


                            <button class="btn btn-primary w-md waves-effect waves-light"   name="submit" type="submit">Log In</button>
                        </div>
                    </div>
                
                </form>



            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


</html>