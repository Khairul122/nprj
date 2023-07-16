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
                            <div class="col-md-3"></div>
                            <div class="col-md-6">



                                <div align="center">
                                    <div class="alert alert-icon alert-info alert-dismissible fade in" role="alert"><span class="style1"><i class="mdi mdi-information"></i>
                                            <strong>Penting!! </strong> Silahkan pilih tanggal,bulan,dan tahun untuk di tampilkan
                                    </div></span><br /><br />
                                </div>
                                <div align="center">
                                    <form id="form1" name="form1" method="post" action="cek-laporan.php" target="_blank">
                                        <select name="tgl1" id="tgl1">
                                            <option> 01 </option>
                                            <option> 02 </option>
                                            <option> 03 </option>
                                            <option> 04 </option>
                                            <option> 05 </option>
                                            <option> 06 </option>
                                            <option> 07 </option>
                                            <option> 08 </option>
                                            <option> 09 </option>
                                            <option> 10 </option>
                                            <option> 11 </option>
                                            <option> 12 </option>
                                            <option> 13 </option>
                                            <option> 14 </option>
                                            <option> 15 </option>
                                            <option> 16 </option>
                                            <option> 17 </option>
                                            <option> 18 </option>
                                            <option> 19 </option>
                                            <option> 20 </option>
                                            <option> 21 </option>
                                            <option> 22 </option>
                                            <option> 23 </option>
                                            <option> 24 </option>
                                            <option> 25 </option>
                                            <option> 26 </option>
                                            <option> 27 </option>
                                            <option> 28 </option>
                                            <option> 29 </option>
                                            <option> 30 </option>
                                            <option> 31 </option>

                                        </select>
                                        <select name="bln1" id="bln1">
                                            <option value="01"> Januari </option>
                                            <option value="02"> Februari </option>
                                            <option value="03"> Maret </option>
                                            <option value="04"> April </option>
                                            <option value="05"> Mei </option>
                                            <option value="06"> Juni </option>
                                            <option value="07"> Juli </option>
                                            <option value="08"> Agustus </option>
                                            <option value="09"> September </option>
                                            <option value="10"> Oktober </option>
                                            <option value="11"> Nopember </option>
                                            <option value="12"> Desember </option>

                                        </select>
                                        <select name="thn1" id="thn1">
                                            <?php for ($i = 2017; $i <= date("Y"); $i++) { ?>
                                                <option><?php echo $i ?></option>
                                            <?php } ?>
                                        </select>
                                        S/D
                                        <select name="tgl2" id="tgl2">
                                            <option> 01 </option>
                                            <option> 02 </option>
                                            <option> 03 </option>
                                            <option> 04 </option>
                                            <option> 05 </option>
                                            <option> 06 </option>
                                            <option> 07 </option>
                                            <option> 08 </option>
                                            <option> 09 </option>
                                            <option> 10 </option>
                                            <option> 11 </option>
                                            <option> 12 </option>
                                            <option> 13 </option>
                                            <option> 14 </option>
                                            <option> 15 </option>
                                            <option> 16 </option>
                                            <option> 17 </option>
                                            <option> 18 </option>
                                            <option> 19 </option>
                                            <option> 20 </option>
                                            <option> 21 </option>
                                            <option> 22 </option>
                                            <option> 23 </option>
                                            <option> 24 </option>
                                            <option> 25 </option>
                                            <option> 26 </option>
                                            <option> 27 </option>
                                            <option> 28 </option>
                                            <option> 29 </option>
                                            <option> 30 </option>
                                            <option> 31 </option>
                                        </select>
                                        <select name="bln2" id="select2">
                                            <option value="01"> Januari </option>
                                            <option value="02"> Februari </option>
                                            <option value="03"> Maret </option>
                                            <option value="04"> April </option>
                                            <option value="05"> Mei </option>
                                            <option value="06"> Juni </option>
                                            <option value="07"> Juli </option>
                                            <option value="08"> Agustus </option>
                                            <option value="09"> September </option>
                                            <option value="10"> Oktober </option>
                                            <option value="11"> Nopember </option>
                                            <option value="12"> Desember </option>
                                        </select>
                                        <select name="thn2" id="select3">
                                            <?php for ($i = 2017; $i <= date("Y"); $i++) { ?>
                                                <option>
                                                    <?php echo $i ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                        <input type="submit" name="Submit" value="Lihat Laporan" class="btn btn-primary " />
                                    </form>
                                </div>


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