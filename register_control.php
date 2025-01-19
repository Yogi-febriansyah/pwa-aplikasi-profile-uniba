<?php

include('db/koneksi.php');
session_start();

if(isset($_POST['registrasi'])) {
    // print_r($_POST);
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $status = "tidak";

    $check = "SELECT id FROM users WHERE email = '$email'";
    $data = $conn->query($check);
    if ($data->num_rows > 0) {
        echo "<script>
        alert('Email sudah digunakan');
        window.location.href = 'register.php';
        </script>";
    } else {
        $sql = "INSERT INTO users (nama, username, email, password, status) 
        VALUES ('$nama', '$username', '$email', '$password', '$status')";
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION['pesan_registrasi'] = "Registrasi berhasil, Tunggu konfirmasi dari admin";
            header('location:login.php');
        } else {
            echo "<script>
            alert('Data gagal ditambahkan!')
            </script>";
        }
    }

} else {
    header('location:register.php');
}

?>