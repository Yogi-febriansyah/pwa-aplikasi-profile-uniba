<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator - Visi & Misi</title>
<?php
include('../controllerBackend/visi_misi.php');
include('../template/header_admin.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Visi & Misi</h1>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <a href="../tambah/visi.php" class="btn btn-info mb-3"><i class="fas fa-fw fa-plus"></i> Tambah</a>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Visi</h6>
                </div>
                <div class="card-body">
                    <table class="table" width="100%">
                        <thead>
                            <tr>
                                <th width="10%" scope="col">No</th>
                                <th scope="col">Visi</th>
                                <th width="35%" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                while ($visi = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <th class="m-1" scope="row"><?= $no++ ?></th>
                                <td class="m-1" ><?= $visi['visi'] ?></td>
                                <td>
                                    <a href="../edit/visi.php?id=<?= $visi['id'] ?>" type="button" class="btn btn-warning m-1">
                                        <i class="fas fa-fw fa-pencil-alt"></i>
                                    </a>
                                    <a href="visi_misi.php?action=hapus&id=<?= $visi['id'] ?>" class="btn btn-danger m-1" type="button">
                                        <i class="fas fa-fw fa-trash-can"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } 
                            if(mysqli_num_rows($result) == 0) {
                                echo "<tr><td colspan='3' align='center'><b>Belum ada visi yang dibuat</b></td></tr>";
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <a href="../tambah/misi.php" class="btn btn-info mb-3"><i class="fas fa-fw fa-plus"></i> Tambah</a>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Misi</h6>
                </div>
                <div class="card-body">
                    <table class="table" width="100%">
                        <thead>
                            <tr>
                                <th width="10%" scope="col">No</th>
                                <th scope="col">Misi</th>
                                <th width="35%" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                while ($misi = mysqli_fetch_array($result2)) { ?>
                            <tr>
                                <th class="m-1" scope="row"><?= $no++ ?></th>
                                <td class="m-1" ><?= $misi['misi'] ?></td>
                                <td>
                                    <a href="../edit/misi.php?id=<?= $misi['id'] ?>" type="button" class="btn btn-warning m-1">
                                        <i class="fas fa-fw fa-pencil-alt"></i>
                                    </a>
                                    <a href="visi_misi.php?action=hapus_data&id_data=<?= $misi['id'] ?>" class="btn btn-danger m-1" type="button">
                                        <i class="fas fa-fw fa-trash-can"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } 
                            if(mysqli_num_rows($result) == 0) {
                                echo "<tr><td colspan='3' align='center'><b>Belum ada misi yang dibuat</b></td></tr>";
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php
include('../template/footer_admin.php');
?>