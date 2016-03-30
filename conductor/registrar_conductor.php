
    <?php include_once('../template/cabecera.php'); ?>

    <?php include_once('../template/navegador.php'); ?> 

    <?php include_once('../template/sidebar.php'); ?>

<div id="page-wrapper">
    
    <div class="container-fluid">
        
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Conductores
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="../inicio/index.php">Inicio</a>
                    </li>
                    <li class="active">
                        <img src="../img/conductor.png" height="18px" alt="Truck"> Registro de Conductor
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <script>
            
            
            $(document).ready(function() {

                var date_input=$('input[name="fecha_conductor"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'dd/mm/yyyy',
                    orientation: 'right',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                });

                $('#conductor-cargando').hide();

                $("#form_conductor").submit(function(e) {
                    
                    e.preventDefault();

                    
                var data = new FormData(this);
                
                $.ajax({
                        url: '../conductor/registrar.php',
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
                        },
                        success: function (data) {

                            if (!data.error) {
                                $('#conductor-cargando').hide();
                                $('#form_conductor').trigger("reset");
                                $('#cedula_conductor').prop('readonly', false);
                                $('#nombre_conductor').prop('readonly', false);
                                $('#apellido_conductor').prop('readonly', false);
                                $('#fecha_conductor').prop('readonly', false);
                                $('#conductor-resultado').html(data);
                            }
                        }
                });
                
                /*    $('#chuto-resultado').html('<h3><small>Manten la Calma y juega Rubik...!</small></h3><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../img/cargando1.gif" height="150"/><img src="../img/cargando2.gif" height="150"/><img src="../img/cargando.gif" height="150"/><img src="../img/cargando4.gif" height="150"/>');
                    
                    var postData = $(this).serialize();
                    var url = $(this).attr("action");
                    
                    $.post(url, postData, function(php_table_data){
                        
                        $("#chuto-resultado").html(php_table_data);                        
                        
                    });
                    
                */
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
                    <div class="col-md-6 col-md-offset-3">
                        <form id="form_conductor" method="post" action="./registrar.php" enctype="multipart/form-data">
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
                                    <input class="form-control" id="cedula_conductor" name="cedula_conductor" type="text" required/>
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
                                    <input class="form-control" id="nombre_conductor" name="nombre_conductor" type="text"/>
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
                                    <input class="form-control" id="apellido_conductor" name="apellido_conductor" type="text"/>
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
                                    <input class="form-control" id="fecha_conductor" name="fecha_conductor" placeholder="Dia/Mes/Año" type="date"/>
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
                                    <input type="submit" id="submit" name="submit" class="btn btn-custom btn-lg btn-block outline" value="Registrar">
                                </div>
                            </div>
                        </form>
                        <div id="conductor-resultado"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <?php include_once('../template/footer.php'); ?>