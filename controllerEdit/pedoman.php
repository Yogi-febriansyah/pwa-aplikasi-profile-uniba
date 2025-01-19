<?php

include('../db/koneksi.php');

if(isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $file_lama = $_POST['file_lama'];
    $awal = $_POST['awal'];
    $akhir = $_POST['akhir'];
    $file_baru = $_FILES['file']['name'];
    if ($file_baru) {
        if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
            $file = $_FILES['file']['name'];
            $targetDir = "../file/";
            $targetFile = $targetDir . $file;
            $allowedExtensions = ['docx', 'pdf', 'doc'];
            $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
            if (!in_array($fileExtension, $allowedExtensions)) {
                echo "<script>
                alert('Maaf file yang anda masukkan bukan file');
                window.location.href = '../edit/pedoman.php';
                </script>";
            } else {
                if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
                    unlink("../file/$file_lama");
                    $namafile = $file;
                }
                $sql = "UPDATE pedoman SET awal = '$awal', akhir = '$akhir',
                file = '$namafile' WHERE id = '$id'";
        
                if ($conn->query($sql) === TRUE) {
                    header('location:../backend/pedoman.php');
                } else {
                    echo "<script>
                    alert('Data gagal ditambahkan!');
                    window.location.href = '../edit/pedoman.php';
                    </script>";
                }
            }
        }
    } else {
        $sql = "UPDATE pedoman SET awal = '$awal', akhir = '$akhir' 
        WHERE id = '$id'";
            
        if ($conn->query($sql) === TRUE) {
            header('location:../backend/pedoman.php');
        } else {
            echo "<script>
            alert('Data gagal ditambahkan!');
            window.location.href = '../edit/pedoman.php';
            </script>";
        }
    }

    

}

?>