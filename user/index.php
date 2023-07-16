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
        <title>HIMASI PORTAL</title>
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
                    <a href="index.html" class="logo"><span>HIMASI<span>Portal</span></span><i class="mdi mdi-layers"></i></a>
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
                                            <a href="#">User </a>
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
                                                    <?php
                                                    $id =  $_SESSION['id'];
                                                    $query = mysqli_query($con, "select * from tblusers where id = '$id'");
                                                    $data = mysqli_fetch_array($query); ?>
                                                    <div class="thumb-xl member-thumb m-b-10 center-block">
                                                        <img src="postimages/<?php echo htmlentities($data['image']); ?>" class="img-circle img-thumbnail" alt="profile-image">
                                                        <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                                    </div>

                                                    <div class="">

                                                        <?php
                                                        $id =  $_SESSION['id'];
                                                        $query = mysqli_query($con, "select * from tblusers where id = '$id'");
                                                        $data = mysqli_fetch_array($query); ?>
                                                        <h4 class="m-b-5"><?php echo htmlentities($data['nama']); ?></h4>
                                                        <p class="text-muted"><?php echo htmlentities($data['nim']); ?></p>
                                                    </div>

                                                    <hr />

                                                    <div class="text-left">
                                                        <p class="text-muted font-13"><strong>Nama Lengkap : </strong> <span class="m-l-15"><?php echo htmlentities($data['nama']); ?></span></p>

                                                        <p class="text-muted font-13"><strong>Jabatan : </strong> <span class="m-l-15"><?php echo htmlentities($data['type']); ?></span></p>


                                                        <p class="text-muted font-13"><strong>NO Hp :</strong><span class="m-l-15"><?php echo htmlentities($data['hp']); ?></span></p>

                                                        <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15"><?php echo htmlentities($data['email']); ?></span></p>

                                                        <p class="text-muted font-13"><strong>Alamat :</strong> <span class="m-l-15"><?php echo htmlentities($data['alamat']); ?></span></p>
                                                        <a href="editp.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-success btn-sm w-sm waves-effect m-t-5 waves-light">Edit Profile</button></a><a href="change-password.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-danger btn-sm w-sm waves-effect m-t-5 waves-light">Ganti Sandi</button></a>
                                                    </div>

                                                </div>

                                            </div> <!-- end card-box -->

                                        </div> <!-- end col -->

                                        <div class="col-md-8 col-lg-9">
                                            <h4>Statistik</h4>

                                            <div class="row m-t-20">
                                                <div class="col-md-3 col-sm-6 text-center">
                                                    <div class="p-t-10">
                                                        <?php $query = mysqli_query($con, "select * from tblposts where id_user='$id' and Is_Active = 1");
                                                        $countposts = mysqli_num_rows($query);
                                                        ?>
                                                        <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round data-fgColor="#2abfcc" value="<?php echo htmlentities($countposts); ?>" data-skin="tron" data-angleOffset="<?php echo htmlentities($countposts); ?>" data-readOnly=true data-thickness=".2" />
                                                        <h6 class="text-muted m-t-10">Total Artikel</h6>
                                                    </div>
                                                </div><!-- end col-->



                                            </div> <!-- end row -->

                                            <hr />


                                        </div>
                                        <!-- end col -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->



                    </div> <!-- container -->

                </div> <!-- content -->

                <?php include 'includes/footer.php'; ?>

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