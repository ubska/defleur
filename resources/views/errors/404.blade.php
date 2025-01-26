<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina non trovata</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        h1 {
            font-size: 6em;
            color: #e74c3c;
        }

        p {
            font-size: 1.5em;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>404</h1>
        <p>La pagina che stai cercando non esiste.</p>
        <p><a href="{{ url('/') }}">Torna alla home</a></p>
    </div>
</body>

</html>
