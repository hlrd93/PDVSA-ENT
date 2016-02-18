placa
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
                <div class="contenedor-formulario">
                    <div class="wrap">
                        <form action="" class="formulario" name="formulario_registro" method="get">
                            <div>
                                <div class="input-group">
                                    <input type="text" id="placa" name="placa">
                                    <label class="label" for="placa">placa:</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="placa_nueva_chuto" name="placa_nueva_chuto">
                                    <label class="label" for="placa_nueva_chuto">placa_nueva_chuto:</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="serial_carroceria_chuto" name="serial_carroceria_chuto">
                                    <label class="label" for="serial_carroceria_chuto">serial_carroceria_chuto:</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="serial_motor_chuto" name="serial_motor_chuto">
                                    <label class="label" for="serial_motor_chuto">serial_motor_chuto:</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="marca_chuto" name="marca_chuto">
                                    <label class="label" for="marca_chuto">marca_chuto:</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="tipo_chuto" name="tipo_chuto">
                                    <label class="label" for="tipo_chuto">tipo_chuto:</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="modelo_chuto" name="modelo_chuto">
                                    <label class="label" for="modelo_chuto">modelo_chuto:</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="a_o_chuto" name="a_o_chuto">
                                    <label class="label" for="a_o_chuto">a_o_chuto:</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="color_chuto" name="color_chuto">
                                    <label class="label" for="color_chuto">color_chuto:</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="observacion_chuto_estado" name="observacion_chuto_estado">
                                    <label class="label" for="observacion_chuto_estado">observacion_chuto_estado:</label>
                                </div>
                                <div class="form-control input-lg">
                                    <input type="date" id="fecha_chuto_estado" name="fecha_chuto_estado">
                                    <label class="label" for="fecha_chuto_estado">fecha_chuto_estado:</label>
                                </div>
                                <div class="input-group radio">
                                    <input type="radio" name="sexo" id="hombre" value="Hombre">
                                    <label for="hombre">Hombre</label>
                                    <input type="radio" name="sexo" id="mujer" value="Mujer">
                                    <label for="mujer">Mujer</label>
                                </div>
                                <div class="input-group checkbox">
                
                                    <input type="checkbox" name="terminos" id="terminos" value="true">
                                    <label for="terminos">Acepto los Terminos y Condiciones</label>
                                </div>
                                    
                                <input type="submit" class="btn btn-primary btn-lg" value="Registrar">
                            </div>
                        </form>
                    </div>
                </div>
			</div>
    		<!-- /#wrapper -->

	<?php include_once('../template/footer.php'); ?>