<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .coming-soon {
            text-align: center;
        }

        .coming-soon h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        .coming-soon p {
            font-size: 18px;
            color: #666;
        }

        .back-button {
            margin-top: 20px;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .back-button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="coming-soon">
        <h1>Portofolio Segera Datang</h1>
        <p>Halaman portofolio kami sedang dalam konstruksi. Kami akan segera kembali!</p>
        <button class="back-button"><a href="{{ url('/home') }}" style="text-decoration: none; color: white;">Kembali ke beranda</a></button>
    </div>
</body>
</html>
