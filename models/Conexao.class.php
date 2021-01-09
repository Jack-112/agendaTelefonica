<?php
abstract class Conexao
{
	protected $db;
		
	function __construct()
	{
			
			
		$parametros = "mysql:host=localhost;dbname=agenda;charset=utf8mb4";
			
			
			
		$this->db = new PDO($parametros, "root", "");
	}
}

?>