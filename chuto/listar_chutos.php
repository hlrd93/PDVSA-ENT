    
	<?php include_once('../template/cabecera.php'); ?>

	<?php include_once('../template/navegador.php'); ?> 

	<?php include_once('../template/sidebar.php'); ?> 

<div id="page-wrapper">
    
    <div class="container-fluid">
        
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Chutos <small>Estado Actual</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="../inicio/index.php">Inicio</a>
                    </li>
                    <li class="active">
                        <img src="../img/chuto.png" height="18px" alt="Truck"> Listado de Chutos
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <?php
                    
                    $chuto = new Chuto();
        $resultado_listado = $chuto->listar_chutos();

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
                                        <th>Observacion</th>
                                        <th>Fecha Modificacion</th>
                                        <th>Sede</th>
                                        <th>Estatus</th>
                                    </tr>";
        echo "</thead>";

        while ($row = mysqli_fetch_array($resultado_listado)) {

            echo "<tr>";
            echo "<td>" . $row['id_chuto'] . "</td>";
            echo "<td>" . $row['placa_chuto'] . "</td>";
            echo "<td>" . $row['placa_nueva_chuto'] . "</td>";
            echo "<td>" . $row['serial_carroceria_chuto'] . "</td>";
            echo "<td>" . $row['serial_motor_chuto'] . "</td>";
            echo "<td>" . $row['marca_chuto'] . "</td>";
            echo "<td>" . $row['tipo_chuto'] . "</td>";
            echo "<td>" . $row['modelo_chuto'] . "</td>";
            echo "<td>" . $row['a_o_chuto'] . "</td>";
            echo "<td>" . $row['color_chuto'] . "</td>";
            echo "<td>" . $row['observacion_chuto_estado'] . "</td>";
            echo "<td>" . $row['fecha_chuto_estado'] . "</td>";
            echo "<td>" . $row['nombre_sede'] . "</td>";
            echo "<td>" . $row['chuto_estado'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "</div>";
        ?>
    </div>
        
	<?php include_once('../template/footer.php'); ?>