<?php
session_start();
include('includes/config.php');
include 'tglindo.php';
error_reporting(0);
if(($_SESSION['type'])=="anggota")
  { 
echo "hanya untuk pengurus";;
}
else{


?>
<!DOCTYPE html>
<html lang="en">
    <head>
                                             <?php
$bulan = $_POST['bulan'];
$thn = date('Y') ?> 
        <title>Laporan Kas Keluar Bulan <?php echo bulan($bulan); echo "   "; echo "Tahun"; echo "   "; echo $thn?></title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
         <link href="../plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
<?php include('includes/topheader.php');?>

            <!-- ========== Left Sidebar Start ========== -->
<?php include('includes/leftsidebar.php');?>
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
                                           Laporan Kas Keluar
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


<div class="row">
   
<div class="col-sm-12">  
 
 
                                                 <div class="card-box table-responsive">
                                                    <?php
$bulan = $_POST['bulan']; $thn = date('Y'); $thn = date('Y');  ?>
                                    <h4 class="m-t-0 header-title"><b>Laporan kas Keluar Bulan <?php echo bulan($bulan); echo "   "; echo "Tahun"; echo "   "; echo $thn?></b></h4>
                                    <p class="text-muted font-13 m-b-30">
                                         <div class="alert alert-icon alert-info alert-dismissible fade in" role="alert">

                                    <i class="mdi mdi-information"></i>
                                    <strong>Penting!! </strong> Laporan ini hanya menampilkan data <strong><font color="red">bulan yang dipilih</font></strong> dan <strong>"<font color="red">Tahun <?php echo $thn ?></font> "</strong> untuk melihat seluruh laporan silahkan pilih menu <strong>"<font color="red">LAPORAN KAS</font> "</strong>
                                            </div>
                                    </p>

                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>



                                        <tr>
                                            <th>NO</th>
                                            <th>Keterangan</th>
                                            <th>Jenis</th>
                                            <th>Tanggal</th>
                                            <th>Jumlah</th>

                                        </tr>
                                        </thead>
<tbody>
<?php
$bulan = $_POST['bulan'];
$thn = date('Y');
$query=mysqli_query($con,"Select * from  tblkas where MONTH(tanggal) = '$bulan' and YEAR(tanggal)='$thn' and jenis = 'Keluar'");
$cnt=1;
$count = mysqli_num_rows($query);


    if ($count > 0 ) {
        while($row=mysqli_fetch_array($query))
        {
    
        ?>
                                            <td><?php echo htmlentities($cnt); ?></td>
                                            <td> <?php echo htmlentities($row['keterangan']); ?></td>
                                            <td><?php echo htmlentities($row['jenis']); ?></td>
                                            <td><?php echo tgl($row['tanggal']); ?></td>
                                            <td><?php  echo "Rp.".number_format ($row['keluar']); ?></td>
           
                                        </tr>
<?php
                                $cnt++;
                                 } 
                             } ?>
                                        </tbody>
                                    </table>
                                </div>


</div>
</div>
                                 
                                 
                                    


                                   


                                    <!--- end row -->


                                 
                                    <!--- end row -->


<?php include('includes/footer.php');?>






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

        <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="../plugins/datatables/jszip.min.js"></script>
        <script src="../plugins/datatables/pdfmake.min.js"></script>
        <script src="../plugins/datatables/vfs_fonts.js"></script>
        <script src="../plugins/datatables/buttons.html5.min.js"></script>
        <script src="../plugins/datatables/buttons.print.min.js"></script>
        <script src="../plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="../plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="../plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="../plugins/datatables/dataTables.colVis.js"></script>
        <script src="../plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <!-- init -->
        <script src="assets/pages/jquery.datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "../plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();

        </script>


    



</script>
    </body>
</html>
<?php } ?>