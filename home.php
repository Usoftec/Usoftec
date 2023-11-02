
<?php

session_start();

if(!isset($_SESSION['user'])){
    echo'
        <script>
            alert("Inicie sesion");
            windows.location ="login.php";
        </script>
    ';
    header("location:login.php");
    session_destroy();
    die();

}

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Usoftec | Cursos - Aprende manejo de software</title>
        <!--Ceo y posicionamiento web-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="author" content="Usoftec"/>
        <meta name="title" content="Usoftec | Cursos - Aprende manejo de software" >
        <meta name="description" content="Aprende manejo de software de ingeniería, ofimática y diseño gráfico a cualquier hora y en cualquier lugar"/>
        <meta name="disribution" content="global"/>
        <meta name="copyright" content="Copyright 2023 by Usoftec"/>
        <meta name="theme-color" content="#1877f2"/>
        <!--###########################-->
        <!--Targetas de Twitter-->
        <meta name="twitter:title" content="Usoftec | Cursos - Aprende manejo de software"/>
        <meta name="twitter:description" content="Aprende manejo de software de ingeniería ofimática y diseño gráfico a cualquier hora y en cualquier lugar"/>
        <meta name="twitter:card" content="photo"/>
        <meta name="twitter:site" content="@Usoftec"/>
        <meta name="twitter:url" content="https://www.usoftec.com/cursos" />
        <meta name="twitter:image" content="https://usoftec.com/img/logocursos.png"/>
        <!--###################-->
        <!-- Open Graph data Facebook -->
        <meta property="og:title" content="Usoftec | Cursos - Aprende manejo de software"/>
        <meta property="og:description" content="Aprende manejo de software de ingeniería ofimática y diseño gráfico a cualquier hora y en cualquier lugar"/>
        <meta property="og:type" content="Article" />
        <meta property="og:site_name" content="Usoftec"/>
        <meta property="og:url" content="https://www.usoftec.com/cursos" />
        <meta property="og:image" content="https://usoftec.com/img/logocursos.png"/>
        <!--###########################--> 
        <!--Fuentes, estylos, javascript y favicon-->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png"/>
        <link rel="stylesheet" media="all" href="css/stylos.css"/>
        <link rel="stylesheet" href="css/iconos/iconos.css"/>
        <link rel="canonical" href="https://www.usoftec.com"/>
        <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet"/>
        <script src="js/main.js" data-turbolinks-track="true"></script>
        <!--#######################################-->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <!--#######################################-->
    </head>
    <body style="background-image: linear-gradient( 86deg, #fff 0%, #fff 49%, #fff 100%);">
        <div id="user-data" class="absolute z-depth-2 white" data-open="false" data-turbolinks-permanent>
            <div>
                <nav>
                    <ul class='no-list collection main-nav'>
                        <div class='collection-item no-padding-large user-nav' style='font-size:1.1em;'>
                            <a class="grey-hover" href="index.html">
                                <li class='top-space row middle-xs grey-hover lighten-3-hover'>Inicio</li>
                            </a>
                            <a class="grey-hover" href="cursos.html">
                                <li class='top-space row middle-xs grey-hover lighten-3-hover'>Cursos</li>
                            </a>
                            <a href="blog.html">
                                <li class='top-space row middle-xs grey-hover lighten-3-hover'>Blog</li>
                            </a>
                            <a href="talleres.html">
                                <li class='top-space row middle-xs grey-hover lighten-3-hover'>Talleres</li>
                            </a>
                            <a href="https://www.paypal.com/paypalme/usoftec" target="_blank">
                                <li class='top-space row middle-xs grey-hover lighten-3-hover'>Donar</li>
                            </a>
                        </div>
                    </ul>
                </nav>    
            </div>
        </div>
        <nav class='grey darken-4 fixed new-black-text text-lighten-3 z-depth-1' data-turbolinks-permanent='true' id='main-nav'>
            <div class="row center-xs relative large-padding">
                <div class=' main-container col-xs-12 col-sm-11 col-md-10' stlye=''>
                    <div class='box'>
                        <button aria-label='toggle menu' class='tcon tcon-menu--xbutterfly absolute' id='open_user_data' style='left:1em;top:1.7em;' type='button'>
                            <span aria-hidden='true' class='tcon-menu__lines'></span>
                            <span class='tcon-visuallyhidden'></span>
                        </button>
                        <ul class='no-list row middle-xs'>
                            <div class='col-xs-2 hidden-bg'></div>
                            <div class='no-padding text-left col-xs-5 col-sm-2 col-md-4'>
                                <div class='box'>
                                    <a href="index.html"><img height="45" src="img/usoftec.png" alt="Logotipo" />
                                    </a>
                                </div>
                            </div>
                            <div class=' no-padding text-right col-xs-5"                                                                                                                                                                                                              col-sm-9 col-md-8'>
                                <div class='box'>
                                    <ul class='horizontal_nav new-black-text text-lighten-3 relative text-right' style='min-height:1em;'>
                                        <a class="hidden-xs" href="index.html">
                                            <li class='inline-block'>
                                                <i class='icon-home'></i>
                                                <p class='no-margin be-small'>Inicio</p>
                                            </li>
                                        </a>
                                        <a class="hidden-xs" href="cursos.html">
                                            <li class='inline-block'>
                                                <i class='icon-play'></i>
                                                <p class='no-margin be-small'>Cursos</p>
                                            </li>
                                        </a>
                                        <a class="hidden-xs" href="blog.html">
                                            <li class='inline-block'>
                                                <i class="icon-book"></i>
                                                <p class='no-margin be-small'>Blog</p>
                                            </li>
                                        </a> 
                                        <a class="hidden-xs" href="talleres.html">
                                            <li class='inline-block'>
                                                <i class="icon-file-text2"></i>
                                                <p class='no-margin be-small'>Talleres</p>
                                            </li>
                                        </a> 
                                        <a class="hidden-xs" href="https://www.paypal.com/paypalme/usoftec" target="_blank">
                                            <li class='inline-block'>
                                                <i class="icon-credit-card"></i>
                                                <p class='no-margin be-small'>Donar</p>
                                            </li>
                                        </a>    
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <section id="body">
            <section class='top-30'>
                <div class="row center-xs text-left ">
                    <div class=' col-xs-12 col-sm-11 col-md-10 col-lg-9'>
                        <div class='box'>
                            <h3 class='be-big slim no-margin'> </h3>
                            <div class='row top-xs center-xs text-left'>
                                <div class='col-courses text-left courses-index black-text' style='max-width:930px;flex-basis:930px;'>
                                    <div class='box'>
                                        <div id='courses'>
                                            <div class='top-30'>
                                                <div class='row center-xs'>    
                                                    <article class='card col-course course no-padding premium relative text-left' data-category-ids=''>
                                                        <div class='box'style="background: #f1f1f1;">
                                                            <div class='absolute' style='top:15px;right:15px;z-index:10;'>
                                                                <img height="20" src="img/iconoword.png" alt="Cursos preuniversitarios" />
                                                            </div>
                                                            <a href="cursowordbasicoclase01.html">
                                                                <img class="imagendecursos" src="img/cursofundamentosdeword.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class='white large-padding body'>
                                                            <h2 class='black-text no-margin normal-line-height'>
                                                                <a href="cursowordbasicoclase01.html">Fundamentos de Microsoft Word</a>
                                                            </h2>
                                                            <div class='row bottom-xs'>
                                                                <div class=' col-xs-6'>
                                                                    <div class='box'>
                                                                        <div class='circle-avatar grey inline-block middle-block' style='width:20px;height:20px;'></div>
                                                                        <span class='middle-block'>04h 30 mins</span>
                                                                    </div>
                                                                </div>
                                                                <div class='text-right col-xs-6' style='font-size:0.8em;'>
                                                                    <div class='box'>
                                                                        <div id='add-course-75'>
                                                                            <a class="waves-effect waves-teal btn-flat green-flat-text no-padding no-margin" style="font-size:1.2em;line-height:51px;" data-type="script" href="cursowordbasicoclase01.html">Gratuíto 🛒</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <center>
                                                            <a class="botonschooltec02" href="cursowordbasicoclase01.html">
                                                                <color style="color: #ffffff; font-weight: bold;">¡Inscríbete gratis!</color>
                                                            </a>
                                                        </center>
                                                        <br>
                                                        <br>
                                                    </article>
                                                
                                                    <article class='card col-course course no-padding premium relative text-left' data-category-ids=''>
                                                        <div class='box'style="background: #f1f1f1;">
                                                            <div class='absolute' style='top:15px;right:15px;z-index:10;'>
                                                                <img height="20" src="img/iconoexcel.png" alt="Cursos preuniversitarios" />
                                                            </div>
                                                            <a href="cursoexcelbasicoclase01.html">
                                                                <img class="imagendecursos" src="img/cursofundamentosdeexcel.png" alt="Fundamentos de mapas geográficos con AutoCAD">
                                                            </a>
                                                        </div>
                                                        <div class='white large-padding body'>
                                                            <h2 class='black-text no-margin normal-line-height'>
                                                                <a href="cursoexcelbasicoclase01.html">Fundamentos de Microsoft Excel</a>
                                                            </h2>
                                                            <div class='row bottom-xs'>
                                                                <div class=' col-xs-6'>
                                                                    <div class='box'>
                                                                        <div class='circle-avatar grey inline-block middle-block' style='width:20px;height:20px;'></div>
                                                                        <span class='middle-block'>05h 25mins</span>
                                                                    </div>
                                                                </div>
                                                                <div class='text-right col-xs-6' style='font-size:0.8em;'>
                                                                    <div class='box'>
                                                                        <div id='add-course-75'>
                                                                            <a class="waves-effect waves-teal btn-flat green-flat-text no-padding no-margin" style="font-size:1.2em;line-height:51px;" data-type="script" href="cursoexcelbasicoclase01.html">Gratuíto 🛒</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <center>
                                                            <a class="botonschooltec02" href="cursoexcelbasicoclase01.html">
                                                                <color style="color: #ffffff; font-weight: bold;">¡Inscríbete gratis!</color>
                                                            </a>
                                                        </center>
                                                        <br>
                                                        <br>
                                                    </article>
                                                    
                                                    <article class='card col-course course no-padding premium relative text-left' data-category-ids=''>
                                                        <div class='box'style="background: #f1f1f1;">
                                                            <div class='absolute' style='top:15px;right:15px;z-index:10;'>
                                                                <img height="20" src="img/iconoautocad.png" alt="Cursos preuniversitarios" />
                                                            </div>
                                                            <a href="">
                                                                <img class="imagendecursos" src="img/cursofundamentosdeautocad.png" alt="Fundamentos de física">
                                                            </a>
                                                        </div>
                                                        <div class='white large-padding body'>
                                                            <h2 class='black-text no-margin normal-line-height'>
                                                                <a href="cursoautocadbasicoclase01.html">Fundamentos de Autodesk AutoCAD</a>
                                                            </h2>
                                                            <div class='row bottom-xs'>
                                                                <div class=' col-xs-6'>
                                                                    <div class='box'>
                                                                        <div class='circle-avatar grey inline-block middle-block' style='width:20px;height:20px;'></div>
                                                                        <span class='middle-block'>04h 30 mins</span>
                                                                    </div>
                                                                </div>
                                                                <div class='text-right col-xs-6' style='font-size:0.8em;'>
                                                                    <div class='box'>
                                                                        <div id='add-course-75'>
                                                                            <a class="waves-effect waves-teal btn-flat green-flat-text no-padding no-margin" style="font-size:1.2em;line-height:51px;" data-type="script" href="cursoautocadbasicoclase01.html">Gratuíto 🛒</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <center>
                                                            <a class="botonschooltec02" href="cursoautocadbasicoclase01.html">
                                                                <color style="color: #ffffff; font-weight: bold;">¡Inscríbete gratis!</color>
                                                            </a>
                                                        </center>
                                                        <br>
                                                        <br>
                                                    </article>
                                                    <article class='card col-course course no-padding premium relative text-left' data-category-ids=''>
                                                        <div class='box'style="background: #f1f1f1;">
                                                            <div class='absolute' style='top:15px;right:15px;z-index:10;'>
                                                                <img height="20" src="img/logoqgis.png" alt="Cursos preuniversitarios" />
                                                            </div>
                                                            <a href="">
                                                                <img class="imagendecursos" src="img/fundamentosdeqgis.png" alt="Fundamentos de física">
                                                            </a>
                                                        </div>
                                                        <div class='white large-padding body'>
                                                            <h2 class='black-text no-margin normal-line-height'>
                                                                <a href="cursoautocadbasicoclase01.html">Fundamentos de Autodesk QGIS</a>
                                                            </h2>
                                                            <div class='row bottom-xs'>
                                                                <div class=' col-xs-6'>
                                                                    <div class='box'>
                                                                        <div class='circle-avatar grey inline-block middle-block' style='width:20px;height:20px;'></div>
                                                                        <span class='middle-block'>04h 30 mins</span>
                                                                    </div>
                                                                </div>
                                                                <div class='text-right col-xs-6' style='font-size:0.8em;'>
                                                                    <div class='box'>
                                                                        <div id='add-course-75'>
                                                                            <a class="waves-effect waves-teal btn-flat green-flat-text no-padding no-margin" style="font-size:1.2em;line-height:51px;" data-type="script" href="cursoautocadbasicoclase01.html">Gratuíto 🛒</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <center>
                                                            <a class="botonschooltec02" href="cursoautocadbasicoclase01.html">
                                                                <color style="color: #ffffff; font-weight: bold;">¡Inscríbete gratis!</color>
                                                            </a>
                                                        </center>
                                                        <br>
                                                        <br>
                                                    </article>
                                                                                                                     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="top-30">
                <footer class='footer grey darken-4 big-padding white-text'>
                    <div class="row center-xs text-left ">
                        <div class=' col-xs-12 col-sm-11 col-md-10 col-lg-9'>
                            <div class='box'>
                                <div class='row center-xs text-left'>
                                    <div class='last-xs first-md col-xs-6 col-sm-12 col-md-3 col-lg-2'>
                                        <div class='box'><img width="150" src="img/usoftec.png" alt="" /></div>
                                    </div>
                                    <div class=' col-xs-6 col-sm-3 col-md-3 col-lg-2'>
                                        <div class='box'>
                                            <p class='uppercase green-flat-text'>Contenido</p>
                                            <ul>
                                                <li><a href="cursos.html">Cursos</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="talleres.html">Talleres</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=' col-xs-6 col-sm-3 col-md-3 col-lg-2'>
                                        <div class='box'>
                                            <p class='uppercase green-flat-text'>Cursos</p>
                                            <ul>
                                                <li><a href="ingenieria.html">Ingeniería</a></li>
                                                <li><a href="ofimatica.html">Ofimática</a></li>
                                                <li><a href="diseñografico.html">Diseño</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=' col-xs-6 col-sm-3 col-md-3 col-lg-2'>
                                        <div class='box'>
                                            <p class='uppercase green-flat-text'>Nosotros</p>
                                            <ul>
                                                <li><a href="equipo.html">Equipo</a></li>
                                                <li><a href="contacto.html">Contacto</a></li>
                                                <li><a href="info.html">Información</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class='social col-xs-6 col-sm-3 col-md-6 col-lg-2'>
                                        <div class='box'>
                                            <p class='uppercase green-flat-text'>Redes sociales</p>
                                            <a href="https://twitter.com/Usoftec" target="_blank">
                                                <img height="25" src="img/twitter.png" alt="twitter" />
                                            </a>
                                            <a href="https://www.facebook.com/Usoftec" target="_blank">
                                                <img height="25" src="img/facebook.png" alt="Facebook"/>
                                            </a>
                                            <a href="https://instagram.com/Usoftec" target="_blank">
                                                <img height="25" src="img/instagram.png" alt="twitter"/>
                                            </a>
                                            <a href="https://www.youtube.com/channel/UCZli6TQ7vIYh94IvWfx1n_g" target="_blank">
                                                <img height="25" src="img/youtube.png" alt="youtube"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </section>
    </body>
</html>