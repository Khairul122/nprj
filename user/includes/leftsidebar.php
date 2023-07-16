            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="index.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>

                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Absensi </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">

                                    <?php if ($_SESSION['type'] == "pengurus") {
                                        echo '<li><a href="manage-absen.php">Kelola Absensi</a></li>';
                                    } ?>

                                    <li><a href="absen.php">Absen</a></li>
                                </ul>
                            </li>
                            <?php if ($_SESSION['type'] == "pengurus") { ?> <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Anggota </span> <span class="menu-arrow"></span></a>
                                    <ul class="list-unstyled">


                                        <li><a href="manage-anggota.php">Kelola Anggota</a></li>



                                    </ul>
                                </li><?php } ?>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Keuangan </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <?php if ($_SESSION['type'] == "pengurus") {
                                        echo ' <li><a href="manage-kas.php">Kelola KAS</a></li>
                                    <li><a href="laporan-masuk.php">Laporan Kas Masuk Perbulan</a></li>
                                    <li><a href="laporan-keluar.php">Laporan Kas Keluar Perbulan</a></li>';
                                    } ?>
                                    <li><a href="laporan-kas.php">Laporan KAS</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i>
                                    <?php
                                    $id = $_SESSION['id'];
                                    $query = mysqli_query($con, "select id,judul from  tblsp where user_id='$id' and is_read = 0");
                                    $countposts = mysqli_num_rows($query);
                                    ?>
                                    <span class="label label-success pull-right"><?php echo htmlentities($countposts); ?></span><span> Peringatan </span> </a>
                                <ul class="list-unstyled">

                                    <?php if ($_SESSION['type'] == "pengurus") {
                                        echo '<li><a href="manage-sp.php">Kelola SP</a></li>';
                                    } ?>

                                    <li><a href="list-sp.php">Lihat SP</a></li>
                                </ul>
                            </li>


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Posts </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-post.php?id=<?php echo htmlentities($_SESSION['id']) ?>">Add Posts</a></li>

                                    <li><a href="manage-posts.php?id=<?php echo htmlentities($_SESSION['id']) ?>">Manage Posts</a></li>



                                </ul>
                            </li>


                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->

            </div>