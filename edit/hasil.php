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
$result = mysqli_query($conn, "SELECT * FROM hasil WHERE id = '$id'");
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
            <form action="../controllerEdit/hasil.php" method="POST">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                <div class="mb-3">
                    <label for="penelitian" class="form-label">Hasil Penelitian</label>
                    <input type="text" class="form-control" value="<?= $data['penelitian']; ?>" name="penelitian" id="penelitian">
                </div>
                <div class="mb-3">
                    <label for="dosen" class="form-label">Dosen Ketua</label>
                    <input type="text" class="form-control" value="<?= $data['dosen']; ?>" name="dosen" id="dosen">
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="date" class="form-control" value="<?= $data['tahun']; ?>" name="tahun" id="tahun">
                </div>
                <button type="submit" name="ubah" class="btn btn-warning">Ubah</button>
                <a href="../backend/hasil.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include('../template/footer_admin.php');
?>