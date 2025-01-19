<?php

include('../db/koneksi.php');

if(isset($_POST['simpan'])) {
    $semester = $_POST['semester'];
    $mulai = $_POST['mulai'];
    $sampai = $_POST['sampai'];
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file = $_FILES['file']['name'];
        $targetDir = "../fileKalender/";
        $targetFile = $targetDir . $file;
        $allowedExtensions = ['doc', 'pdf', 'docx'];
        $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (!in_array($fileExtension, $allowedExtensions)) {
            echo "<script>
            alert('Maaf file yang anda masukkan tidak termasuk dalam daftar. Harus pdf atau word');
            window.location.href = '../tambah/kalender.php';
            </script>";
        } else {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
                $namafile = $file;
            }
            $sql = "INSERT INTO kalender (semester, mulai, sampai, file) 
            VALUES ('$semester', '$mulai', '$sampai', '$namafile')";
        
            if ($conn->query($sql) === TRUE) {
                header('location:../backend/kalender.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

}

?>