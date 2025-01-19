<?php include('index_control.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Bahauddin Mudhary Madura - UNIBA MADURA</title>
    <!-- link icon -->
    <link rel="shortcut icon" href="asset/img/logo.png" type="image/x-icon">
    <!-- link css -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
            <img src="asset/img/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top ms-1 mx-2">
          <a class="navbar-brand" href="#"><strong>UNIBA MADURA</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profil
                </a>
                <ul class="dropdown-menu bg-green">
                  <li><a class="dropdown-item" href="frontend/sejarah.php">Sejarah</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="frontend/visi_misi.php">Visi dan Misi</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="frontend/akreditasi.php">Akreditasi</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Berita
                </a>
                <ul class="dropdown-menu  bg-green">
                  <li><a class="dropdown-item" href="frontend/informasi.php">Informasi</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="frontend/pengumuman.php">Pengumuman</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Akademik
                </a>
                <ul class="dropdown-menu  bg-green">
                  <li><a class="dropdown-item" href="frontend/sistem_kuliah.php">Sistem Kuliah</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="frontend/Pedoman.php">Pedoman Akademik</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="frontend/kalender.php">Kalender Akademik</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Penelitian & Pengabdian
                </a>
                <ul class="dropdown-menu bg-green">
                  <li><a class="dropdown-item" href="frontend/panduan.php">Panduan Penelitian & Pengabdian</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="frontend/hasil.php">Hasil Penelitian & Pengabdian</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tenaga Kerja
                </a>
                <ul class="dropdown-menu bg-green">
                  <li><a class="dropdown-item" href="frontend/dosen.php">Dosen</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="frontend/tendik.php">Tendik</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="frontend/fasilitas.php">Fasilitas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="frontend/kontak.php">Kontak</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- navbar end -->
<!-- slide foto start -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="asset/img/uniba.png" class="d-block w-100" alt="gambar">
        </div>
        <div class="carousel-item">
        <img src="asset/img/uniba2.jpeg" class="d-block w-100" alt="gambar">
        </div>
        <div class="carousel-item">
        <img src="asset/img/uniba3.jpeg" class="d-block w-100" alt="gambar">
        </div>
        <div class="carousel-item">
        <img src="asset/img/uniba4.jpeg" class="d-block w-100" alt="gambar">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- slide foto end -->
<!-- container start -->
<div class="container-fluid m-0">
    <!-- content start -->
    <div class="content">
        <div class="row">
            <div class="col-md-9">
                <h3 class="m-3 text-bold">PENGUMUMAN TERBARU</h3>
                <hr>
                <?php if(mysqli_num_rows($result) == 0) { ?>
                    <div class="w-100">
                        <h1 class="d-flex justify-content-center align-items-center">Belum ada data dosen saat ini</h1>
                    </div>
                <?php } else { ?>
                <div class="row">
                    <?php while($data = mysqli_fetch_array($result)) {
                    if ($data['foto']) {
                        $foto = 'photo/'.$data['foto'];
                    } else {
                        $foto = 'asset/img/logo.png';
                    }
                    $teks = $data['judul'];
                    if(strlen($teks) > 25) {
                      $judul = substr($teks, 0, 25)."[..]";
                    } else {
                      $judul = $teks;
                    }
                    ?> 
                    <div class="col-sm-3 m-4">
                      <div class="card bg-content">
                        <img src="<?= $foto ?>" class="card-img-top" alt="gambar">
                        <hr>
                        <div class="card-body">
                          <h5 class="card-title mt-0"><?= $judul ?></h5>
                          <a href="frontend/detail_pengumuman.php?id=<?= $data['id'] ?>" class="">Detail</a>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
                <?php } ?>
            </div>
            <div class="col-md-3 mb-2">
                <h3 class="m-3 text-bold">INFORMASI</h3>
                <hr>
                    <table>
                      <?php while($query = mysqli_fetch_array($result2)) {
                        $tema = $query['judul'];
                        if(strlen($tema) > 30) {
                          $atas = substr($tema, 0, 30)."[..]";
                        } else {
                          $atas = $tema;
                        }
                      ?>
                        <tr>
                            <td>
                                <img src="asset/img/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top ms-1 mx-2">
                            </td>
                            <td>
                                <p><a href="frontend/detail_informasi.php?id=<?= $query['id'] ?>" class="paraf"><?= $atas ?></a></p>
                            </td>
                        </tr>
                      <?php } 
                      if(mysqli_num_rows($result2) == 0) { }
                      ?>
                    </table>
            </div>
        </div>
    </div>
    <!-- content end -->
</div>
<!-- container end -->
<!-- footer start -->
<footer class="footer-style03 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-4 col-lg-3 mt-5">
                    <div class="widget about-widget">
                        <div class="widget-title">
                            <img src="asset/img/logo2.png" width="270" height="40" alt="">
                        </div>
                        <div class="widget-content">
                            <p class="text-white">Universitas Bahaudin Mudhary Madura</p>
                            <ul class="list-unstyled">
                                <li class="text-white"><i class="fa fa-envelope"></i> info@unibamadura.ac.id</li>
                                <li class="text-white"><i class="fa fa-phone"></i> (0328) 6771010</li>
                                <li class="text-white"><i class="fa fa-map-marker"></i> Jl. Raya Lenteng No. 10 Batuan, Sumenep - Madura</li>
                            </ul>
                        </div>
                    </div><!-- ends: .widget -->
                    
                </div><!-- ends: .col-sm-3 -->
                <div class="col-sm-3 col-md-4 col-lg-3 mt-5">
                    <div class="widget links">
                        <div class="widget-title">
                            <h2 class="text-white">Program Studi</h2>
                        </div>
                        <div class="widget-content">
                            <ul class="list-unstyled">
                                <li class="text-white"><p><i class="fa fa-angle-double-right"></i> Akuntasi</p></li>
                                <li class="text-white"><p><i class="fa fa-angle-double-right"></i> Manajemen</p></li>
                                <li class="text-white"><p><i class="fa fa-angle-double-right"></i> Informatika</p></li>
                                <li class="text-white"><p><i class="fa fa-angle-double-right"></i> Teknik Industri Maritim</p></li>
                                <li class="text-white"><p><i class="fa fa-angle-double-right"></i> Sistem Informasi</p></li>                        </ul>
                        </div>
                    </div>
                </div><!-- ends: .col-sm-3 -->
                <div class="col-sm-3 col-md-4 col-lg-3 mt-5">
                    <div class="widget links">
                        <div class="widget-title">
                            <h2 class="text-white">Fakultas</h2>
                        </div>
                        <div class="widget-content">
                            <ul class="list-unstyled">
                                <li  class="text-white"><p><i class="fa fa-angle-double-right"></i> FEB (Fakultas Ekonomi &amp; Bisnis)</p></li>
                                <li  class="text-white"><p><i class="fa fa-angle-double-right"></i> FST (Fakultas Saints &amp; Teknologi)</p></li>                      </ul>
                        </div>
                    </div>
                </div><!-- ends: .col-sm-3 -->
            </div>
        </div>
    </footer>
    <div class="footer-bottom bg-black">
      <div class="container">
          <div class="footer-bottom-inner">
              <div class="row">
                  <div class="col-md-12 col-sm-12">
                      <p class="text-center text-white mt-3">Copyright © 2024 Universitas Bahaudin Mudhary Madura</p>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- footer end -->
    <!-- script js -->
    <script src="asset/js/bootstrap.bundle.js"></script>
</body>
</html>