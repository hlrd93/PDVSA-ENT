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
echo '          <h2 class="text-center">Empresa Nacional de Transporte</h2>';
echo '          <h4 class="text-center"><i>Ficha Técnica de Conductor</i></h4>';
echo '      </td>';
echo '  </tr>';
echo '';
echo '</table><br><br><br><br>';


    include_once("../config/init.php");

    $id = $_GET['id'];

    $resultado_listado = Conductor::listar_conductor_byid($id);

    if ($resultado_listado == true) {

        foreach ($resultado_listado as $row) {

        echo "<table align='center' class='table'>";
            echo "<thead>";

            echo "<tr>
                <th class='text-center'>#</th>
                <th class='text-center'>Cedula</th>
                <th class='text-center'>Nombre</th>
                <th class='text-center'>Apellido</th>
                </tr>";
            echo "</thead>";

            echo "<tbody>";
                echo "<tr>";
                echo '<th class="text-center" scope="row">' . $row->id_conductor . '</th>';
                echo "<td class='text-center'>" . $row->cedula_conductor . "</td>";
                echo "<td class='text-center'>" . $row->nombre_conductor . "</td>";
                echo "<td class='text-center'>" . $row->apellido_conductor . "</td>";
                echo "</tr>";
            echo "</tbody>";
        echo "</table><br><br>";

        echo "<table align='center' class='table'>";
            echo "<thead>";
            echo "<tr>
                <th class='text-center'>Fecha de Certificacion</th>
                <th class='text-center'>Sede</th>
                <th class='text-center'>Estado</th>
                <th class='text-center'>Especificacion</th>
                </tr>";
            echo "</thead>";

            echo "<tbody>";
                echo "<tr>";
                echo "<td class='text-center'>" . $row->fecha_conductor . "</td>";
                echo "<td class='text-center'>" . $row->nombre_sede . "</td>";
                echo "<td class='text-center'>" . $row->nombre_estado . "</td>";
                echo "<td class='text-center'>" . $row->nombre_especificacion . "</td>";
                echo "</tr>";
            echo "</tbody>";

        echo "</table><br><br><br>";

        echo '<table align="center" style="border: solid 1px #D51C28">';
        echo '  <tr>';

        if(file_exists('../img/conductor/carnet/' . $row->id_conductor . '_carnet.png')) {

        echo '      <td>';
        echo '          <h4>Foto del Carnet</h4>';
        echo '          <hr>';
        echo '          <img src="../img/conductor/carnet/' . $row->id_conductor . '_carnet.png" alt="Logo" width=300 />';
        echo '      </td>';
        
        }
        
        if(file_exists('../img/conductor/cedula/' . $row->id_conductor . '_cedula.png')) {

        echo '      <td>';
        echo '          <h4>Foto de la Cedula de Identidad</h4>';
        echo '          <hr>';
        echo '          <img src="../img/conductor/cedula/' . $row->id_conductor . '_cedula.png" alt="Logo" width=300 />';
        echo '      </td>';
        
        }

        echo '  </tr>';
        echo '</table>';

        echo '<table align="center" style="border: solid 1px #D51C28">';
        echo '  <tr>';

        if(file_exists('../img/conductor/certificado_medico/' . $row->id_conductor . '_certificado_medico.png')) {

        echo '      <td>';
        echo '          <h4>Foto del Certificado Medico</h4>';
        echo '          <hr>';
        echo '          <img src="../img/conductor/certificado_medico/' . $row->id_conductor . '_certificado_medico.png" alt="Logo" width=300 />';
        echo '      </td>';
        
        }

        if(file_exists('../img/conductor/licencia/' . $row->id_conductor . '_licencia.png')) {

        echo '      <td>';
        echo '          <h4>Foto de la Licencia</h4>';
        echo '          <hr>';
        echo '          <img src="../img/conductor/licencia/' . $row->id_conductor . '_licencia.png" alt="Logo" width=300 />';
        echo '      </td>';
        
        }

        echo '  </tr>';
        echo '</table>';

        }
    }
    ?>
</page>