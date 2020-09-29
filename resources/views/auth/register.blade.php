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
            .text-center {
                 text-align: center !important;
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

                            @if (Route::has('welcome'))
                                <a href="{{ route('welcome') }}"class="navbar-brand"class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
                </div>
    </nav>>
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-md-8">
                                <div class="card cd col-12">
                                <div class="text-center" >{{ __('CADASTRO') }}</div>


                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="vendedor" class="col-md-4 col-form-label text-md-right">Vendedor</label>
                                            <input class= "form" type="radio" id="vendedor" name="cadastro" value="vendedor" default>
                                        </div>

                                        <div class="form-group row">
                                            <label for="estoquista" class="col-md-4 col-form-label text-md-right">Estoquista</label>
                                            <input class= "form" type="radio" id="estoquista" name="cadastro" value="estoquista">
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Cadastrar') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </body>
    </html>
