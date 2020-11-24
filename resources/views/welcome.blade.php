<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>TechMart</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
        html,
        body {
            background-color: #fff;
            color: #ffffff;
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
            height: 100vh;
            width: 100vw;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .flex-center {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            margin-top: auto;
        }

        .button {
            background-color: #971AC2;
            border: none;
            border-radius: 4px;
            color: #ffffff;
            display: block;
            font-size: 24px;
            min-width: 50px;
            max-width: 280px;
            margin-bottom: 24px;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            width: 100%;
        }

        .button:hover {
            color: #ffffff;
            opacity: 0.8;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-faded navbar-expand-md " style="background-color: #971ac2; border-color: #000; padding: 20px;">
        <a class="navbar-brand" href="/home">
            <img src="imagem/aa.png" alt="logo" height="36" width="90">
        </a>
    </nav>
    <main class="flex-center">
        @auth
            <a class="button" href="{{ url('/login') }}">Sair</a>
        @endauth
        @guest
            <a class="button" href="{{ url('/login') }}">Entrar</a>
            <a class="button" href="{{ url('/register') }}">Cadastrar</a>
        @endguest
    </main>

</html>