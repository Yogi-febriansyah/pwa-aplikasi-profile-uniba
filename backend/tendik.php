<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator - Tendik</title>
<?php
include('../controllerBackend/tendik.php');
include('../template/header_admin.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tendik</h1>
    </div>
    <a href="../tambah/tendik.php" class="btn btn-info mb-3"><i class="fas fa-fw fa-plus"></i> Tambah</a>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table" width="100%">
                <thead>
                    <tr>
                        <th width="7%" scope="col">No</th>
                        <th width="49%" scope="col">Nama</th>
                        <th width="29%" scope="col">Jabatan</th>
                        <th width="15%" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    while ($t = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <th class="m-1" scope="row"><?= $no++ ?></th>
                        <td class="m-1" ><?= $t['nama'] ?></td>
                        <td class="m-1" ><?= $t['jabatan'] ?></td>
                        <td>
                            <a href="../edit/tendik.php?id=<?= $t['id'] ?>" type="button" class="btn btn-warning m-1">
                                <i class="fas fa-fw fa-pencil-alt"></i>
                            </a>
                            <a href="tendik.php?action=hapus&id=<?= $t['id'] ?>" class="btn btn-danger m-1" type="button">
                                <i class="fas fa-fw fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                    <?php } 
                    if(mysqli_num_rows($result) == 0) {
                        echo "<tr><td colspan='4' align='center'><b>Belum ada data yang dibuat</b></td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include('../template/footer_admin.php');
?>