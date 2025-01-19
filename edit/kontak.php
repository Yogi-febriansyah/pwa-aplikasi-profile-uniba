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
$result = mysqli_query($conn, "SELECT * FROM kontak WHERE id = '$id'");
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
            <form action="../controllerEdit/kontak.php" method="POST">
                <div class="mb-3" style="display: none;">
                    <input type="text" name="id" value="<?= $data['id'] ?>">
                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" name="lokasi" value="<?= $data['lokasi'] ?>" id="lokasi">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $data['alamat'] ?>" id="alamat">
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">+62 (0328)</span>
                        <input type="number" class="form-control" name="telepon" value="<?= $data['telepon'] ?>" id="telepon">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="whatsapp" class="form-label">Whatsapp</label>
                    <input type="text" class="form-control" name="wa" value="<?= $data['wa'] ?>" id="whatsapp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?= $data['email'] ?>" id="email">
                </div>
                <div class="mb-3">
                    <label for="web" class="form-label">Web</label>
                    <input type="text" class="form-control" name="web" value="<?= $data['web'] ?>" id="web">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="../backend/kontak.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include('../template/footer_admin.php');
?>