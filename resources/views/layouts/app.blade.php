<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cupcake AS</title>

    <style>
        body {
            background: #fff7fa;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background: #ffb6c1;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            color: #ffffff;
            font-weight: bold;
        }

        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
        }

        .cupcake-card {
            background: white;
            border-radius: 10px;
            padding: 15px;
            margin: 10px;
            box-shadow: 0px 0px 5px #e5e5e5;
            text-align: center;
        }

        .cupcake-card img {
            width: 100%;
            border-radius: 10px;
        }

        .btn {
            background: #ff6b81;
            padding: 10px 15px;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn:hover {
            background: #ff4d6d;
        }
    </style>
</head>
<body>

<header>
    Cupcake AS
</header>

<div class="container">
    @yield('content')
</div>

</body>
</html>
