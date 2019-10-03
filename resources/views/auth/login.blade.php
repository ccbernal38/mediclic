@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!--Inicio de sesión-->
    <div class="row img-header">
        <div class="col-md-12 col-padding-header">
            <form method="POST" action="{{ route('login') }}">
               @csrf
                <div class="row padding-input-login">
                    <div class="col-md-2 offset-6">
                        <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" aria-label="Small" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo electrónico">
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

                @if ($errors->any())
                    <div class="row padding-input-login">
                        <div class="col-md-4 offset-6">
                            @error('email')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                @endif

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

    <!--Imagen de inicio y formulario de registro-->
    <div class="row">
        <!--Imagen de inicio-->
        <div class="col-md-5 img-inicio"></div>

        <!--Formulario de registro paciente-->
        <div class="col-md-7">
            <div class="row">
                <div class="offset-3 col-md-6 img-logo-inicio"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1-registro">Registro</h1>
                </div>
            </div>
        </div>
    </div>

    <!--Franja de colores footer-->
    <div class="row color-footer">
        <div class="col-md-4 color-footer-1"></div>
        <div class="col-md-2 color-footer-2"></div>
        <div class="col-md-2 color-footer-3"></div>
        <div class="col-md-2 color-footer-4"></div>
        <div class="col-md-2 color-footer-5"></div>
    </div>
</div>
@endsection
