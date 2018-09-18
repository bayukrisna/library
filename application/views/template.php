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
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css"> -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styleku.css">

  <!-- Font Awesome -->
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">

  <!-- asdsdada -->  <!-- asdsdada -->  <!-- asdsdada -->  <!-- asdsdada -->  <!-- asdsdada -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">

  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Bootstrap 3.3.6 -->
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  
  <!-- asdasdsad -->  <!-- asdsdada -->  <!-- asdsdada -->  <!-- asdsdada -->  <!-- asdsdada -->


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
      <span class="logo-lg"><img src="<?php echo base_url(); ?>/assets/img/STIE JIC-WHITE-01.png" alt="User Image" style="border: none;width: 120px;margin-top: -10px;"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>/assets/img/JIC-WHITE-02.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php if ($this->session->userdata('level') == 2) { 
                      echo $dosen->nama_dosen;} else if ($this->session->userdata('level') == 5) {
                        echo $mahasiswa->nama_mahasiswa;} else {
                          echo $this->session->userdata('username');
                        }
                      
               ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>/assets/img/JIC-WHITE-02.png" class="img-circle" alt="User Image">

                <p>
                  <?php if ($this->session->userdata('level') == 2) { 
                      echo $dosen->nama_dosen;} else if ($this->session->userdata('level') == 5) {
                        echo $mahasiswa->nama_mahasiswa;} else {
                          echo $this->session->userdata('username');
                        }
                      
               ?>
                  <small>STIE JIC | SISTEM INFORMASI AKADEMIK</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url(); ?>profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>login/logout" class="btn btn-default fa fa-sign-out">Logout</a>
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
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <?php 
          if($this->session->userdata('level') == 5){ ?>
            
            <li <?php if($this->uri->segment(1) == 'dashboard') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>dashboard"> <i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li <?php if($this->uri->segment(1) == 'calendar') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>calendar"><i class="fa fa-calendar"></i><span>Kalender Akademik</span></a></li>
            <li <?php if($this->uri->segment(2) == 'history_pendidikan') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>mahasiswa/history_pendidikan"><i class="fa fa-history"></i> <span>History Pendidikan</span></a></li>
            <li <?php if($this->uri->segment(2) == 'krs_mahasiswa') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>mahasiswa/krs_mahasiswa"><i class="fa fa-book"></i> <span>KRS Mahasiswa</span></a></li>
            <li <?php if($this->uri->segment(2) == 'history_nilai') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>mahasiswa/history_nilai"><i class="fa fa-file-text"></i> <span>History Nilai</span></a></li>
            <li <?php if($this->uri->segment(2) == 'jadwal_mhs') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>mahasiswa/jadwal_mhs"><i class="fa fa-file-text"></i> <span>Jadwal</span></a></li>
            <li <?php if($this->uri->segment(2) == 'aktivitas_perkuliahan') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>mahasiswa/aktivitas_perkuliahan"><i class="fa fa-calendar-o"></i> <span>Aktivitas Perkuliahan</span></a></li>
            <li <?php if($this->uri->segment(2) == 'prestasi') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>mahasiswa/prestasi"><i class="fa fa-graduation-cap"></i> <span>Prestasi</span></a></li>
            <li <?php if($this->uri->segment(2) == 'saring_level') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>informasi/saring_level/<?php echo $this->session->userdata('level'); ?>"><i class="fa  fa-info-circle"></i>Informasi</a></li>

          <?php } else if($this->session->userdata('level') == 3) { ?>
            <li <?php if($this->uri->segment(1) == 'dashboard') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>dashboard"> <i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li <?php if($this->uri->segment(1) == 'calendar') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>calendar"><i class="fa fa-calendar"></i><span>Kalender Akademik</span></a></li>
            <li <?php if($this->uri->segment(1) == 'master_asal_sekolah') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>master_asal_sekolah"><i class="fa fa-building-o"></i><span> Asal Sekolah</span></a></li>
            <li <?php if($this->uri->segment(2) == 'data_tamu') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>tamu/data_tamu"><i class="fa fa-group"></i><span>Data Tamu</span></a></li>
            <li <?php if($this->uri->segment(2) == 'data_peserta_tes') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>daftar_ulang/data_peserta_tes"><i class="fa fa-male"></i><span>Data Peserta Tes</span></a></li>
            <li <?php if($this->uri->segment(2) == 'data_sgs') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>tamu/data_sgs"><i class="fa  fa-file"></i><span>Data Student Get Student</span></a>
            <li <?php if($this->uri->segment(2) == 'mahasiswa_data') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>mahasiswa/mahasiswa_data"><i class="fa  fa-file"></i><span>Data Penerimaan Mahasiswa</span></a></li>
            <li <?php if($this->uri->segment(2) == 'data_out') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>tamu/data_out"><i class="fa fa-file"></i><span>Data Tamu Non Aktif</span></a></li>
            <li <?php if($this->uri->segment(2) == 'saring_level') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>informasi/saring_level/<?php echo $this->session->userdata('level'); ?>"><i class="fa  fa-info-circle"></i>Informasi</a></li>
            <li class="treeview <?php if($this->uri->segment(1) == 'laporan') echo 'active'; else echo  '';?>">
              <a href="#"><i class="fa fa-share"></i><span>Laporan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li <?php if($this->uri->segment(2) == 'laporan_tamu') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>laporan/laporan_tamu"><i class="fa fa-circle-o"></i>Laporan Tamu</a></li>
                <li <?php if($this->uri->segment(2) == 'laporan_peserta_tes') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>laporan/laporan_peserta_tes"><i class="fa fa-circle-o"></i>Laporan Peserta Tes</a></li>
                <li <?php if($this->uri->segment(2) == 'laporan_data_getstudent') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>laporan/laporan_data_getstudent"><i class="fa fa-circle-o"></i>Laporan Student Get <br>Student</a></li>
              </ul>
            </li>

          <?php } else if($this->session->userdata('level') == 4) { ?>
            <li <?php if($this->uri->segment(1) == 'dashboard') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li <?php if($this->uri->segment(1) == 'calendar') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>calendar"><i class="fa fa-calendar"></i><span>Kalender Akademik</span></a></li>
            <li <?php if($this->uri->segment(1) == 'master_biaya_sekolah') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>master_biaya_sekolah"><i class="fa fa-money"></i> <span>Biaya Kuliah</span></a></li>
            <li <?php if($this->uri->segment(2) == 'data_registrasi') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>finance/data_registrasi"><i class="fa fa-check-square"></i><span>Konfirmasi Registrasi</span></a></li>
            <li <?php if($this->uri->segment(2) == 'data_lunas') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>finance/data_lunas"><i class="fa fa-database"></i><span>Data Registrasi Lunas</span></a></li>
            <li <?php if($this->uri->segment(2) == 'pembayaran') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>finance/pembayaran"><i class="fa fa-bank"></i><span>Pembayaran</span></a></li>
            <li <?php if($this->uri->segment(2) == 'saring_level') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>informasi/saring_level/<?php echo $this->session->userdata('level'); ?>"><i class="fa  fa-info-circle"></i>Informasi</a></li>

          <?php } else if($this->session->userdata('level') == 2) { ?>
            <li <?php if($this->uri->segment(1) == 'dashboard') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li <?php if($this->uri->segment(1) == 'calendar') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>calendar"><i class="fa fa-calendar"></i><span>Kalender Akademik</span></a></li>
            <li <?php if($this->uri->segment(2) == 'jadwal_dosen') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>master_dosen/jadwal_dosen"><i class="fa fa-money"></i> <span>Jadwal Kelas</span></a></li>
            <li <?php if($this->uri->segment(1) == 'nilai_dosen') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>master_dosen/nilai_dosen"><i class="fa fa-check-square"></i><span>Input nilai</span></a></li>
            <li <?php if($this->uri->segment(1) == 'saring_level') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>informasi/saring_level/<?php echo $this->session->userdata('level'); ?>"><i class="fa  fa-info-circle"></i>Informasi</a></li>

          <?php } else if($this->session->userdata('level') == 6) { ?>
            <li <?php if($this->uri->segment(1) == 'dashboard') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li <?php if($this->uri->segment(1) == 'calendar') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>calendar"><i class="fa fa-calendar"></i><span>Kalender Akademik</span></a></li>
            <li <?php if($this->uri->segment(1) == 'master_dosen') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>master_dosen"><i class="fa fa-archive"></i> <span>Dosen</span></a></li>
            <li <?php if($this->uri->segment(2) == 'data_mahasiswa') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>mahasiswa/data_mahasiswa"><i class="fa fa-user"></i><span>Mahasiswa</span></a></li>
             <li <?php if($this->uri->segment(1) == 'mata_kuliah') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>mata_kuliah"><i class="fa fa-book"></i><span>Mata Kuliah</span></a></li>
             <li <?php if($this->uri->segment(1) == 'kurikulum') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>kurikulum"><i class="fa fa-bookmark"></i><span>Kurikulum</span></a></li>
              <li <?php if($this->uri->segment(1) == 'jadwal') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>jadwal"><i class="fa  fa-calendar"></i><span>Jadwal Perkuliahan</span></a></li>
             <li <?php if($this->uri->segment(1) == 'kelas_perkuliahan') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>kelas_perkuliahan"><i class="fa fa-columns"></i><span>Kelas Perkuliahan</span></a></li>
             <li <?php if($this->uri->segment(1) == 'nilai_perkuliahan') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>nilai_perkuliahan"><i class="fa fa-tasks"></i><span>Nilai Perkuliahan</span></a></li>
             <li <?php if($this->uri->segment(1) == 'aktivitas_perkuliahan') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>aktivitas_perkuliahan"><i class="fa fa-sitemap"></i><span>Aktivitas Perkuliahan</span></a></li>
             <li <?php if($this->uri->segment(2) == 'data_ld') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>mahasiswa/data_ld"><i class="fa fa-binoculars"></i><span>Mahasiswa Lulus / DO</span></a></li>
             <li <?php if($this->uri->segment(1) == 'informasi') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>informasi"><i class="fa  fa-info-circle"></i>Informasi</a></li>
        <li class="treeview <?php if($this->uri->segment(1) == 'laporan') echo 'active'; else echo  '';?>">
              <a href="#"><i class="fa fa-share"></i><span>Laporan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li <?php if($this->uri->segment(2) == 'laporan_mahasiswa') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>laporan/laporan_mahasiswa"><i class="fa fa-circle-o"></i>Laporan Mahasiswa Per<br> Periode</a>
                </li>
                <li <?php if($this->uri->segment(2) == 'laporan_dmm') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>laporan/laporan_dmm"><i class="fa fa-circle-o"></i>Laporan KRS</a></li>
                <li <?php if($this->uri->segment(2) == 'laporan_khs') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>laporan/laporan_khs"><i class="fa fa-circle-o"></i>Laporan KHS </a></li>
                <li <?php if($this->uri->segment(2) == 'laporan_transkrip') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>laporan/laporan_transkrip"><i class="fa fa-circle-o"></i>Laporan Transkrip</a></li>
              </ul>
            </li>

          <?php } else { ?>
            <li <?php if($this->uri->segment(1) == 'dashboard') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li <?php if($this->uri->segment(1) == 'calendar' AND $this->uri->segment(2) == '') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>calendar"><i class="fa fa-calendar"></i><span>Kelender Akademik</span></a></li>
        <li class="treeview <?php if($this->uri->segment(1) == 'admin' OR $this->uri->segment(2) == 'master_calendar' OR $this->uri->segment(1) == 'master_prodi' OR $this->uri->segment(1) == 'master_konsentrasi' OR $this->uri->segment(1) == 'master_asal_sekolah' OR $this->uri->segment(1) == 'master_biaya_sekolah' OR $this->uri->segment(1) == 'master_dosen' OR $this->uri->segment(1) == 'ruang') echo 'active'; else echo  '';?>">
          <a href="#">
            <i class="fa fa-archive"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($this->uri->segment(1) == 'admin') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>admin"><i class="fa fa-circle-o"></i> User</a></li>
            <li <?php if($this->uri->segment(2) == 'master_calendar') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>calendar/master_calendar"><i class="fa fa-circle-o"></i> Data Kalender</a></li>
            <li <?php if($this->uri->segment(1) == 'master_prodi') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>master_prodi"><i class="fa fa-circle-o"></i> Prodi</a></li>
            <li <?php if($this->uri->segment(1) == 'master_konsentrasi') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>master_konsentrasi"><i class="fa fa-circle-o"></i> Konsentrasi</a
              ></li>
            <li <?php if($this->uri->segment(1) == 'master_asal_sekolah') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>master_asal_sekolah"><i class="fa fa-circle-o"></i> Asal Sekolah</a></li>
            <li <?php if($this->uri->segment(1) == 'master_biaya_sekolah') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>master_biaya_sekolah"><i class="fa fa-circle-o"></i> Biaya Kuliah</a></li>
            <li <?php if($this->uri->segment(1) == 'master_dosen') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>master_dosen"><i class="fa fa-circle-o"></i> Dosen</a></li>
            <li <?php if($this->uri->segment(1) == 'ruang') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>ruang"><i class="fa fa-circle-o"></i> Ruangan</a></li>
          </ul>
        </li>
        <li class="treeview <?php if($this->uri->segment(2) == 'data_tamu' OR $this->uri->segment(2) == 'data_peserta_tes' OR $this->uri->segment(2) == 'data_sgs' OR $this->uri->segment(2) == 'mahasiswa_data' OR $this->uri->segment(2) == 'data_out') echo 'active'; else echo  '';?>">
          <a href="#">
            <i class="fa fa-area-chart"></i> <span> Pemasaran </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($this->uri->segment(2) == 'data_tamu') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>tamu/data_tamu"><i class="fa fa-circle-o"></i>Data Tamu</a></li>
            <li <?php if($this->uri->segment(2) == 'data_peserta_tes') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>daftar_ulang/data_peserta_tes"><i class="fa fa-circle-o"></i>Data Peserta Tes</a></li>
            <li <?php if($this->uri->segment(2) == 'data_sgs') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>tamu/data_sgs"><i class="fa fa-circle-o"></i>Data Student Get Student</a>
            <li <?php if($this->uri->segment(2) == 'mahasiswa_data') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>mahasiswa/mahasiswa_data"><i class="fa fa-circle-o"></i>Data Penerimaan Mahasiswa</a></li>
            <li <?php if($this->uri->segment(2) == 'data_out') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>tamu/data_out"><i class="fa fa-circle-o"></i>Data Tamu Non Aktif</a></li>
          </ul>
        </li>
        <li class="treeview <?php if($this->uri->segment(2) == 'data_registrasi' OR $this->uri->segment(2) == 'data_lunas' OR $this->uri->segment(2) == 'pembayaran') echo 'active'; else echo  '';?>">
          <a href="#">
            <i class="fa fa-balance-scale"></i> <span> Keuangan </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($this->uri->segment(2) == 'data_registrasi') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>finance/data_registrasi"><i class="fa fa-circle-o"></i>Konfirmasi Registrasi</a></li>
            <li <?php if($this->uri->segment(2) == 'data_lunas') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>finance/data_lunas"><i class="fa fa-circle-o"></i>Data Registrasi Lunas</a></li>
            <li <?php if($this->uri->segment(2) == 'pembayaran') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>finance/pembayaran"><i class="fa fa-circle-o"></i>Pembayaran</a></li>
          </ul>
        </li>
         <li class="treeview <?php if($this->uri->segment(2) == 'data_mahasiswa' OR $this->uri->segment(1) == 'mata_kuliah' OR $this->uri->segment(1) == 'kurikulum' OR $this->uri->segment(1) == 'jadwal' OR $this->uri->segment(1) == 'kelas_perkuliahan' OR $this->uri->segment(1) == 'nilai_perkuliahan' OR $this->uri->segment(1) == 'aktivitas_perkuliahan' OR $this->uri->segment(2) == 'data_ld') echo 'active'; else echo  '';?>">
          <a href="#">
            <i class="fa fa-graduation-cap"></i> <span>Akademik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li <?php if($this->uri->segment(2) == 'data_mahasiswa') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>mahasiswa/data_mahasiswa"><i class="fa fa-circle-o"></i>Mahasiswa</a></li>
             <li <?php if($this->uri->segment(1) == 'mata_kuliah') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>mata_kuliah"><i class="fa fa-circle-o"></i>Mata Kuliah</a></li>
             <li <?php if($this->uri->segment(1) == 'kurikulum') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>kurikulum"><i class="fa fa-circle-o"></i>Kurikulum</a></li>
              <li <?php if($this->uri->segment(1) == 'jadwal') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>jadwal"><i class="fa fa-circle-o"></i>Jadwal Perkuliahan</a></li>
             <li <?php if($this->uri->segment(1) == 'kelas_perkuliahan') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>kelas_perkuliahan"><i class="fa fa-circle-o"></i>Kelas Perkuliahan</a></li>
             <li <?php if($this->uri->segment(1) == 'nilai_perkuliahan') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>nilai_perkuliahan"><i class="fa fa-circle-o"></i>Nilai Perkuliahan</a></li>
             <li <?php if($this->uri->segment(1) == 'aktivitas_perkuliahan') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>aktivitas_perkuliahan"><i class="fa fa-circle-o"></i>Aktivitas Perkuliahan</a></li>
             <li <?php if($this->uri->segment(2) == 'data_ld') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>mahasiswa/data_ld"><i class="fa fa-circle-o"></i>Mahasiswa Lulus / DO</a></li>
             
            <li class="treeview <?php if($this->uri->segment(1) == 'nilai' OR $this->uri->segment(1) == 'setting_periode') echo 'class="active"'; else echo  '';?>">
              <a href="#"><i class="fa fa-circle-o"></i>Pelengkap
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li <?php if($this->uri->segment(1) == 'nilai') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>nilai"><i class="fa fa-circle-o"></i>Skala Nilai</a></li>
                <li <?php if($this->uri->segment(1) == 'setting_periode') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>setting_periode"><i class="fa fa-circle-o"></i>Setting Periode</a></li>
              </ul>
            </li>
            
            
          </ul>
        </li>
         <li <?php if($this->uri->segment(1) == 'informasi') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>informasi"><i class="fa fa-info-circle"></i>Informasi</a></li>

        <li class="treeview <?php if($this->uri->segment(2) == 'laporan_mahasiswa' OR $this->uri->segment(2) == 'laporan_dmm' OR $this->uri->segment(2) == 'laporan_transkrip' OR $this->uri->segment(2) == 'laporan_tamu' OR $this->uri->segment(2) == 'laporan_peserta_tes' OR $this->uri->segment(2) == 'laporan_data_getstudent') echo 'active'; else echo  '';?>">
              <a href="#"><i class="fa fa-share"></i><span>Laporan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li <?php if($this->uri->segment(2) == 'laporan_mahasiswa') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>laporan/laporan_mahasiswa"><i class="fa fa-circle-o"></i>Laporan Mahasiswa Per<br> Periode</a>
                </li>
                <li <?php if($this->uri->segment(2) == 'laporan_dmm') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>laporan/laporan_dmm"><i class="fa fa-circle-o"></i>Laporan KRS</a></li>
                <li <?php if($this->uri->segment(2) == 'laporan_transkrip') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>laporan/laporan_khs"><i class="fa fa-circle-o"></i>Laporan KHS <br>
                  <li><a href="<?php echo base_url(); ?>laporan/laporan_transkrip"><i class="fa fa-circle-o"></i>Laporan Transkrip</a></li>
                <li <?php if($this->uri->segment(2) == 'laporan_tamu') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>laporan/laporan_tamu"><i class="fa fa-circle-o"></i>Laporan Tamu</a></li>
                <li <?php if($this->uri->segment(2) == 'laporan_peserta_tes') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>laporan/laporan_peserta_tes"><i class="fa fa-circle-o"></i>Laporan Peserta Tes</a></li>
                <li <?php if($this->uri->segment(2) == 'laporan_data_getstudent') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>laporan/laporan_data_getstudent"><i class="fa fa-circle-o"></i>Laporan Student Get <br>Student</a></li>
              </ul>
            </li>
          <?php } ?>
        
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


  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

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



<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.min.js"></script>

<!-- Page specific script -->
<!-- <script>
  
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        };

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex: 1070,
          revert: true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        });

      });
    }

    ini_events($('#external-events div.external-event'));

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'day'
      },
       eventClick:  function(event, jsEvent, view) {
                    $('#modalTitle').html(event.title);
                    $('#modalBody').html(event.description);
                    $('#eventUrl').attr('href',event.url);
                    $('#fullCalModal').modal();
                    return false;
                },
      //Random default events
      events: <?php echo $calendar;?>,
      editable: false,
      droppable: false, // this allows things to be dropped onto the calendar !!!
      drop: function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject');

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject);

        // assign it the date that was reported
        copiedEventObject.start = date;
        copiedEventObject.allDay = allDay;
        copiedEventObject.backgroundColor = $(this).css("background-color");
        copiedEventObject.borderColor = $(this).css("border-color");

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

        // is the "remove after drop" checkbox checked?
        

      }


    });
    
  });
</script> -->

<!-- Bootstrap 3.3.6 -->
<!-- InputMask -->
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->

<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>
