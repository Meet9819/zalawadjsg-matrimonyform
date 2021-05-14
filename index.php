<?php
include "allcss.php";
?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
  $("#myform").on("submit", function(){
    $("#pageloader").fadeIn();
  });//submit
});//document ready



	</script>

	<style type="text/css">
		#pageloader
{
  background: rgba( 255, 255, 255, 0.8 );
  display: none;
  height: 100%;
  position: fixed;
  width: 100%;
  z-index: 9999;
}

#pageloader img
{
  left: 50%;
  margin-left: -32px;
  margin-top: -32px;
  position: absolute;
  top: 50%;
}

	</style>
	
	
	

<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127348898-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-127348898-1');
        </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <style type="text/css">
        body {
            line-height: 40px;
            /*font-size: 24px !important;*/
        }
        
        img.zlogo {
            width: 400px;
        }
        .regnBTN a{width: 50%; padding: 20px; font-size: 22px;}
        footer{
          background-color: #bb1a36; border-top: 1px solid rgba(0, 0, 0, .05); color: #ffffff; text-align: left!important; padding: 10px 30px;
    width:100%; position: absolute; left: 0px;
        }
        
        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
            img.zlogo {
                width: 300px;
            }
            .regnBTN a{width: 100%;}
        }
    </style>
    
    
    
    
<div id="pageloader">
   <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="processing..." />
</div>



    <div style="margin-left: 0px;" class="content-page">
        <div style="margin-top:0px;" class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div style="background-color:#b91e39" class="page-header-title">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style="text-align:center" class="col-sm-12">
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <img class="zlogo" src="admin/assets/images/logo_dark.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-primary">
                            <div style="font-size:18px" class="panel-body">
                                <p>
                                    <b>Candidate Criteria:</b>
                                    <ul>
                                        <li>Candidate Should compulsorily be one of the Following <strong>JAIN ZALAWADI</strong> </li>
                                        <ul>
                                            <li>Derawasi,</li>
                                            <li>Sthanakwasi,</li>
                                            <li>Terapanthi,</li>
                                            <li>Digamber.</li>
                                        </ul>
                                        <li>Age Limit - <strong>21years to 35years</strong></li>
                                        <li>Qualification <strong>at least 10th Cleared</strong> & Above.</li>
                                        <li>Candidate Should be a <strong>Fresher OR Engagement Broken.</strong></li>
                                        <li>Registration Fees is a nominal <strong>Rs. 1000/-</strong> which includes,</li>
                                        <ul>
                                            <li>Entry for Candidate + 2 Persons</li>
                                            <li>High Tea & Dinner</li>
                                            <li>Booklet of Candidates</li>
                                            <li>Registration Kit</li>
                                        </ul>
                                        <li>Last Date for Registration: <strong>16th December, 2018.</strong></li>
                                    </ul>
                                </p>

                                <hr />

                                <p>
                                    <b>Event Date/Time: 6th January 2019, Sunday / Time: 4.30pm onwards</b>
                                    <br />
                                    <b>Event Place: Bhatia Wadi (A/C), Borivali - West </b>
                                </p>

                                <hr />
                                <hr />

                                <p>
                                    <b>How to Register</b> (It is a 3 Step Process)
                                    <ul>
                                        <li>1. Visit website and fill the registration form along with ALL MANDATORY FIELDS</li>

                                        <li>2. After you Fill the Form, your application will be verified and once your form is verified and approved, you will receive an email with a <strong>PAYMENT LINK</strong> to pay Rs 1000/- online
                                            <br /> (Please be informed to check your junk/spam in case you don’t find an email in your inbox)</li>

                                        <li>3. Once you pay the fees <strong>you will receive an EMAIL followed by a SMS</strong> confirming your Successful registration with a Unique ID. Please note that this Unique ID should be presented on the day of event at the registration counter failing which, the candidate will not be allowed to enter the event.
                                            <br /> (Please be informed to check your JUNK/SPAM in case you don’t find an email in your inbox)
                                        </li>
                                    </ul>
                                </p>

                                <hr />

                                <p>
                                    <b>Terms & Condition</b>
                                    <ul>
                                        <li><strong>NO REFUND</strong> will be granted under any circumstances, candidate’s presence at the event is Compulsory.</li>
                                        <li>Managing Committee has all discretion in case of any disputes/changes.</li>

                                        <li>If any data is found to be <strong>misstated</strong>, the profile will be <strong>rejected</strong> and candidate will not be allowed to take part in the event</li>
                                    </ul>
                                </p>
                                <hr />

                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <div class="col-md-6 regnBTN">
                        <a id="myform" style="" href="registration.php" class="btn btn-primary confirmation">Proceed for Registration</a>
                    </div>
                </div>

            </div>
        </div>

        <?php 
include "allscript.php";
           ?>

           <footer> 2018 © Shree Zalawad Jain Yuvak Yuvati Parichay Milan - Borivali </footer>