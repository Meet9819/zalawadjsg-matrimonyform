<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit();
}
?>

<?php
include "allcss.php";
?>
<style type="text/css">
    .matter{
       background: #red;
    display: block;
    padding:13px 8px;
    line-height: 12px;
    color: #000;
    font-size: 16px;
    border-bottom: 1px solid #EAEAEA;
    margin-bottom: 0; 
    }
</style>

<?php 
include "header.php";
?>







        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-header-title">
                                <h4 class="pull-left page-title">Generate Data</h4>
                                <ol class="breadcrumb pull-right">
                                    
                                   


<input type="button"  class="btn btn-primary" id="create_pdf" value="Generate PDF">  






                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                              
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">



      

<!-- THIS IS THE STARTING POINT OF PDF ..... MAIN WORD IS CLASS="FORM"-->
<form class="form" style="max-width: none; width: 1005px;">  
  



<div class="container" style="text-align:center">
    
    <img style=" width:  200px; height:  61px;" src="assets/images/logo_dark.png" >
  <br><br>
</div>

       
                                         <?php



                                         include"../db.php";

                                         $result = mysqli_query($con,"SELECT * FROM user");
while($row = mysqli_fetch_array($result))
{

echo '
<fieldset>
                            <div class="form-group">
                                <div class="col-sm-5">
                                    <img src="photos/user/flogo.jpg"  alt="my_profile" title="my_profile" class="img-responsive">
                                    
                                </div>
                                <div class="col-sm-7">
                                    <div class="matter" >
                                        <label>Full Name : '.$row['name'].' Shah</label>
                                        
                                    </div>  
                                    
                                <div class="matter">
                                        <label>Educatin :  '.$row['education'].'</label>
                                        
                                    </div>

                                    <div class="matter">
                                        <label>DOB :  '.$row['dob'].'</label>
                                        
                                    </div>

                                        <div class="matter">
                                        <label>Blood Group :  '.$row['bloodgroup'].'</label>
                                        
                                    </div>

<div class="matter">
                                            <label>Annual Income :  '.$row['annualincome'].'</label>
                                        
                                    </div>
 <div class="matter">
                                            <label>Profession :  '.$row['profession'].'</label>
                                        
                                    </div>

                                     <div class="matter">
                                            <label>Height :  '.$row['height'].'</label>
                                        
                                    </div>


                                </div>
                            </div>
                            
                        
                          

                    
                           
                            
                        </fieldset><br><br> ';}
                        ?>





  
  
    </form>  










                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                                             
                  
                </div>
            </div>
            
            
           
    
    
    
            
           


            <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>  


   <script>  
    (function () {  
        var  
         form = $('.form'),  
         cache_width = form.width(),  
         a4 = [595.28, 841.89]; // for a4 size paper width and height  
  
        $('#create_pdf').on('click', function () {  
            $('body').scrollTop(0);  
            createPDF();  
        });  
        //create pdf  
        function createPDF() {  
            getCanvas().then(function (canvas) {  
                var  
                 img = canvas.toDataURL("image/png"),  
                 doc = new jsPDF({  
                     unit: 'px',  
                     format: 'a4'  
                 });  
                doc.addImage(img, 'JPEG', 20, 20);  
                doc.save('zalawad.pdf');  
                form.width(cache_width);  
            });  
        }  
  
        // create canvas object  
        function getCanvas() {  
            form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');  
            return html2canvas(form, {  
                imageTimeout: 2000,  
                removeContainer: true  
            });  
        }  
  
    }());  
</script>  
<script>  
    /* 
 * jQuery helper plugin for examples and tests 
 */  
    (function ($) {  
        $.fn.html2canvas = function (options) {  
            var date = new Date(),  
            $message = null,  
            timeoutTimer = false,  
            timer = date.getTime();  
            html2canvas.logging = options && options.logging;  
            html2canvas.Preload(this[0], $.extend({  
                complete: function (images) {  
                    var queue = html2canvas.Parse(this[0], images, options),  
                    $canvas = $(html2canvas.Renderer(queue, options)),  
                    finishTime = new Date();  
  
                    $canvas.css({ position: 'absolute', left: 0, top: 0 }).appendTo(document.body);  
                    $canvas.siblings().toggle();  
  
                    $(window).click(function () {  
                        if (!$canvas.is(':visible')) {  
                            $canvas.toggle().siblings().toggle();  
                            throwMessage("Canvas Render visible");  
                        } else {  
                            $canvas.siblings().toggle();  
                            $canvas.toggle();  
                            throwMessage("Canvas Render hidden");  
                        }  
                    });  
                    throwMessage('Screenshot created in ' + ((finishTime.getTime() - timer) / 1000) + " seconds<br />", 4000);  
                }  
            }, options));  
  
            function throwMessage(msg, duration) {  
                window.clearTimeout(timeoutTimer);  
                timeoutTimer = window.setTimeout(function () {  
                    $message.fadeOut(function () {  
                        $message.remove();  
                    });  
                }, duration || 2000);  
                if ($message)  
                    $message.remove();  
                $message = $('<div ></div>').html(msg).css({  
                    margin: 0,  
                    padding: 10,  
                    background: "#000",  
                    opacity: 0.7,  
                    position: "fixed",  
                    top: 10,  
                    right: 10,  
                    fontFamily: 'Tahoma',  
                    color: '#fff',  
                    fontSize: 12,  
                    borderRadius: 12,  
                    width: 'auto',  
                    height: 'auto',  
                    textAlign: 'center',  
                    textDecoration: 'none'  
                }).hide().fadeIn().appendTo('body');  
            }  
        };  
    })(jQuery);  
  
</script> 



           <?php 
include "allscript.php";
           ?>

           <?php 
include "footer.php";
           ?>