<?
class Cadastro{
	
	public $nome;
	public $sobrenome;
	public $login;
	public $senha;
	

	public function Post(){
	
		$this->nome		   = $_POST['nome'];
		$this->sobrenome   = $_POST['sobrenome'];
		$this->login	   = $_POST['usuario'];
		$this->senha	   = $_POST['senha'];
		$this->confirma	   = $_POST['confirmacao'];
		
	}
	
	public function Cadastrar(){
	
	   $obj = new Servidor();
	   $con = $obj->Conexao();
	   
	   $insert = $con->prepare(
		"
		INSERT INTO cadastro
		(c_nome,c_sobrenome,c_login,c_senha)
		VALUES
		(:nome,:sobrenome,:login,:senha)
		"
		);
		$insert->bindValue(":nome",$this->nome,PDO::PARAM_STR);
		$insert->bindValue(":sobrenome",$this->sobrenome,PDO::PARAM_STR);
		$insert->bindValue(":login",$this->login,PDO::PARAM_STR);
		$insert->bindValue(":senha",$this->senha,PDO::PARAM_STR);
		
    	if($insert->execute() == true){
		
		  print'
		  	<script type="text/javascript">
				location.href="perfil";
			</script>
		  ';
		 
		}

	}

}
	
$class = new Cadastro;

?>