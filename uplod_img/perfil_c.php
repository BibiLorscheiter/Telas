<? include head; ?>

<? if(isset($_POST['cadastrar'])){$post = $class->Post(); $cadastro = $class->Cadastrar(); }?>
<div id="conteudo">
		<!-- Caixa da esquerda -->
		<div id="cesquerda">
			<img src="<? echo DEFAULT_URL.IMG.""; ?>avatar.png">
		</div>
		
		<!-- Caixa da direita -->
		<div id="cdireita">
			<!-- Barra com título e botão de login -->
			<div id="barra-titulo">
				<div id="titulo-texto">
					<div id="titulo"></div>
				</div>
				<div id="titulo-login"><a class="botao" id="botao-login" href="#">Upload</a></div>
				<div class="clear"></div>
			</div>
			
			<!-- Breve descrição -->
            <form action="upload.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();" >
			<div id="descricao">
				<p>Escolha sua foto:</p>
				<p><input name="foto" type="file" /></p>
				<p>Descrição:</p>
				<p><textarea name="descricao" cols="35"></textarea></p>
                <p><input type="submit" name="cadastrar" value="Concluir" /></p>
			</div>
            </form>
            
		</div>
		<div class="clear"></div>
	</div>
    

<? include foot; ?>