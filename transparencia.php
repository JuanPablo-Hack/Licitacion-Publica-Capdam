<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include('estaticos/head.php') ?>
    <title>Transparencia | CAPDAM</title>
</head>
<body id="main">
    <?php include('estaticos/nav.php') ?>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l3 xl3">
                <ul id="list" class="collection with-header">
                    <li class="collection-header"><h4><b>Transparencia</b></h4></li>
                    <a id='1' onclick='mostrar(this.id)' class='collection-item active'>SEvAC</a>
                    <a id='2' onclick='mostrar(this.id)' class='collection-item'>Artículo 29</a>
                    <a id='3' onclick='mostrar(this.id)' class='collection-item'>Artículo 46</a>
                </ul>
            </div>
            <div class="col s12 m12 l9 xl9">
                <div id="panel_1" style="display:block">
                    <blockquote><h2>SEvAC</h2></blockquote>
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
                              <th>Documentos de Transparencia</th>
                              <th><center>Descargar</center></th>
                              <th><center>Ver</center></th>
                          </tr>
                        </thead>
                        <tbody>
                            <script>
                                var archivos = [
                                    ['Montos Pagados De Ayudas Y Subsidios','D.1.11.pdf'],
                                    ['Estado De Actividades','D.2.1.pdf'],
                                    ['Estado De Situación Financiera','D.2.2.pdf'],                                               
                                    ['Estado De La Variación De La Hacienda Pública','D.2.3.pdf'],
                                    ['Estado De Cambios De La Situación Financiera','D.2.4.pdf'],
                                    ['Estado De Flujo De Efectivo','D.2.5.pdf'],
                                    ['Informe Sobre Pasivos Contingentes','D.2.6.pdf'],
                                    ['Notas A Los Estados Financieros','D.2.7.pdf'],
                                    ['Estado Analítico Del Activo','D.2.8.pdf'],
                                    ['Estado Analítico De La Deuda Y Otros Pasivos','D.2.9.pdf'],
                                    ['Estado Analítico De Ingresos','D.3.1.pdf'],
                                    ['Estado Analítico Del Presupuesto De Egresos Clasificación Administrativa','D.3.2.pdf'],
                                    ['Estado Analítico Del Presupuesto De Egresos Clasificación Tipo De Gasto','D.3.3.pdf'],
                                    ['Estado Analítico Del Presupuesto De Egresos Clasificación Objeto Del Gasto','D.3.4.pdf'],
                                    ['Estado Analítico Del Presupuesto De Egresos Clasificación Funcional','D.3.5.pdf'],
                                    ['Endeudamiento Neto','D.3.6.pdf'],
                                    ['Intereses De La Deuda','D.3.7.pdf'],
                                    ['Gasto Por Categoría Programática','D.4.1.pdf'],
                                    ['Indicadores De Resultados','D.4.2.pdf'],
                                    ['Programas Y Proyectos De Inversión','D.4.3.pdf']
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
                              <th>Documentos de Transparencia a Diciembre 2018</th>
                              <th><center>Descargar</center></th>
                              <th><center>Ver</center></th>
                          </tr>
                        </thead>
                        <tbody>
                            <script>
                                var archivos = [
                                    ['A.1.1. Lista Plan De Cuentas CONAC','A.1.1.pdf'],
                                    ['A.1.2. Manual De Contabilidad','A.1.2.pdf'],
                                    ['A.1.3. Matriz Devengada De Gastos','A.1.3.pdf'],
                                    ['A.1.4. Matriz Pagada De Gastos','A.1.4.pdf'],
                                    ['A.1.5. Matriz Ingresos Devengados','A.1.5.pdf'],
                                    ['A.1.6. Matriz Ingresos Recaudados','A.1.6.pdf'],
                                    ['A.2.1. Cuentas Activo Bienes Muebles','A.2.1.pdf'],
                                    ['A.2.2. Cuentas Activo Bienes Inmuebles','A.2.2.pdf'],
                                    ['A.2.3. Mínimo Valor Catastral Bienes Inmuebles','A.2.3.pdf'],
                                    ['A.2.4. Baja De Bienes Muebles','A.2.4.pdf'],
                                    ['A.2.5. Baja De Bienes Inmuebles','A.2.5.pdf'],
                                    ['A.2.6. Bienes Bajo Custodia','No Disponible'],
                                    ['A.2.7. Inversiones En Bienes De Dominio Público','A.2.7.pdf'],
                                    ['A.2.8. Obras En Proceso','A.2.8.pdf'],
                                    ['A.2.9. Derechos Patrimoniales En Fideicomisos (Sin Estructura Orgánica, Mandatos Y Contratos Análogos)','No Disponible'],
                                    ['A.2.11. Gasto Devengado CONAC','A.2.11.pdf'],
                                    ['A.2.12. Ingreso Devengado CONAC','A.2.12.pdf'],
                                    ['A.2.13. Histórico De Operaciones (Libro Diario)','A.2.13.pdf'],
                                    ['A.2.14. Histórico De Operaciones (Libro Mayor)','A.2.14.pdf'],
                                    ['A.2.15. Histórico De Operaciones (Libro De Inventarios De Materias Primas, Materiales Y Suministros De Operación)','A.2.15.pdf'],
                                    ['A.2.16. Histórico De Operaciones (Libro De Almacén De Materiales Y Suministros De Consumo)','A.2.16.pdf'],
                                    ['A.2.17. Histórico De Operaciones (Libro Inventarios De Bienes Muebles E Inmuebles)','(No Disponible'],
                                    ['A.2.18. Histórico De Operaciones (Libro De Balances)','(No Disponible'],
                                    ['A.2.19. Constituye Provisiones','A.2.19.pdf'],
                                    ['A.2.20. Provisiones Vigencia','A.2.20.pdf'],
                                    ['A.2.24. Transición De Administración, Bienes No Inventariados O En Proceso De Registro','A.2.24.pdf'],
                                    ['A.2.25. Información Presupuestaria Y Contable (Ejercicio Del Gasto Público Y La Captación Del Ingreso)','A.2.25.pdf'],
                                    ['B.1.1. Rubros De Ingresos Armonizado','B.1.1.pdf'],
                                    ['B.1.2. Objeto Del Gasto Armonizado','B.1.2.pdf'],
                                    ['B.1.3. Económico Por Tipo De Gasto Armonizado','B.1.3.pdf'],
                                    ['B.1.4. Clasificación Funcional Armonizada','B.1.4.pdf'],
                                    ['B.1.5. Clasificación Programática Armonizada','B.1.5.pdf'],
                                    ['B.1.6. Clasificación Administrativa Armonizada','B.1.6.pdf'],
                                    ['B.1.7. Fuentes De Financiamiento Armonizado','B.1.7.pdf'],
                                    ['B.2.1. Presupuesto De Egresos Aprobado','B.2.1.pdf'],
                                    ['B.2.2. Presupuesto De Egresos Modificado','B.2.2.pdf'],
                                    ['B.2.3. Presupuesto De Egresos Comprometido','B.2.3.pdf'],
                                    ['B.2.4. Presupuesto De Egresos Devengado','B.2.4.pdf'],
                                    ['B.2.5. Presupuesto De Egresos Ejercido','B.2.5.pdf'],
                                    ['B.2.6. Presupuesto De Egresos Pagado','B.2.6.pdf'],
                                    ['B.2.7. Presupuesto De Ingreso Estimado','B.2.7.pdf'],
                                    ['B.2.8. Presupuesto De Ingreso Modificado','B.2.8.pdf'],
                                    ['B.2.9. Presupuesto De Ingreso Devengado','B.2.9.pdf'],
                                    ['B.2.10. Presupuesto De Ingreso Recaudado','B.2.10.pdf'],
                                    ['B.2.11. Ejercicio Presupuestario','B.2.11.pdf'],
                                    ['C.1.1. Inventario Bienes Muebles','C.1.1.pdf'],
                                    ['C.1.2. Inventario Bienes Inmuebles','C.1.2.pdf'],
                                    ['C.1.3. Inventario Bienes Muebles E Inmuebles Conciliado','C.1.3.pdf'],
                                    ['C.1.4. Inventario Bienes Inalienables E Imprescriptibles','No Disponible'],
                                    ['C.1.5. Bienes Muebles Adquiridos','C.1.5.pdf'],
                                    ['C.1.6. Bienes Inmuebles Adquiridos','C.1.6.pdf'],
                                    ['C.1.7. Acta De Entrega-Recepción','C.1.7.pdf'],
                                    ['C.1.8. Inventario De Los Bienes Recibidos','C.1.8.pdf'],
                                    ['C.1.9. Catálogos De Bienes Inmuebles','No Disponible'],
                                    ['C.1.10. Catálogos De Bienes Muebles','No Disponible'],
                                    ['C.1.11. Operaciones Presupuestarias Y Contables ','C.1.11.pdf'],
                                    ['C.2.7. Fiscalización Cuentas Públicas','C.2.7.pdf'],
                                    ['C.2.8. Programas Pagos En Forma Electrónica','C.2.8.pdf'],
                                    ['D.1.11. Montos Pagados Ayudas Y Subsidios','D.1.11.pdf'],
                                    ['D.5.4. Inventario De Bienes Muebles E Inmuebles Actualizado','No Disponible']
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
                              <th>Documentos SEvAC 1er. TRIMESTRE 2019</th>
                              <th><center>Descargar</center></th>
                              <th><center>Ver</center></th>
                          </tr>
                        </thead>
                        <tbody>
                            <script>
                                var archivos = [
                                    ['Ayudas Y Subsidios','D.1.11.pdf'],
                                    ['Estado De Actividades','D.2.1.pdf'],
                                    ['Estado De Situación Financiera','D.2.3.pdf'],
                                    ['Estado De Variación En La Hacienda Pública','D.2.3.pdf'],
                                    ['Estado De Cambios En La Situación Financiera','D.2.4.pdf'],
                                    ['Estado De Flujos De Efectivo','D.2.5.pdf'],
                                    ['Informe Sobre Pasivos Contingentes','D.2.6.pdf'],
                                    ['Notas A Los Estados Financieros','D.2.7.pdf'],
                                    ['Estado Analítico Del Activo','D.2.8.pdf'],
                                    ['Estado Analítico De La Deuda Y Otros Pasivos','D.2.9.pdf'],
                                    ['Estado Analítico De Ingresos','D.3.1.pdf'],
                                    ['Estado Analítico Del Ejercicio Del Presupuesto De Egresos Con Base En La Clasificación Administrativa','D.3.2.pdf'],
                                    ['Estado Analítico Del Ejercicio Del Presupuesto De Egresos Con Base En La Clasificación Económica (Por Tipo De Gasto)','D.3.3.pdf'],
                                    ['Estado Analítico Del Ejercicio Del Presupuesto De Egresos Con Base En La Clasificación Por Objeto Del Gasto','D.3.4.pdf'],
                                    ['Estado Analítico Del Ejercicio Del Presupuesto De Egresos Con Base En La Clasificación Funcional','D.3.5.pdf'],
                                    ['Endeudamiento Neto','D.3.6.pdf'],
                                    ['Intereses De La Deuda','D.3.7.pdf'],
                                    ['Gasto Por Categoría','D.4.1.pdf'],
                                    ['Indicadores De Resultados','D.4.2.pdf'],
                                    ['Programas Y Proyectos De Inversión','D.4.3.pdf']
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
                              <th>Documentos SEvAC 2do. TRIMESTRE 2019</th>
                              <th><center>Descargar</center></th>
                              <th><center>Ver</center></th>
                          </tr>
                        </thead>
                        <tbody>
                            <script>
                                var archivos = [
                                    ['Ayudas Y Subsidios','D.1.11.pdf'],
                                    ['Estado De Actividades','D.2.1.pdf'],
                                    ['Estado De Situación Financiera','D.2.2.pdf'],
                                    ['Estado De Variación En La Hacienda Pública','D.2.3.pdf'],
                                    ['Estado De Cambios En La Situación Financiera','D.2.4.pdf'],
                                    ['Estado De Flujos De Efectivo','D.2.5.pdf'],
                                    ['Informe Sobre Pasivos Contingentes','D.2.6.pdf'],
                                    ['Notas A Los Estados Financieros','D.2.7.pdf'],
                                    ['Estado Analítico Del Activo','D.2.8.pdf'],
                                    ['Estado Analítico De La Deuda Y Otros Pasivos','D.2.9.pdf'],
                                    ['Estado Analítico De Ingresos','D.3.1.pdf'],
                                    ['Estado Analítico Del Ejercicio Del Presupuesto De Egresos Con Base En La Clasificación Administrativa','D.3.2.pdf'],
                                    ['Estado Analítico Del Ejercicio Del Presupuesto De Egresos Con Base En La Clasificación Económica (Por Tipo De Gasto)','D.3.3.pdf'],
                                    ['Estado Analítico Del Ejercicio Del Presupuesto De Egresos Con Base En La Clasificación Por Objeto Del Gasto','D.3.4.pdf'],
                                    ['Estado Analítico Del Ejercicio Del Presupuesto De Egresos Con Base En La Clasificación Funcional','D.3.5.pdf'],
                                    ['Endeudamiento Neto','D.3.7.pdf'],
                                    ['Intereses De La Deuda','D.4.1.pdf'],
                                    ['Gasto Por Categoría','D.4.2.pdf'],
                                    ['Indicadores De Resultados','D.4.2.pdf'],
                                    ['Programas Y Proyectos De Inversión','D.4.3.pdf']
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
                              <th>Documentos SEvAC 3er. TRIMESTRE 2019</th>
                              <th><center>Descargar</center></th>
                              <th><center>Ver</center></th>
                          </tr>
                        </thead>
                        <tbody>
                            <script>
                                var archivos = [
                                    ['Ayudas Y Subsidios','D.1.11.pdf'],
                                    ['Estado De Actividades','D.2.1.pdf'],
                                    ['Estado De Situación Financiera','D.2.2.pdf'],
                                    ['Estado De Variación En La Hacienda Pública','D.2.3.pdf'],
                                    ['Estado De Cambios En La Situación Financiera','D.2.4.pdf'],
                                    ['Estado De Flujos De Efectivo','D.2.5.pdf'],
                                    ['Informe Sobre Pasivos Contingentes','D.2.6.pdf'],
                                    ['Notas A Los Estados Financieros','D.2.7.pdf'],
                                    ['Estado Analítico Del Activo','D.2.8.pdf'],
                                    ['Estado Analítico De La Deuda Y Otros Pasivos','D.2.9.pdf'],
                                    ['Estado Analítico De Ingresos','D.3.1.pdf'],
                                    ['Estado Analítico Del Ejercicio Del Presupuesto De Egresos Con Base En La Clasificación Administrativa','D.3.2.pdf'],
                                    ['Estado Analítico Del Ejercicio Del Presupuesto De Egresos Con Base En La Clasificación Económica (Por Tipo De Gasto)','D.3.3.pdf'],
                                    ['Estado Analítico Del Ejercicio Del Presupuesto De Egresos Con Base En La Clasificación Por Objeto Del Gasto','D.3.4.pdf'],
                                    ['Estado Analítico Del Ejercicio Del Presupuesto De Egresos Con Base En La Clasificación Funcional','D.3.5.pdf'],
                                    ['Endeudamiento Neto','D.3.6.pdf'],
                                    ['Intereses De La Deuda','D.3.7.pdf'],
                                    ['Gasto Por Categoría Programática','D.4.1.pdf'],
                                    ['Indicadores De Resultados','D.4.2.pdf'],
                                    ['Programas Y Proyectos De Inversión','D.4.3.pdf']
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
                              <th>Documentos SEvAC 4do. TRIMESTRE 2019</th>
                              <th><center>Descargar</center></th>
                              <th><center>Ver</center></th>
                          </tr>
                        </thead>
                        <tbody>
                            <script>
                                var archivos = [
                                    ['Ayudas Y Subsidios','4_Trimestre_2019_1.pdf'],
                                    ['Bienes Muebles E Inmuebles','4_Trimestre_2019_2.pdf']
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
                <div id="panel_2" style="display:none">
                    <blockquote><h2>Artículo 29</h2></blockquote>
                            <table class="striped responsive-table">
                                <thead>
                                  <tr>
                                      <th>Fracciones</th>
                                      <th><center>Ver</center></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <script>
                                        var archivos = [
                                            ['Fracción I. Marco Normativo'],
                                            ['Fracción II. Estructura Orgánica'],
                                            ['Fracción III. Facultades De Cada Área'],
                                            ['Fracción IV. Metas Y Objetivos'],
                                            ['Fracción V. Indicadores De Interés Público O Social'],
                                            ['Fracción VI. Indicadores De Objetivos Y Resultados'],
                                            ['Fracción VII. Directorio De Servidores Públicos'],
                                            ['Fracción VIII. Remuneración De Servidores Públicos'],
                                            ['Fracción IX. Perfil De Servidores Públicos'],
                                            ['Fracción IX Bis. La Información En Versión Pública'],
                                            ['Fracción X. Gastos De Representación Y Viáticos'],
                                            ['Fracción XI. Número De Plazas'],
                                            ['Fracción XII. Contrataciones De Servicios Profesionales Por Honorarios'],
                                            ['Fracción XIII. Domicilio De La Unidad De Transparencia'],
                                            ['Fracción XIV. Convocatorias De Concursos Para Ocupar Cargos Públicos'],
                                            ['Fracción XV. Programas De Subsidios, Estímulos Y Apoyos'],
                                            ['Fracción XVI. Condiciones Generales De Trabajo, Contratos O Convenios'],
                                            ['Fracción XVII. Información Curricular'],
                                            ['Fracción XVIII. Lista De Servidores Públicos Con Sanciones Administrativas Definitivas'],
                                            ['Fracción XIX. Servicios Que Ofrece La Comisión De Agua Potable, Drenaje Y Alcantarillado De Manzanillo'],
                                            ['Fracción XX. Trámites, Requisitos Y Formatos'],
                                            ['Fracción XXI. Presupuesto Asignado E Informes Trimestrales'],
                                            ['Fracción XXII. Deuda Pública'],
                                            ['Fracción XXIII. Gastos De Comunicación Social Y Publicidad Oficial'],
                                            ['Fracción XXIV. Informes De Resultados De Las Auditorías'],
                                            ['Fracción XXV. Resultados De La Dictaminación De Estados Financieros'],
                                            ['Fracción XXVI. Montos, Criterios, Convocatorias Y Listado De Personas Que Se Les Asignaron Recursos Públicos'],
                                            ['Fracción XXVII. Concesiones, Contratos, Convenios, Permisos, Licencias O Autorizaciones Otorgadas'],
                                            ['Fracción XXVIII. Resultados De Adjudicación Directa, Invitación Restringida Y Licitaciones'],
                                            ['Fracción XXIX. Los Informes Que Por Disposición Legal Generen Los Sujetos Obligados'],
                                            ['Fracción XXX. Estadísticas Diversas'],
                                            ['Fracción XXXI. Informes De Avances Programáticos O Presupuestales, Balances Generales Y Estado Financiero'],
                                            ['Fracción XXXII. Padrón De Proveedores Y Contratistas'],
                                            ['Fracción XXXIII. Convenios De Coordinación Y De Concertación Con Los Sectores Social Y Privado'],
                                            ['Fracción XXXIV. Inventario De Bienes Muebles E Inmuebles'],
                                            ['Fracción XXXV. Recomendaciones Emitidas De Derechos Humanos'],
                                            ['Fracción XXXVI. Resoluciones Y Laudos'],
                                            ['Fracción XXXVII. Mecanismos De Participación Ciudadana'],
                                            ['Fracción XXXVIII. Programas Que Ofrece La Comisión De Agua Potable, Drenaje Y Alcantarillado De Manzanillo'],
                                            ['Fracción XXXIX. Comité De Transparencia'],
                                            ['Fracción XL. Evaluaciones Y Encuestas De Programas Realizados Con Recursos Públicos'],
                                            ['Fracción XLI. Estudios Realizados Con Recursos Públicos'],
                                            ['Fracción XLII. Listado De Jubilados Y Pensionados'],
                                            ['Fracción XLIII. Ingresos'],
                                            ['Fracción XLIV. Donaciones Hechas A Terceros En Dinero O En Especie'],
                                            ['Fracción XLV. Catálogo De Disposición Y Guía De Archivo'],
                                            ['Fracción XLVI. Actas De Sesiones Ordinarias Y Extraordinarias'],
                                            ['Fracción XLVII. Listado De Solicitudes A Las Empresas Concesionarias De Telecomunicaciones Y Proveedores De Servicios O Aplicaciones De Internet'],
                                            ['Fracción XLVIII. Catálogo De Información De Interés Público']
                                        ];  
                                        for(var i=0; i<=(archivos.length-1); i++){
                                            document.write(
                                                '<tr>'+
                                                    '<td id="td1_1">'+archivos[i]+'</td>'+
                                                    '<td id="td3_3">'+
                                                        '<center>'+
                                                            '<a href="fracciones.php?fraccion='+(i+1)+'"><img src="images/iconos/icon_flecha.png" style="width:25px"></a>'+
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
                    <blockquote><h2>Artículo 46</h2></blockquote>
                    <i>Las personas de derecho público o privado que ejerzan gasto público o reciban subsidio o subvención, deberán tener disponible al público en internet, la siguiente información</i><br><br>
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
                                    ['Los Documentos Que Acrediten Su Existencia Legal, Tratándose De Personas Morales','articulo_46_1.pdf'],
                                    ['El Directorio De Sus Representantes O De Las Personas Físicas Que Integran Sus Órganos De Gobierno','articulo_46_2.pdf'],
                                    ['Su Objeto Social O Fines Que Persiguen','articulo_46_3.pdf'],
                                    ['El Monto De Los Recursos Públicos Que Reciban, Especificando Las Fuentes De Donde Provienen O, En Su Caso, El Tipo De Actividad Que Realizan Ejerciendo Actos De Autoridad, Señalando Las Características De La Autorización Que Les Hubiera Sido Extendida Para Tal Efecto','No Disponible'],
                                    ['La Información Respecto Al Uso Aplicado A Los Recursos Públicos Recibidos','No Disponible'],
                                    ['La Demás, Que Determine El Organismo Garante Que Sea De Utilidad O Resulte Relevante Para El Conocimiento De Sus Funciones Y Actividades','No Disponible']
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
            </div>
        </div> 
    </div>
    <?php include('estaticos/scripts.php') ?>  
    <?php include('estaticos/footer.php') ?>
</body>
</html>