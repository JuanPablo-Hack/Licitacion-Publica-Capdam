<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include('estaticos/head.php') ?>
    <title>Registro de Proveedores | CAPDAM</title>
</head>
<body id="main">
    <?php include('estaticos/nav.php') ?>
    <div class="container">
        <div class="row">
            
            <div class="col s12 m12 l12 xl12">
                
                <div id="panel_3" style="display:block">
                    <blockquote><h2>Proveedores</h2></blockquote>
                    <h3><i>Generar nuevo registro</i></h3>
                    <div class="row" id="form">
                        <form action="registro_proveedores.php" method="POST">
                            <div class="col s12 m12 l12 xl12" style="padding:0">
                                <label for="tipo_reporte">Situación Fiscal</label>
                                <select id="tipo_reporte" name="tipo_reporte" required>
                                    <option value="" disabled selected> -Seleccione una opcion- </option>
                                    <option value="#">Persona Física</option>
                                    <option value="#">Persona Moral</option>
                                </select>
                            </div>
                            <div class="col s12 m12 l4 xl4"  style="padding:0">
                                <label for="name_es">Nombre (s)</label>
                                <input id="name_es" type="text" name="name_es" required>
                            </div>
                            <div class="col s12 m12 l4 xl4" style="padding:0px 5px 0px 5px">
                                <label for="a_paterno">RFC</label>
                                <input id="a_paterno" type="text" name="a_paterno" required>
                            </div>
                            <div class="col s12 m12 l4 xl4" style="padding:0">
                                <label for="a_materno">Correo Eléctronico</label>
                                <input id="a_materno" type="email" name="a_materno" required>
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
                            <textarea id="nota" name="nota" placeholder="Observaciones opcionales que gustes añadir a tu registro" required></textarea>
                            <input class="w3-btn w3-block middleblue" id="enviar_r" style="color:white" name="enviar_r" type="submit" value="Enviar registro">
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
        echo '<div class="w3-modal" style="display:block"><div class="w3-modal-content w3-card-4 w3-animate-zoom"><center><br><h3>Registro enviado exitosamente<br><br></h3></center><a style="color:white" class="w3-btn w3-block middleblue" id="cerrar_modal">Cerrar <img style="width:20px;vertical-align:middle;" src="images/iconos/icon_cerrar.png"></a></div></div>'; 
    }
    
?>