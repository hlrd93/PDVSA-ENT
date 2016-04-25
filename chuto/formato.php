<style>
    .text-center {
        text-align: center;
    }
    .table {
        border: solid 1px #D51C28;
    }
    th, td {
        border: solid 1px #D51C28;
        padding: 4px;
    }
</style>
<page style="font-size: 12pt">
    <?php

echo '<table style="border: solid 1px #D51C28">';
echo '  <tr>';
echo '      <td>';
echo '          <img src="../img/cintillo.jpg" alt="Logo" width=740 />';
echo '          <h4 class="text-center"><small>Direccion Ejecutiva de Comercio y Suministro</small></h4>';
echo '      </td>';
echo '  </tr>';
echo '  <tr>';
echo '      <td>';
/*echo '      </td>';
echo '  </tr>';
echo '  <tr>';
echo '      <td>';*/
echo '          <h2 class="text-center">Empresa Nacional de Transporte</h2>';
echo '          <h4 class="text-center"><i>Ficha Técnica de Chuto</i></h4>';
echo '      </td>';
echo '  </tr>';
echo '';
echo '</table><br><br><br><br><br>';


    include_once("../config/init.php");

    $id = $_GET['id'];

    $resultado_listado = Chuto::listar_chuto_byid($id);

    if ($resultado_listado == true) {

        foreach ($resultado_listado as $row) {

        echo "<table align='center' class='table'>";
            echo "<thead>";

            echo "<tr>
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
                echo '<th class="text-center" scope="row">' . $row->id_chuto . '</th>';
                echo "<td class='text-center'>" . $row->placa_chuto . "</td>";
                echo "<td class='text-center'>" . $row->placa_nueva_chuto . "</td>";
                echo "<td class='text-center'>" . $row->serial_carroceria_chuto . "</td>";
                echo "<td class='text-center'>" . $row->serial_motor_chuto . "</td>";
                echo "<td class='text-center'>" . $row->marca_chuto . "</td>";
                echo "<td class='text-center'>" . $row->tipo_chuto . "</td>";
                echo "</tr>";
            echo "</tbody>";
        echo "</table><br><br>";

        echo "<table align='center' class='table'>";
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

        echo "</table><br><br><br>";

        echo '<table style="border: solid 1px #D51C28">';
        echo '  <tr>';

        if(file_exists('../img/chuto/placa/' . $row->id_chuto . '_placa.png')) {

        echo '      <td>';
        echo '          <h4>Foto de la Placa</h4>';
        echo '          <hr>';
        echo '          <img src="../img/chuto/placa/' . $row->id_chuto . '_placa.png" alt="Logo" width=350 />';
        echo '      </td>';
        
        }
        
        if(file_exists('../img/chuto/serial_carroceria/' . $row->id_chuto . '_serial_carroceria.png')) {

        echo '      <td>';
        echo '          <h4>Foto del Serial de Carroceria</h4>';
        echo '          <hr>';
        echo '          <img src="../img/chuto/serial_carroceria/' . $row->id_chuto . '_serial_carroceria.png" alt="Logo" width=350 />';
        echo '      </td>';
        
        }

        echo '  </tr>';
        echo '</table>';

            echo '<table style="border: solid 1px #D51C28">';
        echo '  <tr>';

        if(file_exists('../img/chuto/serial_motor/' . $row->id_chuto . '_serial_motor.png')) {

        echo '      <td>';
        echo '          <h4>Foto del Serial de Motor</h4>';
        echo '          <hr>';
        echo '          <img src="../img/chuto/serial_motor/' . $row->id_chuto . '_serial_motor.png" alt="Logo" width=350 />';
        echo '      </td>';
        
        }

        echo '  </tr>';
        echo '</table>';

        }
    }
    ?>
</page>