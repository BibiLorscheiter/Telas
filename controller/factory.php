<?php
class Servidor{
	
	private $host     = "localhost";
	private $tipo     = "mysql";
	private $login    = "root";
	private $senha 	  = "";
	private $database = "photoshoot";
	private $conecta  = NULL;

	
	public function Conexao(){
		try{
		$this->conecta = new PDO($this->tipo.":host=".$this->host.";dbname=".$this->database,$this->login,$this->senha);
		return $this->conecta;
		}catch(PDOException $error){echo $error->getMessage();}
	}
	public function Desconecta(){
		if($this->conecta !== NULL){
		   $this->conecta = NULL;
		}
	}	
}
?>