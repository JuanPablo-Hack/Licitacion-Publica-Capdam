<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include('estaticos/head.php') ?>
    <title>Rural | CAPDAM</title>
</head>
<body id="main">
    <?php include('estaticos/nav.php') ?>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l3 xl3">
               <a class="w3-btn w3-block middleblue" href="javascript:history.back(-1);" style="color:white"><img style="width:30px;vertical-align:middle;" src="images/iconos/icon_regresar.png"> Regresar</a>
                <ul id="list" class="collection with-header">
                    <li class="collection-header"><h4><b>Rural</b></h4></li>
                    <a id='1' onclick='mostrar(this.id)' class='collection-item active'>Planta de tratamiento de Camotlan I</a>
                    <a id='2' onclick='mostrar(this.id)' class='collection-item'>Planta de tratamiento de Camotlan II</a>
                    <a id='3' onclick='mostrar(this.id)' class='collection-item'>Planta de tratamiento de Cedros</a>
                    <a id='4' onclick='mostrar(this.id)' class='collection-item'>Planta de tratamiento de Huiscolote</a>
                    <a id='5' onclick='mostrar(this.id)' class='collection-item'>Planta de tratamiento de Puertecito de Lajas I</a>
                    <a id='6' onclick='mostrar(this.id)' class='collection-item'>Planta de tratamiento de Puertecito de Lajas II</a>
                    <a id='7' onclick='mostrar(this.id)' class='collection-item'>Pozo de Miramar</a>
                    <a id='8' onclick='mostrar(this.id)' class='collection-item'>Pozo Ivecol</a>
                </ul>
            </div>
            <div class="col s12 m12 l9 xl9">
                <div id="panel_1" style="display:block">
                    <blockquote><h2>Planta de tratamiento de Camotlan I</h2></blockquote>
                    <h3><i>Se realizó limpieza de la planta de tratamiento de Camotlán I</i></h3>
                    <div class="grid-container">
                        <div class="grid-item">
                            <img class="materialboxed responsive-img" data-caption="Se realizó limpieza de la planta de tratamiento de Camotlán I" width="250" src="images/apartado_rural/planta_de_tratamiento_de_camotlan_I/camotlanI1.jpg">
                        </div>
                        <div class="grid-item">
                            <img class="materialboxed responsive-img" data-caption="Se realizó limpieza de la planta de tratamiento de Camotlán I" width="250" src="images/apartado_rural/planta_de_tratamiento_de_camotlan_I/camotlanI2.jpg">
                        </div>
                        <div class="grid-item">
                            <img class="materialboxed responsive-img" data-caption="Se realizó limpieza de la planta de tratamiento de Camotlán I" width="250" src="images/apartado_rural/planta_de_tratamiento_de_camotlan_I/camotlanI3.jpg">
                        </div>
                        <div class="grid-item">
                            <img class="materialboxed responsive-img" data-caption="Se realizó limpieza de la planta de tratamiento de Camotlán I" width="250" src="images/apartado_rural/planta_de_tratamiento_de_camotlan_I/camotlanI4.jpg">
                        </div>
                        <div class="grid-item">
                            <img class="materialboxed" data-caption="Se realizó limpieza de la planta de tratamiento de Camotlán I" width="250" src="images/apartado_rural/planta_de_tratamiento_de_camotlan_I/camotlanI5.jpg">
                        </div>
                    </div>
                </div>
                <div id="panel_2" style="display:none">
                    <blockquote><h2>Planta de tratamiento de Camotlan II</h2></blockquote>
                </div>
                <div id="panel_3" style="display:none">
                    <blockquote><h2>Planta de tratamiento de Cedros</h2></blockquote>
                </div>
                <div id="panel_4" style="display:none">
                    <blockquote><h2>Planta de tratamiento de Huiscolote</h2></blockquote>
                </div>
                <div id="panel_5" style="display:none">
                    <blockquote><h2>Planta de tratamiento de Puertecito de Lajas I</h2></blockquote>
                </div>
                <div id="panel_6" style="display:none">
                    <blockquote><h2>Planta de tratamiento de Puertecito de Lajas II</h2></blockquote>
                </div>
                <div id="panel_7" style="display:none">
                    <blockquote><h2>Pozo de Miramar</h2></blockquote>
                </div>
                <div id="panel_8" style="display:none">
                    <blockquote><h2>Pozo Ivecol</h2></blockquote>
                </div>
            </div>
        </div>
    </div>
    <?php include('estaticos/scripts.php') ?>  
    <?php include('estaticos/footer.php') ?>
</body>
</html>