    
	<?php include_once('../template/cabecera.php'); ?>

	<?php include_once('../template/navegador.php'); ?> 

	<?php include_once('../template/sidebar.php'); ?>

<div id="page-wrapper">
    
    <div class="container-fluid">
        
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Chutos
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="../inicio/index.php">Inicio</a>
                    </li>
                    <li class="active">
                        <img src="../img/chuto.png" height="18px" alt="Truck"> Registro de Chuto
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
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post">
                            <div class="form-group form-group-sm">
                                <label class="control-label requiredField" for="placa_chuto">
                                    Placa Chuto
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-truck">
                                        </i>
                                    </div>
                                    <input class="form-control" id="placa_chuto" name="placa_chuto" type="text"/>
                                </div>
                                <span class="help-block" id="hint_placa_chuto">
                                    Ingrese Placa de Chuto
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label " for="placa_nueva_chuto">
                                    Placa Nueva
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-bookmark-o">
                                        </i>
                                    </div>
                                    <input class="form-control" id="placa_nueva_chuto" name="placa_nueva_chuto" type="text"/>
                                </div>
                                <span class="help-block" id="hint_placa_nueva_chuto">
                                    Ingrese Placa Nueva (si posee)
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label requiredField" for="serial_carroceria_chuto">
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
                                    <input class="form-control" id="serial_carroceria_chuto" name="serial_carroceria_chuto" type="text"/>
                                </div>
                                <span class="help-block" id="hint_serial_carroceria_chuto">
                                    Ingrese el Serial de la Carroceria
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label requiredField" for="serial_motor_chuto">
                                    Serial del Motor
                                    <span class="asteriskField">
                                        *
                                    </span>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-barcode">
                                        </i>
                                    </div>
                                    <input class="form-control" id="serial_motor_chuto" name="serial_motor_chuto" type="text"/>
                                </div>
                                <span class="help-block" id="hint_serial_motor_chuto">
                                    Ingrese el Serial del Motor
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label " for="marca_chuto">
                                    Marca
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-tags">
                                        </i>
                                    </div>
                                    <input class="form-control" id="marca_chuto" name="marca_chuto" placeholder="ejemplo: Sinotruk, Freightliner, Mack, Chevrolet...." type="text"/>
                                </div>
                                <span class="help-block" id="hint_marca_chuto">
                                    Ingrese la Marca del Chuto
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label " for="tipo_chuto">
                                    Tipo de Chuto
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-gg">
                                        </i>
                                    </div>
                                    <input class="form-control" id="tipo_chuto" name="tipo_chuto" placeholder="ejemplo: 420, Ocupado, Convenio, 380...." type="text"/>
                                </div>
                                <span class="help-block" id="hint_tipo_chuto">
                                    Ingrese el Tipo del Chuto
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label " for="modelo_chuto">
                                    Modelo del Chuto
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-gg-circle">
                                        </i>
                                    </div>
                                    <input class="form-control" id="modelo_chuto" name="modelo_chuto" placeholder="ejemplo: HOWO/A7, Tracto-Camion...." type="text"/>
                                </div>
                                <span class="help-block" id="hint_modelo_chuto">
                                    Ingrese el Modelo del Chuto
                                </span>
                            </div>
                            <div class="form-group form-group-sm">
                                <label class="control-label " for="a_o_chuto">
                                    A&ntilde;o de Origen
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar-o">
                                        </i>
                                    </div>
                                    <input class="form-control" id="a_o_chuto" name="a_o_chuto" placeholder="ejemplo: 1993, 2009, 2015...." type="text"/>
                                </div>
                                <span class="help-block" id="hint_a_o_chuto">
                                    Ingrese el A&ntilde;o de Origen
                                </span>
                            </div>
                                
                            <div class="form-group form-group-sm">
                                <label class="control-label " for="color_chuto">
                                    Color
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-paint-brush">
                                        </i>
                                    </div>
                                    <input class="form-control" id="color_chuto_1" name="color_chuto_1" type="color"/>
                                    <input class="form-control" id="color_chuto_2" name="color_chuto_2" type="color"/>
                                </div>
                                <span class="help-block" id="hint_color_chuto">
                                    Ingrese el Color del Chuto
                                </span>
                            </div>
                                
                            <div class="form-group form-group-sm">
                                <label class="control-label " for="observacion_chuto_estado">
                                    Observacion del Chuto
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-eye">
                                        </i>
                                    </div>
                                    <textarea class="form-control" id="observacion_chuto_estado" name="observacion_chuto_estado" placeholder="ejemplo: Se encuentra Activo, Ya fue reparado...." maxlength="200"></textarea>
                                </div>
                                <span class="help-block" id="hint_observacion_chuto_estado">
                                    Ingrese la Observacion respectiva del Chuto
                                </span>
                            </div>
                                
                            <div class="form-group col-lg-8">
                                <label class="control-label " for="fecha_chuto_estado">
                                    Fecha de Registro
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar">
                                        </i>
                                    </div>
                                    <input class="form-control" id="fecha_chuto_estado" name="fecha_chuto_estado" type="date" readonly value='<?php
                                      $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                                      $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                    echo $dias[date('w')].", ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y');?>'/>
                                </div>
                                <span class="help-block" id="hint_fecha_chuto_estado">
                                    Fecha de Registro del Chuto
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
                    </div>
                </div>
            </div>
        </div>
    </div>
        
	<?php include_once('../template/footer.php'); ?>