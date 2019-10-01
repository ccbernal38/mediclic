@extends('layouts.app')

@section('content')
<div class="container-mediclic">
    <div class="row img-header">
        <div class="col-md-12 col-padding-header">
            <form method="POST" action="{{ route('login') }}">
                        @csrf

                <div class="row padding-input-login">
                    <div class="col-md-2 offset-6">
                        <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" aria-label="Small" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo electrónico">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
{{--                        <img src="/img/login/recordarcontrasenia.png" alt="Responsive image" class="img-forgot">--}}

{{--                        @if (Route::has('password.request'))--}}
{{--                            <a class="btn-forgot" href="{{ route('password.request') }}">--}}
{{--                                ¿Olvidaste tu contraseña?--}}
{{--                            </a>--}}
{{--                        @endif--}}
                    </div>

                    <div class="col-md-2">
                        <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-2 btn-login">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Iniciar sesión
                        </button>
                    </div>
                </div>
                <div class="row padding-input-login">
                    <div class="col-md-2 offset-6">
                        <img src="/img/login/recordarcontrasenia.png" alt="Responsive image" class="img-forgot">

                        @if (Route::has('password.request'))
                            <a class="btn-forgot" href="{{ route('password.request') }}">
                                ¿Olvidaste tu contraseña?
                            </a>
                        @endif
                    </div>
                </div>
                    </form>
        </div>
    </div>
</div>
@endsection
