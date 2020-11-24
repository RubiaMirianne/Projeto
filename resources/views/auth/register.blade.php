<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>TechMart</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
        html,
        body {
            display: flex;
            flex-direction: column;
            background-color: #fff;
            color: #ffffff;
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
            height: 100vh;
            width: 100vw;
        }

        .flex-center {
            display: flex;
            flex: 1 auto;
            align-items: center;
            justify-content: center;
        }

        .cd {
            border-width: 2px;
            border-color: #971ac2;
            background-color: #BE8FCE;
            padding-bottom: 10em;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-faded navbar-expand-md " style="background-color: #971ac2; border-color: #000; padding: 20px; margin-bottom: 10px;">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="imagem/aa.png" alt="logo" height="36" width="90">
        </a>
    </nav>
    <main class="flex-center">
        <div class="col-md-6">
            <div class="card cd col-12">
                <h1 class="text-center">Cadastro</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group-row">
                        <label for="vendedor" class="col-md-4 col-form-label text-md-right">Vendedor</label>
                        <input type="radio" id="vendedor" name="tipo_conta" value="vendedor" default>
                    </div>

                    <div class="form-group-row">
                        <label for="estoquista" class="col-md-4 col-form-label text-md-right">Estoquista</label>
                        <input type="radio" id="estoquista" name="tipo_conta" value="estoquista">
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

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
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
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
                        <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

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
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirme a senha</label>

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
    </main>
</body>

</html>