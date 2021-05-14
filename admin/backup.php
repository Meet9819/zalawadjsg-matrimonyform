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
            .matter {
                background: #red;
                display: block;
                padding: 6px 0px;
                line-height: 12px;
                color: #000;
                font-size: 12px;
                border-bottom: 1px solid black;
                margin-bottom: 0;
            }
            
            .matter1 {
                background: #red;
                display: block;
                padding: 6px 0px;
                line-height: 12px;
                color: #fff;
                font-size: 12px;
                border-bottom: 1px solid #EAEAEA;
                margin-bottom: 0;
            }
            
            .matter2 {
                background: #red;
                display: block;
                padding: 6px 0px;
                line-height: 12px;
                color: #e53434;
                font-size: 12px;
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

                                        <input type="button" class="btn btn-primary" id="create_pdf" value="Generate PDF">

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
                                            <div class="">


                                                <!-- THIS IS THE STARTING POINT OF PDF ..... MAIN WORD IS CLASS="FORM"-->
                                               
                                                <form class="form" >
<br><br><br>
                                                    <?php
include"../db.php";

$result = mysqli_query($con,"SELECT * FROM user where status is not null limit 2");
while($row = mysqli_fetch_array($result))
{
echo '
<fieldset>

 <div class="form-group">
                     <div class="col-sm-12" style="background-color: #e6322c">
                         <div style="
    color: white;
    text-align: center;
" class="matter">
                         <label >'.$row['gender'].' - '.$row['id'].'</label>
                        </div>
                     </div>
                 </div>





<div class="form-group">

		<div class="col-sm-2" style="background-color: #206137;">

   				<div class="matter1" >
                    <label>Full Name  </label>
                </div>  

                <div class="matter1">
                     <label>Gender  </label>
                </div>

                <div class="matter1">
                      <label>Birth Date   </label>
                </div>

                <div class="matter1">
                    <label>Time/Place  </label>
                </div>

                <div class="matter1">
                    <label>Height   </label>
                </div>

                <div class="matter1">
                    <label>Weight  </label>
                 </div>

                  <div class="matter1">
                    <label>Blood Grp  </label>
                </div>

		</div>

        <div class="col-sm-2" style="background-color: #dee3be;">

                <div class="matter" >
                    <label>'.$row['name'].' &nbsp; '.$row['middlename'].' &nbsp; '.$row['lastname'].'</label>
                </div>  

                <div class="matter">
                     <label>'.$row['gender'].'</label>
                </div>

                <div class="matter">
                      <label> '.$row['dob'].'</label>
                </div>

                <div class="matter">
                    <label>'.$row['timeplace'].'</label>
                </div>

                <div class="matter">
                    <label>  '.$row['height'].'</label>
                </div>

                <div class="matter">
                    <label>  '.$row['weight'].'</label>
                 </div>

                  <div class="matter">
                    <label>  '.$row['bloodgroup'].'</label>
                </div>

         </div>

 		

 		<div class="col-sm-3" style="height:200px;background-image: url(photos/user/'.$row['img'].'); background-repeat: no-repeat;">
                 
              
      
        </div>

        

        <div class="col-sm-2" style="background-color: #206137;">
            
             <div class="matter1">
                     <label>Staying </label>
                </div>
             
             <div class="matter1">
                    <label>Spectacles   </label>
             </div>

             <div class="matter1">
                    <label>Caste   </label>
             </div>

		  	<div class="matter1">
                   <label>Horoscope  </label>
			 </div>
                                    
            <div class="matter1">
                	<label>Manglik   </label>
            </div>

            <div class="matter1">
                   <label>Tel Resi  </label>
			 </div>

              <div class="matter1">
                   <label>Cell </label>
			 </div>

         </div>

         
         <div class="col-sm-3" style="background-color: #dee3be;">
            
             <div class="matter">
                     <label>'.$row['staying'].'</label>
             </div>
            
             <div class="matter">
                    <label> '.$row['spectacles'].'</label>
             </div>

             <div class="matter">
                    <label>'.$row['caste'].'</label>
             </div>

  			<div class="matter">
                <label> '.$row['horoscope'].'</label>
			</div>

             <div class="matter">
                   <label> '.$row['manglik'].'</label>
			 </div>

             <div class="matter">
                   <label> '.$row['telephone'].'</label>
			 </div>

             <div class="matter">
                 <label> '.$row['mobile'].'</label>
			 </div>

 		</div>



   </div>










<div class="form-group">

         <div class="col-sm-2" style=" background-color: #206137;">
                                   
                    <div class="matter1">
                       <label>Education</label>
					</div>

                    <div class="matter1">
                     	<label>Profession</label>
                     </div>
                     
                     <div class="matter1">
                      	<label>Off. Add </label>
                     </div>

                     <div class="matter1">
                      	<label>Ann. Incom</label>
                     </div>

          </div>

          <div class="col-sm-5" style="background-color: #dee3be;">
                  
                  <div class="matter"><label> '.$row['education'].'</label> </div>
                   <div class="matter"> <label>'.$row['profession'].'</label> </div>
                    <div class="matter">  <label> '.$row['officeaddress'].'</label> </div>
		<div class="matter"> <label>  '.$row['annualincome'].'</label> </div>

          </div>

        

         <div class="col-sm-2" style="background-color: #206137;">
                 
                <div class="matter1"> <label>Email </label> </div>
				<div class="matter1"> <label>Hobbies </label> </div>
                <div class="matter1"><label>Brother   </label> </div>
                <div class="matter1"><label>Sister  </label> </div>

         </div>

         <div class="col-sm-3" style="background-color: #dee3be;">
                
                <div class="matter"> <label>  '.$row['email'].'</label>  </div>
				<div class="matter"> <label> '.$row['hobbies'].'</label> </div>
                 <div class="matter">  <label>  '.$row['brother'].'</label>  </div>
                 <div class="matter"><label> '.$row['sister'].'</label> </div>

         </div>

 </div>















<div class="form-group">

       <div class="col-sm-2" style="background-color: #c9bcb5;">
               
               <div class="matter2"><label>    Father Name </label></div>
                <div class="matter2"> <label>Father Mob  </label> </div>
                <div class="matter2"> <label>Father Occu.  </label></div>
				<div class="matter2"> <label>Mother Name  </label> </div>
      </div>

       <div class="col-sm-4" style="background-color: #c9bcb5;">
                 
                 <div class="matter">  <label>    '.$row['fathername'].'</label></div>
                   <div class="matter"><label> '.$row['fathermob'].'</label></div>
                   <div class="matter"> <label>  '.$row['fatheroccu'].'</label></div>
                   <div class="matter"><label> '.$row['mothername'].'</label> </div>

        </div>

         <div class="col-sm-2" style="background-color: #c9bcb5;">

                <div class="matter2"> <label>Preference  </label></div>
                <div class="matter2"><label>Mosal </label> </div>
 				<div class="matter2"><label>Reference  </label> </div>
				<div class="matter2"><label>Native Place   </label> </div>

		 </div>

          <div class="col-sm-4" style="background-color: #c9bcb5;">

                  <div class="matter"><label>  '.$row['preference'].'</label> </div>
                  <div class="matter"> <label> '.$row['mosal'].'</label></div>
				<div class="matter"><label> '.$row['reference'].'</label> </div>
 				<div class="matter"> <label>  '.$row['nativeplace'].'</label> </div>

          </div>

</div>

                        </fieldset> ';}
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
                    (function() {
                        var
                            form = $('.form'),
                            cache_width = form.width(),
                            a4 = [595.28, 841.89]; // for a4 size paper width and height  

                        $('#create_pdf').on('click', function() {
                            $('body').scrollTop(0);
                            createPDF();
                        });
                        //create pdf  
                        function createPDF() {
                            getCanvas().then(function(canvas) {
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
                    (function($) {
                        $.fn.html2canvas = function(options) {
                            var date = new Date(),
                                $message = null,
                                timeoutTimer = false,
                                timer = date.getTime();
                            html2canvas.logging = options && options.logging;
                            html2canvas.Preload(this[0], $.extend({
                                complete: function(images) {
                                    var queue = html2canvas.Parse(this[0], images, options),
                                        $canvas = $(html2canvas.Renderer(queue, options)),
                                        finishTime = new Date();

                                    $canvas.css({
                                        position: 'absolute',
                                        left: 0,
                                        top: 0
                                    }).appendTo(document.body);
                                    $canvas.siblings().toggle();

                                    $(window).click(function() {
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
                                timeoutTimer = window.setTimeout(function() {
                                    $message.fadeOut(function() {
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