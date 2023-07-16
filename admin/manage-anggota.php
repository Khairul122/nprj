<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (($_SESSION['type']) == "anggota") {
    echo "hanya untuk pengurus";;
} else {
    if ($_GET['action'] == 'del' && $_GET['rid']) {
        $id = intval($_GET['rid']);
        $query = mysqli_query($con, "update tblusers set Is_active='0' where id='$id'");
        $msg = "Nonaktifkan Anggota ";
    }
    // Code for restore
    if ($_GET['resid']) {
        $id = intval($_GET['resid']);
        $query = mysqli_query($con, "update tblusers set Is_active='1' where id='$id'");
        $msg = "Anggota Diaktifkan Kembali";
    }

    // Code for Forever deletionparmdel
    if ($_GET['action'] == 'parmdel' && $_GET['rid']) {
        $id = intval($_GET['rid']);
        $query = mysqli_query($con, "delete from  tblusers  where id='$id'");
        $delmsg = "Anggota Di hapus";
    }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>HIMASI Portal | Manage Anggota</title>
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
                                    <h4 class="page-title">Kelola anggota</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Anggota </a>
                                        </li>
                                        <li class="active">
                                            Kelola Anggota
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
                                            <a href="add-anggota.php">
                                                <button id="addToTable" class="btn btn-success waves-effect waves-light">Tambah Anggota<i class="mdi mdi-plus-circle-outline"></i></button>
                                            </a>
                                            <h4><i class="fa fa-server"> </i> ANGGOTA AKTIF</h4>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th> NAMA</th>
                                                        <th>NIM</th>
                                                        <th>JENIS KELAMIN</th>
                                                        <th>JABATAN</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = mysqli_query($con, "Select id,nama,nim,jenis_kelamin,type from  tblusers where Is_active = 1 and type != 'admin'");
                                                    $cnt = 1;
                                                    $count = mysqli_num_rows($query);


                                                    if ($count > 0) {
                                                        while ($row = mysqli_fetch_array($query)) {

                                                    ?>

                                                            <tr>
                                                                <th scope="row"><?php echo htmlentities($cnt); ?></th>
                                                                <td><?php echo htmlentities($row['nama']); ?></td>
                                                                <td><?php echo htmlentities($row['nim']); ?></td>
                                                                <td><?php echo htmlentities($row['jenis_kelamin']); ?></td>
                                                                <td><?php echo htmlentities($row['type']); ?></td>
                                                                <td><a href="edit-anggota.php?cid=<?php echo htmlentities($row['id']); ?>"><i class="fa fa-pencil" style="color: #29b6f6;" title="Edit Akun"></i></a>
                                                                    &nbsp;<a href="manage-anggota.php?rid=<?php echo htmlentities($row['id']); ?>&&action=del"> <i class="fa fa-trash-o" style="color: #f05050" title="Non aktifkan Akun"></i></a>
                                                                    &nbsp;<a href="send-sp.php?rid=<?php echo htmlentities($row['id']); ?>"><i class=" mdi mdi-clipboard-alert" title="Kirim Peringatan"></i>

                                                                </td>
                                                            </tr>
                                                    <?php
                                                            $cnt++;
                                                        }
                                                    } else

                                                        echo "<td></td>
 <td><b>Belum Ada Absen Yang Dibuat</b></td>
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

                                            <h4><i class="fa fa-trash-o"></i> ANGGOTA BELUM AKTIF</h4>

                                        </div>

                                        <div class="table-responsive">
                                            <table class="table m-0 table-colored-bordered table-bordered-danger">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th> NAMA</th>
                                                        <th>NIM</th>
                                                        <th>JENIS KELAMIN</th>
                                                        <th>JABATAN</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = mysqli_query($con, "Select id,nama,nim,jenis_kelamin,type from  tblusers where Is_active = 0 and type != 'admin'");
                                                    $cnt = 1;
                                                    $count = mysqli_num_rows($query);


                                                    if ($count > 0) {
                                                        while ($row = mysqli_fetch_array($query)) {

                                                    ?>

                                                            <tr>
                                                                <th scope="row"><?php echo htmlentities($cnt); ?></th>
                                                                <td><?php echo htmlentities($row['nama']); ?></td>
                                                                <td><?php echo htmlentities($row['nim']); ?></td>
                                                                <td><?php echo htmlentities($row['jenis_kelamin']); ?></td>
                                                                <td><?php echo htmlentities($row['type']); ?></td>
                                                                <td><a href="manage-anggota.php?resid=<?php echo htmlentities($row['id']); ?>"><i class="ion-arrow-return-right" title="Aktifkan Kembali"></i></a>
                                                                    &nbsp;<a href="manage-anggota.php?rid=<?php echo htmlentities($row['id']); ?>&&action=parmdel" title="Delete forever"> <i class="fa fa-trash-o" style="color: #f05050"></i> </td>
                                                            </tr>
                                                    <?php
                                                            $cnt++;
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