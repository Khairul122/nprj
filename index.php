<?php
session_start();
include('inc/config.php');
include 'inc/header.php';


?>


<title>HIMASI PORTAL</title>


<!-- ***** Header Area End ***** -->

<!-- ********** Hero Area Start ********** -->
<div class="hero-area">

    <!-- Hero Slides Area -->
    <div class="hero-slides owl-carousel">
        <!-- Single Slide -->
        <div class="single-hero-slide bg-img background-overlay" style="background-image: url(img/blog-img/gambar1.jpg);"></div>
        <!-- Single Slide -->
        <div class="single-hero-slide bg-img background-overlay" style="background-image: url(img/blog-img/DSC_1092-1.jpg);"></div>
        <!-- Single Slide -->
        <div class="single-hero-slide bg-img background-overlay" style="background-image: url(img/blog-img/DSC_1082.jpg);"></div>
    </div>

    <!-- Hero Post Slide -->
    <div class="hero-post-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-post-slide">
                        <!-- Single Slide -->
                        <div class="single-slide d-flex align-items-center">
                            <div class="post-number">
                                <p>-</p>
                            </div>

                            <div class="post-title">
                                <a href="#">PENGUMUMAN</a>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <?php
                        $query = mysqli_query($con, "SELECT * FROM tblposts WHERE CategoryId = '9' and Is_active = 1 ORDER BY PostingDate DESC LIMIT 4");
                        $cnt = 1;
                        while ($row = mysqli_fetch_array($query)) {

                        ?>
                            <div class="single-slide d-flex align-items-center">

                                <div class="post-number">
                                    <p><?php echo htmlentities($cnt) ?></p>
                                </div>
                                <div class="post-title">
                                    <a href="view-post.php?pid=<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['PostTitle']); ?></a>
                                </div>
                            </div>
                        <?php
                            $cnt++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ********** Hero Area End ********** -->

<div class="main-content-wrapper section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- ============= Post Content Area Start ============= -->
            <div class="col-12 col-sm-12">
                <div class="post-content-area mb-50">
                    <!-- Catagory Area -->


                    <!-- Catagory Area -->
                    <div class="world-catagory-area mt-50">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            <li class="title">LATEST POST</li>
                            <?php
                            if (isset($_GET['pageno'])) {
                                $pageno = $_GET['pageno'];
                            } else {
                                $pageno = 1;
                            }
                            $no_of_records_per_page = 4;
                            $offset = ($pageno - 1) * $no_of_records_per_page;


                            $total_pages_sql = "SELECT COUNT(*) FROM tblposts where CategoryId != 9";
                            $result = mysqli_query($con, $total_pages_sql);
                            $total_rows = mysqli_fetch_array($result)[0];
                            $total_pages = ceil($total_rows / $no_of_records_per_page);
                            ?>
                            <li class="nav-item">
                                <a class="nav-link active" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true"></a>
                            </li>


                        </ul>

                        <div class="tab-content" id="myTabContent2">

                            <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                <div class="row">


                                    <?php
                                    $query = "select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.id_user as iduser,tblposts.PostImage as image,tblcategory.CategoryName as category,tblusers.nama  as user,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId left join tblusers on tblusers.id where tblusers.id = tblposts.id_user and tblposts.Is_Active=1  and tblposts.CategoryId != '9' order by tblposts.PostingDate desc LIMIT $offset, $no_of_records_per_page ";
                                    $result = mysqli_query($con, $query);

                                    while ($row = mysqli_fetch_array($result)) {

                                        $id = $row['pid'];
                                        $user = $row['user'];
                                        $title = $row['posttitle'];
                                        $content = $row['postdetails'];
                                        $image = $row['image'];
                                        $category = $row['category'];
                                        $date = date('d M Y', strtotime($row['postingdate']));
                                        $shortcontent = substr($content, 0, 160) . "...";


                                    ?>
                                        <div class="col-12 col-md-6">

                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <a href="view-post.php?pid=<?php echo $id; ?>"> <img src="img/blog-img/<?php echo $image; ?>" width="195px" alt="<?php echo $title; ?>"> </a>
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#"><?php echo $category; ?></a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="view-post.php?pid=<?php echo $id; ?>" class="headline">
                                                        <h5><?php echo $title; ?></h5>
                                                    </a>
                                                    <p><?php echo $shortcontent; ?>.</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author"><?php echo $user; ?></a> on <a href="#" class="post-date"><?php echo $date; ?></a></p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    <?php } ?>


                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <ul class="pagination justify-content-center mb-4">
                                        <li class="page-item"><a href="?pageno=1" class="page-link">First</a></li>
                                        <li class="<?php if ($pageno <= 1) {
                                                        echo 'disabled';
                                                    } ?> page-item">
                                            <a href="<?php if ($pageno <= 1) {
                                                            echo '#';
                                                        } else {
                                                            echo "?pageno=" . ($pageno - 1);
                                                        } ?>" class="page-link">Prev</a>
                                        </li>
                                        <li class="<?php if ($pageno >= $total_pages) {
                                                        echo 'disabled';
                                                    } ?> page-item">
                                            <a href="<?php if ($pageno >= $total_pages) {
                                                            echo '#';
                                                        } else {
                                                            echo "?pageno=" . ($pageno + 1);
                                                        } ?> " class="page-link">Next</a>
                                        </li>
                                        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>
</div>

<!-- ========== Sidebar Area ========== -->





<!-- Most Pop Videp -->

<!-- Most Pop Videp -->

<!-- ***** Footer Area Start ***** -->
<?php include 'inc/footer.php'; ?>

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