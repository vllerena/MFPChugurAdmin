<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Mi Factura Perú | Administrador Chugur</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="Administrador del sistema Mi Factura Perú, para la empresa Chugur " name="description" />
        <meta content="Mi Factura Perú" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/landing.min.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
            <div class="container-fluid">
                <a class="logo text-uppercase" href="{{route('index')}}">
                    <img src="{{asset('assets/images/logochugur.png')}}" alt="logoChugur" class="logo-light" height="50" />
                    <img src="{{asset('assets/images/logochugur.png')}}" alt="logoChugur" class="logo-dark" height="50" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                    </ul>
                    <ul class="navbar-nav ml-auto navbar-center">
                        <li class="nav-item">
                            <a class="btn btn-primary navbar-btn ml-2" href="{{route('auth.view')}}">
                                <i class="fe-check mr-1"></i>
                                Iniciar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="bg-home" id="home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="pr-lg-4">
                                    <div class="badge badge-primary">Version 1.0</div>
                                    <h1 class="mb-4 mt-3">
                                        Administrador Chugur 1.0. - Mi Factura Perú
                                    </h1>
                                    <p class="mb-4 pt-2 f-16">Se desarrolló el administrador para Chugur con el fín de simplicar y resumir los reportes de toda la empresa.</p>

                                </div>
                            </div>
                            <div class="col-md-7 text-right">
                                <img src="{{asset('assets/images/landing/main.png')}}" class="img-fluid shadow-lg animate">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row mb-0">
                    <div class="col-md-4">
                        <div class="pr-lg-4">
                            <div class="mb-1">
                                <img src="{{asset('assets/images/logochugur.png')}}" alt="logoChugur" class="logo-light" height="50" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left pull-none">
                            <p class="">{{now()->year}} © Mi Factura Perú. Desarrollador por <a href="https://contatrib.com/" target="_blank" class="">Escobedo Medina</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

        <script src="{{asset('assets/js/vendor.min.js')}}"></script>
        <script type="text/javascript">
            ! function($) {
                "use strict";
                var Ubold = function() {};
                Ubold.prototype.initStickyMenu = function() {
                    $(window).scroll(function() {
                        var scroll = $(window).scrollTop();
                        if (scroll >= 50) {
                            $(".sticky").addClass("nav-sticky");
                        } else {
                            $(".sticky").removeClass("nav-sticky");
                        }
                    });
                },
                Ubold.prototype.initSmoothLink = function() {
                    $('.navbar-nav a').on('click', function(event) {
                        var $anchor = $(this);
                        $('html, body').stop().animate({
                            scrollTop: $($anchor.attr('href')).offset().top - 50
                        }, 1500);
                        event.preventDefault();
                    });
                    $("a.smooth-scroll").on('click', function(e) {
                        e.preventDefault();
                        var dest = $(this).attr('href');
                        $('html,body').animate({ scrollTop: $(dest).offset().top }, 'slow');
                    });
                },
                Ubold.prototype.initBacktoTop = function() {
                    $(window).scroll(function(){
                        if ($(this).scrollTop() > 100) {
                            $('.back-to-top').fadeIn();
                        } else {
                            $('.back-to-top').fadeOut();
                        }
                    });
                    $('.back-to-top').click(function(){
                        $("html, body").animate({ scrollTop: 0 }, 1000);
                        return false;
                    });
                },
                Ubold.prototype.init = function() {
                    this.initStickyMenu();
                    this.initSmoothLink();
                    this.initBacktoTop();
                },
                $.Ubold = new Ubold, $.Ubold.Constructor = Ubold
            }(window.jQuery),
            function($) {
                "use strict";
                $.Ubold.init();
            }(window.jQuery);
        </script>
    </body>
</html>
