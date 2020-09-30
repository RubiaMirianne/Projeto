<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Início</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            html, body {
                background-color: #fff;
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: bold;
                height: 100vh;
                margin: 0;
                overflow: hidden;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;

            }

            .cd {
                border-width: 5px;
                border-color:#971ac2;
                background-color:#BE8FCE;
                padding-bottom:10em;
            }

            .title {
                text-align:Left;
                font-size: 3.5em;
                padding-top:1.5em;
            }
            .text-center {
                 text-align: center !important;
            }


        </style>
    </head>

    <body>
        <nav class="navbar navbar-dark bg-faded navbar-expand-md " style="background-color: #971ac2; border-color: #000;">

        <a class="navbar-brand" href="#">
            <img src="img/aa.png" alt="logo" height="36" width="90">
            </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2 " id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item     ">
                            <a class="navbar-brand" href="{{ url('/') }}">Início</a>
                        </li>
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
                        <img src="img/logout.png" height="25" width="25" style="margin-bottom:-1.3em;">
                    </li>
                    </ul>
                </div>
                </nav>

