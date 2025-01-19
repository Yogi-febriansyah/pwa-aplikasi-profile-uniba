<?php

include('../db/koneksi.php');

$sql = "SELECT * FROM dosen";
$result = $conn->query($sql);
if(isset($_GET['action']) && $_GET['action'] == 'hapus') {
    $id = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM dosen where id = '$id'");
    $query = mysqli_fetch_array($data);
    if(mysqli_num_rows($data)) {
        $gambar = $query['foto'];
        $hapus = unlink('../image/'.$gambar);
        $hapus_data = mysqli_query($conn, "DELETE FROM dosen where id = '$id'");
        if(!$hapus_data && !$hapus) {
            die('Query Error '. mysqli_error($conn));
        } else {
            header('location:dosen.php');
        }
    }
}
?>