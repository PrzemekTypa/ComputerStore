<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Płatność niedostępna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            margin: 0;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .container h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .container p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .container a {
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Strona w przebudowie</h1>
        <p>Przepraszamy, ta forma płatności jest obecnie niedostępna. Proszę skorzystać z płatności za pobraniem.</p>
        <a href="{{ url('/') }}">Powrót do strony głównej</a>
    </div>
</body>
</html>
