
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