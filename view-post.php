<?php 
session_start();
include('inc/config.php');
include 'inc/header.php';

//Genrating CSRF Token
if (empty($_SESSION['token'])) {
 $_SESSION['token'] = bin2hex(random_bytes(32));
}

if(isset($_POST['submit']))
{
  //Verifying CSRF Token
if (!empty($_POST['csrftoken'])) {
    if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$postid=intval($_GET['pid']);
$st1='0';
$query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
if($query):
  echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
  unset($_SESSION['token']);
else :
 echo "<script>alert('Something went wrong. Please try again.');</script>";  

endif;

}
}
}
?>

    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <?php
    $pageurl = urlencode("http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]);

$pid=intval($_GET['pid']);
 $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url,tblusers.nama as nama from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId left join tblusers on tblusers.id = tblposts.id_user where tblposts.id='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>

    <title><?php echo htmlentities($row['posttitle']);?></title>

    <div class="hero-area height-600 bg-img background-overlay" style="background-image: url(img/blog-img/<?php echo htmlentities($row['PostImage']);?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                        <!-- Catagory -->
                        <div class="post-cta"><a href="#"><?php echo htmlentities($row['category']);?></a></div>
                        <h3><?php echo htmlentities($row['posttitle']);?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area ============= -->
                <div class="col-12 col-lg-12">
                    <div class="single-blog-content mb-100">
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p><a href="#" class="post-author"><?php echo htmlentities($row['nama']);?></a> on <a href="#" class="post-date"><?php echo htmlentities($row['postingdate']);?></a></p>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
<h6><?php $pt=$row['postdetails'];
              echo  (substr($pt,0));?> </h6>
                            <!-- Post Tags -->
                            <ul class="post-tags">
                                <li><a href="#">Manual</a></li>
                                <li><a href="#">Liberty</a></li>
                                <li><a href="#">Recommendations</a></li>
                                <li><a href="#">Interpritation</a></li>
                            </ul>
                           <!-- Sharingbutton Facebook -->


<!-- Sharingbutton Twitter -->
<a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=new post about <?php echo htmlentities($row['posttitle']);echo(" Read at "); echo htmlentities($pageurl); ?>" target="_blank" rel="noopener" aria-label="Twitter">
  <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--medium"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z"/></svg></div>Twitter</div>
</a>

<!-- Sharingbutton WhatsApp -->
<a class="resp-sharing-button__link" href="whatsapp://send?text=new post about <?php echo htmlentities($row['posttitle']);echo(" Read at "); echo htmlentities($pageurl); ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
  <div class="resp-sharing-button resp-sharing-button--whatsapp resp-sharing-button--medium"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.1 3.9C17.9 1.7 15 .5 12 .5 5.8.5.7 5.6.7 11.9c0 2 .5 3.9 1.5 5.6L.6 23.4l6-1.6c1.6.9 3.5 1.3 5.4 1.3 6.3 0 11.4-5.1 11.4-11.4-.1-2.8-1.2-5.7-3.3-7.8zM12 21.4c-1.7 0-3.3-.5-4.8-1.3l-.4-.2-3.5 1 1-3.4L4 17c-1-1.5-1.4-3.2-1.4-5.1 0-5.2 4.2-9.4 9.4-9.4 2.5 0 4.9 1 6.7 2.8 1.8 1.8 2.8 4.2 2.8 6.7-.1 5.2-4.3 9.4-9.5 9.4zm5.1-7.1c-.3-.1-1.7-.9-1.9-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.1-.2.2-.3.2-.6.1s-1.2-.5-2.3-1.4c-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6s.3-.3.4-.5c.2-.1.3-.3.4-.5.1-.2 0-.4 0-.5C10 9 9.3 7.6 9 7c-.1-.4-.4-.3-.5-.3h-.6s-.4.1-.7.3c-.3.3-1 1-1 2.4s1 2.8 1.1 3c.1.2 2 3.1 4.9 4.3.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.7-.7 1.9-1.3.2-.7.2-1.2.2-1.3-.1-.3-.3-.4-.6-.5z"/></svg></div>WhatsApp</div>
</a>

                            <!-- Post Meta -->
                            <div class="post-meta second-part">
                                <p><a href="#" class="post-author"><?php echo htmlentities($row['nama']);?></a> on <a href="#" class="post-date"><?php echo htmlentities($row['postingdate']);?></a></p>
                            </div>
                        </div>
                    </div>

<!-- Start Comment -->
                    <div class="post-a-comment-area mt-70">
                        <h5>Get in Touch</h5>
                        <!-- Contact Form -->
                        <form namw="Comment" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="comment" id="comment" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your comment</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn world-btn" name="submit">Post comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-12 col-lg-12">
                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mt-70">

                         <?php 
 $sts=1;
 $query=mysqli_query($con,"select name,comment,postingDate from  tblcomments where postId='$pid' and status='$sts'");
while ($row=mysqli_fetch_array($query)) {
?>
                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content">
                                    <!-- Comment Meta -->
                                    <div class="comment-meta d-flex align-items-center justify-content-between">
                                        <p><a href="#" class="post-author"><?php echo htmlentities($row['name']);?></a> on <a href="#" class="post-date"><?php echo htmlentities($row['postingDate']);?></a></p>
                                        
                                    </div>
                                    <p><?php echo htmlentities($row['comment']);?> </p>
                                </div>
                                
                            </li>
                            <!-- Single Comment Area -->

                        </ol>
                    <?php } ?>
                    </div>


                </div>
<!--End Comment -->
            </div>

        </div>

    </div>
<?php } ?>

                <!-- ========== Sidebar Area ========== -->
                
            <!-- ============== Related Post ============== -->
           

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