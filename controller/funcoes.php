<?
  function retirar_acentos($string){
	$string = preg_replace("[^a-zA-Z0-9_.]", "", strtr($string, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC_"));
	return $string;
  }  
  function mensagem($mensagem){
	print'
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	  $("#msg", top.document).html("*'.$mensagem.'");
	  $("#msg", top.document).show();
	});
	</script>
	';
  }
  function direciona($local){
	print'
	<script type="text/javascript">
	window.location.href="'.$local.'";
	</script>
	';
  }  
  
  function teste($valordeteste){
	 
	print'
	<script type="text/javascript">
	alert("'.$valordeteste.'");
	</script>
	';	 
	  
  }

  function heaD($atual){
	  
	  if($atual == "inicio" && $atual != "fiquepordentro"){

	  
		  return print'
		  <meta property="og:site_name" content="AGRESTE TEX" />
		  <meta property="og:title" content="AGRESTE TEX" />
		  <meta property="og:image" content="'.DEFAULT_URL.IMG.'img/foto_empresa.jpg" />
		  <meta name="description" content="Feria, Ropas, Industria Textil, Máquinas de Coser, Bordadores, Adornos, Seminario, Marzo, Brasil
Brazil, Fair, Clothing, Garment, Denim, Seam, Textile Industry, Sewing, Sewing Machine, Embroiderers, Cutting Machines, Notions,  Seminar, Exhibitors, March
Brasile, Fiera, Abbigliamento, Indumento, Cucitura, Industria Tessile, Macchine da Cucire, Ricamatrici, Macchine da Taglio, Trim, Espositori
Brésil, Juste, Vêtements, Couture, Industrie Textile, Machines à Coudre, Brodeuses, Machines de Découpe, Garnitures, Séminaire, Mars
" />
		  <meta name="keywords" content="Agreste Tex, Caruaru, Pernambuco, Agreste, Polo Comercial de Caruaru, Feira, Confecções, Roupas, Jeans, Costura, Indústria Têxtil, Máquinas de Costura, Bordadeiras, Máquinas de Corte, Aviamentos, FCEM, ACIC, Seminário, Expositores, Março Feria, Ropas, Industria Textil, Máquinas de Coser, Bordadores, Adornos, Seminario, Marzo, Brasil
Brazil, Fair, Clothing, Garment, Denim, Seam, Textile Industry, Sewing, Sewing Machine, Embroiderers, Cutting Machines, Notions,  Seminar, Exhibitors, March
Brasile, Fiera, Abbigliamento, Indumento, Cucitura, Industria Tessile, Macchine da Cucire, Ricamatrici, Macchine da Taglio, Trim, Espositori
Brésil, Juste, Vêtements, Couture, Industrie Textile, Machines à Coudre, Brodeuses, Machines de Découpe, Garnitures, Séminaire, Mars" />
		  
		  ';
		  
	  }
		
	  if($atual == "fiquepordentro"){
		  
	  	$obj = new Servidor();
		$con = $obj->Conexao();	
		
		$sel = $con->prepare(
		"
		SELECT * FROM v_noticias WHERE n_id = :id
		"
		);
		$sel->bindValue(":id",Url::retornaId(Url::getUrl( 1 )),PDO::PARAM_INT);
		$sel->execute();
		while($dados = $sel->fetchObject()){
	  
		  return print'
		  <meta property="og:site_name" content="VITÓRIA - LOGÍSTICA" />
		  <meta property="og:title" content="'.$dados->n_titulo.'" />
		  <meta property="og:image" content="'.DEFAULT_URL.IMG.'img_noticia/'.$dados->n_foto.'" />
		  <meta name="description" content="" />
		  <meta name="keywords" content="'.$dados->n_resumo.'" />
		  
		  ';
		}
	  
	  }
  }
   
?>