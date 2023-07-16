<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['submit']))
{
$catid=intval($_GET['id']);
$nama=$_POST['nama'];
$hp=$_POST['hp'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$jk=$_POST['jk'];
$query=mysqli_query($con,"Update  tblusers set nama='$nama',hp='$hp',email='$email',alamat='$alamat',jenis_kelamin='$jk' where id='$catid'");
if($query)
{
$msg="Profile Updated successfully ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>HMIMSIF Portal | Edit Profile</title>

        <!-- Plugins css-->
        <link href="../plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="../plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

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
                                    <h4 class="page-title">Edit Anggota</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Anggota </a>
                                        </li>
                                        <li class="active">
                                            Edit Anggota
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Edit Anggota </b></h4>
                                    <hr />
                        		


<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>

<?php 
$catid=intval($_GET['id']);
$query=mysqli_query($con,"select id,nama,nim,jenis_kelamin,type,alamat,email,hp from  tblusers where id = '$catid' and Is_active =1 ");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>



                        			<div class="row">
                        				<div class="col-md-6">
                        					<form class="form-horizontal" name="category" method="post">
	                                            <div class="form-group">
                                                    <label class="col-md-2 control-label">NIM</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="<?php echo htmlentities($row['nim']);?>" name="nim" disabled="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Nama</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="<?php echo htmlentities($row['nama']);?>" name="nama" required>
                                                    </div>
                                                </div>
                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">NO HP</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="<?php echo htmlentities($row['hp']);?>" name="hp" required>
	                                                </div>
	                                            </div> <div class="form-group">
                                                    <label class="col-md-2 control-label">Email</label>
                                                    <div class="col-md-10">
                                                        <input type="email" class="form-control" value="<?php echo htmlentities($row['email']);?>" name="email" required>
                                                    </div>
                                                </div>
                                                                                            <div class="form-group">
                                                    <label class="col-md-2 control-label">Alamat</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="<?php echo htmlentities($row['alamat']);?>" name="alamat" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Jenis Kelamin</label>
                                                    <div class="col-md-10">
                                                    <select class="selectpicker" name="jk">
                                                            <option>Pilih</option>

                                                            <option value="Laki-laki" <?php if($row['jenis_kelamin']=="Laki-laki") echo 'selected="selected"'; ?>>Laki-Laki</option>
                                                            <option value="Perempuan" <?php if($row['jenis_kelamin']=="Perempuan") echo 'selected="selected"'; ?>>Perempuan</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                           


        <div class="form-group">
                                                    <label class="col-md-2 control-label">&nbsp;</label>
                                                    <div class="col-md-10">
                                                  
                                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                    Update
                                                </button>
                                                    </div>
                                                </div>



<?php } ?>


	                                        </form>
                        				</div>
                                        <?php 
$catid=intval($_GET['id']);
$query=mysqli_query($con,"select id,image from  tblusers where id = '$catid' and Is_active =1 ");
$row=mysqli_fetch_array($query); ?>
                                                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Profile Pictures</b></h4>
<img src="postimages/<?php echo htmlentities($row['image']);?>" width="190"/>
<br />
<a href="image.php?id=<?php echo htmlentities($row['id']);?>">Update Image</a>
</div>
                                                </div>
                                            </div>
                                          

                        			</div>


                        			




           
                       


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

        <script src="../plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script type="text/javascript" src="../plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="../plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="../plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="../plugins/autocomplete/jquery.mockjax.js"></script>
        <script type="text/javascript" src="../plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="../plugins/autocomplete/countries.js"></script>
        <script type="text/javascript" src="assets/pages/jquery.autocomplete.init.js"></script>

        <script type="text/javascript" src="assets/pages/jquery.form-advanced.init.js"></script>


        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>