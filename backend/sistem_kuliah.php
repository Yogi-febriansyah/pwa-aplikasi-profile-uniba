<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator - Sistem Kuliah</title>
<?php
include('../controllerBackend/sistem_kuliah.php');
include('../template/header_admin.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sistem Kuliah</h1>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?php if(mysqli_num_rows($result) == 0){ ?>
            <a href="#" data-toggle="modal" data-target="#paragrafModal" class="btn btn-info mb-3"><i class="fas fa-fw fa-plus"></i> Tambah</a>
            <?php } ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                    <table class="table" width="100%">
                        <thead>
                            <tr>
                                <th scope="col">paragraf</th>
                                <th width="35%" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($p = mysqli_fetch_array($result)) {
                                $paragraf = $p['paragraf'];
                                $panjang_tampilkan = 25;
                                $singkat = substr($paragraf, 0, $panjang_tampilkan);
                            ?>
                            <tr>
                                <td class="m-1" ><?= $singkat ?></td>
                                <td>
                                    <a href="../edit/paragraf.php?id=<?= $p['id'] ?>" type="button" class="btn btn-warning m-1">
                                        <i class="fas fa-fw fa-pencil-alt"></i>
                                    </a>
                                    <a href="sistem_kuliah.php?action=hapus&id=<?= $p['id'] ?>" class="btn btn-danger m-1" type="button">
                                        <i class="fas fa-fw fa-trash-can"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <a href="#" data-toggle="modal" data-target="#kurikulumModal" class="btn btn-info mb-3"><i class="fas fa-fw fa-plus"></i> Tambah</a>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                    <table class="table" width="100%">
                        <thead>
                            <tr>
                                <th width="10%" scope="col">No</th>
                                <th scope="col">Kurikulum</th>
                                <th width="35%" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            while($k = mysqli_fetch_array($result2)) {
                                $kurikul = $k['kurikulum'];
                                $panjang = 20;
                                $pendek = substr($kurikul, 0, $panjang);
                                
                            ?>
                            <tr>
                                <th class="m-1" scope="row"><?= $no++ ?></th>
                                <td class="m-1" ><?= $pendek ?></td>
                                <td>
                                    <a href="../edit/kurikulum.php?id=<?= $k['id'] ?>" type="button" class="btn btn-warning m-1">
                                        <i class="fas fa-fw fa-pencil-alt"></i>
                                    </a>
                                    <a href="sistem_kuliah.php?action=hapus_data&id_data=<?= $k['id'] ?>" class="btn btn-danger m-1" type="button">
                                        <i class="fas fa-fw fa-trash-can"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
 <!-- paragraf Modal-->
<div class="modal fade" id="paragrafModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../controllerTambah/paragraf.php" method="POST">
                    <div class="mb-3">
                        <label for="paragraf" class="form-label">Paragraf</label>
                        <input type="text" class="form-control" id="paragraf" name="paragraf" required>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" name="simpan">Simpan</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
 <!-- paragraf Modal-->
<div class="modal fade" id="kurikulumModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../controllerTambah/kurikulum.php" method="POST">
                    <div class="mb-3">
                        <label for="kurikulum" class="form-label">Kurikulum</label>
                        <input type="text" class="form-control" id="kurikulum" name="kurikulum" required>
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