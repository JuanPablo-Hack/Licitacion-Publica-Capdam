<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include('estaticos/head.php') ?>
    <title>Adquisiciones | CAPDAM</title>
</head>    
<body id="main">
    <?php include('estaticos/nav.php') ?> 
    <div class="container">
        <div class="row">
            <a class="w3-btn middleblue" href="javascript:history.back(-1);" style="color:white"><img style="width:30px;vertical-align:middle;" src="images/iconos/icon_regresar.png"> Regresar</a>
            <?php
                switch ($_GET["fraccion"]) {
                    case 1:
                         
            ?>
                        <blockquote><h2>Licitaciones </h2></blockquote>
                        <div id="titulo_directorio">En proceso</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_1/nivel_nacional/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_1/nivel_nacional/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">Concluidos</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['COMBUSTIBLE (GASOLINA, NO HUBO )','Licitacion Combustible (No hubo).pdf'],
                                        ['HIPOCLORITO DE SODIO','HIPOCLORITO DE SODIO.pdf'],
                                        ['SEGURO VEHICULAR','SEGURO VEHICULAR.pdf'],
                                        ['SERV. LABORATORIO','SERV. LABORATORIO.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_licitacion/Adquisiciones/Licitaciones_2020/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
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
                                                    '<embed src="archivos/seccion_licitacion/Adquisiciones/Licitaciones_2020/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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

                        <br>                    
            <?php                       
                        break;
                    case 2:
            ?>
                        <blockquote><h2>Comité de Adquisiciones, Servicios y Arrendamientos de Gobierno del Estado de Colima</h2></blockquote>
                        <div id="titulo_directorio">Ordinarias 2020</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['S. ORDINARIA 1. 07-ENE-2020','S. ORDINARIA 1. 07-ENE-2020.pdf'],
                                        ['S. ORDINARIA 2. 13-FEB-2020','S. ORDINARIA 2. 13-FEB-2020.pdf'],
                                        ['S. ORDINARIA 3. 13-MAR-2020','S. ORDINARIA 3. 13-MAR-2020.pdf'],
                                        ['S. ORDINARIA 4. 03-ABR-2020','S. ORDINARIA 4. 03-ABR-2020.pdf'],
                                        ['S. ORDINARIA 5. 05-MAY-2020','S. ORDINARIA 5. 05-MAY-2020.pdf'],
                                        ['S. ORDINARIA 6. 10-JUN-2020','S. ORDINARIA 6. 10-JUN-2020.pdf'],
                                        ['S. ORDINARIA 7. 06-JUL-2020','S. ORDINARIA 7. 06-JUL-2020.pdf'],
                                        ['S. ORDINARIA 8. 08-ABR-2020','S. ORDINARIA 8. 06-AGO-2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_licitacion/Adquisiciones/Comites_2020/Ordinaria/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_licitacion/Adquisiciones/Comites_2020/Ordinaria/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">Extraordinarias 2020</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['S. EXTRAORDINARIA 1 15-ENE-2020','S. EXTRAORDINARIA 1 15-ENE-2020.pdf'],
                                        ['S. EXTRAORDINARIA 2. 29-ENE-2020','S. EXTRAORDINARIA 2. 29-ENE-2020.pdf'],
                                        ['S. EXTRAORDINARIA 3. 17-FEB-2020','S. EXTRAORDINARIA 3. 17-FEB-2020.pdf'],
                                        ['S. EXTRAORDINARIA 4 26-FEB-2020','S. EXTRAORDINARIA 4 26-FEB-2020.pdf'],
                                        ['S. EXTRAORDINARIA 5. 28-FEB-2020','S. EXTRAORDINARIA 5. 28-FEB-2020.pdf'],
                                        ['S. EXTRAORDINARIA 6. 23-MAR-2020','S. EXTRAORDINARIA 6. 23-MAR-2020.pdf'],
                                        ['S. EXTRAORDINARIA 7. 27-MAR-2020','S. EXTRAORDINARIA 7. 27-MAR-2020.pdf'],
                                        ['S. EXTRAORDINARIA 08-ABR-2020','S. EXTRAORDINARIA 08-ABR-2020.pdf'],
                                        ['S. EXTRAORDINARIA 9. 20-ABR-2020','S. EXTRAORDINARIA 9. 20-ABR-2020.pdf'],
                                        ['S. EXTRAORDINARIA 10. 12-MAY-2020','S. EXTRAORDINARIA 10. 12-MAY-2020.pdf'],
                                        ['S. EXTRAORDINARIA 11. 20-MAY-2020','S. EXTRAORDINARIA 11. 20-MAY-2020.pdf'],
                                        ['S. EXTRAORDINARIA 12. 26-MAY-2020','S. EXTRAORDINARIA 12. 26-MAY-2020.pdf'],
                                        ['S. EXTRAORDINARIA 13. 16-JUN-2020','S. EXTRAORDINARIA 13. 16-JUN-2020.pdf'],
                                        ['S. EXTRAORDINARIA 14. 30-JUN-2020','S. EXTRAORDINARIA 14. 30-JUN-2020.pdf'],
                                        ['S. EXTRAORDINARIA 15. 21-JUL-2020','S. EXTRAORDINARIA 15. 21-JUL-2020.pdf'],
                                        ['S. EXTRAORDINARIA 16. 30-JUL-2020','S. EXTRAORDINARIA 16. 30-JUL-2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_licitacion/Adquisiciones/Comites_2020/Extraordinaria/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
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
                                                    '<embed src="archivos/seccion_licitacion/Adquisiciones/Comites_2020/Extraordinaria/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                       
            <?php
                        break;
                    case 3:
            ?>
                        <blockquote><h2>Histórico</h2></blockquote>
                        
                        
                        <div id="titulo_directorio">2018 - Licitaciones</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['LA-806007991-E5-2018','LA-806007991-E5-2018.pdf'],
                                        ['LA-806007991-E6-2018','LA-806007991-E6-2018.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_licitacion/Adquisiciones/Licitaciones_2018/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_licitacion/Adquisiciones/Licitaciones_2018/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">2019 - Licitaciones</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['LICITACION ANALISIS DE LABORATORIO','LICITACION ANALISIS DE LABORATORIO.pdf'],
                                        ['LICITACION CAMIONETA UTILITARIA 2019','LICITACION CAMIONETA UTILITARIA 2019.pdf'],
                                        ['LICITACION DE MICROMEDIDORES','LICITACION DE MICROMEDIDORES.pdf'],
                                        ['LICITACION SEGURO DE VIDA','LICITACION SEGURO DE VIDA.pdf'],
                                        ['LICITACION SEGURO VEHICULAR','LICITACION SEGURO VEHICULAR.pdf'],
                                        ['LICITACION UNIFORMES','LICITACION DE UNIFORMES.pdf'],
                                        ['LICITACION VEHICULO TIPO SEDAN','LICITACION VEHICULO TIPO SEDAN.pdf'],
                                        ['1 ER CONTRATO GAS CLORO e HIPOCLORITO','1 ER CONTRATO GAS CLORO e HIPOCLORITO.pdf'],
                                        ['2DO CONTRATO GAS CLORO e HIPOCLORITO','2DO CONTRATO GAS CLORO e HIPOCLORITO.pdf']

                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_licitacion/Adquisiciones/Licitaciones_2019/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
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
                                                    '<embed src="archivos/seccion_licitacion/Adquisiciones/Licitaciones_2019/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                      
                            </tbody>
                        </table><div id="titulo_directorio">2018 - Comites</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['SESION ORDINARIA 1. 01-NOV-2018','constitucion_politica_de_los_estados_unidos_mexicanos.pdf'],
                                        ['SESION ORDINARIA 2 08-NOV-2018','ley_de_aguas_nacionales.pdf'],
                                        ['SESION ORDINARIA 3. 06-DIC-2018','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 25- OCTUBRE-2018 CONFORMACION DE COMITE','ley_de_aguas_nacionales.pdf']
                                        
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_1/nivel_nacional/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_1/nivel_nacional/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">2019 - Comites</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['SESION ORDINARIA 1','constitucion_politica_de_los_estados_unidos_mexicanos.pdf'],
                                        ['SESION ORDINARIA 2','ley_de_aguas_nacionales.pdf'],
                                        ['SESION ORDINARIA 3','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION ORDINARIA 4','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION ORDINARIA 5','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION ORDINARIA 6','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION ORDINARIA 7','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION ORDINARIA 8','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION ORDINARIA 9','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION ORDINARIA 10','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION ORDINARIA 11','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION ORDINARIA 12','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 1','constitucion_politica_de_los_estados_unidos_mexicanos.pdf'],
                                        ['SESION EXTRAORDINARIA 2','ley_de_aguas_nacionales.pdf'],
                                        ['SESION EXTRAORDINARIA 3','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 4','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 5','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 6','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 7','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 8','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 9','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 10','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 12','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 13','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 14','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 15','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 16','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 17','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 18','ley_general_de_responsabilidades_administrativas.pdf'],
                                        ['SESION EXTRAORDINARIA 19','ley_general_de_responsabilidades_administrativas.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_1/nivel_local/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
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
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_1/nivel_local/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
                                                '</div>'+
                                                '<div class="modal-footer">'+
                                                    '<a style="color:white" class="modal-close w3-btn w3-block middleblue">Cerrar <img style="width:20px;vertical-align:middle;" src="images/iconos/icon_cerrar.png"></a>'+
                                                '</div>'+
                                            '</div>'
                                        );
                                    }
                                </script>                
                            </tbody>
                        </table><br><br>
            <?php                       
                        break;
                    case 4:
            ?>          
                        <blockquote><h2>Marco normativo</h2></blockquote>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Adquisiciones Servicios Arrendamientos','Adquisiciones_Servicios_Arrendamientos_22dic2018.pdf'],
                                        ['Ley de Adquisiciones','Ley de Adquisiciones.pdf'],
                                        ['MANUAL DEL COMITE','MANUAL DEL COMITE .pdf'],
                                        ['Reglamento CAPDAM','Reglamento CAPDAM.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_licitacion/Adquisiciones/Marco Normativo/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f4_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f4_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_licitacion/Adquisiciones/Marco Normativo/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 5:
            ?>
                        <blockquote><h2>Proveedores</h2></blockquote>
                        <div id="titulo_directorio">Lista de Proveedores activos</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['PROVEEDORES 2018','PROVEEDORES 2018.pdf'],
                                        ['PROVEEDORES 2019','PROVEEDORES 2019.pdf'],
                                        ['PROVEEDORES 2020','PROVEEDORES 2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_licitacion/Adquisiciones/Proveedores/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_licitacion/Adquisiciones/Proveedores/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">Registrarse</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                   
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Iniciar Registro','constitucion_politica_de_los_estados_unidos_mexicanos.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a  href="registro_proveedores.php"><img src="images/iconos/icon_flecha.png" style="width:25px"></a></center>'+
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
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_1/nivel_local/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 6:
            ?>
                        <blockquote><h2>Fracción VI. Indicadores De Objetivos Y Resultados</h2></blockquote>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Indicadores De Objetivos Y Resultados','indicadores_de_objetivos_y_resultados.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_6/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f6_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f6_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_6/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 7:
            ?>
                        <blockquote><h2>Fracción VII. Directorio De Servidores Públicos</h2></blockquote>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Dirección General','direccion_general.pdf'],
                                        ['Dirección De Contraloría','direccion_de_contraloria.pdf'],
                                        ['Dirección Comercial','direccion_comercial.pdf'],
                                        ['Dirección Administrativa','direccion_administrativa.pdf'],
                                        ['Dirección De Finanzas','direccion_de_finanzas.pdf'],
                                        ['Dirección De Operación','direccion_de_operacion.pdf'],
                                        ['Dirección De Construcción','direccion_de_construccion.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_7/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f7_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f7_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_7/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 8:
            ?>
                        <blockquote><h2>Fracción VIII. Remuneración De Servidores Públicos</h2></blockquote>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Remuneración De Servidores Públicos','remuneración_de_servidores_públicos.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_8/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f8_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f8_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_8/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 9:
            ?>
                        <blockquote><h2>Fracción IX. Perfil De Servidores Públicos</h2></blockquote>
                        <i>El Perfil De Los Puestos De Los Servidores Públicos A Su Servicio, El Curricular De Quienes Ocupan Esos Puestos, Y La Información De Las Declaraciones Patrimoniales De Los Servidores Públicos Al Momento De Asumir El Cargo Y Al Concluirlo, Siempre Que Se Cuente Con El Consentimiento Del Interesado, Por Tratarse De Datos Personales</i><br><br>
                        <div id="titulo_directorio">Dirección General</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Director General','no disponible'], 
                                        ['Secretario Particular','no disponible'],
                                        ['Asistente De Dirección General','no disponible'],
                                        ['Departamento Jurídico','no disponible'],
                                        ['Departamento Transparencia','no disponible'],
                                        ['Departamento Atención A Usuarios','no disponible'],
                                        ['Mercadotecnia','no disponible'],
                                        ['Departamento De Sistemas E Informática','no disponible'],
                                        ['Departamento De Cultura Del Agua','no disponible']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_9/direccion_general/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f9_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f9_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_9/direccion_general/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">Dirección De Contraloría</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Director De Contraloría','no disponible'], 
                                        ['Departamento De Auditoría','no disponible'],
                                        ['Departamento De Investigación','no disponible'],
                                        ['Departamento De Substanciación','no disponible']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_9/direccion_de_contraloria/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f9_2_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f9_2_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_9/direccion_de_contraloria/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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

                        <div id="titulo_directorio">Dirección Comercial</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Director Comercial','no disponible'],
                                        ['Asistente Comercial','no disponible'],
                                        ['Departamento De Medición','no disponible'],
                                        ['Departamento De Cobranza Y Cartera Vencida','no disponible'],
                                        ['Notificaciones','no disponible'],
                                        ['Inspecciones','no disponible'],
                                        ['Ejecución Y Embargo','no disponible'],
                                        ['Cortes Y Reconexiones','no disponible'],
                                        ['Unidad De Contratación De Servicios','no disponible'],
                                        ['Unidad De Aclaraciones','no disponible']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_9/direccion_comercial/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f9_3_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f9_3_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_9/direccion_comercial/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">Dirección Administrativa</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Director Administrativo','no disponible'],
                                        ['Asistente Administrativa','no disponible'],
                                        ['Departamento De Recursos Humanos','no disponible'],
                                        ['Departamento De Evaluación De Personal','no disponible'],
                                        ['Departamento De Seguridad E Higiene','no disponible'],
                                        ['Departamento De Recursos Materiales','no disponible'],
                                        ['Departamento De Almacén','no disponible'],
                                        ['Departamento De Servicios Generales','no disponible'],
                                        ['Departamento De Bienes Patrimoniales','no disponible'],
                                        ['Departamento De Taller Mecánico','no disponible']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_9/direccion_administrativa/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f9_4_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f9_4_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_9/direccion_administrativa/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">Dirección De Finanzas</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Director De Finanzas','no disponible'],
                                        ['Asistente De Finanzas','no disponible'],
                                        ['Departamento De Asuntos Fiscales','no disponible'],
                                        ['Departamento De Facturación Y Operación De Caja','no disponible'],
                                        ['Departamento De Egresos','no disponible'],
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_9/direccion_de_finanzas/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f9_5_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f9_5_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_9/direccion_de_finanzas/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">Dirección De Operación</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Director Operativo','no disponible'],   
                                        ['Asistente Operativa','no disponible'],
                                        ['Departamento De Instalaciones Y Redes','no disponible'],
                                        ['Departamento De Electromecánica','no disponible'],
                                        ['Departamento Calidad Del Agua Y Saneamiento','no disponible']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_9/direccion_de_operacion/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f9_6_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f9_6_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_9/direccion_de_operacion/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">Dirección De Construcción</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Director De Construcción','no disponible'],
                                        ['Asistente De Construcción','no disponible'],
                                        ['Departamento Técnico','no disponible'],
                                        ['Proyectos','no disponible'],
                                        ['Topógrafo','no disponible'],
                                        ['Ayudante','no disponible'],
                                        ['Departamento De Licitaciones Y Contratos','no disponible'],
                                        ['Auxiliar','no disponible'],
                                        ['Departamento De Ingeniería','no disponible'],
                                        ['Supervisión De Obra','no disponible'],
                                        ['Conformación Y Elaboración De Expedientes','no disponible']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_9/direccion_de_construccion/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f9_7_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f9_7_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_9/direccion_de_construccion/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 10:
            ?>
                        <blockquote><h2>Fracción IX Bis. La Información En Versión Pública </h2></blockquote>
                        <center><img style="width:50%;" src="images/molestias.png"></center> 
            <?php
                        break;
                    case 11:
            ?>
                        <blockquote><h2>Fracción X. Gastos De Representación Y Viáticos</h2></blockquote>
                        <i>Los Gastos De Representación Y Viáticos, Así Como El Objeto E Informe De Comisión Correspondiente</i>
                        <div id="titulo_directorio">Gastos Representación Y Viáticos 2018</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre','1er_trimestre.pdf'], 
                                        ['2do Trimestre','2do_trimestre.pdf'],
                                        ['3er Trimestre','3er_trimestre.pdf'],
                                        ['4to Trimestre','4to_trimestre.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_10/gastos_representacion_y_viaticos_2018/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f10_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f10_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_10/gastos_representacion_y_viaticos_2018/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">Gastos Representación Y Viáticos 2019</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre','1er_trimestre.pdf'], 
                                        ['2do Trimestre','2do_trimestre.pdf'],
                                        ['3er Trimestre','3er_trimestre.pdf'],
                                        ['Documentación Comprobatoria','documentos_3er_trimestre.pdf'],
                                        ['4to Trimestre','4to_trimestre.pdf'],
                                        ['Documentación Comprobatoria','documentos_4to_trimestre.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_10/gastos_representacion_y_viaticos_2019/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f10_2_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f10_2_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_10/gastos_representacion_y_viaticos_2019/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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

                        <div id="titulo_directorio">Gastos Representación Y Viáticos 2020</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre','1er_trimestre.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_10/gastos_representacion_y_viaticos_2020/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f10_3_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f10_3_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_10/gastos_representacion_y_viaticos_2020/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 12:
            ?>                        
                        <blockquote><h2>Fracción XI. Número De Plazas </h2></blockquote>
                        <i>El Número Total De Las Plazas Y Del Personal De Base Y Confianza</i>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'], 
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_11/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f11_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f11_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_11/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 13:
            ?>
                        <blockquote><h2>Fracción XII. Contrataciones De Servicios Profesionales Por Honorarios </h2></blockquote>
                        <i>Las Contrataciones De Servicios Profesionales Por Honorarios</i>
                        <div id="titulo_directorio">2019</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['AGUACOM','AGUACOM.pdf'], 
                                        ['EMPRESS','EMPRESS.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_12/2019/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f12_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f12_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_12/2019/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">2020</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['AGUACOM','AGUACOM.pdf'], 
                                        ['EMPRESS','EMPRESS.pdf'],
                                        ['TISS COMERCIALIZADORA','TISS_COMERCIALIZADORA.pdf'],
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_12/2020/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f12_2_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f12_2_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_12/2020/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 14:
            ?>
                        <blockquote><h2>Fracción XIII. Domicilio De La Unidad De Transparencia</h2></blockquote>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Domicilio De La Unidad De Transparencia ','domicilio_de_la_unidad_de_transparencia.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_13/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f13_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f13_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_13/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 15:
            ?>
                        <blockquote><h2>Fracción XIV. Convocatorias De Concursos Para Ocupar Cargos Públicos  </h2></blockquote>
                        <i>Las Convocatorias A Concursos Para Ocupar Cargos Públicos Y Los Resultados De Estos</i>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'], 
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_14/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f14_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f14_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_14/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 16:
            ?>
                        <blockquote><h2>Fracción XV. Programas De Subsidios, Estímulos Y Apoyos </h2></blockquote>
                        <i>La Información De Los Programas De Subsidios, Estímulos Y Apoyos, En El Que Se Deberá Informar Respecto De Los Programas De Transferencia, De Servicios, De Infraestructura Social Y De Subsidio</i>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'], 
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_15/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f15_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f15_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_15/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 17:
            ?>
                        <blockquote><h2>Fracción XVI. Condiciones Generales De Trabajo, Contratos O Convenios </h2></blockquote>
                        <i>Las Condiciones Generales De Trabajo, Contratos O Convenios Que Regulen Las Relaciones Laborales Del Personal De Base O De Confianza, Así Como Los Recursos Públicos Económicos, En Especie O Donativos, Que Sean Entregados A Los Sindicatos Y Ejerzan Como Recursos Públicos</i>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Convenio 1','convenio_1.pdf'], 
                                        ['Convenio 2','convenio_2.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_16/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f16_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f16_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_16/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 18:
            ?>
                        <blockquote><h2>Fracción XVII. Información Curricular </h2></blockquote>
                        <i>La Información Curricular, Desde El Nivel De Jefe De Departamento O Equivalente, Hasta El Titular Del Sujeto Obligado, Así Como, En Su Caso, Las Sanciones Administrativas De Que Haya Sido Objeto</i><br><br>
                        <div id="titulo_directorio">Dirección General</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Director General','director_general.pdf'], 
                                        ['Asistente De Dirección','asistente_de_direccion.php'],
                                        ['Departamento Jurídico','departamento_juridico.pdf'],
                                        ['Departamento Transparencia','departamento_transparencia.pdf'],
                                        ['Mercadotecnia','mercadotecnia.pdf'],
                                        ['Departamento De Sistemas E Informática','departamento_de_sistemas_e_informatica.pdf'],
                                        ['Departamento De Cultura Del Agua','departamento_de_cultura_del_agua.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_17/direccion_general/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f17_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f17_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_9/direccion_general/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">Dirección De Contraloría</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Director De Contraloría','director_de_contraloria.pdf'], 
                                        ['Departamento De Auditoría','departamento_de_auditoria.pdf'],
                                        ['Departamento De Investigación','departamento_de_investigacion.pdf'],
                                        ['Departamento De Substanciación','departamento_de_substanciacion.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_17/direccion_de_contraloria/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f17_2_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f17_2_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_17/direccion_de_contraloria/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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

                        <div id="titulo_directorio">Dirección Comercial</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Director Comercial','director_comercial.pdf'],
                                        ['Asistente Comercial','director_comercial.pdf'],
                                        ['Departamento De Medición','departamento_de_medicion.pdf'],
                                        ['Notificaciones','notificaciones.pdf'],
                                        ['Inspecciones','inspecciones.pdf'],
                                        ['Cortes','cortes.pdf'],
                                        ['Reconexiones','no disponible'],
                                        ['Unidad De Contratación De Servicios','unidad_de_contratacion_de_servicios.pdf'],
                                        ['Unidad De Aclaraciones','unidad_de_aclaraciones.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_17/direccion_comercial/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f17_3_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f17_3_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_17/direccion_comercial/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">Dirección Administrativa</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Director Administrativo','director_administrativo.pdf'],
                                        ['Asistente Administrativo','no disponible'],
                                        ['Departamento De Recursos Humanos','departamento_de_recursos_humanos.pdf'],
                                        ['Departamento De Recursos Materiales','departamento_de_recursos_materiales.pdf'],
                                        ['Departamento De Almacén','departamento_de_almacen.pdf'],
                                        ['Departamento De Servicios Generales','departamento_de_servicios_generales.pdf'],
                                        ['Departamento De Bienes Patrimoniales','departamento_de_bienes_patrimoniales.pdf'],
                                        ['Departamento De Taller Mecánico','no disponible']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_17/direccion_administrativa/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f17_4_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f17_4_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_17/direccion_administrativa/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">Dirección De Finanzas</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Directora De Finanzas','directora_de_finanzas.pdf'],
                                        ['Departamento De Asuntos Fiscales','departamento_de_asuntos_fiscales.pdf'],
                                        ['Facturación','facturación.pdf'],
                                        ['Operación De Caja','operación_de_caja.pdf'],
                                        ['Departamento De Egresos','departamento_de_egresos.pdf'],
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_17/direccion_de_finanzas/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f17_5_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f17_5_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_17/direccion_de_finanzas/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">Dirección De Operación</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Director Operativo','director_operativo.pdf'],   
                                        ['Asistente De Operación','asistente_de_operacion.pdf'],
                                        ['Departamento De Instalaciones Y Redes','no disponible'],
                                        ['Delegación ‘‘Santiago’’','delegacion _santiago.pdf'],
                                        ['Delegación ‘‘Valle De Las Garzas’’','delegacion_valle_de_las_garzas.pdf'],
                                        ['Delegación ‘‘Centro’’','delegacion_centro.pdf'],
                                        ['Departamento De Electromecánica','departamento_de_electromecanica.pdf'],
                                        ['Departamento Acueducto Armería - Manzanillo','departamento_acueducto_armeria_manzanillo.pdf'],
                                        ['Departamento Calidad Del Agua Y Saneamiento','departamento_calidad_del_agua_y_saneamiento.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_17/direccion_de_operacion/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f17_6_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f17_6_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_17/direccion_de_operacion/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">Dirección De Construcción</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Director De Construcción','director_de_construccion.pdf'],
                                        ['Asistente De Construcción','asistente_de_construccion.pdf'],
                                        ['Departamento Técnico','departamento_tecnico.pdf'],
                                        ['Proyectos','proyectos.pdf'],
                                        ['Departamento De Licitaciones','departamento_de_licitaciones.pdf'],
                                        ['Auxiliar','auxiliar.pdf'],
                                        ['Departamento De Ingeniería','no disponible'],
                                        ['Supervisión De Obra','supervision_de_obra.pdf'],
                                        ['Conformación Y Elaboración De Expedientes','no disponible']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_17/direccion_de_construccion/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f17_7_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f17_7_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_17/direccion_de_construccion/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 19:
            ?>
                        <blockquote><h2>Fracción XVIII. Lista De Servidores Públicos Con Sanciones Administrativas Definitivas </h2></blockquote>
                        <i>El Listado De Servidores Públicos Con Sanciones Administrativas Definitivas, Especificando La Causa De Sanción Y La Disposición</i>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'], 
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_18/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f18_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f18_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_18/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 20:
            ?>
                        <blockquote><h2>Fracción XIX. Servicios Que Ofrece La Comisión De Agua Potable, Drenaje Y Alcantarillado De Manzanillo </h2></blockquote>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Servicios Que Ofrece La Comisión De Agua Potable, Drenaje Y Alcantarillado De Manzanillo ','servicios_que_ofrece_la_comisión_de_agua_potable_drenaje_y_alcantarillado_de_manzanillo.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_19/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f19_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f19_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_19/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 21:
            ?>
                        <blockquote><h2>Fracción XX. Trámites, Requisitos Y Formatos</h2></blockquote>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Trámites, Requisitos Y Formatos','trámites_requisitos_y_formatos.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_20/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f20_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f20_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_20/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 22:
            ?>
                        <blockquote><h2>Fracción XXI. Presupuesto Asignado E Informes Trimestrales</h2></blockquote>
                        <i>La Información Financiera Sobre El Presupuesto Asignado, Así Como Los Informes Del Ejercicio Trimestral Del Gasto, En Términos De La Ley General De Contabilidad Gubernamental Y Demás Normatividad Aplicable</i><br><br>
                        <div id="titulo_directorio">Presupuesto Asignado</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['2018','2018.pdf'], 
                                        ['2019','2019.php'],
                                        ['2020','2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_21/presupuesto_asignado/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f21_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f21_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_21/presupuesto_asignado/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        
                        <div id="titulo_directorio">Ejercicio Del Gasto</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2018','1er_trimestre_2018.pdf'], 
                                        ['2do Trimestre 2018','2do_trimestre_2018.pdf'],
                                        ['3er Trimestre 2018','3er_trimestre_2018.pdf'],
                                        ['4to Trimestre 2018','4to_trimestre_2018.pdf'],
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'], 
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_21/ejercicio_del_gasto/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f21_2_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f21_2_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_21/ejercicio_del_gasto/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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

            <?php
                        break;
                    case 23:
            ?>
                        <blockquote><h2>Fracción XXII. Deuda Pública </h2></blockquote>
                        <i>La Información Relativa A La Deuda Pública, En Términos De La Normatividad Aplicable</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2018','1er_trimestre_2018.pdf'], 
                                        ['2do Trimestre 2018','2do_trimestre_2018.pdf'],
                                        ['3er Trimestre 2018','3er_trimestre_2018.pdf'],
                                        ['4to Trimestre 2018','4to_trimestre_2018.pdf'],
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'], 
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_22/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f22_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f22_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_22/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 24:
            ?>
                        <blockquote><h2>Fracción XXIII. Gastos De Comunicación Social Y Publicidad Oficial </h2></blockquote>
                        <i>Los Montos Destinados A Gastos Relativos A Comunicación Social Y Publicidad Oficial Desglosada Por Tipo De Medio, Proveedores, Número De Contrato, Concepto O Campaña Y Fecha De Inicio Y De Término</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2018','1er_trimestre_2018.pdf'], 
                                        ['2do Trimestre 2018','2do_trimestre_2018.pdf'],
                                        ['3er Trimestre 2018','3er_trimestre_2018.pdf'],
                                        ['4to Trimestre 2018','4to_trimestre_2018.pdf'],
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'], 
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_23/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f23_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f23_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_23/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 25:
            ?>
                        <blockquote><h2>Fracción XXIV. Informes De Resultados De Las Auditorías </h2></blockquote>
                        <i>Los Informes De Resultados De Las Auditorías Al Ejercicio Presupuestal De Cada Sujeto Obligado Que Se Realicen</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Auditoría 2017','auditoria_2017.pdf'], 
                                        ['Auditoría 2018','auditoria_2018.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_24/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f24_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f24_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_24/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 26:
            ?>
                        <blockquote><h2>Fracción XXV. Resultados De La Dictaminación De Estados Financieros </h2></blockquote>
                        <i>El Resultado De La Dictaminación De Los Estados Financieros</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'], 
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_25/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f25_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f25_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_25/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 27:
            ?>
                        <blockquote><h2>Fracción XXVI. Montos, Criterios, Convocatorias Y Listado De Personas Que Se Les Asignaron Recursos Públicos </h2></blockquote>
                        <i>Los Montos, Criterios, Convocatorias Y Listado De Personas Físicas O Morales A Quienes, Por Cualquier Motivo, Se Les Asigne O Permita Usar Recursos Públicos O, En Los Términos De Las Disposiciones Aplicables, Realicen Actos De Autoridad</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'], 
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_25/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f25_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f25_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_25/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 28:
            ?>
                        <blockquote><h2>Fracción XXVII. Concesiones, Contratos, Convenios, Permisos, Licencias O Autorizaciones Otorgadas </h2></blockquote>
                        <i>Las Concesiones, Contratos, Convenios, Permisos, Licencias O Autorizaciones Otorgados</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['BOMBAS BNJ','BOMBAS_BNJ.pdf'],
                                        ['CIIN','CIIN.pdf'],
                                        ['GIS','GIS.pdf'],
                                        ['LLOYD MEXICANO','LLOYD_MEXICANO.pdf'],
                                        ['AGUACOM','AGUACOM.pdf'],
                                        ['TISS COMERCIALIZADORA','TISS_COMERCIALIZADORA.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_27/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f27_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f27_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_27/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 29:
            ?>
                        <blockquote><h2>Fracción XXVIII. Resultados De Adjudicación Directa, Invitación Restringida Y Licitaciones </h2></blockquote>
                        <i>Procedimientos De Adjudicaciones Directas, Invitaciones Restringidas Y Licitaciones</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Análisis De Obras Públicas (Por Recurso FISM 2018)','analisis_de_obras_publicas(por_recurso_FISM_2018).pdf'],
                                        ['Análisis De Obras Públicas (Por Recurso PROAGUA 2018)','analisis_de_obras_publicas(por_recurso_PROAGUA_2018).pdf'],
                                        ['Análisis De Obras Públicas (Por Recurso PROPIO 2018)','analisis_de_obras_publicas(por_recurso_PROPIO_2018).pdf'],
                                        ['4to Trimestre 2018','4to_trimestre_2018.pdf'],
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'],
                                        ['2do Trimestre 2019 (Parte 1)','2do_trimestre_2019_parte_1.pdf'],
                                        ['2do Trimestre 2019 (Parte 2)','2do_trimestre_2019_parte_2.pdf'],
                                        ['3er Trimestre 2019 (Parte 1)','3er_trimestre_2019_parte_1.pdf'],
                                        ['3er Trimestre 2019 (Parte 2)','3er_trimestre_2019_parte_1.pdf'],
                                        ['3er Trimestre 2019 (Parte 3)','3er_trimestre_2019_parte_3.pdf'],
                                        ['3er Trimestre 2019 (Parte 4)','3er_trimestre_2019_parte_4.pdf'],
                                        ['3er Trimestre 2019 (Parte 5)','3er_trimestre_2019_parte_5.pdf'],
                                        ['3er Trimestre 2019 (Parte 6)','3er_trimestre_2019_parte_6.pdf'],
                                        ['3er Trimestre 2019 (Parte 7)','3er_trimestre_2019_parte_7.pdf'],
                                        ['4to Trimestre 2019 (Parte 1)','4to_trimestre_2019_parte_1.pdf'],
                                        ['4to Trimestre 2019 (Parte 2)','4to_trimestre_2019_parte_2.pdf'],
                                        ['4to Trimestre 2019 (Parte 3)','4to_trimestre_2019_parte_3.pdf'],
                                        ['1er Trimestre 2020 (Parte 1)','1er_trimestre_2019_parte_1.pdf'],
                                        ['1er Trimestre 2020 (Parte 2)','1er_trimestre_2019_parte_2.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_28/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f28_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f28_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_28/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 30:
            ?>
                        <blockquote><h2>Fracción XXIX. Los Informes Que Por Disposición Legal Generen Los Sujetos Obligados </h2></blockquote>
                        <i>Los Informes Que Por Disposición Legal Generen Los Sujetos Obligados")</i><br><br>
                        <div id="titulo_directorio">Cuenta Pública 2017</div>                        
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Anual','anual.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_29/cuenta_publica_2017/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f29_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f29_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_29/cuenta_publica_2017/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        <div id="titulo_directorio">Cuenta Pública 2018</div>                        
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Enero','enero.pdf'],
                                        ['Febrero','febrero.pdf'],
                                        ['Marzo','marzo.pdf'],
                                        ['Abril','abril.pdf'],
                                        ['Mayo','mayo.pdf'],
                                        ['Junio','junio.pdf'],
                                        ['Informe de Disciplina Financiera Ene - Jun','informe_de_diciplina_financiera_ene_jun.pdf'].
                                        ['Julio','julio.pdf'],
                                        ['Agosto','agosto.pdf'],
                                        ['Septiembre','septiembre.pdf'],
                                        ['Octubre','octubre.pdf'],
                                        ['Noviembre','noviembre.pdf'],
                                        ['Diciembre','diciembre.pdf'],
                                        ['Anual','anual.pdf'],
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_29/cuenta_publica_2018/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f29_2_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f29_2_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_29/cuenta_publica_2018/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
                                                '</div>'+
                                                '<div class="modal-footer">'+
                                                    '<a style="color:white" class="modal-close w3-btn w3-block middleblue">Cerrar <img style="width:20px;vertical-align:middle;" src="images/iconos/icon_cerrar.png"></a>'+
                                                '</div>'+
                                            '</div>'
                                        );
                                    }
                                </script>              
                            </tbody>
                            <div id="titulo_directorio">Cuenta Pública 2019</div>                        
                            <table class="striped responsive-table">
                                <thead>
                                    <tr>
                                        <th>Documento</th>
                                        <th><center>Descargar</center></th>
                                        <th><center>Ver</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <script>
                                        var archivos = [
                                            ['Enero','enero.pdf'],
                                            ['Febrero','febrero.pdf'],
                                            ['Marzo','marzo.pdf'],
                                            ['Informe de Disciplina Financiera Ene - Mar','informe_de_diciplina_financiera_ene_mar.pdf'],
                                            ['Abril','abril.pdf'],
                                            ['Mayo','mayo.pdf'],
                                            ['Junio','junio.pdf'],
                                            ['Informe de Disciplina Financiera Ene - Jun','informe_de_diciplina_financiera_ene_jun.pdf'],
                                            ['Julio','julio.pdf'],
                                            ['Agosto','agosto.pdf'],
                                            ['Septiembre','septiembre.pdf'],
                                            ['Informe de Disciplina Financiera Ene - Sep','informe_de_diciplina_financiera_ene_sep.pdf'],
                                            ['Octubre','octubre.pdf'],
                                            ['Noviembre','noviembre.pdf'],
                                            ['Diciembre','diciembre.pdf'],
                                            ['Informe de Disciplina Financiera Ene - Dic','informe_de_diciplina_financiera_ene_dic.pdf'],
                                            ['Anual','anual.pdf']
                                        ];  
                                        for(var i=0; i<=(archivos.length); i++){
                                            document.write(
                                                '<tr>'+
                                                    '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                    '<td id="td2_2">'+
                                                        '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_29/cuenta_publica_2019/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                    '</td>'+
                                                    '<td id="td3_3">'+
                                                        '<center>'+
                                                            '<a href="#f29_3_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                        '</center>'+
                                                    '</td>'+
                                                '</tr>'+
                                                '<div id="f29_3_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                    '<div class="modal-content">'+
                                                        '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                        '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_29/cuenta_publica_2019/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                            <div id="titulo_directorio">Cuenta Pública 2020</div>                        
                            <table class="striped responsive-table">
                                <thead>
                                    <tr>
                                        <th>Documento</th>
                                        <th><center>Descargar</center></th>
                                        <th><center>Ver</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <script>
                                        var archivos = [
                                            ['Enero','enero.pdf'],
                                            ['Febrero','febrero.pdf'],
                                            ['Marzo','marzo.pdf'],
                                            ['Informe de Disciplina Financiera Ene - Mar','informe_de_diciplina_financiera_ene_mar.pdf']
                                        ];  
                                        for(var i=0; i<=(archivos.length); i++){
                                            document.write(
                                                '<tr>'+
                                                    '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                    '<td id="td2_2">'+
                                                        '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_29/cuenta_publica_2020/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                    '</td>'+
                                                    '<td id="td3_3">'+
                                                        '<center>'+
                                                            '<a href="#f29_4_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                        '</center>'+
                                                    '</td>'+
                                                '</tr>'+
                                                '<div id="f29_4_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                    '<div class="modal-content">'+
                                                        '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                        '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_29/cuenta_publica_2020/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 31:
            ?>
                        <blockquote><h2>Fracción XXX. Estadísticas Diversas</h2></blockquote>
                        <i>Los Montos, Criterios, Convocatorias Y Listado De Personas Físicas O Morales A Quienes, Por Cualquier Motivo, Se Les Asigne O Permita Usar Recursos PúbLas estadísticas que generen en cumplimiento de sus facultades, competencias o funciones con la mayor desagregación posible</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_30/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f30_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f30_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_30/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 32:
            ?>
                        <blockquote><h2>Fracción XXXI. Informes De Avances Programáticos O Presupuestales, Balances Generales Y Estado Financiero </h2></blockquote>
                        <i>Informe De Avances Programáticos O Presupuestales, Balances Generales Y Su Estado Financiero</i><br><br>
                        <div id="titulo_directorio">Estado De Actividades</div>   
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2018','1er_trimestre_2018.pdf'],
                                        ['2do Trimestre 2018','2do_trimestre_2018.pdf'],
                                        ['3er Trimestre 2018','3er_trimestre_2018.pdf'],
                                        ['4to Trimestre 2018','4to_trimestre_2018.pdf'],
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'],
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_31/estado_de_actividades/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f31_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f31_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_31/estado_de_actividades/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        <div id="titulo_directorio">Avances Presupuestales</div>   
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2018','1er_trimestre_2018.pdf'],
                                        ['2do Trimestre 2018','2do_trimestre_2018.pdf'],
                                        ['3er Trimestre 2018','3er_trimestre_2018.pdf'],
                                        ['4to Trimestre 2018','4to_trimestre_2018.pdf'],
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'],
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" -href="archivos/seccion_transparencia/articulo_29/fraccion_31/avances_presupuestales/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f31_3_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f31_3_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_31/avances_presupuestales/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        <div id="titulo_directorio">Estado De Situación Financiera</div>   
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2018','1er_trimestre_2018.pdf'],
                                        ['2do Trimestre 2018','2do_trimestre_2018.pdf'],
                                        ['3er Trimestre 2018','3er_trimestre_2018.pdf'],
                                        ['4to Trimestre 2018','4to_trimestre_2018.pdf'],
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'],
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" -href="archivos/seccion_transparencia/articulo_29/fraccion_31/estado_de_situacion_financiera/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f31_2_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f31_2_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_31/estado_de_situacion_financiera/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 33:
            ?>
                        <blockquote><h2>Fracción XXXII. Padrón De Proveedores Y Contratistas </h2></blockquote>
                        <i>Padrón De Proveedores Y Contratistas</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'],
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_32/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f32_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f32_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_32/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 34:
            ?>
                        <blockquote><h2>Fracción XXXIII. Convenios De Coordinación Y De Concertación Con Los Sectores Social Y Privado</h2></blockquote>
                        <i>Convenios De Coordinación Y De Concertación Con Los Sectores Social Y Privado</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'],
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_33/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f33_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f33_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_33/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 35:
            ?>
                        <blockquote><h2>Fracción XXXIV. Inventario De Bienes Muebles E Inmuebles</h2></blockquote>
                        <i>Inventario De Bienes Muebles E Inmuebles En Posesión Y Propiedad</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'],
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_34/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f34_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f34_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_34/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 36:
            ?>
                        <blockquote><h2>Fracción XXXV. Recomendaciones Emitidas De Derechos Humanos </h2></blockquote>
                        <i>Las Recomendaciones Emitidas Por Los Órganos Públicos Del Estado Mexicano U Organismos Internacionales Garantes De Los Derechos Humanos</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'],
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_35/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f35_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f35_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_35/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 3:
            ?>
                        <blockquote><h2>Fracción XXXVI. Resoluciones Y Laudos</h2></blockquote>
                        <i>Resoluciones Y Laudos Que Se Emitan En Procesos O Procedimientos Seguidos En Forma De Juicio</i><br><br>
                        <div id="titulo_directorio">1er Trimestre 2019</div>   
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_36/1er_trimestre_2019/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f36_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f36_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_36/1er_trimestre_2019/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        <div id="titulo_directorio">2do Trimestre 2019</div>   
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['28 De Junio','28_de_junio.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_36/2do_trimestre_2019/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f36_2_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f36_2_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_36/2do_trimestre_2019/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        <div id="titulo_directorio">3er Trimestre 2019</div>   
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1 De Agosto','1_de_agosto.pdf'],
                                        ['26 De Agosto','26_de_agosto.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_36/3er_trimestre_2019/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f36_3_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f36_3_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_36/3er_trimestre_2019/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        <div id="titulo_directorio">4to Trimestre 2019</div>   
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['No se generó información','no_se_genero_informacion.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_36/4to_trimestre_2019/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f36_4_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f36_4_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_36/4to_trimestre_2019/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        <div id="titulo_directorio">1er Trimestre 2020</div>   
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['No se generó información','no_se_genero_informacion.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_36/1er_trimestre_2020/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f36_5_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f36_5_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_36/1er_trimestre_2020/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 38:
            ?>
                        <blockquote><h2>Fracción XXXVII. Mecanismos De Participación Ciudadana</h2></blockquote>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Mecanismos De Participación Ciudadana','mecanismos_de_participacion_ciudadana.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_37/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f37_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f37_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_37/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 39:
            ?>
                        <blockquote><h2>Fracción XXXVIII. Programas Que Ofrece La Comisión De Agua Potable, Drenaje Y Alcantarillado De Manzanillo</h2></blockquote>
                        <i>Programas Que Ofrece La CAPDAM</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'],
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_38/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f38_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f38_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_38/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 40:
            ?>
                        <blockquote><h2>Fracción XXXIX. Comité De Transparencia</h2></blockquote>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Comité De Transparencia','comite_de_transparencia.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_39/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f39_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f39_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_39/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 41:
            ?>
                        <blockquote><h2>Fracción XL. Evaluaciones Y Encuestas De Programas Realizados Con Recursos Públicos</h2></blockquote>
                        <i>Evaluaciones Y Encuestas De Programas Realizados Con Recursos Públicos</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_40/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f40_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f40_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_40/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 42:
            ?>
                        <blockquote><h2>Fracción XLI. Estudios Realizados Con Recursos Públicos</h2></blockquote>
                        <i>Estudios Realizados Con Recursos Púbicos</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_41/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f41_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f41_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_41/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 43:
            ?>
                        <blockquote><h2>Fracción XLII. Listado De Jubilados Y Pensionados </h2></blockquote>
                        <i>El Listado De Jubilados Y Pensionados Y El Monto Que Reciben</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'],
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_42/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f42_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f42_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_42/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php                       
                        break;
                    case 44:
            ?>
                        <blockquote><h2>Fracción XLIII. Ingresos </h2></blockquote>
                        <i>Los Ingresos Recibidos Por Cualquier Concepto Señalando El Nombre De Los Responsables De Recibirlos, Administrarlos Y Ejercerlos, Así Como Su Destino</i><br><br>
                        <div id="titulo_directorio">Ingresos</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2018','1er_trimestre_2018.pdf'], 
                                        ['2do Trimestre 2018','2do_trimestre_2018.pdf'],
                                        ['3er Trimestre 2018','3er_trimestre_2018.pdf'],
                                        ['4to Trimestre 2018','4to_trimestre_2018.pdf'],
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'], 
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_43/ingresos/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f43_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f43_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_43/ingresos/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        <div id="titulo_directorio">Destino</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2018','1er_trimestre_2018.pdf'], 
                                        ['2do Trimestre 2018','2do_trimestre_2018.pdf'],
                                        ['3er Trimestre 2018','3er_trimestre_2018.pdf'],
                                        ['4to Trimestre 2018','4to_trimestre_2018.pdf'],
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'], 
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_43/destino/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f43_2_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f43_2_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_43/destino/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
                        <div id="titulo_directorio">Administradores De Ingresos</div>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Responsables 3er Trimestre 2019','responsables_3er_trimestre_2019.pdf'],
                                        ['Responsables 4to Trimestre 2019','responsables_4to_trimestre_2019.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_43/administradores_de_ingresos/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f43_3_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f43_3_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_43/administradores_de_ingresos/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 45:
            ?>
                        <blockquote><h2>Fracción XLIV. Donaciones Hechas A Terceros En Dinero O En Especie </h2></blockquote>
                        <i>Donaciones Hechas A Terceros En Dinero O En Especie</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['1er Trimestre 2019','1er_trimestre_2019.pdf'], 
                                        ['2do Trimestre 2019','2do_trimestre_2019.pdf'],
                                        ['3er Trimestre 2019','3er_trimestre_2019.pdf'],
                                        ['4to Trimestre 2019','4to_trimestre_2019.pdf'],
                                        ['1er Trimestre 2020','1er_trimestre_2020.pdf']
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_44/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f44_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f44_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_44/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 46:
            ?>
                        <blockquote><h2>Fracción XLV. Catálogo De Disposición Y Guía De Archivo </h2></blockquote>
                        <center><img style="width:50%;" src="images/molestias.png"></center>        
            <?php
                        break;
                    case 47:
            ?>
                        <blockquote><h2>Fracción XLVI. Actas De Sesiones Ordinarias Y Extraordinarias</h2></blockquote>
                        <i>Actas De Sesiones Ordinarias Y Extraordinarias</i><br><br>
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th><center>Descargar</center></th>
                                    <th><center>Ver</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <script>
                                    var archivos = [
                                        ['Acta 84 Ord. 16 De Octubre 2018','acta_84_ord_16_de_octubre_2018.pdf'],
                                        ['Acta 21 Ext. 15 De Noviembre 2018','acta_21_ext_15_de_noviembre_2018.pdf'],
                                        ['Acta 22 Ext. 04 De Diciembre 2018','acta_22_ext_04_de_diciembre_2018.pdf'],
                                        ['Acta 23 Ext. 20 De Diciembre 2018','acta_23_ext_20_de_diciembre_2018.pdf'],
                                        ['Anexo Acta 23 Ext.','anexo_acta_23_ext.pdf'],
                                        ['Acta 85 Ord. 24 De Enero 2019','acta_85_ord_24_de_enero_2019.pdf'],
                                        ['Acta 86 Ord. 21 De Febrero 2019','acta_86_ord_21_de_febrero_2019.pdf'],
                                        ['Acta 26 Ext. 10 De Abril 2019','acta_26_ext_10_de_abril_2019.pdf'],
                                        ['Anexo Acta 26 Ext.','anexo_acta_26_ext.pdf'],
                                        ['Acta 87 Ord. 16 De Mayo 2019','acta_87_ord_16_de_mayo_2019.pdf'],
                                        ['Acta 88 Ord. 20 De Junio 2019','acta_88_ord_20_de_junio_2019.pdf'],
                                        ['Acta 89 Ord. 1 De Agosto 2019','acta_89_ord_1_de_agosto_2019.pdf'],
                                        ['Anexo Acta 89 Ord.','anexo_acta_89_ord.pdf'],
                                        ['Acta 90 Ord. 10 De Septiembre 2019','acta_90_ord_10_de_septiembre_2019.pdf'],
                                        ['Anexo Acta 90 Ord.','anexo_acta_90_ord.pdf'],
                                        ['Acta 27 Ext. 28 De Octubre 2019','acta_27_ext_28_de_octubre_2019.pdf'],
                                        ['Anexo Acta 27 Ext.','anexo_acta_27_ext.pdf'],
                                    ];  
                                    for(var i=0; i<=(archivos.length); i++){
                                        document.write(
                                            '<tr>'+
                                                '<td id="td1_1">'+archivos[i][0]+'</td>'+
                                                '<td id="td2_2">'+
                                                    '<center><a download="'+archivos[i][0]+'" href="archivos/seccion_transparencia/articulo_29/fraccion_45/'+archivos[i][1]+'"><img src="images/iconos/icon_descargar.png" style="width:25px"></a></center>'+
                                                '</td>'+
                                                '<td id="td3_3">'+
                                                    '<center>'+
                                                        '<a href="#f45_1_modal'+(i+1)+'" class="modal-trigger"><img src="images/iconos/icon_ver.png" style="width:25px"</a>'+
                                                    '</center>'+
                                                '</td>'+
                                            '</tr>'+
                                            '<div id="f45_1_modal'+(i+1)+'" class="modal modal-fixed-footer">'+
                                                '<div class="modal-content">'+
                                                    '<blockquote><h2>'+archivos[i][0]+'</h2></blockquote>'+
                                                    '<embed src="archivos/seccion_transparencia/articulo_29/fraccion_45/'+archivos[i][1]+'" type="application/pdf" style="width:100%; height: 500px;" />'+
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
            <?php
                        break;
                    case 48:
            ?>
                        <blockquote><h2>Fracción XLVII. Listado De Solicitudes A Las Empresas Concesionarias De Telecomunicaciones Y Proveedores De Servicios O Aplicaciones De Internet</h2></blockquote>
                        <center><img style="width:50%;" src="images/molestias.png"></center>               
            <?php
                        break;
                    case 49:
            ?>
                        <blockquote><h2>Fracción XLVIII. Catálogo De Información De Interés Público</h2></blockquote>
                        <center><img style="width:50%;" src="images/molestias.png"></center>
            <?php
                        break;
                }
            ?> 
                    </div>
    </div>
    <?php include('estaticos/scripts.php') ?>
    <?php include('estaticos/footer.php') ?>
</body>
</html>