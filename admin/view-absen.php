<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (($_SESSION['type']) == "anggota") {
    echo "hanya untuk pengurus";;
} else {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>HIMASI Portal | View Absensi</title>
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
            <?php include('includes/topheader.php'); ?>

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
                                    <h4 class="page-title">View Absensi</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Absensi </a>
                                        </li>
                                        <li class="active">
                                            View Absensi
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-6">

                                <?php if ($msg) { ?>
                                    <div class="alert alert-success" role="alert">
                                        <strong>Well done!</strong> <?php echo htmlentities($msg); ?>
                                    </div>
                                <?php } ?>

                                <?php if ($delmsg) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <strong>Oh snap!</strong> <?php echo htmlentities($delmsg); ?>
                                    </div>
                                <?php } ?>


                            </div>








                            <div class="row">
                                <div class="col-md-12">
                                    <div class="demo-box m-t-20">
                                        <div class="m-b-30">
                                            <a href="export.php?aid=<?php echo htmlentities($_GET['cid']); ?>">
                                                <button id="addToTable" class="btn btn-success waves-effect waves-light">Export Absen <i class=" mdi mdi-printer"></i></button>
                                            </a>
                                            <h4><i class="fa fa-server"> </i> Angota Hadir</h4>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th> NAMA</th>
                                                        <th>NIM</th>
                                                        <th>JABATAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $cid = $_GET['cid'];
                                                    $query = mysqli_query($con, " Select * from tblhadir,tblusers where tblhadir.user_id = tblusers.id and tblhadir.absen_id = '$cid' ");
                                                    $cnt = 1;
                                                    $count = mysqli_num_rows($query);


                                                    if ($count > 0) {
                                                        while ($row = mysqli_fetch_array($query)) {

                                                    ?>

                                                            <tr>
                                                                <th scope="row"><?php echo htmlentities($cnt); ?></th>
                                                                <td><?php echo htmlentities($row['nama']); ?></td>
                                                                <td><?php echo htmlentities($row['nim']); ?></td>
                                                                <td><?php echo htmlentities($row['type']); ?> </td>
                                                            </tr>
                                                    <?php
                                                            $cnt++;
                                                        }
                                                    } else

                                                        echo "<td></td>
 <td><b>Belum ada yang mengisi absensi</b></td>
 <td></td>
 <td></td>";

                                                    ?>
                                                </tbody>

                                            </table>
                                        </div>




                                    </div>

                                </div>


                            </div>
                            <!--- end row -->



                            <div class="row">
                                <div class="col-md-12">
                                    <div class="demo-box m-t-20">
                                        <div class="m-b-30">

                                            <h4><i class="fa fa-trash-o"></i> Angota Tidak Hadir</h4>

                                        </div>

                                        <div class="table-responsive">
                                            <table class="table m-0 table-colored-bordered table-bordered-danger">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th> NAMA</th>
                                                        <th>NIM</th>
                                                        <th>JABATAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $cid = $_GET['cid'];
                                                    $query = mysqli_query($con, " SELECT tblusers.id,tblusers.nama,tblusers.nim,tblusers.type FROM tblusers INNER JOIN tblhadir ON tblusers.id != tblhadir.user_id WHERE tblhadir.absen_id = '$cid' and tblusers.type != 'admin' AND tblusers.Is_Active = '1'");
                                                    $cnt = 1;
                                                    $count = mysqli_num_rows($query);


                                                    if ($count > 0) {

                                                        while ($row = mysqli_fetch_array($query)) {

                                                    ?>

                                                            <tr>
                                                                <th scope="row"><?php echo $cnt++; ?></th>
                                                                <td><?php echo $row['nama']; ?></td>
                                                                <td><?php echo $row['nim']; ?></td>
                                                                <td><?php echo $row['type']; ?></td>
                                                            </tr>
                                                    <?php

                                                        }
                                                    } else

                                                        echo "<td></td>
 <td><b>Riwayat Kosong</b></td>
 <td></td>
 <td></td>";

                                                    ?>
                                                </tbody>

                                            </table>
                                        </div>





                                    </div>

                                </div>


                            </div>


















                        </div> <!-- container -->

                    </div> <!-- content -->
                    <?php include('includes/footer.php'); ?>
                </div>

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

            <!-- App js -->
            <script src="assets/js/jquery.core.js"></script>
            <script src="assets/js/jquery.app.js"></script>

    </body>

    </html>
<?php } ?>