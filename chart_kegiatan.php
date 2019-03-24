<?php
    function tanggal_sekarang($time=FALSE)
    {
        date_default_timezone_set('Asia/Jakarta');
        $str_format='';
        if($time==FALSE)
        {
            $str_format= date("Y-m-d");
        }else{
            $str_format= date("Y-m-d H:i:s");
        }
        return $str_format;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="bpk2.jpg">
  <title>Sistem Kegiatan BPK</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- JS Calendar -->
  <link href="fullcalender/lib/cupertino/jquery-ui.min.css" rel="stylesheet" type="text/css" />
  <link href="fullcalender/fullcalendar.css" rel="stylesheet" type="text/css" />
  <link href="fullcalender/fullcalendar.print.css" rel="stylesheet" type="text/css" media="print" /> 

</head>

<style>
	#calendar {
		max-width: 700px;
		margin: 0 auto;
	}
</style>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="">
          <img class="image-circle" src="bpk2.jpg" width="45">
        </div>
        <div class="sidebar-brand-text mx-3">SISKEG<!--<sup>2</sup>--></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pegawai</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Unit Kerja:</h6>
                <a class="collapse-item" href="data_bpk.php">BPK</a>
                <a class="collapse-item" href="data_ti.php">TI</a>
            <h6 class="collapse-header">Pegawai:</h6>
                <a class="collapse-item" href="data_pegawai.php">Pegawai</a>
                <a class="collapse-item" href="data_jadwal_pegawai.php">Jadwal Pegawai</a>
          </div>
        </div>
      </li>
      

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-folder"></i>
          <span>Kegiatan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="data_jenis_kegiatan.php">Jenis Kegiatan</a>
            <a class="collapse-item" href="data_tema_kegiatan.php">Tema Kegiatan</a>
            <a class="collapse-item" href="data_jadwal_kegiatan.php">Jadwal Kegiatan</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Kalender
      </div>

      <!-- Nav Charts - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="chart_pegawai.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Pegawai</span></a>
      </li>

      <!-- Nav Charts - Pages Collapse Menu -->
      <li class="nav-item active">
            <a class="nav-link" href="chart_kegiatan.php">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Kegiatan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
              Badan Permeriksa Keuangan RI
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!--ISI DISINI-->


      <div id='loading'>loading...</div>
      <div id='calendar'></div>

        <!--Akhir Isi-->
      <!-- Footer -->
      
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

  <!-- JavaScript Calendar -->
  <script src="fullcalender/lib/moment.min.js" type="text/javascript"></script>
  <script src="fullcalender/lib/jquery.min.js" type="text/javascript"></script>
  <script src="fullcalender/lib/jquery-ui.custom.min.js" type="text/javascript"></script>
  <script src="fullcalender/fullcalendar.min.js" type="text/javascript"></script>

</body>

<script>
$(document).ready(function() {

$('#calendar').fullCalendar({
    
    theme:true,
    displayEventTime: false,
    nextDayThreshold: '00:00:00',
    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
    },
    defaultDate: '<?=tanggal_sekarang();?>',
    editable: true,
    eventLimit: true,
    events: {
        url: 'data.php',				
    },
    loading: function(bool) {
        $('#loading').toggle(bool);
    }
});

});

</script>

</html>
