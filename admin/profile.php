<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:../login.php');
} else {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">


        <!-- App title -->
        <title>Zircos - Responsive Admin Dashboard Template</title>
        <link rel="stylesheet" href="../plugins/morris/morris.css">


        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo"><span>Zir<span>cos</span></span><i class="mdi mdi-layers"></i></a>
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
                <?php include('includes/topheader.php'); ?>
            </div>
            <!-- Top Bar End -->



            <!-- ========== Left Sidebar Start ========== -->
            <?php include('includes/leftsidebar.php'); ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Profile </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">HIMASI PORTAL</a>
                                        </li>
                                        <li>
                                            <a href="#">Extras </a>
                                        </li>
                                        <li class="active">
                                            Profile
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4">
                                            <div class="text-center card-box">
                                                <div class="member-card">
                                                    <div class="thumb-xl member-thumb m-b-10 center-block">
                                                        <img src="assets/images/users/avatar-1.jpg" class="img-circle img-thumbnail" alt="profile-image">
                                                        <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                                    </div>

                                                    <div class="">
                                                        <h4 class="m-b-5">Mark A. McKnight</h4>
                                                        <p class="text-muted">@webdesigner</p>
                                                    </div>

                                                    <button type="button" class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Follow</button>
                                                    <button type="button" class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>

                                                    <p class="text-muted font-13 m-t-20">
                                                        Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                                    </p>

                                                    <hr />

                                                    <div class="text-left">
                                                        <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">Johnathan Deo</span></p>

                                                        <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">(123) 123 1234</span></p>

                                                        <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">coderthemes@gmail.com</span></p>

                                                        <p class="text-muted font-13"><strong>Location :</strong> <span class="m-l-15">USA</span></p>
                                                    </div>

                                                    <ul class="social-links list-inline m-t-30">
                                                        <li>
                                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div> <!-- end card-box -->

                                        </div> <!-- end col -->

                                        <div class="col-md-8 col-lg-9">
                                            <h4>Expertise</h4>

                                            <div class="row m-t-20">
                                                <div class="col-md-3 col-sm-6 text-center">
                                                    <div class="p-t-10">
                                                        <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round data-fgColor="#2abfcc" value="89" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                                                        <h6 class="text-muted m-t-10">HTML5</h6>
                                                    </div>
                                                </div><!-- end col-->

                                                <div class="col-md-3 col-sm-6 text-center">
                                                    <div class="p-t-10">
                                                        <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round data-fgColor="#2abfcc" value="94" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                                                        <h6 class="text-muted m-t-10">CSS3</h6>
                                                    </div>
                                                </div><!-- end col-->

                                                <div class="col-md-3 col-sm-6 text-center">
                                                    <div class="p-t-10">
                                                        <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round data-fgColor="#2abfcc" value="75" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                                                        <h6 class="text-muted m-t-10">Wordpress</h6>
                                                    </div>
                                                </div><!-- end col-->

                                                <div class="col-md-3 col-sm-6 text-center">
                                                    <div class="p-t-10">
                                                        <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round data-fgColor="#2abfcc" value="85" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                                                        <h6 class="text-muted m-t-10">AngularJs</h6>
                                                    </div>
                                                </div><!-- end col-->

                                            </div> <!-- end row -->

                                            <hr />

                                            <div class="row">
                                                <div class="col-md-8 col-sm-6">
                                                    <h4>Experience</h4>

                                                    <div class=" p-t-10">
                                                        <h5 class="text-custom m-b-5">Lead designer / Developer</h5>
                                                        <p class="m-b-0">websitename.com</p>
                                                        <p><b>2010-2015</b></p>

                                                        <p class="text-muted font-13 m-b-0">Lorem Ipsum is simply dummy text
                                                            of the printing and typesetting industry. Lorem Ipsum has
                                                            been the industry's standard dummy text ever since the
                                                            1500s, when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book.
                                                        </p>
                                                    </div>

                                                    <hr />

                                                    <div class="">
                                                        <h5 class="text-custom m-b-5">Senior Graphic Designer</h5>
                                                        <p class="m-b-0">coderthemes.com</p>
                                                        <p><b>2007-2009</b></p>

                                                        <p class="text-muted font-13">Lorem Ipsum is simply dummy text
                                                            of the printing and typesetting industry. Lorem Ipsum has
                                                            been the industry's standard dummy text ever since the
                                                            1500s, when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book.
                                                        </p>
                                                    </div>
                                                </div> <!-- end col -->

                                                <div class="col-md-4 col-sm-6">
                                                    <h4>Friends</h4>

                                                    <div class="inbox-widget">
                                                        <a href="#">
                                                            <div class="inbox-item">
                                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                                                <p class="inbox-item-author">Tomaslau</p>
                                                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                                                <p class="inbox-item-date">
                                                                    <button type="button" class="btn btn-xs btn-success">Follow</button>
                                                                </p>
                                                            </div>
                                                        </a>
                                                        <a href="#">
                                                            <div class="inbox-item">
                                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="img-circle" alt=""></div>
                                                                <p class="inbox-item-author">Stillnotdavid</p>
                                                                <p class="inbox-item-text">This theme is awesome!</p>
                                                                <p class="inbox-item-date">
                                                                    <button type="button" class="btn btn-xs btn-danger">Unfollow</button>
                                                                </p>
                                                            </div>
                                                        </a>
                                                        <a href="#">
                                                            <div class="inbox-item">
                                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="img-circle" alt=""></div>
                                                                <p class="inbox-item-author">Kurafire</p>
                                                                <p class="inbox-item-text">Nice to meet you</p>
                                                                <p class="inbox-item-date">
                                                                    <button type="button" class="btn btn-xs btn-success">Follow</button>
                                                                </p>
                                                            </div>
                                                        </a>
                                                        <a href="#">
                                                            <div class="inbox-item">
                                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="img-circle" alt=""></div>
                                                                <p class="inbox-item-author">Shahedk</p>
                                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                                <p class="inbox-item-date">
                                                                    <button type="button" class="btn btn-xs btn-success">Follow</button>
                                                                </p>
                                                            </div>
                                                        </a>
                                                        <a href="#">
                                                            <div class="inbox-item">
                                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="img-circle" alt=""></div>
                                                                <p class="inbox-item-author">Adhamdannaway</p>
                                                                <p class="inbox-item-text">This theme is awesome!</p>
                                                                <p class="inbox-item-date">
                                                                    <button type="button" class="btn btn-xs btn-success">Follow</button>
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div> <!-- end col -->
                                            </div> <!-- end row -->

                                            <h4 class="m-t-30">Recent Works</h4>

                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <div class=" thumb">
                                                        <a href="#" class="image-popup" title="Screenshot-1">
                                                            <img src="assets/images/shots/shot-1.png" class="thumb-img" alt="work-thumbnail">
                                                        </a>
                                                        <div class="gal-detail">
                                                            <h4>Travel Guide</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-6">
                                                    <div class=" thumb">
                                                        <a href="#" title="Screenshot-2">
                                                            <img src="assets/images/shots/shot-2.png" class="thumb-img" alt="work-thumbnail">
                                                        </a>
                                                        <div class="gal-detail">
                                                            <h4>Interval timer (app concept)</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-6">
                                                    <div class=" thumb">
                                                        <a href="#" class="image-popup" title="Screenshot-3">
                                                            <img src="assets/images/shots/shot-3.png" class="thumb-img" alt="work-thumbnail">
                                                        </a>
                                                        <div class="gal-detail">
                                                            <h4>Ecommerce app</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Zircos.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="../plugins/jquery-knob/jquery.knob.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>

    </html>
<?php } ?>