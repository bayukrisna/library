<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styleku.css">

  <!-- Font Awesome -->
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<style>
a {
    position: relative;
    display: inline-block;
}

a .tooltiptext {
    visibility: hidden;
    width: 100px;
    background-color: #5f5f5f;
    color: #f1f1f1;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    bottom: 120%;
    margin-left: -60px;
}

a:hover .tooltiptext {
    visibility: visible;


}
</style>

<style type="text/css">
    .ui-autocomplete {
  z-index: 215000000 !important;
}
</style>  

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>JIC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>STIE </b>JIC</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        
      </a>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>/assets/img/jic.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>master_prodi"><i class="fa fa-circle-o"></i> Prodi</a></li>
            <li><a href="<?php echo base_url(); ?>master_konsentrasi"><i class="fa fa-circle-o"></i> Konsentrasi</a
              ></li>
            <li><a href="<?php echo base_url(); ?>master_asal_sekolah"><i class="fa fa-circle-o"></i> Asal Sekolah</a></li>
            <li><a href="<?php echo base_url(); ?>master_biaya_sekolah"><i class="fa fa-circle-o"></i> Biaya Sekolah</a></li>
            <li><a href="<?php echo base_url(); ?>master_dosen"><i class="fa fa-circle-o"></i> Dosen</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span> Pemasaran </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>tamu"><i class="fa fa-circle-o"></i>Data Tamu</a></li>
            <li><a href="<?php echo base_url(); ?>daftar_ulang/data_peserta_tes"><i class="fa fa-circle-o"></i>Data Peserta Tes</a></li>
            <li><a href="<?php echo base_url(); ?>tamu/data_sgs"><i class="fa fa-circle-o"></i>Data Student Get Student</a>
            <li><a href="<?php echo base_url(); ?>mahasiswa"><i class="fa fa-circle-o"></i>Data Mahasiswa</a></li>
            <li><a href="<?php echo base_url(); ?>tamu/data_out"><i class="fa fa-circle-o"></i>Data Tamu Non Aktif</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span> Keuangan </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>finance/dashboard_finance"><i class="fa fa-circle-o"></i>Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>finance"><i class="fa fa-circle-o"></i>Konfirmasi Registrasi</a></li>
            <li><a href="<?php echo base_url(); ?>finance/data_lunas"><i class="fa fa-circle-o"></i>Data Registrasi Lunas</a></li>
            <li><a href="<?php echo base_url(); ?>finance/pembayaran"><i class="fa fa-circle-o"></i>Pembayaran</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Akademik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?php echo base_url(); ?>mahasiswa/data_mahasiswa"><i class="fa fa-circle-o"></i>Mahasiswa</a></li>
             <li><a href="<?php echo base_url(); ?>mata_kuliah"><i class="fa fa-circle-o"></i>Mata Kuliah</a></li>
             <li><a href="<?php echo base_url(); ?>kurikulum"><i class="fa fa-circle-o"></i>Kurikulum</a></li>
              <li><a href="<?php echo base_url(); ?>jadwal"><i class="fa fa-circle-o"></i>Jadwal Perkuliahan</a></li>
             <li><a href="<?php echo base_url(); ?>kelas_perkuliahan"><i class="fa fa-circle-o"></i>Kelas Perkuliahan</a></li>
             <li><a href="<?php echo base_url(); ?>nilai_perkuliahan"><i class="fa fa-circle-o"></i>Nilai Perkuliahan</a></li>
             <li><a href="<?php echo base_url(); ?>aktivitas_perkuliahan"><i class="fa fa-circle-o"></i>Aktivitas Perkuliahan</a></li>
             <li><a href="<?php echo base_url(); ?>mahasiswa/data_ld"><i class="fa fa-circle-o"></i>Mahasiswa Lulus / DO</a></li>
             
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i>Pelengkap
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>nilai"><i class="fa fa-circle-o"></i>Skala Nilai</a></li>
                <li><a href="<?php echo base_url(); ?>setting_periode"><i class="fa fa-circle-o"></i>Setting Periode</a></li>
              </ul>
            </li>
            
            
          </ul>
        </li>
        <li class="treeview">
              <a href="#"><i class="fa fa-share"></i>Laporan
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>laporan/laporan_mahasiswa"><i class="fa fa-circle-o"></i>Laporan Mahasiswa Per<br> Periode</a>
                </li>
                <li><a href="<?php echo base_url(); ?>laporan/laporan_dmm"><i class="fa fa-circle-o"></i>Laporan KRS</a></li>
                <li><a href="<?php echo base_url(); ?>laporan/laporan_tamu"><i class="fa fa-circle-o"></i>Laporan Tamu</a></li>
                <li><a href="<?php echo base_url(); ?>laporan/laporan_peserta_tes"><i class="fa fa-circle-o"></i>Laporan Peserta Tes</a></li>
                <li><a href="<?php echo base_url(); ?>laporan/laporan_data_getstudent"><i class="fa fa-circle-o"></i>Laporan Student Get <br>Student</a></li>
              </ul>
            </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
      <?php $this->load->view($main_view); ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
    </div>
   
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- FastClick -->
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
    $('#example3').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });
</script>


</body>
</html>
