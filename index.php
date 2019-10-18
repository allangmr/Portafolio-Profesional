<?php
$var = 1;
$nombre = "Allan Montilla";
$fec_nac = "24/07/1995";
$posicion = "Análista de Sistemas y Desarrollador Web.";
$email ="allangmr10@hotmail.com";
$telefono = "+507 6621-9273";

?>
<!doctype html>
<html lang="es">
<head>

<!-- Simple Page Needs
================================================== -->
<title>Portafolio</title>
<meta charset="UTF-8">
<meta name="description" content="Allan Montilla - Perfil Profesional">
<meta name="keywords" content="programador, panama, desarrollador, web">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon
================================================== -->
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\reset.css">
<link rel="stylesheet" href="cubeportfolio\css\cubeportfolio.min.css">
<link rel="stylesheet" href="css\owl.theme.css">
<link rel="stylesheet" href="css\owl.carousel.css">
<link rel="stylesheet" href="css\style.css">
<link rel="stylesheet" href="css\colors\yellow.css" id="color">


<!-- Google Web fonts
================================================== -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">

<!-- Font Icons
================================================== -->
<link rel="stylesheet" href="icon-fonts\font-awesome-4.7.0\css\font-awesome.min.css">
<link rel="stylesheet" href="icon-fonts\web-design\flaticon.css">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


</head>
<body>
 <!-- Preloading -->
<div id="preloader">
    <div class="spinner">
    </div>
</div>

<!-- Wrapper -->
<div class="wrapper top_60 container">
<div class="row">

<!-- Profile Section
================================================== -->
<div class="col-lg-3 col-md-4">
    <div class="profile">
        <div class="profile-name">
            <span class="name"><?php echo $nombre;?></span><br>
            <span class="job"><?php echo $posicion;?></span>
        </div>
        <figure class="profile-image">
            <img src="images\perfil.jpg" alt="">
        </figure>
        <ul class="profile-information">
            <li></li>
            <li><p><span>Nombre:</span> <?php echo $nombre;?></p></li>
            <li><p><span>Fec. de Nacimiento:</span> <?php echo $fec_nac;?></p></li>
            <li><p><span>Posición:</span> <?php echo $posicion;?></p></li>
            <li><p><span>Email:</span> <?php echo $email;?></p></li>
            <li><p><span>Teléfono:</span> <?php echo $telefono;?></p></li>
        </ul>
        <div class="col-md-12">
            <a class="site-btn icon" href="pdf/curriculum.pdf" download="Resume-AllanMontilla" style="margin-bottom:15px">Descargar Curriculum<i class="fa fa-download" aria-hidden="true"></i></a>
            <a class="site-btn icon" href="https://www.linkedin.com/in/allan-montilla-ramirez-00a756b3/" style="    margin-bottom: 15px;margin-top:0px;">Perfil de Linkedin<i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a class="site-btn icon" href="https://github.com/allangmr" style="    margin-bottom: 30px;margin-top:0px;">Mi Repositorio de Código<i class="fa fa-github" aria-hidden="true"></i></a>
        </div>
    </div>
</div>

<!-- Page Tab Container Div -->
<div id="ajax-tab-container" class="col-lg-9 col-md-8 tab-container">

<!-- Header
================================================== -->
<div class="row">
    <header class="col-md-12">
        <nav>
            <div class="row">
                <!-- navigation bar -->
                <div class="col-md-8 col-sm-8 col-xs-4">
                    <ul class="tabs">
                        <li class="tab">
                            <a class="home-btn" href="#home"><i class="fa fa-home" aria-hidden="true"></i></a>
                        </li>
                        <li class="tab"><a href="#resume">EXPERIENCIA</a></li>
                        <!--<li class="tab"><a href="#portfolio">PORTAFOLIO</a></li> -->
                        <li class="tab"><a href="#contact">CONTACTO</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-8 dynamic">
                    <a href="mailto:allangmr10@hotmail.com" class="pull-right site-btn icon hidden-xs">Contácto Rapido <i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                    <div class="hamburger pull-right hidden-lg hidden-md"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content
    ================================================== -->
    <div class="col-md-12">
        <div id="content" class="panel-container">

            <!-- Home Page
            ================================================== -->
            <div id="home">
                <!-- Text Section -->
                <div class="row">
                    <section class="about-me line col-md-12 padding_30 padbot_45">
                    <div class="section-title"><span></span><h2>Mi Historia</h2></div>
                    <p class="top_30">Inicie en el mundo de la informática a los 12 años, cuando tuve mi primer computador, resulto ser una de las cosas que más me apasionaba, descubrir nuevas funciones, aprender nuevos atajos en el sistema operativo, entre otros. A la edad de 15 años ingrese al Colegio INTEC uno de los mejores colegios en Panamá a la hora de aprender Informática, me logre terminar el bachillerato con honores y aprendí entre otras cosas a programa en Turbo C, C++, Visual Basic y a dominar mucho mejor el computador.
                        <br>
                        <br> Luego ingrese a la universidad con muchas ganas de ser un Analista de Sistemas y Programador profesional, me encontré con el Desarrollo Web y fue amor a primera vista. Inicie mis pininos en la web con Php y trabajé en un inicio como Diseñador Web, luego tome un poco de experiencia en el área de seguros aunque lejos de la informática buscando dar el salto al departamento de tecnología pero fue un poco complicado y termine trabajando con el Grupo Primavera Holding donde pude realmente trabajar de lo que tanto me apasionaba. Luego de eso pase por diferentes compañías que me ayudaron a seguirme forjando en el ámbito profesional y es lo que sigo haciendo hasta hoy. Aunque ahora como Ingeniero Informático.</p>
                </section>
                </div>
                <!-- My Services Section -->
                <div class="row">
                    <section class="services line graybg col-md-12 padding_50 padbot_50">
                    <div class="section-title bottom_45"><span></span><h2>Mis Especialidades</h2></div>
                    <div class="row">
                        <!-- a service -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service">
                                <div class="icon">
                                    <i class="flaticon-html"></i>
                                </div>
                                <span class="title">Desarrollo Web</span>
                                <p class="little-text">Con 4 años de experiencia en el área del Desarrollo de aplicaciones Web .</p>
                            </div>
                        </div>
                        <!-- a service -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service">
                                <div class="icon">
                                    <i class="flaticon-attach"></i>
                                </div>
                                <span class="title">Análisis de Sistemas</span>
                                <p class="little-text">Con experiencia en el ánalisis de sistemas computacionales..</p>
                            </div>
                        </div>
                        <!-- a service -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service">
                                <div class="icon">
                                    <i class="flaticon-vector"></i>
                                </div>
                                <span class="title">Diseño Web</span>
                                <p class="little-text">Con experiencia en el área de diseño de aplicaciones y sitios web.</p>
                            </div>
                        </div>
                        <!-- a service -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service">
                                <div class="icon">
                                    <i class="flaticon-schedule"></i>
                                </div>
                                <span class="title">Consultoría</span>
                                <p class="little-text">Asesoramiento y consultoría informática.</p>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
                <!-- Skills Section -->
                <div class="row">
                    <section class="design-skills col-md-6 padding_60 padbot_50">
                        <div class="section-title bottom_45"><span></span><h2>Diseño Web</h2></div>
                        <ul class="skill-list">
                            <li>
                                <h3>Photoshop</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:20%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>Wordpress</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:80%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>Diseño a Medida</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:80%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>HTML5</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:80%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>CSS3</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:30%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>Jquery</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:70%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>Vue</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:50%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>Angular</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:20%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>React</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:10%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>Bootstrap</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:70%;"></div>
                                </div>
                            </li>
                        </ul>
                    </section>
                    <section class="code-skills col-md-6 padding_60">
                        <div class="section-title bottom_45"><span></span><h2>Análisis y Desarrollo de Sistemas</h2></div>
                        <ul class="skill-list">
                            <li>
                                <h3>Javascript</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:60%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>PHP</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:90%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>Laravel</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:60%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>ASP .NET</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:10%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>Python</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:10%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>Node.js</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:10%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>SQL</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:60%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>Git</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:60%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>Linux</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:40%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>Metodologías Agiles y Gestión de Proyectos</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:40%;"></div>
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>

            <!-- Resume Page
            ================================================== -->
            <div id="resume">
                <!-- Resume Section -->
                <div class="row">
                    <section class="education">
                    <div class="section-title top_30"><span></span><h2>Experiencia</h2></div>
                        <div class="row">
                            <!-- Working History -->
                            <div class="working-history col-md-6 padding_15 padbot_30">
                                <ul class="timeline col-md-12 top_30">
                                    <li><i class="fa fa-suitcase" aria-hidden="true"></i><h2 class="timeline-title">Experiencia Laboral</h2></li>
                                    <!-- a work -->
                                    <li><h3 class="line-title">Consultoría y Desarrollo Web - TIVIT</h3>
                                        <span>Febrero de 2019- Presente</span>
                                        <p class="little-text">Desarrollo de mejoras a sistema comercial, implementación de nuevas tecnlogías, Full Stack Web Developer.</p>
                                    </li>
                                   <!-- a work -->
                                    <li><h3 class="line-title">Consultoría de TI - Grupo VLA</h3>
                                        <span>Marzo de 2018 - Presente</span>
                                        <p class="little-text">Proveer soluciones tecnológicas y dirección de equipo de IT. Manejo de Proyectos.</p>
                                    </li>
                                   <!-- a work -->
                                    <li><h3 class="line-title">Gerente - MC TEAM </h3>
                                        <span>Agosto de 2016 - Presente</span>
                                        <p class="little-text">Encargado de la planeación y análisis de los procesos y sistemas informáticos, Desarrollo de Soluciones en la Nube. Manejo del Staff de Desarrollo y Gerente de Proyectos.</p>
                                    </li>
                                    <!-- a work -->
                                    <li><h3 class="line-title">Análista de Sistemas - Dchain </h3>
                                        <span>Marzo de 2016 - Julio de 2016</span>
                                        <p class="little-text">Desarrollo de aplicaciones web a medida, manejo de metodologías ágiles.</p>
                                    </li>
                                    <!-- a work -->
                                    <li><h3 class="line-title">Programador - Grupo Primavera</h3>
                                        <span>Agosto de 2015 - Febrero de 2016</span>
                                        <p class="little-text">Desarrollo de aplicaciones web, análisis de sistemas computacionales, diseño y planeación de soluciones tenológicas.</p>
                                    </li>
                                    <!-- a work -->
                                    <li><h3 class="line-title">Web Design - Web Studio Panamá</h3>
                                        <span>Enero de 2015 - Marzo de 2015</span>
                                        <p class="little-text">Diseño de Sitios Web autoadministrables y responsive.</p>
                                    </li>
                                </ul>
                            </div>
                            <!-- Education History -->
                            <div class="education-history col-md-6 padding_15 padbot_30">
                                <ul class="timeline col-md-12 top_30">
                                    <li><i class="fa fa-graduation-cap" aria-hidden="true"></i><h2 class="timeline-title">Educación</h2></li>
                                    <!-- a work -->
                                    <li><h3 class="line-title">Ing. Informática - ULACIT</h3>
                                        <span>2013 - 2018</span>
                                        <p class="little-text">Estudios universitarios.</p>
                                    </li>
                                   <!-- a work -->
                                    <li><h3 class="line-title">INTEC</h3>
                                        <span>2010 - 2012</span>
                                        <p class="little-text">Bachiller en Contabilidad con enfásis en Informática.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- Portfolio Page
            ================================================== -->
            <!--
            <div id="portfolio" class="row bottom_45">
                <section class="col-md-12">
                    <div class="col-md-12 content-header bottom_15">
                        <div class="section-title top_30 bottom_30"><span></span><h2>Portafolio</h2></div>
                        <div id="filters-container">

                            <div data-filter="*" class="cbp-filter-item cbp-filter-item-active">Todos</div>
                            <div data-filter=".webdesign" class="cbp-filter-item">Desarrollo Web</div>
                            <div data-filter=".motion" class="cbp-filter-item">Diseño Web</div>
                            <div data-filter=".illustration" class="cbp-filter-item">Illustration</div>
                            <div data-filter=".photography" class="cbp-filter-item">Photography</div>
                        </div>
                    </div>
                    <div id="grid-container" class="top_60">
                        <div class="cbp-item webdesign">
                            <a href="portfolio-detail\work-01.html" class=" cbp-singlePage">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                    </div>
                                    <img src="images\works\work-01.jpg" alt="">
                                    <figcaption>
                                        <span class="title">Babel Admin</span><br>
                                        <span class="info">An admin template design.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="cbp-item cbp-lightbox motion">
                            <a href="http://www.youtube.com/watch?v=bpOSxM0rNPM&rel=0&autoplay=1" class="cbp-lightbox">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </div>
                                    <img src="images\works\work-02.jpg" alt="">
                                    <figcaption>
                                        <span class="title">George Motion</span><br>
                                        <span class="info">An motion graphic design.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="cbp-item cbp-lightbox photography">
                            <a href="images\works\work-06.jpg" class="cbp-lightbox">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                                    </div>
                                    <img src="images\works\work-06.jpg" alt="">
                                    <figcaption>
                                        <span class="title">Amazon Travel</span><br>
                                        <span class="info">Nature photography work.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="cbp-item webdesign">
                            <a href="portfolio-detail\work-02.html" class="cbp-singlePage">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                    </div>
                                    <img src="images\works\work-03.jpg" alt="">
                                    <figcaption>
                                        <span class="title">My Workspace</span><br>
                                        <span class="info">My current workspace design.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="cbp-item motion">
                            <a href="https://vimeo.com/199074744" class="cbp-lightbox">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </div>
                                    <img src="images\works\work-04.jpg" alt="">
                                    <figcaption>
                                        <span class="title">Recoba Template</span><br>
                                        <span class="info">Html template design.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="cbp-item webdesign">
                            <a href="portfolio-detail\work-01.html" class="cbp-singlePage">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                    </div>
                                    <img src="images\works\work-05.jpg" alt="">
                                    <figcaption>
                                        <span class="title">Doddy App</span><br>
                                        <span class="info">Mobile app ui kit design.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="cbp-item illustration">
                            <a href="portfolio-detail\work-01.html" class="cbp-singlePage">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                    </div>
                                    <img src="images\works\work-07.jpg" alt="">
                                    <figcaption>
                                        <span class="title">Bob Stayler </span><br>
                                        <span class="info">Illustration characher design.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="cbp-item illustration">
                            <a href="portfolio-detail\work-01.html" class="cbp-singlePage">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                    </div>
                                    <img src="images\works\work-08.jpg" alt="">
                                    <figcaption>
                                        <span class="title">Exemag Wordpress Theme</span><br>
                                        <span class="info">Multiconcept Blog Theme.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="cbp-item illustration">
                            <a href="portfolio-detail\work-01.html" class="cbp-singlePage">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                    </div>
                                    <img src="images\works\work-09.jpg" alt="">
                                    <figcaption>
                                        <span class="title">Babel Admin Html Code</span><br>
                                        <span class="info">An admin template design.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>

                    <div id="js-loadMore-agency" class="cbp-l-loadMore-button top_30">
                        <a href="load-more\portfolio.html" class="cbp-l-loadMore-link site-btn" rel="nofollow">
                            <span class="cbp-l-loadMore-defaultText">Load More (<span class="cbp-l-loadMore-loadItems">3</span>)</span>
                            <span class="cbp-l-loadMore-loadingText">Loading...</span>
                            <span class="cbp-l-loadMore-noMoreLoading">No More Works</span>
                        </a>
                    </div>
                </section>
            </div>
            -->
            <!-- Contact Page
            ================================================== -->
            <div id="contact">
                <div class="row">
                    <!-- Contact Informations -->
                    <section class="contact-info col-md-6 padding_30 padbot_45">
                        <div class="section-title top_15 bottom_30"><span></span><h2>Información de Contacto</h2></div>
                        <ul>
                            <li><span>Dirección:</span> Ciudad de Panamá, Panamá</li>
                            <li><span>Teléfono:</span> <?php echo $telefono;?></li>
                            <li><span>Correo:</span> allangmr10@hotmail.com</li>
                        </ul>
                    </section>
                </div>
            </div>

        </div><!-- Content - End -->
     </div> <!-- col-md-12 end -->
</div><!-- row end -->
<!-- Footer
================================================== -->
<footer>
    <div class="footer col-md-12 top_30 bottom_30">
        <div class="name col-md-4 hidden-md hidden-sm hidden-xs">Diseñado por Allan Montilla</div>
        <div class="copyright col-lg-8 col-md-12">© 2019 All rights reserved.</div>
    </div>
</footer>

</div> <!-- Tab Container - End -->
</div> <!-- Row - End -->
</div> <!-- Wrapper - End -->

<!-- Javascripts
================================================== -->
<script src="js\jquery-2.1.4.min.js"></script>
<script src="cubeportfolio\js\jquery.cubeportfolio.min.js"></script>
<script src="js\bootstrap.min.js"></script>
<script src="js\jquery.easytabs.min.js"></script>
<script src="js\owl.carousel.min.js"></script>
<script src="js\main.js"></script>
<!-- for color alternatives -->
<script src="js\jquery.cookie-1.4.1.min.js"></script>


</body>
</html>
