<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator - Kalender Akademik</title>
<?php
include('../db/koneksi.php');
$id_kalender = $_GET['id_data'];
$sql = "SELECT * FROM events where id_kalender = '$id_kalender'";
$result = $conn->query($sql);
if(isset($_GET['action']) && $_GET['action'] == 'hapus') {
    $id = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM events where id = '$id'");
    if(mysqli_num_rows($data)) {
        $data4 = mysqli_fetch_array($data);
        $id_data = $data4['id_kalender'];
        $hapus_data = mysqli_query($conn, "DELETE FROM events where id = '$id'");
        if(!$hapus_data) {
            die('Query Error '. mysqli_error($conn));
        } else {
            $url = 'data_kalender.php';
            header("Location: $url?id_data=$id_data");
            exit;
        }
    }
}
if(isset($_POST['simpan'])) {
    $id_kalender1 = $_POST['id_kalender'];
    $event_description = $_POST['event_description'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $sql = "INSERT INTO events (event_description, start_date, end_date, id_kalender) 
    VALUES ('$event_description', '$start_date', '$end_date', '$id_kalender1')";

    if ($conn->query($sql) === TRUE) {
        $url2 = 'data_kalender.php';
        header("Location: $url2?id_data=$id_kalender1");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
include('../template/header_admin.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kalender Akademik</h1>
    </div>
    <a href="#" data-toggle="modal" data-target="#tambahModal" class="btn btn-info mb-3"><i class="fas fa-fw fa-plus"></i> Tambah</a>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table" width="100%">
                <thead>
                    <tr>
                        <th width="30%" scope="col">List Event</th>
                        <th width="22%" scope="col">Tanggal Mulai</th>
                        <th width="22%" scope="col">Tanggal Akhir</th>
                        <th width="26%" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($p = $result->fetch_assoc()) { 
                    if($p['event_description'] == 'A') {
                        $event = 'Ujian UTS/UAS';
                    } elseif($p['event_description'] == 'B') {
                        $event = 'Minggu Tenang';
                    } elseif($p['event_description'] == 'C') {
                        $event = 'Libur Semester/Nasional';
                    } elseif($p['event_description'] == 'D') {
                        $event = 'Proses Nilai Masuk';
                    } elseif($p['event_description'] == 'E') {
                        $event = 'Minggu KHS/KRS';
                    } 

                    $tanggal = $p['start_date'];
                    $tang = $p['end_date'];

                    $awal = strftime("%d %B %Y", strtotime($tanggal));
                    $akhir = strftime("%d %B %Y", strtotime($tang));
                ?>
                    <tr>
                        <td class="m-1"><?= $event ?></td>
                        <td class="m-1" ><?= $awal ?></td>
                        <td class="m-1" ><?= $akhir ?></td>
                        <td>
                            <a href="../edit/data_kalender.php?id=<?=  $p['id']  ?>" type="button" class="btn btn-warning m-1">
                                <i class="fas fa-fw fa-pencil-alt"></i>
                            </a>
                            <a href="data_kalender.php?action=hapus&id=<?= $p['id'] ?>" class="btn btn-danger m-1" type="button">
                                <i class="fas fa-fw fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                <?php }
                if(mysqli_num_rows($result) == 0) {
                    echo "<tr><td colspan='4' align='center'><b>Belum ada list kegiatan yang dibuat</b></td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- tambah Modal-->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kegiatan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <input type="hidden" name="id_kalender" value="<?= $id_kalender ?>">
                    <div class="mb-3">
                        <label for="event_description" class="form-label">Nama Kegiatan</label>
                        <select name="event_description" id="event_description" class="form-control">
                            <option value="">Silahkan Pilih</option>
                            <option value="A">Ujian UTS/UAS</option>
                            <option value="B">Mingggu Tenang</option>
                            <option value="C">Libur Semester/Nasional</option>
                            <option value="D">Proses Nilai Masuk</option>
                            <option value="E">Minggu KHS/KRS</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tanggal</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" name="start_date" required>
                            <span class="input-group-text">s/d</span>
                            <input type="date" class="form-control" name="end_date" required>
                        </div>
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