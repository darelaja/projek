<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "buku_saya";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error) {
    echo "koneksi database rusak";
    die("error");
}

function getUsers() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM users");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function updateUser ($id, $username, $email, $password) {
    global $pdo;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?");
    return $stmt->execute([$username, $email, $hashedPassword, $id]);
}

function deleteUser ($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    return $stmt->execute([$id]);
}

?>