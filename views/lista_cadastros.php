<!DOCTYPE html>
<html>
	<head>
		<title>Lista de cadastrados</title>
		<link rel="stylesheet" type="text/css" href="../models/format.css">			

	</head>
	<body>
		<table>
			<tr>
				<td class="cor">Nome</td>
				<td class="cor">Telefone</td>
				<td class="cor">Celular</td>
				<td class="cor">Rua</td>
				<td class="cor">Nº</td>
				<td class="cor">Bairro</td>
				<td class="cor">Cidade</td>
				<td class="cor">Estado</td>
				<td class="cor" colspan="2">Editar/Excluir</td>
				
			</tr>

		
		<?php
				require_once "../models/Conexao.class.php";
				require_once "../models/AgendaDAO.class.php";

			$agendaDAO = new AgendaDAO();
			$buscar = $agendaDAO->mostrarTudo();

					
			foreach($buscar as $dado)
			{
				echo "<tr>";

				echo "<td>{$dado->nome}</td>";
				echo "<td>{$dado->telefone}</td>";
				echo "<td>{$dado->celular}</td>";
				echo "<td>{$dado->nome_rua}</td>";
				echo "<td>{$dado->numero_casa}</td>";
				echo "<td>{$dado->nome_bairro}</td>";
				echo "<td>{$dado->cidade}</td>";
				echo "<td>{$dado->estado}</td>";	
				echo "<td class='ee'><a class='lin' href='att.php?id={$dado->id_contato}'>Editar</a></td>";
				echo "<td class='ee'><a class='lin' href='../models/excluir.php?id={$dado->id_contato}'>Excluir</a></td>";
				echo"</tr>";
			}
		?>
		</table><br>
		<button><a href="cadastro.php">Cadastrar</a></button>
	</body>
</html>