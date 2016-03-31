
<?php include_once('../template/cabecera.php'); ?>

<?php include_once('../template/navegador.php'); ?> 

<?php include_once('../template/sidebar.php'); ?> 

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Conductor <small>Ficha Técnica</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="../inicio/index.php">Inicio</a>
                    </li>
                    <li class="active">
                        <img src="../img/conductor.png" height="18px" alt="Conductor"> Ficha Técnica de Conductor
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <script>

            $(document).ready(function () {

                $('#form_conductor').submit(function (e) {

                    e.preventDefault();

                    var cedula = $('#cedula').val();

                    $.ajax({
                        url: '../conductor/listar.php',
                        type: 'POST',
                        data: {
                            cedula: cedula
                        },
                        success: function (data) {

                            if (!data.error) {
                                $('#resultado').html(data);
                            }
                        }

                    });
                });

            });
        </script>

        <h3>Buscar por <small>Cedula de Identidad</small></h3>
        <hr>
        <!-- Cedula de Identidad -->
        <div class="row">
            <form id="form_conductor" class="form-inline" method="post">
                <div class="span6">

                    <div class="form-group form-group-sm-4">
                        <label class="control-label requiredField" for="cedula">
                            <span class="asteriskField">
                                *
                            </span>
                        </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-search">
                                </i>
                            </div>
                            <input class="form-control" name="cedula" id="cedula" class="buscar" type="text">
                        </div>
                        <span class="help-block" id="hint_cedula">
                            Buscar por Cedula...
                        </span>
                    </div>
                </div>

                <input type="submit" id="submit" class="btn btn-info" value="Buscar Conductor">
            </form>
                <br><br>
                <div class="bg-info" id="resultado"></div>
                <br><br>
        </div>
        <!-- </div> -->
    </div>

    <?php include_once('../template/footer.php'); ?>