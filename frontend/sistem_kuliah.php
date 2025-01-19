<?php
include('../controller/sistem_kuliah_control.php');
include('../template/header.php');
?>

<!-- container start -->
<div class="container-fluid m-0">
    <!-- content start -->
    <div class="content">
        <div class="row">
            <div class="col-md-9">
                <h3 class="m-3 text-bold">SISTEM KULIAH</h3>
                <hr>
                <?php while($p = mysqli_fetch_array($paragraf)) { ?>
                <p class="mb-3 mt-2"><?= $p['paragraf'] ?></p>
                <?php } ?>
                <?php if(mysqli_num_rows($paragraf) == 0) {
                    echo "<h6 class='justify-content-center'>Belum ada sistem kuliah diinputkan saat ini</h6>";
                } ?>
                <p class="mt-2">UNIBA MADURA menerapkan kurikulum yang mengacu pada :</p>
                <ol class="mb-3">
                    <?php while($k = mysqli_fetch_array($kurikulum)) { ?>
                    <li><?= $k['kurikulum'] ?></li>
                    <?php } ?>
                </ol>
                <?php if(mysqli_num_rows($kurikulum) == 0) {
                    echo "<h6 class='justify-content-center'>Belum ada kurikulum diinputkan saat ini</h6>";
                } ?>
            </div>
            <div class="col-md-3">
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