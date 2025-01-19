<?php
include('../controller/visimisi_control.php');
include('../template/header.php');
?>

<!-- container start -->
<div class="container-fluid m-0">
    <!-- content start -->
    <div class="content">
        <div class="row">
            <div class="col-md-9">
              <h3 class="m-3 text-bold">Visi & Misi</h3>
              <hr>
              <h5>Visi</h5>
              <ol>
                <?php 
                while($v = mysqli_fetch_array($visi)) { ?>
                    <li><?= $v['visi'] ?></li>
                <?php } ?>
              </ol>
              <?php if(mysqli_num_rows($visi) == 0) {
                    echo "<h6 class='justify-content-center'>Belum ada visi yang diinputkan saat ini</h6>";
                } ?>
              <h5>Misi</h5>
              <ol>
              <?php while($m = mysqli_fetch_array($misi)) { ?>
                    <li><?= $m['misi'] ?></li>
                <?php } ?>
              </ol>
              <?php if(mysqli_num_rows($visi) == 0) {
                    echo "<h6 class='justify-content-center'>Belum ada misi yang diinputkan saat ini</h6>";
                } ?>
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