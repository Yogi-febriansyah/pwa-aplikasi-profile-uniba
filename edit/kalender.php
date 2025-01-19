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
$result = mysqli_query($conn, "SELECT * FROM kalender WHERE id = '$id'");
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
            <form action="../controllerEdit/kalender.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <div class="mb-3">
                    <label for="semester" class="form-label">Semeseter</label>
                    <select name="semester" id="semester" class="form-control">
                        <option value="<?= $data['semester']?>">Sudah Ada Semester Yang Dipilih</option>
                        <option value="Ganjil">Ganjil</option>
                        <option value="Genap">Genap</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun Ajaran</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="mulai" value="<?= $data['mulai']?>">
                        <span class="input-group-text">s/d</span>
                        <input type="number" class="form-control" name="sampai" value="<?= $data['sampai']?>">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="file" class="form-label">File Kalender</label>
                        </div>
                    </div>
                    <small>Nama dokumen lama : <?= $data['file']?></small>
                    <input class="form-control" type="file" name="file" id="file">
                </div>
                <input type="hidden" name="file_lama" value="<?= $data['file']?>">
                <button type="submit" name="ubah" class="btn btn-warning">Ubah</button>
                <a href="../backend/panduan.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include('../template/footer_admin.php');
?>