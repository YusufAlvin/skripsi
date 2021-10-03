<!DOCTYPE html>
<?php
error_reporting(0);
session_start();
setlocale(LC_ALL, 'IND');
include 'config/koneksi.php';
include '../config/fungsi_indotgl.php';
include '../config/fungsi.php';

if ($_SESSION["login"] !== 'dekan') {
  echo "<script>alert('Anda harus login dahulu sebagai Dekan')</script>";
  echo "<script>document.location='../index.php'</script>";
}
?>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Universitas AKI .: Dasboard Dekan :.</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="icon" href="foto/logounaki.png">
  <!-- Theme style -->
  <link rel="shortcut icon" href="foto/logounaki.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <link rel="stylesheet" href="../plugins/pace/pace.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>UNAKI</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Universitas AKI</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class='glyphicon glyphicon-menu-down' aria-hidedden='true'></span>
                <span class="hidden-xs"><?php echo $_SESSION['nama_dkn'] ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="foto/<?php echo $_SESSION['foto_dkn']; ?>" class="img-circle" alt="User Image">
                  <p>
                  <h5><?php echo $_SESSION['nama_dkn'] ?></h5>
                  <h4>Dekan Fakultas</h4>
                  </p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="homepage.php?p=ubah_password" class="btn btn-default btn-flat">Ubah Password</a>
                  </div>
                  <div class="pull-right">
                    <a href="../logout.php" class="btn btn-default btn-flat">Logout</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
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
            <img src="foto/<?php echo $_SESSION['foto_dkn']; ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $_SESSION['nama_dkn'] ?></p>
            <i class="fa fa-circle text-success"></i> Online
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Sistem Online Kerja Praktek dan Skripsi</li>
          <li>
            <a href="homepage.php?p=dashboard">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-check-square"></i>
              <span>Persetujuan Kerja Praktek</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="homepage.php?p=persetujuan_kpterima"><i class="fa fa-circle-o"></i> Kerja Praktek Yang Diterima</a></li>
              <li><a href="homepage.php?p=persetujuan_kptolak"><i class="fa fa-circle-o"></i> Kerja Praktek Yang Ditolak</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-check-square"></i>
              <span>Persetujuan Skripsi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="homepage.php?p=persetujuan_skripsiterima"><i class="fa fa-circle-o"></i> Skripsi Yang Diterima</a></li>
              <li><a href="homepage.php?p=persetujuan_skripsitolak"><i class="fa fa-circle-o"></i> Skripsi Yang Ditolak</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-desktop"></i>
              <span>Monitoring</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="homepage.php?p=monitoring_kp"><i class="fa fa-circle-o"></i> Kerja Praktek</a></li>
              <li><a href="homepage.php?p=monitoring_skripsi"><i class="fa fa-circle-o"></i> Skripsi</a></li>
            </ul>
          </li>
          <li class="treeview">
            <?php
            $jbaru = getNumRows("SELECT * FROM jadwal WHERE status='1' AND status1='0'");
            if ($jbaru > 0) {
              $jb = "<span class='pull-right-container'><span class='label label-warning pull-right'>$jbaru</span>
                        </span>";
            } else {
              $jb = "";
            }
            ?>

            <?php
            $jsetuju = getNumRows("SELECT * FROM jadwal WHERE status='1' AND status1='1'");
            if ($jsetuju > 0) {
              $js = "<span class='pull-right-container'><span class='label label-success pull-right'>$jsetuju</span>
                        </span>";
            } else {
              $js = "";
            }
            ?>
            <a href="#">
              <i class="fa fa-check-square"></i>
              <span>Jadwal Dosbim</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="homepage.php?p=setujui_jadwal"><i class="fa fa-circle-o"></i> Jadwal Baru<?php echo "$jb"; ?> </a></li>
              <li><a href="homepage.php?p=jadwal_setujui1"><i class="fa fa-circle-o"></i> Jadwal Disetujui<?php echo "$js"; ?></a></li>
            </ul>
          </li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?php include('switch_dekan.php'); ?>
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2019 <a href="http://www.unaki.ac.id/">Universitas AKI</a>.</strong> All rights
      reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="../bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="../bower_components/raphael/raphael.min.js"></script>
  <script src="../bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../bower_components/moment/min/moment.min.js"></script>
  <script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
  <script src="../bower_components/PACE/pace.min.js"></script>
  <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
  <script>
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    })
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#myTable').DataTable()
    });
    // export tabel kaprodi
    $(document).ready(function() {
      var table = $('#tabelexport').DataTable({
        // select: true, 
        // dom: 'Blfrtip', 
        // lengthMenu: [ 
        // [10, 25, 50, -1], 
        // ['10', '25', '50', 'Tampilkan Semua'] ], 
        // dom: 'Bfrtip', 
        // buttons: [
        //   { 
        //     extend: 'pdf',
        //     text: 'PDF',
        //     orientation: 'landscape',
        //     pageSize: 'A4',
        //     exportOptions:{
        //       columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11 ]
        //     }
        //   }, 'pageLength' 
        // ],
        initComplete: function() {
          this.api().columns().every(function() {
            var column = this;
            var select = $('<select><option value=""></option></select>')
              .appendTo($(column.footer()).empty())
              .on('change', function() {
                var val = $.fn.dataTable.util.escapeRegex(
                  $(this).val()
                );

                column
                  .search(val ? '^' + val + '$' : '', true, false)
                  .draw();
              });

            column.data().unique().sort().each(function(d, j) {
              select.append('<option value="' + d + '">' + d + '</option>')
            });
          });
        }
      });
      table.buttons().container()
        .appendTo('#datatable_wrapper .col-md-6:eq(0)');
      table.on('order.dt search.dt', function() {
        table.column(0, {
          search: 'applied',
          order: 'applied'
        }).nodes().each(function(cell, i) {
          cell.innerHTML = i + 1;
          table.cell(cell).invalidate('dom');
        });
      }).draw();
    });
  </script>
</body>

</html>