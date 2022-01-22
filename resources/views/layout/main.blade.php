<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <!-- <link rel="shortcut icon" href="/imagens/icon.png"/> -->
        <title>Desafio JN2</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body class="body">
        @yield('content')

        <script src="./js/scripts.js"></script>
        <script src="./js/jquery.min.js"></script>
    </body>
</html>
