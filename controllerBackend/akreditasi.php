<?php

include('../db/koneksi.php');

$sql = "SELECT * FROM akreditasi";
$result = $conn->query($sql);
if(isset($_GET['action']) && $_GET['action'] == 'hapus') {
    $id = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM akreditasi where id = '$id'");
    $query = mysqli_fetch_array($data);
    if(mysqli_num_rows($data)) {
        $file = $query['file'];
        $hapus = unlink('../file/'.$file);
        $hapus_data = mysqli_query($conn, "DELETE FROM akreditasi where id = '$id'");
        if(!$hapus_data && !$hapus) {
            die('Query Error '. mysqli_error($conn));
        } else {
            header('location:akreditasi.php');
        }
    }
}
?>