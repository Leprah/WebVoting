<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'E-Voting') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
          
        <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="wrap-login100 p-t-30 p-b-50">
                        <span class="login100-form-title p-b-41">
                            Account Login
                        </span>
                        
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="login100-form validate-form p-b-33 p-t-5">
                                <div class="form-group row wrap-input100" >

                                    <div class="input100">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror borderInput" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row wrap-input100">
                                    
                                    <div class="input100">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror borderInput" placeholder="Password" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="container-login100-form-btn m-t-32">
                                        <button type="submit" class="login100-form-btn">
                                            {{ __('Login') }}
                                        </button>                                   
                                    </div>
                                </div>
                   
                    </div>
                    </div>
                </div>
        </main>
    </div>
</body>
</html>
