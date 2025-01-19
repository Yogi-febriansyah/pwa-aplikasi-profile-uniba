<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator - Kontak</title>
<?php
include('../controllerBackend/kontak.php');
include('../template/header_admin.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kontak</h1>
    </div>
    <?php if(mysqli_num_rows($result) == 0) { ?>
        <a href="../tambah/kontak.php" class="btn btn-info mb-3"><i class="fas fa-fw fa-plus"></i> Tambah</a>
    <?php } ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th  scope="col">Lokasi</th>
                        <th  scope="col">Alamat</th>
                        <th  scope="col">Telepon</th>
                        <th  scope="col">Web</th>
                        <th  scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($k = $result->fetch_assoc()) { 
                    $lokasi = $k['lokasi'];
                    $panjang = 20;
                    $singkat = substr($lokasi, 0, $panjang);
                    $alamat = $k['alamat'];
                    $kata = 18;
                    $pendek = substr($alamat, 0, $kata);
                ?>
                    <tr>
                        <td class="m-1"><?= $singkat ?></td>
                        <td class="m-1" ><?= $pendek ?></td>
                        <td class="m-1" >+62 (0328) <?= $k['telepon']; ?></td>
                        <td class="m-1"><?= $k['web']; ?></td>
                        <td>
                            <a href="../edit/kontak.php?id=<?= $k['id']; ?>" type="button" class="btn btn-warning m-1">
                                <i class="fas fa-fw fa-pencil-alt"></i>
                            </a>
                            <a href="kontak.php?action=hapus&id=<?= $k['id'] ?>" class="btn btn-danger m-1" type="button">
                                <i class="fas fa-fw fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                    <?php }
                    if(mysqli_num_rows($result) == 0) {
                        echo "<tr><td colspan='7' align='center'><b>Belum ada data kontak yang dibuat</b></td></tr>";
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