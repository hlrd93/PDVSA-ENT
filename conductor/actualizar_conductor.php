    <?php 

    include_once('../template/cabecera.php');

    include_once("../config/init.php");

    $c = $_POST['cedula']; 
    
    $r = Conductor::listar_conductor_byid($c);

    foreach ($r as $row) {

    ?>
<div id="page-wrapper">

    <!-- Cabecera del Modal -->
    <div class="modal-header">
        <button type="button" id="cerrar1" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualización del Conductor</h4>
    </div>        
    
    <div class="container-fluid">
        
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">
                    Conductor
                </h3>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="../inicio/index.php">Inicio</a>
                    </li>
                    <li class="active">
                        <img src="../img/conductor.png" height="18px" alt="Conductor"> Actualizar Conductor
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <script>
            
            $('#conductor-cargando').hide();
                
            $(document).ready(function() {

                var date_input=$('input[name="fecha_conductor"]');
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'dd/mm/yyyy',
                    orientation: 'right',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                });

                $(".form_conductor").submit(function(e) {
                    
                    e.preventDefault();

                    
                var data = new FormData(this);
                
                $.ajax({
                        url: '../conductor/actualizar.php',
                        type: 'POST',
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function(){
                            $('#conductor-cargando').show();
                            $('#cedula_conductor').prop('readonly', true);
                            $('#nombre_conductor').prop('readonly', true);
                            $('#apellido_conductor').prop('readonly', true);
                            $('#fecha_conductor').prop('readonly', true);
                            $('#id_sede_conductor').prop('readonly', true);
                            $('#id_conductor_estado').prop('readonly', true);
                        },
                        success: function (data) {

                            if (!data.error) {
                                $('#conductor-cargando').hide();
                                $('#form_conductor').trigger("reset");
                                $('#cedula_conductor').prop('readonly', false);
                                $('#nombre_conductor').prop('readonly', false);
                                $('#apellido_conductor').prop('readonly', false);
                                $('#fecha_conductor').prop('readonly', false);
                                $('#id_sede_conductor').prop('readonly', false);
                                $('#id_conductor_estado').prop('readonly', false);
                                $('#conductor-resultado').html(data);
                            }
                        }
                    });
                });

                $(".id_conductor_estado").change(function() {
                
                    $(".id_conductor_estado option:selected").each(function () {
                    
                        elegido=$(this).val();
                        
                        $.post("./estatus.php", { elegido: elegido }, function(data){

                            $("#id_conductor_estado_child").html(data);
                        });
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
                            Formulario Conductor
                            <div id="conductor-cargando"><img src="../img/cargando2.gif" height="40px" alt="Cargando"></div>
                        </h2>
                        <p>
                            <span class="asteriskField">
                                * 
                            </span>
                            <small><em>Asterisco Rojo Indica Campos Obligatorios</em></small>
                        </p>
                            
                    </div>
                    <hr>
                    <div class="col-md-8 col-md-offset-2">

                        <form id="form_conductor" class="form_conductor" method="post" action="./actualizar.php" enctype="multipart/form-data">
                            
                            <!-- id del conductor -->
                            <input type="hidden" id="id_conductor" name="id_conductor" value="<?php echo $row->id_conductor; ?>">
                            
                            <div class="form-group ">
                                <label class="control-label requiredField" for="cedula_conductor">
                                    N&deg; Cedula Identidad
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-credit-card">
                                        </i>
                                    </div>
                                    <input class="form-control" id="cedula_conductor" name="cedula_conductor" type="text" value="<?php echo $row->cedula_conductor; ?>" required/>
                                </div>
                                <span class="help-block" id="hint_cedula_conductor">
                                    Ingrese su numero de cedula
                                </span>
                            </div>
                            <div class="form-group ">
                                <label class="control-label requiredField" for="nombre_conductor">
                                    Nombres
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-street-view">
                                        </i>
                                    </div>
                                    <input class="form-control" id="nombre_conductor" name="nombre_conductor" type="text" value="<?php echo $row->nombre_conductor; ?>"/>
                                </div>
                                <span class="help-block" id="hint_nombre_conductor">
                                    Ingrese su primer y segundo nombre
                                </span>
                            </div>
                            <div class="form-group ">
                                <label class="control-label requiredField" for="apellido_conductor">
                                    Apellidos
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-street-view">
                                        </i>
                                    </div>
                                    <input class="form-control" id="apellido_conductor" name="apellido_conductor" type="text" value="<?php echo $row->apellido_conductor; ?>"/>
                                </div>
                                <span class="help-block" id="hint_apellido_conductor">
                                    Ingrese su primer y segundo apellido
                                </span>
                            </div>
                            <div class="form-group ">
                                <label class="control-label " for="fecha_conductor">
                                    Fecha Certificación
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar">
                                        </i>
                                    </div>
                                    <input class="form-control" id="fecha_conductor" name="fecha_conductor" placeholder="Dia/Mes/Año" type="date" value="<?php echo $row->fecha_conductor; ?>"/>
                                </div>
                            </div>

                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="id_sede_conductor">
                                    Sede
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label>
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-user">
                                    </i>
                                </div>
                                <select class="select form-control" id="id_sede_conductor" name="id_sede_conductor" required>
                                    <option value="<?php echo $row->id_sede_conductor; ?>">
                                        <?php  echo $row->nombre_sede; } ?>
                                    </option>
                                    <option value="">
                                    -----------------
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
                                <span class="help-block" id="hint_id_sede_conductor">
                                    Selecciona la Sede, el cual ser&aacute; asignado el conductor
                                </span>
                            </div>

                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="id_conductor_estado">
                                    Estatus
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label>
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-check">
                                    </i>
                                </div>
                                <select class="select form-control id_conductor_estado" id="id_conductor_estado" name="id_conductor_estado" required>
                                    <option value="">
                                        Seleccione
                                    </option>
                                    <option value="A">
                                        Disponible
                                    </option>
                                    <option value="B">
                                        No Disponible
                                    </option>
                                </select>
                                <!-- select id_conductor_estado_child -->
                                <div id="id_conductor_estado_child" class="form-group form-group-md">
                                </div>
                            </div>

                            <!-- Carga de Documentos: Cedula, Certificado Medico, Licencia -->

                            <!-- Cedula -->
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="foto_cedula">
                                    Foto Digital de la Cedula de Identidad
                                </label>
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-cloud-upload">
                                    </i>
                                <input type="file" name="foto_cedula" id="foto_cedula" class="filestyle" data-input="true" data-buttonBefore="true" data-buttonText="Seleccione el Documento">
                                </div>
                            </div>
                            
                            <!-- Carnet -->
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="foto_carnet">
                                    Foto Digital del Carnet
                                </label>
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-cloud-upload">
                                    </i>
                                <input type="file" name="foto_carnet" id="foto_carnet" class="filestyle" data-input="true" data-buttonBefore="true" data-buttonText="Seleccione el Documento">
                                </div>
                            </div>

                            <!-- Certificado Medico -->
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="foto_certificado_medico">
                                    Foto Digital del Certificado Medico
                                </label>
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-cloud-upload">
                                    </i>
                                <input type="file" name="foto_certificado_medico" id="foto_certificado_medico" class="filestyle" data-input="true" data-buttonBefore="true" data-buttonText="Seleccione el Documento">
                                </div>
                            </div>
                            
                            <!-- Licencia -->
                            <div class="form-group form-group-md">
                                <label class="control-label requiredField" for="foto_licencia">
                                    Foto Digital de la Licencia
                                </label>
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-cloud-upload">
                                    </i>
                                <input type="file" name="foto_licencia" id="foto_licencia" class="filestyle" data-input="true" data-buttonBefore="true" data-buttonText="Seleccione el Documento">
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <input type="submit" id="submit" name="submit" class="btn btn-custom btn-lg btn-block outline" value="Actualizar">
                                </div>
                            </div>
                        </form>
                        <div id="conductor-resultado"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="cerrar2" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
    </div>

    <?php require('../template/footer.php'); ?>