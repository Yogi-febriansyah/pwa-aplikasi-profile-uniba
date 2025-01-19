<?php
include('../controller/kontak_control.php');
include('../template/header.php');
?>

<!-- container start -->
<div class="container-fluid m-0">
    <!-- content start -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
              <h3 class="m-3 text-bold">Kontak</h3>
              <hr>
              <?php if(mysqli_num_rows($kontak) == 0) {
                    echo "<h6 class='justify-content-center'>Belum ada data kontak yang dimasukkan saat ini</h6>";
                } else { ?>
              <div class="row">
                <div class="col-md-6 mb-5 mt-3">
                    <h3 class="mb-3 mb-4">LOKASI</h3>
                    <div class="ratio ratio-16x9">
                        <iframe class="radius" src="<?= $data['lokasi'] ?>" title="Lokasi" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mt-3">
                    <h3 class="mb-3 mb-4">INFO KONTAK</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="text-success">ALAMAT</h5>
                            <p><?= $data['alamat'] ?></p>
                            <hr>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="text-success">TELEPON</h5>
                            <p>+62 (0328) <?= $data['telepon'] ?></p>
                            <hr>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="text-success">WHATSAPP</h5>
                            <p><?= $data['wa'] ?></p>
                            <hr>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="text-success">EMAIL</h5>
                            <p><?= $data['email'] ?></p>
                            <hr>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="text-success">WEB</h5>
                            <p><?= $data['web'] ?></p>
                            <hr>
                        </div>
                    </div>
                </div>
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