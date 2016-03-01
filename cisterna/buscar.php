<?php

include_once("../config/init.php");

$resultado_listado = Cisterna::buscar_cisternas($_POST['placa'], $_POST['serial'], $_POST['sede'], $_POST['estatus'], $_POST['tipo'], $_POST['a_o']);

if ($resultado_listado == true) {


//echo "<div class='table-responsive'>";
    echo "<table class='table table-hover'>";
    echo "<thead>";
    echo "<tr>
            <th>#</th>
            <th>Placa</th>
            <th>Placa Nueva</th>
            <th>Serial de Carroceria</th>
            <th>Marca</th>
            <th>Tipo</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Color 1</th>
            <th>Color 2</th>
            <th>Nro. Ejes</th>
            <th>1er Compartimiento <small>(lts)</small></th>
            <th>2do Compartimiento <small>(lts)</small></th>
            <th>3er Compartimiento <small>(lts)</small></th>
            <th>Total Compartimientos <small>(lts)</small></th>
            <th>Observacion</th>
            <th>Fecha Modificacion</th>
            <th>Sede</th>
            <th>Estatus</th>
        </tr>";
    echo "</thead>";

    foreach ($resultado_listado as $row) {
            echo "<tbody>";
            echo "<tr>";
            echo '<th scope="row">' . $row->id_cisterna . '</th>';
            echo "<td>" . $row->placa_cisterna . "</td>";
            echo "<td>" . $row->placa_nueva_cisterna . "</td>";
            echo "<td>" . $row->serial_carroceria_cisterna . "</td>";
            echo "<td>" . $row->marca_cisterna . "</td>";
            echo "<td>" . $row->tipo_cisterna . "</td>";
            echo "<td>" . $row->modelo_cisterna . "</td>";
            echo "<td>" . $row->a_o_cisterna . "</td>";
            echo '<td class="borde" style="background-color:' . $row->color_cisterna_1 . ';"><b>' . $row->nombre_color_cisterna . '</b></td>';
            echo '<td class="borde" style="background-color:' . $row->color_cisterna_2 . ';"><b>' . $row->nombre_color_cisterna . '</b></td>';
            echo "<td>" . $row->nro_ejes_cisterna . "</td>";
            echo "<td>" . $row->capacidad_1erc_cisterna . "</td>";
            echo "<td>" . $row->capacidad_2doc_cisterna . "</td>";
            echo "<td>" . $row->capacidad_3erc_cisterna . "</td>";
            echo "<td>" . $row->capacidad_totalc_cisterna . "</td>";
            echo "<td>" . $row->observacion_cisterna_estado . "</td>";
            echo "<td>" . $row->fecha_cisterna_estado . "</td>";
            echo "<td>" . $row->nombre_sede . "</td>";
            echo "<td>" . $row->cisterna_estado . "</td>";
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