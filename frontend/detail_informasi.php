<?php
include('../db/koneksi.php');
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM informasi WHERE id = '$id'");
$data = mysqli_fetch_array($result);
include('../template/header.php');
?>

<!-- container start -->
<div class="container-fluid m-0">
    <!-- content start -->
    <div class="content">
        <div>
            <h3 class="m-3 text-bold">DETAIL INFORMASI</h3>
            <hr>
            <h4 class="text-center"><?= $data['judul'] ?></h4>
            <div class="d-flex justify-content-center">
                <?php if ($data['foto']) { ?>
                <img src="../photo/<?= $data['foto'] ?>" class="img-fluid mb-3 mt-3" 
                style="height: 400px; width: 80%; border-radius: 4px;" alt="...">
                <?php } else { ?>
                <img src="../asset/img/logo.png" class="img-fluid mb-3 mt-3" 
                style="height: 400px; width: 40%; border-radius: 4px;" alt="...">
                <?php } ?>
            </div>
            <p class="mb-3 mt-2"><?= $data['deskripsi'] ?></p>
        </div>
    </div>
    <!-- content end -->
</div>
<!-- container end -->


<?php
include('../template/footer.php');
?>