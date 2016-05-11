<?php 

class Pizarra {

	public $nro_chuto;
	public $nro_cisterna;
	public $nro_conductor;

	public function nro_chuto ()
	{
		global $database;

        $sql = "SELECT id_chuto FROM chuto";
        
        $resp = $database->query($sql);

        $x = $resp->num_rows;
        
    	$this->nro_chuto = $x;
	}

	public function nro_cisterna ()
	{
		global $database;

        $sql = "SELECT id_cisterna FROM cisterna";
        
        $resp = $database->query($sql);

        $x = $resp->num_rows;
        
        $this->nro_cisterna = $x;
	}

	public function nro_conductor ()
	{
		global $database;

        $sql = "SELECT id_conductor FROM conductor";
        
        $resp = $database->query($sql);

        $x = $resp->num_rows;
        
        $this->nro_conductor = $x;
	}
}