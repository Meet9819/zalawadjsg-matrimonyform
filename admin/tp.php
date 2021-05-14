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
            
            text-transform: capitalize;
     
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
             text-transform: capitalize;
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
             text-transform: capitalize;
                background: #red;
                display: block;
                padding: 6px 0px;
                line-height: 12px;
                color: #e53434;
                font-size: 12px;
                border-bottom: 1px solid #000000;
                margin-bottom: 0;
            }
            
            .ma {
            padding : 3px 0px;
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


$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'zalawadjsg');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

$perpage = 2;
if(isset($_GET['page']) & !empty($_GET['page'])){
  $curpage = $_GET['page'];
}else{
  $curpage = 1;
}
$start = ($curpage * $perpage) - $perpage;
$PageSql = "SELECT * FROM `user` order by uniqueid desc";
$pageres = mysqli_query($connection, $PageSql);
$totalres = mysqli_num_rows($pageres);

$endpage = ceil($totalres/$perpage);
$startpage = 1;
$nextpage = $curpage + 1;
$previouspage = $curpage - 1;

$ReadSql = "SELECT * FROM `user` LIMIT $start, $perpage ";
$res = mysqli_query($connection, $ReadSql);
?>


    <?php 
    while($r = mysqli_fetch_assoc($res)){
    ?>
      





    <?php
echo '
<fieldset style="
    background-color: #dee4bc;
">

 <div class="form-group">
                     <div class="col-sm-12" style="background-color: #e6322c;padding-right: 4px;
    padding-left: 3px;">
                         <div style="
    color: white;
    text-align: center;
" class="matter">
                         <label >'.$r['gender'].' - '.$r['uniqueid'].'</label>
                        </div>
                     </div>
                 </div>





<div class="form-group">

    <div class="col-sm-2" style="background-color: #206137;padding-right: 4px;
    padding-left: 3px;">

          <div class="matter1" style="height:60px" >
                    <label>Full Name  </label>
                </div>  
                
                
              

              

                <div class="matter1 ma">
                      <label>Birth Date   </label>
                </div>

                <div class="matter1 ma">
                    <label>Time & Place  </label>
                </div>

                <div class="matter1 ma">
                    <label>Height (in inch)   </label>
                </div>

                <div class="matter1 ma">
                    <label>Weight (in kg)  </label>
                 </div>
                 
                  <div class="matter1 ma">
                    <label>Complexion  </label>
                 </div>

                  <div class="matter1 ma">
                    <label>Blood Grp  </label>
                </div>

    </div>

        <div class="col-sm-2" style="background-color: #dee3be;padding-right: 4px;
    padding-left: 3px;">

                <div class="matter" style="text-transform:uppercase;height:60px" >
                    <label style="line-height:21px">'.$r['name'].' '.$r['middlename'].' '.$r['lastname'].'</label>
                </div>  

            
                

                <div class="matter ma">
                      <label> '.$r['dob'].'</label>
                </div>

                <div class="matter ma">
                    <label>'.$r['timeplace'].'</label>
                </div>

                <div class="matter ma">
                    <label>  '.$r['height'].'</label>
                </div>

                <div class="matter ma">
                    <label>  '.$r['weight'].'</label>
                 </div>
                 
                    <div class="matter ma">
                    <label>  '.$r['complexion'].'</label>
                 </div>

                  <div class="matter ma">
                    <label>  '.$r['bloodgroup'].'</label>
                </div>

         </div>

    

    <div class="col-sm-3" style="
    background-color: #dee4bc;padding-right: 4px;
    padding-left: 3px;
    
">
                 
              <img src="resizer/resizer.php?file=../photos/user/'.$r['img'].'&width=200&height=200&action=resize&quality=100"  alt="my_profile" title="my_profile" class="img-responsive">
      
        </div>

        

        <div class="col-sm-2" style="background-color: #206137;padding-right: 4px;
    padding-left: 3px;">
            
              <div class="matter1">
                   <label>Family type  </label>
       </div>
       
       
       
            <div class="matter1 ma">
                   <label>Horoscope  </label>
       </div>
       
        <div class="matter1 ma">
                  <label>Manglik   </label>
            </div>
            
             <div class="matter1 ma">
                    <label>Caste   </label>
             </div>
       
             <div class="matter1 ma">
                     <label>Native Place </label>
                </div>
             
          
            <div class="matter1 ma">
                   <label>Telephone (Res.)  </label>
       </div>

              <div class="matter1 ma">
                   <label>Mobile </label>
       </div>
       
          <div class="matter1">
                    <label>Email Id   </label>
             </div>

 



         </div>

         
         <div class="col-sm-3" style="background-color: #dee3be;padding-right: 4px;
    padding-left: 3px;">
            
             <div class="matter"> <label>  '.$r['staying'].'</label>  </div>
             
             
             <div class="matter ma">
                     <label>'.$r['horoscope'].'</label>
             </div>
            
             <div class="matter ma">
                    <label> '.$r['manglik'].'</label>
             </div>

             <div class="matter ma">
                    <label>'.$r['caste'].'</label>
             </div>

        <div class="matter ma">
                <label> '.$r['nativeplace'].'</label>
      </div>

             <div class="matter">
                   <label> '.$r['telephone'].'</label>
       </div>

             <div class="matter ma">
                   <label> '.$r['mobile'].'</label>
       </div>

             <div class="matter ma" style="
    text-transform: none;
">
                 <label> '.$r['email'].'</label>
       </div>

    </div>



   </div>










<div class="form-group">

         <div class="col-sm-2" style=" background-color: #206137;padding-right: 4px;
    padding-left: 3px;">
                        
                         <div class="matter1 ma">
                       <label>Spectacles</label>
          </div>
                     
                    <div class="matter1 ma">
                       <label>Education</label>
          </div>

                    <div class="matter1 ma">
                      <label>Profession</label>
                     </div>
                   
                 
                   

                     <div class="matter1 ma">
                        <label>Annual Income</label>
                     </div>

          </div>

          <div class="col-sm-5" style="background-color: #dee3be;padding-right: 4px;
    padding-left: 3px;">
                  <div class="matter ma"><label> '.$r['spectacles'].'</label> </div>  
                  <div class="matter ma"><label> '.$r['education'].'</label> </div>
                   <div class="matter ma"> <label>'.$r['profession'].'</label> </div>
                  
                   
    <div class="matter ma"> <label>  '.$r['annualincome'].'</label> </div>

          </div>

        

         <div class="col-sm-2" style="background-color: #206137;padding-right: 4px;
    padding-left: 3px;">
                <div class="matter1 ma"> <label>Hobbies </label> </div>  
                   <div class="matter1 ma"><label>Brothers   </label> </div>
                <div class="matter1 ma"><label>Sisters  </label> </div>
                
               
        <div class="matter1 ma"> <label>Marital Status </label> </div>
             

         </div>

         <div class="col-sm-3" style="background-color: #dee3be;padding-right: 4px;
    padding-left: 3px;">
                <div class="matter ma"> <label>  '.$r['hobbies'].'</label>  </div>  
                 <div class="matter ma">  <label>  '.$r['brother'].'</label>  </div>
                 <div class="matter ma"><label> '.$r['sister'].'</label> </div>
               
        <div class="matter ma"> <label> '.$r['marital'].'</label> </div>
                

         </div>

 </div>







<div class="form-group">

       <div class="col-sm-2" style="background-color: #206137;padding-right: 4px;
    padding-left: 3px;">
               
               <div class="matter1 ma"><label>Office Address </label></div>
               
              
                 
        
      </div>

       <div class="col-sm-10" style="background-color: #dee3be;padding-right: 4px;
    padding-left: 3px;">
                 
                 
                 <div class="matter ma">  <label>    '.$r['officeaddress'].'</label></div>
                 
                 
                  

        </div>



</div>








<div class="form-group">

       <div class="col-sm-2" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
               
               <div class="matter2 ma"><label>Father Name </label></div>
               
                <div class="matter2 ma"> <label>Father Occupation  </label></div>
                 <div class="matter2 ma"> <label>Father Mobile  </label> </div>
                 
        
      </div>

       <div class="col-sm-4" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
                 
                 
                 <div class="matter ma" style="text-transform:uppercase">  <label>    '.$r['fathername'].'</label></div>
                 
                   <div class="matter ma"> <label>  '.$r['fatheroccu'].'</label></div>
                   <div class="matter ma"><label> '.$r['fathermob'].'</label></div>
                  

        </div>

         <div class="col-sm-2" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">

<div class="matter2 ma" > <label>Mother Name  </label> </div>
                <div class="matter2 ma"><label>Mosal </label> </div>
        
        <div class="matter2 ma"><label>Mosal Native  </label> </div>

     </div>

          <div class="col-sm-4" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
 <div class="matter ma" style="text-transform:uppercase"><label> '.$r['mothername'].'</label> </div>
                  <div class="matter ma"> <label> '.$r['mosal'].'</label></div>
        <div class="matter ma"> <label>  '.$r['mosalnative'].'</label> </div>

          </div>

</div>











<div class="form-group">

       <div class="col-sm-2" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
               
               <div class="matter2 ma"><label>Resi Address </label></div>
               </div>

       <div class="col-sm-10" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
                 
                 
                 <div class="matter ma">  <label>    '.$r['resiaddress'].'</label></div>
                 </div>

</div>







<div class="form-group">

       <div class="col-sm-2" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
               
               <div class="matter2 ma"><label>Reference</label></div>
                     
        
      </div>

       <div class="col-sm-10" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
                 
                 
                 <div class="matter ma">  <label>    '.$r['reference'].'</label></div>
                 
      </div>



     

</div>









<div class="form-group">

       <div class="col-sm-2" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
               
               <div class="matter2 ma"><label>Partners Choice </label></div>
               </div>

       <div class="col-sm-4" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
                 
                 
                 <div class="matter ma">  <label>    '.$r['preference'].'</label></div>
                 </div>
                 
                 
                    <div class="col-sm-2" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
               
               <div class="matter2 ma"><label>Disability (if any)</label></div>
               </div>

       <div class="col-sm-4" style="background-color: #c9bcb5;padding-right: 4px;
    padding-left: 3px;">
                 
                 
                 <div class="matter ma">  <label>    '.$r['disability'].'</label></div>
                 </div>
                 
                 

</div>





  </fieldset> 
                        ';


  ?>
      

 
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
        


      
    <?php } ?>
   
 

 

                                              
                                    
                           
                                                    
                       

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                 <nav aria-label="Page navigation">
  <ul style="padding:10px" class="pagination">
  <?php if($curpage != $startpage){ ?>
    <li class="page-item">
      <a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">First</span>
      </a>
    </li>
    <?php } ?>
    <?php if($curpage >= 2){ ?>
    <li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
    <?php } ?>
    <li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>
    <?php if($curpage != $endpage){ ?>
    <li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
    <li class="page-item">
      <a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Last</span>
      </a>
    </li>
    <?php } ?>
  </ul>
</nav>



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
                            
                           // a5 = [419.53 x 595.28]; 
                            
                       
                            
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
                                      // format: 'a5'
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