<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
echo "hanya untuk pengurus";;
}
else{


?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>HMIMSIF Portal | Daftar SP</title>
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
                                    <h4 class="page-title">Daftar SP</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                      
                                        <li>
                                            <a href="#">Peringatan </a>
                                        </li>
                                        <li class="active">
                                           Lihat SP
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
                                 
                                 
                                    


                                   


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="demo-box m-t-20">
<div class="m-b-30">

 <h4><i class="mdi mdi-email"> </i> SP</h4>
 </div>

                                                <div class="table-responsive">
                                                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th> Perihal</th>
                                                                <th>Tanggal</th>
                                                                <th>Dikirim Ke</th>
                                                                <th>Status</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
<?php 
 $id =  $_SESSION['id'];
$query=mysqli_query($con,"SELECT * from  tblsp,tblusers where tblusers.Is_active = 1 and tblusers.type !='admin' and tblsp.user_id = tblusers.id");
$cnt=1;
$count = mysqli_num_rows($query);


    if ($count > 0 ) {
        while($row=mysqli_fetch_array($query))
        {
    
?>

 <tr>
<th scope="row"><?php echo htmlentities($cnt);?></th>
<td><?php echo htmlentities($row['judul']);?></td>
<td><?php echo htmlentities($row['tanggal']);?></td>
<td><?php echo htmlentities($row['nama']);?> (<?php echo htmlentities($row['nim']);?>)</td>
<td><?php if ($row['is_read']==1) {
    echo "Dibaca";
}
if ($row['is_read']==0) {
    echo "Belum Dibaca";
}  ?></td>

</tr>
<?php
$cnt++;
 }

 } else

 echo "<td></td>
 <td><b>Kosong</b></td>
 <td></td>
";

?>
</tbody>
                                                  
                                                    </table>
                                                </div>




                                            </div>

                                        </div>

                            
                                    </div>
                                    <!--- end row -->

      
                                  



                                   






                        






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