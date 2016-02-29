
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

                $('#form1').submit(function(e) {

                    e.preventDefault();
                    
                    var placa = $('#placa').val();
                    var serial = $('#serial').val();
                    var sede = $('#sede').val();
                    var estatus = $('#estatus').val();
                    var tipo = $('#tipo').val();
                    var a_o = $('#a_o').val();

                    $.ajax({
                        url: '../chuto/buscar.php',
                        type: 'POST',
                        data: {
                                placa: placa,
                                serial: serial,
                                sede: sede,
                                estatus: estatus,
                                tipo: tipo,
                                a_o: a_o
                                },
                        
                        success:function(data){

                            if(!data.error) {
                                $('#resultado1').html(data);
                            }
                        }

                    });
                    

                });

                $('#form2').submit(function(e) {

                    e.preventDefault();

                    var placa = $('#placa').val();
                    var serial = $('#serial').val();
                    var sede = $('#sede').val();
                    var estatus = $('#estatus').val();
                    var tipo = $('#tipo').val();
                    var a_o = $('#a_o').val();

                    $.ajax({
                        url: '../chuto/buscar.php',
                        type: 'POST',
                        data: {
                                placa: placa,
                                serial: serial,
                                sede: sede,
                                estatus: estatus,
                                tipo: tipo,
                                a_o: a_o
                                },
                        
                        success:function(data){

                            if(!data.error) {
                                $('#resultado2').html(data);
                            }
                        }

                    });
                    

                });
                        
            });
        </script>
        
        <h3>Buscar por <small>Placa o Seriales de Motor o Carroceria</small></h3>
        <hr>
        <!-- Placas y Seriales -->
        <div class="row">
            <!-- <div class="col-md-6 col-md-offset-3"> -->
            <form id="form1" class="form-inline" method="post">
                <!-- <div class="form-group form-group-xs"> -->
                <div class="span6">
                    
                    <div class="form-group form-group-sm-4">
                        <label class="control-label requiredField" for="Placa">
                            <span class="asteriskField">
                                *
                            </span>
                        </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-search">
                                </i>
                            </div>
                            <input class="form-control" name="placa" id="placa" class="buscar" type="text">
                        </div>
                        <span class="help-block" id="hint_placa">
                            Buscar por Placas...
                        </span>
                    </div>
                        
                    <div class="form-group form-group-sm-4">
                        <label class="control-label requiredField" for="Serial">
                            <span class="asteriskField">
                                *
                            </span>
                        </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-search">
                                </i>
                            </div>
                            <input class="form-control" name="serial" id="serial" class="buscar" type="text">
                        </div>
                        <span class="help-block" id="hint_serial">
                            Buscar por Seriales...
                        </span>
                    </div>
                        
                    <div>
                        
                    </div>
                </div>
                <input type="submit" id="submit1" class="btn btn-info" value="Buscar Chuto">
                <br><br>
                <div class="table-responsive bg-success" id="resultado1"></div>
                <br><br>
            </form>
        </div>
        <!-- </div> -->
        <h3>Buscar por <small>Sede, Estatus, Tipo o Año</small></h3>
        <hr>
        <!-- Sede Estatus Tipo Año -->
        <div class="row">
            <!-- <div class="col-md-6 col-md-offset-3"> -->
            <form id="form2" class="form-inline" method="post">
                <!-- <div class="form-group form-group-xs"> -->
                <div class="span6">    
                    <div class="form-group form-group-sm-4">
                        <label class="control-label requiredField" for="Sede">
                            <span class="asteriskField">
                                *
                            </span>
                        </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-search">
                                </i>
                            </div>
                            <input class="form-control" name="sede" id="sede" class="buscar" type="text">
                        </div>
                        <span class="help-block" id="hint_sede">
                            Buscar por Sede...
                        </span>
                    </div>
                        
                    <div class="form-group form-group-sm-4">
                        <label class="control-label requiredField" for="Estatus">
                            <span class="asteriskField">
                                *
                            </span>
                        </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-search">
                                </i>
                            </div>
                            <input class="form-control" name="estatus" id="estatus" class="buscar" type="text">
                        </div>
                        <span class="help-block" id="hint_estatus">
                            Buscar por Estatus...
                        </span>
                    </div>
                        
                    <div class="form-group form-group-sm-4">
                        <label class="control-label requiredField" for="Tipo">
                            <span class="asteriskField">
                                *
                            </span>
                        </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-search">
                                </i>
                            </div>
                            <input class="form-control" name="tipo" id="tipo" class="buscar" type="text">
                        </div>
                        <span class="help-block" id="hint_tipo">
                            Buscar por Tipo...
                        </span>
                    </div>
                        
                    <div class="form-group form-group-sm-4">
                        <label class="control-label requiredField" for="A_o">
                            <span class="asteriskField">
                                *
                            </span>
                        </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-search">
                                </i>
                            </div>
                            <input class="form-control" name="a_o" id="a_o" class="buscar" type="text">
                        </div>
                        <span class="help-block" id="hint_a_o">
                            Buscar por Año...
                        </span>
                    </div>
                </div>
                <input type="submit" id="submit2" class="btn btn-info" value="Buscar Chutos">
                <br><br>
                <div class="table-responsive bg-success" id="resultado2"></div>
                <br><br>
            </form>
        </div>
        <!-- </div> -->

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