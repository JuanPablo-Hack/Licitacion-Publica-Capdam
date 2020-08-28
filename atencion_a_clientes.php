<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include('estaticos/head.php') ?>
    <title>Atención a cliente | CAPDAM</title>
</head>
<body id="main">
    <?php include('estaticos/nav.php') ?>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l3 xl3">
                <ul id="list" class="collection with-header">
                    <li class="collection-header"><h4><b>Atención a clientes</b></h4></li>
                    <a id='1' onclick='mostrar(this.id)' class='collection-item active'>¿Dónde nos encuentran?</a>
                    <a id='2' onclick='mostrar(this.id)' class='collection-item'>Directorio</a>
                    <a id='3' onclick='mostrar(this.id)' class='collection-item'>Fugas y reportes</a>
                    <a id='4' onclick='mostrar(this.id)' class='collection-item'>Tramites</a>
                    <a id='5' onclick='mostrar(this.id)' class='collection-item'>Comentarios y/o sugerencias</a>
                </ul>
            </div>
            <div class="col s12 m12 l9 xl9">
                <div id="panel_1" style="display:block">
                    <blockquote><h2>¿Dónde nos encuentran?</h2></blockquote>
                    <div class="row">
                        <div class="col s12 m12 l7 xl7">
                            <h3 class="header">Centro Municipal de Negocios</h3>
                            <div class="card horizontal">
                                <div class="card-image">
                                    <img class="materialboxed responsive-img" src="images/apartado_atencion_cliente/donde_nos_encuentras/1.png">
                                </div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <div id="tipo_de_modulo">
                                            <p>Módulo de Pago/Aclaraciones, Contratación</p>
                                        </div>
                                        <div id="contenido_card">
                                            <p>
                                                <b>Dirección: </b>Octavio Paz, Fracc. Nuevo Salagua<br>
                                                <b>Horarios: </b>Lunes a Viernes - 8:30 am a 3:00 pm
                                            </p>
                                        </div>
                                        <div class="divider"></div>
                                        <p id="contenido_card_2"><a onclick="modal_modulo_1()">Ver mapa</a><i style='width:20px;vertical-align:middle;' class='material-icons'>location_on</i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div id='modal_modulo_1' class='w3-modal' style='padding-bottom:10px;padding-top:80px'>
                                <div class='w3-modal-content w3-card-4 w3-animate-zoom'>
                                    <div id='tramites_modal_title'>
                                        <blockquote><h2>Centro Municipal de Negocios</h2></blockquote>
                                        <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.8648466625264!2d-104.32915168511943!3d19.1135841870663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424d663f42034f5%3A0xdd48f7cf47b4c9bc!2sCentro%20Municipal%20de%20Negocios!5e0!3m2!1ses-419!2smx!4v1587623999463!5m2!1ses-419!2smx' width='100%' height='280px' frameborder='0' style='border:0;' aria-hidden='false' tabindex='0'></iframe>
                                    </div>
                                    <button onclick='cerrar_modal_modulo_1()' class='w3-btn w3-block middleblue' style='color:white'>Cerrar <img style='width:20px;vertical-align:middle;' src='images/iconos/icon_cerrar.png'></button>
                                </div>
                            </div>
                            
                            <h3 class="header">Presidencia Municipal</h3>
                            <div class="card horizontal">
                                <div class="card-image">
                                    <img class="materialboxed responsive-img" src="images/apartado_atencion_cliente/donde_nos_encuentras/3.png">
                                </div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <div id="tipo_de_modulo">
                                            <p>Módulo de Pago/Aclaraciones</p>
                                        </div>
                                        <div id="contenido_card">
                                            <p>
                                                <b>Dirección: </b>Av. Juárez, Col. Centro<br>
                                                <b>Horarios: </b>Lunes a Viernes - 8:30 am a 3:00 pm
                                            </p>
                                        </div>
                                        <div class="divider"></div>
                                        <p id="contenido_card_2"><a onclick="modal_modulo_2()">Ver mapa</a><i style='width:20px;vertical-align:middle;' class='material-icons'>location_on</i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div id='modal_modulo_2' class='w3-modal' style='padding-bottom:10px;padding-top:80px'>
                                <div class='w3-modal-content w3-card-4 w3-animate-zoom'>
                                    <div id='tramites_modal_title'>
                                        <blockquote><h2>Presidencia Municipal</h2></blockquote>
                                        <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.2437855894304!2d-104.31775708509916!3d19.053016187101154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424d5a73f45fac1%3A0xeda1490673157ccb!2sPresidencia%20Municipal%20Manzanillo!5e0!3m2!1ses-419!2smx!4v1587623790957!5m2!1ses-419!2smx' width='100%' height='280px' frameborder='0' style='border:0;' aria-hidden='false' tabindex='0'></iframe>
                                    </div>
                                    <button onclick='cerrar_modal_modulo_2()' class='w3-btn w3-block middleblue' style='color:white'>Cerrar <img style='width:20px;vertical-align:middle;' src='images/iconos/icon_cerrar.png'></button>
                                </div>
                            </div>
                            
                            <h3 class="header">Barrio III / Valle de las Garzas</h3>
                            <div class="card horizontal">
                                <div class="card-image">
                                    <img class="materialboxed responsive-img" src="images/apartado_atencion_cliente/donde_nos_encuentras/2.png">
                                </div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <div id="tipo_de_modulo">
                                            <p>Módulo de Pago</p>
                                        </div>
                                        <div id="contenido_card">
                                            <p>
                                                <b>Dirección: </b>Av. Elías Zamora Verduzco<br>
                                                <b>Horarios: </b>Lunes a Viernes - 8:30 am a 3:00 pm
                                            </p>
                                        </div>
                                        <div class="divider"></div>
                                        <p id="contenido_card_2"><a onclick="modal_modulo_3()">Ver mapa</a><i style='width:20px;vertical-align:middle;' class='material-icons'>location_on</i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div id='modal_modulo_3' class='w3-modal' style='padding-bottom:10px;padding-top:80px'>
                                <div class='w3-modal-content w3-card-4 w3-animate-zoom'>
                                    <div id='tramites_modal_title'>
                                        <blockquote><h2>Barrio III / Valle de las Garzas</h2></blockquote>
                                        <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.1793511447377!2d-104.30775068511956!3d19.099786287074284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424d60a6e29df0f%3A0x312c82a313da2d8b!2sCapdam!5e0!3m2!1ses-419!2smx!4v1587623941723!5m2!1ses-419!2smx' width='100%' height='280px' frameborder='0' style='border:0;' aria-hidden='false' tabindex='0'></iframe>
                                    </div>
                                    <button onclick='cerrar_modal_modulo_3()' class='w3-btn w3-block middleblue' style='color:white'>Cerrar <img style='width:20px;vertical-align:middle;' src='images/iconos/icon_cerrar.png'></button>
                                </div>
                            </div>
                            
                            <h3 class="header">Oficinas Centrales</h3>
                            <div class="card horizontal">
                                <div class="card-image">
                                    <img class="materialboxed responsive-img" src="images/apartado_atencion_cliente/donde_nos_encuentras/5.png">
                                </div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <div id="tipo_de_modulo">
                                            <p>Módulo de Pago/Aclaraciones</p>
                                        </div>
                                        <div id="contenido_card">
                                            <p>
                                                <b>Dirección: </b>Blvd. Miguel de la Madrid #12575, Península de Santiago<br>
                                                <b>Horarios: </b>Lunes a Viernes - 8:30 am a 3:00 pm, Sabados - 8:30 am a 1:00 pm<br>
                                            </p>
                                        </div>
                                        <div class="divider"></div>
                                        <p id="contenido_card_2"><a onclick="modal_modulo_4()">Ver mapa</a><i style='width:20px;vertical-align:middle;' class='material-icons'>location_on</i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div id='modal_modulo_4' class='w3-modal' style='padding-bottom:10px;padding-top:80px'>
                                <div class='w3-modal-content w3-card-4 w3-animate-zoom'>
                                    <div id='tramites_modal_title'>
                                        <blockquote><h2>Oficinas Centrales</h2></blockquote>
                                        <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.8343918597748!2d-104.34954038511935!3d19.114919787065496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424d693b4811dab%3A0xde7891b52b2089ab!2sCAPDAM!5e0!3m2!1ses-419!2smx!4v1586854163469!5m2!1ses-419!2smx' width='100%' height='280px' frameborder='0' style='border:0;' aria-hidden='false' tabindex='0'></iframe>
                                    </div>
                                    <button onclick='cerrar_modal_modulo_4()' class='w3-btn w3-block middleblue' style='color:white'>Cerrar <img style='width:20px;vertical-align:middle;' src='images/iconos/icon_cerrar.png'></button>
                                </div>
                            </div>
                            
                            <h3 class="header">Cárcamo</h3>
                            <div class="card horizontal">
                                <div class="card-image">
                                    <img class="materialboxed responsive-img" src="images/apartado_atencion_cliente/donde_nos_encuentras/4.png">
                                </div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <div id="tipo_de_modulo">
                                            <p>Módulo de Pago</p>
                                        </div>
                                        <div id="contenido_card">
                                            <p>
                                                <b>Dirección: </b>449 Av. México, Manzanillo, Colima<br>
                                                <b>Horarios: </b>Lunes a Viernes - 8:30 am a 3:00 pm
                                            </p>
                                        </div>
                                        <div class="divider"></div>
                                        <p id="contenido_card_2"><a onclick="modal_modulo_5()">Ver mapa</a><i style='width:20px;vertical-align:middle;' class='material-icons'>location_on</i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div id='modal_modulo_5' class='w3-modal' style='padding-bottom:10px;padding-top:80px'>
                                <div class='w3-modal-content w3-card-4 w3-animate-zoom'>
                                    <div id='tramites_modal_title'>
                                        <blockquote><h2>Cárcamo</h2></blockquote>
                                        <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60341.382393349915!2d-104.35380862089842!3d19.048941599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424d50850b7af87%3A0xb187345cbe71ffe3!2sComisi%C3%B3n%20de%20Agua%20Potable%20Drenaje%20Alcantarillado%20de%20Manzanillo!5e0!3m2!1ses!2smx!4v1591933374058!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>' width='100%' height='280px' frameborder='0' style='border:0;' aria-hidden='false' tabindex='0'></iframe>
                                    </div>
                                    <button onclick='cerrar_modal_modulo_5()' class='w3-btn w3-block middleblue' style='color:white'>Cerrar <img style='width:20px;vertical-align:middle;' src='images/iconos/icon_cerrar.png'></button>
                                </div>
                            </div>
                            <script>
                                function modal_modulo_1(){document.getElementById('modal_modulo_1').style.display ="block";}
                                function cerrar_modal_modulo_1(){document.getElementById('modal_modulo_1').style.display ="none";}
                                function modal_modulo_2(){document.getElementById('modal_modulo_2').style.display ="block";}
                                function cerrar_modal_modulo_2(){document.getElementById('modal_modulo_2').style.display ="none";}
                                function modal_modulo_3(){document.getElementById('modal_modulo_3').style.display ="block";}
                                function cerrar_modal_modulo_3(){document.getElementById('modal_modulo_3').style.display ="none";}
                                function modal_modulo_4(){document.getElementById('modal_modulo_4').style.display ="block";}
                                function cerrar_modal_modulo_4(){document.getElementById('modal_modulo_4').style.display ="none";}
                                function modal_modulo_5(){document.getElementById('modal_modulo_5').style.display ="block";}
                                function cerrar_modal_modulo_5(){document.getElementById('modal_modulo_5').style.display ="none";}
                            </script>
                        </div>
                        <div class="col s12 m12 l5 xl5">
                            <img  class="materialboxed responsive-img" style="width:100%" src="images/apartado_atencion_cliente/donde_nos_encuentras/alternativos.png">
                            <img  class="materialboxed responsive-img" style="width:100%" src="images/apartado_atencion_cliente/donde_nos_encuentras/cuentas_bancarias.jpg">
                        </div>
                    </div>
                </div>
                <div id="panel_2" style="display:none">
                    <blockquote><h2>Directorio</h2></blockquote>
                    <div id="telefono_principal">
                        <img src="images/iconos/icon_celular.png" style="width:40px"><a id="telefono_directorio" href="tel:3311630">3311630</a>
                    </div>
                    <br>
                    <div id="titulo_directorio">Dirección General</div>
                    <table class="striped">
                        <thead>
                          <tr>
                              <th></th>
                              <th>Extensión</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td id="td1">#</td>
                            <td id="td2">1111</td>
                          </tr>
                        <tr>
                            <td id="td1">#</td>
                            <td id="td2">1111</td>
                          </tr>
                          <tr>
                            <td id="td1">#</td>
                            <td id="td2">1111</td>
                          </tr>
                        </tbody>
                    </table><br>
                    <div id="titulo_directorio">Sistemas e Informática</div>
                    <table class="striped">
                        <thead>
                          <tr>
                              <th></th>
                              <th>Extensión</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td id="td1">#</td>
                            <td id="td2">1111</td>
                          </tr>
                        <tr>
                            <td id="td1">#</td>
                            <td id="td2">1111</td>
                          </tr>
                          <tr>
                            <td id="td1">#</td>
                            <td id="td2">1111</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
                <div id="panel_3" style="display:none">
                    <blockquote><h2>Fugas y reportes</h2></blockquote>
                    <h3><i>Generar nuevo reporte</i></h3>
                    <div class="row" id="form">
                        <form action="" method="POST">
                            <div class="col s12 m12 l12 xl12" style="padding:0">
                                <label for="tipo_reporte">Tipo de reporte</label>
                                <select id="tipo_reporte" name="tipo_reporte" required>
                                    <option value="" disabled selected> -Seleccione una opcion- </option>
                                    <option value="#">#</option>
                                    <option value="#">#</option>
                                </select>
                            </div>
                            <div class="col s12 m12 l4 xl4"  style="padding:0">
                                <label for="name_es">Nombre (s)</label>
                                <input id="name_es" type="text" name="name_es" required>
                            </div>
                            <div class="col s12 m12 l4 xl4" style="padding:0px 5px 0px 5px">
                                <label for="a_paterno">Apellido paterno</label>
                                <input id="a_paterno" type="text" name="a_paterno" required>
                            </div>
                            <div class="col s12 m12 l4 xl4" style="padding:0">
                                <label for="a_materno">Apellido materno</label>
                                <input id="a_materno" type="text" name="a_materno" required>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="padding:0">
                                <label for="calle">Calle</label>
                                <input id="calle" type="text" name="calle" required>
                            </div>
                            <div class="col s12 m12 l3 xl3" style="padding:0px 5px 0px 5px">
                                <label for="numero_e">Numero exterior</label>
                                <input id="numero_e" type="text" name="numero_e" required>
                            </div>
                            <div class="col s12 m12 l3 xl3" style="padding:0">
                                <label for="numero_i">Numero interior</label>
                                <input id="numero_i" type="text" name="numero_i">
                            </div>
                            <div class="col s12 m12 l4 xl4" style="padding:0">
                                <label for="telefono">Teléfono</label>
                                <input id="telefono" type="number" name="telefono" required>
                            </div>
                            <div class="col s12 m12 l4 xl4" style="padding:0px 5px 0px 5px">
                                <label for="colonia">Colonia</label>
                                <input id="colonia" type="text" name="colonia" required>
                            </div>
                            <div class="col s12 m12 l4 xl4" style="padding:0">
                                <label for="localidad">Localidad</label>
                                <input id="localidad" type="text" name="localidad" required>
                            </div>
                            <label for="nota">Nota</label>
                            <textarea id="nota" name="nota" placeholder="Observaciones opcionales que gustes añadir a tu reporte" required></textarea>
                            <input class="w3-btn w3-block middleblue" id="enviar_r" style="color:white" name="enviar_r" type="submit" value="Enviar reporte">
                        </form>
                    </div>
                </div>
                <div id="panel_4" style="display:none">
                    <blockquote><h2>Tramites</h2></blockquote>
                    <div class="row">
                        <div class='col s12 m4 l4 xl4'>
                            <div class='card blue-grey lighten-5'>
                                <div class='card-content'>
                                    <div id="tramite_card"><span class='card-title'>Contratación de agua y denaje<br>(Zona urbana)</span></div>
                                </div>
                                <a onclick='mostrar_modal1()' class='w3-btn w3-block middleblue' style='color:white'>Ver requisitos</a>
                            </div>
                        </div>
                        <div class='col s12 m4 l4 xl4'>
                            <div class='card blue-grey lighten-5'>
                                <div class='card-content'>
                                    <div id="tramite_card"><span class='card-title'>Contratación de agua y denaje<br>(Zona rural)</span></div>
                                </div>
                                <a onclick='mostrar_modal2()' class='w3-btn w3-block middleblue' style='color:white'>Ver requisitos</a>
                            </div>
                        </div>
                        <div class='col s12 m4 l4 xl4'>
                            <div class='card blue-grey lighten-5'>
                                <div class='card-content'>
                                    <div id="tramite_card"><span class='card-title'>Contratación de agua y denaje<br>(Constructoras)</span></div>
                                </div>
                                <a onclick='mostrar_modal3()' class='w3-btn w3-block middleblue' style='color:white'>Ver requisitos</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class='col s12 m3 l3 xl3'>
                            <div class='card blue-grey lighten-5'>
                                <div class='card-content'>
                                    <div id="tramite_card"><span class='card-title'>Cambio de nombre en su contrato</span></div>
                                </div>
                                <a onclick='mostrar_modal4()' class='w3-btn w3-block middleblue' style='color:white'>Ver requisitos</a>
                            </div>
                        </div>
                        <div class='col s12 m3 l3 xl3'>
                            <div class='card blue-grey lighten-5'>
                                <div class='card-content'>
                                    <div id="tramite_card"><span class='card-title'>Constancia de aguas residuales</span></div>
                                </div>
                                <a onclick='mostrar_modal5()' class='w3-btn w3-block middleblue' style='color:white'>Ver requisitos</a>
                            </div>
                        </div>
                        <div class='col s12 m3 l3 xl3'>
                            <div class='card blue-grey lighten-5'>
                                <div class='card-content'>
                                    <div id="tramite_card"><span class='card-title'>Jubilados y pensionados</span></div>
                                </div>
                                <a onclick='mostrar_modal6()' class='w3-btn w3-block middleblue' style='color:white'>Ver requisitos</a>
                            </div>
                        </div>
                        <div class='col s12 m3 l3 xl3'>
                            <div class='card blue-grey lighten-5'>
                                <div class='card-content'>
                                    <div id="tramite_card"><span class='card-title'>Tercera edad y discapacidad</span></div>
                                </div>
                                <a onclick='mostrar_modal7()' class='w3-btn w3-block middleblue' style='color:white'>Ver requisitos</a>
                            </div>
                        </div>
                    </div> 
                    
                    
                    <div id='modal_1' class='w3-modal' style='padding-bottom:10px;padding-top:10px'>
                        <div class='w3-modal-content w3-card-4 w3-animate-zoom'>
                            <div id='tramites_modal_title'>
                                <blockquote><h2>Contratación de agua y denaje (Zona urbana)</h2></blockquote>
                                <center><img style='width:100%' src='images/apartado_atencion_cliente/tramites/tramite1.png'></center>
                            </div>
                            <button onclick='cerrar_modal1()' class='w3-btn w3-block middleblue' style='color:white'>Cerrar <img style='width:20px;vertical-align:middle;' src='images/iconos/icon_cerrar.png'></button>
                        </div>
                    </div>
                    <div id='modal_2' class='w3-modal' style='padding-bottom:10px;padding-top:10px'>
                        <div class='w3-modal-content w3-card-4 w3-animate-zoom'>
                            <div id='tramites_modal_title'>
                                <blockquote><h2>Contratación de agua y denaje (Zona rural)</h2></blockquote>
                                <center><img style='width:100%' src='images/apartado_atencion_cliente/tramites/tramite2.png'></center>
                            </div>
                            <button onclick='cerrar_modal2()' class='w3-btn w3-block middleblue' style='color:white'>Cerrar <img style='width:20px;vertical-align:middle;' src='images/iconos/icon_cerrar.png'></button>
                        </div>
                    </div>
                    <div id='modal_3' class='w3-modal' style='padding-bottom:10px;padding-top:10px'>
                        <div class='w3-modal-content w3-card-4 w3-animate-zoom'>
                            <div id='tramites_modal_title'>
                                <blockquote><h2>Contratación de agua y denaje (Constructoras)</h2></blockquote>
                                <center><img style='width:100%' src='images/apartado_atencion_cliente/tramites/tramite3.png'></center>
                            </div>
                            <button onclick='cerrar_modal3()' class='w3-btn w3-block middleblue' style='color:white'>Cerrar <img style='width:20px;vertical-align:middle;' src='images/iconos/icon_cerrar.png'></button>
                        </div>
                    </div>
                    <div id='modal_4' class='w3-modal' style='padding-bottom:10px;padding-top:10px'>
                        <div class='w3-modal-content w3-card-4 w3-animate-zoom'>
                            <div id='tramites_modal_title'>
                                <blockquote><h2>Cambio de nombre en su contrato</h2></blockquote>
                                <center><img style='width:100%' src='images/apartado_atencion_cliente/tramites/tramite4.png'></center>
                            </div>
                            <button onclick='cerrar_modal4()' class='w3-btn w3-block middleblue' style='color:white'>Cerrar <img style='width:20px;vertical-align:middle;' src='images/iconos/icon_cerrar.png'></button>
                        </div>
                    </div>
                    <div id='modal_5' class='w3-modal' style='padding-bottom:10px;padding-top:10px'>
                        <div class='w3-modal-content w3-card-4 w3-animate-zoom'>
                            <div id='tramites_modal_title'>
                                <blockquote><h2>Constancia de aguas residuales</h2></blockquote>
                                <center><img style='width:100%' src='images/apartado_atencion_cliente/tramites/tramite5.png'></center>
                            </div>
                            <button onclick='cerrar_modal5()' class='w3-btn w3-block middleblue' style='color:white'>Cerrar <img style='width:20px;vertical-align:middle;' src='images/iconos/icon_cerrar.png'></button>
                        </div>
                    </div>
                    <div id='modal_6' class='w3-modal' style='padding-bottom:10px;padding-top:10px'>
                        <div class='w3-modal-content w3-card-4 w3-animate-zoom'>
                            <div id='tramites_modal_title'>
                                <blockquote><h2>Jubilados y pensionados</h2></blockquote>
                                <center><img style='width:100%' src='images/apartado_atencion_cliente/tramites/tramite6.png'></center>
                            </div>
                            <button onclick='cerrar_modal6()' class='w3-btn w3-block middleblue' style='color:white'>Cerrar <img style='width:20px;vertical-align:middle;' src='images/iconos/icon_cerrar.png'></button>
                        </div>
                    </div>
                    <div id='modal_7' class='w3-modal' style='padding-bottom:10px;padding-top:10px'>
                        <div class='w3-modal-content w3-card-4 w3-animate-zoom' id="terceraedad">
                            <div id='tramites_modal_title'>
                                <blockquote><h2>Tercera edad y discapacidad</h2></blockquote>
                                <div class="row">
                                    <div class="col s12 m7 l7 xl7" align="justify">
                                        <b>Artículo 27.-</b> Los usuarios que acrediten ser ciudadanos mexicanos y tener la calidad de pensionados o jubilados, adultos mayores y personas con discapacidad en los términos de la ley de la materia, tendrán derecho a un descuento del 50 por ciento en el pago de los derechos por servicios públicos de agua potable, alcantarillado y saneamiento, respecto de la casa que habitan y que comprueben ser propietarios, debiendo exhibir los siguientes documentos:<br><br>

                                        I). Original y copia de la credencial que lo acredite como pensionado o jubilado, adulto mayor o con capacidad diferente, según sea el caso, expedidos por institución oficial mexicana;<br>

                                        II) Credencial de elector en la que aparezca el domicilio respecto del cual se solicita el descuento.<br>
                                        Este beneficio se otorgará respecto a un solo inmueble.<br>
                                        En caso de que el usuario sujeto al beneficio establecido en este artículo realice su pago por anualidad adelantada, no tendrá derecho al descuento por pago anticipado.
                                    </div>
                                    <div class="col s12 m5 l5 xl5">
                                        <img style='width:100%' src='images/apartado_atencion_cliente/tramites/tramite7.png'>
                                    </div>
                                </div>
                                
                            </div>
                            <button onclick='cerrar_modal7()' class='w3-btn w3-block middleblue' style='color:white'>Cerrar <img style='width:20px;vertical-align:middle;' src='images/iconos/icon_cerrar.png'></button>
                        </div>
                    </div>
                                                                                    
                </div>
                <div id="panel_5" style="display:none">
                    <blockquote><h2>Sugerencias y/o comentarios</h2></blockquote>
                    <p>Tu opcion es importante para nosotros, si tienes alguna sugerencia y/o comentario acerca de nuestro servicio llena los siguientes campos y nosotros nos podremos en contacto contigo para darle seguimiento</p>
                    <div class="row" id="form">
                        <form action="atencion_a_clientes.php" method="POST">
                            <div class="col s12 m12 l4 xl4"  style="padding:0">
                                <label for="name_es_c">Nombre (s)</label>
                                <input id="name_es_c" type="text" name="name_es_c" required>
                            </div>
                            <div class="col s12 m12 l4 xl4" style="padding:0px 5px 0px 5px">
                                <label for="a_paterno_c">Apellido paterno</label>
                                <input id="a_paterno_c" type="text" name="a_paterno_c" required>
                            </div>
                            <div class="col s12 m12 l4 xl4"  style="padding:0">
                                <label for="a_materno_c">Apellido materno</label>
                                <input id="a_materno_c" type="text" name="a_materno_c" required>
                            </div>
                            <div class="col s12 m12 l6 xl6"  style="padding:0px 5px 0px 0px">
                                <label for="e_mail_c">Correo electronico</label>
                                <input id="e_mail_c" type="email" name="e_mail_c" required>
                            </div> 
                            <div class="col s12 m12 l6 xl6"  style="padding:0">
                                <label for="telefono_c">Teléfono</label>
                                <input id="telefono_c" type="number" name="telefono_c" required>
                            </div> 
                            <label for="nota_c">Sugerencia y/o comentario</label>
                            <textarea id="nota_c" name="nota_c" placeholder=""></textarea>
                            <input class="w3-btn w3-block middleblue" id="enviar_c" style="color:white" name="enviar_c" type="submit" value="Enviar sugerencia y/o comentario">                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <script>            
        $(document).ready(function(){
            $('#enviar_r').click(function(){
                if( $('#tipo_reporte').val() == null ){$('#tipo_reporte').css("border", "1px solid #F14B4B")
                }else{$('#tipo_reporte').css("border", "1px solid #66bb6a")}        

                if( $('#name_es').val() == '' ){$('#name_es').css("border", "1px solid #F14B4B")
                }else{$('#name_es').css("border", "1px solid #66bb6a")}

                if( $('#a_paterno').val() == '' ){$('#a_paterno').css("border", "1px solid #F14B4B")
                }else{$('#a_paterno').css("border", "1px solid #66bb6a")}

                if( $('#a_materno').val() == '' ){$('#a_materno').css("border", "1px solid #F14B4B")
                }else{$('#a_materno').css("border", "1px solid #66bb6a")}

                if( $('#calle').val() == '' ){$('#calle').css("border", "1px solid #F14B4B")
                }else{$('#calle').css("border", "1px solid #66bb6a")}

                if( $('#numero_e').val() == '' ){$('#numero_e').css("border", "1px solid #F14B4B")
                }else{$('#numero_e').css("border", "1px solid #66bb6a")}

                if( $('#telefono').val() == '' ){$('#telefono').css("border", "1px solid #F14B4B")
                }else{$('#telefono').css("border", "1px solid #66bb6a")}

                if( $('#colonia').val() == '' ){$('#colonia').css("border", "1px solid #F14B4B")
                }else{$('#colonia').css("border", "1px solid #66bb6a")}

                if( $('#localidad').val() == '' ){$('#localidad').css("border", "1px solid #F14B4B")
                }else{$('#localidad').css("border", "1px solid #66bb6a")}

                if( $('#nota').val() == '' ){$('#nota').css("border", "1px solid #F14B4B")
                }else{$('#nota').css("border", "1px solid #66bb6a")}
            });
            $('#enviar_c').click(function(){
                if( $('#name_es_c').val() == '' ){$('#name_es_c').css("border", "1px solid #F14B4B")
                }else{$('#name_es_c').css("border", "1px solid #66bb6a")}

                if( $('#a_paterno_c').val() == '' ){$('#a_paterno_c').css("border", "1px solid #F14B4B")
                }else{$('#a_paterno_c').css("border", "1px solid #66bb6a")}

                if( $('#a_materno_c').val() == '' ){$('#a_materno_c').css("border", "1px solid #F14B4B")
                }else{$('#a_materno_c').css("border", "1px solid #66bb6a")}
                
                if( $('#e_mail_c').val() == '' ){$('#e_mail_c').css("border", "1px solid #F14B4B")
                }else{$('#e_mail_c').css("border", "1px solid #66bb6a")}
                
                if( $('#telefono_c').val() == '' ){$('#telefono_c').css("border", "1px solid #F14B4B")
                }else{$('#telefono_c').css("border", "1px solid #66bb6a")}

                if( $('#nota_c').val() == '' ){$('#nota_c').css("border", "1px solid #F14B4B")
                }else{$('#nota_c').css("border", "1px solid #66bb6a")}
            });
            $('#cerrar_modal').click(function(){
                $('.w3-modal').remove();
            });
        });
    </script>
    <?php include('estaticos/scripts.php') ?>
    <?php include('estaticos/footer.php') ?>
</body>
</html>

<?php
    if (isset($_POST['enviar_r'])) {
        $tipo_reporte = $_POST["tipo_reporte"];
        $name_es = $_POST["name_es"];
        $a_paterno = $_POST["a_paterno"];
        $a_materno = $_POST["a_materno"];
        $calle = $_POST["calle"];
        $telefono = $_POST["telefono"];
        $numero_e = $_POST["numero_e"];
        $numero_i = $_POST["numero_i"];
        $colonia = $_POST["colonia"];
        $localidad = $_POST["localidad"];
        $nota = $_POST["nota"];

        //$destinatario ="culturadelagua@capdam.gob.mx";
        $destinatario ="atencionusuarios@capdam.gob.mx";
        //$destinatario ="noelia.lml.3@gmail.com";
        $asunto = "Fugas y reportes | CAPDAM";

        $mensaje = "Tipo de reporte: $tipo_reporte\n";
        $mensaje .= "Nombre: $name_es $a_paterno $a_materno\n";
        $mensaje .= "Dirección:  $calle $numero_e $numero_i\n";
        $mensaje .= "Colonia: $colonia\n";
        $mensaje .= "Localidad: $localidad\n";
        $mensaje .= "Teléfono: $telefono\n";
        $mensaje .= "Nota: $nota\n";

        mail($destinatario,$asunto,$mensaje);
        echo '<div class="w3-modal" style="display:block"><div class="w3-modal-content w3-card-4 w3-animate-zoom"><center><br><h3>Reporte envido exitosamente<br><br></h3></center><a style="color:white" class="w3-btn w3-block middleblue" id="cerrar_modal">Cerrar <img style="width:20px;vertical-align:middle;" src="images/iconos/icon_cerrar.png"></a></div></div>'; 
    }
    if (isset($_POST['enviar_c'])) {
        echo '<div class="w3-modal" style="display:block"><div class="w3-modal-content w3-card-4 w3-animate-zoom"><center><br><h3>Sugerencia y/o comentario envido exitosamente<br><br></h3></center><a style="color:white" class="w3-btn w3-block middleblue" id="cerrar_modal">Cerrar <img style="width:20px;vertical-align:middle;" src="images/iconos/icon_cerrar.png"></a></div></div>'; 
    }
?>