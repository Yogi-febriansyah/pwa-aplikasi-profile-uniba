<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator - Pedoman</title>
<?php
include('../controllerBackend/pedoman.php');
include('../template/header_admin.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pedoman</h1>
    </div>
        <a href="#" data-toggle="modal" data-target="#tambahModal" class="btn btn-info mb-3"><i
        class="fas fa-fw fa-plus"></i> Tambah</a>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table" width="100%">
                <thead>
                    <tr>
                        <th width="7%" scope="col">No</th>
                        <th scope="col">File Pedoman</th>
                        <th scope="col">Tanggal Awal</th>
                        <th scope="col">Tanggal Akhir</th>
                        <th width="15%" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    while ($p = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <th class="m-1" scope="row"><?= $no++ ?></th>
                        <td class="m-1" ><?= $p['file'] ?></td>
                        <td><?= $p['awal'] ?></td>
                        <td><?= $p['akhir'] ?></td>
                        <td>
                            <a href="../edit/pedoman.php?id=<?= $p['id'] ?>" class="btn btn-warning m-1" type="button">
                                <i class="fas fa-fw fa-pen"></i>
                            </a>
                            <a href="pedoman.php?action=hapus&id=<?= $p['id'] ?>" class="btn btn-danger m-1" type="button">
                                <i class="fas fa-fw fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                    <?php }
                    if(mysqli_num_rows($result) == 0) {
                        echo "<tr><td colspan='5' align='center'><b>Belum ada data yang dibuat</b></td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- tambah Modal-->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pedoman</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../controllerTambah/pedoman.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="awal" class="form-label">Tanggal Awal</label>
                        <input type="date" class="form-control" id="awal" name="awal">
                    </div>
                    <div class="mb-3">
                        <label for="akhir" class="form-label">Tanggal Akhir</label>
                        <input type="date" class="form-control" id="akhir" name="akhir">
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">File Pedoman</label>
                        <input type="file" class="form-control" id="file" name="file" required>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" name="simpan">Simpan</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<?php
include('../template/footer_admin.php');
?>