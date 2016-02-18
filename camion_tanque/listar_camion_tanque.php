
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
                                <img src="../img/camion_tanque.png" height="32px" alt="Truck"> Listado de Camiones Tanque
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <?php

                    $camion_tanque = new CamionTanque();
                    $resultado_listado = $camion_tanque->listar_camiontanque();

                    echo "<div class='table-responsive'>";
                        echo "<table class='table table-hover'>";
                            echo "<thead>";
                                echo "<tr>
                                        <th>#</th>
                                        <th>Placa</th>
                                        <th>Placa Nueva</th>
                                        <th>Serial de Carroceria</th>
                                        <th>Serial de Motor</th>
                                        <th>Marca</th>
                                        <th>Tipo</th>
                                        <th>Modelo</th>
                                        <th>Año</th>
                                        <th>Color</th>
                                        <th>Nro. Ejes</th>
                                        <th>1er Compartimiento <small>(lts)</small></th>
                                        <th>2do Compartimiento <small>(lts)</small></th>
                                        <th>3er Compartimiento <small>(lts)</small></th>
                                        <th>Total Compartimientos <small>(lts)</small></th>
                                        <th>Observacion</th>
                                        <th>Fecha Modificacion</th>
                                        <th>Sede</th>
                                        <th>Estatus</th>
                                    </tr>";
                            echo "</thead>";        

                            while($row = mysqli_fetch_array($resultado_listado)) {

                            echo "<tr>";
                            echo "<td>". $row['id_camion_tanque'] . "</td>";
                            echo "<td>". $row['placa_camion_tanque'] . "</td>";
                            echo "<td>". $row['placa_nueva_camion_tanque'] . "</td>";
                            echo "<td>". $row['serial_carroceria_camion_tanque'] . "</td>";
                            echo "<td>". $row['serial_motor_camion_tanque'] . "</td>";
                            echo "<td>". $row['marca_camion_tanque'] . "</td>";
                            echo "<td>". $row['tipo_camion_tanque'] . "</td>";
                            echo "<td>". $row['modelo_camion_tanque'] . "</td>";
                            echo "<td>". $row['a_o_camion_tanque'] . "</td>";
                            echo "<td>". $row['color_camion_tanque'] . "</td>";
                            echo "<td>". $row['nro_ejes_camion_tanque'] . "</td>";
                            echo "<td>". $row['capacidad_1erc_camion_tanque'] . "</td>";
                            echo "<td>". $row['capacidad_2doc_camion_tanque'] . "</td>";
                            echo "<td>". $row['capacidad_3erc_camion_tanque'] . "</td>";
                            echo "<td>". $row['capacidad_totalc_camion_tanque'] . "</td>";
                            echo "<td>". $row['observacion_camion_tanque_estado'] . "</td>";
                            echo "<td>". $row['fecha_camion_tanque_estado'] . "</td>";
                            echo "<td>". $row['nombre_sede'] . "</td>";
                            echo "<td>". $row['camion_tanque_estado'] . "</td>";
                            echo "</tr>";
                            
                            }
                        
                        echo "</table>";
                    echo "</div>";

                ?>
			</div>
    		<!-- /#wrapper -->




	<?php include_once('../template/footer.php'); ?>