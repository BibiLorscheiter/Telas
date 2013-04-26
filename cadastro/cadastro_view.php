<? include head; ?>
	
    <!-- Principal -->
	<div id="conteudo"> <div id="barra_titulo"></div>
		<!-- Caixa da esquerda -->
		<div id="cad_esquerda">
			 <a href="inicio"><img src="<? echo DEFAULT_URL.IMG.""; ?>Logo_cadastro.png" alt="" /></a>
		</div>
		<div id="cad_direita">
        <a href="inicio"><img src="<? echo DEFAULT_URL.IMG.""; ?>photos.png" alt="" /></a>
        </div>
		
		<? if(isset($_POST['cadastro'])){$post = $class->Post(); $cadastro = $class->Cadastrar(); }?>
        
		<div class="clear"></div>
        <div id="barra-titulo"></div>

        <div id="cdireita">
                <div id="cadastro">
                <div class="titulo_c">Cadastre-se</div>
                <div class="texto_c">Registe-se gratuitamente e compartilhe<br>seus momentos!</div>
                  <div class="engloba_form">
                   <form id="form" method="post" action="" enctype="multipart/form-data">
                        Nome<br> 
                        <input type="text" autocomplete="off" name="nome" class="campo_1"  value="Nome" onfocus="if(this.value='Nome') this.value='';" onBlur="if(this.value=='') this.value='Nome';">
                        <input type="text" autocomplete="off" name="sobrenome" class="campo_1" value="Sobrenome" onfocus="if(this.value='Sobrenome') this.value='';" onBlur="if(this.value=='') this.value='Sobrenome';">
                        <br>Login<br>
                        <input type="text" autocomplete="off" name="usuario" class="campo_1">
                        <br>Crie uma senha<br>
                        <input type="password" autocomplete="off" name="senha" class="campo_2">
                        <br>Confirme sua senha<br>
                        <input type="password" autocomplete="off" name="confirmacao" class="campo_2">
                       
                        <input type="submit" name="cadastro" id="botao_cadastro" value="Continuar" onclick="return validar();">
                    </form>
                  </div>  
                </div>
          </div>
          <div id="cdireita">
                <div id="cadastro">
                <div class="titulo_c">Login</div>
                <div class="texto_c">Já tem uma conta e só quer entrar?</div>
                  <div class="direita_login">
                    <div id="barra-titulo">
				<div id="titulo-texto">
                
					<form method="post" action="">
                      <input type="text" autocomplete="off" name="login" class="login" value="Login" onfocus="if(this.value='Login') this.value='';" onBlur="if(this.value=='') this.value='Login';">
                      <input type="text" autocomplete="off" name="senha" class="login" value="Senha" onfocus="if(this.value='Senha') this.value='';" onBlur="if(this.value=='') this.value='Senha'">
                      <input type="button" name="entrar" id="botao_login" value="Entrar">
                    </form>
				</div>
				
				<div class="clear"></div>
			</div>
            O Photoshoot é uma rede social que permite o compartilhamento de fotos entre seus amigos e conhecidos. Tire uma foto, publique no photoshoot e compartilhe os seus melhores momentos.	</div>
                </div>
          </div>
          <div class="clear"></div>
	</div>
    
	
<? include foot; ?>