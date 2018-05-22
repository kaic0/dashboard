<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-user-plus"></i> 
                                {{ __('Registre-se') }}
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                        <label for="name" class="col-form-label text-md-right">{{ __('Nome') }}</label>
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col-md-6">
                                        <label for="surname" class="col-form-label text-md-right">{{ __('Sobrenome') }}</label>
                                            <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('surname') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="divider-text">Empresa</div>
                                    <div class="form-group row">

                                        <div class="col-md-6">
                                        <label for="name" class="col-form-label text-md-right">{{ __('Empresa') }}</label>
                                            <input id="company" type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{ old('company') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('company') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="divider-text">Informações Pessoais</div>
                                    <div class="form-group row">

                                        <div class="col-md-6">
                                        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col-md-6">
                                        <label for="password" class="col-form-label text-md-right">{{ __('Senha') }}</label>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-md-6">
                                        <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row mb-0 justify-content-center">
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary btn-block">
                                                {{ __('Salvar') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" type="text/javascript" defer></script>
</html>
