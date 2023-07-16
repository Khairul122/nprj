<?php
session_start();
include('includes/config.php');
include 'tglindo.php';
error_reporting(0);
if (($_SESSION['type']) == "anggota") {
    echo "hanya untuk pengurus";;
} else {


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>HIMASI Portal | Laporan Kas Masuk</title>
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
                                    <h4 class="page-title">Keuangan</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Keuangan </a>
                                        </li>
                                        <li class="active">
                                            Laporan Kas Masuk
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">


                                <h6 class="text-muted">Pilih Bulan</h6>
                                <p class="text-muted m-b-15 font-13">
                                <div class="alert alert-icon alert-info alert-dismissible fade in" role="alert">

                                    <i class="mdi mdi-information"></i>
                                    <strong>Penting!! </strong> Laporan ini hanya menampilkan data <strong>
                                        <font color="red">bulan yang dipilih</font>
                                    </strong> dan <strong>"<font color="red">Tahun <?php echo $thn ?></font> "</strong> untuk melihat seluruh laporan silahkan pilih menu <strong>"<font color="red">LAPORAN KAS</font> "</strong>
                                </div>
                                </p>
                                <form name="" method="POST" action="cek-laporan-masuk.php" target="_blank">

                                    <select name="bulan" class="form-control selectpicker">
                                        <option>Pilih Bulan</option>
                                        <?php $bulan = date('m'); ?>

                                        <option value="<?php echo htmlentities($bulan); ?>">Bulan Ini</option>
                                        <optgroup>
                                            <option value="01">Januari</option>


                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>


                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">November</option>
                                            <option value="11">Oktober</option>
                                            <option value="12">Desember</option>
                                        </optgroup>
                                    </select> <input type="submit" name="lihat" value="Lihat Laporan" class="btn btn-rounded btn-success"></center>

                                </form>


                            </div>
                        </div>








                        <!--- end row -->



                        <!--- end row -->


                        <?php include('includes/footer.php'); ?>






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
                        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
                        <script src="../plugins/datatables/dataTables.bootstrap.js"></script>
                        <!-- App js -->
                        <script src="assets/js/jquery.core.js"></script>
                        <script src="assets/js/jquery.app.js"></script>
                        <script src="assets/pages/jquery.datatables.init.js"></script>


                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('#datatable').dataTable();
                                $('#datatable2').dataTable();
                            });
                            TableManageButtons.init();
                        </script>
                        <script type="text/javascript">




                        </script>
    </body>

    </html>
<?php } ?>