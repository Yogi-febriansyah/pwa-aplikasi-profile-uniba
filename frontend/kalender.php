<?php
include('../controller/kalender_control.php');
include('../template/header.php');
?>

<!-- container start -->
<div class="container-fluid m-0">
    <!-- content start -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <h3 class="m-3 text-bold">KALENDER AKADEMIK</h3>
                <hr>
                <?php if(mysqli_num_rows($kalender) == 0) { ?>
                    <div class="w-100">
                        <h1 class="d-flex justify-content-center align-items-center">Belum ada kalender terbaru saat ini</h1>
                    </div>
                <?php } else { ?>
                <h4 class="text-center">Kalender Akademik UNIBA Madura</h4>
                <div class="d-flex justify-content-center mb-3 mt-3">
                    <div class="card w-100">
                        <div class="card-header">
                            <div class="mt-4 mb-4 d-flex justify-content-center">
                                <a href="?bulan=<?php echo $bulan == 1 ? 12 : $bulan - 1; ?>&tahun=<?php echo $bulan == 1 ? $tahun - 1 : $tahun; ?>" class="btn btn-primary mr-auto">
                                    <i class="fa fa-arrow-left"></i>
                                </a>
                                <h2 class="text-center"><?php echo $nama_bulan . ' ' . $tahun; ?></h2>
                                <a href="?bulan=<?php echo $bulan == 12 ? 1 : $bulan + 1; ?>&tahun=<?php echo $bulan == 12 ? $tahun + 1 : $tahun; ?>" class="btn btn-primary ml-auto">
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered calendar w-100">
                                <thead>
                                    <tr>
                                        <?php foreach ($nama_hari as $hari): ?>
                                            <th><?php echo $hari; ?></th>
                                        <?php endforeach; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $hari_ke = 1;
                                    $total_hari = $jumlah_hari + $hari_pertama;

                                    // Loop untuk menggambar kalender
                                    for ($i = 0; $i < 6; $i++) { ?>
                                    <tr>
                                        <?php for ($j = 0; $j < 7; $j++) {
                                            if ($i == 0 && $j < $hari_pertama) { ?>
                                                <td></td>
                                            <?php } else {
                                                if ($hari_ke <= $jumlah_hari) {
                                                    $current_date = "$tahun-" . str_pad($bulan, 2, '0', STR_PAD_LEFT) . "-" . str_pad($hari_ke, 2, '0', STR_PAD_LEFT); // Format tanggal

                                                    echo "<td>"; ?>
                                                    <?php   if ($j == 0) { ?>
                                                        <div class="venom-1"><?= $hari_ke ?></div>
                                                    <?php
                                                    // Periksa apakah ada event pada tanggal tersebut
                                                    } elseif (isset($events[$current_date])) {
                                                        foreach ($events[$current_date] as $event) {
                                                            $col = $event['description'];
                                                            $colum = $event['description'];
                                                            switch ($col) {
                                                                case 'A':
                                                                    $warna = 'venom-2';
                                                                    break;
                                                                case 'B':
                                                                    $warna = 'venom-3';
                                                                    break;
                                                                case 'C':
                                                                    $warna = 'venom-1';
                                                                    break;
                                                                case 'D':
                                                                    $warna = 'venom-4';
                                                                    break;
                                                                case 'E':
                                                                    $warna = 'venom-5';
                                                                    break;
                                                                default :
                                                                    $warna = 'warna Tidak ada';
                                                            }
                                                            
                                                            echo "<div class='$warna'>" . $hari_ke ."</div>";
                                                        }
                                                    } else {
                                                        echo "<div>" . $hari_ke . "</div>";
                                                    }

                                                    echo "</td>";
                                                    $hari_ke++;
                                                } else {
                                                    echo '<td></td>';
                                                }
                                            }
                                        }
                                        ?>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="mt-3">
                                <p>KETERANGAN WARNA :</p>
                                <div style="margin-left: 20px;">
                                    <table width="50%">
                                        <tr style="margin: 5px;">
                                            <td style="margin: 5px;" width="10%" class="venom-2"></td>
                                            <td>Ujian UTS/UAS</td>
                                        </tr>
                                        <tr style="margin: 5px;">
                                            <td style="margin: 5px;" width="10%" class="venom-3"></td>
                                            <td>Minggu Tenang</td>
                                        </tr>
                                        <tr style="margin: 5px;">
                                            <td style="margin: 5px;" width="10%" class="venom-1"></td>
                                            <td>Libur Semester/Nasional</td>
                                        </tr>
                                        <tr style="margin: 5px;">
                                            <td style="margin: 5px;" width="10%" class="venom-4"></td>
                                            <td>Proses Nilai Masuk</td>
                                        </tr>
                                        <tr style="margin: 5px;">
                                            <td style="margin: 5px;" width="10%" class="venom-5"></td>
                                            <td>Minggu KHS/KRS</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- content end -->
    <h5 class="mb-2 mt-4 text-center">Data Kalender Akademik UNIBA Madura</h5>
    <table class="table table-bordered">
        <thead class="table-success">
            <tr style="text-align: center; vertical-align: middle;">
            <th scope="col" width="10%">No.</th>
            <th scope="col">Nama Dokumen</th>
            <th scope="col">Tahun Berlaku</th>
            <th scope="col">Unduhan</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php 
                $no = 1;
            while ($x = mysqli_fetch_array($kalender)) {
                $file_name = $x['file'];
                $file_info = pathinfo($file_name);
                $nama_file = $file_info['filename'];
            ?>
            <tr style="text-align: center; vertical-align: middle;">
            <td><?= $no++ ?></td>
            <td><?= $nama_file ?></td>
            <td><?= $x['mulai'] ?>/<?= $x['sampai'] ?> <?= $x['semester'] ?></td>
            <td><a href="../fileKalender/<?= $x['file'] ?>" target="_blank"><span class="badge text-bg-primary">unduh</span></a></td>
            </tr>
            <?php } 
            if(mysqli_num_rows($kalender) == 0) {
                echo "<tr><td colspan='4' align='center'><b>Belum ada data yang dibuat</b></td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<!-- container end -->


<?php
include('../template/footer.php');
?>