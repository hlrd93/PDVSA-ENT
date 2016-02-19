
	<?php include_once('../template/cabecera.php'); ?>

	<?php include_once('../template/navegador.php'); ?> 

	<?php include_once('../template/sidebar.php'); ?> 

	<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Camiones Tanque
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="../inicio/index.php">Inicio</a>
                            </li>
                            <li class="active">
                                <img src="../img/camion_tanque.png" height="32px" alt="Truck"> Registro de Camion Tanque
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
                                    <input type="text" id="nombre" name="nombre">
                                    <label class="label" for="nombre">Nombre:</label>
                                </div>
                                <div class="input-group">
                                    <input type="email" id="correo" name="correo">
                                    <label class="label" for="correo">Correo:</label>
                                </div>
                                <div class="input-group">
                                    <input type="password" id="pass" name="pass">
                                    <label class="label" for="pass">Contraseña:</label>
                                </div>
                                <div class="input-group">
                                    <input type="password" id="pass2" name="pass2">
                                    <label class="label" for="pass2">Repetir Contraseña:</label>
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





	<?php include_once('../template/footer.php'); ?>