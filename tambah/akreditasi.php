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
            <form action="../controllerTambah/akreditasi.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="akreditasi" class="form-label">Akreditasi</label>
                    <input type="text" class="form-control" name="akreditasi" id="akreditasi" required>
                </div>
                <div class="mb-3">
                    <label for="nosk" class="form-label">No SK</label>
                    <input type="text" class="form-control" name="nosk" id="nosk" required>
                </div>
                <div class="mb-3">
                    <label for="masa" class="form-label">Masa Berlaku</label>
                    <input type="date" class="form-control" name="masa" id="masa" required>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">File</label>
                    <input type="file" class="form-control" name="file" id="file" required>
                </div>
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                <a href="../backend/akreditasi.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include('../template/footer_admin.php');
?>