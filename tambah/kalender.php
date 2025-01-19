<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator - Tambah Data</title>
<?php
include('../template/header_admin.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="../controllerTambah/kalender.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="semester" class="form-label">Semeseter</label>
                    <select name="semester" id="semester" class="form-control">
                        <option value="">Silahkan Pilih</option>
                        <option value="Ganjil">Ganjil</option>
                        <option value="Genap">Genap</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun Ajaran</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="mulai" required>
                        <span class="input-group-text">s/d</span>
                        <input type="number" class="form-control" name="sampai" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">File Kalender</label>
                    <input type="file" class="form-control" name="file" required>
                </div>
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                <a href="../backend/kalender.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include('../template/footer_admin.php');
?>