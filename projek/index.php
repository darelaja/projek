<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Document</title>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: 0 20px 40px;
        }
        main {
            background-color: rgba(255,255,255,0.9);
            max-width: 700px;
            width: 100%;
            margin-top: 40px;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.15);
            text-align: center;
        }
        main p {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <?php include "layout/header.html" ?>
    <main>
        <p>selamat  datang di beranda</p>
    </main>
    <?php include "layout/footer.html" ?>
</body>
</html>

