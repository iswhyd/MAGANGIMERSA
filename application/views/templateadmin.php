<?php
if($this->session->userdata('id_admin')==null){ redirect(base_url('welcome')); }
foreach($website->result() as $iden);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Developer ">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title><?php echo $iden->nama_website; ?></title>
  <link rel="shortcut icon" href="<?php echo base_url($iden->logo_website); ?>">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>plugins/iCheck/flat/blue.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>plugins/iCheck/all.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>plugins/iCheck/all.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/select2/dist/css/select2.min.css">
  <!-- Morris charts -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>/bower_components/morris.js/morris.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Java Script -->
  <script src="<?php echo base_url('assets/'); ?>js/jquery-3.1.0.min.js"></script>
  <!-- Izi Alert-->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>izi/dist/css/iziToast.min.css">
  <script type="text/javascript" src="<?php echo base_url('assets/'); ?>izi/dist/js/iziToast.min.js"></script>
  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
    .uppercase{
      text-transform: uppercase;
    }
  </style>
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Sweet Alert css -->
  <link href="<?php echo base_url('assets/'); ?>plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet" type="text/css" />
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<!--modal ganti foto-->
<!--<script type="text/javascript">
  $(document).ready(function(){
    iziToast.show({timeout:5000,color:'blue',title: 'Sedang Mengambil Data...',position: 'topLeft',pauseOnHover: true,transitionIn: false,progressBarColor:'#fff'});
  });
</script>-->
<script src="<?php echo base_url('assets/'); ?>js/olahangka.js"></script>
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo hidden-xs">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>VR</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ADMIN</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="hidden-xs" style="font-weight: bold;font-family: arial;"><?php echo $iden->nama_website; ?></span>
      </a>
  
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown notifications-menu">
            <a href="<?php echo base_url(); ?>" target="_blank">
              Website Saya
            </a>
          </li>
          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/'); ?>dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama_admin'); ?></span>
                <!-- User image -->
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo base_url('assets/'); ?>dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('nama_admin'); ?> - ADMIN
                  <small><?php echo $iden->nama_website; ?></small>
                </p>
              </li>          

              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('admin/akunsaya'); ?>" class="btn btn-default btn-flat">Akun Saya</a>
                </div>
                <div class="pull-right">
                  <a href="#" onclick="modlogout()" class="btn btn-default btn-flat">Keluar</a>
                </div>
                <script type="text/javascript">
                  function modlogout(){
                    swal({
                      title: "Keluar Dari Aplikasi?",
                      text: "Tekan Ya Untuk Setuju dan Tekan Batal Jika Tidak Setuju",
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonText: 'Ya',
                      cancelButtonText: 'Batal',
                    })
                    .then(function () {
                      window.location="<?php echo base_url('admin/logout'); ?>";
                    },
                    function (dismiss) {
                      if(dismiss === 'cancel') {
                        swal("Anda Membatalkan Proses");
                      }
                    })
                  }
                </script>
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
          <img src="<?php echo base_url('assets/'); ?>dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info"><?php echo $this->session->userdata('nama_admin'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU NAVIGASI</li>
        <!--<li>
          <a href="<?php echo base_url('admin'); ?>">
            <i class="fa fa-bar-chart"></i> <span>Dahsboard</span>
          </a>
        </li>-->
        <li>
          <a href="<?php echo base_url('admin/website'); ?>">
            <i class="fa fa-globe"></i> <span>Website</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i>
            <span>Statistik Desa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo base_url('admin/agama'); ?>"><i class="fa fa-list"></i> Data Agama</a></li>
            <li ><a href="<?php echo base_url('admin/pendidikan'); ?>"><i class="fa fa-list"></i> Data Pendidikan</a></li>
            <li ><a href="<?php echo base_url('admin/pekerjaan'); ?>"><i class="fa fa-list"></i> Data Pekerjaan</a></li>
            <li ><a href="<?php echo base_url('admin/jenisbelanja'); ?>"><i class="fa fa-list"></i> Data Jenis Belanja</a></li>
            <li ><a href="<?php echo base_url('admin/jenisdapat'); ?>"><i class="fa fa-list"></i> Data Jenis Pendapatan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Kependudukan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo base_url('admin/penduduk'); ?>"><i class="fa fa-users"></i> Penduduk</a></li>
            <li ><a href="<?php echo base_url('admin/agamapenduduk'); ?>"><i class="fa fa-list"></i> Statistik Agama</a></li>
            <li ><a href="<?php echo base_url('admin/pekerjaanpenduduk'); ?>"><i class="fa fa-list"></i> Statistik Pekerjaan</a></li>
            <li ><a href="<?php echo base_url('admin/pendidikanpenduduk'); ?>"><i class="fa fa-list"></i> Statistik Pendidikan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dollar"></i>
            <span>Keuangan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo base_url('admin/apbdesdapat'); ?>"><i class="fa fa-circle"></i> APBD Pendapatan</a></li>
            <li ><a href="<?php echo base_url('admin/apbdesbelanja'); ?>"><i class="fa fa-circle"></i> APBD Pembelanjaan</a></li>
            <li ><a href="<?php echo base_url('admin/apbdespel'); ?>"><i class="fa fa-circle"></i> APBD Pelaksanaan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i>
            <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo base_url('admin/inputblog'); ?>"><i class="fa fa-pencil"></i> Input Blog</a></li>
            <li ><a href="<?php echo base_url('admin/blog'); ?>"><i class="fa fa-list"></i> Data Blog</a></li>
            <li ><a href="<?php echo base_url('admin/kategoriblog'); ?>"><i class="fa fa-tag"></i> Kategori Blog</a></li>

          </ul>
        </li>
        <li>
          <a href="<?php echo base_url('admin/halaman'); ?>">
            <i class="fa fa-file-o"></i> <span>Halaman</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-picture-o"></i>
            <span>Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo base_url('admin/gallery'); ?>"><i class="fa fa-list"></i> Data Gallery</a></li>
            <li ><a href="<?php echo base_url('admin/kategorigallery'); ?>"><i class="fa fa-tag"></i> Kategori Gallery</a></li>
            <li ><a href="<?php echo base_url('admin/video'); ?>"><i class="fa fa-file-video-o"></i> Video</a></li>
            <li ><a href="<?php echo base_url('admin/slider'); ?>"><i class="fa fa-sliders"></i> Slider</a></li>

          </ul>
        </li>
        <li>
          <a href="<?php echo base_url('admin/staff'); ?>">
            <i class="fa fa-user-secret"></i> <span>Staff</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Agenda</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo base_url('admin/agenda'); ?>"><i class="fa fa-list"></i> Data Agenda</a></li>
            <li ><a href="<?php echo base_url('admin/inputagenda'); ?>"><i class="fa fa-pencil"></i> Input Agenda</a></li>

          </ul>
        </li>
        <li>
          <a href="<?php echo base_url('admin/download'); ?>">
            <i class="fa fa-download"></i> <span>Download</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/menu'); ?>">
            <i class="fa fa-list-ol"></i> <span>Menu</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/linkterkait'); ?>">
            <i class="fa fa-link"></i> <span>Link Terkait</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/ourservice'); ?>">
            <i class="fa fa-gears"></i> <span>Our Service</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <?php echo $_content; ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versi 2.1</b>
    </div>
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#"><?php echo $iden->nama_website; ?></a></strong> 
  </footer>
 
</div>

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/'); ?>bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>bower_components/morris.js/morris.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $(".example1").DataTable({
      "pageLength": 20

    });
    $("#example1").DataTable({
      "pageLength": 20
    });
    $('#example2').DataTable({
      "paging": false,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": false
    });
  });
</script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/'); ?>plugins/iCheck/icheck.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/'); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url('assets/'); ?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url('assets/'); ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url('assets/'); ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url('assets/'); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url('assets/'); ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  })
  $(function () {
    //Initialize Select2 Elements
    $(".select").select2();
  });
</script>
<!-- CK Editor -->
<script src="<?php echo base_url('assets/'); ?>bower_components/ckeditor/ckeditor.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/'); ?>dist/js/demo.js"></script>
<!-- Sweet Alert Js  -->
<script src="<?php echo base_url('assets/'); ?>plugins/sweet-alert/sweetalert2.min.js"></script>
<script>
  function batasakses(){
    swal("Anda Tidak Bisa Akses Ini");
  }
</script>
</body>
</html>
