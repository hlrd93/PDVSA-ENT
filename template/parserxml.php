<?php 
	$unidades = simplexml_load_file("./Reporte_de_Alarmas_Desde_28_01_2016_0000_Hasta_29_01_2016_0000.xml");

	foreach ($unidades -> registro as $row) {
		
		$placa = $row -> pla_veh;
		echo $placa."<br>";
	}

 ?>