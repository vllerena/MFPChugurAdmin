<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.shared.title-meta', ['title' => "Iniciar Sesión"])
    @include('layouts.shared.head-css')
</head>

<body class="authentication-bg authentication-bg-pattern">
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-pattern">
                    <div class="card-body p-4">
                        <div class="text-center w-75 m-auto">
                            <div class="auth-logo">
                                <a href="{{route('index')}}" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/images/logochugur.png')}}" alt="logoChugur" height="50">
                                    </span>
                                </a>
                                <a href="{{route('index')}}" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/images/logochugur.png')}}" alt="logoChugur" height="50">
                                    </span>
                                </a>
                            </div>
                            <p class="text-muted mb-4 mt-3">Ingrese su nombre de usuario y contraseña</p>
                        </div>

                        <form action="{{route('auth.login')}}" method="POST" novalidate>
                            @csrf
                            <div class="form-group mb-3">
                                <label for="username">Nombre de usuario</label>
                                <input class="form-control  @if($errors->has('username')) is-invalid @endif" name="username" type="text"
                                       id="username" required=""
                                       value="{{ old('username')}}"
                                       placeholder="Ingrese su nombre de usuario" />
                                @if($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Contraseña</label>
                                <div class="input-group input-group-merge @if($errors->has('password')) is-invalid @endif">
                                    <input class="form-control @if($errors->has('password')) is-invalid @endif" name="password" type="password" required=""
                                           id="password" placeholder="Enter your password" />
                                    <div class="input-group-append" data-password="false">
                                        <div class="input-group-text">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>
                                @if($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                    <label class="custom-control-label" for="checkbox-signin">Recordar usuario</label>
                                </div>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"> Ingresar </button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p> <a href="#" class="text-white-50 ml-1">¿Olvidó su contraseña?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer footer-alt">
    <script>document.write(new Date().getFullYear())</script> &copy; Mi Factura Perú, un producto de <a href="" class="text-white-50">Escobedo Medina</a>
</footer>

@include('layouts.shared.footer-script')

</body>
</html>
