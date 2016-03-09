<?php

include_once("../config/init.php");

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
    echo '<td>
            <div class="btn-group-vertical" role="group">
                <button type="submit" rel=' . $row->id_chuto . ' class="actualizar btn btn-success btn-sm btn-block" data-toggle="modal" data-target="#myModal">Actualizar</button>
                <button type="submit" rel=' . $row->id_chuto . ' class="eliminar btn btn-danger btn-sm btn-block">Eliminar</button>
            </div>
        </td>';
    echo '<th scope="row">' . $row->id_chuto . '</th>';
    echo "<td>" . $row->placa_chuto . "</td>";
    echo "<td>" . $row->placa_nueva_chuto . "</td>";
    echo "<td>" . $row->serial_carroceria_chuto . "</td>";
    echo "<td>" . $row->serial_motor_chuto . "</td>";
    echo "<td>" . $row->marca_chuto . "</td>";
    echo "<td>" . $row->tipo_chuto . "</td>";
    echo "<td>" . $row->modelo_chuto . "</td>";
    echo "<td>" . $row->a_o_chuto . "</td>";
    echo '<td class="borde" style="background-color:' . $row->color_chuto_1 . ';"><b>' . $row->nombre_color_chuto . '</b></td>';
    echo "<td>" . $row->observacion_chuto_estado . "</td>";
    echo "<td>" . $row->fecha_chuto_estado . "</td>";
    echo "<td>" . $row->nombre_sede . "</td>";
    echo "<td>" . $row->chuto_estado . "</td>";
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