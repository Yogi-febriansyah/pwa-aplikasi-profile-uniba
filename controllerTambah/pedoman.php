<?php

include('../db/koneksi.php');

if(isset($_POST['simpan'])) {
    $awal = $_POST['awal'];
    $akhir = $_POST['akhir'];

    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file = $_FILES['file']['name'];
        $targetDir = "../file/";
        $targetFile = $targetDir . $file;
        $allowedExtensions = ['doc', 'pdf', 'docx'];
        $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (!in_array($fileExtension, $allowedExtensions)) {
            echo "<script>
            alert('Maaf file yang anda masukkan tidak termasuk dalam daftar. Harus pdf atau word');
            window.location.href = '../backend/pedoman.php';
            </script>";
        } else {
                if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
                    $namafile = $file;
                }
                $sql = "INSERT INTO pedoman (awal, akhir, file) VALUES ('$awal', '$akhir', '$namafile')";
        
                if ($conn->query($sql) === TRUE) {
                    header('location:../backend/pedoman.php');
                } else {
                    echo "<script>
                    alert('Data gagal ditambahkan!')
                    </script>";
                }
        }
    }

}

?>