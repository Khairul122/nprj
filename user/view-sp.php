<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_GET['view']))
{
   
$id=intval($_GET['spid']);
$query=mysqli_query($con,"update tblsp set is_read='1' where id='$id'");
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>HMIMSIF Portal | Surat Peringatan</title>

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
 <?php include('includes/topheader.php');?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>
 <!-- Left Sidebar End -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Surat Peringatan</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                      
                                            <a href="#">Anggota </a>
                                        </li>
                                        <li class="active">
                                            Surat Peringatan
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
                        		


<div class="row">
<div class="col-sm-6"> 


</div>
</div>





                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card-box m-t-20">
                                                        

                                                        <div class="media m-b-30 ">
 <?php 
$id =$_GET['spid'];
$query=mysqli_query($con,"select * from  tblsp where id='$id'");
$data=mysqli_fetch_array($query);
?>

                                                            <div class="media-body">
                                                                <span class="media-meta pull-right"><?php echo htmlentities($data['tanggal']);?></span>
                                                                <h4 class="text-primary m-0"><?php echo htmlentities($data['judul']);?></h4>
                                                               <hr/>
                                                            </div>
                                                        </div> <!-- media -->

                                                     <?php echo htmlentities($data['isi']);?>

                                                        <hr/>
    &nbsp;&nbsp;&nbsp;&nbsp;TTD<br>
- Pengurus -</br>
                                                       
                                                        </div>
                                                    </div>
                                                    <!-- card-box -->
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->


                        			




           
                       


                                </div>
                            </div>
                        </div>
                        <!-- end row -->


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