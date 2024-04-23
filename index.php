<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Agencia- Proyecto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="./asset/img/logo.jpeg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./asset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./asset/css/style.css" rel="stylesheet">

    <!-- bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>diegoaarenas06@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+57 3054648486</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="https://www.linkedin.com/in/diego-arenas06" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="https://www.instagram.com/aarenas_06/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">INFO</span>DEC</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="" class="nav-item nav-link active">Inicio</a>
                        <p style="cursor: pointer;" class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#IniciarSession">Iniciar Sesión</p>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="IniciarSession" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Inicia Sesión</h1>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="User" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="User">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="pass">
                    </div>
                    <center>
                        <button class="btn btn-primary">Iniciar Sesión</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="./asset/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Viajes</h4>
                            <h1 class="display-3 text-white mb-md-4">Conozcamos el mundo Juntos</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./asset/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Viajes</h4>
                            <h1 class="display-3 text-white mb-md-4">Descubre lugares maravillosos con nosotros</h1>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>

    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-6 mb-md-0">
                                    <!-- se implementa ciclo -->
                                    <label for="" class="form-label">Selecciona Un Pais</label>
                                    <select class="custom-select px-4" id="Pais" onchange="SelectCiu()" style="height: 47px;">
                                        <option selected></option>
                                        <option value="1">Inglaterra</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-6 mb-md-0">
                                    <!-- se implementa ciclo Dinamico -->
                                    <label for="" class="form-label">Selecciona Una Ciudad</label>
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected></option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="" class="form-label"></label>
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Buscar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <hr>

    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Calculadora De Divisa</h5>
                            <p class="currency-converter__description">Convierte fácilmente entre diferentes monedas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Calidad Continua</h5>
                            <p class="continuous-quality__description">Nos esforzamos por mantener la excelencia en todo momento.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="weather-update__title">Mantente Informado sobre el Clima Mundial</h5>
                            <p class="weather-update__description">Obtén actualizaciones meteorológicas de todo el mundo en tiempo real.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destinos</h6>
                <h1>Explora los mejores Destinos turisticos</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="./asset/img/Pais/inglaterra.avif" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">Inglaterra</h5>
                            <span>2 Ciudades</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="./asset/img/Pais/Japon.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">Japón</h5>
                            <span>2 Ciudades</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="./asset/img/Pais/India.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">India</h5>
                            <span>2 Ciudades</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="./asset/img/Pais/Dinamarca.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">Dinamarca</h5>
                            <span>2 Ciudades</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="text-white"> Registrate a nuestra Plataforma</h1>
                    </div>
                    <p class="text-white">¡No dejes pasar esta oportunidad única! Regístrate ahora y disfruta de un mundo de beneficios exclusivos. En nuestra plataforma, encontrarás todo lo que necesitas para llevar tu experiencia al siguiente nivel. Descubre productos de calidad, servicios excepcionales y promociones especiales que te ayudarán a alcanzar tus metas. Únete a nuestra comunidad hoy mismo y sé parte de algo extraordinario.</p>

                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Registrate </h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Nombres" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Apellidos" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Usuario" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control p-4" placeholder="Contraseña" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Sexo</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino </option>
                                        <option value="I">Prefiero no Indicar</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit">Registrarse</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">INFO</span>DEC</h1>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="https://www.linkedin.com/in/diego-arenas06" target="_blank">Diego Arenas </a>. Derechos reservados.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Diseñado por <a href="https://www.linkedin.com/in/diego-arenas06" target="_blank">aarenas_06</a>
                </p>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Librerias -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="./asset/lib/easing/easing.min.js"></script>
    <script src="./asset/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./asset/lib/tempusdominus/js/moment.min.js"></script>
    <script src="./asset/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="./asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- archivos Js -->
    <script src="./asset/mail/jqBootstrapValidation.min.js"></script>
    <script src="./asset/mail/contact.js"></script>

    <script src="./asset/js/main.js"></script>
    <script src="script.js"></script>

</body>

</html>