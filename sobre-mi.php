<?php 
    $pg = "sobre-mi"; 

?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mí</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi">
    <header>
    <?php include_once "menu.php"; ?>
    </header>
    <main>
        <section class="container" id="sobre-mi">
            <div class="row">
                <div class="col-sm-5 col-12 mt-4">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                    <p class="pb-sm-5">Apasionado por la tecnología y gestión de proyectos. Soy alumno en el curso de
                        programación Full Stack de Depc Suite.</p>
                    <a href="contacto.php" class="btn btn-rojo">Enviar mensaje</a>
                </div>
                <div class="col-sm-3 col-12 mt-4 offset-sm-2">
                    <img src="images/elian-foto.jpg" alt="Elián Tiago Chávez" title="Elián Tiago Chávez"
                        class="img-fluid img-circle">
                </div>
            </div>
        </section>
        <section id="stack-tecnologico">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2>
                            Stack tecnológico
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="tecnologias mb-4 pt-5">
                            <h3>Javascript</h3>
                            <img src="images/js-foto.jpeg" alt="Javascript" width="60">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="tecnologias mb-4 pt-5">
                            <h3>PHP</h3>
                            <img src="images/php-foto.jpg" alt="PHP" width="60">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="tecnologias mb-4 pt-5">
                            <h3>HTML5</h3>
                            <img src="images/html-foto.png" alt="HTML5" width="60">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="tecnologias mb-4 pt-5">
                            <h3>React.js</h3>
                            <img src="images/react-foto.png" alt="react.js" width="60">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="tecnologias mb-4 pt-5">
                            <h3>jQuery</h3>
                            <img src="images/jquery-foto.jpg" alt="jQuery" width="60">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="tecnologias mb-4 pt-5">
                            <h3>Bootstrap
                            </h3>
                            <img src="images/bootstrap-foto.png" alt="Bootstrap" width="60">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="tecnologias mb-4 pt-5">
                            <h3>Laravel</h3>
                            <img src="images/laravel-foto.png" alt="Laravel" width="80">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="tecnologias mb-4 pt-5">
                            <h3>MySQL</h3>
                            <img src="images/mariadb-foto.png" alt="MySQL" width="60">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="tecnologias mb-4 pt-5">
                            <h3>CSS</h3>
                            <img src="images/css-foto.png" alt="CSS" width="60">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="tecnologias mb-4 pt-5">
                            <h3>Git</h3>
                            <img src="images/git-foto.png" alt="Git" width="60">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="tecnologias mb-4 pt-5">
                            <h3>Apache</h3>
                            <img src="images/apache-foto.png" alt="Apache" width="110">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="tecnologias mb-4 pt-5">
                            <h3>Mercadopago</h3>
                            <img src="images/mercadopago-foto.jpg" alt="Mercadopago" width="60">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia-laboral">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2>
                            <i class="fa-solid fa-briefcase"></i> Experiencia laboral
                        </h2>
                    </div>
                </div>
                <div class="row shadow">
                    <div class="col-2 py-3 my-auto d-none d-sm-block">
                        <img src="images/andreani-foto.svg" alt="Andreani" class="img-fluid baw" title="Andreani">
                    </div>
                    <div class="col-sm-10 p-3">
                        <!--Información ficticia-->
                        <h3>Desarrollador Junior</h3>
                        <h4>Andreani</h4>
                        <h5>2012 - 2015</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, aspernatur. Quas,
                            assumenda saepe quibusdam officia facilis, reiciendis culpa debitis dicta, aspernatur
                            tenetur et. Hic dicta accusantium ratione in porro minima.</p>
                    </div>
                    <div class="col-2 py-3 my-auto d-none d-sm-block">
                        <img src="images/globant-foto.png" alt="Globant" class="img-fluid baw" title="Globant">
                    </div>
                    <div class="col-sm-10 p-3">
                        <!--Información ficticia-->
                        <h3>Desarrollador Semi Senior Full Stack</h3>
                        <h4>Globant</h4>
                        <h5>2016 - 2018</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem atque assumenda a beatae,
                            itaque quibusdam placeat natus molestias minus provident adipisci corporis voluptatem dicta
                            consequatur? Harum, excepturi! A, nesciunt nostrum?</p>
                    </div>
                    <div class="col-2 py-3 my-auto d-none d-sm-block">
                        <img src="images/uala-foto.png" alt="Ualá" class="img-fluid baw" title="Ualá">
                    </div>
                    <div class="col-sm-10 p-3">
                        <!--Información ficticia-->
                        <h3>Desarrollador Senior Full Stack</h3>
                        <h4>Ualá</h4>
                        <h5>2018 - presente</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem atque assumenda a beatae,
                            itaque quibusdam placeat natus molestias minus provident adipisci corporis voluptatem dicta
                            consequatur? Harum, excepturi! A, nesciunt nostrum?</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion-academica">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2>
                            <i class="fa-solid fa-graduation-cap"></i> Formación académica
                        </h2>
                    </div>
                </div>
                <div class="row shadow">
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="images/uade-foto.png" alt="UADE" class="img-fluid baw" title="UADE"
                                    width="90">
                            </div>
                            <div class="col-12 col-sm-6 p-3">
                                <!--Información ficticia-->
                                <h3>Tecnicatura Universitaria en Desarrollo De Software </h3>
                                <h4>Universidad Argentina de la Empresa</h4>
                                <h5>2015 - 2018</h5>
                                <p>www.uade.edu.ar</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="images/uade-foto.png" alt="UADE" class="img-fluid baw" title="UADE"
                                    width="90">
                            </div>
                            <div class="col-12 col-sm-6 p-3">
                                <!--Información ficticia-->
                                <h3>Ingeniería en Informática</h3>
                                <h4>Universidad Argentina de la Empresa</h4>
                                <h5>2019 - presente</h5>
                                <p>www.uade.edu.ar</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="images/empleo-por-defecto-foto.png" alt="formacion-academica"
                                    class="img-fluid baw" title="formacion-academica" width="90">
                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <!--Información ficticia-->
                                <h3>Python</h3>
                                <h4>lorem</h4>
                                <h5>2019-2020</h5>
                                <p>link.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="images/empleo-por-defecto-foto.png" alt="formacion-academica"
                                    class="img-fluid baw" title="formacion-academica" width="90">
                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <!--Información ficticia-->
                                <h3>Python</h3>
                                <h4>lorem</h4>
                                <h5>2020-2021</h5>
                                <p>link.com</p>
                            </div>
                        </div>
                    </div>
        </section>
        <section id="cursos-desarrollo">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2>
                            <i class="fa-solid fa-graduation-cap"></i>Cursos de desarrollo profesional
                        </h2>
                    </div>
                </div>
                <div class="row shadow">
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="images/depcsuite-foto.svg" alt="DEPCSUITE" class="img-fluid baw"
                                    title="DEPCSUITE" width="90">
                            </div>
                            <div class="col-12 col-sm-6 p-3">
                                <h3>Programación Web Full Stack</h3>
                                <h4>DePC Suite S.A.</h4>
                                <h5>May 2022 - presente</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="images/empleo-por-defecto-foto.png" alt="Argentina programa"
                                    class="img-fluid baw" title="Argentina programa" width="90">
                            </div>
                            <div class="col-12 col-sm-6 p-3">
                                <h3>Programación Web Full Stack</h3>
                                <h4>Ministerio de Desarrollo Productivo - CESSI - INTI</h4>
                                <h5>Jun 2022 - presente</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="images/utn-foto.jpg" alt="UTN" class="img-fluid baw" title="UTN" width="90">
                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <!--Información ficticia-->
                                <h3>Desarrollo de Videojuegos</h3>
                                <h4>Universidad Tecnológica Nacional de Buenos Aires</h4>
                                <h5>2020-2021</h5>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white logo-idioma shadow me-sm-1">
                            <div class="col-4 text-center logo">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Basic A2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white logo-idioma shadow ms-sm-1">
                            <div class="col-4 text-center logo">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Tocar instrumentos</li>
                                    <li>Realizar deportes</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="container" class="mt-auto pb-4">
        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/nelson-daniel-tarche/" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0">
                <a href="mailto:elianpersont@gmail.com">elianpersont@gmail.com</a>
            </div>
        </div>
    </footer>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541126077951" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
</body>

</html>