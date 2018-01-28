<?php
include "proses/connect.php";
 session_start();
 if (empty($_SESSION['username'])) {
 header("location:index.php");
 }
 else {
  $query = "SELECT * FROM tbl_user where username = '".$_SESSION['username']."'"; 
  $sql = mysqli_query($conn, $query); 
  $data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BPN Kab.Bogor</title>
    <link rel="icon" type="image/png" href="assets/images/bpn.png"/>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap.min.css">
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/css/green.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard" class="site_title"><img src="assets/images/bpn.png" width="50"><span> BPN Kab.Bogor</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo ('upload/user/'.$data['foto']);?>" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <?php
                date_default_timezone_set("Asia/Jakarta");
                $time = date("H");
                  if ($time < 10) {
                    echo ' <span> Selamat Pagi</span>';
                  }
                  elseif ($time < 14) {
                    echo '<span>Selamat Siang </span>';                  
                  }
                  elseif ($time < 18) {
                    echo '<span>Selamat Sore </span>'; 
                  }
                  elseif ($time < 24) {
                    echo '<span>Selamat Malam </span>'; 
                  }
                ?>
                <h2><?php echo $_SESSION['username'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                      <li><a href="dashboard"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
                      <li><a href="datawarkah"><i class="fa fa-edit"></i>Data Warkah</a></li>
                      <li><a href="datauser"><i class="fa fa-user"></i>Data User</a></li>
                      <li><a><i class="fa fa-file-pdf-o"></i> Laporan Data Warkah <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                      <li><a href="laporan_peminjaman"><i class="fa fa-newspaper-o"></i>Laporan Peminjaman</a></li>
                      <li><a href="laporan_pengembalian"><i class="fa fa-newspaper-o"></i>Laporan Pengembalian</a></li>
                      </ul>
                      </li>
              </div>
            </div>
            <!-- /sidebar menu -->
             <!-- /menu footer buttons -->
            <div class="sidebar-footer">
              <div class="footside">
                &copy; 2018 BPN Kabupaten Bogor
              </div>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo ('upload/user/'.$data['foto']);?>" alt=""><?php echo $_SESSION['username'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>

                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="proses/logout.php?action=logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dashboard</h3>
              </div>
          <!-- page button add -->

            </div>
          </div>
          <div class="container pad">
          <img src="assets/images/dash.png" class="img img-responsive">
          </div>
        </div>
       

        <!-- footer content -->
        <footer>

        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap.min.js"></script>
    <script>
      $('#example').dataTable();
    </script>
    <script src="assets/js/jquery-1.12.4.js"></script>
       <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="assets/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/js/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assets/js/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="assets/js/icheck.min.js"></script>




    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>
  </body>
</html>
<?php
}
?>