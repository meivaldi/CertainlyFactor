<?php
  require_once "config/connection.php";
  session_start();

  if(isset($_SESSION['username']) == NULL){
    header("Location: login.php");
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

  <title>Certainly Factor</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <style type="text/css">
    .scroll {
      width: auto;
      height: 260px;
      overflow: scroll;
    }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background: gray">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Certainly Factor</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu Utama
      </div>

      <?php

      if ($_SESSION['level'] == 'admin') {
        $html = '<li class="nav-item">
          <a class="nav-link" href="data_kerusakan.php">
            <i class="fas fa-fw fa-heart-broken"></i>
            <span>Data Kerusakan</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="data_gejala.php">
            <i class="fas fa-fw fa-medkit"></i>
            <span>Data Gejala</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="data_aturan.php">
            <i class="fas fa-fw fa-book"></i>
            <span>Data Aturan</span></a>
        </li>';

        echo $html;
      } else {
        $html = '<li class="nav-item">
          <a class="nav-link" href="diagnosa.php">
            <i class="fas fa-fw fa-stethoscope"></i>
            <span>Diagnosa</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="info_kerusakan.php">
            <i class="fas fa-fw fa-info"></i>
            <span>Info Kerusakan</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="bantuan.php">
            <i class="fas fa-fw fa-question"></i>
            <span>Bantuan</span></a>
        </li>';

        echo $html;
      }
      
      ?>
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
            <i class="fa fa-bars" style="color: gray;"></i>
          </button>

          <h1 class="h3 mb-0 text-gray-800">Diagnosa</h1>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['name']; ?></span>
                <img class="img-profile rounded-circle" src="./img/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">
            <div class="container">
              <form method="POST" id="myForm" action="diagnosa_act.php">
                <div class="form-group">
                  <?php
                    $sql = "SELECT kode_pc FROM komputer ORDER BY kode_pc DESC LIMIT 1";
                    $query = $connect->query($sql);
                    $hasil = $query->fetch_array();

                    $result = $hasil['kode_pc'];
                    
                    if ($result == null) {
                      $number = 0;
                    } else {
                      $number = substr($result, 2, 2);
                    }

                    if (strlen($number) < 2) {
                      $number = "PC0" . ($number + 1);
                    } else {
                      $number = "PC" . ($number + 1);
                    }
                  ?>
                  <label for="kodePC">Kode PC</label>
                  <input type="text" class="form-control" id="kodePC" placeholder="Kode PC" name="kodePC" value="<?php echo $number; ?>">
                </div>
                <div class="form-group">
                  <label for="namaPC">Nama PC</label>
                  <input type="text" class="form-control" id="namaPC" placeholder="Nama PC" name="namaPC">
                </div>
                <div class="form-group">
                  <label for="tahun">Pilih Tahun</label>
                  <select id="tahun" class="form-control" name="tahun">
                    <option selected>2019</option>
                    <option>2018</option>
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                    <option>2014</option>
                    <option>2013</option>
                    <option>2012</option>
                    <option>2011</option>
                    <option>2010</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="spesifikasi">Spesifikasi</label>
                  <div class="input-group">
                    <textarea name="spesifikasi" class="form-control" aria-label="spesifikasi" style="height: 150px;"></textarea>
                  </div>
                </div>
                <div class="form-group" style="margin-top: 50px;">
                  <label for="pilihGejala">Pilih Gejala</label>
                  <div class="scroll">
                  <?php

                    $sql = "SELECT kode_gejala, nama_gejala FROM gejala";
                    $query = $connect->query($sql);

                    while ($row = $query->fetch_array()) {
                      echo "<div class='form-check' id='pilihGejala'>
                        <input class='form-check-input' type='checkbox' value=".$row['kode_gejala']." id=".$row['kode_gejala']." name='gejala[]'>
                        <label class='form-check-label' for=".$row['kode_gejala'].">
                          ".$row['nama_gejala']."
                        </label>
                      </div>";
                    }

                  ?>
                  </div>
                </div>
                <button class="btn btn-default" style="margin-bottom: 25px; background: #ffab00; color: white;" data-toggle="modal" data-target="#tambahData">Diagnosa</button>
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Certainly Factor 2019</span>
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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Yakin Mau Keluar?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

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

</body>

</html>
