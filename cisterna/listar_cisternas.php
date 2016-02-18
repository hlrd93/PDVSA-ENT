
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
                                <img src="../img/cisterna.png" height="30px" alt="Truck"> Listado de Cisternas
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <?php

                    $cisterna = new Cisterna();
                    $resultado_listado = $cisterna->listar_cisterna();

                    echo "<div class='table-responsive'>";
                        echo "<table class='table table-hover'>";
                            echo "<thead>";
                                echo "<tr>
                                        <th>#</th>
                                        <th>Placa</th>
                                        <th>Placa Nueva</th>
                                        <th>Serial de Carroceria</th>
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
                            echo "<td>". $row['id_cisterna'] . "</td>";
                            echo "<td>". $row['placa_cisterna'] . "</td>";
                            echo "<td>". $row['placa_nueva_cisterna'] . "</td>";
                            echo "<td>". $row['serial_carroceria_cisterna'] . "</td>";
                            echo "<td>". $row['marca_cisterna'] . "</td>";
                            echo "<td>". $row['tipo_cisterna'] . "</td>";
                            echo "<td>". $row['modelo_cisterna'] . "</td>";
                            echo "<td>". $row['a_o_cisterna'] . "</td>";
                            echo "<td>". $row['color_cisterna'] . "</td>";
                            echo "<td>". $row['nro_ejes_cisterna'] . "</td>";
                            echo "<td>". $row['capacidad_1erc_cisterna'] . "</td>";
                            echo "<td>". $row['capacidad_2doc_cisterna'] . "</td>";
                            echo "<td>". $row['capacidad_3erc_cisterna'] . "</td>";
                            echo "<td>". $row['capacidad_totalc_cisterna'] . "</td>";
                            echo "<td>". $row['observacion_cisterna_estado'] . "</td>";
                            echo "<td>". $row['fecha_cisterna_estado'] . "</td>";
                            echo "<td>". $row['nombre_sede'] . "</td>";
                            echo "<td>". $row['cisterna_estado'] . "</td>";
                            echo "</tr>";
                            
                            }
                        
                        echo "</table>";
                    echo "</div>";

                ?>
			</div>
    		<!-- /#wrapper -->

	<?php include_once('../template/footer.php'); ?>