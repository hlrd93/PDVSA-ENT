<?php

include_once("../config/init.php");

$resultado_listado = Chuto::buscar_chutos($_POST['buscar']);

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
?>