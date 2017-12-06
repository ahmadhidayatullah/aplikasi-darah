<?php
session_start();
ob_start();
$page = isset($_GET['page']) ? $_GET['page'] : "";
date_default_timezone_set("Asia/Ujung_Pandang");
if (isset($_SESSION['user_605']) and !empty($_SESSION['user_605']) and isset($_SESSION['pass_605']) and !empty($_SESSION['pass_605'])) {
    $LEVEL_USER = $_SESSION['level_605'];
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php
        include "lib/head.php";
        ?>
    </head>
    <?php
    include "conf/kon.php";
    ?>
    <body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><!--<i class="fa fa-sitemap"></i>-->
                            <img src="images/logo.jpg" width="48px" height="48px"/>
                            <span>APP DARAH</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="images/logo-right.png" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome</span>
                            <?php
                            if($LEVEL_USER == "karyawan"){
                                echo "<h2>".$_SESSION['karyawan_name']."</h2>";
                            }else{
                                echo "<h2>".$_SESSION['user_605']."</h2>";
                            }
                            ?>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->
                    <br >
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <?php
                        include "view/theme/sidebar.php";
                        ?>
                    </div>
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <?php
                include "view/theme/top-nav.php";
                ?>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <?php
                // include "view/page/count.php";
                ?>
                <!-- /top tiles -->
                <div class="row">
                    <?php
                    include "control/control.php";
                    ?>
                </div>
                <br />
                <!-- footer content -->

                <?php
                // include "view/theme/footer.php";
                ?>
                <!-- /footer content -->
            </div>
            <!-- /page content -->

        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>


    <script src="js/custom.js"></script>


    <!--<script>
        NProgress.done();
    </script>-->
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/datepicker.js"></script>

    <?php
    if($page == "home" or $page == ""){
        ?>
        <!-- pace -->
<!--        <script src="js/pace/pace.min.js"></script>-->

        <script src="js/moris/raphael-min.js"></script>
        <script src="js/moris/morris.min.js"></script>
<!--        <script src="js/moris/example.js"></script>-->
        <?php
    }
    ?>

    </body>

    </html>
    <?php
} else {
    // jika belum login, maka akan menampilkan form Login
    header('location:login.php');
}
?>