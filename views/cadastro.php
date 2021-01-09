<?php

	if($_POST)
		{
			$erro = 0;
			if($_POST["nome"] == "")
			{
				echo "<script>alert('Preencha o Nome do contato')</script>";
				
				$erro++;
			}
			if($_POST["telefone"] == "")
			{
				echo "<script>alert('Preencha o Telefone do contato ')</script>";
				$erro++;
			}
			if($_POST["celular"] == "")
			{
				echo "<script>alert('Preencha o Celular do contato ')</script>";
				$erro++;
			}
			if($_POST["nome_rua"] == "")
			{
				echo "<script>alert('Preencha o nome da Rua')</script>";
				$erro++;
			}
			if($_POST["numero_casa"] == "")
			{
				echo "<script>alert('Preencha o Número da casa')</script>";
				$erro++;
			}
			if($_POST["nome_bairro"] == "")
			{
				echo "<script>alert('Preencha o nome do Bairro')</script>";
				$erro++;
			}
			if($_POST["cidade"] == "")
			{
				echo "<script>alert('Preencha o nome da Cidade')</script>";
				$erro++;
			}
			if($_POST["estado"] == "")
			{
				echo "<script>alert('Preencha a sigla do Estado')</script>";

				$erro++;

			}
				
			if($erro == 0)
			{
			require_once "../models/Conexao.class.php";
			
			require_once "../models/Agenda.class.php";
			require_once "../models/AgendaDAO.class.php";

			   
			   $contato = new Agenda($_POST["id_contato"],$_POST["nome"], $_POST["telefone"], $_POST["celular"], $_POST["nome_rua"], $_POST["numero_casa"], $_POST["nome_bairro"], $_POST["cidade"], $_POST["estado"]);
		   
			   $agendaDAO = new AgendaDAO();
			   $agendaDAO->inserir($contato);
			  header("location:lista_cadastros.php");

			}
		}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro</title>
		<link rel="stylesheet" type="text/css" href="../models/format.css">			
		<script type="text/javascript">
				function onlynumber(evt) {
  			 var theEvent = evt || window.event;
  			 var key = theEvent.keyCode || theEvent.which;
  			 key = String.fromCharCode( key );
		 	 //var regex = /^[0-9.,]+$/;
		 	 var regex = /^[0-9.]+$/;
 			 if( !regex.test(key) ) {
 		     theEvent.returnValue = false;
   			 if(theEvent.preventDefault) theEvent.preventDefault();
 			  }
			}

		</script>
	</head>
	<body>


		<form action="#" method="POST"> 
			<div>
				<label class="texto">Nome:</label>
				<input class="inp" type="text" id="nome" name="nome"  >
			</div>
			<div>
				<label class="texto">Telefone:</label>
				<input onkeypress="return onlynumber();" class="inp" type="text" id="telefone" name="telefone">
			</div>
			<div>
				<label class="texto">Celular:</label>
				<input onkeypress="return onlynumber();"class="inp" type="text" id="celular" name="celular">
			</div>
			<div>
				<label class="texto">Rua:</label>
				<input class="inp" type="text" id="nome_rua" name="nome_rua" >
			</div>
			<div>
				<label class="texto">Nº:</label>
				<input class="inp" type="text" id="numero_casa" name="numero_casa" >
			</div>
			<div>
				<label class="texto">Bairro:</label>
				<input class="inp" type="text" id="nome_bairro" name="nome_bairro" >
			</div>
			<div>
				<label class="texto">Cidade:</label>
				<input class="inp" type="text" id="cidade" name="cidade" >
			</div>
			<?php
				require_once "../models/estado.php";
			?>
			
			<br><button>Cadastrar</button>
			</form>
	</body>
</html>