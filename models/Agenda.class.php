<?php
class Agenda
{
	private $id;
	private $nome;
	private $telefone;
	private $celular;
	private $nome_rua;
	private $numero_casa;
	private $nome_bairro;
	private $cidade;
	private $estado;
	function __construct($id=null,$nome=null,$telefone=null,$celular=null,$nome_rua=null,$numero_casa=null,$nome_bairro=null,$cidade=null,$estado=null)
	{
		$this-> id        	=$id;
		$this-> nome        = $nome;
		$this-> telefone    = $telefone;
		$this-> celular     = $celular;
		$this-> nome_rua    = $nome_rua;
		$this-> numero_casa = $numero_casa;
		$this-> nome_bairro = $nome_bairro;
		$this-> cidade 	  	= $cidade;
		$this-> estado      = $estado;
	}//fim construct

	//metodos gets

	function getId()
	{
		return $this-> id;
	}
	function getNome()
	{
		return $this-> nome;
	}
	
	function getTelefone()
	{
		return $this-> telefone;
	}
	
	function getCelular()
	{
		return $this-> celular;
	}
	
	function getNomeRua()
	{
		return $this-> nome_rua;
	}
	
	function getNumeroCasa()
	{
		return $this-> numero_casa;
	}
	
	function getNomeBairro()
	{
		return $this-> nome_bairro;
	}
	
	function getCidade()
	{
		return $this-> cidade;
	}
	
	function getEstado()
	{
		return $this-> estado;
	}

	//metodos sets

	function setNome($nome)
	{
		$this-> nome = $nome;
	}
	
	function setTelefone($telefone)
	{
		$this-> telefone = $telefone;
	}

	function setCelular($celular)
	{
		$this-> celular = $celular;
	}
	
	function setNomeRua($nome_rua)
	{
		$this-> nome_rua = $nome_rua;
	}
	
	function setNumeroCasa($numero_casa)
	{
		$this-> numero_casa = $numero_casa;
	}
	
	function setNomeBairro($nome_bairro)
	{
		$this-> nome_bairro = $nome_bairro;
	}
	
	function setCidade($cidade)
	{
		$this-> cidade = $cidade;
	}
	
	function setEstado($estado)
	{
		$this-> estado = $estado;
	}

}

?>