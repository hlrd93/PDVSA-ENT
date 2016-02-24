    
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


        <script>
                    
            $(document).ready(function() {

                $('#buscar').keyup(function() {
                    
                    var buscar = $('#buscar').val();
                    
                    $.ajax({
                        url: '../chuto/buscar.php',
                        type: 'POST',
                        data: {buscar: buscar},
                        success:function(data){

                            if(!data.error) {
                                $('#resultado').html(data);
                            }
                        }

                    });
                    

                });
                        
            });
                        

        </script>
        <div class="col-md-6 col-md-offset-3">
            <form method="post">
                <div class="form-group form-group-sm">
                    <div class="row container">
                        <div class="input-group">
                            <input class="form-control" name="buscar" id="buscar" type="text">
                            <hr>
                            <br>
                            <h2 class="bg-success" id="resultado"></h2>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <?php
        
        $resultado_listado = Chuto::listar_chutos();

        
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

        foreach ($resultado_listado as $row) {
            echo "<tbody>";
            echo "<tr>";
            echo '<th scope="row">' . $row->id_chuto . '</th>';
            echo "<td>" . $row->placa_chuto . "</td>";
            echo "<td>" . $row->placa_nueva_chuto . "</td>";
            echo "<td>" . $row->serial_carroceria_chuto . "</td>";
            echo "<td>" . $row->serial_motor_chuto . "</td>";
            echo "<td>" . $row->marca_chuto . "</td>";
            echo "<td>" . $row->tipo_chuto . "</td>";
            echo "<td>" . $row->modelo_chuto . "</td>";
            echo "<td>" . $row->a_o_chuto . "</td>";
            echo '<td class="borde" style="background-color:'.$row->color_chuto_1.';"><b>'. $row->nombre_color_chuto .'</b></td>';
            echo "<td>" . $row->observacion_chuto_estado . "</td>";
            echo "<td>" . $row->fecha_chuto_estado . "</td>";
            echo "<td>" . $row->nombre_sede . "</td>";
            echo "<td>" . $row->chuto_estado . "</td>";
            echo "</tr>";
            echo "</tbody>";
        }

        echo "</table>";
        echo "</div>";
        
        ?>
    </div>
        
    <?php include_once('../template/footer.php'); ?>