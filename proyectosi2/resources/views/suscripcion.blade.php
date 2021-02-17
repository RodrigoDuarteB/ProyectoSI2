<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Payment-Form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Multi-step-form-type1.css">
    <link rel="stylesheet" href="assets/css/Pulse-Button-on-Hover.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
    <link rel="stylesheet" href="assets/css/multi-step-form.css">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Pulse-Button-on-Hover.css">

</head>

<body>
    <nav class="navbar navbar-light navbar-expand bg-light navigation-clean"
        style="background: linear-gradient(135deg, #172a74, #21a9af), #184e8e;border-width: 0px;border-color: #172a74;color: #172a74;font-size: 15px;height: 80px;">
        <div class="container"><a class="navbar-brand" href="/"
                style="height: 45px;width: 118px;margin: 23px;padding: 0px;color: #f0f0f0;font-family: 'Source Sans Pro', sans-serif;font-size: 26px;letter-spacing: 0px;font-weight: bold;">Proyecto
                SI2</a><a href="/suscripcion"
                style="padding: 0px;width: 673px;font-size: 20px;color: rgb(217,217,217);font-family: 'Source Sans Pro', sans-serif;height: 34px;">Suscripción</a>
            <button class="navbar-toggler" data-toggle="collapse">
            </button>
            <div>
                <a href="/login" class="pulseBtn">Iniciar Sesión</a>
            </div>
        </div>
    </nav>


    <section class="multi_step_form"
        style="background: url('assets/img/fondo2.jpg')no-repeat center center;background-size: cover;">
        <form id="msform">
            <!-- Tittle -->
            <div class="tittle">
                <h2>Proceso de Suscripción</h2>
                <p>En el siguiente formulario rellene con sus datos para completar el debido Registro</p>
            </div>
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">E-mail & Password</li>
                <li>Datos Personales</li>
                <li>Finalizacion de Registro</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h3>Setup your phone</h3>
                <h6>We will send you a SMS. Input the code to verify.</h6>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="tel" id="phone" class="form-control" placeholder="+591">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="+8801123456789">
                    </div>
                </div>
                <button type="button" class="action-button previous_button">Atras</button>
                <button type="button" class="next action-button">Continuar</button>
            </fieldset>
            <fieldset>
                <h3>Verify Your Identity</h3>
                <h6>Please upload any of these documents to verify your Identity.</h6>
                <div class="container-fluid">
                    <div class="row register-form">
                        <div class="col-md-8 offset-md-2">
                            
                                    <h4>Register Form</h4>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name </label></div>
                                        <div class="col-sm-6 input-column"><input class="form-control" type="text"></div>
                                    </div>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                                        <div class="col-sm-6 input-column"><input class="form-control" type="email"></div>
                                    </div>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
                                        <div class="col-sm-6 input-column"><input class="form-control" type="password"></div>
                                    </div>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Repeat Password </label></div>
                                        <div class="col-sm-6 input-column"><input class="form-control" type="password"></div>
                                    </div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">I've read and accept the terms and conditions</label></div><button class="btn btn-light submit-button" type="button">Submit Form</button>
                                
                        </div>
                    </div>
                </div>
                
                
                
                <button type="button" class="action-button previous previous_button">Atras</button>
                <button type="button" class="next action-button">Continuar</button>
            </fieldset>

            <fieldset>
                <h3>Forma de Pago</h3>
                <h6>Por favor rellene los datos para completar la respectiva transacción </h6>
                        <div class="row">
                            <div class="mx-auto">
                                <div class="bg-white rounded-lg shadow-sm p-5">
                                    <!-- Credit card form tabs -->
                                    <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
                                        <li class="nav-item">
                                            <a data-toggle="pill" href="#nav-tab-card"
                                                class="nav-link active rounded-pill">
                                                <i class="fa fa-credit-card"></i>
                                                Tarjeta de Credito
                                            </a>
                                        </li>                                      
                                    </ul>
                                    <!-- End -->
                                    <!-- Credit card form content -->
                                    <div class="tab-content">
                                        <!-- credit card info-->
                                        <div id="nav-tab-card" class="tab-pane fade show active">                  
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="username">Nombre Completo (Dentro la Tarjeta)</label>
                                                    <input type="text" name="username" placeholder="Jeff Doe" required
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="cardNumber">Número de la Tarjeta</label>
                                                    <div class="input-group">
                                                        <input type="text" name="cardNumber"
                                                            placeholder="1234 5678 9123 4567" class="form-control"
                                                            required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text text-muted">
                                                                <i class="fa fa-cc-visa mx-1"></i>
                                                                <i class="fa fa-cc-amex mx-1"></i>
                                                                <i class="fa fa-cc-mastercard mx-1"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <label><span class="hidden-xs">Expiración</span></label>
                                                            <div class="input-group">
                                                                <input type="number" placeholder="MM" name=""
                                                                    class="form-control" required>
                                                                <input type="number" placeholder="AA" name=""
                                                                    class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group mb-4">
                                                            <label data-toggle="tooltip"
                                                                title="Los 3 ultimos digitos de la parte de atras de su tarjeta">CVV
                                                                <i class="fa fa-question-circle"></i>
                                                            </label>
                                                            <input type="text" required class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button"
                                                    class="subscribe btn btn-primary btn-block rounded-pill shadow-sm">
                                                    Confirm </button>
                                            </form>
                                        </div>
                                        <!-- End -->
                                    </div>
                                    <!-- End -->
                                </div>
                            </div>
                        </div>
                <button type="button" class="action-button previous previous_button">Atras</button>
                <a href="#" class="action-button">Finalizar</a>
            </fieldset>
        </form>
    </section>



















    <footer class="footer bg-light" style="background: linear-gradient(135deg, #172a74, #21a9af), #184e8e;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto h-100 text-center text-lg-left">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="#">About</a></li>
                        <li class="list-inline-item"><span>⋅</span></li>
                        <li class="list-inline-item"><a href="#">Contact</a></li>
                        <li class="list-inline-item"><span>⋅</span></li>
                        <li class="list-inline-item"><a href="#">Terms of &nbsp;Use</a></li>
                        <li class="list-inline-item"><span>⋅</span></li>
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">© Brand 2021. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 my-auto h-100 text-center text-lg-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram fa-2x fa-fw"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>







    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Bootstrap-4---Payment-Form.js"></script>
    <script src="assets/js/Multi-step-form-type1.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script><script src="assets/js/multi-step-form.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>


</body>

</html>
