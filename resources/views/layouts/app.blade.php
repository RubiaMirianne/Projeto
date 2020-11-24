<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>TechMart</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <script src="https://kit.fontawesome.com/6ed5040cec.js" crossorigin="anonymous"></script>

    <style>
        html,
        body {
            display: flex;
            flex-direction: column;
            background-color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
            height: 100vh;
            width: 100vw;
        }

        span {
            color: #971ac2;
            font-size: 32px;
            font-weight: 100;
            text-align: center;
        }

        .flex-center {
            display: flex;
            flex: 1 auto;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .cd {
            border-width: 2px;
            border-color: #971ac2;
            background-color: #BE8FCE;
            padding-bottom: 10em;
        }

        .button {
            background-color: #971AC2;
            border: none;
            border-radius: 60px;
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
    <nav class="navbar navbar-dark bg-faded navbar-expand-md " style="background-color: #971ac2; border-color: #000;">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="imagem/aa.png" alt="logo" height="36" width="90">
        </a>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2 " id="collapsibleNavbar">
            @auth
            @if(Auth::user()->tipo_conta === 'estoquista')
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ url('/cadastroproduto') }}">Cadastrar Produto</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="#">Lista de Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ url('/financeiro') }}">Financeiro</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ url('/quemsomos') }}">Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ route('logout') }}">
                        <i class=" fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
            @else
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="navbar-brand" href="#">Lista de Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ url('/quemsomos') }}">Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ url('/listacompras') }}">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class=" fas fa-sign-out-alt"></i>

                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
            @endif
            @endauth
        </div>
    </nav>
    <main class="flex-center">
        @yield('content');
    </main>

    <body>