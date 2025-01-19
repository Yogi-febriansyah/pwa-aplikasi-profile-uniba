<?php

include('../db/koneksi.php');

if(isset($_POST['simpan'])) {
    $id_kalender = $_POST['id_kalender'];
    $event_description = $_POST['event_description'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $sql = "INSERT INTO events (event_description, start_date, end_date, id_kalender) 
    VALUES ('$event_description', '$start_date', '$end_date', '$id_kalender')";

    if ($conn->query($sql) === TRUE) {
        header('location:../backend/data_kalender.php?id_data=$id_kalender');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>