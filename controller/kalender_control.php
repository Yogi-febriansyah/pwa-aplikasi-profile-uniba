<?php
include('../db/koneksi.php');

$bulan = isset($_GET['bulan']) ? (int)$_GET['bulan'] : date('m');
$tahun = isset($_GET['tahun']) ? (int)$_GET['tahun'] : date('Y');

$jumlah_hari = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);

$nama_bulan = date('F', mktime(0, 0, 0, $bulan, 1, $tahun));
$hari_pertama = date('w', mktime(0, 0, 0, $bulan, 1, $tahun));

$nama_hari = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

$sql = "SELECT * FROM events WHERE YEAR(start_date) = $tahun AND MONTH(start_date) = $bulan 
OR YEAR(end_date) = $tahun AND MONTH(end_date) = $bulan";
$result = $conn->query($sql);

$events = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $start_date = strtotime($row['start_date']);
        $end_date = strtotime($row['end_date']);

        for ($current_date = $start_date; $current_date <= $end_date; $current_date = strtotime("+1 day", $current_date)) {
            $event_date = date("Y-m-d", $current_date);
            $events[$event_date][] = [
                'description' => $row['event_description'],
            ];
        }
    }
}

$judul = "SELECT * FROM kalender";
$kalender = $conn->query($judul);

$conn->close();
?>