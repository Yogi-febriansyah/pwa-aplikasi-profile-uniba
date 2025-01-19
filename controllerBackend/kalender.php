<?php

include('../db/koneksi.php');

$sql = "SELECT * FROM kalender";
$result = $conn->query($sql);
if(isset($_GET['action']) && $_GET['action'] == 'hapus') {
    $id = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM kalender where id = '$id'");
    if(mysqli_num_rows($data)) {
        $hapus_data = mysqli_query($conn, "DELETE FROM kalender where id = '$id'");
        $hapus = mysqli_query($conn, "DELETE FROM events");
        if(!$hapus_data || !$hapus) {
            die('Query Error '. mysqli_error($conn));
        } else {
            header('location:kalender.php');
        }
    }
}
?>