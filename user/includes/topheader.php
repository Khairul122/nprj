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
                                    <?php
                                    $id = $_SESSION['id'];
                                    $query = mysqli_query($con, "select id,judul from  tblsp where user_id='$id' and is_read = 0");
                                    $countposts = mysqli_num_rows($query);
                                    ?>

                                    <span class="badge up bg-success"><?php echo htmlentities($countposts); ?></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li>
                                        <h5>Notifications</h5>
                                    </li>
                                    <?php
                                    $id = $_SESSION['id'];
                                    $ret = mysqli_query($con, "select id,judul,tanggal from  tblsp where user_id='$id' and is_read = 0");
                                    while ($result = mysqli_fetch_array($ret)) {


                                    ?>
                                        <li>
                                            <a href="view-sp.php?spid=<?php echo htmlentities($result['id']); ?>&&view" class="user-list-item">
                                                <div class="icon bg-info">
                                                    <i class=" mdi mdi-comment-alert-outline"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name"><?php echo htmlentities($result['judul']); ?></span>
                                                    <span class="time"><?php echo $result['tanggal']; ?></span>

                                                </div>
                                            </a>
                                        </li>
                                    <?php } ?>
                                    <li class="all-msgs text-center">
                                        <p class="m-0"><a href="list-sp.php">See all Notification</a></p>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown user-box">
                                <?php
                                $id =  $_SESSION['id'];
                                $query = mysqli_query($con, "select * from tblusers where id = '$id'");
                                $data = mysqli_fetch_array($query); ?>
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="postimages/<?php echo htmlentities($data['image']); ?>" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Halo, <?php echo htmlentities($data['nama']); ?></h5>
                                    </li>

                                    <li><a href="editp.php"><i class="ti-settings m-r-5"></i> Edit Profile</a></li>

                                    <li><a href="logout.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>