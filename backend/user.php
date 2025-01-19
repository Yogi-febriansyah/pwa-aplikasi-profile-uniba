<?php

session_start();


if (!isset($_SESSION['id'])) {

    header("Location:../login.php");
    exit();
}

// Ambil data dari session
$nama = $_SESSION['nama'];
$user_id = $_SESSION['id'];

include('../db/koneksi.php');

$sql = "SELECT * FROM users WHERE id != $user_id";
$result = $conn->query($sql);
if(isset($_GET['action']) && $_GET['action'] == 'ubah') {
    $id = $_GET['id'];
    $status = "aktif";
    $data = mysqli_query($conn, "SELECT * FROM users where id = '$id'");
    if(mysqli_num_rows($data)) {
        $ubah_data = mysqli_query($conn, "UPDATE users SET status = '$status' where id = '$id'");
        if(!$ubah_data) {
            die('Query Error '. mysqli_error($conn));
        } else {
            header('location:user.php');
        }
    }
}
if(isset($_GET['action']) && $_GET['action'] == 'hapus') {
    $id_data = $_GET['id_data'];
    $data = mysqli_query($conn, "SELECT * FROM users where id = '$id_data'");
    if(mysqli_num_rows($data)) {
        $ubah_data = mysqli_query($conn, "DELETE FROM users where id = '$id_data'");
        if(!$ubah_data) {
            die('Query Error '. mysqli_error($conn));
        } else {
            header('location:user.php');
        }
    }
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

    <title>Administrator - Kontak</title>
        <!-- Link icon title -->
        <link rel="shortcut icon" href="../asset/img/logo.png" type="image/x-icon">
    <!-- Link Css -->
    <link href="../asset/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="../asset/css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="../asset/img/logo.png" alt="Logo Uniba Madura" width="40">
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../backend/dashboard.php">
                    <i class="fas fa-fw fa-house"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Kelola halaman
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profil</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../backend/sejarah.php">Sejarah</a>
                        <a class="collapse-item" href="../backend/visi_misi.php">Visi & Misi</a>
                        <a class="collapse-item" href="../backend/akreditasi.php">Akreditasi</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Berita</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../backend/informasi.php">Informasi</a>
                        <a class="collapse-item" href="../backend/pengumuman.php">Pengumuman</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseakademik"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <span>Akademik</span>
                </a>
                <div id="collapseakademik" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../backend/sistem_kuliah.php">Sistem Kuliah</a>
                        <a class="collapse-item" href="../backend/pedoman.php">Pedoman Akademik</a>
                        <a class="collapse-item" href="../backend/kalender.php">Kalender Akademik</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsehasil"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-list-check"></i>
                    <span>Penelitian & Pengabdian</span>
                </a>
                <div id="collapsehasil" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../backend/panduan.php">Panduan</a>
                        <a class="collapse-item" href="../backend/hasil.php">Hasil</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetenaga"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-chalkboard-user"></i>
                    <span>Tenaga Kerja</span>
                </a>
                <div id="collapsetenaga" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../backend/dosen.php">Dosen</a>
                        <a class="collapse-item" href="../backend/tendik.php">Tendik</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../backend/fasilitas.php">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Fasilitas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../backend/kontak.php">
                    <i class="fas fa-fw fa-id-card"></i>
                    <span>Kontak</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Validasi
            </div>
            <!-- Nav Item - Menu -->
            <li class="nav-item">
                <a class="nav-link" href="../backend/user.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>User</span></a>
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
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $nama ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../asset/img/nophoto.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
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
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kontak</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th  scope="col">No</th>
                        <th  scope="col">Nama</th>
                        <th  scope="col">Username</th>
                        <th  scope="col">Email</th>
                        <th  scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while($u = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <th class="m-1" scope="row"><?= $no++ ?></th>
                        <td class="m-1" ><?= $u['nama'] ?></td>
                        <td class="m-1" ><?= $u['username'] ?></td>
                        <td class="m-1"><?= $u['email'] ?></td>
                        <td>
                            <?php if($u['status'] == 'tidak') { ?>
                            <a href="user.php?action=ubah&id=<?= $u['id'] ?>" type="button" class="btn btn-success m-1">
                                <i class="fas fa-fw fa-check"></i>
                            </a>
                            <?php } ?>
                            <a href="user.php?action=hapus&id_data=<?= $u['id'] ?>" class="btn btn-danger m-1" type="button">
                                <i class="fas fa-fw fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                    <?php } 
                    if(mysqli_num_rows($result) == 0) {
                        echo "<tr><td colspan='5' align='center'><b>Belum ada user yang mendaftar</b></td></tr>";
                    }
                    ?>
                </tbody>
            </table>
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
                        <span>Copyright &copy; Universitas Bahaudin Mudhary Madura 2024</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah Anda yakin ingin logout. Jika anda logout anda tidak bisa masuk pada halaman ini lagi.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout_control.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Script JS -->
    <script src="../asset/js/jquery.min.js"></script>
    <script src="../asset/js/boot.bundle.min.js"></script>
    <script src="../asset/jquery.easing.min.js"></script>
    <script src="../asset/js/sb-admin-2.min.js"></script>
    <script src="../asset/js/Chart.min.js"></script>
    <script src="../asset/js/demo/chart-area-demo.js"></script>
    <script src="../asset/js/demo/chart-pie-demo.js"></script>

</body>

</html>