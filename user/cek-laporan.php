<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (($_SESSION['login']) == 0) {
    header('location:../index.php');
} else {
    include_once("tglindo.php");

    $tgl = date('Y-m-d');
    $tgl1 = $_POST['tgl1'];
    $bln1 = $_POST['bln1'];
    $thn1 = $_POST['thn1'];
    $tgl2 = $_POST['tgl2'];
    $bln2 = $_POST['bln2'];
    $thn2 = $_POST['thn2'];

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>HMIMSIF Portal | LAPORAN KAS</title>
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
                                    <h4 class="page-title">Kelola KAS</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">KEUANGAN </a>
                                        </li>
                                        <li class="active">
                                            LAPORAN KAS
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

                                            </a>
                                            <h3 align="center" class="style1">LAPORAN KAS HIMSIF BINA DARMA </h3>

                                            <div align="center">DARI TANGGAL <?php echo "$tgl1"; ?> / <?php echo "$bln1"; ?>/ <?php echo "$thn1"; ?> SAMPAI DENGAN TANGGAL <?php echo "$tgl2"; ?> / <?php echo "$bln2"; ?>/ <?php echo "$thn2"; ?></div>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th> Keterangan</th>
                                                        <th>Jenis</th>
                                                        <th>Jumlah</th>
                                                        <th>Tanggal</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = mysqli_query($con, "SELECT * FROM tblkas WHERE tanggal >= '$thn1-$bln1-$tgl1' AND tanggal <= '$thn2-$bln2-$tgl2'");
                                                    $cnt = 1;
                                                    $count = mysqli_num_rows($query);


                                                    if ($count > 0) {
                                                        while ($row = mysqli_fetch_array($query)) {

                                                            $total_masuk = $row['jumlah'];
                                                            @$hitung += $total_masuk;
                                                            $total_keluar = $row['keluar'];
                                                            @$hitung1 += $total_keluar;
                                                            $keseluruhan = $hitung - $hitung1;
                                                    ?>

                                                            <tr>
                                                                <th scope="row"><?php echo htmlentities($cnt); ?></th>
                                                                <td><?php echo htmlentities($row['keterangan']); ?></td>
                                                                <td><?php echo htmlentities($row['jenis']); ?></td>
                                                                <?php
                                                                if ($row['jenis'] == 'Masuk') {
                                                                ?>
                                                                    <td><?php echo  "Rp." . number_format($row['jumlah']); ?></td>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <td><?php echo  "Rp." . number_format($row['keluar']); ?></td>
                                                                <?php } ?>

                                                                <td><?php echo tgl($row['tanggal']); ?></td>

                                                            </tr>

                                                    <?php
                                                            $cnt++;
                                                        }
                                                    } else

                                                        echo "<td></td>
 <td><b>Belum Ada Absen Yang Dibuat</b></td>
 <td></td>
 <td></td>";

                                                    ?><td></td>
                                                    <td></td>
                                                    <td>TOTAL : </td>
                                                    <td colspan="2"><?php echo  "Rp." . number_format($keseluruhan); ?></td>
                                                </tbody>

                                            </table>
                                        </div>
                                        <div class="col-lg-12 col-md-4" align="right" style="font-style:italic;">
                                            Himpunan Mahasiswa Sistem Informasi,Bina Darma, <?php echo tgl($tgl); ?> <br /><br /><br /><br />
                                            Pengurus HIMASI <br>

                                        </div>



                                    </div>

                                </div>


                            </div>
                            <!--- end row -->


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