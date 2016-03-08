<?php

include_once("../config/init.php");

$resultado_listado = Cisterna::buscar_cisternas($_POST['placa'], $_POST['serial'], "", "", "", "");

if ($resultado_listado == true) {

    foreach ($resultado_listado as $row) {
        
echo "<div class='table-responsive'>";
    echo "<table class='table table-hover'>";
        echo "<thead>";

        echo "<tr>
            <th>#</th>
            <th>Placa</th>
            <th>Placa Nueva</th>
            <th>Serial de Carroceria</th>
            <th>Marca</th>
            <th>Tipo</th>
            </tr>";
        echo "</thead>";

        echo "<tbody>";
            echo "<tr>";
            echo '<th scope="row">' . $row->id_cisterna . '</th>';
            echo "<td>" . $row->placa_cisterna . "</td>";
            echo "<td>" . $row->placa_nueva_cisterna . "</td>";
            echo "<td>" . $row->serial_carroceria_cisterna . "</td>";
            echo "<td>" . $row->marca_cisterna . "</td>";
            echo "<td>" . $row->tipo_cisterna . "</td>";
            echo "</tr>";
        echo "</tbody>";
        
        echo "<thead>";
        echo "<tr>
            <th>Modelo</th>
            <th>Año</th>
            <th>Color</th>
            <th>Observacion</th>
            <th>Fecha Modificacion</th>
            <th>Sede</th>
            <th>Estatus</th>
            </tr>";
        echo "</thead>";

        echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $row->modelo_cisterna . "</td>";
            echo "<td>" . $row->a_o_cisterna . "</td>";
            echo '<td class="borde" style="background-color:' . $row->color_cisterna_1 . ';"><b>' . $row->nombre_color_cisterna . '</b></td>';
            echo "<td>" . $row->observacion_cisterna_estado . "</td>";
            echo "<td>" . $row->fecha_cisterna_estado . "</td>";
            echo "<td>" . $row->nombre_sede . "</td>";
            echo "<td>" . $row->cisterna_estado . "</td>";
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