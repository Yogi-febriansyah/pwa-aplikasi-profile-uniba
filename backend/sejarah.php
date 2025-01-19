<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator - Sejarah</title>
<?php
include('../controllerBackend/sejarah.php');
include('../template/header_admin.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sejarah</h1>
    </div>
    <?php if(mysqli_num_rows($result) <= 3) { ?>
    <a href="../tambah/sejarah.php" class="btn btn-info mb-3"><i class="fas fa-fw fa-plus"></i> Tambah</a>
    <?php } ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table" width="100%">
                <thead>
                    <tr>
                        <th width="7%" scope="col">No</th>
                        <th width="78%" scope="col">Paragraf</th>
                        <th width="15%" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                while($p = $result->fetch_assoc()) { 
                    $paragraf = $p['paragraf'];
                    $panjang_tampilkan = 80;
                    $singkat = substr($paragraf, 0, $panjang_tampilkan);
                ?>
                    <tr>
                        <th class="m-1" scope="row"><?= $no++ ?></th>
                        <td class="m-1" ><?= $singkat ?></td>
                        <td>
                            <a href="../edit/sejarah.php?iya=<?= $p['id'] ?>" type="button" class="btn btn-warning m-1">
                                <i class="fas fa-fw fa-pencil-alt"></i>
                            </a>
                            <a href="sejarah.php?action=hapus&id=<?= $p['id'] ?>" class="btn btn-danger m-1" type="button">
                                <i class="fas fa-fw fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                    <?php }
                if(mysqli_num_rows($result) == 0) {
                    echo "<tr><td colspan='3' align='center'><b>Belum ada pargraf yang dibuat</b></td></tr>";
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