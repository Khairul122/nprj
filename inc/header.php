<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->


    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.php"><img src="img/core-img/logo-himasi.png" alt="Logo" width="200" height="200"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-link dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php

                                        $query = mysqli_query($con, "select id,CategoryName from tblcategory where id !=9");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <a class="dropdown-item" href="category.php?catid=<?php echo htmlentities($row['id']) ?>"><?php echo htmlentities($row['CategoryName']); ?></a>
                                        <?php } ?>
                                    </div>
                                </li>
                                <li class="nav-link">
                                    <a class="nav-link" href="category.php?catid=9">Pengumuman</a>
                                </li>
                                <li class="nav-link">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                                <li class="nav-link">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>

                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="search.php" method="post" name="search">
                                    <input type="text" id="search" name="searchtitle" placeholder="Search something...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>