<?php

try {
	if (getParam("logout") == 1) {
		unset($_SESSION["dadosLogin"]);
		JS::redirect("/cadastroimprensa", "window");
	} else {
		// Valor dos campos da tela
		$email = getParam("loginEmail");
		$senha = getParam("loginSenha");
		// Valida os campos que são obrigatórios
		if (empty($email)) {
			throw new Exception('E-mail não informado.', 1);
		}
		if (empty($senha)) {
			throw new Exception('Senha não informada.', 1);
		}
		// Consulta os dados
		$sql = "SELECT COUNT (*) FROM USUARIO WHERE EMAIL_USUARIO = "."'" . $email ."'";
		$sql .= " SENHA_USUARIO = "."'" . $senha ."' ";
	
		$retorno = new query($conn, $sql);
		// Verifica se os dados são verdadeiros
		if ($retorno->numrows() == 1) {
			$retorno->getrow();		
			// Cria sessão dos dados do login
			$_SESSION["dadosLogin"]["codUsuario"] = $retorno->field("ID_USUARIO");
			$_SESSION["dadosLogin"]["email"] = $email;
			$_SESSION["dadosLogin"]["senha"] = $senha;			
		} else {
			throw new Exception('E-mail ou senha inválida.', 1);
		}	
	}	
} catch (Exception $e) {
    //TODO Excessao
}
