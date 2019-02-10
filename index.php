<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="images/favicon_1.ico">
        <title>Smart School Management System</title>

        <!-- Base Css Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="css/waves-effect.css" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="css/helper.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
         <!-- jvectormap -->
        <link href="assets/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
        <script src="js/modernizr.min.js"></script>
        <!-- ION Slider -->
        <link href="assets/ion-rangeslider/ion.rangeSlider.css" rel="stylesheet" type="text/css"/>
        <link href="assets/ion-rangeslider/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css"/>
        <!-- Plugin Css-->
        <link rel="stylesheet" href="assets/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="assets/jquery-datatables-editable/datatables.css" />
        <!-- DataTables -->
        <link href="assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />   
        <!-- Responsive-table -->
        <link href="assets/responsive-table/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen"/>
        <!-- Plugins css -->
        <link href="assets/notifications/notification.css" rel="stylesheet" />
        <!-- Plugins css -->
        <link href="assets/nestable/jquery.nestable.css" rel="stylesheet" />
        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/morris/morris.css">
        <!-- Plugins css -->
        <link href="assets/modal-effect/css/component.css" rel="stylesheet">
        <!--venobox lightbox-->
        <link rel="stylesheet" href="assets/magnific-popup/magnific-popup.css"/>
        <!-- X-editable css -->
        <link type="text/css" href="assets/bootstrap3-editable/bootstrap-editable.css" rel="stylesheet">
            <!-- Dropzone css -->
        <link href="assets/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
        <!--bootstrap-wysihtml5-->
        <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
        <link href="assets/summernote/summernote.css" rel="stylesheet" />
        <!-- Plugins css-->
        <link href="assets/tagsinput/jquery.tagsinput.css" rel="stylesheet" />
        <link href="assets/toggles/toggles.css" rel="stylesheet" />
        <link href="assets/timepicker/bootstrap-timepicker.min.css" rel="stylesheet" />
        <link href="assets/timepicker/bootstrap-datepicker.min.css" rel="stylesheet" />
        <link href="assets/colorpicker/colorpicker.css" rel="stylesheet" type="text/css" />
        <link href="assets/jquery-multi-select/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="assets/select2/select2.css" rel="stylesheet" type="text/css" />
        <!--Plugin Css-->
        <link rel="stylesheet" href="assets/codemirror/codemirror.css" />
        <link rel="stylesheet" href="assets/codemirror/ambiance.css">
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.php" class="logo"><img src="images/logo.png" style="width: 50px;height:50px;"> <span>Binary School </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                       <small>There are
                                                          <span class="text-primary">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="images/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#profile" onClick="load('content','profile.php');" type="button"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="#setting" onClick="load('content','setting.php');" type="button"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">John Doe</a>
                            </div>
                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="index.php" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#"  class="waves-effect"><i class="md md-mail"></i><span> Mail </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#inbox" onClick="load('content','inbox.php');" type="button">Inbox</a></li>
                                    <li><a href="#email-compose" onclick="load('content','email-compose.php');">Compose Mail</a></li>
                                    <li><a href="#email-read" onclick="load('content','email-read.php');">View Mail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#calendar" onclick="load('content','calendar.php');" class="waves-effect"><i class="md md-event"></i><span> Calendar </span></a>
                            </li>
                            <li>
                                <a href="#paybill" onclick="load('content','pay_bill.php');" class="waves-effect"><i class="md md-school"></i><span> Pay Bill </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Elements </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#typography" onclick="load('content','typography.php');">Typography</a></li>
                                    <li><a href="#buttons" onclick="load('content','buttons.php');">Buttons</a></li>
                                    <li><a href="#panels" onclick="load('content','panels.php');">Panels</a></li>
                                    <li><a href="#checkbox-radio" onclick="load('content','checkbox-radio.php');">Checkboxs-Radios</a></li>
                                    <li><a href="#tabs-accordions" onclick="load('content','tabs-accordions.php');">Tabs &amp; Accordions</a></li>
                                    <li><a href="#modals" onclick="load('content','modals.php');">Modals</a></li>
                                    <li><a href="#bootstrap-ui" onclick="load('content','bootstrap-ui.php');">BS Elements</a></li>
                                    <li><a href="#progressbars" onclick="load('content','progressbars.php');">Progress Bars</a></li>
                                    <li><a href="#notification" onclick="load('content','notification.php');">Notification</a></li>
                                    <li><a href="#sweet-alert" onclick="load('content','sweet-alert.php');">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span> Components </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#grid" onclick="load('content','grid.php');">Grid</a></li>
                                    <li><a href="#portlets" onclick="load('content','portlets.php');">Portlets</a></li>
                                    <li><a href="#widgets" onclick="load('content','widgets.php');">Widgets</a></li>
                                    <li><a href="#nestable-list" onclick="load('content','nestable-list.php');">Nesteble</a></li>
                                    <li><a href="#ui-sliders" onclick="load('content','ui-sliders.php');">Sliders </a></li>
                                    <li><a href="#gallery" onclick="load('content','gallery.php');">Gallery </a></li>
                                    <li><a href="#pricing" onclick="load('content','pricing.php');">Pricing Table </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-redeem"></i> <span> Icons </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#material-icon" onclick="load('content','material-icon.php');">Material Design</a></li>
                                    <li><a href="#ion-icons" onclick="load('content','ion-icons.php');">Ion Icons</a></li>
                                    <li><a href="#font-awesome" onclick="load('content','font-awesome.php');">Font awesome</a></li>
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-now-widgets"></i><span> Forms </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#form-elements" onclick="load('content','form-elements.php');">General Elements</a></li>
                                    <li><a href="#form-validation" onclick="load('content','form-validation.php');">Form Validation</a></li>
                                    <li><a href="#form-advanced" onclick="load('content','form-advanced.php');">Advanced Form</a></li>
                                    <li><a href="#form-wizard" onclick="load('content','form-wizard');">Form Wizard</a></li>
                                    <li><a href="#form-editor" onclick="load('content','form-editor.php');">WYSIWYG Editor</a></li>
                                    <li><a href="#code-editor" onclick="load('content','code-editor.php');">Code Editors</a></li>
                                    <li><a href="#form-uploads" onclick="load('content','form-uploads.php');">Multiple File Upload</a></li>
                                    <li><a href="#form-xeditable" onclick="load('content','form-xeditable.php');">X-editable</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-view-list"></i><span> Data Tables </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#tables" onclick="load('content','tables.php');">Basic Tables</a></li>
                                    <li><a href="#table-datatable" onclick="load('content','table-datatable.php');">Data Table</a></li>
                                    <li><a href="#tables-editable" onclick="load('content','tables-editable.php');">Editable Table</a></li>
                                    <li><a href="#responsive-table" onclick="load('content','responsive-table.php');">Responsive Table</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-poll"></i><span> Charts </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#morris-chart" onclick="load('content','morris-chart.php');">Morris Chart</a></li>
                                    <li><a href="#chartjs" onclick="load('content','chartjs.php');">Chartjs</a></li>
                                    <li><a href="#flot-chart" onclick="load('content','flot-chart.php');">Flot Chart</a></li>
                                    <li><a href="#peity-chart" onclick="load('content','peity-chart.php');">Peity Charts</a></li>
                                    <li><a href="#charts-sparkline" onclick="load('content','charts-sparkline.php');">Sparkline Charts</a></li>
                                    <li><a href="#chart-radial" onclick="load('content','chart-radial.php');">Radial charts</a></li>
                                    <li><a href="#other-chart" onclick="load('content','other-chart.php');">Other Chart</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-place"></i><span> Maps </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#gmap" onclick="load('content','gmap.php');"> Google Map</a></li>
                                    <li><a href="#vector-map" onclick="load('content','vector-map.php');"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-pages"></i><span> Pages </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#profile" onclick="load('content','profile.php');">Profile</a></li>
                                    <li><a href="#timeline" onclick="load('content','timeline.php');">Timeline</a></li>
                                    <li><a href="#invoice" onclick="load('content','invoice.php');">Invoice</a></li>
                                    <li><a href="#email-template" onclick="load('content','email-template.php');">Email template</a></li>
                                    <li><a href="#contact" onclick="load('content','contact.php');">Contact-list</a></li>
                                    <li><a href="#login" onclick="load('content','login.php');">Login</a></li>
                                    <li><a href="#register" onclick="load('content','register.php');">Register</a></li>
                                    <li><a href="#recoverpw" onclick="load('content','recoverpw.php');">Recover Password</a></li>
                                    <li><a href="#lock-screen" onclick="load('content','lock-screen.php');">Lock Screen</a></li>
                                    <li><a href="#blank" onclick="load('content','blank.php');">Blank Page</a></li>
                                    <li><a href="#maintenance" onclick="load('content','maintenance.php');">Maintenance</a></li>
                                    <li><a href="#coming-soon" onclick="load('content','coming-soon.php');">Coming-soon</a></li>
                                    <li><a href="#404" onclick="load('content','404.php');">404 Error</a></li>
                                    <li><a href="#404_alt" onclick="load('content','404_alt.php');">404 alt</a></li>
                                    <li><a href="#500" onclick="load('content','500.php');">500 Error</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="md md-share"></i><span>Sub Menu</span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul style="">
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.1</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.2</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.3</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content" id="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Welcome !</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">15852</span>
                                        Total Sales
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Sales <span class="pull-right">60%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-purple"><i class="ion-ios7-cart"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">956</span>
                                        New Orders
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Orders <span class="pull-right">90%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-success"><i class="ion-eye"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">20544</span>
                                        Unique Visitors
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Visitors <span class="pull-right">60%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">5210</span>
                                        New Users
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Users <span class="pull-right">57%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">
                                                    <span class="sr-only">57% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- End row-->


                        <div class="row">
                            <div class="col-lg-8">
                                <div class="portlet"><!-- /portlet heading -->
                                    <div class="portlet-heading">
                                        <h3 class="portlet-title text-dark text-uppercase">
                                            Website Stats
                                        </h3>
                                        <div class="portlet-widgets">
                                            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                            <span class="divider"></span>
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#portlet1"><i class="ion-minus-round"></i></a>
                                            <span class="divider"></span>
                                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="portlet1" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="website-stats" style="position: relative;height: 320px;"></div>
                                                    <div class="row text-center m-t-30">
                                                        <div class="col-sm-4">
                                                            <h4 class="counter">86,956</h4>
                                                            <small class="text-muted"> Weekly Report</small>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4 class="counter">86,69</h4>
                                                            <small class="text-muted">Monthly Report</small>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4 class="counter">948,16</h4>
                                                            <small class="text-muted">Yearly Report</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /Portlet -->
                            </div> <!-- end col -->

                            <div class="col-lg-4">
                                <div class="portlet"><!-- /portlet heading -->
                                    <div class="portlet-heading">
                                        <h3 class="portlet-title text-dark text-uppercase">
                                            Website Stats
                                        </h3>
                                        <div class="portlet-widgets">
                                            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                            <span class="divider"></span>
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                                            <span class="divider"></span>
                                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="portlet2" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="pie-chart">
                                                        <div id="pie-chart-container" class="flot-chart" style="height: 320px;">
                                                        </div>
                                                    </div>

                                                    <div class="row text-center m-t-30">
                                                        <div class="col-sm-6">
                                                            <h4 class="counter">86,956</h4>
                                                            <small class="text-muted"> Weekly Report</small>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h4 class="counter">86,69</h4>
                                                            <small class="text-muted">Monthly Report</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /Portlet -->
                            </div> <!-- end col -->
                        </div> <!-- End row -->


                        <div class="row">
                            <!-- INBOX -->
                            <div class="col-lg-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Inbox</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="inbox-widget nicescroll mx-box">
                                            <a href="#">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img"><img src="images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                                    <p class="inbox-item-author">Chadengle</p>
                                                    <p class="inbox-item-text">Hey! there I'm available...</p>
                                                    <p class="inbox-item-date">13:40 PM</p>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img"><img src="images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                                    <p class="inbox-item-author">Tomaslau</p>
                                                    <p class="inbox-item-text">I've finished it! See you so...</p>
                                                    <p class="inbox-item-date">13:34 PM</p>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img"><img src="images/users/avatar-3.jpg" class="img-circle" alt=""></div>
                                                    <p class="inbox-item-author">Stillnotdavid</p>
                                                    <p class="inbox-item-text">This theme is awesome!</p>
                                                    <p class="inbox-item-date">13:17 PM</p>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img"><img src="images/users/avatar-4.jpg" class="img-circle" alt=""></div>
                                                    <p class="inbox-item-author">Kurafire</p>
                                                    <p class="inbox-item-text">Nice to meet you</p>
                                                    <p class="inbox-item-date">12:20 PM</p>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img"><img src="images/users/avatar-5.jpg" class="img-circle" alt=""></div>
                                                    <p class="inbox-item-author">Shahedk</p>
                                                    <p class="inbox-item-text">Hey! there I'm available...</p>
                                                    <p class="inbox-item-date">10:15 AM</p>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img"><img src="images/users/avatar-6.jpg" class="img-circle" alt=""></div>
                                                    <p class="inbox-item-author">Adhamdannaway</p>
                                                    <p class="inbox-item-text">This theme is awesome!</p>
                                                    <p class="inbox-item-date">9:56 AM</p>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img"><img src="images/users/avatar-8.jpg" class="img-circle" alt=""></div>
                                                    <p class="inbox-item-author">Arashasghari</p>
                                                    <p class="inbox-item-text">Hey! there I'm available...</p>
                                                    <p class="inbox-item-date">10:15 AM</p>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img"><img src="images/users/avatar-9.jpg" class="img-circle" alt=""></div>
                                                    <p class="inbox-item-author">Joshaustin</p>
                                                    <p class="inbox-item-text">I've finished it! See you so...</p>
                                                    <p class="inbox-item-date">9:56 AM</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <!-- CHAT -->
                            <div class="col-lg-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Chat</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <div class="chat-conversation">
                                            <ul class="conversation-list nicescroll">
                                                <li class="clearfix">
                                                    <div class="chat-avatar">
                                                        <img src="images/avatar-1.jpg" alt="male">
                                                        <i>10:00</i>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>John Deo</i>
                                                            <p>
                                                                Hello!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix odd">
                                                    <div class="chat-avatar">
                                                        <img src="images/users/avatar-5.jpg" alt="Female">
                                                        <i>10:01</i>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>Smith</i>
                                                            <p>
                                                                Hi, How are you? What about our next meeting?
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <div class="chat-avatar">
                                                        <img src="images/avatar-1.jpg" alt="male">
                                                        <i>10:01</i>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>John Deo</i>
                                                            <p>
                                                                Yeah everything is fine
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix odd">
                                                    <div class="chat-avatar">
                                                        <img src="images/users/avatar-5.jpg" alt="male">
                                                        <i>10:02</i>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>Smith</i>
                                                            <p>
                                                                Wow that's great
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="row">
                                                <div class="col-sm-9 chat-inputbar">
                                                    <input type="text" class="form-control chat-input" placeholder="Enter your text">
                                                </div>
                                                <div class="col-sm-3 chat-send">
                                                    <button type="submit" class="btn btn-info btn-block waves-effect waves-light">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div> <!-- end col-->


                            <!-- TODO -->
                            <div class="col-lg-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Todo</h3> 
                                    </div> 
                                    <div class="panel-body todoapp"> 
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h4 id="todo-message"><span id="todo-remaining"></span> of <span id="todo-total"></span> remaining</h4> 
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="" class="pull-right btn btn-primary btn-sm waves-effect waves-light" id="btn-archive">Archive</a>
                                            </div>
                                        </div>

                                        <ul class="list-group no-margn nicescroll todo-list" style="max-height: 288px;" id="todo-list"></ul>

                                         <form name="todo-form" id="todo-form" role="form" class="m-t-20">
                                            <div class="row">
                                                <div class="col-sm-9 todo-inputbar">
                                                    <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo">
                                                </div>
                                                <div class="col-sm-3 todo-send">
                                                    <button class="btn-primary btn-block btn waves-effect waves-light" type="button" id="todo-btn-submit">Add</button>
                                                </div>
                                            </div>
                                        </form> 
                                    </div> 
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <!--Start Ajax for load page -->
        <script type="text/javascript">
            function load(divid,page)
                {
                    if(XMLHttpRequest)
                    {
                        xmlhttp = new XMLHttpRequest();
                    }
                    else
                    {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange  = function()
                    {
                        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                            document.getElementById('content').innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET",page,true);
                    xmlhttp.send();
                }
        </script>
        <!--End Ajax for load page -->
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/waves.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="assets/chat/moment-2.2.1.js"></script>
        <script src="assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/jquery-detectmobile/detect.js"></script>
        <script src="assets/fastclick/fastclick.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/jquery-blockui/jquery.blockUI.js"></script>

        <script src="assets/notifications/notify.min.js"></script>
        <script src="assets/notifications/notify-metro.js"></script>
        <script src="assets/notifications/notifications.js"></script>

        <!-- sweet alerts -->
        <script src="assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="assets/sweet-alert/sweet-alert.init.js"></script>

        <!-- flot Chart -->
        <script src="assets/flot-chart/jquery.flot.js"></script>
        <script src="assets/flot-chart/jquery.flot.time.js"></script>
        <script src="assets/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="assets/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/flot-chart/jquery.flot.selection.js"></script>
        <script src="assets/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- Counter-up -->
        <script src="assets/counterup/waypoints.min.js" type="text/javascript"></script>
        <script src="assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="js/jquery.app.js"></script>

        <!-- Dashboard -->
        <script src="js/jquery.dashboard.js"></script>

        <!-- Chat -->
        <script src="js/jquery.chat.js"></script>

        <!-- Todo -->
        <script src="js/jquery.todo.js"></script>
        <!-- skycons -->
        <script src="js/skycons.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                /* Counter Up */
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

            });
            /* BEGIN SVG WEATHER ICON */
            if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#fff"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
            };

        </script>
        <!--Start JS For Vector Map-->
        <script src="assets/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assets/jvectormap/gdp-data.js"></script>
        <script src="assets/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="assets/jvectormap/jquery-jvectormap-europe-mill-en.js"></script>
        <script src="assets/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="assets/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
        <script src="assets/jvectormap/jvectormap.init.js"></script>                
        <!--End JS For Vector Map-->
        <!--Start JS For UI Slider-->
        <script src="assets/ion-rangeslider/ion.rangeSlider.min.js"></script>
        <script src="assets/ion-rangeslider/ui-sliders.js"></script>
        <!--End JS For UI Slider-->
        <!--Start JS For timelinepage-->
        <script type="text/javascript">
            jQuery(document).ready(function($){
            var $timeline_block = $('.cd-timeline-block');

                //hide timeline blocks which are outside the viewport
                $timeline_block.each(function(){
                    if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
                        $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
                    }
                });

                //on scolling, show/animate timeline blocks when enter the viewport
                $(window).on('scroll', function(){
                    $timeline_block.each(function(){
                        if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
                            $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
                        }
                    });
                });
            });
        </script>
        <!--JS For timelinepage-->
        <!--Start JS For table editable-->
        <!-- Examples -->
        <script src="assets/magnific-popup/magnific-popup.js"></script>
        <script src="assets/jquery-datatables-editable/jquery.dataTables.js"></script> 
        <script src="assets/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/jquery-datatables-editable/datatables.editable.init.js"></script>
        <!--End JS For table editable-->
        <!--Start JS For data table-->
        <script src="assets/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/datatables/dataTables.bootstrap.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>
        <!--End JS For data table-->
        <!--JS For piety chart-->
        <script src="assets/peity-chart/jquery.peity.min.js"></script>
        <script src="assets/peity-chart/jquery.peity.init.js"></script>
        <!-- responsive-table--> 
        <script src="assets/responsive-table/rwd-table.min.js" type="text/javascript"></script>
        <!-- EASY PIE CHART JS -->
        <script src="assets/easypie-chart/easypiechart.min.js"></script>
        <script src="assets/easypie-chart/jquery.easypiechart.min.js"></script>
        <script src="assets/easypie-chart/example.js"></script>

        <!--script for nestable page only-->
        <script src="assets/nestable/jquery.nestable.js"></script>
        <script src="assets/nestable/nestable.js"></script>
        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assets/jquery-knob/jquery.knob.js"></script>
        <!--Morris Chart-->
        <script src="assets/morris/morris.min.js"></script>
        <script src="assets/morris/raphael.min.js"></script>
        <script src="assets/morris/morris.init.js"></script>
        <!-- Modal-Effect -->
        <script src="assets/modal-effect/js/classie.js"></script>
        <script src="assets/modal-effect/js/modalEffects.js"></script>
        <!-- google maps api -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <!-- main file -->
        <script src="assets/gmaps/gmaps.js"></script>
        <!-- demo codes -->
        <script src="assets/gmaps/gmaps-plugin.js"></script>
        <!--Start Gallary-->
        <script type="text/javascript" src="assets/gallery/isotope.js"></script>
        <script type="text/javascript" src="assets/magnific-popup/magnific-popup.js"></script> 
          
        <script type="text/javascript">
            $(window).load(function(){
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                }); 
            });
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    }
                });
            });
        </script>
        <!--End Gallary-->
        <!-- XEditable Plugin -->
        <script type="text/javascript" src="assets/bootstrap3-editable/moment.min.js"></script>    
        <script type="text/javascript" src="assets/bootstrap3-editable/bootstrap-editable.js"></script>
        <script type="text/javascript" src="assets/bootstrap3-editable/demo-xeditable.js"></script>
        <!--Form Validation-->
        <script src="assets/form-wizard/bootstrap-validator.min.js" type="text/javascript"></script>

        <!--Form Wizard-->
        <script src="assets/form-wizard/jquery.steps.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/jquery.validate/jquery.validate.min.js"></script>
        <!--form validation init-->
        <script src="assets/jquery.validate/form-validation-init.js"></script>

        <!--wizard initialization-->
        <script src="assets/form-wizard/wizard-init.js" type="text/javascript"></script>
        <!-- Page Specific JS Libraries -->
        <script src="assets/dropzone/dropzone.min.js"></script>
        <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

        <!--form validation init-->
        <script src="assets/summernote/summernote.min.js"></script>

        <script>

            jQuery(document).ready(function(){
                $('.wysihtml5').wysihtml5();

                $('.summernote').summernote({
                    height: 200,                 // set editor height

                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor

                    focus: true                 // set focus to editable area after initializing summernote
                });

            });
        </script>
        <!--Start Advance Form-->
<script src="assets/tagsinput/jquery.tagsinput.min.js"></script>
        <script src="assets/toggles/toggles.min.js"></script>
        <script src="assets/timepicker/bootstrap-timepicker.min.js"></script>
        <script src="assets/timepicker/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="assets/colorpicker/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="assets/jquery-multi-select/jquery.multi-select.js"></script>
        <script type="text/javascript" src="assets/jquery-multi-select/jquery.quicksearch.js"></script>
        <script src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/spinner/spinner.min.js"></script>
        <script src="assets/select2/select2.min.js" type="text/javascript"></script>


        <script>
            jQuery(document).ready(function() {
                    
                // Tags Input
                jQuery('#tags').tagsInput({width:'auto'});

                // Form Toggles
                jQuery('.toggle').toggles({on: true});

                // Time Picker
                jQuery('#timepicker').timepicker({defaultTIme: false});
                jQuery('#timepicker2').timepicker({showMeridian: false});
                jQuery('#timepicker3').timepicker({minuteStep: 15});

                // Date Picker
                jQuery('#datepicker').datepicker();
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple').datepicker({
                    numberOfMonths: 3,
                    showButtonPanel: true
                });
                //colorpicker start

                $('.colorpicker-default').colorpicker({
                    format: 'hex'
                });
                $('.colorpicker-rgba').colorpicker();


                //multiselect start

                $('#my_multi_select1').multiSelect();
                $('#my_multi_select2').multiSelect({
                    selectableOptgroup: true
                });

                $('#my_multi_select3').multiSelect({
                    selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    afterInit: function (ms) {
                        var that = this,
                            $selectableSearch = that.$selectableUl.prev(),
                            $selectionSearch = that.$selectionUl.prev(),
                            selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                            selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                        that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                            .on('keydown', function (e) {
                                if (e.which === 40) {
                                    that.$selectableUl.focus();
                                    return false;
                                }
                            });

                        that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                            .on('keydown', function (e) {
                                if (e.which == 40) {
                                    that.$selectionUl.focus();
                                    return false;
                                }
                            });
                    },
                    afterSelect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    },
                    afterDeselect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    }
                });

                //spinner start
                $('#spinner1').spinner();
                $('#spinner2').spinner({disabled: true});
                $('#spinner3').spinner({value:0, min: 0, max: 10});
                $('#spinner4').spinner({value:0, step: 5, min: 0, max: 200});
                //spinner end

                // Select2
                jQuery(".select2").select2({
                    width: '100%'
                });
            });
        </script>
        <!--End Advance Form-->
        <!--Start Flow Chart-->
        <script src="assets/flot-chart/jquery.flot.js"></script>
        <script src="assets/flot-chart/jquery.flot.time.js"></script>
        <script src="assets/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="assets/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/flot-chart/jquery.flot.selection.js"></script>
        <script src="assets/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="assets/flot-chart/jquery.flot.init.js"></script>
        <!--End Flow Chart-->
        <!--Start email read-->
        <script>
            jQuery(document).ready(function(){
                $('.wysihtml5').wysihtml5();
            });
        </script>
        <!--End email read-->
        <!--codemirror-->
        <script src="assets/codemirror/codemirror.js"></script>
        <script src="assets/codemirror/formatting.js"></script>
        <script src="assets/codemirror/xml.js"></script>
        <script src="assets/codemirror/javascript.js"></script>
        <script src="assets/codemirror/custom.codemirror.js"></script>
        <!--Start sparkline-->
        <script src="assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/jquery-sparkline/charts-sparkline.js"></script>
        <!--End sparkline-->
        <!-- Chart JS -->
        <script src="assets/chartjs/chart.min.js"></script>
        <script src="assets/chartjs/chartjs.init.js"></script>
        
        <!-- Calender PAGE SCRIPTS -->
        <script src='assets/fullcalendar/moment.min.js'></script>
        <script src='assets/fullcalendar/fullcalendar.min.js'></script>
        <script src="assets/fullcalendar/fullcalendar.js"></script>
    </body>
</html>
