
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

        <script>

            $(document).ready(function () {

                listar();

                /*setInterval(function(){
                    listar();
                }, 30000);*/

                function listar(){
                    $.ajax({
                        url: '../cisterna/listar.php',
                        type: 'POST',
                        success: function (data) {
                            if (!data.error) {
                                $('#listar').html(data);
                            }
                        }
                    });
                }

                $('#form1').submit(function (e) {

                    e.preventDefault();

                    var placa = $('#placa').val();
                    var serial = $('#serial').val();
                    var sede = "";
                    var estatus = "";
                    var tipo = "";
                    var a_o = "";

                    $.ajax({
                        url: '../cisterna/buscar.php',
                        type: 'POST',
                        data: {
                            placa: placa,
                            serial: serial,
                            sede: sede,
                            estatus: estatus,
                            tipo: tipo,
                            a_o: a_o
                        },
                        success: function (data) {

                            if (!data.error) {
                                $('#resultado1').html(data);
                            }
                        }

                    });


                });

                $('#form2').submit(function (e) {

                    e.preventDefault();

                    var placa = "";
                    var serial = "";
                    var sede = $('#sede').val();
                    var estatus = $('#estatus').val();
                    var tipo = $('#tipo').val();
                    var a_o = $('#a_o').val();

                    $.ajax({
                        url: '../cisterna/buscar.php',
                        type: 'POST',
                        data: {
                            placa: placa,
                            serial: serial,
                            sede: sede,
                            estatus: estatus,
                            tipo: tipo,
                            a_o: a_o
                        },
                        success: function (data) {

                            if (!data.error) {
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
            <form id="form1" class="form-inline" method="post">
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
                </div>
                
                <input type="submit" id="submit1" class="btn btn-info" value="Buscar Cisterna">
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
                            <select class="select form-control" id="sede" name="sede">
                                <option value="">
                                    Seleccione
                                </option>
                                <option value="El Vigia">
                                    El Vigia
                                </option>
                                <option value="La Fria">
                                    La Fria
                                </option>
                                <option value="San Cristobal">
                                    San Cristobal
                                </option>
                            </select>
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
                            <select class="select form-control" id="estatus" name="estatus">
                                <option value="">
                                    Seleccione
                                </option>
                                <option value="Activo">
                                    Activo
                                </option>
                                <option value="Estacionamiento">
                                    Estacionamiento
                                </option>
                                <option value="Fiscalia">
                                    Fiscalia
                                </option>
                                <option value="A Desincorporar">
                                    A Desincorporar
                                </option>
                                <option value="Desincorporado">
                                    Desincorporado
                                </option>
                                <option value="Vaccum">
                                    Vaccum
                                </option>
                            </select>
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
                <input type="submit" id="submit2" class="btn btn-info" value="Buscar Cisternas">
                <br><br>
                <div class="table-responsive bg-success" id="resultado2"></div>
                <br><br>
            </form>
        </div>
        <!-- </div> -->
        
        <div class="row" id="listar"></div>
        
    </div>

        <?php include_once('../template/footer.php'); ?>