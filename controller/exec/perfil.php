<?php 

	$conn = @mysql_connect("localhost", "root", "") or die ("Problemas na conexão.");
	$db = @mysql_select_db("photo", $conn) or die ("Problemas na conexão");
 
	if ($_POST['cadastrar']) {
		$foto = $_FILES["foto"];
		
		if (!empty($foto["name"])) {
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
			$dimensoes = getimagesize($foto["tmp_name"]);
			$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
	
			$caminho_imagem = "fotos/" . $nome_imagem;
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
	
			$sql = mysql_query("INSERT INTO usuario (imagem_usuario) VALUES ('".$nome_imagem."'");
	
			if ($sql){
				echo "Você foi cadastrado com sucesso.";
			}
		}
	}
?>