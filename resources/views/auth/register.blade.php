@extends('layouts.app')

@section('content')
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>


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
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
