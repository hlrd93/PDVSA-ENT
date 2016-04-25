<?php

include_once("../config/init.php");

$resultado_listado = Chuto::buscar_chutos($_POST['placa'], $_POST['serial'], $_POST['sede'], $_POST['estatus'], $_POST['tipo'], $_POST['a_o']);

if ($resultado_listado == true) {


//echo "<div class='table-responsive'>";
    echo "<table class='table table-hover table-condensed'>";
    echo "<thead>";
    echo "<tr>
        <th class='text-center'>Opciones</th>
	    <th class='text-center'>#</th>
	    <th class='text-center'>Placa</th>
	    <th class='text-center'>Placa Nueva</th>
	    <th class='text-center'>Serial de Carroceria</th>
	    <th class='text-center'>Serial de Motor</th>
	    <th class='text-center'>Marca</th>
	    <th class='text-center'>Tipo</th>
	    <th class='text-center'>Modelo</th>
	    <th class='text-center'>Año</th>
	    <th class='text-center'>Color</th>
	    <th class='text-center'>Observacion</th>
	    <th class='text-center'>Fecha Modificacion</th>
	    <th class='text-center'>Sede</th>
	    <th class='text-center'>Estatus</th>
	    </tr>";
    echo "</thead>";

    foreach ($resultado_listado as $row) {
        echo "<tbody>";
        echo "<tr>";
        echo '<td class="text-center">
            <button type="submit" rel=' . $row->id_chuto . ' class="actualizar btn btn-success btn-xs btn-block" data-toggle="modal" data-target="#myModal">Actualizar</button>
        </td>';
        echo '<th class="text-center" scope="row">' . $row->id_chuto . '</th>';
        echo "<td class='text-center'>" . $row->placa_chuto . "</td>";
        echo "<td class='text-center'>" . $row->placa_nueva_chuto . "</td>";
        echo "<td class='text-center'>" . $row->serial_carroceria_chuto . "</td>";
        echo "<td class='text-center'>" . $row->serial_motor_chuto . "</td>";
        echo "<td class='text-center'>" . $row->marca_chuto . "</td>";
        echo "<td class='text-center'>" . $row->tipo_chuto . "</td>";
        echo "<td class='text-center'>" . $row->modelo_chuto . "</td>";
        echo "<td class='text-center'>" . $row->a_o_chuto . "</td>";
        echo '<td class="text-center borde" style="background-color:' . $row->color_chuto_1 . ';"><b>' . $row->nombre_color_chuto . '</b></td>';
        echo "<td class='text-center'>" . $row->observacion_chuto_estado . "</td>";
        echo "<td class='text-center'>" . $row->fecha_chuto_estado . "</td>";
        echo "<td class='text-center'>" . $row->nombre_sede . "</td>";
        echo "<td class='text-center'>" . $row->chuto_estado . "</td>";
        echo "</tr>";
        echo "</tbody>";
    }

    echo "</table>";
    echo "</div>";
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

?>
<script>
    $(document).ready(function() {

        $('.actualizar').on('click', function(e) {
            
            e.preventDefault();
            /* Actualizar */

            var id = $(this).attr("rel");

            $.ajax({
                url: '../chuto/actualizar_chuto.php',
                type: 'POST',
                data: {
                    id: id
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