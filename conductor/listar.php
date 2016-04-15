<?php

include_once("../config/init.php");

$resultado_listado = Conductor::buscar_conductor($_POST['cedula']);

if ($resultado_listado == true) {

    foreach ($resultado_listado as $row) {
echo "<div class='container-fluid'>";
    echo "<div class='table-responsive'>";
        echo "<table class='table table-hover'>";
            echo "<thead>";

            echo "<tr>
                <th class='text-center'>#</th>
                <th class='text-center'>N° Cedula</th>
                <th class='text-center'>Nombres</th>
                <th class='text-center'>Apellidos</th>
                <th class='text-center'>Fecha de Certificación</th>
                <th class='text-center'>Opciones</th>
                </tr>";
            echo "</thead>";
            echo "<tbody>";
                echo "<tr>";
                echo '<th scope="row" class="text-center">' . $row->id_conductor . '</th>';
                echo "<td class='text-center'>" . $row->cedula_conductor . "</td>";
                echo "<td class='text-center'>" . $row->nombre_conductor . "</td>";
                echo "<td class='text-center'>" . $row->apellido_conductor . "</td>";
                echo "<td class='text-center'>" . $row->fecha_conductor . "</td>";
                echo '<td class="text-center">
                            <button type="submit" rel=' . $row->id_conductor . ' class="actualizar btn btn-success btn-xs btn-block" data-toggle="modal" data-target="#myModal">Actualizar</button>
                            <button type="submit" rel=' . $row->id_conductor . ' class="eliminar btn btn-danger btn-xs btn-block">Eliminar</button>
                    </td>';
                echo "</tr>";
            echo "</tbody>";
        echo "</table>";
    echo "</div>";

echo "<div class='row'>";
    echo "<div class='col-md-6'>
            <div class='panel panel-primary'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>Foto de la Cedula</h3>
                </div>
                <div class='panel-body text-center'>
                    <img src='../img/conductor/cedula/" . $row->id_conductor . "_cedula.png' alt='foto de la Cedula no ha sido cargada' class='img-responsive img-thumbnail'>
                </div>
            </div>
        </div>";

    echo "<div class='col-md-6'>
            <div class='panel panel-primary'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>Foto del Carnet</h3>
                </div>
                <div class='panel-body text-center'>
                    <img src='../img/conductor/carnet/" . $row->id_conductor . "_carnet.png' alt='foto del Carnet no ha sido cargada' class='img-responsive img-thumbnail'>
                </div>
            </div>
        </div>";
echo "</div>";
echo "<div class='row'>";
    echo "<div class='col-md-6'>
            <div class='panel panel-primary'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>Foto del Certificado Medico</h3>
                </div>
                <div class='panel-body text-center'>
                    <img src='../img/conductor/certificado_medico/" . $row->id_conductor . "_certificado_medico.png' alt='foto del Certificado Medico no ha sido cargada' class='img-responsive img-thumbnail'>
                </div>
            </div>
        </div>";

    echo "<div class='col-md-6'>
            <div class='panel panel-primary'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>Foto de la Licencia</h3>
                </div>
                <div class='panel-body text-center'>
                    <img src='../img/conductor/licencia/" . $row->id_conductor . "_licencia.png' alt='foto de la Licencia no ha sido cargada' class='img-responsive img-thumbnail'>
                </div>
            </div>
        </div>";
        echo "</div>";
        echo "<hr>";
echo "</div>";
    }
} else {
    echo '<script type="text/javascript">
    swal({
        title: "No Existe!",
        text: "Intenta de nuevo...",
        timer: 900,
        showConfirmButton: false
    });
    </script>';
}
echo '
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                    </div>
                </div>
            </div>
        </div>
';
?>
<script>
    $(document).ready(function() {

        $('.actualizar').on('click', function(e) {
            
            e.preventDefault();
            /* Actualizar */

            var cedula = $(this).attr("rel");

            $.ajax({
                url: '../conductor/actualizar_conductor.php',
                type: 'POST',
                data: {
                    cedula: cedula
                },
                success: function (data) {

                    if (!data.error) {
                        $('.modal-body').html(data);
                    }
                }

            });
        });
    });
</script>