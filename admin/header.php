<body class="fixed-left">
    <div id="wrapper">
        <div class="topbar">





            <div class="topbar-left">
                 <div class="user-details">
                  
                    <div class="user-info">

                    
                            
                        <div class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <?php echo $_SESSION['username']; ?>!</a>
                           
                        </div>
                        <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
                    </div>
                </div>
            </div>













            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <!--<button type="button" class="button-menu-mobile open-left waves-effect waves-light"> <i class="ion-navicon"></i> </button> -->

                             <span class="clearfix"></span></div>
                       
                        <ul class="nav navbar-nav navbar-right pull-right">
                         
                            <li class="hidden-xs"> <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="fa fa-crosshairs"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href=""> Profile</a></li>
                                   <!-- <li><a href=""><span class="badge badge-success pull-right">5</span> Settings </a></li> -->
                                    <li><a href=""> Lock screen</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php"> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

          <!--   <div class="text-center"> <br> <br>
                    <a href="index.php" class="logo"><img style=" width:  200px; height:  61px;" src="assets/images/flogo.png" ></a>
                    <a href="index.php" class="logo-sm"><img  style="width: 46px;height: 25px;" src="assets/images/logo_sm.png" height="36"></a>
                </div> -->

                <div class="text-center"> <br> <br>
                    <a href="index.php"  ><b style="
    color: #b91e39;
    font-size: 30px;
    text-shadow: 0.1px 0.1px white;
">Matrimonial</b></a>
                    <a href="index.php" class="logo-sm"><img  style="width: 46px;height: 25px;" src="assets/images/logo_sm.png" height="36"></a>
                </div>
 <br> <br>

              
                <div id="sidebar-menu">
                    <ul>
                        <li> <a href="index.php" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a></li>  
                        
                      
                       
   <li> <a href="userdata.php" class="waves-effect"><i class="ti-home"></i><span> All Registered Users </span></a></li>


    <li> <a href="tp.php" class="waves-effect"><i class="ti-home"></i><span>Generate PDF </span></a></li>

    




                       <!-- <li> <a href="typography.php" class="waves-effect"><i class="ti-ruler-pencil"></i><span> Typography <span class="badge badge-primary pull-right">6</span></span></a></li>
                        <li class="has_sub"> <a href=";" class="waves-effect"><i class="ti-agenda"></i> <span> UI Elements </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ui-buttons.php">Buttons</a></li>
                                <li><a href="ui-panels.php">Panels</a></li>
                                <li><a href="ui-tabs-accordions.php">Tabs &amp; Accordions</a></li>
                                <li><a href="ui-modals.php">Modals</a></li>
                                <li><a href="ui-components.php">Components</a></li>
                                <li><a href="ui-progressbars.php">Progress Bars</a></li>
                                <li><a href="ui-alerts.php">Alerts</a></li>
                                <li><a href="ui-sweet-alert.php">Sweet-Alert</a></li>
                                <li><a href="ui-grid.php">Grid</a></li>
                            </ul>
                        </li>
                        <li class="has_sub"> <a href=";" class="waves-effect"><i class="ti-wand"></i> <span> Icons </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="icons-material.php">Material Design</a></li>
                                <li><a href="icons-ion.php">Ion Icons</a></li>
                                <li><a href="icons-fontawesome.php">Font awesome</a></li>
                                <li><a href="icons-themify.php">Themify Icons</a></li>
                            </ul>
                        </li>
                        <li class="has_sub"> <a href=";" class="waves-effect"><i class="ti-write"></i><span> Forms </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="form-elements.php">General Elements</a></li>
                                <li><a href="form-validation.php">Form Validation</a></li>
                                <li><a href="form-advanced.php">Advanced Form</a></li>
                                <li><a href="form-wysiwyg.php">WYSIWYG Editor</a></li>
                                <li><a href="form-uploads.php">Multiple File Upload</a></li>
                            </ul>
                        </li>
                        <li class="has_sub"> <a href=";" class="waves-effect"><i class="ti-menu-alt"></i><span> Tables </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="tables-basic.php">Basic Tables</a></li>
                                <li><a href="tables-datatable.php">Data Table</a></li>
                            </ul>
                        </li>
                        <li class="has_sub"> <a href=";" class="waves-effect"><i class="ti-pie-chart"></i><span> Charts </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="charts-morris.php">Morris Chart</a></li>
                                <li><a href="charts-chartjs.php">Chartjs</a></li>
                                <li><a href="charts-flot.php">Flot Chart</a></li>
                                <li><a href="charts-other.php">Other Chart</a></li>
                            </ul>
                        </li>
                        <li class="has_sub"> <a href=";" class="waves-effect"><i class="ti-map-alt"></i><span> Maps </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="maps-google.php"> Google Map</a></li>
                                <li><a href="maps-vector.php"> Vector Map</a></li>
                            </ul>
                        </li>
                        <li> <a href="calendar.php" class="waves-effect"><i class="ti-calendar"></i><span> Calendar <span class="badge badge-primary pull-right">NEW</span></span></a></li>
                        <li class="has_sub"> <a href=";" class="waves-effect"><i class="ti-files"></i><span> Pages </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="pages-timeline.php">Timeline</a></li>
                                <li><a href="pages-invoice.php">Invoice</a></li>
                                <li><a href="pages-directory.php">Directory</a></li>
                                <li><a href="pages-login.php">Login</a></li>
                                <li><a href="pages-register.php">Register</a></li>
                                <li><a href="pages-recoverpw.php">Recover Password</a></li>
                                <li><a href="pages-lock-screen.php">Lock Screen</a></li>
                                <li><a href="pages-blank.php">Blank Page</a></li>
                                <li><a href="pages-404.php">Error 404</a></li>
                                <li><a href="pages-500.php">Error 500</a></li>
                            </ul>
                        </li> -->


                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>