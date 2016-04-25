<?php

include_once("../config/init.php");

$resultado_listado = Cisterna::buscar_cisternas($_POST['placa'], $_POST['serial'], "", "", "", "");

if ($resultado_listado == true) {

    foreach ($resultado_listado as $row) {
        
echo "<div class='table-responsive'>";
    echo "<table class='table table-hover table-condensed'>";
        echo "<thead>";

        echo "<tr>
                <th class='text-center'>Ficha</th>
                <th class='text-center'>#</th>
                <th class='text-center'>Placa</th>
                <th class='text-center'>Placa Nueva</th>
                <th class='text-center'>Serial de Carroceria</th>
                <th class='text-center'>Marca</th>
                <th class='text-center'>Tipo</th>
            </tr>";
        echo "</thead>";

        echo "<tbody>";
            echo "<tr>";
            echo '<td class="text-center">
                        <a rel=' . $row->id_cisterna . ' href="./reporte.php?id='.$row->id_cisterna.'" class="btn btn-danger btn-xs btn-block" target="_blank">PDF</a></td>';
            echo '<th class="text-center" scope="row">' . $row->id_cisterna . '</th>';
            echo "<td class='text-center'>" . $row->placa_cisterna . "</td>";
            echo "<td class='text-center'>" . $row->placa_nueva_cisterna . "</td>";
            echo "<td class='text-center'>" . $row->serial_carroceria_cisterna . "</td>";
            echo "<td class='text-center'>" . $row->marca_cisterna . "</td>";
            echo "<td class='text-center'>" . $row->tipo_cisterna . "</td>";
            echo "</tr>";
        echo "</tbody>";
        
        echo "<thead>";
        echo "<tr>
                <th class='text-center'>Modelo</th>
                <th class='text-center'>Año</th>
                <th class='text-center'>Color</th>
                <th class='text-center'>Observacion</th>
                <th class='text-center'>Fecha Modificacion</th>
                <th class='text-center'>Sede</th>
                <th class='text-center'>Estatus</th>
            </tr>";
        echo "</thead>";

        echo "<tbody>";
            echo "<tr>";
            echo "<td class='text-center'>" . $row->modelo_cisterna . "</td>";
            echo "<td class='text-center'>" . $row->a_o_cisterna . "</td>";
            echo '<td class="text-center borde" style="background-color:' . $row->color_cisterna_1 . ';"><b>' . $row->nombre_color_cisterna . '</b></td>';
            echo "<td class='text-center'>" . $row->observacion_cisterna_estado . "</td>";
            echo "<td class='text-center'>" . $row->fecha_cisterna_estado . "</td>";
            echo "<td class='text-center'>" . $row->nombre_sede . "</td>";
            echo "<td class='text-center'>" . $row->cisterna_estado . "</td>";
            echo "</tr>";
        echo "</tbody>";

    echo "</table>";
echo "</div>";

        echo "<div class='container-fluid'>";

            echo "<div class='col-md-6'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title'>Foto de la Placa</h3>
                        </div>
                        <div class='panel-body text-center'>
                            <img src='../img/cisterna/placa/" . $row->placa_cisterna . "_placa.png' alt='foto de la placa no ha sido cargada' class='img-responsive img-thumbnail'>
                        </div>
                    </div>
                </div>";

            echo "<div class='col-md-6'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title'>Foto del Serial de Carroceria</h3>
                        </div>
                        <div class='panel-body text-center'>
                            <img src='../img/cisterna/serial_carroceria/" . $row->placa_cisterna . "_" . $row->serial_carroceria_cisterna . "_carroceria.png' alt='foto del serial no ha sido cargada' class='img-responsive img-thumbnail'>
                        </div>
                    </div>
                </div>";

            echo "<div class='col-md-12'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title'>Foto del Titulo</h3>
                        </div>
                        <div class='panel-body'>
                            <div class='embed-responsive embed-responsive-4by3'>
                                <embed src='../img/cisterna/titulo/" . $row->placa_cisterna . "_titulo.pdf' alt='foto del titulo no ha sido cargada' class='embed-responsive-item'>
                                </embed>
                            </div>
                        </div>
                    </div>
                </div>";

            echo "<div class='col-md-12'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title'>Foto del Seguro</h3>
                        </div>
                        <div class='panel-body'>
                            <div class='embed-responsive embed-responsive-4by3'>
                                <embed src='../img/cisterna/seguro/" . $row->placa_cisterna . "_seguro.pdf' height='600' alt='foto del seguro no ha sido cargada' class='embed-responsive-item'>
                                </embed>
                            </div>
                        </div>
                    </div>
                </div>";
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
?>