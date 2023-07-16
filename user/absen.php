<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_GET['action']))
{
   
$aid=intval($_GET['aid']);
$idu = $_SESSION['id'];
$query=mysqli_query($con,"INSERT INTO tblhadir (user_id,absen_id,kehadiran) values ('$idu','$aid',1)");
if($query)
{
$msg="Absen Berhasil ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>HMIMSIF Portal | Manage Absensi</title>
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
                                    <h4 class="page-title">Kelola Absensi</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Absensi </a>
                                        </li>
                                        <li class="active">
                                           Kelola Absensi
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


<div class="row">
<div class="col-sm-6">  

<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<?php if($delmsg){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($delmsg);?></div>
<?php } ?>
</div>
                                 
                                 
                                    


                                   


                                    <div class="row">
										<div class="col-md-12">
											<div class="demo-box m-t-20">
<div class="m-b-30">
 <h4><i class="fa fa-server"> </i> Absensi Aktif</h4>
 </div>

												<div class="table-responsive">
                                                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th> Keterangan Absensi</th>
                                                                <th>Tanggal</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
<?php 
$query=mysqli_query($con,"Select id,keterangan,tanggal from  absen where status=1");
$cnt=1;
$count = mysqli_num_rows($query);


    if ($count > 0 ) {
        while($row=mysqli_fetch_array($query))
        {
    
?>

 <tr>
<th scope="row"><?php echo htmlentities($cnt);?></th>
<td><?php echo htmlentities($row['keterangan']);?></td>
<td><?php echo htmlentities($row['tanggal']);?></td>
<td>
<a href="absen.php?aid=<?php echo htmlentities($row['id']);?>&&action" onclick="return confirm('Absen Sekarang')">
 <?php 
 $aid=$row['id'];
    $idu = $_SESSION['id'];   
    $cek = mysqli_query($con, "select user_id,absen_id from tblhadir where user_id ='$idu' and absen_id='$aid'");
    $hit = mysqli_num_rows($cek);
    if ($hit) {
?>
    <button name="submit" class="btn btn-warning waves-effect waves-light" disabled="">Sudah Absen</button>
<?php }else { ?>
    <button name="submit" class="btn btn-success waves-effect waves-light">Absen Sekarang<i class="mdi mdi-plus-circle-outline" ></i></button>
<?php }?>
</a>
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

 <h4><i class="fa fa-trash-o" ></i> Riwayat Absensi</h4>

 </div>

                <div class="table-responsive">
                    <table class="table m-0 table-colored-bordered table-bordered-danger">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th> Keterangan Absensi</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
<?php 
$id =  $_SESSION['id'];
$query=mysqli_query($con," select tblhadir.id as hid,tblhadir.user_id as iduser,tblhadir.absen_id as idabsen,absen.keterangan as keterangan,absen.tanggal as tanggal from tblhadir left join absen on absen.id=tblhadir.absen_id where tblhadir.user_id='$id' and tblhadir.absen_id=absen.id ");
$cnt=1;

$count = mysqli_num_rows($query);


    if ($count) {
        while($row=mysqli_fetch_array($query))
        {
    
?>

 <tr>
<th scope="row"><?php echo htmlentities($cnt);?></th>
<td><?php echo htmlentities($row['keterangan']);?></td>
<td><?php echo htmlentities($row['tanggal']);?></td>
</tr>
<?php
$cnt++;
 }

 } else

 echo "<td></td>
 <td><b>Riwayat Kosong</b></td>
 <td></td>
";

?>
</tbody>
                                                  
                                                    </table>
                                                </div>




                                                
											</div>

										</div>

							
									</div>                  
                                  



                                   






                        






                    </div> <!-- container -->

                </div> <!-- content -->
<?php include('includes/footer.php');?>
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