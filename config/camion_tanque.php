<?php 

class CamionTanque {
	
	public function listar_camiontanque()
	{
		global $database;
		$sql = "SELECT * FROM camion_tanque INNER JOIN sede ON sede.id_sede = camion_tanque.id_sede_camion_tanque INNER JOIN camion_tanque_estado ON camion_tanque_estado.id_camion_tanque_estado = camion_tanque.id_camion_tanque_estado";
		$resultado_listado = $database->query($sql);
		return $resultado_listado;
	}
}

?>