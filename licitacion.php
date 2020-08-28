<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include('estaticos/head.php') ?>
    <title>Licitación Pública | CAPDAM</title>
</head>
<body id="main">
    <?php include('estaticos/nav.php') ?>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l3 xl3">
                <ul id="list" class="collection with-header">
                    <li class="collection-header"><h4><b>Licitación Pública </b></h4></li>
                    
                    <a id='2' onclick='mostrar(this.id)' class='collection-item'>Adquisiciones, Arrendamientos y Servicios</a>
                   
                    <a id='4' onclick='mostrar(this.id)' class='collection-item'>Licitaciones Obras Públicas</a>
                </ul>
            </div>
            <div class="col s12 m12 l9 xl9">
                <div id="panel_1" style="display:none">
                    <blockquote><h2>Adquisiciones, Arrendamientos y Servicios</h2></blockquote>
                    <div class="row valign-wrapper">
                        
                        <div width="20%" class="col s2"><img width="100%" src="images/logos/logo_funcion_publica.png"></div>
                        <div width="20%" class="col s2"><img width="100%" src="images/logos/logo_inai.png"></div>
                        <div width="20%" class="col s2"><img width="100%" src="images/logos/logo_infocol.png"></div>
                        <div width="20%" class="col s2"><img width="100%" src="images/logos/logo_PNT.png"></div>
                        <div width="20%" class="col s2"><img width="100%" src="images/logos/logo_conac.png"></div>
                        
                    </div>
                    <div id="titulo_directorio">2do. Trimestre 2018</div>
                    <center><p>No hay archivos disponibles</p></center><br>
                    <div id="titulo_directorio">3er. Trimestre 2018</div>
                    <table class="striped responsive-table">
                        <thead>
                          <tr>
                              <th>Documentos de Adquisiciones</th>
                              <th><center>Descargar</center></th>
                              <th><center>Ver</center></th>
                          </tr>
                        </thead>
                        <tbody>
                            <script>
                                var archivos = [
                                    ['Ejemplo','A.1.1.pdf'],
                                    ['Ejemplo','A.1.2.pdf']
                                ];  
                                for(var i=1; i<=(archivos.length); i++){
                                    document.write(
                                        '<tr>'+
                                            '<td id="td1_1">'+archivos[i-1][0]+'</td>'+
                                            '<td id="td2_2">'+
                                                '<center><a download="'+archivos[i-1][0]+'" href="archivos/seccion_transparencia/sevac/tercer_trimestre_2018/'+archivos[i-1][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                            '</td>'+
                                            '<td id="td3_3">'+
                                                '<center>'+
                                                    '<a href="#modal'+(i-1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                '</center>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<div id="modal'+(i-1)+'" class="modal modal-fixed-footer">'+
                                            '<div class="modal-content">'+
                                                '<blockquote><h2>'+archivos[i-1][0]+'</h2></blockquote>'+
                                                '<embed src="archivos/seccion_transparencia/sevac/tercer_trimestre_2018/'+archivos[i-1][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
                                            '</div>'+
                                            '<div class="modal-footer">'+
                                                '<a style="color:white" class="modal-close w3-btn w3-block middleblue">Cerrar <img style="width:20px;vertical-align:middle;" src="images/iconos/icon_cerrar.png"></a>'+
                                            '</div>'+
                                        '</div>'
                                    );
                                }
                            </script>
                        </tbody>
                    </table><br>
                    <div id="titulo_directorio">4to. Trimestre 2018</div>
                    <table class="striped">
                        <thead>
                          <tr>
                              <th>Documentos de Adquisiciones a Diciembre 2018</th>
                              <th><center>Descargar</center></th>
                              <th><center>Ver</center></th>
                          </tr>
                        </thead>
                        <tbody>
                            <script>
                                var archivos = [
                                    ['Ejemplo','A.1.1.pdf'],
                                    ['Ejemplo','A.1.2.pdf']
                                ];  
                                for(var i=0; i<=(archivos.length-1); i++){
                                    document.write(
                                        '<tr>'+
                                            '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                            '<td id="td2_2">'+
                                                '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/sevac/cuarto_trimestre_2018/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                            '</td>'+
                                            '<td id="td3_3">'+
                                                '<center>'+
                                                    '<a href="#modal_'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                '</center>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<div id="modal_'+(i+1)+'" class="modal modal-fixed-footer">'+
                                            '<div class="modal-content">'+
                                                '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                '<embed src="archivos/seccion_transparencia/sevac/cuarto_trimestre_2018/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
                                            '</div>'+
                                            '<div class="modal-footer">'+
                                                '<a style="color:white" class="modal-close w3-btn w3-block middleblue">Cerrar <img style="width:20px;vertical-align:middle;" src="images/iconos/icon_cerrar.png"></a>'+
                                            '</div>'+
                                        '</div>'
                                    );
                                }
                            </script>
                        </tbody>
                    </table><br>
                    <div id="titulo_directorio">1er. Trimestre 2019</div>
                    <table class="striped">
                        <thead>
                          <tr>
                              <th>Documentos Adquisiciones TRIMESTRE 2019</th>
                              <th><center>Descargar</center></th>
                              <th><center>Ver</center></th>
                          </tr>
                        </thead>
                        <tbody>
                            <script>
                                var archivos = [
                                    ['Ejemplo','A.1.1.pdf'],
                                    ['Ejemplo','A.1.2.pdf']
                                ];  
                                for(var i=0; i<=(archivos.length-1); i++){
                                    document.write(
                                        '<tr>'+
                                            '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                            '<td id="td2_2">'+
                                                '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/sevac/primer_trimestre_2019/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                            '</td>'+
                                            '<td id="td3_3">'+
                                                '<center>'+
                                                    '<a href="#modal__'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                '</center>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<div id="modal__'+(i+1)+'" class="modal modal-fixed-footer">'+
                                            '<div class="modal-content">'+
                                                '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                '<embed src="archivos/seccion_transparencia/sevac/primer_trimestre_2019/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
                                            '</div>'+
                                            '<div class="modal-footer">'+
                                                '<a style="color:white" class="modal-close w3-btn w3-block middleblue">Cerrar <img style="width:20px;vertical-align:middle;" src="images/iconos/icon_cerrar.png"></a>'+
                                            '</div>'+
                                        '</div>'
                                    );
                                }
                            </script>
                        </tbody>
                    </table><br>
                    <div id="titulo_directorio">2do. Trimestre 2019</div>
                    <table class="striped">
                       <thead>
                          <tr>
                              <th>Documentos Adquisiciones TRIMESTRE 2019</th>
                              <th><center>Descargar</center></th>
                              <th><center>Ver</center></th>
                          </tr>
                        </thead>
                        <tbody>
                            <script>
                                var archivos = [
                                    ['Ejemplo','A.1.1.pdf'],
                                    ['Ejemplo','A.1.2.pdf']
                                ];  
                                for(var i=0; i<=(archivos.length-1); i++){
                                    document.write(
                                        '<tr>'+
                                            '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                            '<td id="td2_2">'+
                                                '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/sevac/segundo_trimestre_2019/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                            '</td>'+
                                            '<td id="td3_3">'+
                                                '<center>'+
                                                    '<a href="#modal___'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                '</center>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<div id="modal___'+(i+1)+'" class="modal modal-fixed-footer">'+
                                            '<div class="modal-content">'+
                                                '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                '<embed src="archivos/seccion_transparencia/sevac/segundo_trimestre_2019/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
                                            '</div>'+
                                            '<div class="modal-footer">'+
                                                '<a style="color:white" class="modal-close w3-btn w3-block middleblue">Cerrar <img style="width:20px;vertical-align:middle;" src="images/iconos/icon_cerrar.png"></a>'+
                                            '</div>'+
                                        '</div>'
                                    );
                                }
                            </script>
                        </tbody>
                    </table><br>
                    <div id="titulo_directorio">3er. Trimestre 2019</div>
                    <table class="striped">
                        <thead>
                          <tr>
                              <th>Documentos Adquisiciones TRIMESTRE 2019</th>
                              <th><center>Descargar</center></th>
                              <th><center>Ver</center></th>
                          </tr>
                        </thead>
                        <tbody>
                            <script>
                                var archivos = [
                                    ['Ejemplo','A.1.1.pdf'],
                                    ['Ejemplo','A.1.2.pdf']
                                ];  
                                for(var i=0; i<=(archivos.length-1); i++){
                                    document.write(
                                        '<tr>'+
                                            '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                            '<td id="td2_2">'+
                                                '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/sevac/tercer_trimestre_2019/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                            '</td>'+
                                            '<td id="td3_3">'+
                                                '<center>'+
                                                    '<a href="#modal____'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                '</center>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<div id="modal____'+(i+1)+'" class="modal modal-fixed-footer">'+
                                            '<div class="modal-content">'+
                                                '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                '<embed src="archivos/seccion_transparencia/sevac/tercer_trimestre_2019/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
                                            '</div>'+
                                            '<div class="modal-footer">'+
                                                '<a style="color:white" class="modal-close w3-btn w3-block middleblue">Cerrar <img style="width:20px;vertical-align:middle;" src="images/iconos/icon_cerrar.png"></a>'+
                                            '</div>'+
                                        '</div>'
                                    );
                                }
                            </script>
                        </tbody>
                    </table><br>
                    <div id="titulo_directorio">4to. Trimestre 2019</div>
                    <table class="striped">
                        <thead>
                          <tr>
                              <th>Documentos Adquisiciones TRIMESTRE 2019</th>
                              <th><center>Descargar</center></th>
                              <th><center>Ver</center></th>
                          </tr>
                        </thead>
                        <tbody>
                            <script>
                                var archivos = [
                                    ['Ejemplo','A.1.1.pdf'],
                                    ['Ejemplo','A.1.2.pdf']
                                ];  
                                for(var i=0; i<=(archivos.length-1); i++){
                                    document.write(
                                        '<tr>'+
                                            '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                            '<td id="td2_2">'+
                                                '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/sevac/cuarto_trimestre_2019/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                            '</td>'+
                                            '<td id="td3_3">'+
                                                '<center>'+
                                                    '<a href="#modal_____'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                '</center>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<div id="modal_____'+(i+1)+'" class="modal modal-fixed-footer">'+
                                            '<div class="modal-content">'+
                                                '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                '<embed src="archivos/seccion_transparencia/sevac/cuarto_trimestre_2019/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
                                            '</div>'+
                                            '<div class="modal-footer">'+
                                                '<a style="color:white" class="modal-close w3-btn w3-block middleblue">Cerrar <img style="width:20px;vertical-align:middle;" src="images/iconos/icon_cerrar.png"></a>'+
                                            '</div>'+
                                        '</div>'
                                    );
                                }
                            </script>
                        </tbody>
                    </table><br>
                </div>
                <div id="panel_2" style="display:block">
                    <blockquote><h2>Adquisiciones, Arrendamientos y Servicios</h2></blockquote>
                            <table class="striped responsive-table">
                                <thead>
                                  <tr>
                                      <th>Apartados</th>
                                      <th><center>Ver</center></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <script>
                                        var archivos = [
                                            ['Licitaciones 2020'],
                                            ['Comité de Adquisiciones, Servicios y Arrendamientos 2020 '],
                                            ['Histórico'],
                                            ['Marco Normativo'],
                                            ['Proveedores']
                                        ];  
                                        for(var i=0; i<=(archivos.length-1); i++){
                                            document.write(
                                                '<tr>'+
                                                    '<td id="td1_1">'+archivos[i]+'</td>'+
                                                    '<td id="td3_3">'+
                                                        '<center>'+
                                                            '<a href="apartados.php?fraccion='+(i+1)+'"><img src="images/iconos/icon_flecha.png" style="width:25px"></a>'+
                                                            //'<a href="fracciones.php"><img src="images/iconos/icon_flecha.png" style="width:25px"></a>'+
                                                        '</center>'+
                                                    '</td>'+
                                                '</tr>'
                                            );
                                        }
                                    </script>
                                </tbody>
                            </table><br>
                </div>
                <div id="panel_3" style="display:none">
                    <blockquote><h2>Información de Intéres</h2></blockquote>
                    <i>La licitación, en términos empresariales, es el proceso reglado mediante el cual una organización da a conocer públicamente una necesidad, solicita ofertas que la satisfagan, evalúa estas ofertas y selecciona una de ellas. Esta palabra también puede referirse a un proceso de subasta.</i><br><br>
                    <table class="striped responsive-table">
                        <thead>
                          <tr>
                              <th>Documentos</th>
                              <th><center>Descargar</center></th>
                              <th><center>Ver</center></th>
                          </tr>
                        </thead>
                        <tbody>
                            <script>
                                var archivos = [
                                    ['ejemplo','articulo_46_1.pdf'],
                                    ['ejemplo','articulo_46_2.pdf']
                                ];  
                                for(var i=1; i<=(archivos.length); i++){
                                    document.write(
                                        '<tr>'+
                                            '<td id="td1_1">'+archivos[i-1][0]+'</td>'+
                                            '<td id="td2_2">'+
                                                '<center><a download="'+archivos[i-1][0]+'" href="archivos/seccion_transparencia/articulo_46/'+archivos[i-1][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                            '</td>'+
                                            '<td id="td3_3">'+
                                                '<center>'+
                                                    '<a href="#modal______'+(i-1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                '</center>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<div id="modal______'+(i-1)+'" class="modal modal-fixed-footer">'+
                                            '<div class="modal-content">'+
                                                '<blockquote><h2>'+archivos[i-1][0]+'</h2></blockquote>'+
                                                '<embed src="archivos/seccion_transparencia/articulo_46/'+archivos[i-1][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
                                            '</div>'+
                                            '<div class="modal-footer">'+
                                                '<a style="color:white" class="modal-close w3-btn w3-block middleblue">Cerrar <img style="width:20px;vertical-align:middle;" src="images/iconos/icon_cerrar.png"></a>'+
                                            '</div>'+
                                        '</div>'
                                    );
                                }
                            </script>
                        </tbody>
                    </table><br>
                </div>
                <div id="panel_4" style="display:none">
                    <blockquote><h2>Obras Públicas</h2></blockquote>
                    <i>Se denomina obra pública a todos los trabajos de construcción, ya sean infraestructuras o edificación, promovidos por una administración de gobierno teniendo como objetivo el beneficio de la comunidad. Existen dos tipos de contratación para la obra pública: Contratación directa o Licitación Pública.</i><br><br>
                    <table class="striped responsive-table">
                        <thead>
                          <tr>
                              <th>Documentos</th>
                              <th><center>Descargar</center></th>
                              
                          </tr>
                        </thead>
                        <tbody>
                            <script>
                                var archivos = [
                                    ['Convocatoria','CONVOCATORIA ESTATAL 001-19.pdf'],
                                    ['LOE-CAPDAMF4-20','LOE-CAPDAMF4-20.pdf'],
                                    ['LOE-CAPDAMF6-20','LOE-CAPDAMF6-20.pdf'],
                                    ['LOE-CAPDAMF9-20','LOE-CAPDAMF9-20.pdf'],
                                    ['LOE-CAPDAMF10-20','LOE-CAPDAMF10-20.pdf']
                                ];  
                                for(var i=1; i<=(archivos.length); i++){
                                    document.write(
                                        '<tr>'+
                                            '<td id="td1_1">'+archivos[i-1][0]+'</td>'+
                                            '<td id="td2_2">'+
                                                '<center><a download="'+archivos[i-1][0]+'" href="archivos/seccion_licitacion/Obras_publicas/'+archivos[i-1][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                            '</td>'+
                                            
                                        '</tr>'+
                                        '<div id="modal______'+(i-1)+'" class="modal modal-fixed-footer">'+
                                            '<div class="modal-content">'+
                                                '<blockquote><h2>'+archivos[i-1][0]+'</h2></blockquote>'+
                                                '<embed src="archivos/seccion_transparencia/articulo_46/'+archivos[i-1][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
                                            '</div>'+
                                            '<div class="modal-footer">'+
                                                '<a style="color:white" class="modal-close w3-btn w3-block middleblue">Cerrar <img style="width:20px;vertical-align:middle;" src="images/iconos/icon_cerrar.png"></a>'+
                                            '</div>'+
                                        '</div>'
                                    );
                                }
                            </script>
                        </tbody>
                    </table><br>
                </div>
            </div>
        </div> 
    </div>
    <?php include('estaticos/scripts.php') ?>  
    <?php include('estaticos/footer.php') ?>
</body>
</html>