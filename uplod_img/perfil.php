<?
class Cadastro{
	
	public $foto;
	public $descricao;	

	public function Post(){
	
		$this->foto		   = $_FILES['foto']['name'];
		$this->descricao   = $_POST['descricao'];
		
	}
	
	public function Imagem(){
	
	   $obj = new Servidor();
	   $con = $obj->Conexao();	
	   
	   $i=0;
		do{
			if($i){
				$this->foto = "({$i})".$this->foto;
				$arquivo 	= '../'.DEFAULT_URL.'img/perfil/'.$this->foto;
			}else{	
				$arquivo 	= '../'.DEFAULT_URL.'img/perfil/'.$this->foto;
			}
		$i++;
		}while(file_exists($arquivo));
		$move = move_uploaded_file($_FILES['foto']['tmp_name'],$arquivo);
		
	   
	   $insert = $con->prepare(
		"
		INSERT INTO perfil
		(p_img,p_descricao)
		VALUES
		(:img,:descricao)
		"
		);
		$insert->bindValue(":img",$this->foto,PDO::PARAM_STR);
		$insert->bindValue(":descricao",$this->descricao,PDO::PARAM_STR);

    	if($insert->execute() == true){
		
		print'
		
		<iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"><script language="javascript" type="text/javascript">
 
window.top.window.stopUpload(<?php echo $result; ?>);
 
</script></iframe>
		
		';
		
		}
	   
	     
	   
	
	}

}
	
$class = new Cadastro;

?>