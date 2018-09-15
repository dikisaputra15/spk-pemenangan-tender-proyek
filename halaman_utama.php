<?php
@session_start();
include "koneksi.php";
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPK Pemenang Tender Proyek</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
	
  <link href="datatables/datatables.min.css" rel="stylesheet">
  <script src="plugins/jQuery/jquery-2.2.3.min.js" rel="stylesheet"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="halaman_utama.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">PTP SISTEM</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.PNG" class="user-image" alt="User Image">
              <span class="hidden-xs">Logout</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.PNG" class="img-circle" alt="User Image">
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.PNG" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>PTP SISTEM</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
		<?php
		if(@$_SESSION["level"] == "admin"){ ?>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=user"><i class="fa fa-circle-o"></i>Data User</a></li>
            <li><a href="?page=vendor"><i class="fa fa-circle-o"></i>Data Vendor</a></li>
            <li><a href="?page=lelang"><i class="fa fa-circle-o"></i>Data Lelang </a></li>
          </ul>
        </li>
		<?php
			}
		?>
		
		<?php if(@$_SESSION["level"] == "vendor"){ ?>
		<li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=vendor"><i class="fa fa-circle-o"></i>Data Vendor</a></li>
          </ul>
        </li>
	   <?php
			}
		?>
		
		<?php if(@$_SESSION["level"] == "admin"){ ?>
	   <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Proses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=pendaftaran"><i class="fa fa-circle-o"></i> Pendaftaran</a></li>
            <li><a href="?page=penilaian"><i class="fa fa-circle-o"></i> Penilaian</a></li>
          </ul>
        </li>
		<?php
			}
		?>
		
		<?php if(@$_SESSION["level"] == "vendor"){ ?>
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Proses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=pendaftaran"><i class="fa fa-circle-o"></i> Pendaftaran</a></li>
          </ul>
        </li>
		<?php
			}
		?>
		
		<?php if(@$_SESSION["level"] == "admin"){ ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=lap_daftar"><i class="fa fa-circle-o"></i> Laporan Pendaftar</a></li>
            <li><a href="?page=lap_pemenang"><i class="fa fa-circle-o"></i> Laporan Pemenang Tender</a></li>
          </ul>
        </li>
		<?php
			}
		?>
		
		<?php if(@$_SESSION["level"] == "vendor"){ ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=lap_daftar"><i class="fa fa-circle-o"></i> Laporan Pendaftar</a></li>
            <li><a href="?page=lap_pemenang"><i class="fa fa-circle-o"></i> Laporan Pemenang Tender</a></li>
          </ul>
        </li>
		<?php
			}
		?>
		
		<?php if(@$_SESSION["level"] == "pimpinan"){ ?>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=lap_daftar"><i class="fa fa-circle-o"></i> Laporan Pendaftar</a></li>
            <li><a href="?page=lap_pemenang"><i class="fa fa-circle-o"></i> Laporan Pemenang Tender</a></li>
          </ul>
        </li>
		<?php
			}
		?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
		<?php
		
			$page=@$_GET['page'];
			$action=@$_GET['action'];
				if($page == "user"){
					if ($action==""){
						include "module/user/list_user.php";
					}
					else if($action == "tambah_user"){
						include "module/user/tambah_user.php";
					}
					else if($action == "edit"){
						include "module/user/edit_user.php";
					}
					else if($action=="hapus"){
						$user_id = @$_GET[user_id];
						mysql_query("delete from user where user_id = '$user_id'") or die(mysql_error());
						echo '<script type="text/javascript">window.location.href="../spktender/halaman_utama.php?page=user";</script>';
					}
				}
				if($page == "vendor"){
					if ($action==""){
						include "module/vendor/list_vendor.php";
					}
					else if($action == "tambah_vendor"){
						include "module/vendor/tambah_vendor.php";
					}
				}
				if($page == "lelang"){
					if ($action==""){
						include "module/lelang/list_lelang.php";
					}
					else if($action == "tambah_lelang"){
						include "module/lelang/tambah_lelang.php";
					}
					else if($action == "edit"){
						include "module/lelang/edit_lelang.php";
					}
					else if($action=="hapus"){
						$id_lelang = @$_GET[id_lelang];
						mysql_query("delete from lelang where id_lelang = '$id_lelang'") or die(mysql_error());
						echo '<script type="text/javascript">window.location.href="../spktender/halaman_utama.php?page=lelang";</script>';
					}
				}
				if($page == "pendaftaran"){
					if ($action==""){
						include "module/pendaftaran/list_daftar.php";
					}
					else if($action == "daftar_lelang"){
						include "module/pendaftaran/daftar_lelang.php";
					}
				}
				if($page == "lap_daftar"){
					if ($action==""){
						include "module/laporan/lap_daftar.php";
					}
				}
				if($page == "penilaian"){
					if ($action==""){
						include "module/penilaian/penilaian.php";
					}
				}
				if($page == "lap_pemenang"){
					if ($action==""){
						include "module/laporan/lap_pemenang.php";
					}
				}
				else if($page == ""){
					echo "<h3 align='center'>selamat datang di sistem pemenang tender proyek di dinas pekerjaan umum dan penataan ruang kabupaten serang</h3>";
				}
		
		?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; eka</strong>nurkamil.
  </footer>
</div>
<!-- ./wrapper -->

<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<script src="datatables/datatables.min.js"></script>
	
<script type="text/javascript">
	$(document).ready( function () {
	$('#datatables').DataTable();
	} );
</script>

</body>
</html>
