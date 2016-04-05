<?php

	$e = $_POST['elegido'];
	if($e === 'A'){
		echo "<select name='id_conductor_estado_child' class='select form-control' required>
				<option value=''>
					Seleccione
				</option>
				<option value='ACH'>
					Choferes en reserva
				</option>
				<option value='APR'>
					Programación del día
				</option>
				<option value='ADE'>
					Descargando o Retornando de viaje
				</option>
			</select>
			<span class='help-block' id='hint_id_conductor_estado_child'>
				Ingrese el Estatus del Conductor
			</span>";
	}elseif ($e === 'B') {
		echo "<select name='id_conductor_estado_child' class='select form-control' required>
				<option value=''>
					Seleccione
				</option>
				<option value='BVA'>
					Vacaciones
				</option>
				<option value='BCO'>
					Compensatorio
				</option>
				<option value='BPE'>
					Permiso de ausencia
				</option>
				<option value='BAP'>
					Apoyo a distrito / Sede
				</option>
				<option value='BEC'>
					Ecor
				</option>
				<option value='BRE'>
					Reposo
				</option>
				<option value='BIN'>
					Inhabilitado Medicamente
				</option>
				<option value='BTR'>
					Trabajo Adecuado
				</option>
				<option value='BAD'>
					Adiestramiento
				</option>
				<option value='BEJ'>
					Ejerciendo otro cargo
				</option>
				<option value='BOT'>
					Otros
				</option>
			</select>
			<span class='help-block' id='hint_id_conductor_estado_child'>
				Ingrese el Estatus del Conductor
			</span>";
	}
	else {
		echo "<span class='help-block' id='hint_id_conductor_estado_child'>
			Ingrese el Estatus del Conductor
			</span>";
	}
?>