
	<?php include_once('../template/cabecera.php'); ?>

	<?php include_once('../template/navegador.php'); ?> 

	<?php include_once('../template/sidebar.php'); ?> 

<div id="page-wrapper">
    
    <div class="container-fluid">
        
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Cisternas
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="../inicio/index.php">Inicio</a>
                    </li>
                    <li class="active">
                        <img src="../img/cisterna.png" height="30px" alt="Truck"> Registro de Cisterna
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <script>
            
            $(document).ready(function() {
                
                $("#form_cisterna").submit(function(e) {
                    
                    e.preventDefault();
                    
                    $('#cisterna-resultado').html('<h3><small>Manten la Calma y juega Rubik...!</small></h3><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../img/cargando1.gif" height="150"/><img src="../img/cargando2.gif" height="150"/><img src="../img/cargando.gif" height="150"/><img src="../img/cargando4.gif" height="150"/>');

                var data = new FormData(this);

                $.ajax({
                        url: '../cisterna/registrar.php',
                        type: 'POST',
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (data) {

                            if (!data.error) {
                                $('#cisterna-resultado').html(data);
                            }
                        }
                });
                    
                    /*var postData = $(this).serialize();
                    var url = $(this).attr("action");
                    
                    $.post(url, postData, function(php_table_data){
                        
                        $("#cisterna-resultado").html(php_table_data);                        
                        
                    });*/

                    
                });
                
            }); /*document ready function */
        </script>
        <!-- HTML Form (wrapped in a .bootstrap-iso div) col-md-6 col-sm-6 col-xs-12-->
        <div class="bootstrap-iso">
            <div class="container-fluid">
                <div class="row">
                    <div class="formden_header col-md-offset-1">
                        <h2>
                            Formulario Cisterna
                        </h2>
                        <p>
                            <span class="asteriskField">
                                * 
                            </span>
                            <small><em>Asterisco Rojo Indica Campos Obligatorios</em></small>
                        </p>
                            
                    </div>
                    <hr>
                    <div class="col-md-6 col-md-offset-3">
                        <form id="form_cisterna" method="post" action="./registrar.php">
                            <div class="form-group form-group-sm">
                                <label class="control-label requiredField" for="placa_cisterna">
                                    Placa Cisterna
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-stack-exchange">
                                        </i>
                                    </div>
                                    <input class="form-control" id="placa_cisterna" name="placa_cisterna" type="text"/>
                                </div>
                                <span class="help-block" id="hint_placa_cisterna">
                                    Ingrese Placa de Cisterna
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label " for="placa_nueva_cisterna">
                                    Placa Nueva
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-bookmark-o">
                                        </i>
                                    </div>
                                    <input class="form-control" id="placa_nueva_cisterna" name="placa_nueva_cisterna" type="text"/>
                                </div>
                                <span class="help-block" id="hint_placa_nueva_cisterna">
                                    Ingrese Placa Nueva (si posee)
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label requiredField" for="serial_carroceria_cisterna">
                                    Serial de Carroceria
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-barcode">
                                        </i>
                                    </div>
                                    <input class="form-control" id="serial_carroceria_cisterna" name="serial_carroceria_cisterna" type="text"/>
                                </div>
                                <span class="help-block" id="hint_serial_carroceria_cisterna">
                                    Ingrese el Serial de la Carroceria
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label " for="marca_cisterna">
                                    Marca
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-tags">
                                        </i>
                                    </div>
                                    <input class="form-control" id="marca_cisterna" name="marca_cisterna" placeholder="ejemplo: " type="text"/>
                                </div>
                                <span class="help-block" id="hint_marca_cisterna">
                                    Ingrese la Marca de la Cisterna
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label " for="tipo_cisterna">
                                    Tipo de Cisterna
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-gg">
                                        </i>
                                    </div>
                                    <input class="form-control" id="tipo_cisterna" name="tipo_cisterna" placeholder="ejemplo: " type="text"/>
                                </div>
                                <span class="help-block" id="hint_tipo_cisterna">
                                    Ingrese el Tipo de la Cisterna
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label " for="modelo_cisterna">
                                    Modelo de la Cisterna
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-gg-circle">
                                        </i>
                                    </div>
                                    <input class="form-control" id="modelo_cisterna" name="modelo_cisterna" placeholder="ejemplo: " type="text"/>
                                </div>
                                <span class="help-block" id="hint_modelo_cisterna">
                                    Ingrese el Modelo de la Cisterna
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label " for="a_o_cisterna">
                                    A&ntilde;o de Origen
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar-o">
                                        </i>
                                    </div>
                                    <input class="form-control" id="a_o_cisterna" name="a_o_cisterna" placeholder="ejemplo: 1993, 2009, 2015...." type="text"/>
                                </div>
                                <span class="help-block" id="hint_a_o_cisterna">
                                    Ingrese el A&ntilde;o de Origen
                                </span>
                            </div>    
                            <div class="form-group form-group-sm">
                                <label class="control-label " for="color_cisterna">
                                    Color
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-paint-brush">
                                        </i>
                                    </div>
                                    <input class="form-control" id="nombre_color_cisterna" name="nombre_color_cisterna" type="text"/>
                                    <input class="form-control" id="color_cisterna_1" name="color_cisterna_1" type="color"/>
                                    <input class="form-control" id="color_cisterna_2" name="color_cisterna_2" type="color"/>
                                </div>
                                <span class="help-block" id="hint_color_cisterna">
                                    Ingrese el Color de la Cisterna
                                </span>
                            </div>    
                            <div class="form-group form-group-sm">
                                <label class="control-label " for="nro_ejes_cisterna">
                                    Numero de Ejes
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-opencart">
                                        </i>
                                    </div>
                                    <input class="form-control" id="nro_ejes_cisterna" name="nro_ejes_cisterna" type="text"/>
                                </div>
                                <span class="help-block" id="hint_nro_ejes_cisterna">
                                    Ingrese el Numero de Ejes
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label requiredField" for="capacidad_1erc_cisterna">
                                    Capacidad del Primer Compartimiento
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-battery-quarter">
                                        </i>
                                    </div>
                                    <input class="form-control" id="capacidad_1erc_cisterna" name="capacidad_1erc_cisterna" placeholder="ejemplo: 12000..." type="text"/>
                                </div>
                                <span class="help-block" id="hint_capacidad_1erc_cisterna">
                                    Ingrese la capacidad del primer compartimiento, (en caso de no poseer, deje en blanco)
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label requiredField" for="capacidad_2doc_cisterna">
                                    Capacidad del Segundo Compartimiento
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-battery-half">
                                        </i>
                                    </div>
                                    <input class="form-control" id="capacidad_2doc_cisterna" name="capacidad_2doc_cisterna" placeholder="ejemplo: 14000..." type="text"/>
                                </div>
                                <span class="help-block" id="hint_capacidad_2doc_cisterna">
                                    Ingrese la capacidad del segundo compartimiento, (en caso de no poseer, deje en blanco)
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label requiredField" for="capacidad_3erc_cisterna">
                                    Capacidad del Tercer Compartimiento
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-battery-three-quarters">
                                        </i>
                                    </div>
                                    <input class="form-control" id="capacidad_3erc_cisterna" name="capacidad_3erc_cisterna" placeholder="ejemplo: 16000..." type="text"/>
                                </div>
                                <span class="help-block" id="hint_capacidad_3erc_cisterna">
                                    Ingrese la capacidad del tercer compartimiento, (en caso de no poseer, deje en blanco)
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label requiredField" for="capacidad_totalc_cisterna">
                                    Capacidad Total de la Cisterna
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-battery-full">
                                        </i>
                                    </div>
                                    <input class="form-control" id="capacidad_totalc_cisterna" name="capacidad_totalc_cisterna" placeholder="ejemplo: 42000..." type="text"/>
                                </div>
                                <span class="help-block" id="hint_capacidad_totalc_cisterna">
                                    Ingrese la Capacidad Total
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label " for="observacion_cisterna_estado">
                                    Observacion de la Cisterna
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-eye">
                                        </i>
                                    </div>
                                    <textarea class="form-control" id="observacion_cisterna_estado" name="observacion_cisterna_estado" placeholder="ejemplo: Se encuentra Activo, Ya fue reparado...." maxlength="200"></textarea>
                                </div>
                                <span class="help-block" id="hint_observacion_cisterna_estado">
                                    Ingrese la Observacion respectiva de la Cisterna
                                </span>
                            </div>
                                
                            <div class="form-group form-group-md">
                                <label class="control-label " for="fecha_cisterna_estado">
                                    Fecha de Registro
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar">
                                        </i>
                                    </div>
                                    <input class="form-control" id="fecha_cisterna_estado" name="fecha_cisterna_estado" type="date" readonly value='<?php
                                    date_default_timezone_set('America/Caracas');
                                      $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                                      $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                    echo $dias[date('w')].", ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y');?>'/>
                                </div>
                                <span class="help-block" id="hint_fecha_cisterna_estado">
                                    Fecha de Registro de la Cisterna
                                </span>
                            </div>
                                
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="id_sede_cisterna">
                                    Sede
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label>
                                <div class="input-group-addon">
                                    <i class="fa fa-industry">
                                    </i>
                                </div>
                                <select class="select form-control" id="id_sede_cisterna" name="id_sede_cisterna" required>
                                    <option value="">
                                        Seleccione
                                    </option>
                                    <option value="andes_vg">
                                        El Vigia
                                    </option>
                                    <option value="andes_lf">
                                        La Fria
                                    </option>
                                    <option value="andes_sc">
                                        San Cristobal
                                    </option>
                                </select>
                                <span class="help-block" id="hint_id_sede_cisterna">
                                    Selecciona la Sede, el cual ser&aacute; asignada la cisterna
                                </span>
                            </div>
                                
                            <div class="form-group form-group-sm">
                                <label class="control-label requiredField" for="id_cisterna_estado">
                                    Estatus
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label>
                                <div class="input-group-addon">
                                    <i class="fa fa-chevron-down">
                                    </i>
                                </div>
                                <select class="select form-control" id="id_cisterna_estado" name="id_cisterna_estado" required>
                                    <option value="">
                                        Seleccione
                                    </option>
                                    <option value="1">
                                        Activo
                                    </option>
                                    <option value="2">
                                        Estacionamiento
                                    </option>
                                    <option value="3">
                                        Fiscalia
                                    </option>
                                    <option value="4">
                                        A Desincorporar
                                    </option>
                                    <option value="5">
                                        Desincorporado
                                    </option>
                                    <option value="6">
                                        Vaccum
                                    </option>
                                </select>
                                <span class="help-block" id="hint_id_cisterna_estado">
                                    Seleccione el Estado Actual de la cisterna
                                </span>
                            </div>

                            <!-- Subida de Archivos Digitales -->
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="foto_placa_cisterna">
                                    Foto Placa de la Cisterna
                                </label>
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-cloud-upload">
                                    </i>
                                    <input type="file" name="foto_placa_cisterna" id="foto_placa_cisterna" class="filestyle" data-input="true" data-buttonBefore="true" data-buttonText="Seleccione Placa">
                                </div>
                            </div>
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="foto_serial_carroceria_cisterna">
                                    Foto Serial de Carroceria de la Cisterna
                                </label>
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-cloud-upload">
                                    </i>
                                    <input type="file" name="foto_serial_carroceria_cisterna" id="foto_serial_carroceria_cisterna" class="filestyle" data-input="true" data-buttonBefore="true" data-buttonText="Seleccione Serial de Carroceria">
                                </div>
                            </div>
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="foto_seguro_cisterna">
                                    Foto Digital del Seguro
                                </label>
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-cloud-upload">
                                    </i>
                                    <input type="file" name="foto_seguro_cisterna" id="foto_seguro_cisterna" class="filestyle" data-input="true" data-buttonBefore="true" data-buttonText="Seleccione Poliza de Seguro" >
                                </div>
                            </div>
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="foto_titulo_cisterna">
                                    Foto Digital del Titulo
                                </label>
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-cloud-upload">
                                    </i>
                                <input type="file" name="foto_titulo_cisterna" id="foto_titulo_cisterna" class="filestyle" data-input="true" data-buttonBefore="true" data-buttonText="Seleccione Titulo de Propiedad">
                                </div>
                            </div>
                                
                            <!-- ventana modal bootstrap de loading -->
                            <div class="form-group">
                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div id="cisterna-resultado">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <input type="submit" id="submit" name="submit" class="btn btn-custom btn-lg btn-block outline" value="Registrar" data-toggle="modal" data-target=".bs-example-modal-lg">
                                </div>
                            </div>
                        </form>       
                    </div>
                </div>
            </div>
        </div>
    </div>



	<?php include_once('../template/footer.php'); ?>