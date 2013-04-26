<? include head; ?>
	
    <!-- Principal -->
	<div id="conteudo">
		<!-- Caixa da esquerda -->
		<div id="cesquerda">
			 <img src="<? echo DEFAULT_URL.IMG.""; ?>Logo.png" alt="" />
		</div>
		
		<!-- Caixa da direita -->
		<div id="cdireita">
		
			<!-- Form login organizar -->
			<form id="frm" name="frm" method="post" action="/loginprocess" enctype="multipart/form-data">
	    		<div class="loginEmail">
	                <label for="loginEmail">E-mail: </label>
	                <input type="text" name="loginEmail" id="loginEmail" maxlength="50"/>
	            </div>            
	            <div class="loginSenha">
	                <label for="loginSenha" id="loginSenhaLabel">Senha: </label>
	                <input type="password" name="loginSenha" id="loginSenha" maxlength="20"/>
	            </div>
	            <input id="btnAcessar" type="button" value="Acessar"/>	            
	    	</form>
		
			<!-- Barra com título e botão de login -->
			<div id="barra-titulo">
				<div id="titulo-texto">
					<div id="titulo"><a href="cadastro">Quero me cadastrar</a></div>
				</div>
				<div id="titulo-login"><a id="botao-login" href="#">Entrar</a></div>
				<div class="clear"></div>
			</div>
			
			<!-- Breve descrição -->
			<div id="descricao">
				<p>O Photoshoot é uma rede social que permite o compartilhamento de fotos entre seus amigos e conhecidos. Tire uma foto, publique no photoshoot e compartilhe os seus melhores momentos.</p>
				<p>Ah é, mencionamos que é de graça? Junte-se a nós!</p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	
	<footer>
		<ul>
			<li><a href="#">Sobre nós</a></li>
			<li><a href="#">Suporte</a></li>
			<li><a href="#">Privacidade</a></li>
			<li><a href="#">Termos</a></li>
			<li><a href="#">Desenvolvedores</a></li>
			<li>&copy; 2013 Photoshoot</li>
		</ul>
	</footer>
	
</body>
</html>