<?php
   include ("koneksi.php");
   
   $kuery="select * from jadwal_kegiatan_pegawai";
   $hasil=mysqli_query($konek,$kuery);
  
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

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

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
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pegawai</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Unit Kerja:</h6>
                <a class="collapse-item" href="data_bpk.php">BPK</a>
                <a class="collapse-item" href="data_ti.php">TI</a>
            <h6 class="collapse-header">Pegawai:</h6>
                <a class="collapse-item" href="data_pegawai.php">Pegawai</a>
                <a class="collapse-item active" href="data_jadwal_pegawai.php">Jadwal Pegawai</a>
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
      <li class="nav-item">
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
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-sm-6">
                       <h2 class="m-0 font-weight-bold text-primary">Jadwal Pegawai</h2>
                    </div>
                    <div class="col-sm-6" align="right">
                        <a href="tambah_jadwal_pegawai.php" class="btn btn-success">Tambah</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr align="center">
                      <td width="5%">NO.</td>
                      <td width="10%">ID</td>
                      <td width="10%">ID PEGAWAI</td>
                      <td width="13%">ID JADWAL KEGIATAN</td>
                      <td width="18%">TANGGAL BERANGKAT</td>
                      <td width="15%">TANGGAL PULANG</td>
                      <td width="10%">AKSI</td>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr align="center">
                      <td width="5%">NO.</td>
                      <td width="10%">ID</td>
                      <td width="10%">ID PEGAWAI</td>
                      <td width="13%">ID JADWAL KEGIATAN</td>
                      <td width="18%">TANGGAL BERANGKAT</td>
                      <td width="15%">TANGGAL PULANG</td>
                      <td width="10%">AKSI</td>
                    </tr>
                  </tfoot>
                                      
                    <?php
                        $nomer=0;
                        while($isi=mysqli_fetch_array($hasil))
                        {
                          $nomer++;
                    ?>

                  <tbody>
                    <tr align="center"> 
                      <td><?php echo $nomer;?></td>
                      <td><?php echo $isi[0];?></td>
                      <td><?php echo $isi[1];?></td>
                      <td><?php echo $isi[2];?></td>
                      <td><?php echo $isi[3];?></td>
                      <td><?php echo $isi[4];?></td>
                      <td>
                          <?php echo"<a href='edit_jadwal_pegawai.php?id=$isi[0]' class='btn btn-success'>Edit</a>";?>
                          <?php echo"<a href='hapus_jadwal_pegawai.php?id=$isi[0]' class='btn btn-danger'>Hapus</a>";?>
                      </td>
                    </tr>
                  </tbody>
                        <?php } ?>
                </table>
              </div>
            </div>
          </div>

        <!--Akhir Isi-->
    
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; BPK 2019</span>
          </div>
        </div>
      </footer>
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


  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
