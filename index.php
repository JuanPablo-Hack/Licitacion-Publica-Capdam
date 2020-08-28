<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include('estaticos/head.php') ?>
    <title>Inicio | CAPDAM</title>
</head>    
<body id="main">
    <?php include('estaticos/nav.php') ?> 

    <div class="container">
        <div class="carousel carousel-slider center" data-indicators="true">
            <div class='carousel-item'>
                <img src='images/bannerinicio/banner1.jpg'>
            </div>
            <div class='carousel-item'>
                <img src='images/bannerinicio/banner2.jpg'>
            </div>
            <div class='carousel-item'>
                <img src='images/bannerinicio/banner3.jpg'>
            </div>
            <div class='carousel-item'>
                <img src='images/bannerinicio/banner4.jpg'>
            </div>
            <div class='carousel-item'>
                <img src='images/bannerinicio/banner5.jpg'>
            </div>
            <div class='carousel-item'>
                <img src='images/bannerinicio/banner6.jpg'>
            </div>
        </div><br>
        <div class="row">
            <div class='col s12 m12 l4 xl4'>
                <a id='btninicio1' href='atencion_a_clientes.php' class='w3-btn w3-block darkblue'><img id='imginicio' src='images/iconos/icon_btn_1.png'>Fugas y reportes</a>
                <br class="hide-on-large-only">
            </div>
            <div class='col s12 m12 l4 xl4'>
                <a id='btninicio2' href='http://187.218.240.83/ingreso.php' class='w3-btn w3-block darkblue'><img id='imginicio' src='images/iconos/icon_btn_2.png'>Pago en línea</a>
                <br class="hide-on-large-only">
            </div>
            <div class='col s12 m12 l4 xl4'>
                <a id='btninicio3' href='atencion_a_clientes.php' class='w3-btn w3-block darkblue'><img id='imginicio' src='images/iconos/icon_btn_3.png'>Tramites</a>
            </div>
        </div>
        <div class="row">
            <div id="licitacion"><img style="width:40px;margin-right:10px" src="images/iconos/licitacion.png"><a href="licitacion.php">Licitación Publica Estatal</a></div>
        </div>
        <div id="hagamoshistoria" class="section scrollspy">
            <blockquote><h2>#HagamosHistoria</h2></blockquote>
            <div class="row">
                <div class='col s12 m12 l4 xl4'>
                    <center>
                        <img src="images/iconos/circulo_1.png" id="img_circulo">
                        <!--
                        <div class='circulo'>
                            <p><b>4,462</b><br>Fugas de agua<br>potable atendidas,<br>marzo-diciembre<br>2019</p>
                        </div>
                        -->
                    </center>
                </div>
                <div class='col s12 m12 l4 xl4'>
                    <center>
                        <img src="images/iconos/circulo_2.png" id="img_circulo">
                        <!--
                        <div class='circulo'>
                            <p><b>12</b><br>Grandes obras realizadas, incluyendo zona urbana y rural de Manzanillo</p>
                        </div>
                        -->
                    </center>
                </div>
                <div class='col s12 m12 l4 xl4'>
                    <center>
                        <img src="images/iconos/circulo_3.png" id="img_circulo">
                        <!--
                        <div class='circulo'>
                            <p><b>XXX</b><br>insertar dato</p>
                        </div>
                        -->
                    </center>
                </div>
            </div>
            <div class="row">
                    <p style="font-size:15pt" align="center">
                        Durante 2019 la CAPDAM realizo un total de 12 grandes obras, en delegaciones como Santiago, Valle de las Garzas, Manzanillo Centro, entre otras.<br><br>Entre las obras realizadas tenemos la construcción de una línea de presión, de una red de drenaje sanitario, ampliación de la red de alcantarillado sanitario, la rehabilitación de red de la red de agua potable, la ampliación de la capacidad de medición de agua potable suministrada, rehabilitación de colector de alcantarillado sanitario, entre otras.
                    </p>
                    <a href="hagamos_historia.php" class="w3-btn w3-block middleblue" style="color:white">Ver la nota completa <img style="width:30px;vertical-align:middle;" src="images/iconos/icon_ir.png"></a>
            </div>
        </div> 
        <div class="row">
            <div class="col s12 m12 l8 xl8" id="rural" class="section scrollspy">
                <blockquote><h2>Rural</h2></blockquote>
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src='images/apartado_rural/planta_de_tratamiento_de_camotlan_I/camotlanI4.jpg'>
                            <div class='caption center-align'>
                                <h3>Planta de tratamiento de Camotlán I</h3>
                                <h5 class='light grey-text text-lighten-3'>Se realizó limpieza de la planta de tratamiento de Camotlán I</h5>
                            </div>
                        </li>
                        <li>
                            <img src='images/apartado_rural/planta_de_tratamiento_de_camotlan_II/camotlanII9.jpg'>
                            <div class='caption center-align'>
                                <h3>Planta de tratamiento de Camotlán II</h3>
                                <h5 class='light grey-text text-lighten-3'>Limpieza y mantenimiento de planta de tratamiento de Camotlán II</h5>
                            </div> 
                        </li>
                        <li>
                            <img src='images/apartado_rural/planta_de_tratamiento_de_cedros/cedros2.jpg'>
                            <div class='caption center-align'>
                                <h3>Planta de tratamiento de Cedros</h3>
                                <h5 class='light grey-text text-lighten-3'>Limpieza y mantenimiento de la planta de tratamiento de Cedros</h5>
                            </div>
                        </li>
                        <li>
                            <img src='images/apartado_rural/planta_de_tratamiento_de_puertecito_de_lajas_I/puertesitoI6.jpg'>
                            <div class='caption center-align'>
                                <h3>Planta de tratamiento de Puertecito de Lajas I</h3>
                                <h5 class='light grey-text text-lighten-3'>Limpieza y mantenimiento de planta de tratamiento en Puertecito de Lajas</h5>
                            </div>
                        </li>
                        <li>
                            <img src='images/apartado_rural/planta_de_tratamiento_de_puertecito_de_lajas_II/puertesitoII3.jpg'>
                            <div class='caption center-align'>
                                <h3>Planta de tratamiento de Puertecito de Lajas II</h3>
                                <h5 class='light grey-text text-lighten-3'>Limpieza y mantenimiento de planta de tratamiento de la segunda planta, de Puertecito de Lajas</h5>
                            </div>
                        </li>
                        <li>
                            <img src='images/apartado_rural//planta_de_tratamiento_del_huiscolote/huiscolote5.jpg'>
                            <div class='caption center-align'>
                                <h3>Planta de tratamiento de Huiscolote</h3>
                                <h5 class='light grey-text text-lighten-3'>Trabajos de mantenimiento en planta de tratamiento del Huiscolote</h5>
                            </div>
                        </li>
                        <li>
                            <img src='images/apartado_rural/pozo_de_miramar/miramar1.jpg'>
                            <div class='caption center-align'>
                                <h3>Pozo de Miramar</h3>
                                <h5 class='light grey-text text-lighten-3'>Limpieza de pozo de Miramar</h5>
                            </div>
                        </li>
                        <li>
                            <img src='images/apartado_rural/pozo_ivecol/ivecol1.jpg'>
                            <div class='caption center-align'>
                                <h3>Pozo Ivecol</h3>
                                <h5 class='light grey-text text-lighten-3'>Se realizó limpieza de pozo Ivecol</h5>
                            </div>
                        </li>
                    </ul>
                </div>
                <p align="justify" id="descripcion_rural">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut placerat laoreet tellus, vitae aliquam nisl blandit ac. Nullam nec purus erat. Nam consectetur eget nisi et tempor. Maecenas condimentum tincidunt magna quis accumsan. Nam eu egestas erat. Integer condimentum sodales pretium. Fusce sit amet rhoncus mauris. Suspendisse feugiat consectetur enim malesuada feugiat. Mentitum nam amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut placerat laoreet tellus, vitae aliquam nisl blandit ac. Nullam nec purus erat. Nam consectetur eget nisi et tempor. Maecenas condimentum tincidunt magna quis accumsan. Nam eu egestas erat. Integer condimentum sodales pretium. Fusce sit amet rhoncus mauris. Suspendisse feugiat consectetur enim malesuada feugiat. Mentitum nam amet.
                </p>
                <a href="rural.php" class="w3-btn w3-block middleblue" style="color:white">Ver la nota completa <img style="width:30px;vertical-align:middle;" src="images/iconos/icon_ir.png"></a>
            </div>
            <div class="col s12 m12 l4 xl4" id="noticias" class="section scrollspy">
                <blockquote><h2>Noticias</h2></blockquote>
                <center>
                    <img src="images/iconos/siguenos-en-facebook.png" style="width:100%" class="responsive-img">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCAPDAManzanillo%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=653049428869785" width="100%" height="500" frameborder="0"></iframe>
                </center>
            </div>
        </div>
    </div>
    <?php include('estaticos/scripts.php') ?>
    <?php include('estaticos/footer.php') ?>
</body>
</html>