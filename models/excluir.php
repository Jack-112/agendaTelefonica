<?php
	if($_GET)
	{
			require_once "../models/Conexao.class.php";
			require_once "../models/Agenda.class.php";
			require_once "../models/AgendaDAO.class.php";
			
		$delet = new Agenda($_GET["id"]);
		$agendaDAO = new AgendaDAO();
		$agendaDAO->excluir($delet);
		header("location:../views/lista_cadastros.php");

	}
?>
