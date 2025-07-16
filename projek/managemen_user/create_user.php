<?php
include 'service/database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (createUser ($username, $email, $password)) {
        echo "Pengguna berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan pengguna.";
    }
}
?>
