<?php

include_once("../config/init.php");

$resultado_listado = Cisterna::buscar_cisternas("","","","","","");

echo "<div class='table-responsive'>";
echo "<table class='table table-hover table-condensed'>";
echo "<thead>";
echo "<tr>
        <th class='text-center'>Actualizar</th>
        <th class='text-center'>#</th>
        <th class='text-center'>Placa</th>
        <th class='text-center'>Placa Nueva</th>
        <th class='text-center'>Serial de Carroceria</th>
        <th class='text-center'>Marca</th>
        <th class='text-center'>Tipo</th>
        <th class='text-center'>Modelo</th>
        <th class='text-center'>Año</th>
        <th class='text-center'>Color 1</th>
        <th class='text-center'>Color 2</th>
        <th class='text-center'>Nro. Ejes</th>
        <th class='text-center'>1er Compartimiento <small>(lts)</small></th>
        <th class='text-center'>2do Compartimiento <small>(lts)</small></th>
        <th class='text-center'>3er Compartimiento <small>(lts)</small></th>
        <th class='text-center'>Total Compartimientos <small>(lts)</small></th>
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
            <button type="submit" rel=' . $row->id_cisterna . ' class="actualizar btn btn-success btn-xs btn-block" data-toggle="modal" data-target="#myModal">Actualizar</button>
        </td>';
    echo '<th scope="row" class="text-center">' . $row->id_cisterna . '</th>';
    echo "<td class='text-center'>" . $row->placa_cisterna . "</td>";
    echo "<td class='text-center'>" . $row->placa_nueva_cisterna . "</td>";
    echo "<td class='text-center'>" . $row->serial_carroceria_cisterna . "</td>";
    echo "<td class='text-center'>" . $row->marca_cisterna . "</td>";
    echo "<td class='text-center'>" . $row->tipo_cisterna . "</td>";
    echo "<td class='text-center'>" . $row->modelo_cisterna . "</td>";
    echo "<td class='text-center'>" . $row->a_o_cisterna . "</td>";
    echo '<td class="borde text-center" style="background-color:' . $row->color_cisterna_1 . ';"><b>' . $row->nombre_color_cisterna . '</b></td>';
    echo '<td class="borde text-center" style="background-color:' . $row->color_cisterna_2 . ';"><b>' . $row->nombre_color_cisterna . '</b></td>';
    echo "<td class='text-center'>" . $row->nro_ejes_cisterna . "</td>";
    echo "<td class='text-center'>" . $row->capacidad_1erc_cisterna . "</td>";
    echo "<td class='text-center'>" . $row->capacidad_2doc_cisterna . "</td>";
    echo "<td class='text-center'>" . $row->capacidad_3erc_cisterna . "</td>";
    echo "<td class='text-center'>" . $row->capacidad_totalc_cisterna . "</td>";
    echo "<td class='text-center'>" . $row->observacion_cisterna_estado . "</td>";
    echo "<td class='text-center'>" . $row->fecha_cisterna_estado . "</td>";
    echo "<td class='text-center'>" . $row->nombre_sede . "</td>";
    echo "<td class='text-center'>" . $row->cisterna_estado . "</td>";
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
                url: '../cisterna/actualizar_cisterna.php',
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