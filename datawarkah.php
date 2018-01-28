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
    <link type="text/css" href="assets/css/dataTables.bootstrap.min.css">
    <link href="assets/css/bootstrap-datepicker.css" rel="stylesheet">
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
                <h3>Data Warkah</h3>
              </div>
              <div class="row pull-right padd">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
                <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#modalCari"><i class="fa fa-search" aria-hidden="true"></i> Cari Data</button>
              </div>
              <!-- modal add -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header warna">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel"><p class="p1">Tambah Data Warkah</p></h4>
                    </div>             
                    <div class="panel-body">
                      <div class="row paddings">
                          <form role="form" method="post" action="proses/datawarkah.php"  enctype="multipart/form-data">
                            <div class="col-md-6">
                              <input type="text" hidden="true" name="inputan" value="<?php echo $_SESSION['username']; ?>"/>
                              <div class="form-group">
                              <label>Warkah Nomor</label>
                              <input class="form-control" type="text" name="no_warkah" value="W"/>
                              </div>
                              <div class="form-group">
                                <label>Nomor Box</label>
                                <input class="form-control" type="text" name="no_box" required="" placeholder="Masukan Nomor Box.." />
                              </div>
                              <div class="form-group">
                                <label>Tahun</label>
                                <input class="date-own form-control" type="text" name="tahun" required="" placeholder="Masukan Tahun..." />
                              </div>
                              <div class="form-group">
                                <label>Lokasi Ruang</label>
                                <input class="form-control" type="text" name="lokasi_ruang" required=""/>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                              <label>Rak</label>
                              <input class="form-control" type="text" name="rak" required="" />
                              </div>
                              <div class="form-group">
                                <label>Baris</label>
                                <input class="form-control" type="text" name="baris" required="" />
                              </div>
                              <div class="form-group">
                                <label>Posisi</label>
                                <input class="form-control" type="text" name="posisi" required="" />
                              </div>
                              <div class="form-group">
                                <label>Foto</label>
                                <input class="form-control" type="file" name="foto"/>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <button type="submit" name="simpan" class="btn btn-success col-md-2"><i class="fa fa-save"></i> Simpan</button>
                              <button type="reset" class="btn btn-warning col-md-2 col-md-offset-1"><i class="fa fa-refresh"></i> Reset</button>
                            </div>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
             </div>

             <!-- modal cari -->
              <div class="modal fade" id="modalCari" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header warna">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel"><p class="p1">Cari Data Warkah</p></h4>
                    </div>             
                    <div class="panel-body">
                      <div class="row paddings">
                          <form role="form" method="post" action="proses/datawarkah.php"  enctype="multipart/form-data">
                            <div class="col-md-6">                              
                              <div class="form-group">
                              <label>Nomor Warkah</label>
                              <input class="form-control" type="text" name="no_warkah" value="W"/>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Tahun</label>
                                <input class="date-own form-control" type="text" name="tahun" required="" placeholder="Masukan Tahun..." />
                              </div>
                            </div>
                            <div class="col-md-12">
                              <button type="submit" name="simpan" class="btn btn-info col-md-3 pull-right"><i class="fa fa-search"></i> Cari Data </button>
                              <button type="reset" class="btn btn-warning col-md-3 col-md-offset-1 pull-right"><i class="fa fa-refresh"></i> Reset</button>
                            </div>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
             </div>

             <!-- end modal cari -->
            </div>
          </div>
          <div class="container pad">
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

            <thead>
              <tr>
                <th>No.</th>
                <th>Warkah Nomor</th>
                <th>Nomor Box</th>
                <th>Tahun</th>
                <th>Lokasi Ruang</th>
                <th>Rak</th>
                <th>Baris</th>
                <th>Posisi</th>
                <th>Foto</th>
                <th class="auto">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $q = "SELECT * FROM tbl_datawarkah order by no_warkah";
              $w = mysqli_query($conn,$q);
              while ($d = mysqli_fetch_array($w)) {
                echo '
                  <tr>
                  <td>'."1".'</td>
                  <td>'.$d['no_warkah'].'</td>
                  <td>'.$d['no_box'].'</td>
                  <td>'.$d['tahun'].'</td>
                  <td>'.$d['lokasi_ruang'].'</td>
                  <td>'.$d['rak'].'</td>
                  <td>'.$d['baris'].'</td>
                  <td>'.$d['posisi'].'</td>
                  <td>
                  <a href="upload/datawarkah/'.$d['foto'].'" target="_blank">
                    <img src="upload/datawarkah/'.$d['foto'].'" width="70" height="60">
                  </a>
                  </td>
                  <td>
                    <a href="edit/datawarkah.php?id='.$d['id'].'" class="btn btn-primary btn-xs" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a> 
                    <a href="proses/datawarkah.php?id='.$d['id'].'" class="btn btn-danger btn-xs" type="button" onclick="return confirm(\'Anda yakin menghapus data ini, '.$data['username'].'?\')"><i class="fa fa-times" aria-hidden="true"></i> Hapus</a>
                    <a href ="proses/cetak/datawarkah?id='.$d['id'].'" target ="blank" class="btn btn-info btn-xs" type="button"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a>
                  </td>
                </tr>

                ';

                }
              ?>
                
            </tbody>
            
          </table>
          </div>
        </div>
        <!-- /page content -->

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

    <!-- <script src="assets/js/bootstrap-datepicker.js"></script> -->
    <script type="text/javascript" src="assets/js/bootstrap-datepicker.js""></script>

    <script type="text/javascript">
      $('.date-own').datepicker({

         minViewMode: 2,

         format: 'yyyy'

       });
    </script>
    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>
  </body>
</html>
<?php
}
?>