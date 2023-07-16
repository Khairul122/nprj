           <!DOCTYPE html>
           <html lang="en">

           <head>
               <meta charset="utf-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
               <meta name="author" content="Coderthemes">

               <!-- App favicon -->
               <link rel="shortcut icon" href="assets/images/favicon.ico">
               <!-- App title -->

               <!--Morris Chart CSS -->
               <link rel="stylesheet" href="../plugins/morris/morris.css">

               <!-- jvectormap -->
               <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

               <!-- App css -->
               <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
               <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
               <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
               <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
               <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
               <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
               <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
               <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

               <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
               <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
               <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

               <script src="assets/js/modernizr.min.js"></script>

           </head>







           <div class="topbar">

               <!-- LOGO -->
               <div class="topbar-left">
                   <a href="index.php" class="logo"><span>HIMASI<span>PORTAL</span></span><i class="mdi mdi-layers"></i></a>
                   <!-- Image logo -->
                   <!--<a href="index.html" class="logo">-->
                   <!--<span>-->
                   <!--<img src="assets/images/logo.png" alt="" height="30">-->
                   <!--</span>-->
                   <!--<i>-->
                   <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
                   <!--</i>-->
                   <!--</a>-->
               </div>

               <!-- Button mobile view to collapse sidebar menu -->
               <div class="navbar navbar-default" role="navigation">
                   <div class="container">

                       <!-- Navbar-left -->
                       <ul class="nav navbar-nav navbar-left">
                           <li>
                               <button class="button-menu-mobile open-left waves-effect">
                                   <i class="mdi mdi-menu"></i>
                               </button>
                           </li>


                       </ul>

                       <!-- Right(Notification) -->
                       <ul class="nav navbar-nav navbar-right">

                           <li>
                               <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                   <i class="mdi mdi-bell"></i>
                                   <span class="badge up bg-success">4</span>
                               </a>

                               <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                   <li>
                                       <h5>Notifications</h5>
                                   </li>
                                   <li>
                                       <a href="#" class="user-list-item">
                                           <div class="icon bg-info">
                                               <i class="mdi mdi-account"></i>
                                           </div>
                                           <div class="user-desc">
                                               <span class="name">New Signup</span>
                                               <span class="time">5 hours ago</span>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#" class="user-list-item">
                                           <div class="icon bg-danger">
                                               <i class="mdi mdi-comment"></i>
                                           </div>
                                           <div class="user-desc">
                                               <span class="name">New Message received</span>
                                               <span class="time">1 day ago</span>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#" class="user-list-item">
                                           <div class="icon bg-warning">
                                               <i class="mdi mdi-settings"></i>
                                           </div>
                                           <div class="user-desc">
                                               <span class="name">Settings</span>
                                               <span class="time">1 day ago</span>
                                           </div>
                                       </a>
                                   </li>
                                   <li class="all-msgs text-center">
                                       <p class="m-0"><a href="#">See all Notification</a></p>
                                   </li>
                               </ul>
                           </li>
                           <li class="dropdown user-box">
                               <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                   <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                               </a>

                               <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                   <li>
                                       <h5>Hi, Admin</h5>
                                   </li>

                                   <li><a href="change-password.php"><i class="ti-settings m-r-5"></i> Chnage Password</a></li>

                                   <li><a href="logout.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                               </ul>
                           </li>

                       </ul> <!-- end navbar-right -->

                   </div><!-- end container -->
               </div><!-- end navbar -->
           </div>