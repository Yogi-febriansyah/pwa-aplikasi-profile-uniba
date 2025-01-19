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
$result = mysqli_query($conn, "SELECT * FROM akreditasi WHERE id = '$id'");
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
            <form action="../controllerEdit/akreditasi.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">
            <div class="mb-3">
                    <label for="akreditasi" class="form-label">Akreditasi</label>
                    <input type="text" class="form-control" name="akreditasi" value="<?= $data['akreditasi']; ?>" id="akreditasi" required>
                </div>
                <div class="mb-3">
                    <label for="nosk" class="form-label">No SK</label>
                    <input type="text" class="form-control" name="nosk" value="<?= $data['nosk']; ?>" id="nosk" required>
                </div>
                <div class="mb-3">
                    <label for="masa" class="form-label">Masa Berlaku</label>
                    <input type="date" class="form-control" name="masa" value="<?= $data['masa']; ?>" id="masa" required>
                </div>
                <div class="mb-3">
                <div class="row">
                        <div class="col-md-12">
                            <label for="foto" class="form-label">Foto</label>
                        </div>
                    </div>
                    <small>Data Lama : <?= $data['file'] ?></small>
                    <input type="file" class="form-control" name="file" id="file">
                </div>
                <input type="hidden" name="file_lama" value="<?= $data['file']; ?>">
                <button type="submit" name="ubah" class="btn btn-warning">Ubah</button>
                <a href="../backend/akreditasi.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include('../template/footer_admin.php');
?>