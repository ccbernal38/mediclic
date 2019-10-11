@extends('layouts.app')

@section('js')
    <script src="{{asset('/js/forms.js')}}" defer></script>
@endsection

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
        <div class="col-md-6 col-lg-6 col-sm-6 img-inicio"></div>

        <!--Formulario de registro paciente-->
        <div class="col-md-6 padding-register1">
            <div class="row">
                <div class="offset-3 col-md-6 col-lg-6 col-sm-6 img-logo-inicio"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1-registro">Registro</h1>
                </div>
            </div>

            <form method="POST" action="{{ route('register') }}">
                <!--Formulario de registro inicial-->
                <div class="row padding-row-register">
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label for="name" class=" label-register">Primer Nombre</label>
                            <input id="primer_nombre" type="text" class="form-mediclic @error('primer_nombre') is-invalid @enderror" name="primer_nombre" value="{{ old('primer_nombre') }}" required autocomplete="primer_nombre" autofocus>
                            <span class="form-clear d-none"><i class="material-icons">clear</i></span>
                        </div>
                        @error('primer_nombre')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label for="name" class=" label-register">Segundo Nombre</label>
                            <input id="segundo_nombre" type="text" class="form-mediclic @error('segundo_nombre') is-invalid @enderror" name="segundo_nombre" value="{{ old('segundo_nombre') }}" required autocomplete="segundo_nombre" autofocus>
                            <span class="form-clear d-none"><i class="material-icons">clear</i></span>
                        </div>
                        @error('segundo_nombre')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label for="name" class=" label-register">Primer Apellido</label>
                            <input id="primer_apellido" type="text" class="form-mediclic @error('primer_apellido') is-invalid @enderror" name="primer_apellido" value="{{ old('primer_apellido') }}" required autocomplete="primer_apellido" autofocus>
                            <span class="form-clear d-none"><i class="material-icons">clear</i></span>
                        </div>
                        @error('primer_apellido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label for="name" class=" label-register">Segundo Apellido</label>
                            <input id="segundo_apellido" type="text" class="form-mediclic @error('segundo_apellido') is-invalid @enderror" name="segundo_apellido" value="{{ old('segundo_apellido') }}" required autocomplete="segundo_apellido" autofocus>
                            <span class="form-clear d-none"><i class="material-icons">clear</i></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label for="email" class="label-register">{{ __('E-Mail Address') }}</label>
                            <input id="email-register" type="email" class="form-mediclic @error('email-register') is-invalid @enderror" name="email-register" value="{{ old('email-register') }}" required autocomplete="email-register">
                            <span class="form-clear d-none"><i class="material-icons">clear</i></span>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label for="name" class="label-register">Fecha de nacimiento</label>
                            <input id="fecha_nacimiento" type="text" class="form-mediclic datepicker @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autocomplete="off" autofocus>
                            <span class="form-clear d-none"><i class="material-icons">clear</i></span>
                        </div>
                        @error('fecha_nacimiento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label for="name" class="label-register padd-lbl-sexo">Sexo</label><br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input id="f" type="radio" class="custom-control-input @error('sexo') is-invalid @enderror" name="sexo" value="F" required {{ 'F' == old('sexo') ? "checked":"" }}>
                                <label class="custom-control-label" for="f">F</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input id="m" type="radio" class="custom-control-input @error('sexo') is-invalid @enderror" name="sexo" value="M" required {{ 'M' == old('sexo') ? "checked":"" }}>
                                <label class="custom-control-label" for="m">M</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label for="password" class="label-register">{{ __('Password') }}</label>
                            <input id="passwordR" type="password" class="form-mediclic @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <span class="form-clear d-none"><i class="material-icons">clear</i></span>
                        </div>
                    </div>
                </div>
                <div class="row pad-row-terminos">
                    <div class="col-md-12">
                        <div class="custom-control custom-radio custom-control-inline" style="width: 100%">
                            <input id="terminos" type="radio" class="custom-control-input @error('terminos') is-invalid @enderror" name="terminos" value="1" required {{ '1' == old('terminos') ? "checked":"" }}>
                            <label class="custom-control-label conf-lbl-terminos" for="terminos">Acepto terminos y condiciones <a href="" style="color: #abbe2e">(ver)</a></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <p class="conf-text-terminos">Al hacer clic en "Acepto terminos y condiciones", aceptas las condiciones y confirmas que leiste nuestra política de datos, incluido el uso de cookies</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-register1">
                            Crear cuenta
                        </button>
                    </div>
                </div>
            </form>
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
