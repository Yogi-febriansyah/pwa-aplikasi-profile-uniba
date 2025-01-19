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
include('../controllerEdit/data_kalender.php');
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
            <form action="../controllerEdit/data_kalender.php?id=<?= $data['id'] ?>" method="POST">
            <div class="mb-3">
                        <label for="event_description" class="form-label">Nama Kegiatan</label>
                        <select name="event_description" id="event_description" class="form-control">
                            <option value="<?= $data['event_description'] ?>">Data sudah terisi</option>
                            <option value="L">Libur Nasional</option>
                            <option value="S">Libur Semester</option>
                            <option value="M">KRS/KHS</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tanggal</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" value="<?= $data['start_date'] ?>" name="start_date" required>
                            <span class="input-group-text">s/d</span>
                            <input type="date" class="form-control" value="<?= $data['end_date'] ?>" name="end_date" required>
                        </div>
                    </div>
                <button type="submit" name="ubah" class="btn btn-warning">Ubah</button>
                <a href="../backend/data_kalender.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include('../template/footer_admin.php');
?>