<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Warkah BPN Kab.Bogor</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/css/green.css" rel="stylesheet">
     <!-- LINK CSS TABEL -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <!-- AKHIR LINK CSS TABEL -->
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">

  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-home"></i><span>Data Warkah</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="assets/images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang</span>
                <h2>User 1</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li>
                      <a href="dashboard.php"><i class="fa fa-picture-o"></i><span>Dashboard</span></a></li>
                    <li><a href="datawarkah.php"><i class="fa fa-edit"></i>Data Warkah</a></li>
                    <li><a href="datauser.php"><i class="fa fa-edit"></i>Data User</a></li>
                    <li><a><i class="fa fa-home"></i> Laporan Data Warkah <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="laporan_peminjaman.php"><i class="fa fa-edit"></i>Laporan Peminjaman</a></li>
                      <li><a href="laporan_pengembalian.php"><i class="fa fa-edit"></i>Laporan Pengembalian</a></li>
                      </ul>
                      </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
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
                    <img src="assets/images/user.png" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
                <h3>Data User</h3>
                <div class="container">
                <form method="post" class="#" action="#">
                <input type="submit" name="#" value="Tambah Data User" class="btn btn-primary col-sm-4" data-toggle="modal" data-target="#myModal">
                </div>
              </div>
            </div>
             <!-- Modal KODINGAN POPUP -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content transparent">
<div class="modal-body">
<div class="well">
<form method="post" action="#">
<div class="form-group">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">X</span><span class="sr-only">Close</span></button>       
<label>Tambah User</label> 
<input type="text" name="#" class="form-control" id="#" placeholder="Username" required>  
<input type="text" name="#" class="form-control" id="#" placeholder="Password" required>
<input type="text" name="#" class="form-control" id="#" placeholder="Nama" required>
<input type="text" name="#" class="form-control" id="#" placeholder="Tanggal Lahir" required>
<input type="text" name="#" class="form-control" id="#" placeholder="Alamat" required>
<select name="#" class="form-control" id="#" required="">
  <option value="">Jenis Kelamin</option>
  <option value="lakilaki">Laki-Laki</option>
  <option value="perempuan">Perempuan</option>
</select>
<input type="text" name="#" class="form-control" id="#" placeholder="Alamat Emai" required>
<input type="text" name="#" class="form-control" id="#" placeholder="No Hp" required>
</div>
<label>
<button type="submit" name="simpan" class="btn btn-success btn-block">Simpan</button>
<button type="reset" name="" class="btn btn-danger btn-block">Reset</button>
</label>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- AKHIR KODINGAN -->
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Alamat Email</th>
                <th>No Hp</th>
                <th>Action</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <td>admin</td>
                <td>admin</td>
                <td>Abdurrohman Muthi</td>
                <td>27-Oktober-1995</td>
                <td>Karawang</td>
                <td>Laki-laki</td>
                <td>abdurrohman@gmail.com</td>
                <td>089665435263</td>
           <td><a href="#" class="btn btn-primary btn-xs col-xs-12" type="button">Edit</a> <a href="#" class="btn btn-danger btn-xs col-xs-12" type="button">Hapus</a></td>
                </tr>
                <tr>
                <td>admin1</td>
                <td>admin1</td>
                <td>M. Aditya</td>
                <td>27-Oktober-1995</td>
                <td>Bogor</td>
                <td>Perempuan</td>
                <td>adityaputradewa@gmail.com</td>
                <td>08966542853</td>
            <td><a href="#" class="btn btn-primary btn-xs col-xs-12" type="button">Edit</a> <a href="#" class="btn btn-danger btn-xs col-xs-12" type="button">Hapus</a></td>
                </tr>
               </tbody>
            </table>
          </div>
        </div>
 <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

       <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- JS TABEL -->
    <script> $(document).ready(function() {
    $('#example').DataTable();
    } ); </script>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <!-- AKHIR SCRIP JS TABEL -->
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
