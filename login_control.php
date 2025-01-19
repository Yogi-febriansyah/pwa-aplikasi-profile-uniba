<?php

include('db/koneksi.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT id, nama, email, username, password, status FROM users 
    WHERE username = '$username' OR email = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $password2 = $user['password'];
        $status = $user['status'];

        if ($status == 'aktif' && $password == $password2) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['status'] = $user['status'];
            $_SESSION['nama'] = $user['nama'];

            header("Location:backend/dashboard.php");
            exit();
        } elseif ($status != 'aktif') {
            $_SESSION['belum'] = "Akun anda belum divalidasi oleh admin";
            header('location:login.php');
        } else {
            $_SESSION['tidak'] = "Login Error password salah";
            header('location:login.php');
        }
    } else {
        $_SESSION['tidak_ada'] = "Anda Belum Punya akun. Silahkan registrasi terlebih dahulu";
        header('location:login.php');
    }
}

$conn->close();

?>