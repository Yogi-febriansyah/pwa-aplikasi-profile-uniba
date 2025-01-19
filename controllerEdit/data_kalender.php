<?php

include('../db/koneksi.php');

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM events WHERE id = '$id'");
$data = mysqli_fetch_array($result);
if(isset($_POST['ubah'])) {
    $event_description = $_POST['event_description'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    
    $sql = "UPDATE events set event_description = '$event_description', 
    start_date = '$start_date', end_date = '$end_date' WHERE id = '$id'";

    if($conn->query($sql) === TRUE) {
        header('location:../backend/data_kalender.php');
    } else {
        die('Query Error '. mysqli_error($conn));
    }
}

?>