<?php
include('../controller/akreditasi_control.php');
include('../template/header.php');
?>

<!-- container start -->
<div class="container-fluid m-0">
    <!-- content start -->
    <div class="content">
        <div class="row">
            <div class="col-md-9">
              <h3 class="m-3 text-bold">Akreditasi</h3>
              <hr>
              <h5 class="mb-3">Akreditasi uniba Madura</h5>
              <table class="table table-hover">
                <thead>
                    <tr> 
                        <th width="10">No.</th>
                        <th class="text-center">Akreditasi</th>
                        <th>No SK</th>
                        <th>Masa Berlaku sampai</th>
                        <th>Unduhan</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    <?php
                    $no = 1;
                    while($a = mysqli_fetch_array($result)) {
                    $tanggal = $a['masa'];

                    $date = strftime("%d %B %Y", strtotime($tanggal));
                     ?>
                    <tr> 
                        <td>1</td> 
                        <td class="text-center"><?= $a['akreditasi'] ?></td> 
                        <td><?= $a['nosk'] ?></td> 
                        <td><p><?= $date ?></p> </td> 
                        <td><a href="../file/<?= $a['file'] ?>" target="_blank"><span class="badge text-bg-primary">unduh</span></a></td> 
                    </tr> 
                    <?php } 
                    if(mysqli_num_rows($result) == 0) {
                        echo "<tr><td colspan='5' align='center'><b>Belum ada data yang dibuat</b></td></tr>";
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