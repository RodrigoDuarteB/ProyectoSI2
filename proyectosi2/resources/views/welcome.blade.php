<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>ProySI2</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
        <link rel="stylesheet" href="{{asset('assets/css/Header-Blue.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    </head>
    <body>
        <div>
            <div class="header-blue">
                <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
                    <div class="container-fluid"><a class="navbar-brand" href="/">Proyecto SI2</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse"
                            id="navcol-1">
                            <ul class="nav navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link" href="suscripcion">Suscripción</a></li>
                            </ul>
                            <form class="form-inline mr-auto" target="_self">
                                <div class="form-group"><label for="search-field"></label></div>
                            </form><span class="navbar-text"> </span><a class="btn btn-light action-button" role="button" href="login">Iniciar Sesión</a></div>
                    </div>
                </nav>
                <div class="container hero">
                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                            <h1>Titulo de la descripcion.</h1>
                            <p>Se Escribe algo para especificar caracteristicas del software </p><button class="btn btn-light btn-lg action-button" type="button">Learn More</button></div>
                        <div class="col12 align-self-center text-center">
                            <img src="{{asset('Images/rrhh.jpg')}}" class="img-fluid" width="400px" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
