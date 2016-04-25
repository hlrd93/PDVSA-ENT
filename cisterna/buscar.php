<?php

include_once("../config/init.php");

$resultado_listado = Cisterna::buscar_cisternas($_POST['placa'], $_POST['serial'], $_POST['sede'], $_POST['estatus'], $_POST['tipo'], $_POST['a_o']);

if ($resultado_listado == true) {


//echo "<div class='table-responsive'>";
    echo "<table class='table table-hover table-condensed'>";
    echo "<thead>";
    echo "<tr>
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
            echo '<th class="text-center" scope="row">' . $row->id_cisterna . '</th>';
            echo "<td class='text-center'>" . $row->placa_cisterna . "</td>";
            echo "<td class='text-center'>" . $row->placa_nueva_cisterna . "</td>";
            echo "<td class='text-center'>" . $row->serial_carroceria_cisterna . "</td>";
            echo "<td class='text-center'>" . $row->marca_cisterna . "</td>";
            echo "<td class='text-center'>" . $row->tipo_cisterna . "</td>";
            echo "<td class='text-center'>" . $row->modelo_cisterna . "</td>";
            echo "<td class='text-center'>" . $row->a_o_cisterna . "</td>";
            echo '<td class="text-center borde" style="background-color:' . $row->color_cisterna_1 . ';"><b>' . $row->nombre_color_cisterna . '</b></td>';
            echo '<td class="text-center borde" style="background-color:' . $row->color_cisterna_2 . ';"><b>' . $row->nombre_color_cisterna . '</b></td>';
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