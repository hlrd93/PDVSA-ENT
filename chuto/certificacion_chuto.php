
<?php include_once('../template/cabecera.php'); ?>

<?php include_once('../template/navegador.php'); ?> 

<?php include_once('../template/sidebar.php'); ?> 

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Chutos <small>Ficha Técnica</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="../inicio/index.php">Inicio</a>
                    </li>
                    <li class="active">
                        <img src="../img/chuto.png" height="18px" alt="Truck"> Ficha Técnica de Chutos
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <script>

            $(document).ready(function () {

                $('#form1').submit(function (e) {

                    e.preventDefault();

                    var placa = $('#placa').val();
                    var serial = $('#serial').val();

                    $.ajax({
                        url: '../chuto/certificacion.php',
                        type: 'POST',
                        data: {
                            placa: placa,
                            serial: serial
                        },
                        success: function (data) {

                            if (!data.error) {
                                $('#resultado1').html(data);
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

                <input type="submit" id="submit1" class="btn btn-info" value="Buscar Chuto">
                <br><br>
                <div class="bg-info" id="resultado1"></div>
                <br><br>
            </form>
        </div>
        <!-- </div> -->
    </div>

    <?php include_once('../template/footer.php'); ?>