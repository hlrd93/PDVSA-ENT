    <?php 

    include_once('../template/cabecera.php');

    include_once("../config/init.php");

    $id = $_POST['id']; 
    
    $resultado_listado = Chuto::listar_chuto_byid($id);

    foreach ($resultado_listado as $row) {

    ?>
<div id="page-wrapper">

    <!-- Cabecera del Modal -->
    <div class="modal-header">
        <button type="button" id="cerrar1" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualización del Chuto</h4>
    </div>        
    
    <div class="container-fluid">
        
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">
                    Chuto
                </h3>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="../inicio/index.php">Inicio</a>
                    </li>
                    <li class="active">
                        <img src="../img/chuto.png" height="18px" alt="Truck"> Actualizar Chuto
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <script>
            
            $(document).ready(function() {

                $('#cerrar1').click(function() {
                    /* Cerrar */
                    location.reload(true);
                });
                $('#cerrar2').click(function() {
                    /* Cerrar */
                    location.reload(true);
                });

                $(".form_chuto").submit(function(e) {
                    
                    e.preventDefault();
                    
                var data = new FormData(this);
                
                $.ajax({
                        url: '../chuto/actualizar.php',
                        type: 'POST',
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (data) {

                            if (!data.error) {
                                $('#chuto-resultado').html(data);
                            }
                        }
                });

                });
                
            }); /*document ready function */
        </script>
        <!-- HTML Form (wrapped in a .bootstrap-iso div)-->
        <div class="bootstrap-iso">
            <div class="container-fluid">
                <div class="row">
                    <div class="formden_header col-md-offset-1">
                        <h2>
                            Formulario Chuto
                        </h2>
                        <p>
                            <span class="asteriskField">
                                * 
                            </span>
                            <small><em>Asterisco Rojo Indica Campos Obligatorios</em></small>
                        </p>
                            
                    </div>
                    <hr>
                    <div class="col-md-10 col-md-offset-1">
                        <form id="form_chuto" class="form_chuto" method="post" enctype="multipart/form-data">
                            
                            <!-- id del chuto -->
                            <div class="form-group form-group-md">
                            <input type="hidden" id="id_chuto" name="id_chuto" value="<?php echo $id; ?>">
                            </div>

                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="placa_chuto">
                                    Placa Chuto
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label><br>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-truck">
                                        </i>
                                    </div>
                                    <input class="form-control" id="placa_chuto" name="placa_chuto" type="text" value="<?php echo $row->placa_chuto; ?>" required>
                                </div>
                                <span class="help-block" id="hint_placa_chuto">
                                    Ingrese Placa de Chuto
                                </span>
                            </div>
                            <div class="form-group form-group-md">
                                <label class="control-label " for="placa_nueva_chuto">
                                    Placa Nueva
                                </label><br>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-bookmark-o">
                                        </i>
                                    </div>
                                    <input class="form-control" id="placa_nueva_chuto" name="placa_nueva_chuto" type="text" value="<?php echo $row->placa_nueva_chuto; ?>">
                                </div>
                                <span class="help-block" id="hint_placa_nueva_chuto">
                                    Ingrese Placa Nueva (si posee)
                                </span>
                            </div>
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="serial_carroceria_chuto">
                                    Serial de Carroceria
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label><br>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-barcode">
                                        </i>
                                    </div>
                                    <input class="form-control" id="serial_carroceria_chuto" name="serial_carroceria_chuto" type="text" value="<?php echo $row->serial_carroceria_chuto; ?>" required >
                                </div>
                                <span class="help-block" id="hint_serial_carroceria_chuto">
                                    Ingrese el Serial de la Carroceria
                                </span>
                            </div>
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="serial_motor_chuto">
                                    Serial del Motor
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label><br>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-barcode">
                                        </i>
                                    </div>
                                    <input class="form-control" id="serial_motor_chuto" name="serial_motor_chuto" type="text" value="<?php echo $row->serial_motor_chuto; ?>" required >
                                </div>
                                <span class="help-block" id="hint_serial_motor_chuto">
                                    Ingrese el Serial del Motor
                                </span>
                            </div>
                            <div class="form-group form-group-md">
                                <label class="control-label " for="marca_chuto">
                                    Marca
                                </label><br>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-tags">
                                        </i>
                                    </div>
                                    <input class="form-control" id="marca_chuto" name="marca_chuto" placeholder="ejemplo: Sinotruk, Freightliner, Mack, Chevrolet...." type="text" value="<?php echo $row->marca_chuto; ?>">
                                </div>
                                <span class="help-block" id="hint_marca_chuto">
                                    Ingrese la Marca del Chuto
                                </span>
                            </div>
                            <div class="form-group form-group-md">
                                <label class="control-label " for="tipo_chuto">
                                    Tipo de Chuto
                                </label><br>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-gg">
                                        </i>
                                    </div>
                                    <input class="form-control" id="tipo_chuto" name="tipo_chuto" placeholder="ejemplo: 420, Ocupado, Convenio, 380...." type="text" value="<?php echo $row->tipo_chuto; ?>">
                                </div>
                                <span class="help-block" id="hint_tipo_chuto">
                                    Ingrese el Tipo del Chuto
                                </span>
                            </div>
                            <div class="form-group form-group-md">
                                <label class="control-label " for="modelo_chuto">
                                    Modelo del Chuto
                                </label><br>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-gg-circle">
                                        </i>
                                    </div>
                                    <input class="form-control" id="modelo_chuto" name="modelo_chuto" placeholder="ejemplo: HOWO/A7, Tracto-Camion...." type="text" value="<?php echo $row->modelo_chuto; ?>">
                                </div>
                                <span class="help-block" id="hint_modelo_chuto">
                                    Ingrese el Modelo del Chuto
                                </span>
                            </div>
                            <div class="form-group form-group-md">
                                <label class="control-label " for="a_o_chuto">
                                    A&ntilde;o de Origen
                                </label><br>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar-o">
                                        </i>
                                    </div>
                                    <input class="form-control" id="a_o_chuto" name="a_o_chuto" placeholder="ejemplo: 1993, 2009, 2015...." type="text" value="<?php echo $row->a_o_chuto; ?>">
                                </div>
                                <span class="help-block" id="hint_a_o_chuto">
                                    Ingrese el A&ntilde;o de Origen
                                </span>
                            </div>
                            <div class="form-group form-group-md">
                                <label class="control-label " for="color_chuto">
                                    Color
                                </label><br>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-paint-brush">
                                        </i>
                                    </div>
                                    <input class="form-control" id="nombre_color_chuto" name="nombre_color_chuto" type="text" value="<?php echo $row->nombre_color_chuto; ?>">
                                    <input class="form-control" id="color_chuto_1" name="color_chuto_1" type="color" value="<?php echo $row->color_chuto_1; ?>">
                                </div>
                                <span class="help-block" id="hint_color_chuto">
                                    Ingrese el Color del Chuto
                                </span>
                            </div>
                                
                            <div class="form-group form-group-md">
                                <label class="control-label " for="observacion_chuto_estado">
                                    Observacion del Chuto
                                </label><br>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-eye">
                                        </i>
                                    </div>
                                    <textarea class="form-control" id="observacion_chuto_estado" name="observacion_chuto_estado" placeholder="ejemplo: Se encuentra Activo, Ya fue reparado...." maxlength="200"><?php echo $row->observacion_chuto_estado; ?></textarea>
                                </div>
                                <span class="help-block" id="hint_observacion_chuto_estado">
                                    Ingrese la Observacion respectiva del Chuto
                                </span>
                            </div>
                                
                            <div class="form-group form-group-md">
                                <label class="control-label " for="fecha_chuto_estado">
                                    Fecha de Registro
                                </label><br>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar">
                                        </i>
                                    </div>
                                    <input class="form-control" id="fecha_chuto_estado" name="fecha_chuto_estado" type="date" readonly value='<?php
                                    date_default_timezone_set('America/Caracas');
                                      $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                                      $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                    echo $dias[date('w')].", ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y');?>'>
                                </div>
                                <span class="help-block" id="hint_fecha_chuto_estado">
                                    Fecha de Registro del Chuto
                                </span>
                            </div>
                                
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="id_sede_chuto">
                                    Sede
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label><br>
                                <div class="input-group-addon">
                                    <i class="fa fa-industry">
                                    </i>
                                </div>
                                <select class="select form-control" id="id_sede_chuto" name="id_sede_chuto" required>
                                    <option value="<?php echo $row->id_sede_chuto; ?>">
                                        <?php echo $row->nombre_sede; ?>
                                    </option>
                                    <option value="">
                                    ---------------------
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
                                <span class="help-block" id="hint_id_sede_chuto">
                                    Selecciona la Sede, el cual ser&aacute; asignado el chuto
                                </span>
                            </div>
                                
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="id_chuto_estado">
                                    Estatus
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label><br>
                                <div class="input-group-addon">
                                    <i class="fa fa-chevron-down">
                                    </i>
                                </div>
                                <select class="select form-control" id="id_chuto_estado" name="id_chuto_estado" required>
                                    <option value="<?php echo $row->id_chuto_estado; ?>">
                                        <?php echo $row->chuto_estado; }?>
                                    </option>
                                    <option value="">
                                    ---------------------
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
                                        Grúa
                                    </option>
                                </select>
                                <span class="help-block" id="hint_id_chuto_estado">
                                    Seleccione el Estado Actual del Chuto
                                </span>
                            </div>
                            
                            <!-- Subida de Archivos Digitales -->
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="foto_placa_chuto">
                                    Foto Placa del Chuto
                                </label><br>
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-cloud-upload">
                                    </i>
                                </div>
                                    <input type="file" name="foto_placa_chuto" id="foto_placa_chuto" class="filestyle" data-input="true" data-buttonBefore="true" data-buttonText="Seleccione Placa">
                            </div>
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="foto_serial_carroceria_chuto">
                                    Foto Serial de Carroceria del Chuto
                                </label><br>
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-cloud-upload">
                                    </i>
                                </div>
                                    <input type="file" name="foto_serial_carroceria_chuto" id="foto_serial_carroceria_chuto" class="filestyle" data-input="true" data-buttonBefore="true" data-buttonText="Seleccione Serial de Carroceria">
                            </div>
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="foto_serial_motor_chuto">
                                Foto Serial de Motor del Chuto
                                </label><br>
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-cloud-upload">
                                    </i>
                                </div>
                                    <input type="file" name="foto_serial_motor_chuto" id="foto_serial_motor_chuto" class="filestyle" data-input="true" data-buttonBefore="true" data-buttonText="Seleccione Serial de Motor">
                            </div>
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="foto_seguro_chuto">
                                    Foto Digital del Seguro
                                </label><br>
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-cloud-upload">
                                    </i>
                                </div>
                                    <input type="file" name="foto_seguro_chuto" id="foto_seguro_chuto" class="filestyle" data-input="true" data-buttonBefore="true" data-buttonText="Seleccione Poliza de Seguro" >
                            </div>
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="foto_titulo_chuto">
                                    Foto Digital del Titulo
                                </label><br>
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-cloud-upload">
                                    </i>
                                </div>
                                <input type="file" name="foto_titulo_chuto" id="foto_titulo_chuto" class="filestyle" data-input="true" data-buttonBefore="true" data-buttonText="Seleccione Titulo de Propiedad">
                            </div>
                            <!-- ventana modal bootstrap de loading -->
                            <div class="form-group">
                                <div>
                                    <input type="submit" id="submit" name="submit" class="btn btn-custom btn-lg btn-block outline" value="Actualizar">
                                </div>
                            </div>
                        </form>
                        <div id="chuto-resultado"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="cerrar2" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
    </div>

    <?php include_once('../template/footer.php'); ?>