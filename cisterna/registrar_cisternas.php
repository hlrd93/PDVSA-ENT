
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
                        <form method="post">
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
                                
                            <div class="form-group">
                                <div>
                                    <button class="btn btn-custom btn-lg btn-block outline" name="submit" type="submit">
                                        Registrar
                                    </button>
                                </div>
                            </div>
                        </form>
                                <?php
                        $cisterna = new Cisterna();

                        if(isset($_POST['submit'])) {

                        $cisterna->placa_cisterna = $_POST['placa_cisterna'];
                        $cisterna->placa_nueva_cisterna = $_POST['placa_nueva_cisterna'];
                        $cisterna->serial_carroceria_cisterna = $_POST['serial_carroceria_cisterna'];
                        $cisterna->marca_cisterna = $_POST['marca_cisterna'];
                        $cisterna->tipo_cisterna = $_POST['tipo_cisterna'];
                        $cisterna->modelo_cisterna = $_POST['modelo_cisterna'];
                        $cisterna->a_o_cisterna = $_POST['a_o_cisterna'];
                        $cisterna->color_cisterna_1 = $_POST['color_cisterna_1'];
                        $cisterna->color_cisterna_2 = $_POST['color_cisterna_2'];
                        $cisterna->nro_ejes_cisterna = $_POST['nro_ejes_cisterna'];
                        $cisterna->capacidad_1erc_cisterna = $_POST['capacidad_1erc_cisterna'];
                        $cisterna->capacidad_2doc_cisterna = $_POST['capacidad_2doc_cisterna'];
                        $cisterna->capacidad_3erc_cisterna = $_POST['capacidad_3erc_cisterna'];
                        $cisterna->capacidad_totalc_cisterna = $_POST['capacidad_totalc_cisterna'];
                        $cisterna->observacion_cisterna_estado = $_POST['observacion_cisterna_estado'];
                        $cisterna->fecha_cisterna_estado = $_POST['fecha_cisterna_estado'];
                        $cisterna->id_sede_cisterna = $_POST['id_sede_cisterna'];
                        $cisterna->id_cisterna_estado = $_POST['id_cisterna_estado'];
                        
                            if($cisterna->registrar_cisterna()==1){
                                echo '<script type="text/javascript">swal("Exito!", "Registrado!", "success");</script>';
                            }
                            else {
                                
                                echo '<script type="text/javascript">sweetAlert("Oops...", "Error!", "error");</script>';
                            }

                        }


                        ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



	<?php include_once('../template/footer.php'); ?>