<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        echo '<div class="alert alert-danger">Pendaftaran Gagal NIM tidak terdaftar atau akun sudah di aktifkan</div>';
    } else if ($_GET['pesan'] == "logout") {
        echo "Anda telah berhasil logout";
    } else if ($_GET['pesan'] == "sukses") {
        echo '<div class="alert alert-success">Pendaftaran Berhasil Silahkan Kembali Ke Halaman Login</div>';
    } else if ($_GET['pesan'] == "belum_login") {
        echo "Anda harus login untuk mengakses halaman admin";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- App title -->
    <title>REGISTER | HIMASI PORTAL</title>

    <!-- App css -->
    <link href="user/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="user/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="user/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="user/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="user/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="userassets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="user/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="user/assets/js/modernizr.min.js"></script>

</head>


<body class="bg-transparent">

    <!-- HOME -->
    <section>
        <div class="container-alt">
            <div class="row">
                <div class="col-sm-12">

                    <div class="wrapper-page">

                        <div class="m-t-40 account-pages">
                            <div class="text-center account-logo-box">
                                <h2 class="text-uppercase">
                                    <a href="index.php" class="text-success">
                                        <span><img src="img/core-img/logo-himasi.png" alt="" height="36"></span>
                                    </a>
                                </h2>
                                <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                            </div>
                            <div class="account-content">
                                <form class="form-horizontal" action="regc.php" method="post">

                                    <div class="form-group ">
                                        <div class="col-xs-12">
                                            <input class="form-control" type="text" required="" name="nim" placeholder="NIM">
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        var check = function() {
                                            if (document.getElementById('password').value ==
                                                document.getElementById('confirm_password').value) {
                                                document.getElementById('message').style.color = 'green';
                                                document.getElementById('message').innerHTML = 'PASS';
                                            } else {
                                                document.getElementById('message').style.color = 'red';
                                                document.getElementById('message').innerHTML = 'Password Must Be Same';
                                            }
                                        }
                                    </script>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input class="form-control" type="password" name="password" required="" placeholder="Password" onkeyup='check();'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input class="form-control" type="password" name="confirm_password" required="" placeholder="Confirm Password" onkeyup='check();'>
                                        </div>
                                    </div>
                                    <span id='message'></span>
                                    <div class="form-group ">
                                        <div class="col-xs-12">


                                        </div>
                                    </div>

                                    <div class="form-group text-center m-t-30">

                                    </div>

                                    <div class="form-group account-btn text-center m-t-10">
                                        <div class="col-xs-12">
                                            <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit" name="register">Register</button>
                                        </div>
                                    </div>

                                </form>

                                <div class="clearfix"></div>

                            </div>
                        </div>
                        <!-- end card-box-->


                        <div class="row m-t-50">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted">Already have an account? <a href="login.php" class="text-primary m-l-5"><b>Login</b></a></p>
                            </div>
                        </div>

                    </div>
                    <!-- end wrapper -->

                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="user/assets/js/jquery.min.js"></script>
    <script src="user/assets/js/bootstrap.min.js"></script>
    <script src="user/assets/js/detect.js"></script>
    <script src="user/assets/js/fastclick.js"></script>
    <script src="user/assets/js/jquery.blockUI.js"></script>
    <script src="user/assets/js/waves.js"></script>
    <script src="user/assets/js/jquery.slimscroll.js"></script>
    <script src="user/assets/js/jquery.scrollTo.min.js"></script>

    <!-- App js -->
    <script src="user/assets/js/jquery.core.js"></script>
    <script src="user/assets/js/jquery.app.js"></script>

</body>

</html>