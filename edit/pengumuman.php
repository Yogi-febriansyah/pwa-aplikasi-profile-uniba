<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator - Ubah Data</title>
<?php
include('../db/koneksi.php');
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM pengumuman WHERE id = '$id'");
$data = mysqli_fetch_array($result);
include('../template/header_admin.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="../controllerEdit/pengumuman.php" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?= $data['id'] ?>">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $data['judul'] ?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"><?= $data['deskripsi'] ?></textarea>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="foto" class="form-label">Foto</label>
                        </div>
                    </div>
                    <?php
                    if ($data['foto']) {
                    ?>
                    <img src="../photo/<?= $data['foto'] ?>" class="mb-2" style="height: 70px" alt="no">
                    <?php } ?>
                    <input class="form-control" type="file" name="foto" id="foto">
                    <div class="form-text">Max 5MB.</div>
                </div>
                <input type="hidden" name="foto_lama" value="<?= $data['foto']?>">
                <button type="submit" name="ubah" class="btn btn-warning">ubah</button>
                <a href="../backend/pengumuman.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include('../template/footer_admin.php');
?>