<?php
include('../controller/informasi_control.php');
include('../template/header.php');
?>

<!-- container start -->
<div class="container-fluid m-0">
    <!-- content start -->
    <div class="content">
        <div class="row">
          <div class="col-md-12">
              <h3 class="m-3 text-bold">INFORMASI</h3>
              <hr>
              <?php if(mysqli_num_rows($result) == 0) { ?>
                    <div class="w-100">
                        <h1 class="d-flex justify-content-center align-items-center">Belum ada data dosen saat ini</h1>
                    </div>
                <?php } else { ?>
              <div class="row row-cols-1 row-cols-md-4 g-3 mb-3">
              <?php while($data = mysqli_fetch_array($result)) {
                    if ($data['foto']) {
                        $foto = '../photo/'.$data['foto'];
                    } else {
                        $foto = '../asset/img/logo.png';
                    }
                    $teks = $data['judul'];
                    if(strlen($teks) > 25) {
                      $judul = substr($teks, 0, 25)."[..]";
                    } else {
                      $judul = $teks;
                    }
                    ?>
                  <div class="col">
                    <div class="card bg-content">
                      <img src="<?= $foto ?>" class="card-img-top" height="250px alt="gambar">
                      <hr>
                      <div class="card-body">
                        <h5 class="card-title mt-0"><?= $judul ?></h5>
                        <a href="detail_informasi.php?id=<?= $data['id'] ?>" class="">Detail</a>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
              </div>
              <?php } ?>
          </div>
        </div>
    </div>
    <!-- content end -->
</div>
<!-- container end -->


<?php
include('../template/footer.php');
?>