<?php

session_start();
error_reporting(0);
include('inc/config.php');
include 'inc/header.php';
$query = mysqli_query($con, "select * from tblpages where id = 1");
$data = mysqli_fetch_array($query);
?>
<!-- ***** Header Area End ***** -->
<title>HIMASI PORTAL | ABOUT US</title>
<!-- ********** Hero Area Start ********** -->
<div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg6.jpeg);"></div>
<!-- ********** Hero Area End ********** -->

<div class="regular-page-wrap section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-112 col-lg-12">
                <div class="page-content">
                    <h6><?php
                        $pt = $data['Description'];
                        echo (substr($pt, 0)); ?>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ***** Footer Area Start ***** -->
<?php include 'inc/footer.php'; ?>
<!-- ***** Footer Area End ***** -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>

</body>

</html>