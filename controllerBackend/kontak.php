<?php

include('../db/koneksi.php');

$sql = "SELECT * FROM kontak";
$result = $conn->query($sql);
if(isset($_GET['action']) && $_GET['action'] == 'hapus') {
    $id = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM kontak where id = '$id'");
    if(mysqli_num_rows($data)) {
        $hapus_data = mysqli_query($conn, "DELETE FROM kontak where id = '$id'");
        if(!$hapus_data) {
            die('Query Error '. mysqli_error($conn));
        } else {
            header('location:kontak.php');
        }
    }
}
?>