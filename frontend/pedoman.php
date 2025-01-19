<?php
include('../controller/pedoman_control.php');
include('../template/header.php');
?>

<!-- container start -->
<div class="container-fluid m-0">
    <!-- content start -->
    <div class="content">
        <div class="row">
            <div class="col-md-9">
                <h3 class="m-3 text-bold">PEDOMAN AKADEMIK</h3>
                <hr>
                <!-- <div class="mb-3">
                    <embed src="../file/" width="100%" height="500">
                </div> -->
                <h5 class="text-center mt-5 mb-3">Data Pedoman Akademik</h5>
                <table class="table table-bordered">
                    <thead class="table-success">
                        <tr style="text-align: center; vertical-align: middle;">
                        <th scope="col" rowspan="2" width="10%">No.</th>
                        <th scope="col" rowspan="2">Nama Dokumen</th>
                        <th scope="col" colspan="2">Tanggal Berlaku</th>
                        <th scope="col" rowspan="2">Unduhan</th>
                        </tr>
                        <tr style="text-align: center; vertical-align: middle;">
                            <th>Tanggal Awal</th>
                            <th>Tanggal Akhir</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php 
                            $no = 1;
                        while($data = mysqli_fetch_array($pedoman)) {
                            $file_name = $data['file'];
                            $file_info = pathinfo($file_name);
                            $nama_file = $file_info['filename'];

                            $awal = $data['awal'];
                            $tanggal_awal = strftime("%d %B %Y", strtotime($awal));

                            $akhir = $data['akhir'];
                            $tanggal_akhir = strftime("%d %B %Y", strtotime($akhir));
                        ?>
                        <tr style="text-align: center; vertical-align: middle;">
                        <td><?= $no++ ?></td>
                        <td><?= $nama_file ?></td>
                        <td><?= $tanggal_awal ?></td>
                        <td><?= $tanggal_akhir ?></td>
                        <td><a href="../file/<?= $data['file'] ?>" target="_blank"><span class="badge text-bg-primary">unduh</span></a></td>
                        </tr>
                        <?php }
                        if(mysqli_num_rows($pedoman) == 0) {
                            echo "<tr><td colspan='4' align='center'><b>Belum ada data yang dibuat</b></td></tr>";
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