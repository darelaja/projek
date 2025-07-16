<?php
include "service/database.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($db->query($sql)) {
        echo "<p style='color: green;'>Akun berhasil dibuat!</p>";
    } else {
        echo "<p style='color: red;'>Gagal membuat akun. Silakan coba lagi.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar Akun</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h3 {
            margin-bottom: 20px;
            color: #333;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            width: 100%;
        }
        button:hover {
            background-color: #218838;
        }
        p {
            margin-top: 15px;
            color: #555;
        }
    </style>
</head>
<body>
    <form action="register.php" method="POST">
          <h3>DAFTAR AKUN</h3>
           <?php include "layout/header.html" ?>
        <input type="text" placeholder="username" name="username" required />
        <input type="password" placeholder="password" name="password" required />
        <button type="submit" name="register">Daftar Sekarang</button>
         <?php include "layout/footer.html" ?>
    </form>
</body>
</html>
