<?php
include('../controller/hasil.php');
include('../template/header.php');
?>

<!-- container start -->
<div class="container-fluid m-0">
    <!-- content start -->
    <div class="content">
        <div class="row">
            <div class="col-md-9">
                <h3 class="m-3 text-bold">Hasil Penelitian & Pengabdian</h3>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul Penelitian</th>
                        <th scope="col">Dosen Ketua</th>
                        <th scope="col">Tahun</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php 
                        $no = 1;
                        while ($h = mysqli_fetch_array($result)) {
                        $tahun = $h['tahun'];

                        $date = strftime("%d %B %Y", strtotime($tahun));
                        ?>
                        <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $h['penelitian'] ?></td>
                        <td><?= $h['dosen'] ?></td>
                        <td><?= $date ?></td>
                        </tr>
                        <?php } 
                        if(mysqli_num_rows($result) == 0) {
                            echo "<tr><td colspan='4' align='center'><b>Belum ada data yang diinputkan</b></td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3 mb-2">
                <h3 class="m-3 text-bold">INFORMASI</h3>
                <hr>
                    <table>
                        <?php while($query = mysqli_fetch_array($result2)) {
                            $tema = $query['judul'];
                            if(strlen($tema) > 30) {
                              $atas = substr($tema, 0, 30)."[..]";
                            } else {
                              $atas = $tema;
                            }
                        ?>
                            <tr>
                                <td>
                                    <img src="../asset/img/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top ms-1 mx-2">
                                </td>
                                <td>
                                    <p><a href="detail_informasi.php?id=<?= $query['id'] ?>" class="paraf"><?= $atas ?></a></p>
                                </td>
                            </tr>
                        <?php } 
                        if(mysqli_num_rows($result2) == 0) { }
                        ?>
                    </table>
            </div>
        </div>
    </div>
    <!-- content end -->
</div>
<!-- container end -->


<?php
include('../template/footer.php');
?>