<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include('estaticos/head.php') ?>
    <title>Acerca de CAPDAM | CAPDAM</title>
</head>
<body id="main">
    <?php include('estaticos/nav.php') ?><div class="container">
        <div class="row">
            <div class="col s12 m12 l3 xl3">
                <ul id="list" class="collection with-header">
                    <li class="collection-header"><h4><b>Conócenos</b></h4></li>
                    <a id='1' href='#' onclick='mostrar(this.id)' class='collection-item active'>Misión, visión y valores</a>
                    <a id='2' href='cultura_del_agua.php' onclick='mostrar(this.id)' class='collection-item'>Cultura del agua</a>
                    <a id='3' href='#' onclick='mostrar(this.id)' class='collection-item'>Departamentos</a>
                    <a id='4' href='#' onclick='mostrar(this.id)' class='collection-item'>Antecedentes</a>
                </ul>
            </div>
            <div class="col s12 m12 l9 xl9">
                <div id="panel_1" style="display:block">
                    <blockquote><h2>Misión, visión y valores</h2></blockquote>
                    <div class="w3-row">
                        <div class="w3-half w3-container">
                            <div class="w3-card-4">
                                <header class="w3-container w3-blue center"><br>
                                    <img style="width:70px" src="images/iconos/icon_mision.png">
                                    <h3>Misión</h3>
                                </header>
                                <div class="w3-container">
                                    <br>
                                    <p>Suministrar el servicio de agua potable y saneamiento, para satisfacer la demanda de la población y sus necesidades, con calidad y cantidad, garantizando el uso eficiente de los recursos para brindar un servicio responsable a Manzanillo.<br><br></p>
                                </div>
                            </div>
                        </div>
                        <div class="w3-half w3-container">  
                            <div class="w3-card-4">
                                <header class="w3-container w3-blue center"><br>
                                    <img style="width:70px" src="images/iconos/icon_vision.png">
                                    <h3>Visión</h3>
                                </header>
                                <div class="w3-container">
                                    <br>
                                    <p>Consolidarse como un organismo eficiente, sustentable e innovador en la prestación de los servicios con calidad, cantidad y rapidez, aprovechando nuestro capital humano, las tecnologías y promoviendo del uso racional del agua.<br><br></p>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="w3-container">
                        <div class="w3-card-4">
                            <header class="w3-container w3-blue center"><br>
                                <img style="width:70px" src="images/iconos/icon_valores.png">
                                <h3>Valores institucionales de la CAPDAM</h3>
                            </header>
                            <div class="w3-container">
                                <br>
                                <p>
                                    <b>•Honestidad: </b>Proporcionar un servicio de calidad a nuestros usuarios, cuidando el tiempo, equipos y recursos tanto materiales como humanos, asignados para el desempeño de nuestro trabajo.
                                </p>
                                <p>
                                    <b>•Responsabilidad: </b>Asumimos la importancia de cumplir cabalmente nuestra función y la obligación de dar cuentas a los usuarios de la población, de nuestro trabajo.
                                </p>
                                <p>
                                    <b>•Calidad: </b>Cumplir correcta y oportunamente con nuestro trabajo, resolviendo las necesidades de los servicios de nuestros usuarios.
                                </p>
                                <p>
                                    <b>•Innovación: </b>Buscamos la mejora continua en nuestro desempeño, a través de las alternativas y soluciones adecuadas y responsables, para lograr la excelencia.<br><br>
                                </p>
                            </div>
                        </div>
                    </div>    
                </div>
                <div id="panel_2" style="display:none"></div>
                <div id="panel_3" style="display:none">
                    <blockquote><h2>Departamentos</h2></blockquote>
                    <center><img style="width:50%;" src="images/molestias.png"></center>
                </div>
                <div id="panel_4" style="display:none">
                    <blockquote><h2>Antecedentes</h2></blockquote>
                    <center><img style="width:50%;" src="images/molestias.png"></center>
                </div>
            </div>
        </div>
    </div>
    <?php include('estaticos/scripts.php') ?>  
    <?php include('estaticos/footer.php') ?>
</body>
</html>