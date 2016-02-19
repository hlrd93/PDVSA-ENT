<?php 

class Chuto {
	
	public function listar_chutos()
	{
		global $database;
		$sql = "SELECT * FROM chuto INNER JOIN sede ON sede.id_sede = chuto.id_sede_chuto INNER JOIN chuto_estado ON chuto_estado.id_chuto_estado = chuto.id_chuto_estado";
		$resultado_listado = $database->query($sql);
		return $resultado_listado;
	}

	public function registrar_chuto()
	{
		global $database;
		$sql = "";
		$resultado_listado = $database->query($sql);
		return $resultado_listado;
	}
}

?>