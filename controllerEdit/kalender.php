<?php

include('../db/koneksi.php');

if(isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $file_lama = $_POST['file_lama'];
    $semester = $_POST['semester'];
    $mulai = $_POST['mulai'];
    $sampai = $_POST['sampai'];
    $file_baru = $_FILES['file']['name'];
    if ($file_baru) {
        if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
            $file = $_FILES['file']['name'];
            $targetDir = "../fileKalender/";
            $targetFile = $targetDir . $file;
            $allowedExtensions = ['docx', 'pdf', 'doc'];
            $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
            if (!in_array($fileExtension, $allowedExtensions)) {
                echo "<script>
                alert('Maaf file yang anda masukkan bukan file');
                window.location.href = '../edit/kalender.php';
                </script>";
            } else {
                if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
                    unlink("../fileKalender/$file_lama");
                    $namafile = $file;
                }
                $sql = "UPDATE kalender SET semester = '$semester', mulai = '$mulai',
                 sampai = '$sampai', file = '$namafile' WHERE id = '$id'";
        
                if ($conn->query($sql) === TRUE) {
                    header('location:../backend/kalender.php');
                } else {
                    echo "<script>
                    alert('Data gagal ditambahkan!');
                    window.location.href = '../edit/kalender.php';
                    </script>";
                }
            }
        }
    } else {
        $sql = "UPDATE kalender SET semester = '$semester', mulai = '$mulai',
         sampai = '$sampai' WHERE id = '$id'";
            
        if ($conn->query($sql) === TRUE) {
            header('location:../backend/kalender.php');
        } else {
            echo "<script>
            alert('Data gagal ditambahkan!');
            window.location.href = '../edit/kalender.php';
            </script>";
        }
    }

    

}

?>