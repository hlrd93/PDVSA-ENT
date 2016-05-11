<?php

include_once("../config/init.php");

$resultado_listado = Chuto::buscar_chutos($_POST['placa'], $_POST['serial'], "", "", "", "");

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
            <th class='text-center'>Serial de Motor</th>
            <th class='text-center'>Marca</th>
            <th class='text-center'>Tipo</th>
            </tr>";
        echo "</thead>";

        echo "<tbody>";
            echo "<tr>";
             echo '<td class="text-center">
                        <a rel=' . $row->id_chuto . ' href="./reporte.php?id='.$row->id_chuto.'" class="btn btn-danger btn-xs btn-block" target="_blank">PDF</a>
                </td>';
            echo '<th class="text-center" scope="row">' . $row->id_chuto . '</th>';
            echo "<td class='text-center'>" . $row->placa_chuto . "</td>";
            echo "<td class='text-center'>" . $row->placa_nueva_chuto . "</td>";
            echo "<td class='text-center'>" . $row->serial_carroceria_chuto . "</td>";
            echo "<td class='text-center'>" . $row->serial_motor_chuto . "</td>";
            echo "<td class='text-center'>" . $row->marca_chuto . "</td>";
            echo "<td class='text-center'>" . $row->tipo_chuto . "</td>";
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
            echo "<td class='text-center'>" . $row->modelo_chuto . "</td>";
            echo "<td class='text-center'>" . $row->a_o_chuto . "</td>";
            echo '<td class="text-center borde" style="background-color:' . $row->color_chuto_1 . ';"><b>' . $row->nombre_color_chuto . '</b></td>';
            echo "<td class='text-center'>" . $row->observacion_chuto_estado . "</td>";
            echo "<td class='text-center'>" . $row->fecha_chuto_estado . "</td>";
            echo "<td class='text-center'>" . $row->nombre_sede . "</td>";
            echo "<td class='text-center'>" . $row->chuto_estado . "</td>";
            echo "</tr>";
        echo "</tbody>";

    echo "</table>";
echo "</div>";

        echo "<div class='container-fluid'>";

        if(file_exists("../img/chuto/placa/" . $row->id_chuto . "_placa.png")) {
            echo "<div class='col-md-6'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title'>Foto de la Placa</h3>
                        </div>
                        <div class='panel-body text-center'>
                            <img src='../img/chuto/placa/" . $row->id_chuto . "_placa.png' alt='foto de la placa no ha sido cargada' class='img-responsive img-thumbnail'>
                        </div>
                    </div>
                </div>";
        }
        if(file_exists("../img/chuto/serial_carroceria/" . $row->id_chuto . "_serial_carroceria.png")) {
            echo "<div class='col-md-6'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title'>Foto del Serial de Carroceria</h3>
                        </div>
                        <div class='panel-body text-center'>
                            <img src='../img/chuto/serial_carroceria/" . $row->id_chuto . "_serial_carroceria.png' alt='foto del serial no ha sido cargada' class='img-responsive img-thumbnail'>
                        </div>
                    </div>
                </div>";
        }
        if(file_exists("../img/chuto/serial_motor/" . $row->id_chuto . "_serial_motor.png")) {
            echo "<div class='col-md-6'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title'>Foto del Serial de Motor</h3>
                        </div>
                        <div class='panel-body text-center'>
                            <img src='../img/chuto/serial_motor/" . $row->id_chuto . "_serial_motor.png' alt='foto del serial no ha sido cargada' class='img-responsive img-thumbnail'>
                        </div>
                    </div>
                </div>";
        }
        if(file_exists("../img/chuto/titulo/" . $row->id_chuto . "_titulo.pdf")) {
            echo "<div class='col-md-12'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title'>Foto del Titulo</h3>
                        </div>
                        <div class='panel-body'>
                            <div class='embed-responsive embed-responsive-4by3'>
                                <embed src='../img/chuto/titulo/" . $row->id_chuto . "_titulo.pdf' alt='foto del titulo no ha sido cargada' class='embed-responsive-item'>
                                </embed>
                            </div>
                        </div>
                    </div>
                </div>";
        }
        if(file_exists("../img/chuto/seguro/" . $row->id_chuto . "_seguro.pdf")) {
            echo "<div class='col-md-12'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title'>Foto del Seguro</h3>
                        </div>
                        <div class='panel-body'>
                            <div class='embed-responsive embed-responsive-4by3'>
                                <embed src='../img/chuto/seguro/" . $row->id_chuto . "_seguro.pdf' height='600' alt='foto del seguro no ha sido cargada' class='embed-responsive-item'>
                                </embed>
                            </div>
                        </div>
                    </div>
                </div>";
        }
        echo "</div>";
    }

    echo "<div class='pdf'></div>";

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