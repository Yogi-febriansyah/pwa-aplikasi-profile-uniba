<?php
include('../controller/panduan.php');
include('../template/header.php');
?>

<!-- container start -->
<div class="container-fluid m-0">
    <!-- content start -->
    <div class="content">
        <div class="row">
            <div class="col-md-9">
                <h3 class="m-3 text-bold">PANDUAN PENELITIAN & PENGABDIAN</h3>
                <hr>
                <p>Pengabdian Kepada Masyarakat (PKM)</p>
                <?php while($p = mysqli_fetch_array($result)) { ?>
                <img src="../uploads/<?= $p['foto'] ?>" class="img-fluid w-100 mb-3 mt-3" style="height: 400px; border-radius: 4px;" alt="...">
                <p class="mb-3 mt-2"> <?= $p['deskripsi'] ?></p>
                <?php } ?>
                <?php if(mysqli_num_rows($result) == 0) { ?>
                    <div class="w-100">
                        <h1 class="d-flex justify-content-center align-items-center">Belum ada data yang dimasukkan saat ini</h1>
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
                                <img src="../asset/img/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top ms-1 mx-2">
                            </td>
                            <td>
                                <p><a href="detail_informasi.php?id=<?= $query['id'] ?>" class="paraf"><?= $atas ?></a></p>
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


<?php
include('../template/footer.php');
?>