<?php
	class AgendaDAO extends Conexao
	{
		function __construct()
		{
			parent:: __construct();
		}


		function mostrarTudo()
		{
			$cmd = "SELECT * FROM agenda";
			$stm = $this->db->prepare($cmd);
			$stm->execute();
			$this->db = null;
			$retorno = $stm->fetchAll(PDO::FETCH_OBJ);
			return $retorno;
		}
		
		function mostrarUm($id)
		{
			$sql = "SELECT * FROM agenda WHERE id_contato=?";
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $id->getId());
			$stm->execute();
			$this->db = null;
			$retorno = $stm->fetchAll(PDO::FETCH_OBJ);
			return $retorno;
			
		}

		function inserir($agenda)
		{
			$cmd = "INSERT INTO agenda (id_contato,nome,telefone,celular,nome_rua,numero_casa,nome_bairro,cidade,estado) VALUES(?,?,?,?,?,?,?,?,?)";
			
			$stm = $this->db->prepare($cmd);
			$stm->bindValue(1, $agenda->getId());
			$stm->bindValue(2, $agenda->getNome());
			$stm->bindValue(3, $agenda->getTelefone());
			$stm->bindValue(4, $agenda->getCelular());
			$stm->bindValue(5, $agenda->getNomeRua());
			$stm->bindValue(6, $agenda->getNumeroCasa());
			$stm->bindValue(7, $agenda->getNomeBairro());
			$stm->bindValue(8, $agenda->getCidade());
			$stm->bindValue(9, $agenda->getEstado());

			$stm->execute();
			$this->db = null;
		}
		
		function excluir($id)
		{
			$cmd = "DELETE FROM agenda WHERE id_contato = ?";
			$stm = $this->db->prepare($cmd);
			$stm->bindValue(1, $id->getId());
			$stm->execute();
			$this->db = null;
		}

		function att($contato)
		{
			$cmd = "UPDATE agenda SET  nome = ?, telefone = ?, celular = ?, nome_rua = ?, numero_casa = ?, nome_bairro = ?, cidade = ?, estado = ? WHERE id_contato = ?";
			
			$stm = $this->db->prepare($cmd);

			$stm->bindValue(1, $contato->getNome());
			$stm->bindValue(2, $contato->getTelefone());
			$stm->bindValue(3, $contato->getCelular());
			$stm->bindValue(4, $contato->getNomeRua());
			$stm->bindValue(5, $contato->getNumeroCasa());
			$stm->bindValue(6, $contato->getNomeBairro());
			$stm->bindValue(7, $contato->getCidade());
			$stm->bindValue(8, $contato->getEstado());
			$stm->bindValue(9, $contato->getId());
			$stm->execute();
			$this->db=null;

		}



	}
?>