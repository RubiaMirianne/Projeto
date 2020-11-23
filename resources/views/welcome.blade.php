<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>TechMart</title>

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

        </style>
    </head>

    <body>
    <nav class="navbar navbar-dark bg-faded navbar-expand-md " style="background-color: #971ac2; border-color: #000;">

    <a class="navbar-brand" href="#">
        <img src="imagem/aa.png" alt="logo" height="36" width="90">
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}"class="navbar-brand"class="text-sm text-gray-700 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}"class="navbar-brand" class="text-sm text-gray-700 underline">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"class="navbar-brand"class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
                </div>
                <div class="container">
                    <h2>Image</h2>
                    <p></p>
                    <img class="img-fluid" src="img/supermercado.jpg" alt="Chania" width="460" height="345">
                </div>
    </nav>
    </body>
</html>
